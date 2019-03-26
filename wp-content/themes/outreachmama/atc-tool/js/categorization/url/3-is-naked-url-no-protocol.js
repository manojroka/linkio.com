// Type 3 - Naked URL .. no protocol - (www.)linkio.com/abc
function isNakedUrlNoProtocol(anchors) {
	// console.log( '# isNakedUrlNoProtocol' );
	// console.log( anchors );

	/*
		IF the anchor text matches the exact URL of the destination link (with the / at the end being
		optional) but does not have http:// or https:// in the front, it is a NAKED URL WITHOUT HTTP://
	*/
	
	// How do I parse a URL into hostname and path in javascript?
	// @link https://stackoverflow.com/a/15979390
	var anchorParser;
	
	anchors = _.map(anchors, function(anchor) {
		// Anchor already categorized .. continue to next
		if( anchor.type !== null ) return anchor;

		// Its not a link .. continue
		if( !isValidUrl(anchor.theAnchor) ) return anchor;

		// It has http protocol .. continue
		if( anchor.theAnchor.indexOf('http://') > -1 )
			return anchor;

		// It has https protocol .. continue
		if( anchor.theAnchor.indexOf('https://') > -1 )
			return anchor;

		anchorParser 		= document.createElement('a');
		theAnchor		 	= anchor.theAnchor;
		// The Browser url parser requires a protocol ... otherwise there is a nasty bug
		if( theAnchor.indexOf('://') === -1 ) theAnchor = 'http://' + theAnchor;
		anchorParser.href 	= theAnchor;
		
		// For debugging:
		// console.group( 'anchor.theAnchor: ' + anchor.theAnchor );
			// console.log( 'anchorParser.hostname: ' + anchorParser.hostname );
			// console.log( 'destinationParser.hostname: ' + destinationParser.hostname );
		// console.groupEnd();
		
		// The anchor & destination are striped to domain.ext and compared
		if( anchorParser.hostname.replace('www.', '') == FormFields.destLink )
			anchor.type = 'NAKED URL WITHOUT HTTP://';

		// Count ...
		if( anchor.type == 'NAKED URL WITHOUT HTTP://' )
			COUNT.isNakedUrlNoProtocol++;

		return anchor;
	});

	return anchors;
}