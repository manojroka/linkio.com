/*
 * Take string ... split into array of lines ... shuffle ... return array
 *
 * @return array Array of strings
 */
function str2Arr(str, options) {
	var arrLines = str.split(options.separator);
	
	arrLines = arrLines.filter( function(entry) {
		return (entry.trim() != '');
	});
	
	if(options.shuffle)
		arrLines = _.shuffle(arrLines);
	
	return arrLines;
}

/*
 * Take Keywords from textarea ... return array
 *
 * @return array Array of strings
 */
function textarea2Arr(id) {
	var val = $(id).val();
	var arr = str2Arr( val, {separator: "\n", shuffle: true} );
	
	return arr;
}


/*
 * Jiggle the anchors - then extract 100 of them for each anchor type
 * 
 * @param string Page type
 * 
 * @return null
*/
function jiggleAndExtract(pageType) {
	keywordPlusPartOfKeywordAnchors = _.shuffle(KEYWORD_TOOL.PageType_keywordPlusPartOfKeyword[pageType]).slice(0, 100);
	brandedAnchors					= _.shuffle(KEYWORD_TOOL.PageType_branded[pageType]).slice(0, 100);
	brandedPlusKeywordAnchors 		= _.shuffle(KEYWORD_TOOL.PageType_brandedPlusKeyword[pageType]).slice(0, 100);
	justNaturalAnchors	 			= _.shuffle(KEYWORD_TOOL.PageType_justNatural[pageType]).slice(0, 100);
}


/*
 * Replaces all city/state/st vars with user entered values.
 *
 * @param string The original anchor
 * @param string City value
 * @param string State value
 * @param string State (abbreviated) value
 *
 * @return string
 */
function replaceCityStateAbbr(theAnchor, city, state, st) {
	// city is within the anchor - but not entered .. return empty anchor
	if( theAnchor.indexOf('{city}') !== -1 )
		if(city == '') return '';
	
	// state is within the anchor - but not entered .. return empty anchor
	if( theAnchor.indexOf('{state}') !== -1 )
		if(state == '') return '';
	
	// st is within the anchor - but not entered .. return empty anchor
	if( theAnchor.indexOf('{st}') !== -1 )
		if(st == '') return '';
		
	return theAnchor.replace('{city}', city).replace('{state}', state).replace('{st}', st);
}

/*
 * Checks if the form is unlocked
 *
 * @return bool
 */
function isFormUnlocked() {
	// Get cookie
	cookie_linkio_tool = Cookies.get('linkio_keywords');
	
	if( cookie_linkio_tool == 'unlocked' )
		return true;
	
	return false;
}