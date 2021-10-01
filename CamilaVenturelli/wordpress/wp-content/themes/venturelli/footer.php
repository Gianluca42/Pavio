<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package venturelli
 */

?>

</main>

<footer>
	<div class="wrapper">
			<h1><a class="logo ir" href="<?php bloginfo('siteurl')?>">Menis LoFi</a></h1>
			<nav class="menu-footer">
				<ul>
					<li> <h2>CONTATO</h2> <a href="mailto:menislofi@gmail.com">menislofi@gmail.com</a></li>
					<li> <h2>SOCIAL</h2> <a target="_blank" href="https://www.instagram.com/menislofi">@menislofi</a></li>
					<li> <h2>IMPRENSA</h2> <a href="javascript:;">Baixar press kit</a></li>
					<li> <h2>COPYRIGHT</h2> <p>2020 • Menis Lo-fi</p></li>

				</ul>
			</nav>
	</div>
</footer>


<?php wp_footer(); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src='<?php bloginfo('template_url')?>/assets/js/owl.carousel.min.js'></script>
<script src='<?php bloginfo('template_url')?>/assets/js/main.js'></script>

</body>
</html>
