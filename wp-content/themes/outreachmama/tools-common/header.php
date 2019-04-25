<?php
	// DEPRECATED:
	// if(in_array($toolCode, array('ats', 'atc')))
		// $headerLogo = $theme_uri . '/' . $toolCode . '-tool/images/logo.png';
	
	// if($toolCode == 'seo-tools')
		// $headerLogo = $theme_uri . '/seo-tools/images/logo.png';
	
	$headerLogo = $theme_uri . '/img/tools-logo-header.png';
?>
<header id="header-new">
	<a href="https://www.linkio.com/" title="Linkio" id="linkio-logo"><img src="<?php echo $headerLogo; ?>" /></a>
	
	<?php if( has_nav_menu('primary') ) : ?>
		<button id="menu-toggle" class="menu-toggle"><?php _e( 'Menu', 'twentysixteen' ); ?></button>
		<a href="https://app.linkio.com/users/sign_up" class="sign-up-btn">Sign Up</a>
		
		<?php // <div id="site-header-menu" class="site-header-menu"> ?>
			
			<?php if ( has_nav_menu( 'primary' ) ) : ?>
				<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'twentysixteen' ); ?>">
					<?php
						wp_nav_menu(array(
							'theme_location' => 'primary',
							'menu_class'     => 'primary-menu',
						 ));
					?>
				</nav>
			<?php endif; ?>
		
		<?php // </div> ?>
	<?php endif; ?>
</header>

<?php /*
<header id="header-tool">
	<div class="container">
		<div class="row">
			<a href="https://www.linkio.com/" title="Linkio" id="linkio-logo"><img src="<?php echo $headerLogo; ?>" /></a>
				
			<button type="button" class="navbar-toggle visible-xs visible-sm" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>

			<div class="col-xs-12 col-sm-12 col-md-10">
				<div id="header-tool-menu">
					<a href="https://www.linkio.com/anchor-text-generator/" class="menu-item <?php if( isset($ats) ) echo 'active'; ?>">Anchor Text Generator</a>
					<a href="https://www.linkio.com/anchor-text-analysis/" class="menu-item <?php if( isset($atc) ) echo 'active'; ?>">Anchor Text Analysis</a>
					<a href="https://www.linkio.com/seo-case-study/" class="menu-item">Live Case Study</a>

					<a href="https://app.linkio.com/users/sign_in" class="menu-item login">Login</a>
					<a href="https://app.linkio.com/users/sign_up" class="btn">Sign up free!</a>
				</div>
			</div>
		</div>
	</div>
</header>
 */ ?>

<?php if(in_array($toolCode, array('ats', 'atc'))) { ?>
<?php
	if($toolCode == 'ats') $h1 = 'The Anchor Text Suggestion Tool';
	if($toolCode == 'atc') $h1 = 'The Anchor Text Categorizer Tool';
?>
<header id="subheader-tool">
	<div class="container">
		<h1><?php echo $h1; ?></h1>
		<h2>Brought to you by Linkio, the link building project management software.</h2>
		</div>
</header>
<?php } ?>