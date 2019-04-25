<?php
	// for debugging purposes
	// if($_SERVER['REMOTE_ADDR'] == '95.87.220.53')
		// return;
	
	$seoTools = array();
	$j = 1;
	foreach($tools as $tool) {
		
		// For debugging purposes
		// if( $_SERVER['REMOTE_ADDR'] == '95.87.220.53' )
			// echo $tool->name . "<br>";

		$toolSummary = str_replace(array("\\", "\'"), array("", "'"), $tool->summary);
		$toolDesc	 = str_replace("\\'", "'", $tool->description);
		
		if( isset($_REQUEST['simplify']) ) {
			$toolSummary = $toolDesc = '';
		}
	
		$seoTools[] = array(
			'id' 			=> $tool->id,
			'name' 			=> $tool->name,
			'homepage_url' 	=> $tool->homepage_url,
			'home_dofollow' => $tool->home_dofollow,

			'votes' 		=> $tool->votes,
			'type' 			=> $tool->type,
			'price' 		=> $tool->price,
			'summary' 		=> $toolSummary,
			'description' 	=> $toolDesc,
			
			'links'	=> array(
				array('link' => $tool->link1, 'text' => $tool->link1_text, 'dofollow' => $tool->link1_dofollow),
				array('link' => $tool->link2, 'text' => $tool->link2_text, 'dofollow' => $tool->link2_dofollow),
				array('link' => $tool->link3, 'text' => $tool->link3_text, 'dofollow' => $tool->link3_dofollow),
				array('link' => $tool->link4, 'text' => $tool->link4_text, 'dofollow' => $tool->link4_dofollow),
				array('link' => $tool->link5, 'text' => $tool->link5_text, 'dofollow' => $tool->link5_dofollow)
			),

			'imgs' => array(
				array('src' => $tool->img1, 'caption' => $tool->img1_text),
				array('src' => $tool->img2, 'caption' => $tool->img2_text),
				array('src' => $tool->img3, 'caption' => $tool->img3_text),
				array('src' => $tool->img4, 'caption' => $tool->img4_text),
				array('src' => $tool->img5, 'caption' => $tool->img5_text)
			),

			'videos' => array(
				str_replace('/watch?v=', '/embed/', $tool->video1),
				str_replace('/watch?v=', '/embed/', $tool->video2),
				str_replace('/watch?v=', '/embed/', $tool->video3),
				str_replace('/watch?v=', '/embed/', $tool->video4),
				str_replace('/watch?v=', '/embed/', $tool->video5),
			)
		);
		
		// if(isset($_REQUEST['simplify']))
			// if($j == 10) break;
		$j++;
	}
	
?>
<script>
seoTools = <?php echo json_encode($seoTools); ?>
</script>

<?php /*
seoTools = [
{
	'id': 1,
	'name': 'Ahrefs',
	'votes': '105',
	'type': ['Link_Building', 'Technical_SEO'],
	'price': 'Free',
	'summary': 'I you do outreach at scale or with a team, you NEED a tool like Ahrefs. Why? Ahrefs makes the messy job of email outreach and link building streamlined and organized. Make sure to check out their new prospecting and email-finding features.',
	'description': 'Here is the detailed description...',
		
	'links' : [
		{'text': 'Home page', 'link' :'#1'},
		{'text': 'Features page', 'link' : '#2'},
		{'text': 'Pricing page', 'link' : '#3'}
	],
	'imgs': [
		{'src': '<?php echo get_template_directory_uri(); ?>/seo-tools/images/seo-slider-image1.jpg', 'caption' : 'Link Building Streamlined 1'},
		{'src': '<?php echo get_template_directory_uri(); ?>/seo-tools/images/seo-slider-image1.jpg', 'caption' : 'Link Building Streamlined 2'},
		{'src': '<?php echo get_template_directory_uri(); ?>/seo-tools/images/seo-slider-image1.jpg', 'caption' : 'Link Building Streamlined 3'}
	],
	'videos': ['https://www.youtube.com/embed/EBgguPTAPkc?rel=0', 'https://www.youtube.com/embed/F2sP_5vDbis?rel=0', 'https://www.youtube.com/embed/F2sP_5vDbis?rel=0']
},
{
	'id' : 2,
	'name': 'Buzzstream',
	'votes': '35',
	'type': ['Rank_Tracking', 'Content_Optimization'],
	'price': 'Paid',
	'summary': 'I you do outreach at scale or with a team, you NEED a tool like Buzzstream. Why? Buzzstream makes the messy job of email outreach and link building streamlined and organized. Make sure to check out their new prospecting and email-finding features.',
	'description': 'Here is the detailed description...',
		
	'links': [
		{'text': 'Home page', 'link' : '#4'},
		{'text': 'Features page', 'link' : '#5'},
		{'text': 'Pricing page', 'link' : '#6'}
	],
	'imgs': [
		{'src': '<?php echo get_template_directory_uri(); ?>/seo-tools/images/seo-slider-image1.jpg', 'caption' : 'Link Building Streamlined 1'},
		{'src': '<?php echo get_template_directory_uri(); ?>/seo-tools/images/seo-slider-image1.jpg', 'caption' : 'Link Building Streamlined 2'},
		{'src': '<?php echo get_template_directory_uri(); ?>/seo-tools/images/seo-slider-image1.jpg', 'caption' : 'Link Building Streamlined 3'}		
	],
	'videos': ['https://www.youtube.com/embed/wJd6doWdM-0?rel=0', 'https://www.youtube.com/embed/VSIVlm2kfSQ?rel=0', 'https://www.youtube.com/embed/3yGMBM-OP1A?rel=0']
}



]; */ ?>