<?php
	// $current_theme_uri = get_template_directory_uri();

	// Include modals ...
	require_once('keyword-modals/1-brand-keywords.html');
	require_once('keyword-modals/2-page-type.html');
	require_once('keyword-modals/3-keyword-type.html');	
?>
	
<header id="header-keyword-tool">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-6" id="ktool-logo">
				<a href="/"><img src="<?php echo $current_theme_uri ?>/k-tool/images/ktool-logo.png?1" /></a>
			</div>
			<div class="col-xs-12 col-sm-6" id="ktool-login-signup">
				<a href="https://app.managebacklinks.io/users/sign_in">Login</a>
				<a href="https://app.managebacklinks.io/users/sign_up" type="button" class="btn btn-default">Sign Up Free!</a>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<h1 id="ktool-title">
					The Anchor Text Suggestion Tool
				</h1>
				<h2 id="ktool-subtitle">
					Brought to you by Linkio, the link building project management software.
				</h2>
			</div>
		</div>
</header>

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
							Add your brand and desired keywords&colon;
							<img src="<?php echo $current_theme_uri ?>/k-tool/images/img-mini.png" class="img-mini" data-toggle="modal" data-target="#modal-brand-keywords" />
							<?php /* <button type="button" class="btn btn-mini" data-toggle="modal" data-target="#modal-brand-keywords">
								<i class="fa fa-info" aria-hidden="true"></i>
							</button> */ ?>
						</h5>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6 col-xs-12">
						<label for="textarea-brand" id="brand">Brand&colon;</label>
						<textarea class="form-control placeholder" id="textarea-brand" rows="9" data-placeholder="Linkio_LINKIO">
Linkio
LINKIO</textarea>
<?php /* Azazie  */ ?>
					</div>
					<div class="col-md-6 col-xs-12">	
						<label for="textarea-keywords" id="keyword">Keywords&colon;</label>
						<textarea class="form-control placeholder" id="textarea-keywords" rows="9" data-placeholder="Link building project management_SEO project management">
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
							<img src="<?php echo $current_theme_uri ?>/k-tool/images/img-mini.png" class="img-mini" data-toggle="modal" data-target="#modal-page-type" />
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
							<img src="<?php echo $current_theme_uri ?>/k-tool/images/img-mini.png" class="img-mini" data-toggle="modal" data-target="#modal-keyword-type" />
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
						<button type="button" class="btn btn-default" id="btn-generate">Generate</button>
					</div>
				</div>
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
<!--						<tr>
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
							</tr> -->
						</tbody>
					</table>
					<img src="<?php echo $current_theme_uri ?>/k-tool/images/table-anchors-bottom.png" id="table-anchors-bottom" class="img-responsive" />
				</div>
			</div>
		</div>
		<div class="row" id="row-unlock">
			<div class="col-md-12">
				<h5>Not enough? Unlock +95 more.</h5>
				<?php /* <h6>Unlock all Keyword suggestions with your email address <br>and download them in .csv format</h6> */ ?>
				<form class="form-inline" id="form-unlock">
					<input type="email" class="form-control" id="email" placeholder="Your email address..." value="">
					<button type="submit" class="btn btn-default" id="btn-unlock">Unlock 100 Results</button>
					<img src="<?php echo $current_theme_uri ?>/k-tool/images/arrow.png" id="arrow-unlock" class="visible-md visible-lg" />
					<p>Don't worry, we hate spam as much as you do.</p>
				</form>
			</div>
		</div>
	</div>
</section>

<section id="try-free">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h2>Want to see what else we can do?</h2>
				<h4>
					Try Linkio for free, a flexible and lightweight software
					to plan and manage your link building campaigns
				</h4>
				<a href="https://app.managebacklinks.io/users/sign_up" target="_blank" class="btn btn-default">Try now</a>
			</div>
		</div>
	</div>
</section>

<section id="about-tool">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h2>About the Anchor Text Suggester Tool</h2>
				<h4>The anchor text suggestion tool gives you anchor text ideas for when you building link to your site. We researched the backlink profiles for top ranking sites to identify anchor lrad patterns access diferent types of pages.</h5>
				<h4>Whether you're trying to build link for your homepage, commercial pages or blog articles, we have natural anchor text suggestions that'll help you go from idea to implementation faster.</h5>
			</div>
		</div>
	</div>
</section>

<footer>
	<div class="container">
		<div class="row">
			<div id="farleft" class="col-md-12">
				<p>Copyright &copy; 2017. All rights reserved</p>
				<a rel="nofollow" href="https://twitter.com/outreachmama" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
				<a rel="nofollow" href="https://www.facebook.com/outreachmama" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
				<a rel="nofollow" href="https://www.linkedin.com/company/outreachmama" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
			</div>
		</div>
	</div>
</footer>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="<?php echo $current_theme_uri ?>/k-tool/keywords/keywords.php?2" type="application/javascript"></script>

<script src="<?php echo $current_theme_uri ?>/k-tool/js/utils.js?200"></script>
<script src="<?php echo $current_theme_uri ?>/k-tool/js/main.js?400"></script>
<script src="<?php echo $current_theme_uri ?>/k-tool/js/excel.js?700"></script>