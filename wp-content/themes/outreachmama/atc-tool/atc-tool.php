<?php
	// $theme_uri = get_template_directory_uri();

	// Include modals ... not active yet
	require_once('info-modals/1-page-url.html');
	
	require_once('info-modals/2-page-title.html');
	require_once('info-modals/3-anchor-text.html');
	
	require_once('info-modals/4-brand-names.html');
	require_once('info-modals/5-keywords.html');	
?>

<?php require_once( $theme_path . '/tools-common/header.php' ); ?>

<?php /*
<h3 class="form-title">
	Fill in your details
	<span>OR</span>
	<button class="btn btn-default" id="btn-import">Import .csv</button>
	<input type="file" name="files[]" id="files" />
</h3>
*/ ?>

<div id="gray-zone">

	<section class="container">
		<div class="row">
		
			<form id="form-generate" class="col-sm-12 col-md-8">
				<h4>Fill in your details</h4>

				<div class="form-group">
					<div class="line">
						<div class="row">
							<div class="col-md-12">
								<h5>
									Enter the Page and Anchor Text information:
								</h5>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<label for="destination-link">
									Page URL:
									<img src="<?php echo $theme_uri ?>/atc-tool/images/img-mini.png" class="img-mini" data-toggle="modal" data-target="#modal-page-url" />
									<i class="fa fa-gear fa-spin" style="color: #00f; font-size: 16px;vertical-align: middle;"></i>
									</label> <br>
								<?php // In the JS code - the Page URL is Destination Link ?>
								<input type="text" id="destination-link" class="form-control" value="<?php /* google.com */ ?>" />

								<label for="textarea-pagetitle">
									Page Title:
									<img src="<?php echo $theme_uri ?>/atc-tool/images/img-mini.png" class="img-mini" data-toggle="modal" data-target="#modal-page-title" /><br>
								</label>
								<textarea class="form-control" id="textarea-pagetitles" data-gramm_editor="false"><?php /* a */ ?></textarea>
							</div>
							<div class="col-md-6">
								<label for="textarea-anchors">
									Anchor Text:
									<img src="<?php echo $theme_uri ?>/atc-tool/images/img-mini.png" class="img-mini" data-toggle="modal" data-target="#modal-anchor-text" /><br>
								</label>
								<textarea class="form-control" id="textarea-anchors" data-gramm_editor="false"><?php /* b */ ?></textarea>
							</div>
						</div>
					</div>

					<div class="line">
						<div class="row">
							<div class="col-md-12">
								<h5>
									Enter the Brand Name(s) and Target Keyword(s):
								</h5>
							</div>
						</div>

						<div class="row">
							<div class="col-md-6 col-xs-12">
								<label for="textarea-brand" id="brand">
									Brand Name(s):
									<img src="<?php echo $theme_uri ?>/atc-tool/images/img-mini.png" class="img-mini" data-toggle="modal" data-target="#modal-brand-names" />
								</label>
								<textarea class="form-control placeholder" id="textarea-brand" rows="9" data-placeholder="Linkio_LINKIO" data-gramm_editor="false"><?php /* c */ ?>Linkio
LINKIO</textarea>
<?php /*
outreachmama
Linkio
Link Builder
---
# Original
Linkio
LINKIO */ ?>
							</div>
							<div class="col-md-6 col-xs-12">	
								<label for="textarea-keywords" id="keyword">
									Exact Keyword(s):
									<img src="<?php echo $theme_uri ?>/atc-tool/images/img-mini.png" class="img-mini" data-toggle="modal" data-target="#modal-keywords" />
								</label>
								<textarea class="form-control placeholder" id="textarea-keywords" rows="9" data-placeholder="Link building project management_SEO project management" data-gramm_editor="false"><?php /* d */ ?>Link building project management
SEO project management</textarea>
<?php /*
google
guest posting
guest blogging
guest posting sites
guest blogging sites
guest blog
guest post */ ?>
							</div>
						</div>
					</div>

					<div id="wrapper-generate">
						<div class="row">
							<div class="col-md-12 text-center">

								<button type="button" class="btn btn-default" id="btn-pre-generate">Generate</button>
								<div id="gdpr-box">
									<input type="checkbox" id="gdpr-agree">&nbsp; I agree to the <a href="https://app.linkio.com/terms" target="_blank">Terms and Conditions</a> and <a href="https://app.linkio.com/policy" target="_blank">Privacy Policy</a>
								</div>

							</div>
						</div>
					</div>

					<div class="form-inline" id="form-unlock">
						<img src="<?php echo $theme_uri ?>/<?php echo $toolCode; ?>-tool/images/linkio-robot.png" />
						<h5>Hey! Enter Your Email to Generate Your Results.</h5>
						<input type="email" class="form-control" id="email" placeholder="email address..." value="">
						<div>
						<button type="submit" class="btn btn-default" id="btn-generate">Generate</button>
						</div>
						<p>Don't worry, we hate spam as much as you do.</p>
					</div>
					
				</div>
			</form>
			
			<div id="sidebar-how-it-works" class="col-md-3 col-sm-12">
				<h3>How it works</h3>

				<h4>Enter your details</h4>
				<img src="<?php echo $theme_uri ?>/<?php echo $toolCode; ?>-tool/images/how-it-works1.png" />

				<h4>Get automated anchor text categorization</h4>
				<img src="<?php echo $theme_uri ?>/<?php echo $toolCode; ?>-tool/images/how-it-works2.png" />

				<h4>Measure your anchor text percentages</h4>
				<img src="<?php echo $theme_uri ?>/<?php echo $toolCode; ?>-tool/images/how-it-works3.png" />
			</div>
		</div>
		
	</section>


	<!-- Generated Section -->
	<section class="container" id="generated">
		<div class="row">
			
			<!-- Generated Box -->
			<div class="col-sm-12 col-md-8" id="generated-box">
				<div class="row">
					<div class="col-md-6 col-xs-12">
						<h4>Suggested Keyword Text</h4>
					</div>

					<div id="generated-buttons" class="col-md-6 col-xs-12">
						<button type="button" id="btn-reset" class="btn btn-default">Reset</button>
						<button type="button" id="btn-export" class="btn btn-default">Export</button>					
					</div>
					<div class="col-md-12">
						<div class="table-responsive">
							<table id="table-anchors" class="table">
								<thead>
									<tr>
										<th></th>
										<th>Anchor Type</th>
										<th>Anchor Text</th>
									</tr>
								</thead>
								<tbody></tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			
			<!-- Generated Sidebar -->
			<div class="col-sm-12 col-md-3" id="generated-sidebar">
				<h2>Anchor Text Percentages</h2>
				<div id="box-join-linkio">
					<?php // <p>Create a Linkio account to monitors you're real time percentages and know what to do next.</p> ?>
					<p>Compare to ideal percentages</p>
					<a href="https://app.linkio.com/users/sign_up" class="btn btn-default" id="btn-try-now">Try Now</a>
				</div>

				<table>
					<thead>
						<tr>
							<th>Anchor Type</th>
							<th>Percentage</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Title Tag</td>
							<td id="isTitleTag"></td>
						</tr>
						<tr>
							<td>Exact Keyword</td>
							<td id="isExactKeyword"></td>
						</tr>
						<tr>
							<td>Just Natural</td>
							<td id="isJustNatural"></td>
						</tr>
						<tr>
							<td>Naked URL</td>
							<td id="isNakedUrl"></td>
						</tr>
						<tr>
							<td>Keyword Plus Word</td>
							<td id="isKeywordPlusWord"></td>
						</tr>
						<tr>
							<td>Only Part of Keyword</td>
							<td id="isOnlyPartOfKeyword"></td>
						</tr>
						<tr>
							<td>Brand & Keyword Together</td>
							<td id="isBrandKeywordTogether"></td>
						</tr>
						<tr>
							<td>Branded</td>
							<td id="isBranded"></td>
						</tr>
						<tr>
							<td>WebsiteName.com</td>
							<td id="isWebsiteName"></td>
						</tr>
						<tr>
							<td>No Text</td>
							<td id="isNoText"></td>
						</tr>
						<tr>
							<td>Homepage URL</td>
							<td id="isHomepageUrl"></td>
						</tr>
						<tr>
							<td>Naked URL without http://</td>
							<td id="isNakedUrlNoProtocol"></td>
						</tr>
						<tr>
							<td>Totally Random</td>
							<td id="isTotallyRandom"></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</section>

</div>

<?php
	require_once( $theme_path . '/tools-common/want-to-see-what-else-we-can-do.php');
	require_once( $theme_path . '/tools-common/about-tool.php');

	require_once( $theme_path . '/tools-common/footer.php');
?>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script src="<?php echo $theme_uri ?>/atc-tool/js/utils/utils.js?1000"></script>
<script src="<?php echo $theme_uri ?>/atc-tool/js/utils/custom-entropy.js?1000"></script>
<script src="<?php echo $theme_uri ?>/atc-tool/js/utils/pluralize.js?1000"></script>
<script src="<?php echo $theme_uri ?>/atc-tool/js/utils/jquery.csv.min.js?1000"></script>

<script src="<?php echo $theme_uri ?>/atc-tool/js/categorization.php?3002"></script>
<script src="<?php echo $theme_uri ?>/atc-tool/js/main.js?<?php echo mt_rand(1, 100000); ?>"></script>