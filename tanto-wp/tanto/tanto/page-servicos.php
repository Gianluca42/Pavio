<?php
/**
 * Template Name: Serviços
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tanto
 */

get_header();
?>
<section class="servicos-page">
  <div class="texto">
    <h1>Serviços oferecidos</h1>
  </div>
  <div class="descricao">
    <?php the_field('descricao') ?>
  </div>
  <section class="blocos">
    <?php if( have_rows('servicos') ):

            while( have_rows('servicos') ) : the_row();
                ?><div class="bloco">
                  <div class="texto">
                    <h1><?php the_sub_field('titulo'); ?></h1>
                    <?php the_sub_field('desc');  ?>
                  </div>
                  <div class="if-trailer">
                    	<iframe src="https://www.youtube.com/embed/<?php the_sub_field('link'); ?>" frameborder="0" allowfullscreen  ></iframe>
                  </div>
                </div>
                <?php

            endwhile;


          else :

          endif; ?>

  </section>
</section>


<?php
get_footer();
