// Type 3 - Exact Keyword
function isExactKeyword(anchors) {
	// console.log( '# isExactKeyword' );

	// IF anchor contains only the keyword (regardless of the word order) and no other words, it is an EXACT KEYWORD
	anchors = _.map(anchors, function(anchor) {
		// Anchor already categorized .. continue to next
		if( anchor.type !== null ) return anchor;

		// The anchor is link/url
		if( isLink(anchor.theAnchor) ) return anchor;

		anchorWords = cleanSplitLower(anchor.theAnchor);
		
		// For debugging
		// console.group(anchor.theAnchor);
		
		// Maybe use _.intersection & length ?
		for(i = 0; i < FormFields.keywords.length; i++) {
			keyword = FormFields.keywords[i];
			if(keyword == '') continue;
			
			// Perfect/exact match
			if( anchor.theAnchor.toLowerCase() == keyword.toLowerCase() ) {
				anchor.type = 'EXACT KEYWORD';
				break;
			}

			keywordWords = cleanSplitLower(keyword);
			// Exact match (regardless of word order)
			matchingKeywords = _.intersection(anchorWords, keywordWords);

			// if any match
			if(matchingKeywords.length > 0) {
				// and 100% word match ... irregardless of order
				if( areEqual(anchorWords.length, keywordWords.length, matchingKeywords.length) ) {
					anchor.type = 'EXACT KEYWORD';
					break;
				}
			}
		}
		
		// console.groupEnd();

		// Count ...
		if( anchor.type == 'EXACT KEYWORD' )
			COUNT.isExactKeyword++;

		return anchor;
	});

	return anchors;
}