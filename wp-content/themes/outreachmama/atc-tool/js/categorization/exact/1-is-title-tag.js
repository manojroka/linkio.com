// Type 1 - Title Tag +
function isTitleTag(anchors) {
	
	// console.log( '# isTitleTag' );

	// IF anchor contains at least 75% of the page title, it is a TITLE TAG
	var howSimilar = 0;
	anchors = _.map(anchors, function(anchor) {
		// Anchor already categorized .. continue to next
		if( anchor.type !== null ) return anchor;
		
		for(i = 0; i < FormFields.pageTitles.length; i++) {
			pageTitle = FormFields.pageTitles[i];
			if(pageTitle == '') continue;
			
			// Perfect/exact match
			if( anchor.theAnchor.toLowerCase() == pageTitle.toLowerCase() ) {
				anchor.type = 'TITLE TAG';
				break;
			}

			howSimilar = similarity( anchor.theAnchor.toLowerCase(), pageTitle.toLowerCase() );
			if( howSimilar > 0.75 ) {
				anchor.type = 'TITLE TAG';
				break;
			}
		}
		

		// Count ...
		if( anchor.type == 'TITLE TAG' )
		COUNT.isTitleTag++;

		return anchor;
	});

	return anchors;
}