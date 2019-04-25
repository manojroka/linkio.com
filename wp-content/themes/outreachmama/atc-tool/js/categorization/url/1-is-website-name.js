// Type 1 - WebsiteName.com +
function isWebsiteName(anchors) {
	// console.log( '# isWebsiteName' );
	// console.log( anchors );
	
	/*
		IF the anchor text matches the root domain URL and does not contain either http://, https:// or
		www. It is WEBSITENAME.COM
	*/

	// destinationLinkNoProtocolNoSubdomain = FormFields.destinationLink.replace('http://', '').replace('https://', '').replace('www.', '');
	anchors = _.map(anchors, function(anchor) {
		// Anchor already categorized .. continue to next
		if( anchor.type !== null ) return anchor;

		if(anchor.theAnchor.toLowerCase() == FormFields.destLink)
			anchor.type = 'WEBSITENAME.COM';

		// Count ...
		if( anchor.type == 'WEBSITENAME.COM' )
			COUNT.isWebsiteName++;

		return anchor;
	});

	return anchors;
}