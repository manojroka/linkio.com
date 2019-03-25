function isHighEntropy(s) {
	vc = 0;// consec vowels
	cc = 0;// consec consonants
	
	vcMoreThan4 = false;
	ccMoreThan4 = false;

	prevcharisvowel = true;
	
	for(i = 0; i < s.length; i++) {
		c = s[i];
		
		if( !isAlpha(c) ) {
			vc = cc = 0; // Reset counters
			continue;
		}
		
		if( isVowel(c) ) { // if char is a vowel
			cc = 0; // Reset consonants
			
			if( prevcharisvowel ) { // and the prev char was a vowel too
				vc++; // then increment
			} else { // else this was the first vowel
				vc = 1;
				prevcharisvowel = true;
			}
			
			if(vc > 4) vcMoreThan4 = true;
			
		} else { // if char is a consonant
			vc = 0; // Reset vowels
			
			if( prevcharisvowel ) { // and prev char was vowel
				cc = 1; // this is the first consonant
				prevcharisvowel = false;
			} else {
				// else increment consecutive consonant count
				cc++;
			}
			
			if(cc > 4) ccMoreThan4 = true;
			
		}
	}
	
	// For debugging
	// if( s == '' ) {
		// console.log( 'vcMoreThan4: ' + vcMoreThan4 );
		// console.log( 'ccMoreThan4: ' + ccMoreThan4 );
	// }

	if( vcMoreThan4 || ccMoreThan4 )
		return true;
	
	return false;
}

function isAlpha(c) {
	if( /[^a-zA-Z]/.test(c) )
		return false;
	
	return true;
}		

function isVowel(c) {
    return ['a', 'e', 'i', 'o', 'u'].indexOf(c.toLowerCase()) > -1
}