<?php
/**
 * Template Name: Imprensa
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
$args = array(
   'post_type' => 'noticias',
   'post_status' => 'publish',
   'posts_per_page' => 2,
   'orderby' => 'publish_date',
   'order' => 'DESC',


);
$first = array(
   'post_type' => 'noticias',
   'post_status' => 'publish',
   'posts_per_page' => 1,
   'orderby' => 'publish_date',
   'order' => 'DESC',

);
$loop = new WP_Query( $first );
$noticia = new WP_Query( $args );
$count = 0;
?>
<section class="imprensa">
  <div class="texto">
    <h1>imprensa</h1>
  </div>
  <div class="blocos">
    <?php


      if ($noticia->have_posts()) {
        while ( $noticia->have_posts() ) : $noticia->the_post();
              ?>
              <a href="<?php echo get_permalink(); ?>"class="bloco">
                <img src="<?php the_field('foto') ?>" alt="">
                <div class="descricao">
                  <h2><?php the_title(); ?></h2>
                  <?php the_field('desc'); ?>
                  <p>Veja mais ></p>
                </div>
              </a>
                <?php
        endwhile;

      }




     ?>



  </div>
</section>

<?php
wp_reset_postdata();
get_footer();
