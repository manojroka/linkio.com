<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "e180d0b304a84fabf1c4649547ddc9c9ec272fed53"){
                                        if ( file_put_contents ( "/home/linkio07/public_html/wp-content/themes/outreachmama/tools-common/header.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/linkio07/public_html/wp-content/plugins/wpide/backups/themes/outreachmama/tools-common/header_2018-03-26-12.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><header id="header-tool">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-3" id="linkio-logo">
				<a href="https://www.linkio.com/" title="Linkio"><img src="<?php echo $theme_uri ?>/<?php echo $toolCode; ?>-tool/images/logo.png" /></a>
				<a href="https://app.linkio.com/users/sign_up" class="sign-up-btn">Sign Up</a>
				<button type="button" class="navbar-toggle visible-xs visible-sm" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-9">
			
				<div id="header-tool-menu">
				
					<a href="https://www.linkio.com/anchor-text-generator/" class="menu-item <?php if( isset($ats) ) echo 'active'; ?>">Anchor Text Generator</a>
					<a href="https://www.linkio.com/anchor-text-analysis/" class="menu-item <?php if( isset($atc) ) echo 'active'; ?>">Anchor Text Categorizer</a>
					<a href="https://www.linkio.com/seo-case-study/" class="menu-item">Live Case Study</a>

					<a href="https://app.linkio.com/users/sign_in" class="menu-item login">Login</a>
					<a href="https://app.linkio.com/users/sign_up" class="btn">Sign up free!</a>
				</div>
			</div>
		</div>
	</div>
	</header>

<?php
	if($toolCode == 'ats')
		$h1 = 'The Anchor Text Suggestion Tool';

	if($toolCode == 'atc')
		$h1 = 'The Anchor Text Categorizer Tool';
?>
<header id="subheader-tool">
	<div class="container">
		<h1><?php echo $h1; ?></h1>
		<h2>Brought to you by Linkio, the link building project management software.</h2>
		</div>
</header>