<?php get_header(); ?>

<div class="ceocontent">

	<div class="postovi">
			<div class="najdiv1">

			
				<?php if ( have_posts() ) :?>
				<?php $i = 1; while ( have_posts()&&  $i <10) : the_post(); ?>


		
				<div class="jedanm" id="  post-<?php the_ID(); ?>">
					<div class="imagemdva">
						<div class="image">
				
				<? if( has_post_thumbnail( $post_id ) ): ?>
				    <div class="post-image">
				        <img title="image title" alt="thumb image" class="wp-post-image" 
				             src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>" style="width:130%; height:auto;">
				    </div>
				<? endif; ?>
			</div>
					</div>
					
					<div class="textm textdva">
						<a href=" <?php the_permalink(); ?>" style="text-decoration:none;">
							<h4 class="h4post"><?php the_title(); ?></h4>
						</a>
						<h5 class="opis">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque iusto, obcaecati porro exercitationem, eum, error debitis dignissimos possimus quam sunt explicabo tenetur perferendis quaerat est ea provident! Beatae impedit, dolorum!</h5>
						<h5><?php get_author_name() ?>  <?php the_time('j. F  Y.') ?></</h5>
					</div>

				</div>		
				<div style="clear:left"></div>	

				<?php $i++;  endwhile; else : ?>
				<h2>No posts</h2>

				<?php endif; ?>


			</div>
		

	</div>

<div class="pagination"></div>
		<div class="reklame">
			
		</div>

		<div style="clear:left"></div>

		<div class="ads"></div>
	
</div>





<?php get_footer();
