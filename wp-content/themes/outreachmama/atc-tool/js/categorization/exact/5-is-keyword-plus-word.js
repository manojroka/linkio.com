// Type 5 - Keyword Plus Word +
function isKeywordPlusWord(anchors) {
	// console.log( '# isKeywordPlusWord' );

	// IF anchor contains only the keyword (regardless of the word order) and 1 OR MORE other words,
	// it is a KEYWORD PLUS WORD
	anchors = _.map(anchors, function(anchor) {
		// Anchor already categorized .. continue to next
		if( anchor.type !== null ) return anchor;

		// The anchor is link/url
		if( isLink(anchor.theAnchor) ) return anchor;

		anchorWords = cleanSplitLower(anchor.theAnchor);
		anchorWordsNoSuffixes = cleanWordsSuffixes(anchorWords);

		// For debugging
		// console.group( '# The anchor: ' + anchor.theAnchor );

		matchingKeywords = null;
		for( i = 0; i < FormFields.keywords.length; i++ ) {
			keyword = FormFields.keywords[i];
			if(keyword == '') continue;

			keywordWords = cleanSplitLower(keyword);
			keywordWordsNoSuffixes = cleanWordsSuffixes(keywordWords);

			// How many words are present in both arrays ... hopefully none
			matchingKeywords = _.intersection(anchorWordsNoSuffixes, keywordWordsNoSuffixes);

			// if any matching anchor <-> keywords ...
			if(matchingKeywords)
				// and all the keywords are matched ...
				if( matchingKeywords.length === keywordWords.length )
					// and anchor words are more than the matching words
					if(anchorWordsNoSuffixes.length > matchingKeywords.length) {
						anchor.type = 'KEYWORD PLUS WORD';
						break;
					}
		}
		
		// For debugging
		// console.log( 'anchor.type: ' + anchor.type );
		// console.groupEnd();

		// Count ...
		if( anchor.type == 'KEYWORD PLUS WORD' )
			COUNT.isKeywordPlusWord++;

		return anchor;
	});

	return anchors;
}