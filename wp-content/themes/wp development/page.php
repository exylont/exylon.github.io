<?php get_header(); ?>

<div class="ceocontent">
	<?php  if ( have_posts() ) : while ( have_posts() ) : the_post();?>	
	
				
	<h3 ><?php the_title(); ?></h3>


	
		<p>
			<?php the_content(); ?>
		</p>
	


	<?php  
		endwhile;
		else:?>

	  <p><?php _e('Sorry, no post.'); ?></p>

	<?php  endif;
	?>


	


	<div style="clear:left"></div>

	<div class="ads"></div>
	
</div>


<?php get_footer();
