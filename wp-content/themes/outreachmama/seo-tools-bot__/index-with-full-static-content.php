<?php /* <!-- Header - Old -->
	<div class="seo-tools-header">
	<div class="container">
		<div id="seo-titles">
			<h1>
				Best <strong>SEO</strong> tools<br>
				The <span id="green-title">Complete List</span><br>
				2018 Update
			</h1>
		</div>
		<div id="seo-image-robot">
			<img src="<?php echo get_template_directory_uri(); ?>/seo-tools/images/linkio-robot.png" />
		</div>
	</div>
</div> */ ?>

<!-- Header - New -->
<div id="seo-tools-header-new">
	<div class="container">
		<h1 id="seo-titles-new">
			<strong>Best SEO tools</strong>
			<div id="gray-title">The Complete List</div>
			<div id="blue-title">2018 Update</div>
		</h1>
	</div>
</div>

<!-- Intro -->
<div class="seo-tools-description">
	<div class="container">
		<p>If you want to see the best SEO Tools in one place, then you'll LOVE this guide.</p>
		<p>We personally tested and reviewed <span id="green-description">over <?php echo count($tools); ?> free and paid tools</span>.</p>
		<p>And you can search &amp; filter through the list to find the best SEO software for you.</p>
	</div>
</div>

<div class="seo-tools">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div id="seo-tools-sidebar">
					<div class="seo-tools-search">
						<div class="box-title">
							<h5>Find the best SEO tool</h5>
							<img src="<?php echo get_template_directory_uri(); ?>/seo-tools/images/icon-clear-filters.png" id="clear-filters"  data-toggle="tooltip" data-placement="top" title="Click to clear all filters" />
						</div>
						<form id="search-form">
							<div class="form-group">
								<label class="input-labels" for="search">Search:</label>
								<input type="text" id="search" placeholder="Find your SEO tool" />
							</div>
							
							<label class="input-labels" for="type">Filter by type:</label>						
							<div id="type">
								<div class="checkbox">								
									<input id="one" type="checkbox" class="filter-type" value="Link_Building" />
									<label for="one"><span>Link Building</span></label>														
								</div>
								<div class="checkbox">								
									<input id="two" type="checkbox" class="filter-type" value="Technical_SEO" />
									<label for="two"><span>Technical SEO</span></label>
								</div>
								<div class="checkbox">
									<input id="three" type="checkbox" class="filter-type" value="Rank_Tracking" />
									<label for="three"><span>Rank Tracking</span></label>															
								</div>
								<div class="checkbox">						
									<input id="four" type="checkbox" class="filter-type" value="Content_Optimization" />
									<label for="four"><span>Content Optimization</span></label>
								</div>
								<div class="checkbox">						
									<input id="five" type="checkbox" class="filter-type" value="Keyword_Research" />
									<label for="five"><span>Keyword Research</span></label>
								</div>
								<div class="checkbox">							
									<input id="six" type="checkbox" class="filter-type" value="Backlink_Analysis" />
									<label for="six"><span>Backlink Analysis</span></label>
								</div>
							</div>
							
							<label class="input-labels" for="price">Filter by price:</label>
							<div id="price">
								<button id="Free" type="button" class="btn btn-default filter-price">Free</button>
								<button id="Paid" type="button" class="btn btn-default filter-price">Paid</button>
								<button id="Freemium" type="button" class="btn btn-default filter-price">Freemium</button>
							</div>
							
							<label class="input-labels" for="sort">Sort:</label>
							<select id="sort" class="form-control">
								<option value="name:asc" selected>Tool name A-Z</option>
								<option value="name:desc">Tool name Z-A</option>
								<option value="votes:asc">By rating &#x25B2;</option>
								<option value="votes:desc">By rating &#x25BC;</option>
							</select>
							<hr>
							<div class="add-btn">
								<button id="add-new" type="button" class="btn btn-default" data-target="#modal-add-new-tool" data-toggle="modal" role="button"><i class="fa fa-plus-circle"></i>Add new tool</button>
							</div>
						</form>					
					</div>
				</div>
			</div>
			<div class="col-md-9" id="seo-tools-results-wrapper">
				<?php /* <div id="loader"></div> */ ?>
				<div id="seo-tools-results">
					<?php $initialId = 'disqus_thread'; // Quick Hack - add disqus_thread id to 1st tool only ?>

					<?php
						$j = 1;
						$hidden = '';
						foreach( $tools as $tool ) {
							if($j > 9) $hidden = 'hidden';
					?>
					<?php // break; // For debugging ?>
					<div class="seo-tool <?php echo $hidden; ?>" id="tool<?php echo $tool->id; ?>">
						<h2><a class="toggle-info" type="button"><i class="fa fa-caret-right"></i><?php echo $tool->name; ?></a></h2>
						
						<div class="voting">
							<a href="#" class="upvote" data-tool-id="<?php echo $tool->id; ?>" data-toggle="tooltip" data-placement="top" title="Click to vote +1">
								<i class="fa fa-caret-up"></i>
								<span class="num-vote"><?php echo $tool->votes; ?></span>
							</a>
						</div>

						<div class="meta">
							<h5><i class="fa fa-list-alt"></i><?php echo str_replace(array(',', '_'), array(', ', ' '), $tool->type); ?></h5>
							<h5><i class="fa fa-dollar"></i><?php echo $tool->price; ?><h5>
						</div>
						
						<p><?php
							$toolSummary = $tool->summary;
							if( isset($_REQUEST['simplify']) )
								$toolSummary = '';
							
							echo $toolSummary;
						?></p>
						
						<div class="quick-links">
							<h3>Quick Links</h3>
							<?php
								/* Tool's Links */
								$link1 = fixUrl($tool->link1);
								$link2 = fixUrl($tool->link2);
								$link3 = fixUrl($tool->link3);
								$link4 = fixUrl($tool->link4);
								$link5 = fixUrl($tool->link5);
								
								$homeFollow = ($tool->home_dofollow ? '' : 'rel="nofollow"');
								
								$doFollow1 = ($tool->link1_dofollow ? '' : 'rel="nofollow"');
								$doFollow2 = ($tool->link2_dofollow ? '' : 'rel="nofollow"');
								$doFollow3 = ($tool->link3_dofollow ? '' : 'rel="nofollow"');
								$doFollow4 = ($tool->link4_dofollow ? '' : 'rel="nofollow"');
								$doFollow5 = ($tool->link5_dofollow ? '' : 'rel="nofollow"');
							?>
							<?php if( $tool->homepage_url != '' ) echo "<h6><a href='{$tool->homepage_url}' {$homeFollow} target='_blank'>Homepage<i class='fa fa-external-link'></i></a></h6>"; ?>
							<?php if( $link1 != '' ) echo "<h6><a href='{$link1}' {$doFollow1} target='_blank'>{$tool->link1_text}<i class='fa fa-external-link'></i></a></h6>"; ?>
							<?php if( $link2 != '' ) echo "<h6><a href='{$link2}' {$doFollow2} target='_blank'>{$tool->link2_text}<i class='fa fa-external-link'></i></a></h6>"; ?>
							<?php if( $link3 != '' ) echo "<h6><a href='{$link3}' {$doFollow3} target='_blank'>{$tool->link3_text}<i class='fa fa-external-link'></i></a></h6>"; ?>
							<?php if( $link4 != '' ) echo "<h6><a href='{$link4}' {$doFollow4} target='_blank'>{$tool->link4_text}<i class='fa fa-external-link'></i></a></h6>"; ?>
							<?php if( $link5 != '' ) echo "<h6><a href='{$link5}' {$doFollow5} target='_blank'>{$tool->link5_text}<i class='fa fa-external-link'></i></a></h6>"; ?>
						</div>
						
						<p class="detailed-desc"><?php
							$toolDesc = $tool->description;
							if( isset($_REQUEST['simplify']) )
								$toolDesc = '';

							echo $toolDesc;
						?></p>

						<?php if($tool->img1 != '') { // We have at least 1 image ... ?>
						<div class="tool-images">
							<h3><span><?php echo $tool->name; ?></span> images</h3>

							<div id="image-slider-<?php echo $tool->id; ?>" class="carousel slide" data-ride="carousel" data-interval="false">
								<div class="carousel-inner" role="listbox">
									<?php for($i = 1; $i <= 5; $i++) { ?>
										<?php
											$img 		= "img" . $i;
											$imgText 	= $img  . '_text';
											
											if(isset($tool->$img) && ($tool->$img != '')) {
										?>
										<div class="item <?php if($i == 1) echo 'active'; ?>">
											<img data-src="<?php echo $tool->$img; ?>" alt="">
											<div class="carousel-caption"><?php echo $tool->$imgText; ?></div>
										</div>
										<?php } ?>
									<?php } ?>
								</div>

								<?php /* if($tool->img2 != '') { // Controls ... ?>
								<a class="left carousel-control" href="#image-slider-<?php echo $tool->id; ?>" role="button" data-slide="prev">
									<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="right carousel-control" href="#image-slider-<?php echo $tool->id; ?>" role="button" data-slide="next">
									<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
								</a>
								<?php } */ ?>
							</div>
						</div>
						<?php } ?>

						<?php if($tool->video1 != '') { // We have at least 1 video ... ?>
						<div class="tool-videos">
							<h3><span class="title"><?php echo $tool->name; ?></span> videos</h3>
							
							<div id="video-slider-<?php echo $tool->id; ?>" class="carousel slide" data-ride="carousel" data-interval="false">
								<div class="carousel-inner" role="listbox">
									<?php for($i = 1; $i <= 3; $i++) { ?>
										<?php
											$video 		= "video" . $i;
											if(isset($tool->$video) && ($tool->$video != '')) {
										?>
										<div class="item <?php if($i == 1) echo 'active'; ?>">
											<div><iframe width="720" height="405" data-src="<?php echo str_replace('/watch?v=', '/embed/', $tool->$video); ?>" frameborder="0" allowfullscreen></iframe></div>
										</div>
										<?php } ?>
									<?php } ?>
								</div>

								<?php /* if($tool->video2 != '') { // Controls ?>									
								<a class="left carousel-control" href="#video-slider-<?php echo $tool->id; ?>" role="button" data-slide="prev">
									<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="right carousel-control" href="#video-slider-<?php echo $tool->id; ?>" role="button" data-slide="next">
									<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
								</a>
								<?php } */ ?>
							</div>
						</div>
						<?php } ?>

						<div class="comments">
							<h3><?php echo $tool->name; ?> Comments</h3>
							<?php /* <div id="<?php echo $initialId; ?>" class="disqus_thread"></div> */ ?>
						</div>
						<?php if($initialId == 'disqus_thread') $initialId = ''; // Reset initial id after 1st loop ?>

					</div>
					<?php
							// if(isset($_REQUEST['simplify']))
								// if($j == 10) break;
							$j++;
						}
					?>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End SEO Tools Content -->

<?php // Disqus ?>
<script type="text/javascript">
// Main shortname + default id & default title
var disqus_shortname  = 'linkio',
	disqus_identifier = 'default',
	disqus_title      = 'BEST SEO TOOLS',
	disqus_config     = function(){
		this.language = 'en';
	};

(function() {
    var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
    dsq.src = 'https://' + disqus_shortname + '.disqus.com/embed.js';
    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
})();

function loadDisqus( identifier, url, title ) {
	console.group( 'loadDisqus' );
		console.log( 'id: ' + identifier );
		console.log( 'url: ' + url );
		console.log( 'title: ' + title );
	console.groupEnd();

    DISQUS.reset({
        reload: true,
        config: function ()
        {
            this.page.identifier = identifier;
            this.page.url        = url;
            this.page.title      = title;
            this.language        = 'en';
        }
    });
}
</script>