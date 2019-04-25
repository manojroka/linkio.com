// Type 2 - Totally Random +
function isTotallyRandom(anchors) {
	// console.log( '# isTotallyRandom' );
	// console.log( anchors );

	/*
		Maybe we should have totally random be triggered for jibberish or super long anchors that don’t
		match certain things that would quality as just natural.
	*/
	var anchorLength, hasWhitespace;
	
	anchors = _.map(anchors, function(anchor) {
		// Anchor already categorized .. continue to next
		if( anchor.type !== null ) return anchor;

		// Detect if link .. continue to next
		if( isLink(anchor.theAnchor) )
			return anchor;

		// NOT EFFECTIVE:
		// entropy = shannon.entropy(anchor.theAnchor);
		// console.group( 'Anchor: ' + anchor.theAnchor );
			// console.log( 'Entropy: ' + entropy );
		// console.groupEnd();

		// Get anchor length
		anchorLength = finalAnchor.theAnchor.length;

		// Check if it has whitespace
		hasWhitespace = false;
		if( finalAnchor.theAnchor.indexOf(' ') > -1 )
			hasWhitespace = true;

		// Too long without whitespace = random
		if( (anchorLength > 20 ) && !hasWhitespace ) {
			finalAnchor.type = 'TOTALLY RANDOM';
			return anchor;
		}
		
		// High entropy test = random
		if( isHighEntropy( anchor.theAnchor ) ) {
			anchor.type = 'TOTALLY RANDOM';
			return anchor;
		}

		// Too long ...
		if( anchor.theAnchor.length > 200 )
			anchor.type = 'TOTALLY RANDOM';

		if( anchor.type == 'TOTALLY RANDOM' )
			COUNT.isTotallyRandom++;

		return anchor;
	});

	return anchors;
}