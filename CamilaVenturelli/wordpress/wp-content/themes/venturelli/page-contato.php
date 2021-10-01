<?php
/**
 * Template Name: Contato
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
<section class="corpo-contato">
	<div class="grid">
		<div class="elemento">
			<img src="<?php the_field('img'); ?>" alt="">
		</div>
		<div class="elemento">
			<div class="social">
				<p><?php the_field('email'); ?></p>
				<p><?php the_field('fone'); ?></p>
				<div class="media">
					<?php if( have_rows('social') ):

    // Loop through rows.
							    while( have_rows('social') ) : the_row();

									?>
										<a href="<?php the_sub_field('link'); ?>">
												<img src="<?php the_sub_field('icone'); ?>" alt="">
										</a>
									<?php

							    // End loop.
							    endwhile;

							// No value.
							else :
							    // Do something...
							endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
wp_reset_postdata();
get_footer();
