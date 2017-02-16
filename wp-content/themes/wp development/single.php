<?php get_header(); ?>

<div class="ceocontent">
	<?php  if ( have_posts() ) : while ( have_posts() ) : the_post();?>	
	
	<div class="fullimage">
		<? if( has_post_thumbnail( $post_id ) ): ?>
				    <div class="post-image">
				        <img title="image title" alt="thumb image" class="wp-post-image" 
				             src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>" style="width:130%; height:auto">
				    </div>
		<? endif; ?>

		<div class="toolimage">
			<div class="flevo">
				
			<h3 class="h3image"><?php the_title(); ?></h3>
			<h4 class="h4image"><?php get_author_name() ?>  <?php the_time('j. F  Y.') ?></h4>

			</div>

			<div class="fdesno">
			<ul class="maliul">
				
				<li><a href=""><img src="<?php bloginfo('template_directory'); ?>/img/soc22.png" alt=""></a></li>
				<li><a href=""><img src="<?php bloginfo('template_directory'); ?>/img/soc32.png" alt=""></a></li>
			</ul>
			</div>
		</div>
	</div>

	<div class="textpost">
		<p>
			<?php the_content(); ?>
		</p>
	</div>


	<?php  
		endwhile;
		else:?>

	  <p><?php _e('Sorry, no post.'); ?></p>

	<?php  endif;
	?>


	<div class="softver imagedva">
		<h3 class="najh">SOFTVER</h3>
		
		<?php
			$catquery = new WP_Query( 'cat=4&posts_per_page=4' );
			while($catquery->have_posts()) : $catquery->the_post();
			?>
		
			<div class="jedanm">
			<div class="imagem"></div>
			<div class="textm">
				<a href="<?php the_permalink() ?>"><h4 class="h4post"><?php the_title(); ?></h4></a>
				<h5> <?php the_time('j. F  Y.') ?></h5>
			</div>
			</div>
		<div style="clear:left"></div>
		<?php endwhile; ?>
	</div>	

	
	
		<div class="dspl" ></div>

	<div class="reklame1"></div>

	<div style="clear:left"></div>

	<div class="ads"></div>
	
</div>


<?php get_footer();
