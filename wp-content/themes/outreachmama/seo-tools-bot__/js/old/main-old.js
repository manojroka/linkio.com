/* Global */
var seoFilters = {
	search: '',
	type: [],
	price: [],
	sort: ''
};
var seoToolsResultsIds = [];
var seoToolTemplate; // DEPRECATED

	
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

		const propA = a[key];
		const propB = b[key];

		let comparison = 0;
		if (propA > propB) comparison =  1;
		if (propA < propB) comparison = -1;

		return ( (order == 'desc') ? (comparison * -1) : comparison );
	};
}

/* jQuery function to create path function used to get the path of the node in the tree */
// jQuery.fn.extend({
    // getPath: function (path) { /*The first time this function is called, path won't be defined*/
        // if (typeof path == 'undefined') path = ''; /*Add the element name*/
        // var cur = this.get(0).nodeName.toLowerCase();
        // var id = this.attr('id'); /*Add the #id if there is one*/
        // if (typeof id != 'undefined') { /*escape goat*/
            // if (id == 'browser') {
                // return path;
            // }
        // }
        // var html = this.html();
        // if (html.search(' ' + path);
        // } else {
            // return this.parent().getPath(path);
        // }
    // }
// });

function getRandomNumber(min, max) {
    return Math.floor(Math.random() * (max - min) ) + min;
}

/* Sidebar Scrolling */
/* Deprecated:
var $seoToolsSidebar;
var windowScrollTop, initialSidebarTop, scrollDistance, topShift = 20;
var sidebarScrollingInProgress = false;
var isDesktop = false;
$(document).ready(function(){
	
	// Init the sidebar ... and sidebar top position
	$seoToolsSidebar = $('#seo-tools-sidebar');
	initialSidebarTop = $seoToolsSidebar.offset().top;
	if($(window).width() > 1000) isDesktop = true;
	
	function scrollSidebar() {
		if(isDesktop) { // Allow sidebar scroll ... only on Desktop devices ...
			clearTimeout($.data(this, 'scrollTimer'));
			$.data(this, 'scrollTimer', setTimeout(function() {
		
				// Only animate again after previous scroll animation is over
				if(sidebarScrollingInProgress) return;

				windowScrollTop = $(window).scrollTop();
				scrollDistance = windowScrollTop - initialSidebarTop;

				// console.log( 'windowScrollTop: ' + windowScrollTop, 'initialSidebarTop: ' + initialSidebarTop, 'scrollDistance: ' + scrollDistance, '----------' ); // For debugging

				sidebarScrollingInProgress = true;
				
				if(scrollDistance > 0)
					$seoToolsSidebar.animate({'top': scrollDistance + topShift}, 1500, 'swing', function() { sidebarScrollingInProgress = false; });
				else
					$seoToolsSidebar.animate({'top': 0}, 1500, 'swing', function() { sidebarScrollingInProgress = false; });
				
			}, 1000)); // No scrolling for the last second
		}
	}
	
	$(window).scroll(function() {
		scrollSidebar();
	});
}); */

/* Main */
$(document).ready(function(){	
	/* Tooltips */
    $('[data-toggle="tooltip"]').tooltip();   
	
	// Init the Template file
	console.time('initTemplateHtml');
	generateSeoToolTemplate();
	console.timeEnd('initTemplateHtml');
	
	/* Show Search Results - on load */
	// showResults();
	
	/* Seo Tools: Expand + Collapse */
	$('#seo-tools-results').on('click', '.seo-tool h2', function() {
		// Get current tool data
		$seoToolParent = $(this).parent();
		$seoToolParentId = '#' + $seoToolParent.attr('id');

		// First: close any previously expanded tool (& exclude the current one)
		$previouslyExpanded = $('#seo-tools-results .seo-tool.expanded').not($seoToolParentId);
		$previouslyExpanded.find('.meta, .quick-links, .detailed-desc, h3, .carousel, .comments').hide();
		$previouslyExpanded.find('h2 a i').replaceWith('<i class="fa fa-caret-right"></i>');
		$previouslyExpanded.removeClass('expanded');
		
		// Now toggle expanded mode
		$seoToolParent.toggleClass('expanded');
		
		// Scroll to tool - only during expansion
		if( $seoToolParent.hasClass('expanded') ) {
			$seoToolParent.find('.meta, .quick-links, .detailed-desc, h3').show();
			$seoToolParent.find('h2 a i').replaceWith('<i class="fa fa-caret-down"></i>');

			window.scroll({
				top: $seoToolParent.offset().top,
				left: 0,
				behavior: 'smooth'
			});
			
			// Show complex blocks (images/videos/comments) after scroll completed
			setTimeout(function() {
				$seoToolParent.find('.carousel, .comments').show();
			}, 400);
		} else {
			$seoToolParent.find('.meta, .quick-links, .detailed-desc, h3, .carousel, .comments').hide();
			$seoToolParent.find('h2 a i').replaceWith('<i class="fa fa-caret-right"></i>');
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
			cachePrefix		= 'l'; // IMPORTANT: Use this number to reset comments .. via identifier & url  ..
			
			toolTitle 		= $(this).text();
			toolIdentifier 	= cachePrefix + toolTitle.toLowerCase().replace(/'/g, '').replace(/ /g, '_');
			toolUrl 		= location.protocol + '//' + location.hostname + "/best-seo-tools/" + toolIdentifier;
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
		
		// Show results
		showResults();

		// Show clear filters icon
		$('#clear-filters').fadeIn('fast');
	});
	
	$('.filter-type').on('change', function() {
		seoFilters.type = []; // Reset selection
		
		// Update selection
		$('.filter-type:checked').each(function() {
			seoFilters.type.push( $(this).val() );
		});
		
		// Show results
		showResults();

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
		showResults();
		$('#clear-filters').fadeIn('fast'); // Show clear filters icon
	});

	$('#sort').on('change', function() {
		seoFilters.sort = $(this).val();
	
		// Show results
		showResults();
		
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
		
		showResults();
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

function generateSeoToolTemplate() {
	var seoToolRawHtml;

	/* SEO Tool Raw HTML */
	seoToolRawHtml = '<div class="seo-tool" id="tool<%- id %>">';
	
		// Top
		seoToolRawHtml += '<h2><a class="toggle-info" type="button"><i class="fa fa-caret-right"></i><%- name %></a></h2>';
		seoToolRawHtml += '<div class="voting">';
			seoToolRawHtml += '<a href="#" class="upvote" data-tool-id="<%- id %>" data-toggle="tooltip" data-placement="top" title="Click to vote +1">';
				seoToolRawHtml += '<i class="fa fa-caret-up"></i><span class="num-vote"><%- votes %></span>';
			seoToolRawHtml += '</a>';
		seoToolRawHtml += '</div>';

		// Meta data
		seoToolRawHtml += '<div class="meta">';
			seoToolRawHtml += '<h5><i class="fa fa-list-alt"></i><%- type %></h5>';						
			seoToolRawHtml += '<h5><i class="fa fa-dollar"></i><%- price %></h5>';
		seoToolRawHtml += '</div>';
		
		// Summary
		seoToolRawHtml += "<p><%= summary %></p>";
		// seoToolRawHtml += "<p><%- summary.replace(new RegExp('\r?\n', 'g'), '<br>') %></p>";

		// Quick Links
		seoToolRawHtml += '<div class="quick-links">';
			seoToolRawHtml += '<h3>Quick Links</h3>';
			seoToolRawHtml += '<h6><a href="<%- homepage_url %>" <% if(home_dofollow == 0) { %>rel="nofollow"<% } %> target="_blank">Homepage<i class="fa fa-external-link"></i></a></h6>';

			// Template Loop
			seoToolRawHtml += '<% _.each(links, function(link, key, arr) { %>';
				seoToolRawHtml += '<h6><a href="<%= link.link %>" <% if(link.dofollow == 0) { %>rel="nofollow"<% } %> target="_blank"><%= link.text %><i class="fa fa-external-link"></i></a></h6>';
			seoToolRawHtml += '<% }); %>';

		seoToolRawHtml += '</div>';

		// Description
		seoToolRawHtml += '<p class="detailed-desc"><%= description %></p>';
		// seoToolRawHtml += '<p class="detailed-desc"><%- description.replace(new RegExp('\r?\n', 'g'), '<br>') %></p>';

		// Images
		seoToolRawHtml += '<% if(imgs.length > 0) { %>'; // There is at least 1 image
			seoToolRawHtml += '<div class="tool-images">';
				seoToolRawHtml += '<h3><%- name %> images</h3>';
				seoToolRawHtml += '<div id="image-slider<%= id %>" class="carousel slide" data-ride="carousel" data-interval="false">';

					// Carousel
					seoToolRawHtml += '<div class="carousel-inner" role="listbox">';

						// Carousel images
						seoToolRawHtml += '<% _.each(imgs, function(img, key, arr) { %>';
							seoToolRawHtml += '<div class="item <% if(key == 0) { %>active<% } %>">';
								seoToolRawHtml += '<img data-src="<%= img.src %>" alt="">';
								seoToolRawHtml += '<div class="carousel-caption"><%= img.caption %></div>';
							seoToolRawHtml += '</div>';
						seoToolRawHtml += '<% }); %>';

					seoToolRawHtml += '</div>';

					seoToolRawHtml += '<% if(imgs.length > 1) { %>'; // There are at least 2 images
						seoToolRawHtml += '<a class="left carousel-control" href="#image-slider<%= id %>" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="sr-only">Previous</span></a>'; // Prev
						seoToolRawHtml += '<a class="right carousel-control" href="#image-slider<%= id %>" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><span class="sr-only">Next</span></a>'; // Next
					seoToolRawHtml += '<% } %>';

				seoToolRawHtml += '</div>';
			seoToolRawHtml += '</div>';
		seoToolRawHtml += '<% } %>';

		// Videos
		seoToolRawHtml += '<% if(vids.length > 0) { %>'; // There is at least 1 video
			seoToolRawHtml += '<div class="tool-videos">';
				seoToolRawHtml += '<h3><%- name %> videos</h3>';
				seoToolRawHtml += '<div id="video-slider<%= id %>" class="carousel slide" data-ride="carousel" data-interval="false">';

					// Carousel
					seoToolRawHtml += '<div class="carousel-inner" role="listbox">';
					
						seoToolRawHtml += '<% _.each(vids, function(vid, key, arr) { %>';
							seoToolRawHtml += '<div class="item <% if(key == 0) { %>active<% } %>">';
								seoToolRawHtml += '<div class="video-slider">';
								seoToolRawHtml += '<iframe class="video-slider" width="720" height="405" data-src="<%= vid %>" frameborder="0" allowfullscreen></iframe>';
								seoToolRawHtml += '</div>';
							seoToolRawHtml += '</div>';
						seoToolRawHtml += '<% }); %>';

					seoToolRawHtml += 	'</div>';
			
					seoToolRawHtml += '<% if(vids.length > 1) { %>'; // There are at least 2 videos
						seoToolRawHtml += '<a class="left carousel-control" href="#video-slider<%= id %>" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="sr-only">Previous</span></a>'; // Prev
						seoToolRawHtml += '<a class="right carousel-control" href="#video-slider<%= id %>" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><span class="sr-only">Next</span></a>'; // Next
					seoToolRawHtml += '<% } %>';

				seoToolRawHtml += 	'</div>';	
			seoToolRawHtml += 	'</div>';		
		seoToolRawHtml += '<% } %>';
		
		seoToolRawHtml += '<div class="comments">';
			seoToolRawHtml += '<h3><%- name %> Comments</h3>';
			seoToolRawHtml += '<div class="disqus_thread"></div>';
		seoToolRawHtml += "</div>";

	seoToolRawHtml += "</div>";
	
	// Init template
	seoToolTemplate = _.template(seoToolRawHtml);
}

function replaceHtml(el, html) {
	var oldEl = typeof el === "string" ? document.getElementById(el) : el;
	/*@cc_on // Pure innerHTML is slightly faster in IE
		oldEl.innerHTML = html;
		return oldEl;
	@*/
	var newEl = oldEl.cloneNode(false);
	newEl.innerHTML = html;
	oldEl.parentNode.replaceChild(newEl, oldEl);
	/* Since we just removed the old element from the DOM, return a reference
	to the new element, which can be used to restore variable references. */
	return newEl;
};


/* Show Search Results */
function showResults() {
	var seoToolsHtml = '';
	var seoToolsResults = []; // USED for sorting the ids only

	/* Filter here ... */
	// console.time('filterResults');
	for( var i = 0; i < seoTools.length; i++) {
		// Filter by search query
		if(seoFilters.search.length > 0)
			if(seoTools[i].name.toLowerCase().indexOf(seoFilters.search) === -1)
				continue;

		// Filter by type
		if(seoFilters.type != '')
			if( !arrayHasOne(seoTools[i].type.split(','), seoFilters.type) )
				continue;

		// Filter by price
		toolPriceArray = [seoTools[i].price];
		if(seoFilters.price.length > 0)
			if( !arrayHasOne(seoFilters.price, toolPriceArray) )
				continue;
		
		seoToolsResults.push( seoTools[i] ); // USED for filtering + sorting
		// seoToolsResultsIds.push( seoTools[i].id );
	}
	// console.timeEnd('filterResults');

	/* Sort here ... */
	if(seoFilters.sort.length > 0) {
		sortDirection = seoFilters.sort.split(':');

		// DO the sorting dance
		seoToolsResults.sort( compareValues(sortDirection[0], sortDirection[1]) );
	}
	
	// extract the filtered+sorted ids only ... & reverse the list
	seoToolsResultsIds = seoToolsResults.map(function(item) { return item.id; });
	seoToolsResultsIds.reverse();
	
	// PRELIMINARY: show/hide the filtered tools
	// console.time('hideTools'); // For debugging
	for( var i = 0; i < seoTools.length; i++) {
		toolId = 'tool' + seoTools[i].id;
		// console.group('toolId: ' + toolId); // For debugging

		display = 'none';
		if( seoToolsResultsIds.includes(seoTools[i].id) ) {
			display = 'block';
		}
		// console.log('display: ' + display ); // For debugging
		// console.groupEnd(); // For debugging
		
		document.getElementById(toolId).style.display = display;
	}
	// console.timeEnd('hideTools'); // For debugging
	
	// SECONDARY: we have to always sort
	$('#loader').show();
	sortResultsRecursively();
	
	
	
	// For debugging
	// for(z = 0; z < seoToolsResults.length; z++) {
		// console.log( seoToolsResults[z].id );
	// }

	
	// console.log( 'seoToolsResults: ' + seoToolsResults );
	// console.log( 'seoToolsResultsIds: ' + seoToolsResultsIds );
	
	
	
	/* DEPRECATED: Sort */
	/* console.time('sortResults');
	if(seoFilters.sort.length > 0) {
		sortDirection = seoFilters.sort.split(':');
		
		// Do the sorting dance
		seoToolsResults.sort( compareValues(sortDirection[0], sortDirection[1]) );
	}
	console.timeEnd('sortResults'); */
	
	// DEPRECATED:
	// console.time('generateHtml');
	// for( var i = 0; i < seoToolsResults.length; i++) {
		// seoTool = seoToolsResults[i];

		// // Filter the missing links, images, videos ... and Generate html ...
		// type = seoTool.type.replace(/_/g, ' ');
		// seoToolsHtml += seoToolTemplate({
			// id: seoTool.id,
			// name: seoTool.name,
			// homepage_url: seoTool.homepage_url.replace(/^www/, 'http://www'),
			// home_dofollow: seoTool.home_dofollow,
			// votes: seoTool.votes,
			
			// type: type,
			// price: seoTool.price,
			
			// summary: seoTool.summary,
			// description: seoTool.description,
			
			// links: seoTool.links.filter(l => l.link !== '').map(function(l) { l.link = l.link.replace(/^www/, 'http://www'); return l; }),
			// imgs: seoTool.imgs.filter(i => i.src !== ''),
			// vids: seoTool.videos.filter(v => v !== '')
		// });
	// }
	// console.timeEnd('generateHtml');

	// DEPRECATED:
	// console.time('renderHtml');
	// replaceHtml('seo-tools-results', seoToolsHtml);
	// document.getElementById('seo-tools-results').innerHTML = seoToolsHtml;
	// console.timeEnd('renderHtml');
	
	// alert('no render');
}

function sortResultsRecursively() {
	console.group('===== seoToolsResultsIds =====');
		console.log('seoToolsResultsIds: ' 	+ seoToolsResultsIds.join() );

		rangeIds = seoToolsResultsIds.splice(0, 10);
	
		console.log('rangeIds: ' 			+ rangeIds.join() );
		console.log('Length: ' 				+ rangeIds.length );
	console.groupEnd();

	for(var i = 0; i < rangeIds.length; i++) {
		pretoolId = '#tool' + rangeIds[i]; // alert( pretoolId + $(pretoolId) );
		$('#seo-tools-results').prepend( $(pretoolId) );
	}
	
	// // If there are still items .. continue
	if(seoToolsResultsIds.length > 0)
		setTimeout(function() {
			sortResultsRecursively();
		}, 10);
	else
		$('#loader').hide();
}
