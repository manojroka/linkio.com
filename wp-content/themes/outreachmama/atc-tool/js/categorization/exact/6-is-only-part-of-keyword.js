// Type 6 - Only Part of Keyword
function isOnlyPartOfKeyword(anchors) {

	// console.log( '# isOnlyPartOfKeyword' );
	// console.log( anchors );

	/*
		IF anchor contains only part of the keyword,
		but not all of the words, but it does contain other random words,
		it is an ONLY PART OF KEYWORD
		
		IF anchor contains only part of the keyword but not all of the words,
		it is an ONLY PART OF KEYWORD
	*/
	anchors = _.map(anchors, function(anchor) {
		// Anchor already categorized .. continue to next
		if( anchor.type !== null ) return anchor;

		// The anchor is link/url
		if( isLink(anchor.theAnchor) ) return anchor;

		// Get the anchor words
		anchorWords = cleanSplitLower(anchor.theAnchor);

		// Remove all word suffixes
		anchorWordsNoSuffixes = cleanWordsSuffixes(anchorWords);
		
		// For debugging:
		// console.group( '# The anchor words: ' + anchorWords );
		
		for(i = 0; i < FormFields.keywords.length; i++) {
			keyword = FormFields.keywords[i];
			keywordWords = cleanSplitLower(keyword);
			keywordWordsNoSuffixes = cleanWordsSuffixes(keywordWords);

			// Which words are present in both clened arrays
			matchingWords = _.intersection(anchorWordsNoSuffixes, keywordWordsNoSuffixes);
			
			// If there is at least 1 matching word
			if( matchingWords.length > 0 ) {
				anchor.type = 'ONLY PART OF KEYWORD';
				break;
			}
		}

		// For debugging:
		// console.groupEnd();

		// Count ...
		if( anchor.type == 'ONLY PART OF KEYWORD' )
			COUNT.isOnlyPartOfKeyword++;

		return anchor;
	});

	return anchors;
}