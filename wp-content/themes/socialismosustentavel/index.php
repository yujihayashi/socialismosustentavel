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
	<a href="javascript:void(0);" class="cycle-prev" title="Banner anterior"><span class="icon-arrow-left-white"></span></a>
	<a href="javascript:void(0);" class="cycle-next" title="Próximo banner"><span class="icon-arrow-right-white"></span></a>
	<ul class="cycle-slideshow"data-cycle-fx="scrollHorz" data-cycle-timeout="5000"data-cycle-speed="1800"data-cycle-slides="> li"data-cycle-pager=".box-banner .cycle-nav"data-cycle-next=".box-banner .cycle-next"data-cycle-prev=".box-banner .cycle-prev"data-cycle-easing="easeInOutExpo"data-cycle-log="false">
		<?php $args = array(
			'orderby'          => 'rating',
			'category_name'    => 'banner',
			'categorize'       => 0,
			'title_li'         => '',
			'category_orderby' => 'name',
			'category_order'   => 'ASC',
			'class'            => 'linkcat',
			'category_before'  => '<div>',
			'show_name'		=> false,
			'category_after'   => '</div>' ); ?> 
			<?php wp_list_bookmarks($args); ?>
		</ul>
	</div> <!-- .box-banner -->
	<div class="box-chamadas">
		<div class="row">
			<div class="col-xs-4">
				<a href="/categoria/diretrizes/#eixo-6-matriz-produtiva-duravel-51" class="chamada red text-center">
					<br>
					<span style="font-size:22px;">Desenvolvimento baseado em</span> <strong style="font-size:36px;">consumo sustentável</strong><br><br>
					<small>saiba mais</small>
				</a> <!-- .chamada -->
			</div> <!-- .col-xs-4 -->
			<div class="col-xs-4">
				<a href="/faca-parte/" class="chamada text-center">
					<img src="<?php echo get_template_directory_uri(); ?>/imagem/site/logomarca-socialismo-sustentavel.png" alt="Logomarca Socialismo Sustentável"><br>
					<span>Veja quem está por<br> trás desta <strong class="" style="font-size:31px;">ideia</strong></span>
				</a> <!-- .chamada -->
			</div> <!-- .col-xs-4 -->
			<div class="col-xs-4">
				<a href="/categoria/diretrizes/#diretriz-43" class="chamada">
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
