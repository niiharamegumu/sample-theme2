<?php get_header(); ?>

<?php
if ( shortcode_exists( 'wp-structuring-markup-breadcrumb' ) ) {
		echo '<nav>';
		echo do_shortcode( '[wp-structuring-markup-breadcrumb class="breadcrumb"]' );
		echo '</nav>';
}
?>

<div class="contents">
	<main>
		<?php if ( have_posts() ) : ?>
			<article　class="contents-policy">
			<?php
				the_post();
				the_title( '<h1>', '</h1>' );
				the_content();
			?>
			</article>
		<?php endif; ?>
	</main>
	
<?php
		get_sidebar();
 		get_footer();
