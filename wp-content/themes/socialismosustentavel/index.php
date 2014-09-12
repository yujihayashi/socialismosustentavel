<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
<div class="box-banner">
	<ul class="cycle-slideshow">
		<li>
			<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/imagem/site/banner/somos-ponto-convergencia-para-esquerda-acredita-planeta-esta-em-perigo.jpg" alt="somos-ponto-convergencia-para-esquerda-acredita-planeta-esta-em-perigo"></a>
		</li>
	</ul>
</div> <!-- .box-banner -->
<div class="box-chamadas">
	<div class="row">
		<div class="col-xs-4">
			<a href="#" class="chamada red text-center">
				<br>
				<span style="font-size:22px;">Desenvolvimento baseado em</span> <strong style="font-size:36px;">consumo sustentável</strong><br><br>
				<small>saiba mais</small>
			</a> <!-- .chamada -->
		</div> <!-- .col-xs-4 -->
		<div class="col-xs-4">
			<a href="#" class="chamada text-center">
				<img src="<?php echo get_template_directory_uri(); ?>/imagem/site/logomarca-socialismo-sustentavel.png" alt="Logomarca Socialismo Sustentável"><br>
				<span>Veja quem está por<br> trás desta <strong class="" style="font-size:31px;">ideia</strong></span>
			</a> <!-- .chamada -->
		</div> <!-- .col-xs-4 -->
		<div class="col-xs-4">
			<a href="#" class="chamada">
				<span class="media">
					<span class="pull-right"><img src="<?php echo get_template_directory_uri(); ?>/imagem/site/sustentabilidade.jpg" alt="sustentabilidade"></span>
					<br>
					<br>
					Sustentabilidade com foco nas <strong style="font-size:31px;display:inline-block;" class="text-primary">pessoas</strong> 
				</span>
			</a> <!-- .chamada -->
		</div> <!-- .col-xs-4 -->
	</div> <!-- .row -->
</div> <!-- .box-chamadas -->

		<?php
		get_footer();
