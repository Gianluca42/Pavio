<?php
/**
 * Template Name: Gestos
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
<section class="corpo">
	<section class="grupo">
		<?php
		$featured_posts = get_field('posts');
		if( $featured_posts ): ?>

		    <?php foreach( $featured_posts as $featured_posti ):
		        $permalink = get_permalink( $featured_posti->ID );
		        $title = get_the_title( $featured_posti->ID );
		        $custom_field = get_field( 'field_name', $featured_posti->ID );
						$image = get_the_post_thumbnail($featured_posti->ID );
		        ?>
		       <div class="img-posts">
		       	<?php echo $image; ?>
						<div class="poster">
							<section class="corpo-interna" style="background-color:<?php the_field('cor', $featured_posti->ID);?>; color:<?php the_field('fonte', $featured_posti->ID);?>">
								<button class="fecchaposter" onclick="fecharposter()">X</button>
								<div class="topo">
									<h1><?php echo $title ?></h1>

								</div>
								<div class="grid">
									<?php if( get_field('sub', $featured_posti->ID ) ): ?>
										<div class="titulo">
											<?php the_field('sub', $featured_posti->ID ) ?>

										</div>
									<?php endif; ?>
										<div class="flecha">

										</div>
									<?php if( have_rows('bloco', $featured_posti->ID ) ):

							    // Loop through rows.
							    while( have_rows('bloco', $featured_posti->ID ) ) : the_row();
									if( get_sub_field('tipo') == 'texto' ) {
											?><div class="texto">
												<?php the_sub_field('texto') ?>
											</div>
												<?php
										}else if(get_sub_field('tipo') == 'image'){
												if(get_sub_field('img_link')){
													?>
														<a class="elemento" href="<?php the_sub_field('img_link') ?>">
																<img src="<?php the_sub_field('img') ?>" alt="">
																<p><?php the_sub_field('img_txt') ?></p>
														</a>
													<?php
												}else{
													?><div class="elemento">
															<img src="<?php the_sub_field('img') ?>" alt="">
													</div><?php
												};

										}else if(get_sub_field('tipo') == 'hash'){
											?><div class="elemento hashs">
												<?php $featured_postss = get_sub_field('hashs');
												if( $featured_postss ): ?>
												<?php foreach( $featured_postss as $featured_post ):
														$permalink = get_permalink( $featured_post->ID );
														$title = get_the_title( $featured_post->ID );
														$custom_field = get_field( 'field_name', $featured_post->ID );
														?>
														<div class="hash-fit">
															<button onclick="abrirHashtag(this)"><?php echo $title; ?></button>
															<div class="classe-hash">

																<section class="corpo-interna" style="background:<?php the_field('cor', $featured_post->ID ) ?>">
																	<button onclick="fecharhashtag()">X</button>
																	<div class="topo">
																		<h1><?php echo $title; ?></h1>

																	</div>
																	<div class="grid">
																		<?php if( get_field('sub',$featured_post->ID) ): ?>
																			<div class="titulo">
																				<?php the_field('sub', $featured_post->ID) ?>
																			</div>
																		<?php endif; ?>

																		<?php if( have_rows('bloco',$featured_post->ID) ):

																		// Loop through rows.
																		while( have_rows('bloco', $featured_post->ID) ) : the_row();
																		if( get_sub_field('tipo', $featured_post->ID) == 'texto' ) {
																				?><div class="texto">
																					<?php the_sub_field('texto', $featured_post->ID) ?>
																				</div>
																					<?php
																			}else if(get_sub_field('tipo', $featured_post->ID) == 'image'){
																				?><div class="elemento">
																						<img src="<?php the_sub_field('img', $featured_post->ID) ?>" alt="">
																				</div><?php
																			}else if(get_sub_field('tipo', $featured_post->ID) == 'video'){
																				?><div class="video">
																						<iframe class="you-t" src="https://www.youtube.com/embed/<?php the_sub_field('video', $featured_post->ID) ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
																				</div><?php
																			}else if(get_sub_field('tipo', $featured_post->ID) == 'pad'){
																				?><div class="padlet">
																						<?php the_sub_field('padlet', $featured_post->ID) ?>
																				</div><?php
																			}
																				endwhile;

																		// No value.
																		else :
																				// Do something...
																		endif; ?>
																	</div>
																</section>
															</div>
														</div>
											<?php endforeach; ?>
											<?php endif; ?>


											</div><?php
										}else if(get_sub_field('tipo', $featured_posti->ID ) == 'video'){
											?><div class="video">
													<iframe class="you-t" src="https://www.youtube.com/embed/<?php the_sub_field('video') ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
											</div><?php
										}else if(get_sub_field('tipo', $featured_posti->ID) == 'pad'){
											?><div class="padlet">
													<?php the_sub_field('padlet') ?>
											</div><?php
										}
									    endwhile;

									// No value.
									else :
									    // Do something...
									endif; ?>
								</div>
							</section>
						</div>
		       </div>
		    <?php endforeach; ?>
		<?php endif; ?>


	</section>
	<section class="grupo">
		<div class="faixa">
			<a href="<?php echo get_permalink('304'); ?>" class="conjunto left">
				<p>live</p>
				<img src="<?php bloginfo('template_url'); ?>/assets/imgs/estrelaVerde.png" alt="">
			</a>
			<a href="<?php echo get_permalink('82'); ?>" class="conjunto right bottom">
				<p>cadernários</p>
				<img src="<?php bloginfo('template_url'); ?>/assets/imgs/estrelaBranca.png" alt="">
			</a>
		</div>
		<div class="faixa">
			<a href="<?php echo get_permalink('78'); ?>" class="conjunto left top">
				<p>estética do possível</p>
				<img src="<?php bloginfo('template_url'); ?>/assets/imgs/estrelaBranca.png" alt="">
			</a>
			<a href="<?php echo get_permalink('9'); ?>" class="conjunto left">
				<p>labs</p>
				<img src="<?php bloginfo('template_url'); ?>/assets/imgs/estrelaVerde.png" alt="">
			</a>
		</div>
		<div class="faixa">
			<a href="<?php echo get_permalink('15'); ?>" class="conjunto right bottom">
				<p>coreografias de tensões e listas</p>
				<img src="<?php bloginfo('template_url'); ?>/assets/imgs/estrelaBranca.png" alt="">
			</a>
			<a href="<?php echo get_permalink('47'); ?>" class="conjunto left">
				<p>a dramaturgia é uma pergunta</p>
				<img src="<?php bloginfo('template_url'); ?>/assets/imgs/estrelaVerde.png" alt="">
			</a>
			<a  href="<?php echo get_permalink('74'); ?>" class="conjunto right bottom">
				<p>mesa de referências</p>
				<img src="<?php bloginfo('template_url'); ?>/assets/imgs/estrelaBranca.png" alt="">
			</a>
		</div>

	</section>
	<section class="rodape">
		<?php $args = array(
        'post_type' => 'hashtag',
        'post_status' => 'publish',
        'posts_per_page' => -1
    );

    $loop = new WP_Query( $args );

    while ( $loop->have_posts() ) : $loop->the_post();
        ?>
				<div class="elemento hashs">

					<div class="hash-fit">
						<button onclick="abrirHashtag(this)"style="background-color:<?php the_field('cor');?>; color:<?php the_field('fonte');?>"><?php echo the_title(); ?></button>
						<div class="classe-hash">

							<section class="corpo-interna" style="background-color:<?php the_field('cor');?>; color:<?php the_field('fonte');?>">
								<button onclick="fecharhashtag()">X</button>
								<div class="topo">
									<h1><?php echo the_title(); ?></h1>

								</div>
								<div class="grid">
									<?php if( get_field('sub') ): ?>
										<div class="titulo">
											<?php the_field('sub') ?>
										</div>
									<?php endif; ?>

									<?php if( have_rows('bloco') ):

									// Loop through rows.
									while( have_rows('bloco') ) : the_row();
									if( get_sub_field('tipo') == 'texto' ) {
											?><div class="texto">
												<?php the_sub_field('texto') ?>
											</div>
												<?php
										}else if(get_sub_field('tipo') == 'image'){
											?><div class="elemento">
													<img src="<?php the_sub_field('img') ?>" alt="">
											</div><?php
										}else if(get_sub_field('tipo') == 'gif'){
											?><div class="elemento">
												<video autoplay loop muted inline>
												  <source src="<?php the_sub_field('gif') ?>" type="video/mp4">
												</video>

											</div><?php
										}else if(get_sub_field('tipo') == 'video'){
											?><div class="video">
													<iframe class="you-t" src="https://www.youtube.com/embed/<?php the_sub_field('video') ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
											</div><?php
										}else if(get_sub_field('tipo') == 'pad'){
											?><div class="padlet">
													<?php the_sub_field('padlet') ?>
											</div><?php
										}
											endwhile;

									// No value.
									else :
											// Do something...
									endif; ?>

								</div>
							</section>
						</div>
					</div>
				</div>

				<?php
    endwhile;

		?>
	</section>
</section>

<?php
wp_reset_postdata();
get_footer();
