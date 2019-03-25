// Type 5 - 3rd Party Url
function is3rdPartyUrl(anchors) {
	// console.log( '# is3rdPartyLink' );

	/*
		IF ... ???
	*/
	anchors = _.map(anchors, function(anchor) {
		// Anchor already categorized .. continue to next
		if( anchor.type !== null ) return anchor;

		// Its a link ... might be updated in the future ...
		if( isValidUrl(anchor.theAnchor) )
			anchor.type = 'TOTALLY RANDOM';
			// anchor.type = 'THIRD PARTY URL';

		if( anchor.type == 'TOTALLY RANDOM' )
			COUNT.isTotallyRandom++;

		return anchor;
	});
	
	return anchors;
}