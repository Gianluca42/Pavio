<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package tanto
 */

get_header();
?>
<section class="noticia">
	<div class="image">
		<img src="<?php the_field('foto'); ?>" alt="">
	</div>
	<div class="texto">
		<h1><?php the_title(); ?></h1>
		<?php the_field('desc') ?>
	</div>
</section>
<?php
get_footer();
