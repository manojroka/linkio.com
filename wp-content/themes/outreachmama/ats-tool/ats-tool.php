<?php
	// Include modals ...
	require_once('keyword-modals/1-brand-keywords.html');
	require_once('keyword-modals/2-page-type.html');
	require_once('keyword-modals/3-keyword-type.html');	
?>

<?php require_once( $theme_path . '/tools-common/header.php' ); ?>

<section class="container">
	<?php /* <div class="row">
		<div class="col-md-12 title">
			<h2>Tired of inventing anchor texts&quest;</h2>			
			<h3>Now it's easy&excl; Try our tool.</h3>		
		</div>
	</div> */ ?>

	<form id="form-generate">
		<?php /* <div class="row">
			<div class="col-md-12">
				<h4>Follow the steps and generate Anchor Texts with magic</h4>
			</div>
		</div> */ ?>

		<div class="form-group">
			<div class="line active">
				<div class="row">
					<div class="col-md-12">
						<h5 class="active">
							Add your brand name and desired keyword(s)&colon;
							<img src="<?php echo $theme_uri ?>/ats-tool/images/img-mini.png" class="img-mini" data-toggle="modal" data-target="#modal-brand-keywords" />
							<?php /* <button type="button" class="btn btn-mini" data-toggle="modal" data-target="#modal-brand-keywords">
								<i class="fa fa-info" aria-hidden="true"></i>
							</button> */ ?>
						</h5>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6 col-xs-12">
						<label for="textarea-brand" id="brand">Brand Name(s)&colon;</label>
						<textarea class="form-control placeholder" id="textarea-brand" rows="9" data-gramm_editor="false" data-placeholder="Linkio_LINKIO">
Linkio
LINKIO</textarea>
<?php /* Azazie  */ ?>
					</div>
					<div class="col-md-6 col-xs-12">	
						<label for="textarea-keywords" id="keyword">Keyword(s)&colon;</label>
						<textarea class="form-control placeholder" id="textarea-keywords" rows="9" data-gramm_editor="false" data-placeholder="Link building project management_SEO project management">
Link building project management
SEO project management</textarea>
<?php /* 
weeding dress
wedding dresses
bridal gown
bridal gowns
dresses for wedding */ ?>
					</div>
				</div>
			</div>
			
			<div class="line">
				<div class="row">
					<div class="col-md-12">
						<h5>
							Select page type&colon;
							<img src="<?php echo $theme_uri ?>/ats-tool/images/img-mini.png" class="img-mini" data-toggle="modal" data-target="#modal-page-type" />
							<?php /* <button type="button" class="btn btn-mini" data-toggle="modal" data-target="#modal-page-type">
								<i class="fa fa-info" aria-hidden="true"></i>
							</button> */ ?>
						</h5>
					</div>
				</div>
				
				<div class="row">
					<div id="buttons-page-type" class="col-md-12">
						<button type="button" class="btn btn-default" data-page-type="blog_content">Blog Content</button>
						<button type="button" class="btn btn-default" data-page-type="long_form_content">Long-Form Content</button>

						<button type="button" class="btn btn-default" data-page-type="company_homepage">Company Homepage</button>
						<button type="button" class="btn btn-default" data-page-type="company_service_page">Company Service Page</button>

						<button type="button" class="btn btn-default" data-page-type="ecommerce_product_page">Ecommerce Product Page</button>

						<button type="button" class="btn btn-default" data-page-type="local_business_homepage">Local Business Homepage</button>
						<button type="button" class="btn btn-default" data-page-type="local_business_service_page">Local Business Service Page</button>
					</div>
					<div id="inputs-city-state" class="col-md-12">
						<input type="text" id="city" placeholder="Enter state" />
						<input type="text" id="state" placeholder="Enter city" />
						<input type="text" id="st" placeholder="State abbreviation" maxlength="2" />
					</div>
				</div>
			</div>
			
			<div class="line">
				<div class="row">
					<div class="col-md-12">
						<h5>
							Select anchor text type&colon;
							<img src="<?php echo $theme_uri ?>/ats-tool/images/img-mini.png" class="img-mini" data-toggle="modal" data-target="#modal-keyword-type" />
							<?php /* <button type="button" class="btn btn-mini" data-toggle="modal" data-target="#modal-keyword-type">
								<i class="fa fa-info" aria-hidden="true"></i>
							</button> */ ?>
						</h5>
					</div>
				</div>
				
				<div class="row">
					<div id="checkboxes" class="col-md-12">
						<label class="checkbox-inline">
							<input type="checkbox" id="keywordPlusPartOfKeywordAnchors" value="option1" />&nbsp; Keyword Plus & Just Part of Keyword
						</label>
						<label class="checkbox-inline">
							<input type="checkbox" id="brandedAnchors" value="option2" />&nbsp; Branded
						</label>
						<label class="checkbox-inline">
							<input type="checkbox" id="brandedPlusKeywordAnchors" value="option3" />&nbsp; Branded &plus; Keyword
						</label>
						<label class="checkbox-inline">					
							<input type="checkbox" id="justNaturalAnchors" value="option4" />&nbsp; Just Natural
						</label>					
					</div>
				</div>
			</div>
			
			
			<div id="wrapper-generate"><!--  class="line hidden-line" -->
				<div class="row">
					<div class="col-md-12 text-center">
						<div id="gdpr-box" class="checkbox-inline">
							<input type="checkbox" id="gdpr-agree">&nbsp; <label for="gdpr-agree">I agree to the <a href="https://app.linkio.com/terms" target="_blank">Terms and Conditions</a> and <a href="https://app.linkio.com/policy" target="_blank">Privacy Policy</a></label>
						</div>
						<button type="button" class="btn btn-default" id="btn-pre-generate">Generate</button>
					</div>
				</div>
			</div>
			
			<div class="form-inline" id="form-unlock">
				<img src="<?php echo $theme_uri ?>/<?php echo $toolCode; ?>-tool/images/linkio-robot.png" />
				<h5>Hey! Enter Your Email to Generate Your Results.</h5>
				<input type="email" class="form-control" id="email" placeholder="email address..." value="">
				<button type="submit" class="btn btn-default" id="btn-generate">Generate</button>
				<p>Don't worry, we hate spam as much as you do.</p>
			</div>
			
		</div>
	</form>
</section>

<section class="container">
	<div id="generated">
		<div class="row">
			<div class="col-md-4">
				<h4>Suggested Keyword Text</h4>
			</div>

			<div id="generated-buttons" class="col-md-8 col-xs-12">
				<button type="button" id="btn-download-csv" class="btn btn-default">Download the .csv file</button>
				<button type="button" id="btn-reset" class="btn btn-default">Reset</button>

				<button type="button" id="btn-all" class="btn btn-tab active">All</button>	
				<button type="button" id="btn-fav" class="btn btn-tab">Favorite</button>				
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="table-responsive">
					<table id="table-anchors" class="table">
						<thead>
							<tr>
								<th></th>
								<th>Keyword Type</th>
								<th>Keyword Text</th>
								<th>Favorite</th>
							</tr>
						</thead>
						<tbody>

						
						
<?php /*					<tr>
								<td>1</td>
								<td>Keyword + Just Part Of Keyword</td>
								<td>What is [Keyword]</td>
								<td><i class="fa fa-heart" aria-hidden="true"></i></td>
							</tr>
							<tr>
								<td>2</td>
								<td>Keyword + Just Part Of Keyword</td>
								<td>A Beginner's guide to [Keyword]</td>
								<td><i class="fa fa-heart active" aria-hidden="true"></i></td>
							</tr> */ ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>

	</div>
</section>

<?php
	require_once( $theme_path . '/tools-common/want-to-see-what-else-we-can-do.php');
	require_once( $theme_path . '/tools-common/about-tool.php');

	require_once( $theme_path . '/tools-common/footer.php');
?>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="<?php echo $theme_uri ?>/ats-tool/keywords/keywords.php?2" type="application/javascript"></script>

<script src="<?php echo $theme_uri ?>/ats-tool/js/utils.js?200"></script>
<script src="<?php echo $theme_uri ?>/ats-tool/js/main.php?400"></script>
<script src="<?php echo $theme_uri ?>/ats-tool/js/excel.js?700"></script>