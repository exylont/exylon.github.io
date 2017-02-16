


<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php wp_title('I', true, 'right'); ?><?php bloginfo('name'); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.1.1.min.js"></script>
	 <link href="http://allfont.net/allfont.css?fonts=montserrat-black" rel="stylesheet" type="text/css" />
<meta name="google-site-verification" content="9UylzblCUvF1nxrj0i4BaVDBphbUCbTwpNhvaJzGo4Y" />
	<?php wp_head(); ?>
</head>	 
<body  <?php body_class(); ?>>
	<header>
	<div class="row">
		<div class="menii">		
			<span style="font-size:30px;cursor:pointer" onclick="openNav()"> <img class="menubtn" src="<?php bloginfo('template_directory'); ?>/img/menu.png" alt=""> </span>
		</div>

		<div class="naslov1" id="header">
			<a href="<?php bloginfo('url'); ?>"><img class="logo" src="<?php bloginfo('template_directory'); ?>/img/logo.png"  alt="">	</a>
			<br>
	<div style="clear:left"></div>
			<h1 style="display:none;">EXYLON exylon</h1>
			<h2 class="h2h"><?php bloginfo('description'); ?></h2>
		</div>
		<div class="soc">
		<ul class="ulh">
			<li><a href="https://www.instagram.com/exylonrs/	"  target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/soc12.png" alt=""></a></li>
			<li><a href="https://twitter.com/exylonrs"  target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/soc22.png" alt=""></a></li>
			<li><a href="https://www.facebook.com/exylonrs/"  target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/soc32.png" alt=""></a></li>
			<li><a href="https://www.youtube.com/channel/UCtxGt-TQwMyAsb1f-O-Z4Jg"  target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/soc42.png" alt=""></a></li>
		</ul>
			<img src="<?php bloginfo('template_directory'); ?>/minilogo.png" class="exlogo">
			
		</div>
		
	</div>	
	
		

		<div id="myNav" class="overlay">
		  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		  <div class="overlay-content">
		   	<div class="linksfrom navham">
		   		<?php 
		   			$args =array('theme_location' => 'primary');

		   		 ?>
			  	<?php wp_nav_menu($args); ?>
		  	</div>
		   <?php 
		   			$args =array('theme_location' => 'footer');

		   		 ?>
			  	<?php wp_nav_menu($args); ?>
		  </div>
		</div>

	<div style="float:none"></div>

</header>
<div class="navbar navbar-default" id="navigacija" >
	<div class="container topmenu">
		<div id="bs-example-navbar-collapse-1" class="navbar-collapse collapse in" aria-expanded="true">
			
				<?php 
		   			$args =array('theme_location' => 'primary');

		   		 ?>
			  	<?php wp_nav_menu($args); ?>
			
		</div>				
	
		<button type="button" class="navbar-toggle dugme" data-toggle="collapse" data-target=".navbar-collapse">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
	</div>
	<div class="minilogo "  onclick="openNav()" id="minil" style="display: inline-block;">
		<img class="minimenu" src="<?php bloginfo('template_directory'); ?>/img/minimenu.png" data-pin-nopin="true">
	
	</div>
	<div class="minilogo2"  align="center" id="minil2" style="display: inline-block;">
		<img src="<?php bloginfo('template_directory'); ?>/img/minilogo.png" data-pin-nopin="true">
	</div>
</div>




<script>
	var navbar, menu, yPos;
	function yScroll(){
	navbar = document.getElementById('navigacija');
	menu = document.getElementById('minil');
	yPos = window.pageYOffset;
			if(yPos > 110){
				navigacija.style.position = "fixed";
				navigacija.style.top = "0px";
			} else {
				navigacija.style.position = "absolute";
				navigacija.style.top = "90px";
				}
			if(yPos > 110){
				minil.style.display = "inline-block";
				minil2.style.display = "inline-block";
				minil.style.opacity= "1";
				minil2.style.opacity = "1";
			} else {
				minil.style.display = "none";
				minil2.style.display = "none";
				}			
	}
	window.addEventListener("scroll", yScroll);
</script>



<script>
function openNav() {
    document.getElementById("myNav").style.height = "100%";
}

function closeNav() {
    document.getElementById("myNav").style.height = "0%";
}
</script>

