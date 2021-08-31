<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="yoga studio in kiev with best teacher probably or not I dont know really">
  <link rel="stylesheet" href="<?php get_template_directory_uri()?>https://admin/wordpress/wp-content/themes/Wordpress/css/bootstrap.min.css">
  <script src="https://admin/wordpress/wp-content/themes/Wordpress/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <link rel="stylesheet" type="text/css" href="https://admin/wordpress/wp-content/themes/Wordpress/style.css" />
  <link rel="stylesheet" type="script/js" href="https://admin/wordpress/wp-content/themes/Wordpress/script.js">
  <link rel="stylesheet" href="https://admin/wordpress/wp-content/themes/Wordpress/css/owl.carousel.min.css">
<link rel="stylesheet" href="https://admin/wordpress/wp-content/themes/Wordpress/css/owl.theme.default.min.css">
<script src="https://admin/wordpress/wp-content/themes/Wordpress/js/owl.carousel.min.js"></script>
  <title>Yoga</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
</head>
<body  <?php body_class(); ?>>
  <div class="container-fluid header-bg">
    <div class="container">
  <nav class="navbar navbar-expand-lg" id="mynav" style="background-color: transparent;">
      <img src="https://admin/wordpress/wp-content/themes/Wordpress/йога.jpg" width="60" height="60" style="margin-left: 3%;" alt="yoga">
      <button class="navbar-toggler navbar-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarmenu"
        aria-controls="navbarmenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarmenu">
 <?php   
wp_nav_menu( [
	'theme_location'  => '',
	'menu'            => '',
	'container'       => 'div',
	'container_class' => 'navbar-nav mr-auto',
	'container_id'    => '',
	'menu_class'      => 'nav-item ',
	'menu_id'         => '',
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => ' ',
	'items_wrap'      => '<ul id="%1$s" class="navbar-nav">%3$s</ul>',
	'depth'           => 0,
	'walker'          => '',
] );?>
   
      </div>
    </nav>
    </div>
<?php wp_head()?>

