// Type 4 - Brand & Keyword Together +
// This should be called before Keyword + Word
function isBrandKeywordTogether(anchors) {
	
	// console.log( '# isBrandKeywordTogether' );
	// console.log( anchors );

	/*
		IF anchor contains a keyword (full or partial), contains a brand name, and does not match
		as a TITLETAG, it is BRAND & KEYWORD TOGETHER
	*/
	anchors = _.map(anchors, function(anchor) {
		// Anchor already categorized .. continue to next
		if( anchor.type !== null ) return anchor;

		// The anchor is link/url
		if( isLink(anchor.theAnchor) ) return anchor;

		// Brand is found ... or undefined
		var theAnchorHasBrand = _.find(FormFields.brand, function(brand) {
			return ( anchor.theAnchor.toLowerCase().indexOf( brand.toLowerCase() ) > -1 );
		});
		// CONDITION NOT MET: Brand is needed
		if( !theAnchorHasBrand )
			return anchor;

		anchorWords = cleanSplitLower(anchor.theAnchor);

		matchingKeywords = [];
		for(i = 0; i < FormFields.keywords.length; i++) {
			keyword = FormFields.keywords[i];
			keywordWords = cleanSplitLower(keyword);

			// How many words are present in both arrays ... hopefully at least 1
			matchingKeywords = _.intersection(anchorWords, keywordWords);
			// console.log( 'matchingKeywords: ' + (matchingKeywords.length > 0) );
			
			// CONDITION MET: matching keywords
			if(matchingKeywords.length > 0) {
				anchor.type = 'BRAND & KEYWORD TOGETHER'
				break;
			}
		}

		// Count ...
		if( anchor.type == 'BRAND & KEYWORD TOGETHER' )
			COUNT.isBrandKeywordTogether++;

		return anchor;
	});

	return anchors;
}