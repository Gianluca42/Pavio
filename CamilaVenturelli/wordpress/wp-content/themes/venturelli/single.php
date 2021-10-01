<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package venturelli
 */

get_header();
?>

<section class="corpo-interna" style="background-color:<?php the_field('cor');?>; color:<?php the_field('fonte');?>">
	<div class="topo">
		<h1><?php the_title() ?></h1>

	</div>
	<div class="grid">
		<?php if( get_field('sub') ): ?>
			<div class="titulo">
				<?php the_field('sub') ?>

			</div>
		<?php endif; ?>
			<div class="flecha">
				<button onclick="goBack()"> voltar</button>
			</div>
		<?php if( have_rows('bloco') ):

    // Loop through rows.
    while( have_rows('bloco') ) : the_row();
		if( get_sub_field('tipo') == 'texto' ) {
				?><div class="texto">
					<?php the_sub_field('texto') ?>
				</div>
					<?php
			}else if(get_sub_field('tipo') == 'gif'){
				?><div class="elemento">
					<video autoplay loop muted inline>
						<source src="<?php the_sub_field('gif') ?>" type="video/mp4">
					</video>

				</div><?php
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
					<?php $featured_posts = get_sub_field('hashs');
					if( $featured_posts ): ?>
					<?php foreach( $featured_posts as $featured_post ):
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
												}else if(get_sub_field('tipo', $featured_post->ID) == 'gif'){
													?><div class="elemento">
														<video autoplay loop muted inline>
														  <source src="<?php the_sub_field('gif', $featured_post->ID) ?>" type="video/mp4">
														</video>

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

<?php
get_footer();
