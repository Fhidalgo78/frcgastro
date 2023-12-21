<?php
/**
 * The header for our theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package frc
 */
    $logo = get_theme_mod( 'custom_logo' );
    $image = wp_get_attachment_image_src( $logo , 'full' );
    $image_url = $image[0];
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-11002575482"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-11002575482');
</script>

   <meta charset="<?php bloginfo( 'charset' ); ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta charset="utf-8">
   <link rel="profile" href="https://gmpg.org/xfn/11">
   <link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/favicon.ico">
   <?php wp_head(); ?>
	<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window,document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
 fbq('init', '1956790278006806'); 
fbq('track', 'PageView');
</script>
<noscript>
 <img height="1" width="1" 
src="https://www.facebook.com/tr?id=1956790278006806&ev=PageView
&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->
</head>
<body <?php body_class(); ?>>
<header id="masthead" class="site-header">
   <div class="container container-xl">
      <div class="row">
         <div class="col-9 col-md-5 col-lg-3">
            <div class="site-branding d-flex h-100 align-items-center">
               <a href="<?php echo get_home_url(); ?>">
                  <figure class="custom-logo d-flex align-items-center">
                     <img class="w-100" src="<?php echo $image_url; ?>" alt="">
                  </figure>
               </a>
            </div>
         </div>
         <div class="col-3 col-md-7 col-lg-9">
            <nav class="navbar navbar-expand-lg navbar-light">
               <div class="wrappernavbar w-100">
                  <?php
                     wp_nav_menu([
                        'theme_location'  => 'header-menu',
                        'container_class' => 'collapse navbar-collapse h-100',
                        'container_id'    => 'main-menu-wrapper',
                        'menu_class'      => 'navbar-nav mainnav d-flex justify-content-around w-100'
                     ]);
                  ?>
               </div>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                  <i class="fas fa-bars"></i>
               </button>
            </nav>
         </div>
      </div>
   </div>
</header>