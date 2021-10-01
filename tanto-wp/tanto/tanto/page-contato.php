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
 * @package tanto
 */

get_header();
?>
  <section class="contato">
    <div class="texto">
      <h1><?php the_field('email'); ?></h1>
      <p><?php the_field('telefone'); ?></p>
      <div class="social">
        <?php while( have_rows('social') ) : the_row();

        // Load sub field value.
        ?><a href="<?php the_sub_field('link') ?>"><img src="<?php the_sub_field('icone') ?>" alt=""></a>
        <?php
        // Do something...

    // End loop.
    endwhile; ?>

      </div>
    </div>
  </section>
<?php
get_footer();
