<?php $initialId_a = 'disqus_thread'; // Quick Hack - add disqus_thread id to 1st tool only ?>
<?php $j = 1;
foreach ($tools_ajax as $tool) { ?>
    <?php // break; // For debugging  ?>
    <div class="seo-tool" id="tool<?php echo $tool->id; ?>">
        <h2><a class="toggle-info"><i class="fa fa-caret-right"></i><?php echo $tool->name; ?></a></h2>

        <div class="voting">
            <a href="#" class="upvote" data-tool-id="<?php echo $tool->id; ?>" data-toggle="tooltip" data-placement="top" title="Click to vote +1">
                <i class="fa fa-caret-up"></i>
                <span class="num-vote"><?php echo $tool->votes; ?></span>
            </a>
        </div>

        <div class="meta">
            <h5><?php echo str_replace(array(',', '_'), array(', ', ' '), $tool->type); ?></h5>
            <h5><?php echo $tool->price; ?><h5>
                    </div>

                    <p><?php
                        $toolSummary = $tool->summary;
                        if (isset($_REQUEST['simplify']))
                            $toolSummary = '';
                        echo $toolSummary;
                        ?></p>

                    <div class="quick-links">
                        <h3>Quick Links</h3>
                        <?php
                        /* Tool's Links */
                        $link1 = fixUrl_a($tool->link1);
                        $link2 = fixUrl_a($tool->link2);
                        $link3 = fixUrl_a($tool->link3);
                        $link4 = fixUrl_a($tool->link4);
                        $link5 = fixUrl_a($tool->link5);

                        $homeFollow = ($tool->home_dofollow ? '' : 'rel="nofollow"');

                        $doFollow1 = ($tool->link1_dofollow ? '' : 'rel="nofollow"');
                        $doFollow2 = ($tool->link2_dofollow ? '' : 'rel="nofollow"');
                        $doFollow3 = ($tool->link3_dofollow ? '' : 'rel="nofollow"');
                        $doFollow4 = ($tool->link4_dofollow ? '' : 'rel="nofollow"');
                        $doFollow5 = ($tool->link5_dofollow ? '' : 'rel="nofollow"');
                        ?>
                        <?php if ($tool->homepage_url != '') echo "<h6><a href='{$tool->homepage_url}' {$homeFollow} target='_blank'>Homepage<i class='fa fa-external-link'></i></a></h6>"; ?>
                        <?php if ($link1 != '') echo "<h6><a href='{$link1}' {$doFollow1} target='_blank'>{$tool->link1_text}<i class='fa fa-external-link'></i></a></h6>"; ?>
                        <?php if ($link2 != '') echo "<h6><a href='{$link2}' {$doFollow2} target='_blank'>{$tool->link2_text}<i class='fa fa-external-link'></i></a></h6>"; ?>
                        <?php if ($link3 != '') echo "<h6><a href='{$link3}' {$doFollow3} target='_blank'>{$tool->link3_text}<i class='fa fa-external-link'></i></a></h6>"; ?>
                        <?php if ($link4 != '') echo "<h6><a href='{$link4}' {$doFollow4} target='_blank'>{$tool->link4_text}<i class='fa fa-external-link'></i></a></h6>"; ?>
    <?php if ($link5 != '') echo "<h6><a href='{$link5}' {$doFollow5} target='_blank'>{$tool->link5_text}<i class='fa fa-external-link'></i></a></h6>"; ?>
                    </div>

                    <p class="detailed-desc"><?php
                        $toolDesc = $tool->description;
                        if (isset($_REQUEST['simplify']))
                            $toolDesc = '';

                        echo $toolDesc;
                        ?></p>

    <?php if ($tool->img1 != '') { // We have at least 1 image ...  ?>
                        <div class="tool-images">
                            <h3><?php echo $tool->name; ?> images</h3>
                            <?php for ($i = 1; $i <= 5; $i++) { ?>
                                <?php
                                $img = "img" . $i;
                                $imgText = $img . '_text';

                                if (isset($tool->$img) && ($tool->$img != '')) {
                                    ?>
                                    <img data-src="<?php echo $tool->$img; ?>" alt="<?php echo strtolower($imgText); ?>" title="<?php echo $imgText; ?>" />
                                <?php } ?>
                        <?php } ?>
                        </div>
                    <?php } ?>

    <?php if ($tool->video1 != '') { // We have at least 1 video ...  ?>
                        <div class="tool-videos">
                            <h3><?php echo $tool->name; ?> videos</h3>

                            <?php for ($i = 1; $i <= 3; $i++) { ?>
                                <?php
                                $video = "video" . $i;
                                if (isset($tool->$video) && ($tool->$video != '')) {
                                    ?>
                                    <iframe width="720" height="405" data-src="<?php echo str_replace('/watch?v=', '/embed/', $tool->$video); ?>" frameborder="0" allowfullscreen></iframe>
                                <?php } ?>
                        <?php } ?>
                        </div>
    <?php } ?>

                    
    <?php if ($initialId_a == 'disqus_thread') $initialId_a = ''; // Reset initial id after 1st loop  ?>

                    </div>
                    <?php $j++; } ?>
	

<?php
$seoTools_a = array();
$j = 1;
foreach ($tools_ajax as $tool) {

    // For debugging purposes
    // if( $_SERVER['REMOTE_ADDR'] == '95.87.220.53' )
    // echo $tool->name . "<br>";

    $toolSummary = str_replace(array("\\", "\'"), array("", "'"), $tool->summary);
    $toolDesc = str_replace("\\'", "'", $tool->description);

    if (isset($_REQUEST['simplify'])) {
        $toolSummary = $toolDesc = '';
    }

    $seoTools_a = array(
        'id' => $tool->id,
        'name' => $tool->name,
        'homepage_url' => $tool->homepage_url,
        'home_dofollow' => $tool->home_dofollow,
        'votes' => $tool->votes,
        'type' => $tool->type,
        'price' => $tool->price,
        'summary' => $toolSummary,
        'description' => $toolDesc,
        'links' => array(
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
    ?>
    <script>
    seoTools_a = <?php echo json_encode($seoTools_a); ?>
    </script>
    <script>
//        console.log((seoTools));
        seoTools.push(seoTools_a);
    </script>
        <?php
    $j++;
}
?>
<script>
//    console.log(seoTools);
</script>