<?php
/**
 * Template Name: Trabalhos
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
$first = array(
   'post_type' => 'trabalhos',
   'post_status' => 'publish',
   'posts_per_page' => -1,
   'orderby' => 'publish_date',
   'order' => 'DESC',

);
$loop = new WP_Query( $first );
?>
<section class="trabalhos">
  <div class="texto">
    <h1>Nossos trabalhos</h1>
  </div>
  <div class="sub-menu-projetos">
    <nav class="">
      <ul>
        <li tipo="todos" class="active">TODOS</li>
        <li tipo="teaser">TEASER</li>
        <li tipo="trailler">TRAILLER</li>
        <li tipo="spot">SPOT</li>
        <li tipo="promo">PROMO</li>
        <li tipo="pilula">PILULAS</li>
          <li tipo="bumper">BUMPER</li>
      </ul>
    </nav>
  </div>
  <div class="blocos">
    <?php   while ( $loop->have_posts() ) : $loop->the_post();
            ?><a href="<?php echo get_permalink(); ?>" tipo="<?php the_field('tipos'); ?>" class="bloco">
              <img src="<?php the_field('foto-thumb'); ?>" alt="">
              <div class="info-bloco">
                <h2><?php the_title(); ?></h2>
                <p><?php the_field('tipos'); ?></p>
              </div>
            </a><?php
      endwhile; ?>
  </div>
</section>

<?php
wp_reset_postdata();
get_footer();
