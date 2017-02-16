<?php get_header(); ?>

<div class="ceocontent">

	<div class="row">
		<a href="https://exylon.000webhostapp.com/category/softver/">
		<div class="fea1">
			<div class="hvr"></div>
			<div class="tooltip"><h3 class="h3naslov">Softver</h3>
			</div>
		</div>
		</a>
		<a href="https://exylon.000webhostapp.com/category/hardver/">
		<div class="fea2">
			<div class="hvr2"></div>
			<div class="tooltip2"><h3 class="h3naslov2">Hardver</h3>
			</div>
		</div>
		</a>
		<a href="https://exylon.000webhostapp.com/category/games/">
		<div class="fea3">
			<div class="hvr3"></div>
				<div class="tooltip3"><h3 class="h3naslov3">Bisnis IT</h3>
			</div>
		</div>
		</a>
	</div>
	<div style="clear:left"></div>



	<div class="najnovije">
		<h3 class="najh">NAJNOVIJE</h3>
		<div class="najdiv">

		
			<?php if ( have_posts() ) :?>
			<?php $i = 1; while ( have_posts()&&  $i <5) : the_post(); ?>


			<div class="jedanpost" id="jedanpost  post-<?php the_ID(); ?>" >
				
			<div class="image">
				
				<? if( has_post_thumbnail( $post_id ) ): ?>
				    <div class="post-image">
				        <img title="image title" alt="thumb image" class="wp-post-image" 
				             src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>" style="width:130%; height:auto;">
				    </div>
				<? endif; ?>
			</div>

					<a href=" <?php the_permalink(); ?>" style="text-decoration:none;">
						<div class="text" id="text">
						<h4 class="h4post"><?php the_title(); ?></h4>
						<h5>  <?php the_time('j. F  Y.') ?></h5>
						</div>
					</a>
				
				
			</div>

			<?php $i++;  endwhile; else : ?>
			<h2>No posts</h2>

			<?php endif; ?>


		</div>
	</div>

	<div class="softver">
		<h3 class="najh">SOFTVER</h3>
		
		<?php
			$catquery = new WP_Query( 'cat=4&posts_per_page=4' );
			while($catquery->have_posts()) : $catquery->the_post();
			?>
		
			<div class="jedanm">
			<div class="imagem">
				<?php if(has_post_thumbnail()): ?>
						<?php  the_post_thumbnail('male-slike'); ?>
					<?php endif; ?>
			</div>
			<div class="textm">
				<a href="<?php the_permalink() ?>"><h4 class="h4post"><?php the_title(); ?></h4></a>
				<h5> <?php the_time('j. F  Y.') ?></h5>
			</div>
			</div>
		<div style="clear:left"></div>
		<?php endwhile; ?>
	</div>	

	<div class="softver">
		<h3 class="najh">HARDVER</h3>
		
		<?php
			$catquery = new WP_Query( 'cat=5&posts_per_page=4' );
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

	
	<div class="softver">
		<h3 class="najh">TOP 10</h3>
		
		<?php
			$catquery = new WP_Query( 'cat=9&posts_per_page=4' );
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




	<div class="bisnis">
		<h3 class="najh">GAMES</h3>		
		<?php
			$catquery = new WP_Query( 'cat=6&posts_per_page=4' );
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




	<div class="bisnis">
		<h3 class="najh">BISNIS IT</h3>		
		<?php
			$catquery = new WP_Query( 'cat=7&posts_per_page=4' );
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

	<div style="clear:left"></div>

	<div class="ads"></div>
	
</div>





<?php get_footer();
