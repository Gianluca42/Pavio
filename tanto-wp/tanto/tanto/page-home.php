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
 * @package tanto
 */

get_header();
?>
<section class="slider">
  <div class="carrossel owl-carousel">
    <?php
        $featured_posts = get_field('car');
        if( $featured_posts ): ?>

            <?php foreach( $featured_posts as $featured_post ):
                $permalink = get_permalink( $featured_post->ID );
                $title = get_the_title( $featured_post->ID );
                $custom_field = get_field( 'field_name', $featured_post->ID );
                ?>
                <div class="bloco-car">
                  <img src="<?php the_field('foto-car', $featured_post->ID) ?>" alt="">
                  <div class="info-bloco">
                    <h2><?php echo $title; ?></h2>
                    <p><?php the_field('tipos', $featured_post->ID) ?></p>
                    <a href="<?php echo $permalink ?>"> <p>Ver ></p> </a>
                  </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>

  </div>
</section>
<section class="sobre-nos">
  <div class="image">
    <img src="<?php bloginfo('template_url')?>/assets/imgs/logo-home.svg" alt="">
  </div>
  <div class="texto">
    <?php the_field('desc'); ?>

  </div>
  <div class="botao">
    <a href="<?php bloginfo('siteurl')?>/sobre">Saiba mais > </a>
  </div>
</section>
<section class="fazemos">
  <div class="texto">
    <h1>o que fazemos?</h1>
  </div>
  <div class="servicos">
    <?php if( have_rows('fazemos') ):

    // Loop through rows.
    while( have_rows('fazemos') ) : the_row();

        // Load sub field value.
      ?><a href="<?php bloginfo('siteurl')?>/servicos" class="box-servico">
        <img src="<?php the_sub_field('icone'); ?>" alt="">
        <p><?php the_sub_field('titulo'); ?></p>
      </a><?php
    endwhile;

// No value.
else :
    // Do something...
endif; ?>
    <div class="box-servico">
      <img src="<?php bloginfo('template_url')?>/assets/imgs/icone.svg" alt="">
      <p>TRAILER</p>
    </div>
    <div class="box-servico">
      <img src="<?php bloginfo('template_url')?>/assets/imgs/icone.svg" alt="">
      <p>TRAILER</p>
    </div>
    <div class="box-servico">
      <img src="<?php bloginfo('template_url')?>/assets/imgs/icone.svg" alt="">
      <p>TRAILER</p>
    </div>
  </div>
</section>
<section class="destaques">
  <div class="texto">
    <h1>destaques</h1>
  </div>
  <div class="blocos">
    <?php
$featured_posts = get_field('destaques');
if( $featured_posts ): ?>
    <?php foreach( $featured_posts as $featured_post ):
        $permalink = get_permalink( $featured_post->ID );
        $title = get_the_title( $featured_post->ID );
        $custom_field = get_field( 'field_name', $featured_post->ID );
        ?>
        <a href="<?php echo $permalink ?>"class="bloco">
          <img src="<?php the_field('foto-thumb', $featured_post->ID) ?>" alt="">
          <div class="info-bloco">
            <h2><?php echo $title; ?></h2>
            <p><?php the_field('tipos', $featured_post->ID) ?></p>
          </div>
        </a>
    <?php endforeach; ?>

<?php endif; ?>
    <div class="bloco">
      <img src="<?php bloginfo('template_url')?>/assets/imgs/Backgroundbacu.jpg" alt="">
      <div class="info-bloco">
        <h2>bacurau</h2>
        <p>SPOT, PROMO</p>
      </div>
    </div>
    <div class="bloco">
      <img src="<?php bloginfo('template_url')?>/assets/imgs/Backgroundbacu.jpg" alt="">
      <div class="info-bloco">
        <h2>bacurau</h2>
        <p>SPOT, PROMO</p>
      </div>
    </div>
    <div class="bloco">
      <img src="<?php bloginfo('template_url')?>/assets/imgs/Backgroundbacu.jpg" alt="">
      <div class="info-bloco">
        <h2>bacurau</h2>
        <p>SPOT, PROMO</p>
      </div>
    </div>
    <div class="bloco">
      <img src="<?php bloginfo('template_url')?>/assets/imgs/Backgroundbacu.jpg" alt="">
      <div class="info-bloco">
        <h2>bacurau</h2>
        <p>SPOT, PROMO</p>
      </div>
    </div>
  </div>
  <a class="botaozin"href="<?php bloginfo('siteurl')?>/nossos-trabalhos">Ver todos os trabalhos </a>
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
