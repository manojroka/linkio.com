// Type 2 - Branded +
function isBranded(anchors) {
	
	// console.log( '# isBranded' );
	// console.log( anchors );
	
	/*
		IF anchor contains the brand name and no keywords and is not matching as a TITLE TAG, it is BRANDED

		IF anchor contains the brand name and has additional words but those words are not keywords
		and are not matching as a TITLE TAG, it is BRANDED
	*/
	var matchingKeywords = null;
	
	anchors = _.map(anchors, function(anchor) {
		// Anchor already categorized .. continue to next
		if( anchor.type !== null ) return anchor;

		// The anchor is link/url
		if( isLink(anchor.theAnchor) ) return anchor;

		var brandFound = '';
		
		// Check for brand match (exact or partial) within array
		var theAnchorHasBrand = wordContainsArrValue(anchor.theAnchor, FormFields.brand, {returnWord: false});
		
		// IGNORE Anchor: The Brand is missing
		if( !theAnchorHasBrand ) return anchor;

		// For debugging
		// console.log( 'theAnchorHasBrand: ' + theAnchorHasBrand );
		
		// Okay, the anchor has the brand word ... lets assume the anchor is Branded
		anchor.type = 'BRANDED';
		
		// Get the exact brand found in the anchor
		var brandFound = wordContainsArrValue(anchor.theAnchor, FormFields.brand, {returnWord: true});

		// For debugging
		console.log( 'The brand found in the anchor: ' + brandFound );

		anchorWords = cleanSplitLower(anchor.theAnchor);
		anchorWords = _.without(anchorWords, brandFound);
		anchorWordsNoSuffixes = cleanWordsSuffixes(anchorWords);

		// For debugging
		// console.group( '# isBranded -> The anchor words: ' + anchorWords );
		// console.group( 'Anchor: ' 					+ anchor.theAnchor );
		// console.group( 'The exact brand found: ' 	+ brandFound );

		matchingKeywords = null;
		for(i = 0; i < FormFields.keywords.length; i++) {
			keyword = FormFields.keywords[i];
			keywordWords = cleanSplitLower(keyword);
			keywordWords = _.without(keywordWords, brandFound);
			keywordWordsNoSuffixes = cleanWordsSuffixes(keywordWords);

			// How many words are present in both arrays ... hopefully none
			matchingKeywords = _.intersection(anchorWordsNoSuffixes, keywordWordsNoSuffixes);
			
			// For debugging
			// console.log( 'Anchor words - no suffixes: ' 	+ anchorWordsNoSuffixes );
			// console.log( 'Keyword words - no suffixes: ' 	+ keywordWordsNoSuffixes );

			// console.log( '----------' );
			// console.log( 'Matching keywords: ' + matchingKeywords );
			// console.log( '----------' );
			
			if( (matchingKeywords == null) || (matchingKeywords == 0) ) { // Still branded - no keyword
				anchor.type = 'BRANDED';
			} else { // CONDITION NOT MET: found a keyword
				console.log( 'BRANDED CONDITION NOT MET: found a keyword: ' + keyword );
				anchor.type = null;
				break;
			}
		}
		
		// For debugging
		// console.log( 'anchor.type: ' + anchor.type );
		// console.groupEnd();

		// Count ...
		if( anchor.type == 'BRANDED' )
			COUNT.isBranded++;

		return anchor;
	});

	return anchors;
}