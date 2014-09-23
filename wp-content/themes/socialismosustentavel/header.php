<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=960, user-scalable=yes">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/imagem/favicon.png" type="image/png" />
	<meta name="author" content="Libra Design" />
	<meta name="keywords" content="Socialismo, Sustentável" />
	<meta property="og:image" content="http://www.socialismosustentavel.com.br/imagem/logo-mini.jpg" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/fonts/stylesheet.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/imagem/site/icon.css">
	<?php wp_head(); ?>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/easing/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/local-scroll/jquery.scrollTo-1.4.3.1-min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/local-scroll/jquery.localscroll-1.2.7-min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap_site.js"></script>
</head>

<body <?php body_class(); ?>>
	<a href="#content" class="sr-only">Pular para conteúdo</a>
	<div class="extra-geral hfeed">
		<div class="site-geral">
			<div class="extra-header">
				<div class="site-header">
					<div class="container">
						<div class="line-1">
							<div class="row">
								<div class="col-xs-5">
									<div class="navbar-header">
										<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Voltar para a página inicial"><img src="<?php echo get_template_directory_uri(); ?>/imagem/site/socialistas.png" alt="Logotipo <?php bloginfo( 'name' ); ?>"></a>
									</div> <!-- .navbar-header -->
								</div> <!-- .col-xs-5 -->
								<div class="col-xs-7">
									<div class="box-social">
										<div class="box-header">
											
										</div> <!-- .box-header -->
										<div class="box-content">
											<span>
												<a href="#" title="Acesse nosso Youtube" target="_blank"><span class="icon-youtube"></span><span class="sr-only">Youtube</span></a>
												<span class="space"></span>
											</span>
											<span>
												<a href="#" title="Acesse nosso Instagram" target="_blank"><span class="icon-instagram"></span><span class="sr-only">Instagram</span></a>
												<span class="space"></span>
											</span>
											<span>
												<a href="#" title="Acesse nosso Facebook" target="_blank"><span class="icon-facebook"></span><span class="sr-only">Facebook</span></a>
												<span class="space"></span>
											</span>
											<span>
												<a href="mailto:" title="Envie-nos um e-mail"><span class="icon-mail"></span><span class="sr-only">E-mail</span></a>
												<span class="space"></span>
											</span>
										</div> <!-- .box-content -->
									</div> <!-- .box-social -->
									<div class="box-newsletter">
										<?php get_sidebar( 'footer' ); ?>
									</div> <!-- .box-newsletter -->
								</div> <!-- .col-xs-7 -->
							</div> <!-- .row -->
						</div> <!-- .line-1 -->
						<div class="line-2">
							<nav class="navbar navbar-default" role="navigation">
								<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav navbar-nav', 'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>' ) ); ?>
							</nav>
						</div> <!-- .line-2 -->
					</div> <!-- .container -->
				</div> <!-- .site-header -->
			</div> <!-- .extra-header -->
			<div class="extra-central">
				<div class="site-central">
					<div class="container" id="content">