<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tanto
 */

?>

</main>

<footer>
<div class="footer-block">
	<div class="logos">
		<img src="<?php bloginfo('template_url')?>/assets/imgs/foot-logo.svg" alt="">
	</div>
	<div class="texto">
		<p>2021 - Todos os direitos reservados</p>
		<h2>Tanto Produções</h2>
		<p>Desenvolvido por Estúdio Pavio</p>
	</div>
	<div class="logos">
		<img src="<?php bloginfo('template_url')?>/assets/imgs/foot-logo2.svg" alt="">
	</div>
</div>

</footer>


<?php wp_footer(); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src='<?php bloginfo('template_url')?>/assets/js/owl.carousel.min.js'></script>
<script src='<?php bloginfo('template_url')?>/assets/js/main.js'></script>

</body>
</html>
