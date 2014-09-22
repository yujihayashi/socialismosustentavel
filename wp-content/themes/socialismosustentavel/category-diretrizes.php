<?php
/**
 * The template for displaying Category pages
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
<section id="primary" class="content-area">
	<div id="content" class="site-content" role="main">
		<h1 class="text-primary h5">Diretrizes</h1>
		<h2>Diretrizes para uma plataforma de trabalho no Senado Federal</h2>
		<p><small>Clique nos temas abaixo para ver mais detalhes:</small></p>
		<?php if ( have_posts() ) : ?>

		<div class="panel-group" id="accordion">
			<?php
					// Start the Loop.
			while ( have_posts() ) : the_post();
			?>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#diretriz-<?php the_ID(); ?>">
							<? the_title(); ?>
						</a>
					</h4>
				</div> <!-- .panel-heading -->
				<div id="diretriz-<?php the_ID(); ?>" class="panel-collapse collapse">
					<div class="panel-body">
						<? the_content(); ?>
					</div> <!-- .panel-body -->
				</div> <!-- .panel-collapse -->
			</div> <!-- .panel -->
			<?
			endwhile;
					// Previous/next page navigation.
			?>
		</div> <!-- .panel-group -->
		<?
		twentyfourteen_paging_nav();

		else :
					// If no content, include the "No posts found" template.
			get_template_part( 'content', 'none' );

		endif;
		?>
	</div><!-- #content -->
</section><!-- #primary -->
<script type="text/javascript">
jQuery(document).ready(function ($) {
	if (location.hash) {
		$(location.hash).collapse('show');
		$(location.hash).parents('.accordion-body').collapse('show');
	} else {
		$('.panel:first-child').find('.panel-collapse').addClass('in');
	}
}); 
</script>
<?php
get_sidebar( 'content' );
get_footer();
