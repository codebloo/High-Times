<!DOCTYPE html>

<html <?php language_attributes(); ?> class="no-js">
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
		

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
		
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	
    <!-- dns prefetch -->
		<link href="//www.google-analytics.com" rel="dns-prefetch">	

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="robots" content="noindex, nofollow">


	<!-- CSS
  ================================================== -->
  
  <link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('stylesheet_url') ?>" />

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

    <!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico">
	<link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_directory'); ?>/images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_directory'); ?>/images/apple-touch-icon-114x114.png">
	<script defer src="https://pro.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-d84LGg2pm9KhR4mCAs3N29GQ4OYNy+K+FBHX8WhimHpPm86c839++MDABegrZ3gn" crossorigin="anonymous"></script>

<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
<header>
    <div class="container">
         <div class="row">
           <div class="col-3 col-three hide_mobile">
			<ul class="header_social social_links">
				<li><i class="fab fa-cc-visa"></i></li>
				<li><i class="fab fa-cc-mastercard"></i></li>
				<li><i class="fab fa-cc-amex"></i></li>
				<li><i class="fab fa-cc-discover"></i></li>
			</ul>
			<div class="hamburger_wrap">
	         	<div class="hamburger">
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				</div>
			</div>
           </div>
         	
           <div class="col-6 col-six">
			   <a href="<?php bloginfo('url'); ?>">
			 	  <img src="<?php bloginfo('template_directory'); ?>/images/400x105@2x.png" class="logo_image"/>
           	   </a>
		   	</div>
          
         </div>
       </div>
</header>	

<nav role="navigation" id="navigation">
    <div class="container">
         <div class="row">
           <div class="col-12">
			  <?php if(is_front_page()):?> 
           		  <?php wp_nav_menu( array( 'theme_location' => 'home-menu','menu_class' => 'nav header_nav') ); ?>
				  <a href="<?php bloginfo('url');?>/dashboard" class="user_link"><i class="fa fa-user"></i></a>
		    <?php else:?>
		   		<?php wp_nav_menu( array( 'theme_location' => 'header-menu','menu_class' => 'nav header_nav') ); ?>
			<?php endif;?>
           </div>
         </div>
       </div>
</nav>	

<main role="main">