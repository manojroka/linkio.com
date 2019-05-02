// Type 1 - No Text +
function isNoText(anchors) {
	// console.log( '# isNoText' );
	// console.log( anchors );

	/*
		IF the anchor text area is blank, it is NO TEXT
	*/
	
	anchors = _.map(anchors, function(anchor) {
		if(anchor.theAnchor == '')
			anchor.type = 'NO TEXT';

		var blankTokens = [
			'<a>no text</a>',
			'Empty Anchor',
			'[no anchor text]',
			'Empty Anchor Text',
		];

		// $.inArray() returns position in array ... or -1
		if( $.inArray(anchor.theAnchor, blankTokens) != -1 )
			anchor.type = 'NO TEXT';

		// Increase the count ...
		if( anchor.type == 'NO TEXT' )
			COUNT.isNoText++;

		return anchor;
	});

	return anchors;
}