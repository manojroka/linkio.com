/* Global */
var seoFilters = {
	search: '',
	type: [],
	price: [],
	sort: ''
};
var seoToolsResults = [];
var seoToolQuickTemplate, seoToolFullTemplate;
	
// var ajaxUrlSubmitNewTool = '/wp-content/themes/toolslist/seo-tools/ajax/submit-new-tool.php';
// var ajaxUrlUpvote = '/wp-content/themes/toolslist/seo-tools/ajax/upvote.php';

var ajaxUrlSubmitNewTool = '/wp-content/themes/outreachmama/seo-tools/ajax/submit-new-tool.php';
var ajaxUrlUpvote = '/wp-content/themes/outreachmama/seo-tools/ajax/upvote.php';


/* Utils */
function arrayHasOne(source, target) {
    var result = source.filter(function(item){ return (target.indexOf(item) > -1) });
    return (result.length > 0);
}
function compareValues(key, order = 'asc') {
	return function(a, b) {
		if(!a.hasOwnProperty(key) || !b.hasOwnProperty(key))
			return 0; // property doesn't exist on either object

		let propA = a[key];
		let propB = b[key];
		
		if(key == 'name') { // Compare same case strings only
			propA = propA.toLowerCase();
			propB = propB.toLowerCase();
		}

		let comparison = 0;
		if (propA > propB) comparison =  1;
		if (propA < propB) comparison = -1;

		return ( (order == 'desc') ? (comparison * -1) : comparison );
	};
}

function getRandomNumber(min, max) {
    return Math.floor(Math.random() * (max - min) ) + min;
}

/* Main */
$(document).ready(function(){	
	/* Tooltips */
    $('[data-toggle="tooltip"]').tooltip();   
	
	/* Generate templates */
	generateQuickTemplate();
	generateFullTemplate();

	/* Show Search Results - on load */
	// showResults();
	
	/* Seo Tools: Expand + Collapse */
	$('#seo-tools-results').on('click', '.seo-tool h2', function() {
		// Get current tool data
		$seoToolParent = $(this).parent();
		var seoTool;
		
		var toolId 		= $seoToolParent.attr('id');
		var toolIdNo 	= toolId.replace('tool', '');
		$seoToolParentId = '#' + toolId;

		// First: close any previously expanded tool (& exclude the current one)
		$previouslyExpanded = $('#seo-tools-results .seo-tool.expanded').not($seoToolParentId);
		$previouslyExpanded.find('.meta, .quick-links, .detailed-desc, h3, .tool-images, .tool-videos, .comments').hide();
		$previouslyExpanded.find('h2 a i').replaceWith('<i class="fa fa-caret-right"></i>');
		$previouslyExpanded.removeClass('expanded');

		// 1. Get data from array based on id
		var seoTool = _.find(seoTools, function (obj) { return (obj.id == toolIdNo); });

		// Now toggle expanded mode
		$seoToolParent.toggleClass('expanded');
		
		// Scroll to tool - only during expansion
		if( $seoToolParent.hasClass('expanded') ) {

			// Render full html
			renderFullTool( seoTool );
		
			$seoToolParent.find('.meta, .quick-links, .detailed-desc, h3').show();
			$seoToolParent.find('h2 a i').replaceWith('<i class="fa fa-caret-down"></i>');

			window.scroll({
				top: $seoToolParent.offset().top,
				left: 0,
				behavior: 'smooth'
			});
			
			// Show complex blocks (images/videos/comments) after scroll completed
			setTimeout(function() {
				$seoToolParent.find('.tool-images, .tool-videos, .comments').show();
			}, 400);
		} else {
			$seoToolParent.find('.meta, .quick-links, .detailed-desc, h3, .tool-images, .tool-videos, .comments').hide();
			$seoToolParent.find('h2 a i').replaceWith('<i class="fa fa-caret-right"></i>');

			// Render quick html
			renderQuickTool( seoTool );
		}
		
		// Load complex blocks (images/videos/comments) asap
		if($seoToolParent.hasClass('expanded')) {
			// # IMAGES
			$seoToolParent.find('.tool-images img').each(function( index ) {
				$(this).attr('src', $(this).data('src'));
			});
			// # YOUTUBE
			$seoToolParent.find('.tool-videos iframe').each(function( index ) {
				$(this).attr('src', $(this).data('src'));
			});

			// # DISQUS
			$disqusThread = $seoToolParent.find('.disqus_thread');
			
			// 1. Add id #disqus_thread to class .disqus_thread
			$disqusThread.attr('id', 'disqus_thread');

			// 2. And load Disqus comments ...
			cachePrefix		= 'b'; // IMPORTANT: Use this number to reset comments .. via identifier & url ... initial work used l|a
			
			toolTitle 		= $(this).text();
			toolIdentifier 	= cachePrefix + toolTitle.toLowerCase().replace(/'/g, '').replace(/ /g, '_');
			toolUrl 		= location.protocol + '//' + location.hostname + "/seo-tools/#!" + toolId;
			
			if(window.location.hostname == 'www.linkio.com')
				loadDisqus( toolIdentifier, toolUrl, toolTitle );

			// 3. Change id #disqus_thread to some random id ...
			$disqusThread.attr('id', 'disqus_thread_' + getRandomNumber(0, 10000));
		}

		// + Scroll the sidebar if needed
		// scrollSidebar();

		// loadDisqus( data.id, location.protocol + '//' + location.hostname + "/ugc-submission-" + data.id + "/", data.title );
	});	
	
	$('#search').on('keyup', function() {
		// Skip filtering when the character is only 1
		// if( $(this).val().toLowerCase().length == 1 ) return;
	
		seoFilters.search = $(this).val().toLowerCase();
		console.log( seoFilters.search );
		
		// Show results
		options = {'preventCenterTooltip': true};
		showResults(options);

		// Show clear filters icon
		$('#clear-filters').fadeIn('fast');
	});
	$('#search').on('change', function() {
		options = {};
		showResults(options);
	});
	
	$('.filter-type').on('change', function() {
		seoFilters.type = []; // Reset selection
		
		// Update selection
		$('.filter-type:checked').each(function() {
			seoFilters.type.push( $(this).val() );
		});
		
		// Show results
		options = {};
		showResults(options);

		// Show clear filters icon
		$('#clear-filters').fadeIn('fast');
	});

	$('.filter-price').on('click', function() {
		$(this).toggleClass('active');
		seoFilters.price = []; // Reset selection
		
		// Update selection
		$('.filter-price').each(function() {
			if( $(this).hasClass('active') )
				seoFilters.price.push( $(this).attr('id') );
		});
		
		// Show results
		options = {};
		showResults(options);
		$('#clear-filters').fadeIn('fast'); // Show clear filters icon
	});

	$('#sort').on('change', function() {
		seoFilters.sort = $(this).val();
	
		// Show results
		options = {};
		showResults(options);
		
		// Show clear filters icon
		$('#clear-filters').fadeIn('fast');
	});
	
	$('#add-btn button').on('click', function(e) {
		e.preventDefault();
		
		errorMsg = '';
		if( $('#name').val() == '' ) 				errorMsg += 'Please enter valid tool name.\n';
		if( $('#summary').val() == '' )				errorMsg += 'Please enter short summary for the tool.\n';
		if( $('#homepage_url').val() == 'http://' )	errorMsg += 'Please enter valid url for the tool.\n';
		
		if(errorMsg != '') {
			alert(errorMsg);
			return;
		}
		
		// For debugging
		// alert( $('#form-add-new-tool').serialize() );
		
		// Ajax functionality here ...
		$.ajax({
			type: "POST",
			url: ajaxUrlSubmitNewTool,
			data: $('#form-add-new-tool').serialize(),
			async: true,
			success: function(response) {
				// console.log(response);

				if(response == 'Success') {
					msg  = "Thank you !\n";
					msg += "Your SEO tool is successfully submitted.";
					alert( msg );
					
					$('#modal-add-new-tool').modal('hide');
				} else {
					alert( response );
				}
			},
			error: function(e) {
				alert("Ajax error: " + e);
			},
			complete: function(e) {
				// Enable the textarea
			}
		});
	});
	
	// Clear the sidebar search query + filters
	$('.seo-tools-search').on('click', '#clear-filters', function(e) {
		$('#search').val(''); // Reset search
		
		// Reset UI filters + sort
		$('.filter-type').attr('checked', false); // Uncheck type checkboxes
		$('.filter-price').removeClass('active'); // Deselect price buttons
		$('#sort').val('name:asc'); // Reset sort		
	
		// Reset array
		seoFilters = {search: '', type: [], price: [],	sort: ''};
		
		options = {};
		showResults(options);
		$(this).fadeOut('fast');
	});	
		
	$('#seo-tools-results').on('click', '.upvote', function(e) {
		e.preventDefault();
		
		// alert('Up vote ...');
		
		// Get & validate tool id
		toolId = $(this).data('tool-id');
		if( isNaN(toolId) || toolId < 1 ) return;

		// Ajax functionality here ...
		$.ajax({
			type: "POST",
			url: ajaxUrlUpvote,
			data: 'tool_id=' + toolId,
			toolVotes: $(this).find('.num-vote'),
			async: true,
			success: function(response) {
				// console.log(response);

				if(response == 'Success') {
					// alert( "Upvote accepted." );

					// Update the votes
					this.toolVotes.html( parseInt(this.toolVotes.html())+1 );
				} else {
					alert( response );
				}
			},
			error: function(e) {
				alert("Ajax error: " + e);
			},
			complete: function(e) {
				// alert("Ajax complete: " + e);
			}
		});
	});

});

/* Clear Filters */
function clearFilters() {	
	
}

function showTooltipResults() {
	$('#tooltip-results').text('Showing ' + seoToolsResults.length + ' of ' + seoTools.length).fadeIn();
}

/* Show Search Results */
function showResults(options) {
	seoToolsResults = []; // Reset number of tools
	
	/* Filter here ... */
	// console.time('filterResults');
	for( var i = 0; i < seoTools.length; i++) {
		// Filter by search query
		if(seoFilters.search.length > 0)
			if(seoTools[i].name.toLowerCase().indexOf(seoFilters.search) === -1)
				continue;

		// Filter by type
		if(seoFilters.type.length != 0)
			if( !arrayHasOne(seoTools[i].type.split(','), seoFilters.type) )
				continue;

		// Filter by price
		toolPriceArray = [seoTools[i].price];
		if(seoFilters.price.length > 0)
			if( !arrayHasOne(seoFilters.price, toolPriceArray) )
				continue;

		seoToolsResults.push( seoTools[i] ); // USED for filtering + sorting
	}
	
	// Show on-screen tooltip AFTER the filtering is completed - so we know the number of filtered results
	if(options.preventCenterTooltip)
		;
	else
		showTooltipResults();

	// For debugging
	// console.group( 'showResults()' );
	// console.log( 'seoTools.length: ' 		+ seoTools.length );
	// console.log( 'seoToolsResults.length: ' + seoToolsResults.length );
	// console.groupEnd();
	
	// console.timeEnd('filterResults');

	/* Sort here ... */
	// console.time('sortResults');
	if(seoFilters.sort.length > 0) {
		sortDirection = seoFilters.sort.split(':');

		// DO the sorting dance
		seoToolsResults.sort( compareValues(sortDirection[0], sortDirection[1]) );
	}
	// console.timeEnd('hideTools'); // For debugging

	// Extract the filtered+sorted ids only ... & reverse the list
	// $('#loader').show();
	renderToolsList();
	
	$('#tooltip-results').delay(600).fadeOut();
	// $('#loader').hide();
}

function generateQuickTemplate() {
	var seoToolQuickHtml;

	/* SEO Tool Raw HTML */
	
	// Top
	seoToolQuickHtml  = '<h2><a class="toggle-info" type="button"><i class="fa fa-caret-right"></i><%- name %></a></h2>';
	seoToolQuickHtml += '<div class="voting">';
		seoToolQuickHtml += '<a href="#" class="upvote" data-tool-id="<%- id %>" data-toggle="tooltip" data-placement="top" title="Click to vote +1">';
			seoToolQuickHtml += '<i class="fa fa-caret-up"></i><span class="num-vote"><%- votes %></span>';
		seoToolQuickHtml += '</a>';
	seoToolQuickHtml += '</div>';

	// Summary
	seoToolQuickHtml += "<p><%= summary %></p>";
	// seoToolQuickHtml += "<p><%- summary.replace(new RegExp('\r?\n', 'g'), '<br>') %></p>";

	// Init template
	seoToolQuickTemplate = _.template(seoToolQuickHtml);
}

function renderToolsList() {
	console.log( 'renderToolsList() : number of tools ' + seoToolsResults.length );
	var resultsFragment = document.createDocumentFragment();

	// console.time('generateHtml');
	hidden = '';
	for( var i = 0; i < seoToolsResults.length; i++) {
		seoTool = seoToolsResults[i];
		if(i > 9) hidden = 'hidden';

		// Generate element
		var seoToolDiv = document.createElement("div");
		seoToolDiv.className = 'seo-tool seo-tool-quick ' + hidden;
		seoToolDiv.id = 'tool' + seoTool.id;
		
		// Populate element
		seoToolDiv.innerHTML = seoToolQuickTemplate({
			id: seoTool.id,
			name: seoTool.name,
			votes: seoTool.votes,
			summary: seoTool.summary
		});
		
		// console.log( seoTool.summary );
		// console.log( seoToolDiv.innerHTML );

		resultsFragment.appendChild( seoToolDiv );
	}
	
	seoToolsEl = document.getElementById('seo-tools-results');
	
	// I think this works faster
	seoToolsEl.innerHTML = '';
	
	// Test if this works faster
	// while (seoToolsEl.firstChild)
		// seoToolsEl.removeChild(seoToolsEl.firstChild);
	
	seoToolsEl.appendChild( resultsFragment );
	
	// console.log( resultsFragment );

}

function generateFullTemplate() {
	var seoToolFullHtml = '';
	
	// Top
	seoToolFullHtml += '<h2><a class="toggle-info" type="button"><i class="fa fa-caret-right"></i><%- name %></a></h2>';
	seoToolFullHtml += '<div class="voting">';
		seoToolFullHtml += '<a href="#" class="upvote" data-tool-id="<%- id %>" data-toggle="tooltip" data-placement="top" title="Click to vote +1">';
			seoToolFullHtml += '<i class="fa fa-caret-up"></i><span class="num-vote"><%- votes %></span>';
		seoToolFullHtml += '</a>';
	seoToolFullHtml += '</div>';

	// Meta data
	seoToolFullHtml += '<div class="meta">';
		seoToolFullHtml += '<h5><i class="fa fa-list-alt"></i><%- type %></h5>';						
		seoToolFullHtml += '<h5><i class="fa fa-dollar"></i><%- price %></h5>';
	seoToolFullHtml += '</div>';
	
	// Summary
	seoToolFullHtml += "<p><%= summary %></p>";
	// seoToolFullHtml += "<p><%- summary.replace(new RegExp('\r?\n', 'g'), '<br>') %></p>";

	// Quick Links
	seoToolFullHtml += '<div class="quick-links">';
		seoToolFullHtml += '<h3>Quick Links</h3>';
		seoToolFullHtml += '<h6><a href="<%- homepage_url %>" <% if(home_dofollow == 0) { %>rel="nofollow"<% } %> target="_blank">Homepage<i class="fa fa-external-link"></i></a></h6>';

		// Template Loop
		seoToolFullHtml += '<% _.each(links, function(link, key, arr) { %>';
			seoToolFullHtml += '<h6><a href="<%= link.link %>" <% if(link.dofollow == 0) { %>rel="nofollow"<% } %> target="_blank"><%= link.text %><i class="fa fa-external-link"></i></a></h6>';
		seoToolFullHtml += '<% }); %>';

	seoToolFullHtml += '</div>';

	// Description
	seoToolFullHtml += '<p class="detailed-desc"><%= description %></p>';
	// seoToolFullHtml += '<p class="detailed-desc"><%- description.replace(new RegExp('\r?\n', 'g'), '<br>') %></p>';

	// Images
	seoToolFullHtml += '<% if(imgs.length > 0) { %>'; // There is at least 1 image
		seoToolFullHtml += '<div class="tool-images">';
			seoToolFullHtml += '<h3><%- name %> images</h3>';
			seoToolFullHtml += '<div id="image-slider<%= id %>" class="carousel slide" data-ride="carousel" data-interval="false">';

				// Carousel
				seoToolFullHtml += '<div class="carousel-inner" role="listbox">';

					// Carousel images
					seoToolFullHtml += '<% _.each(imgs, function(img, key, arr) { %>';
						seoToolFullHtml += '<div class="item <% if(key == 0) { %>active<% } %>">';
							seoToolFullHtml += '<img data-src="<%= img.src %>" alt="">';
							seoToolFullHtml += '<div class="carousel-caption"><%= img.caption %></div>';
						seoToolFullHtml += '</div>';
					seoToolFullHtml += '<% }); %>';

				seoToolFullHtml += '</div>';

				seoToolFullHtml += '<% if(imgs.length > 1) { %>'; // There are at least 2 images
					seoToolFullHtml += '<a class="left carousel-control" href="#image-slider<%= id %>" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="sr-only">Previous</span></a>'; // Prev
					seoToolFullHtml += '<a class="right carousel-control" href="#image-slider<%= id %>" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><span class="sr-only">Next</span></a>'; // Next
				seoToolFullHtml += '<% } %>';

			seoToolFullHtml += '</div>';
		seoToolFullHtml += '</div>';
	seoToolFullHtml += '<% } %>';

	// Videos
	seoToolFullHtml += '<% if(vids.length > 0) { %>'; // There is at least 1 video
		seoToolFullHtml += '<div class="tool-videos">';
			seoToolFullHtml += '<h3><%- name %> videos</h3>';
			seoToolFullHtml += '<div id="video-slider<%= id %>" class="carousel slide" data-ride="carousel" data-interval="false">';

				// Carousel
				seoToolFullHtml += '<div class="carousel-inner" role="listbox">';
				
					seoToolFullHtml += '<% _.each(vids, function(vid, key, arr) { %>';
						seoToolFullHtml += '<div class="item <% if(key == 0) { %>active<% } %>">';
							seoToolFullHtml += '<div class="video-slider">';
							seoToolFullHtml += '<iframe class="video-slider" width="720" height="405" data-src="<%= vid %>" frameborder="0" allowfullscreen></iframe>';
							seoToolFullHtml += '</div>';
						seoToolFullHtml += '</div>';
					seoToolFullHtml += '<% }); %>';

				seoToolFullHtml += 	'</div>';
		
				seoToolFullHtml += '<% if(vids.length > 1) { %>'; // There are at least 2 videos
					seoToolFullHtml += '<a class="left carousel-control" href="#video-slider<%= id %>" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="sr-only">Previous</span></a>'; // Prev
					seoToolFullHtml += '<a class="right carousel-control" href="#video-slider<%= id %>" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><span class="sr-only">Next</span></a>'; // Next
				seoToolFullHtml += '<% } %>';

			seoToolFullHtml += 	'</div>';	
		seoToolFullHtml += 	'</div>';		
	seoToolFullHtml += '<% } %>';
	
	seoToolFullHtml += '<div class="comments">';
		seoToolFullHtml += '<h3><%- name %> Comments</h3>';
		seoToolFullHtml += '<div id="disqus_thread" class="disqus_thread"></div>';
	seoToolFullHtml += "</div>";
	
	// Init template
	seoToolFullTemplate = _.template(seoToolFullHtml);
}

function renderQuickTool( seoTool ) {
	console.log( 'renderQuickTool()' );
	
	// Filter the missing links, images, videos ... and Generate html ...
	document.getElementById('tool' + seoTool.id).innerHTML = seoToolQuickTemplate({
		id: seoTool.id,
		name: seoTool.name,
		votes: seoTool.votes,
		
		summary: seoTool.summary
	});
}

function renderFullTool( seoTool ) {
	console.log( 'renderFullTool()' );
	
	// Filter the missing links, images, videos ... and Generate html ...
	type = seoTool.type.replace(/_/g, ' ');
	document.getElementById('tool' + seoTool.id).innerHTML = seoToolFullTemplate({
		id: seoTool.id,
		name: seoTool.name,
		homepage_url: seoTool.homepage_url.replace(/^www/, 'http://www'),
		home_dofollow: seoTool.home_dofollow,
		votes: seoTool.votes,
		
		type: type,
		price: seoTool.price,
		
		summary: seoTool.summary,
		description: seoTool.description,
		
		links: seoTool.links.filter(l => (l.link !== '' && l.text != 0)).map(function(l) { l.link = l.link.replace(/^www/, 'http://www'); return l; }),
		imgs: seoTool.imgs.filter(i => i.src !== ''),
		vids: seoTool.videos.filter(v => v !== '')
	});
}

// Scroll detection for lazy loading
$(document).ready(function() {
	$(window).scroll(function() {
		// -800 = slightly above ground zero
		if($(window).scrollTop() + $(window).height() > $(document).height() - 800) { // Used to be -100 - near rock bottom
			console.group('Are we close to the bottom.');
			index = $('#seo-tools-results').children('.hidden').index();
			
			console.log('Visible elements index: ' + index);
			$("#seo-tools-results .seo-tool").slice(index, index+5).removeClass('hidden');
		}
		
		/* Scroll To Top */
		var y = $(document).scrollTop();
		if (y > 800) {
			$('#go-to-top').fadeIn();
		} else {
			$('#go-to-top').fadeOut();
		}
	});
	
	$('#go-to-top').click(function() {
		$('html,body').animate({ scrollTop: 1 });
	});
});
