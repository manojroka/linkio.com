jQuery(function($){

	// MAIN BOX
	var brandsKeywords = $('#textarea-brand,#textarea-keywords');
	
	/*
	 * Use the keywords & brands arrays to generate 4 x 100 anchors
	 *
	 * @return object|array Object with 4 types of anchors
	 */
	function generateAnchors() {
		var brands	 = textarea2Arr('#textarea-brand');
		var keywords = textarea2Arr('#textarea-keywords');
		
		// console.log( 'brands: ' 	+ brands );
		// console.log( 'keywords: ' 	+ keywords );

		// City .. state .. state abbr
		var city 	= $('#city').val();
		var state 	= $('#state').val();
		var st 		= $('#st').val();

		// Use keywords to generate anchors
		keywordPlusPartOfKeywordAnchors = _.map(keywordPlusPartOfKeywordAnchors, function(theAnchor, index) {
			// Replace the anchor placeholders with random keywords from the array
			theAnchor = theAnchor.replace('{keyword}', keywords[_.random(0, keywords.length-1)]);

			theAnchor = replaceCityStateAbbr(theAnchor, city, state, st);
			return theAnchor;
		});
		// Remove the empty strings
		keywordPlusPartOfKeywordAnchors = _.without(keywordPlusPartOfKeywordAnchors, '');
		
		// Use brands to generate anchors
		brandedAnchors = _.map(brandedAnchors, function(theAnchor, index) {
			// Replace the anchor placeholders with random brands from the array
			theAnchor = theAnchor.replace('{brand}', brands[_.random(0, brands.length-1)]);

			theAnchor = replaceCityStateAbbr(theAnchor, city, state, st);
			return theAnchor;
		});
		// Remove the empty strings
		brandedAnchors = _.without(brandedAnchors, '');
		
		// Use keywords & brands to generate anchors
		brandedPlusKeywordAnchors = _.map(brandedPlusKeywordAnchors, function(theAnchor, index) {
			// Replace the anchor placeholders with random keywords/brands from the arrays
			theAnchor = theAnchor.replace('{keyword}', 	keywords[_.random(0, keywords.length-1)]);
			theAnchor = theAnchor.replace('{brand}', 	brands[_.random(0, brands.length-1)]);

			theAnchor = replaceCityStateAbbr(theAnchor, city, state, st);
			return theAnchor;
		});
		// Remove the empty strings
		brandedPlusKeywordAnchors = _.without(brandedPlusKeywordAnchors, '');
		
		// Don't do anything :)
		justNaturalAnchors;
		
		// Combine the 4 anchor types in 1 object
		theAnchors = {
			'keywordPlusPartOfKeywordAnchors': 	keywordPlusPartOfKeywordAnchors,
			'brandedAnchors': 					brandedAnchors,
			'brandedPlusKeywordAnchors': 		brandedPlusKeywordAnchors,
			'justNaturalAnchors':		 		justNaturalAnchors,
		};
		return theAnchors;
	}
	
	/*
	 * Distribute the anchors based on number of checkboxes selected
	 *
	 * Returns an object with 2 properties - teaser & description.
	 * Each property includes up to 4 anchor types.
	 *
	 * @return object|array Object with 2 properties - teaser & description
	 */
	// 
	function generateDistribution(theAnchors) {
		// Used in distribution rules below
		distributionType = $('#checkboxes input:checked').length; // From 1-to-4
		if(distributionType < 1)
			throw new Error('distributionType has to be within 1..4 range');	
		
		// Reset teaser and full arrays
		$('#checkboxes input').each(function(index) {
			// Get current id
			checkboxId = $(this).attr('id');
			
			finalAnchors.teaser[checkboxId] = [];
			finalAnchors.full[checkboxId]   = [];
		});
		
		$('#checkboxes input:checked').each(function(index) {
			// Get current id
			checkboxId = $(this).attr('id');

			// Reset distribution rules .. just in case
			_.each(_.range(4), function (n) {
				teaserDistribution[n] = 0;
				fullDistribution[n] = 0;
			});

			// Distribution rules
			switch(distributionType) {
				case 1:
					teaserDistribution[0] = 5;
					fullDistribution[0] = 100;
					break;
				case 2:
					teaserDistribution[0] = 3;
					teaserDistribution[1] = 2;

					fullDistribution[0] = 50;
					fullDistribution[1] = 50;
					break;
				case 3:
					teaserDistribution[0] = 2;
					teaserDistribution[1] = 2;
					teaserDistribution[2] = 1;

					fullDistribution[0] = 34;
					fullDistribution[1] = 33;
					fullDistribution[2] = 33;
					break;
				case 4:
					teaserDistribution[0] = 2;
					teaserDistribution[1] = 1;
					teaserDistribution[2] = 1;
					teaserDistribution[3] = 1;

					fullDistribution[0] = 25;
					fullDistribution[1] = 25;
					fullDistribution[2] = 25;
					fullDistribution[3] = 25;
					break;
			}
			
			// Slice teaser and full arrays - using the checkboxId and checkbox index
			finalAnchors.teaser[checkboxId] = theAnchors[checkboxId].slice(0, teaserDistribution[index]);
			finalAnchors.full[checkboxId]   = theAnchors[checkboxId].slice(0, fullDistribution[index]);
		});
		
		return finalAnchors;
	}
	
	function generateTable(finalAnchors) {
		var row = _.template('<tr class="<%= fullOrTeaser %>">'+
								'<td><%= index %></td>'+
								'<td><%= keywordType %></td>'+
								'<td><%= keywordText %></td>'+
								'<td><i class="fa fa-heart" aria-hidden="true"></i></td>'+
							 '</tr>');

		var html = [];
		
		// DEPRECATED: Teaser rows
		/*
		var globalIndex = 1;
		for (var finalAnchorType in finalAnchors.teaser) {
			// console.log( finalAnchorType ); // Anchor type: keywordPlusPartOfKeywordAnchors, brandedAnchors, brandedPlusKeywordAnchors, justNaturalAnchors
			// console.log( finalAnchors.teaser[finalAnchorType] ); // Anchor list

			for(i = 0; i < finalAnchors.teaser[finalAnchorType].length; i++) {
				readableAnchorText = finalAnchors.teaser[finalAnchorType][i];
				
				html += row({
					fullOrTeaser: 'teaser',
					index: globalIndex,
					keywordType: readableAnchorType[finalAnchorType],
					keywordText: readableAnchorText,
				});
				globalIndex++;
			}
		}
		*/
		
		// Full rows ... initially hidden
		globalIndex = 1;
		for (var finalAnchorType in finalAnchors.full) {
			// console.log( finalAnchorType ); // Anchor type: keywordPlusPartOfKeywordAnchors, brandedAnchors, brandedPlusKeywordAnchors, justNaturalAnchors
			// console.log( finalAnchors.full[finalAnchorType] ); // Anchor list

			for(i = 0; i < finalAnchors.full[finalAnchorType].length; i++) {
				readableAnchorText = finalAnchors.full[finalAnchorType][i];
				
				html += row({
					fullOrTeaser: 'full',
					index: globalIndex,
					keywordType: readableAnchorType[finalAnchorType],
					keywordText: readableAnchorText,
				});
				globalIndex++;
			}
		}
		$('#table-anchors tbody').html(html);
		
		// Shuffle Table Rows:
		// https://stackoverflow.com/questions/7620677/jquery-shuffle-table-rows
	}
	
	function validateForm() {
		// Validation
		errorMsg = '';
		
		// Validate page type
		if( ! $('#buttons-page-type button').hasClass('active') ) {
			errorMsg += 'Please select page type.\n';
		}

		// Validate anchor/keyword type
		if( ! $('#checkboxes input').is(':checked') ) {
			errorMsg += 'Please select at least 1 anchor type.\n';
			return errorMsg;
		}
		
		// Validate Brand & Keywords based on anchor/keyword type
		var validateKeywordsBrands = [];
		checkedAnchors = $('#checkboxes input').filter(':checked');
		var checkedAnchorsIds = checkedAnchors.map(function() { return this.id; });
		
		brand 		= $('#textarea-brand').val();
		keywords 	= $('#textarea-keywords').val();
		if( _.contains(checkedAnchorsIds, 'brandedPlusKeywordAnchors') ) {
			if( (brand == '') || (keywords == '') )
				errorMsg += 'Please input at least one brand name and one keyword.\n';

			else if( brandsKeywordsIsPlaceholder('#textarea-brand') || brandsKeywordsIsPlaceholder('#textarea-keywords') )
				errorMsg += 'Please input at least one brand name and one keyword.\n';

		} else {
			if( _.contains(checkedAnchorsIds, 'keywordPlusPartOfKeywordAnchors') )
				if( (keywords == '') || brandsKeywordsIsPlaceholder('#textarea-keywords') )
					errorMsg += 'Please input at least one keyword.\n';

			if( _.contains(checkedAnchorsIds, 'brandedAnchors') )
				if( (brand == '') || brandsKeywordsIsPlaceholder('#textarea-brand') )
					errorMsg += 'Please input at least one brand.\n';
		}

		return errorMsg;
	}

	// Highlight steps ...
	function brandsKeywordsIsPlaceholder(theTextarea) {
		val = $(theTextarea).val().replace("\n", '_');
		placeholder = $(theTextarea).data('placeholder');

		// console.log( val.length );
		// console.log( placeholder.length );

		// Hide placeholder value
		if(val == placeholder)
			return true;			

		return false;
	}
	
	brandsKeywords.on('focusin', function() {
		$(this).removeClass('placeholder');
		
		// console.log( val.length );
		// console.log( placeholder.length );
		
		// Hide placeholder value
		
		if(brandsKeywordsIsPlaceholder(this))
			$(this).val('');
	});
	brandsKeywords.on('focusout', function() {
		// Show placeholder value
		if($(this).val() == '') {
			$(this).addClass('placeholder');
			$(this).val( $(this).data('placeholder').replace('_', "\n") );
		}
	});
	
	// Step 1
	brandsKeywords.keyup(function() {
		var label = $(this).prevAll('label');
		var value = $(this).val();
		var keywords = value.split("\n"); // .replace(/\r\n/g, "\n")
		
		keywords = $.map(keywords, function( val, i ) {
			if(i > 49) { // 50 keywords allowed
				label.html( label.html().replace(':', ' - <span>max 50 values allowed<span>') );
				return;
			}

			// Truncate to 100 chars per keyword
			if(val.length > 100) {
				val = val.substr(0, 100);
			}

			return val;
		});
		
		$(this).val(keywords.join("\n"));
		
		// For debugging:
		// console.log( keywords );

		// Highlight
		$('#form-generate h5:eq(0)').addClass('active'); // Circle
		$('#form-generate .line:eq(0)').addClass('active'); // Line
	});
	
	// Step 2
	$('#buttons-page-type button').click(function(){
		// Highlight 1 button at a time
		$('#buttons-page-type button').removeClass('active');
		$(this).toggleClass('active');

		// Highlight step
		$('#form-generate h5:eq(1)').addClass('active'); // Circle
		$('#form-generate .line:eq(1)').addClass('active'); // Line
		
		// Show city-state input fields - if 'Local Business Homepage' or 'Local Business Service Page' are selected
		if( _.contains(['local_business_homepage', 'local_business_service_page'], $(this).data('pageType')) ) {
			$('#inputs-city-state').slideDown();
		} else {
			$('#inputs-city-state').slideUp();
		}
	});

	// Step 3
	$('#checkboxes').change(function() {

		if( $('#checkboxes input').is(':checked') ) {
			// At least 1 checked .. highlight
			$('#form-generate h5:eq(2)').addClass('active'); // Circle
			$('#form-generate .line:eq(2)').addClass('active'); // Line
		} else {
			// None checked .. reverse
			$('#form-generate h5:eq(2)').removeClass('active'); // Circle
			$('#form-generate .line:eq(2)').removeClass('active'); // Line
		}
		
	});
	
	// Step 4 - Pre-Generate
	$('#btn-pre-generate').on('click', function() {
		errorMsg = validateForm();
		
		// Validation
		if(errorMsg != '') {
			alert( errorMsg );
			return;
		}

		// Step 4 highlight
		$(this).parents('#wrapper-generate').addClass('active');
		$(this).fadeOut();
		
		// The cookie is already set ... skip the pre-generate
		if( isFormUnlocked() ) {
			generate();
			return;
		}

		preGenerate();
		$('#gdpr-box').delay(1300).show();
		// Show gdpr box
	});
	
	/*
	 * The pre-generate function ... that leads to email request
	 */
	function preGenerate() {
		// alert( 'preGenerate()' );

		// Show the generate form
		$('#form-unlock').css('opacity', '0').animate({
			opacity: 1,
			height: 'show',
		}, 1300);

		// Scroll to section
		$('html, body').animate({
			scrollTop: $("#form-unlock").offset().top - 200
		}, 1300);
	}

	// Step 5 - Generate
	$('#form-generate').on('click', '#btn-generate', function(e) {
		e.preventDefault();

		if( ! $('#gdpr-agree').is(":checked") ) {
			alert( 'Please confirm you agree with our Terms and Privacy Policy. Thank you.' );
			return;
		}

		email = $('#email').val();
		if ( !validateEmail(email) ) {
			alert('Please enter valid email address !');
			return;
		}
		
		// The cookie is already set ... skip the email submission
		if( isFormUnlocked() ) {
			generate();
			return;
		}
		
		var ajaxUrl = '/wp-content/themes/outreachmama/ats-tool/email.php';
		
		// For local development
		if( (window.location.hostname == 'atst.ex') || (window.location.hostname == 'atst.exigio.com') )
			ajaxUrl = 'ats-tool/email.php';

		// Make ajax call with the email address ...
		// https://www.w3schools.com/jquery/ajax_ajax.asp
		$.ajax({
			url: ajaxUrl,
			data: 'email=' + email,
			success: function(result) {
				// Validate Ajax result
				if(result.indexOf('Error') !== -1) {
					alert( result );
					return;
				}
				
				// Set cookie
				Cookies.set('linkio_keywords', 'unlocked', { expires: 365 });

				// Set Google Tag Manager event ...
				dataLayer.push({'event': 'GeneratorUnlocked'});
				
				generate();
			},
		});
	});

	function generate() {
		// alert( 'generate()' );

		// Hide the unlock form ... and restore the pre-generate button
		$('#form-unlock').slideUp();
		$('#btn-pre-generate').fadeIn();
		
		// Get Page Type
		pageType = $('#buttons-page-type button.active').data('pageType');
		
		// Init anchors arrays
		jiggleAndExtract(pageType);
		
		// Create a list of anchors
		newAnchors = generateAnchors();
		
		// Distribute the anchors
		finalAnchors = generateDistribution(newAnchors);
		
		// Generate the final table
		generateTable(finalAnchors);
		
		// Activate the ( All ) tab
		$('#btn-all').click();

		// If cookie is set
		if( isFormUnlocked() ) {
			var cookieMsg;
			cookieMsg  = "Cookie is set !\nThis user won't have to enter his email again on this device.\n\n";
			if (window.console)
				console.log( cookieMsg );
		} else {

		}

		// Allow download of CSV
		$('#btn-download-csv').addClass('enabled');

		// Hide unlock block
		$('#row-unlock').slideUp();

		// Show the table
		$('#generated').slideDown();

		// Scroll to table
		$('html, body').animate({
			scrollTop: $("#generated").offset().top
		}, 800);
	};

	
	
	// GENERATED BOX
	
	// Favorites ...

	// Mark as favorite
	$('#table-anchors').on('click', '.fa-heart', function(){
		$(this).parents('tr').toggleClass('favorite');
	});

		// Tabs: Show all anchors
		$('#btn-all').click(function() {
			$('.btn-tab').removeClass('active');
			$(this).addClass('active');
		
			$('#table-anchors tr').show();
		});
		
		// Tabs: Show favorite anchors
		$('#btn-fav').click(function() {
			$('.btn-tab').removeClass('active');
			$(this).addClass('active');
			
			$('#table-anchors tr:not(.favorite)').hide();
		});

	
	// Button: Download as CSV
	$('#btn-download-csv').click(function(e) {
		// alert('Force download of a CSV file in specific format.');
		
		// Rows
		var rows = $('#table-anchors tbody tr');
		var rowsLength = rows.length;

		// Csv data
		var csvRow = '', csvContent = "Keyword Type,Keyword Text,Favorite\n";
		
		// 1. Traverse the table
		$('#table-anchors tbody tr').each(function(index, row) { // :visible - if we shoud export only the currently shown items
			// Keyword type
			keywordType = $(this).find('td:eq(1)').text();

			// Keyword text ... csv requires every " to be doubled (escaped)
			keywordTextEscaped = $(this).find('td:eq(2)').text().replace(/"/g, '""');

			// Is Favorite
			isFavorite = ($(this).hasClass('favorite')) ? 'Y' : 'N';
			
			// alert( keywordType + ' | ' + keywordText + ' | ' + isFavorite);

			csvRow		= '"' + keywordType + '","' + keywordTextEscaped + '","' + isFavorite + '"';
			csvContent += csvRow + "\n";
			
			// @deprecated
			// csvContent += index < (rowsLength-1) ? csvRow + "\n" : csvRow;
		});

		// 2. Force download
		downloadCsv(csvContent, 'keyword_text.csv', 'text/csv;encoding:utf-8');
	});
	
	// Button: Reset
	$('#btn-reset').click(function(e) {
		e.preventDefault();
		
		resetConfirmed = confirm('Are you sure you wish to reset the selection of Brands, Keywords, Page type & Keyword type ?');
		if(!resetConfirmed) return;
			
		// Reset everything ...

		// Hide Bottom box
		$('#generated').slideUp();
		
		// 1. Reset textareas
		$('#textarea-brand, #textarea-keywords').val('');
		
		// 2. Reset buttons
		$('#buttons-page-type button').removeClass('active');
		
		// 3. Reset checkboxes			
		$('#checkboxes input').prop('checked', false);
		
		// 4. Remove active classes
		$('#form-generate div.active, #form-generate h5.active').removeClass('active');
		
		// 5. Unhide unlock block
		$('#row-unlock').show();

		// 6. Reset table ...
		$('#table-anchors tbody').html('');			
		
		// 7. 'Disable' download csv
		$('#btn-download-csv').removeClass('enabled');
		
		// 8. Reset textarea placeholder values
		brandsKeywords.each(function() {
			$(this).val( $(this).data('placeholder').replace('_', "\n") ).addClass('placeholder');
		});

		// 9. Scroll back to form-generate
		$('html, body').animate({
			scrollTop: $("#form-generate").offset().top
		}, 1300);
	});
});