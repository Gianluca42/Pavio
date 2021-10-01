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
<section class="trabalhos-single">
	<div class="image">
		<img src="<?php bloginfo('template_url')?>/assets/imgs/interna-topo.jpg" alt="">
	</div>
		<div class="sobre">
			<div class="titulo">
				<h1><?php the_title(); ?></h1>
				<h2><?php the_field('sub') ?></h2>
			</div>
			<div class="texto">
				<?php the_field('descricao') ?>
			</div>
		</div>
		<div class="blocos">
			<?php

// Check rows exists.
if( have_rows('servicos') ):

    // Loop through rows.
    while( have_rows('servicos') ) : the_row();

        // Load sub field value.
        ?><div  class="bloco">
					<div link="<?php the_sub_field('link'); ?>" class="trailer">
						<img src="<?php the_sub_field('img') ?>" alt="">
						<img class="play" src="<?php bloginfo('template_url')?>/assets/imgs/PlayFill.png" alt="">

					</div>
					<div class="descricao">
						<div class="diver">
							<h1><?php the_sub_field('titulo') ?></h1>
							<?php the_sub_field('desc') ?>
						</div>

					</div>
				</div><?php
        // Do something...

    // End loop.
    endwhile;

// No value.
else :
    // Do something...
endif;?>
		</div>
</section>
<div class="emcima">
	<button class="bt-fechar">X</button>
	<iframe src="" frameborder="0" allowfullscreen  ></iframe>
</div>
<?php
get_footer();
