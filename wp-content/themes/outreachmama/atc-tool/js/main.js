// Init
var FormFields = {
	destinationLink: '', // = Page URL
	destLink: '', // No protocol .. no subdomain .. no trail ..
	pageTitles: [],
	brand: [],
	keywords: [],
	anchors: []
};
var finalAnchors = [];

var COUNT = {
	// Generic
	isNoText: 0,
	isTotallyRandom: 0,
	
	// Exact
	isTitleTag: 0,
	isBranded: 0,
	isExactKeyword: 0,
	isBrandKeywordTogether: 0,
	
	isKeywordPlusWord: 0,
	isOnlyPartOfKeyword: 0,
	
	// Url
	isWebsiteName: 0,
	isHomepageUrl: 0,
	isNakedUrlNoProtocol: 0,
	isNakedUrl: 0,

	// Other
	isJustNatural: 0,
};

// Start
$(function() {

	// Top menu
	$('#linkio-logo').on('click', 'button', function() {
		$('#header-tool-menu').slideToggle();
	});

	function setDestLink() {
		var destinationParser;
		destinationParser 		= document.createElement('a');
		destinationParser.href 	= FormFields.destinationLink;
		
		FormFields.destLink = destinationParser.hostname.replace('www.', '').toLowerCase();
	}
	
	// Steps ...
	
	// Step 1 - Destination Link = Page URL
	$('#destination-link').on('focusout', function() {
		// Get link ... remove trailing slash
		FormFields.destinationLink = $(this).val().replace(/\/$/, "");
		
		// Check if valid link
		if(FormFields.destinationLink == '') {
			$(this).parents('.line').removeClass('active');
			return;
		}

		// Add protocol
		if( FormFields.destinationLink.indexOf('://') === -1 )
			FormFields.destinationLink = 'http://' + FormFields.destinationLink;

		// The barebones destination link version
		setDestLink();
		fetchPageTitle( FormFields.destinationLink );
		
		// Highlight step
		$(this).parents('.line').addClass('active');
	});

	// Step 2 - Page Title
	$('#textarea-pagetitles').on('focusout', function() {
		// Highlight step
		$(this).parents('.line').addClass('active');
	});


	// Step 3 - Anchor Texts
	$('#textarea-anchors').on('focusout', function() {
		// Get anchors
		anchors = $(this).val();
		
		// Reset active state
		if(anchors == '') {
			$(this).parents('.line').removeClass('active');
			return;
		}
		
		// DEPRECATED:
		// Otherwise - split and trim the lines
		// FormFields.anchors = _.map(anchors.split("\n"), function(line) {
			// return line.trim();
		// });

		// And remove the empty lines at the bottom
		// FormFields.anchors = filterEmptyStrAtEnd(FormFields.anchors);

		// Highlight step
		$(this).parents('.line').addClass('active');
	});

	// Steps 4-5
	var brandsKeywords = $('#textarea-brand,#textarea-keywords');
	brandsKeywords.on('focusin', function() {
		// If currentValue is placeholder ... set empty value
		if(brandsKeywordsIsPlaceholder(this)) {
			$(this).val('');
			$(this).removeClass('placeholder');
		}
	});
	brandsKeywords.on('focusout', function() {
		// If currentValue is empty ... reset to placeholder value
		if($(this).val() == '') {
			$(this).val( $(this).data('placeholder').replace('_', "\n") );
			$(this).addClass('placeholder');
			return;
		}

		// Highlight step
		// if( (FormFields.brand.length > 0) && (FormFields.keywords.length > 0) )
		$(this).parents('.line').addClass('active');
	});	
	
	/*
	 * Check if placeholder text
	 *
	 * @return boolean True if current value matches placeholder text
	 *
	 */
	function brandsKeywordsIsPlaceholder(theTextarea) {
		val = $(theTextarea).val().replace("\n", '_');
		placeholder = $(theTextarea).data('placeholder');

		// Hide placeholder value
		if(val == placeholder) return true;

		return false;
	}
	
	function dataBind() {
		// console.log( 'dataBind()' );
		
		// ANCHORS:
		// Get the anchors val ... split into arr and trim the lines ... and remove the empty lines at the bottom of the arr
		FormFields.anchors = _.map( $('#textarea-anchors').val().split("\n") , function(line) {
			return line.trim();
		});
		FormFields.anchors = filterEmptyStrAtEnd(FormFields.anchors);
		
		// PAGE TITLES:
		// Split, trim whitespace, filter empty ... and de-duplicate arr
		pageTitles = $('#textarea-pagetitles').val().replace(/\/$/, "");
		FormFields.pageTitles = advancedStr2Arr(pageTitles);
		
		// BRANDS:
		// Split, trim whitespace, filter empty ... and de-duplicate arr
		FormFields.brand = advancedStr2Arr( $('#textarea-brand').val() );

		// EXACT KEYWORDS:
		// Split, trim whitespace, filter empty ... and de-duplicate arr
		FormFields.keywords = advancedStr2Arr( $('#textarea-keywords').val() );

	}
	
	
	// Button: Pre-Generate
	$('#btn-pre-generate').on('click', function() {
	
		// Validate fields and show message
		errorMsg = validateFields();
		
		// @deprecated Temporary disable validation ...
		// errorMsg = '';
		if( errorMsg != '' ) {
			alert( errorMsg );
			return;
		}
		
		// Step 4 highlight
		$(this).parents('#wrapper-generate').addClass('active');
		$(this).fadeOut();

		// Detect linkio_atc cookie
		if( isFormUnlocked() ) {
			generate(); // If the cookie is already set
		} else {
			preGenerate(); // If the cookie is not yet set
			$('#gdpr-box').delay( 401 ).fadeIn();
		}
	});

	
	/*
	 * Checks if the form is unlocked
	 *
	 * @return bool Whether the form is unlocked or not
	 */
	function isFormUnlocked() {
		// Get cookie
		cookie_linkio_atc = Cookies.get('linkio_atc');
		
		if( cookie_linkio_atc == 'unlocked' )
			return true;
		
		return false;
	}
	

	/*
	 * Validates form fields
	 *
	 * @return string Error message or empty string
	 *
	 */
	function validateFields() {
		errorMsg = '';
		
		// Check if valid link
		if( ! isValidUrl(FormFields.destinationLink) ) {
			errorMsg += 'Please enter a valid page url !\n\n';
		}

		// Check if valid page title
		if( $('#textarea-pagetitles').val() == '' ) {
			errorMsg += 'Please enter at least 1 page title !\n';
		}

		// Check if valid anchors
		if( $('#textarea-anchors').val() == '' ) {
			errorMsg += 'Please enter at least 1 anchor !\n\n';
		}

		// Check if valid brands
		if( $('#textarea-brand').val() == $('#textarea-brand').data('placeholder').replace('_', "\n") ) {
			errorMsg += 'Please enter at least 1 brand name !\n';
		}

		// Check if valid brands
		if( $('#textarea-keywords').val() == $('#textarea-keywords').data('placeholder').replace('_', "\n") ) {
			errorMsg += 'Please enter at least 1 keyword !\n';
		}
		
		return errorMsg;
	}

	/*
	 * Fetches remote page title tag
	 *
	 * @param string The link to query
	 *
	 */
	function fetchPageTitle(destinationLink) {
		var fetchedPageTitle;
		// alert( destinationLink );

		// Hide (?) ... show loading
		$('label[for="destination-link"]')
			.find('img').hide().end()
			.find('i').show().css('display', 'inline-block').addClass('fa-spin');
			
		// Disable the textarea
		$('#textarea-pagetitles').prop('disabled', true);

		var ajaxUrl = '/wp-content/themes/outreachmama/atc-tool/get_title.php';

		// For local development
		if( (window.location.hostname == 'atc.ex') || (window.location.hostname == 'atc.exigio.com') )
			ajaxUrl = 'atc-tool/get_title.php';

		$.ajax({
			url: ajaxUrl,
			data: 'url=' + destinationLink,
			async: true,
			success: function(response) {
				// Hide loading ... show (?)
				$('label[for="destination-link"]')
					.find('i').hide().removeClass('fa-spin').end()
					.find('img').show();

				// Extract the page title
				data = JSON.parse(response);
				fetchedPageTitle = data.title;
				if(fetchedPageTitle == '') return;
				
				// console.log( 'Fetched page title: ' + fetchedPageTitle );
				var pagetitlesTextarea = $('#textarea-pagetitles');
				pageTitles = pagetitlesTextarea.val();
				
				// Add page title once at most
				if( pageTitles.indexOf(fetchedPageTitle) === -1 )
					pagetitlesTextarea.val( fetchedPageTitle + "\n" + pageTitles );

			},
			error: function(e) {
				alert("Ajax error: " + e);
			},
			complete: function(e) {
				// Enable the textarea
				$('#textarea-pagetitles').prop('disabled', false);
			}
		});
	}

	
	/*
	 * The pre-generate function ... that leads to email request
	 */
	function preGenerate() {
		// alert( 'preGenerate' );

		// Show the pre-generate form
		$('#form-unlock').css('opacity', '0').animate({
			opacity: 1,
			height: 'show',
		}, 1300);

		// Scroll to section
		$('html, body').animate({
			scrollTop: $("#form-unlock").offset().top - 200
		}, 1300);
	}
	
	/*
	 * The main generate function
	 */
	function generate() {
		// Do the data dance
		dataBind();
	
		// Generate the anchors ... and assign them to finalAnchors global var
		generateAnchorsTypes();

		// Render the final table ... based on finalAnchors global var
		renderTable();
		
		// Compute the Anchor Text Percentages
		generateReport();
		
		// Enable the Export button
		$('#btn-export').addClass('enabled');

		// Hide the unlock block
		$('#form-unlock').slideUp();
		
		// Reset the pre-generate button
		$('#btn-pre-generate').fadeIn();
		
		// Show the generated section
		$('#generated').slideDown();

		// Scroll to section
		$('html, body').animate({
			scrollTop: $("#generated").offset().top-400
		}, 800);
	}
	
	/*
	 * Generates anchors based on user data
	 *
	 * @return array Array of objects ... each object is an anchor text & anchor type
	 *
	 */
	function generateAnchorsTypes() {

		// @deprecated Stop filtering the empty anchors
		// filteredAnchors = _.filter(FormFields.anchors, function(anchor){
			// if(anchor != '') return true;
		// });

		anchors = _.map(FormFields.anchors, function(value, key){
			finalAnchor = { theAnchor: value, type: null };
			
			return finalAnchor;
		});

		// Reset Counters
		for(prop in COUNT)
			if( COUNT.hasOwnProperty(prop) )
				COUNT[prop] = 0;
		
		// GENERIC FUNCTIONS:

		// Type 1 - No Text
		anchors = isNoText(anchors);

		// Type 2 - Totally Random
		anchors = isTotallyRandom(anchors);

		
		// EXACT FUNCTIONS: +
		
		// Type 1 - Title Tag
		anchors = isTitleTag(anchors);
		
		// Type 2 - Branded
		anchors = isBranded(anchors);
		
		// Type 3 - Exact Keyword
		anchors = isExactKeyword(anchors);

		// Type 4 - Brand & Keyword Together. Note: should be called before: Type 5 - Keyword + Word
		anchors = isBrandKeywordTogether(anchors);		

		// Type 5 - Keyword + Word
		anchors = isKeywordPlusWord(anchors);

		// Type 6 - Only Part of Keyword
		anchors = isOnlyPartOfKeyword(anchors);
		
		
		// URL FUNCTIONS: +
		
		// Type 1 - WebsiteName.com
		anchors = isWebsiteName(anchors);

		// Type 2 - Homepage URL
		anchors = isHomepageUrl(anchors);

		// Type 3 - Naked URL .. no protocol
		anchors = isNakedUrlNoProtocol(anchors);

		// Type 4 - Naked URL
		anchors = isNakedUrl(anchors);

		// Type 5 - 3rd Party Url
		anchors = is3rdPartyUrl(anchors);


		// OTHER:

		// Type 1 - Just Natural
		anchors = isJustNatural(anchors);
		
		
		// Update the final anchors
		finalAnchors = anchors;
	}
	
	/*
	 * Displays anchors in table format
	 *
	 * @param array Array of objects ... each object is an anchor text & anchor type
	 *
	 */
	function renderTable() {

		// console.log( '# renderTable' );
		// console.log( finalAnchors );

		tableBody = '';
		for(i = 0, j = 1; i < finalAnchors.length; i++, j++) {
			// console.log( finalAnchors[i] );

			// DEPRECATED: Initially show only the first 5 ...
			// rowClass = 'teaser';
			// if( i >= 5 ) rowClass = 'full';
			// row  = '<tr class="' + rowClass + '">';
			
			type = finalAnchors[i].type;
			theAnchor = finalAnchors[i].theAnchor;
			
			// Escape the anchor tags
			// if(type == 'NO TEXT')

			// Always Escape the anchor tags
				theAnchor = theAnchor.replace(/<|>/g, function(match) {
					if(match == '<') return '&lt;';
					if(match == '>') return '&gt;';
				});
				// theAnchor = theAnchor.replace("<", '&lt;').replace(">", '&gt;');

			row  = '<tr class="">';
				row += '<td>' + j + '</td>';
				row += '<td>' + type + '</td>';
				row += '<td>' + theAnchor + '</td>';
			row += '</tr>';

			tableBody += row;
		}
		
		// Insert the rows into the table body
		$('#table-anchors tbody').html( tableBody );
	}
	
	function generateReport() {
		// FULL REPORT ...

		// Compute total anchors
		var totalAnchors = 0;
		for(prop in COUNT) {
			if (COUNT.hasOwnProperty(prop))
				totalAnchors += COUNT[prop];
		}
		
		console.group('Count Report');
		console.log( COUNT );
		console.groupEnd();
		
		// Find the table 1st
		var percentTable = $('#generated-sidebar table');
		
		// Compute percentages
		for(prop in COUNT) {
			percent = Math.round( (COUNT[prop] / totalAnchors) * 100 );
			percentTable.find('#' + prop).text( percent + '%' );
		}
	}
	
	// Button: Reset
	$('#btn-reset').click(function(e) {
		e.preventDefault();

		resetConfirmed = confirm('Are you sure you wish to reset the selection of Page Titles, Anchors, Brands and Keywords ?');
		if(!resetConfirmed)	return;
			
		// Okay ... reset everything ...
		FormFields.destinationLink = '';
		FormFields.destLink = '';
		FormFields.pageTitles = [];
		FormFields.brand = [];
		FormFields.keywords = [];
		FormFields.anchors = [];
		
		// Hide bottom box
		$('#generated').slideUp(800, function() {
			// ... and then ...

			// Scroll to top
			$('html, body').animate({
				scrollTop: 0
			}, 800, 'swing');
			
			// 1. Reset field + textareas
			$('#destination-link, #textarea-brand, #textarea-keywords, #textarea-anchors, #textarea-pagetitles').val('');
			
			// ...
			
			// 4. Remove active classes
			$('#form-generate div.active, #form-generate h5.active').removeClass('active');
			
			// 5. Unhide unlock block - I think unhide shouldn't unhide unlock block
			// $('#form-unlock').show();

			// 6. Reset table ...
			$('#table-anchors tbody').html('');	

			// 8. Reset textarea placeholder values
			brandsKeywords.each(function() {
				$(this).val( $(this).data('placeholder').replace('_', "\n") ).addClass('placeholder');
			});
		});
	});
	
	
	// UNLOCK FUNCTIONALITY ...
	$('#email').on('keyup', function(e) {
		email = $(this).val();
		
		if(email != '')
			$('#btn-generate').addClass('active');
		else
			$('#btn-generate').removeClass('active');	
		
		/* if(validateEmail(email)) {
			$('#btn-generate').addClass('active');
		} else {
			$('#btn-generate').removeClass('active');	
		} */
	});
	
	// Button: Generate
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
		
		var ajaxUrl = '/wp-content/themes/outreachmama/atc-tool/email.php';

		// For local development
		if( (window.location.hostname == 'atc.ex') || (window.location.hostname == 'atc.exigio.com') )
			ajaxUrl = 'atc-tool/email.php';
		
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
				Cookies.set('linkio_atc', 'unlocked', { expires: 365 });
				
				// Set Google Tag Manager event ...
				dataLayer.push({'event': 'CategorizerUnlocked'});
				
				// Generate the anchors
				generate();
			},
		});
	});

	// IMPORT/EXPORT FUNCTIONALITY ...
	
	$('#btn-import').click(function(e) {
		// Based on
		// @link https://github.com/evanplaice/jquery-csv/
		// @link https://stackoverflow.com/questions/7431268/how-to-read-data-from-csv-file-using-javascript/12289296#12289296
		// @link http://evanplaice.github.io/jquery-csv/examples/file-handling.html
		
		if( !isFileAPIAvailable() ) {
			alert("Cannot upload csv file to the browser.\nYour browser doesn't support the File API !");
			return;
		}
		
		// File API is availablle - set on change event ... and trigger the change
		$('#files').bind('change', handleFileSelect);
		$('#files').click();
	});

	function handleFileSelect(evt) {
		var files = evt.target.files; // FileList object
		var file = files[0];
		
		// Read file metadata
		var	metadata  = 'File name: ' + escape(file.name) + '\n';
			metadata += 'File type: ' + (file.type || 'n/a') + '\n';
			metadata += 'File size: ' + file.size + '\n';
			metadata += 'Last modified: ' + (file.lastModifiedDate ? file.lastModifiedDate.toLocaleDateString() : 'n/a') + '\n';
			
		// For debugging
		// alert( metadata );

		// Fill form values
		fillFormValues(file);
	}
	
	function fillFormValues(file) {

		var reader = new FileReader();
		reader.readAsText(file);
		
		reader.onload = function(event) {
			var csv = event.target.result;
			var data = $.csv.toArrays(csv);
			
			// For debugging:
			console.log( 'CSV data:' );
			console.log( data );
			var brand = '', keywords = '', anchors = '';
			
			// Skip the first row (thead)
			for(var i = 1; i < data.length; i++) {
				row = data[i];
				
				brand 		+= row[0] + '\n';
				keywords 	+= row[1] + '\n';
				anchors		+= row[2] + '\n';
			}
			
			$('#textarea-brand').val( brand );
			$('#textarea-keywords').val( keywords );
			$('#textarea-anchors').val( anchors );
			
			// Force focusout
			$('#textarea-brand,#textarea-keywords,#textarea-anchors').focusout();
		};
		
		reader.onerror = function() {
			alert('Unable to read ' + file.name);
		};
	}
	
	// Button: Download as CSV
	$('#btn-export').click(function(e) {
		// For debugging
		// alert('Force download of a CSV file in specific format.');
		
		// Csv data
		var csvRow = '',
			csvContent = "Num,Anchor Type,Anchor Text\n";

		// 1. Traverse the table
		var rows = $('#table-anchors tbody tr');
		var rowsLength = rows.length;
		rows.each(function(index, row) { // :visible - if we shoud export only the currently shown items
			// Num
			num = $(this).find('td:eq(0)').text();

			// Anchor type
			anchorType = $(this).find('td:eq(1)').text();

			// Anchor text ... csv requires every " to be doubled (escaped)
			anchorText = $(this).find('td:eq(2)').text();

			// For debugging
			// alert( num + ' | ' + anchorType + ' | ' + anchorText);

			csvRow		= '"' + num + '","' + anchorType + '","' + anchorText + '"';
			csvContent += csvRow + "\n";
		});

		// 2. Force download
		downloadCsv(csvContent, 'anchor_types_text.csv', 'text/csv;encoding:utf-8');
	});

});