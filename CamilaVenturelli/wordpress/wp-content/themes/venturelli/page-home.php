<?php
/**
 * Template Name: Home
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package venturelli
 */

get_header();
?>
<section class="corpo-home">
	<div class="grid">
	 <?php if( have_rows('blocos') ): ?>
    <?php while( have_rows('blocos') ): the_row();

				if(get_sub_field('capa')){
					?><a  href="<?php the_sub_field('link'); ?>" class="elemento">
						<img  src="<?php the_sub_field('capa'); ?>" alt="">
						<div class="reveal">
							<img class="sec"src="<?php the_sub_field('sec'); ?>" alt="">
							<p><?php the_sub_field('texto'); ?></p>
						</div>
					</a><?php
				}else{
					?>
						<div class="elemento">

						</div>
					<?php
				};?>


    <?php endwhile; ?>
<?php endif; ?>

	</div>
</section>

<?php
wp_reset_postdata();
get_footer();
