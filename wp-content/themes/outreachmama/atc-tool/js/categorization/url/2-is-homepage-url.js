// Type 2 - Homepage URL - www.linkio.com +
function isHomepageUrl(anchors) {
	// console.log( '# isHomepageUrl' );
	// console.log( anchors );

	// IF the anchor text matches the root domain URL and contains either http://, https:// or www. It is HOMEPAGE URL
	var anchorParser;
	
	anchors = _.map(anchors, function(anchor) {
		// Anchor already categorized .. continue to next
		if( anchor.type !== null ) return anchor;

		hasHttp = hasHttps = hasWww = false;

		if( anchor.theAnchor.indexOf('http://') > -1 )
			hasHttp = true;

		if( anchor.theAnchor.indexOf('https://') > -1 )
			hasHttps = true;

		if( anchor.theAnchor.indexOf('www.') > -1 )
			hasWww = true;
		
		if( hasHttp || hasHttps || hasWww ) {
			;
		} else {
			// CONDITION NOT MET: Doesn't contain http://, https:// or www
			return anchor;
		}
		
		anchorParser = document.createElement('a');
		
		if( hasHttp || hasHttps ) anchorParser.href = anchor.theAnchor;
		else 					  anchorParser.href = 'http://' + anchor.theAnchor;

		// If there is something after the slash ... the anchor is not a homepage
		if(anchorParser.pathname.length > 1)
			return anchor;

		theAnchorHostname = anchorParser.hostname;
		theAnchorHostnameNoSubdomain = theAnchorHostname.replace('www.', '');

		// For debugging:
		// console.log( 'theAnchorLink: ' + theAnchorLink );
		// console.log( 'destinationLink: ' + destinationLink );

		if( theAnchorHostnameNoSubdomain == FormFields.destLink )
			anchor.type = 'HOMEPAGE URL';

		// Count ...
		if( anchor.type == 'HOMEPAGE URL' )
			COUNT.isHomepageUrl++;

		return anchor;
	});

	return anchors;
}