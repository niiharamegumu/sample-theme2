<?php get_header(); ?>

<nav id="slider">
	<ul>
		<li><img src="<?php echo get_template_directory_uri(); ?>/images/visual_image1.jpg" width="830" height="355" alt="一人ひとりに向き合った医療を"></li>
		<li><img src="<?php echo get_template_directory_uri(); ?>/images/visual_image2.jpg" width="830" height="355" alt="充実の検査を快適な空間でソライロ病院の人間ドック"></li>
		<li><img src="<?php echo get_template_directory_uri(); ?>/images/visual_image3.jpg" width="830" height="355" alt="看護師募集中"></li>
	</ul>
</nav>

<div class="contents">
	<main>
		<section class="topics">
			<h2>トピックス</h2>
			<ul>

				<?php
				$args = array(
					'cat'            => 41,
					'posts_per_page' => 10
				);
				query_posts( $args );
				while( have_posts() ) : the_post();
				?>
				<li>
					<time datetime="2015-04-20">
					<?php the_time( get_option( 'date_format' ) ); ?>
					</time>
					<?php the_title(); ?>
				</li>
			<?php endwhile; ?>
			</ul>
		</section>
	</main>

<?php
		get_sidebar();
		get_footer();

		
