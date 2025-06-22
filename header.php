<!doctype html>
<html <?php language_attributes(); ?> class="no-js">

<head>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5G43KV8');</script>
<!-- End Google Tag Manager -->

  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- 以下はfunctionsから -->
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5G43KV8"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	
  <?php wp_body_open(); ?>
  <div class="off-canvas-wrapper">
    <div class="off-canvas position-left" id="offCanvas" data-off-canvas>

      <?php get_template_part('partials/navigation/nav-off-canvas'); ?>

    </div>
    <div class="off-canvas-content" data-off-canvas-content>

      <?php get_template_part('partials/navigation/nav-top'); ?>