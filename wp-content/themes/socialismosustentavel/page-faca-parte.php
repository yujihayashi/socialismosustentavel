<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
<?
// error_reporting(E_ALL);
if ($_POST) {
	if ($_POST['fDesejo'] == 'participar') {
		$desejo = "<p>
		<b>Desejo participar de um comitê:</b><br />
		{$_POST['fComite']}
		</p>";
	} else if ($_POST['fDesejo'] == 'criar') {
		$desejo = "<p>
		<b>Desejo criar um comitê</b><br />
		<b>Eixo Temático:</b> {$_POST['fEixoTematico']}<br />
		<b>Quantidade de Pessoas Previstas:</b> {$_POST['fQtdPessoas']}<br />
		<b>Local a ser realizado:</b> {$_POST['fLocal']}<br />
		</p>";
	}
	$destinatario = "arthur.yuji@gmail.com";
	$assunto = $_POST['fAssunto'];
	$corpo = "<h2>Fale Conosco</h2><p>
	<b>Nome:</b>  {$_POST['fNome']}<br />
	<b>E-mail:</b>  {$_POST['fEmail']}<br />
	<b>Estado:</b>  {$_POST['fEstado']}<br />
	<b>Cidade:</b> {$_POST['fCidade']}<br />
	<b>Eixo de interesse:</b>  {$_POST['fEixoInteresse']}<br />
	</p>";
	$corpo .= $desejo;
	$headers = "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
	$headers .= "From: {$_POST['EMAIL']} ";
	$headers .= " Reply-To: {$_POST['EMAIL']}";
	
	if (mail($destinatario, $assunto, $corpo, $headers)) {
		$msg = 'Sua mensagem foi enviada com sucesso!';
	} else {
		$msg = "Houve um erro no envio. Por favor, confirme seus dados.";
	}
	wp_mail( $destinatario, $assunto, $corpo, $headers, $attachments );
	//echo phpInfo();
	//exit;
}
?>
<?
function listaEstadosBrasil() {
	return array("AC" => "Acre", "AL" => "Alagoas", "AM" => "Amazonas", "AP" => "Amapá", "BA" => "Bahia", "CE" => "Ceará", "DF" => "Distrito Federal", "ES" => "Espírito Santo", "GO" => "Goiás", "MA" => "Maranhão", "MT" => "Mato Grosso", "MS" => "Mato Grosso do Sul", "MG" => "Minas Gerais", "PA" => "Pará", "PB" => "Paraíba", "PR" => "Paraná", "PE" => "Pernambuco", "PI" => "Piauí", "RJ" => "Rio de Janeiro", "RN" => "Rio Grande do Norte", "RO" => "Rondônia", "RS" => "Rio Grande do Sul", "RR" => "Roraima", "SC" => "Santa Catarina", "SE" => "Sergipe", "SP" => "São Paulo", "TO" => "Tocantins", "OT" => "Outro");
}
?>
<div id="main-content" class="main-content">
	
	<?php
	if ( is_front_page() && twentyfourteen_has_featured_posts() ) {
		// Include the featured content template.
		get_template_part( 'featured-content' );
	}
	?>
	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php
				// Start the Loop.
			while ( have_posts() ) : the_post();

					// Include the page content template.
			get_template_part( 'content', 'page' );
			?>
			<div class="row">
				<div class="col-xs-10 col-xs-offset-1">
					<? if ($msg): ?>
					<div class="alert alert-success">
						<?=$msg?>
					</div>
				<? endif; ?>
				<form action="" method="POST">
					<input type="hidden" name="fAssunto" value="Participe! - Site Socialistas">
					<div class="form-group">
						<label for="fNome">Nome:</label>
						<input type="text" class="form-control" id="fNome" name="fNome" required>
					</div> <!-- .form-group -->
					<div class="form-group">
						<label for="fEmail">E-mail</label>
						<input type="email" class="form-control" id="fEmail" name="fEmail" required>
					</div> <!-- .form-group -->
					<div class="row">
						<div class="col-xs-6">
							<div class="form-group">
								<label for="fEstado">Estado</label>
								<select name="fEstado" id="fEstado" class="form-control" required>
									<? foreach (listaEstadosBrasil() as $value) {?>
									<option value="<?=$value?>"><?=$value?></option>
									<?}?>
								</select>
							</div> <!-- .form-group -->
						</div> <!-- .col-xs-6 -->
						<div class="col-xs-6">
							<div class="form-group">
								<label for="fCidade">Cidade</label>
								<input type="text" class="form-control" id="fCidade" name="fCidade" required>
							</div> <!-- .form-group -->
						</div> <!-- .col-xs-6 -->
					</div> <!-- .row -->
					<div class="form-group">
						<label for="fEixoInteresse">Eixo de interesse:</label>
						<input type="text" class="form-control" id="fEixoInteresse" name="fEixoInteresse" required>
					</div> <!-- .form-group -->
					<div class="form-group">
						<label for="">O que você deseja?</label><br>
						<div class="radio-inline">
							<label onfocus="formDesejo();">
								<input type="radio" name="fDesejo" id="fDesejo1" value="participar">
								Desejo participar do Comitê
							</label>
						</div> <!-- .radio-inline -->
						<div class="radio-inline">
							<label>
								<input type="radio" name="fDesejo" id="fDesejo2" value="criar">
								Desejo criar um Comitê
							</label>
						</div> <!-- .radio-inline -->
					</div> <!-- .form-group -->
					<div id="form-desejo-1" style="display:none;">
						<select name="fComite" id="fComite" class="form-control">
							<option value="Selecione uma opção">Selecione uma opção</option>
						</select>
					</div> <!-- #form-desejo-1 -->
					<div id="form-desejo-2" style="display:none;">
						<div class="row">
							<div class="col-xs-4">
								<div class="form-group">
									<label for="fEixoTematico">Eixo temático:</label>
									<input type="text" class="form-control" id="fEixoTematico" name="fEixoTematico">
								</div> <!-- .form-group -->
							</div> <!-- .col-xs-4 -->
							<div class="col-xs-4">
								<div class="form-group">
									<label for="fQtdPessoas">Quantidade de pessoas previstas:</label>
									<input type="text" class="form-control" id="fQtdPessoas" name="fQtdPessoas">
								</div> <!-- .form-group -->
							</div> <!-- .col-xs-4 -->
							<div class="col-xs-4">
								<div class="form-group">
									<label for="fLocal">Local a ser realizado:</label>
									<input type="text" class="form-control" id="fLocal" name="fLocal">
								</div> <!-- .form-group -->
							</div> <!-- .col-xs-4 -->
						</div> <!-- .row -->
					</div> <!-- #form-desejo-2 -->
					<button type="submit" class="btn btn-primary btn-lg">ENVIAR</button>
				</form>
			</div> <!-- .col-xs-10 -->
		</div> <!-- .row -->
		<?
					// If comments are open or we have at least one comment, load up the comment template.
			/*if ( comments_open() || get_comments_number() ) {
				comments_template();
			}*/
			endwhile;
			?>

		</div><!-- #content -->
	</div><!-- #primary -->
	<?php get_sidebar( 'content' ); ?>
</div><!-- #main-content -->
<script type="text/javascript">
jQuery(document).ready(function ($) {
	formDesejo = function () {
		if ($('#fDesejo1').prop('checked')) {
			$('#form-desejo-1').stop(true, true).delay(200).slideDown({duration: 600, queue: true, easing: 'easeInOutExpo'});
			$('#form-desejo-2').stop(true, true).delay(200).slideUp({duration: 600, queue: true, easing: 'easeInOutExpo'});
		} else if ($('#fDesejo2').prop('checked')) {
			$('#form-desejo-1').stop(true, true).delay(200).slideUp({duration: 600, queue: true, easing: 'easeInOutExpo'});
			$('#form-desejo-2').stop(true, true).delay(200).slideDown({duration: 600, queue: true, easing: 'easeInOutExpo'});
		}
	}
	formDesejo();
	$( ".radio-inline input" ).change(function() {
		formDesejo();
	});
});
</script>
<?php
get_footer();
