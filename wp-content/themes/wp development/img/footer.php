
<a href="#" class="scrollToTop"><div class="top"></div></a>
<script>
	$(document).ready(function(){
	
	//Check to see if the window is top if not then display button
	$(window).scroll(function(){
		if ($(this).scrollTop() > 200) {
			$('.scrollToTop').fadeIn();
		} else {
			$('.scrollToTop').fadeOut();
		}
	});
	
	//Click event to scroll to top
	$('.scrollToTop').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});
	
});
</script>


<footer>
	<div class="footer">
		<div class="levo">
			<img class="logo" src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="">
			<br>
			<h1 style="display:none;">EXYLON exylon</h1>
			<br>
			<h2 class="h2h">Lorem ipsum dolor sitgd</h2>
			<ul class="ulf">
				<li><a href=""><img src="<?php bloginfo('template_directory'); ?>/img/soc1.png" alt=""></a></li>
				<li><a href=""><img src="<?php bloginfo('template_directory'); ?>/img/soc2.png" alt=""></a></li>
				<li><a href=""><img src="<?php bloginfo('template_directory'); ?>/img/soc3.png" alt=""></a></li>
				<li><a href=""><img src="<?php bloginfo('template_directory'); ?>/img/soc4.png" alt=""></a></li>
			</ul>
		</div>
		<div class="desno">

			<ul class="ul2">
				<li><a href="">O NAMA</a></li>
				<li><a href="">MARKETING</a></li>
				<li><a href="">KONTAKT</a></li>
				<li><a href="">PRAVILA KORISCENJA</a></li>
			</ul>
		</div>

	<div style="clear:left"></div>
		<h6>Copyright © Exylon™ 2017. Sva prava su zadržana</h6>
	</div>
</footer>

	<?php wp_footer(); ?>
</body>
</html>