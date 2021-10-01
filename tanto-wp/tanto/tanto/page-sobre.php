<?php
/**
 * Template Name: Sobre
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
  <section class="sobre-topo">
    <div class="texto">
      <h1>sobre nós</h1>
    </div>
    <div class="descricao">
      <?php the_field('descricao'); ?>
    </div>
  </section>
  <section class="socios">
    <?php
    $count = 0;
// Check rows exists.
if( have_rows('pessoa') ):

    // Loop through rows.
    while( have_rows('pessoa') ) : the_row();
      $count++;
        ?>  <div class="socio">
              <div class="titulo">

                <div class="circle">
                  <img src="<?php the_sub_field('foto'); ?>" alt="">
                </div>
                <h1><?php the_sub_field('nome'); ?></h1>
              </div>

            <div class="texto">
              <?php the_sub_field('desc'); ?>
            </div>
          </div>
          <?php
    endwhile;

// No value.
else :
    // Do something...
endif;?>
  </section>
  <section class="clientes">
    <div class="texto">
      <h1>clientes</h1>
    </div>
    <div class="logos">
      <img src="<?php bloginfo('template_url')?>/assets/imgs/barra-de-logos.png" alt="">
    </div>
  </section>
<?php
get_footer();
