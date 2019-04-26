// Type 1 - Just Natural
function isJustNatural(anchors) {
	
	// console.log( '# isJustNatural' );

	// IF the anchor text does not match any of the above, it is JUST NATURAL
	anchors = _.map(anchors, function(anchor) {
		// $.inArray() returns position in array ... or -1
		if( (anchor.type == null) && ($.inArray(anchor.theAnchor, justNaturalTokens) > -1) )
			anchor.type = 'JUST NATURAL';

		if( anchor.type == null )
			anchor.type = 'JUST NATURAL';

		if( anchor.type == 'JUST NATURAL' )
			COUNT.isJustNatural++;

		return anchor;
	});

	return anchors;
}

var justNaturalTokens = [
'a cool way to improve',
'a fantastic read',
'a knockout post',
'a replacement',
'a total noob',
'about his',
'active',
'additional hints',
'additional info',
'additional reading',
'additional resources',
'address',
'advice',
'agree with',
'anchor',
'anonymous',
'are speaking',
'article',
'article source',
'at bing',
'at yahoo',
'basics',
'best site',
'blog',
'bonuses',
'breaking news',
'browse around here',
'browse around these guys',
'browse around this site',
'browse around this web-site',
'browse around this website',
'browse this site',
'check',
'check here',
'check it out',
'check out here',
'check out the post right here',
'check out this site',
'check out your url',
'check over here',
'check these guys out',
'check this link right here now',
'check this out',
'check this site out',
'click',
'click for info',
'click for more',
'click for more info',
'click for source',
'click here',
'click here for info',
'click here for more',
'click here for more info',
'click here now',
'click here to find out more',
'click here to investigate',
'click here to read',
'click here!',
'click here.',
'click now',
'click over here',
'click over here now',
'click this',
'click this link',
'click this link here now',
'click this link now',
'click this over here now',
'click this site',
'click to find out more',
'click to investigate',
'click to read',
'clicking here',
'company website',
'consultant',
'content',
'continue',
'continue reading',
'continue reading this',
'continue reading this..',
'continued',
'conversational tone',
'cool training',
'describes it',
'description',
'dig this',
'directory',
'discover here',
'discover more',
'discover more here',
'discover this',
'discover this info here',
'do you agree',
'enquiry',
'experienced',
'explanation',
'extra resources',
'find',
'find more',
'find more info',
'find more information',
'find out here',
'find out here now',
'find out more',
'find out this here',
'for beginners',
'from this source',
'full article',
'full report',
'funny post',
'get more',
'get more info',
'get more information',
'get redirected here',
'get the facts',
'go',
'go here',
'go now',
'go right here',
'go to the website',
'go to these guys',
'go to this site',
'go to this web-site',
'go to this website',
'go to website',
'go!!',
'going here',
'good',
'great post to read',
'great site',
'had me going',
'have a peek at these guys',
'have a peek at this site',
'have a peek at this web-site',
'have a peek at this website',
'have a peek here',
'he has a good point',
'he said',
'helpful hints',
'helpful resources',
'helpful site',
'her comment is here',
'her explanation',
'her latest blog',
'her response',
'here',
'here are the findings',
'here.',
'his comment is here',
'his explanation',
'his response',
'home',
'home page',
'homepage',
'hop over to here',
'hop over to these guys',
'hop over to this site',
'hop over to this web-site',
'hop over to this website',
'how much is yours worth?',
'how you can help',
'i loved this',
'i thought about this',
'i was reading this',
'image source',
'in the know',
'index',
'informative post',
'inquiry',
'internet',
'investigate this site',
'killer deal',
'knowing it',
'learn here',
'learn more',
'learn more here',
'learn the facts here now',
'learn this here now',
'like it',
'like this',
'link',
'[link]',
'linked here',
'listen to this podcast',
'look at here',
'look at here now',
'look at more info',
'look at these guys',
'look at this',
'look at this now',
'look at this site',
'look at this web-site',
'look at this website',
'look here',
'look these up',
'look what i found',
'love it',
'lowest price',
'made a post',
'made my day',
'more',
'more about the author',
'more bonuses',
'more help',
'more helpful hints',
'more hints',
'more info',
'more info here',
'more information',
'more tips here',
'more..',
'moreâ…',
'moved here',
'my company',
'my explanation',
'my latest blog post',
'my response',
'my review here',
'my sources',
'navigate here',
'navigate to these guys',
'navigate to this site',
'navigate to this web-site',
'navigate to this website',
'news',
'next',
'next page',
'no title',
'official site',
'official source',
'official statement',
'official website',
'on bing',
'on front page',
'on the main page',
'on yahoo',
'one-time offer',
'online',
'original site',
'other',
'our site',
'our website',
'over at this website',
'over here',
'page',
'pop over here',
'pop over to these guys',
'pop over to this site',
'pop over to this web-site',
'pop over to this website',
'prev',
'previous',
'published here',
'read',
'read full article',
'read full report',
'read here',
'read more',
'read more here',
'read moreâ…',
'read review',
'read the article',
'read the full info here',
'read this',
'read this article',
'read this post here',
'read what he said',
'recommended reading',
'recommended site',
'recommended you read',
'redirected here',
'reference',
'related site',
'resource',
'resources',
'review',
'right here',
'secret info',
'see',
'see here',
'see here now',
'see it here',
'see page',
'see post',
'see this',
'see this here',
'see this page',
'see this site',
'see this website',
'sell',
'she said',
'site',
'site web',
'sites',
'sneak a peek at these guys',
'sneak a peek at this site',
'sneak a peek at this web-site',
'sneak a peek at this web-site.',
'sneak a peek at this website',
'sneak a peek here',
'source',
'[source]',
'sources tell me',
'speaking of',
'special info',
'straight from the source',
'such a good point',
'super fast reply',
'take a look at the site here',
'talking to',
'talks about it',
'that guy',
'the',
'the advantage',
'the full details',
'the full report',
'the original source',
'their explanation',
'their website',
'these details',
'they said',
'this',
'this article',
'this contact form',
'this content',
'this guy',
'this hyperlink',
'this link',
'this page',
'this post',
'this site',
'this website',
'top article',
'total stranger',
'try here',
'try these guys',
'try these guys out',
'try these out',
'try this',
'try this out',
'try this site',
'try this web-site',
'try this website',
'try what he says',
'try what she says',
'understanding',
'updated blog post',
'url',
'us',
'use this link',
'via',
'view',
'view it',
'view it now',
'view publisher site',
'view siteâ…',
'view website',
'visit',
'visit here',
'visit homepage',
'visit our website',
'visit site',
'visit the site',
'visit the website',
'visit their website',
'visit these guys',
'visit this link',
'visit this page',
'visit this site',
'visit this site right here',
'visit this web-site',
'visit this website',
'visit website',
'visit your url',
'visite site',
'watch this video',
'web',
'web link',
'web site',
'weblink',
'webpage',
'website',
'website link',
'websites',
'what do you think',
'what google did to me',
'what is it worth',
'why not check here',
'why not find out more',
'why not look here',
'why not try here',
'why not try these out',
'why not try this out',
'you can check here',
'you can find out more',
'you can look here',
'you can try here',
'you can try these out',
'you can try this out',
'you could check here',
'you could look here',
'you could try here',
'you could try these out',
'you could try this out',
'your domain name',
'your input here',
'check my blog',
'click site',
'useful reference',
'imp source',
'click to read more',
'find this',
'my site',
'check my site',
'check that',
'website here',
'useful source',
'click resources',
'my link',
'important source',
'click reference',
'blog here',
'check my source',
'go to my blog',
'find here',
'important site',
'important link',
'my website',
'my blog',
'useful site',
'site here',
'check this',
'wikipedia reference',
'that site',
'useful content',
'find out',
'site link',
'go to my site',
'check my reference',
'useful link',
'blog link',
'click the following page',
'click the following website',
'click the following webpage',
'click the following web page',
'click the following link',
'click the following post',
'click the following internet page',
'click the following internet site',
'click the following article',
'click through to this article',
'click through to the following page',
'click through to the following web page',
'click through the following webpage',
'click here for more information',
'see these helpful hints',
'see these helpful tips',
'see this helpful information',
'see this article',
'check out these helpful tips',
'check out this information',
'check out this info',
'check out this tutorial',
'read this page',
'read my article',
'visit this web page',
'visit this webpage',
'visit this url',
'visit url',
'see more information',
'see more info',
'see more tips',
'see more hints',
'read much more',
'visit the following website',
'read more about this',
'check out this article',
'refer to this article',
'refer to this page',
'refer to this site',
'refer to this web page',
'refer to this article for more information',
'refer to this page for more tips',
'refer to this site for additional information',
'refer to this web page for more info',
'[link] linked here',
'more…',
'read more…',
'[source] sources tell me',
'view site…',
'will speak',
'yes'
];