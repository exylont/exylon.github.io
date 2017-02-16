<?php 
  register_nav_menus(array(
  	'primary' =>  __('Primary Menu'),
  	'footer' =>  __('Footer Menu'),


  	));


  if (function_exists('add_theme_support')) {
  	add_theme_support('post-thumbnails');
  	set_post_thumbnail_size(210,150,true);
  	add_image_size('post-page',400,300,true);
  	add_image_size('male-slike',140,80,true);
  }


 ?>