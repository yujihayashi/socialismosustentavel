<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
					</div> <!-- .container -->
				</div> <!-- .site-central -->
			</div> <!-- .extra-central -->
			<div class="extra-footer">
				<div class="site-footer">
					<div class="container">
						<?php get_sidebar( 'footer' ); ?>
					</div> <!-- .container -->
				</div> <!-- .site-footer -->
			</div> <!-- .extra-footer -->
		</div> <!-- .site-geral -->
	</div> <!-- .extra-geral -->
</div><!-- #main -->
<?php wp_footer(); ?>
</body>
</html>