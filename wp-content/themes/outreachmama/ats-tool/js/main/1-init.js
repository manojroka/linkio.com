var keywordPlusPartOfKeywordAnchors, brandedAnchors, brandedPlusKeywordAnchors, justNaturalAnchors;

var distributionType;
var teaserDistribution, fullDistribution, teaserAnchors, fullAnchors;
teaserDistribution = [];
fullDistribution = [];

// The dataset used for generating the table
// Anchors - split as Teaser & Full - with up to 4 types
var finalAnchors = {
	'teaser': [], // Up to 4 types
	'full': [],	 // Up to 4 types
};

var readableAnchorType = [];
readableAnchorType['keywordPlusPartOfKeywordAnchors'] = 'Keyword Plus & Just Part of Keyword';
readableAnchorType['brandedAnchors'] = 'Branded';
readableAnchorType['brandedPlusKeywordAnchors'] = 'Branded + Keyword';
readableAnchorType['justNaturalAnchors'] = 'Just Natural';