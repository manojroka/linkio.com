// Type 4 - Naked URL
function isNakedUrl() {
	// console.log( '# isNakedUrl' );
	/*
		IF the anchor text matches the exact URL of the destination link
		(with the / at the end being optional) and contains http:// or https:// it is a NAKED URL
	*/

	// How do I parse a URL into hostname and path in javascript?
	// @link https://stackoverflow.com/a/15979390
	var anchorParser, destinationParser;
	destinationParser 		= document.createElement('a');
	destinationParser.href = FormFields.destinationLink;

	// alert( destinationParser.href );

	anchors = _.map(anchors, function(anchor) {
		// Anchor already categorized .. continue to next
		if( anchor.type !== null ) return anchor;
		theAnchor = anchor.theAnchor;

		// Its not a link .. continue
		if( !isValidUrl(anchor.theAnchor) ) return anchor;

		$http = false;
		if( theAnchor.indexOf('http://') > -1 )
			$http = true;

		$https = false;
		if( theAnchor.indexOf('https://') > -1 )
			$https = true;
			
		
		// At least 1 type of protocol is required ...
		if( $http || $https ) {
			;
		} else {
			// CONDITION NOT MET: Protocol is required for Naked Url
			return anchor;
		}

		anchorParser = document.createElement('a');
		
		// The Browser url parser requires a protocol ... otherwise there is a nasty bug
		if( theAnchor.indexOf('http') === -1 ) theAnchor = 'http://' + theAnchor;
		anchorParser.href 	= theAnchor;
	
		// For debugging:
		// if( theAnchor == 'www.outreachmama.com/link-building-tools' ) {
			// alert( 'anchorParser.hostname: ' 		+ anchorParser.hostname );
			// alert( 'destinationParser.hostname: ' 	+ destinationParser.hostname );
		// }

		// The anchor & destination are striped to domain.ext and compared
		if( anchorParser.hostname.replace('www.', '') == FormFields.destLink )
			anchor.type = 'NAKED URL';

		// Count ...
		if( anchor.type == 'NAKED URL' )
			COUNT.isNakedUrl++;

		return anchor;
	});

	return anchors;
}