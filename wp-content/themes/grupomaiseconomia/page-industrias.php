<?php 

/*
Template Name: Industria
*/

get_header(); 

?>	
<style type="text/css">

a.servicos{
	padding-top: 20px;
	border-top: 4px #fff solid;
}
.menu-fixed a.servicos{
	padding-top: 20px;
	border-top: 4px #203372 solid;
	color: #203372;
}
.bloco_direito{
	height: 60px;
}

</style>	
	<div>
				<div class="banner banner-industrias-celular">
					<div class="container">
						<h2>Economia de água em <span>Indústrias</span></h2>
						<p> As indústrias empregam muita água em suas atividades. É preciso saber como economizar.</p>
						<a href="#" class="abrir-modal">Contato</a>
					</div>
				</div>
		<div class="carrosel">
			<div>
				<div class="banner banner-interna-industrias">
					<div class="container">
						<h2>Economia de água em <span>Indústrias</span></h2>
						<p> As indústrias empregam muita água em suas atividades. É preciso saber como economizar.</p>
						<a href="#" class="abrir-modal">Contato</a>
					</div>
				</div>
			</div>
			
		</div>

		<div class="container formulario-home">
			<p class="texto-form">Para solicitar contato, informe seu interesse e forneça seus dados.</p>				
			<a href="" class="seleciona-form solicite-visita ativo">SOLICITE UMA VISITA</a>
			<a href="" class="seleciona-form prefiro-ligacao">PREFIRO UMA LIGAÇÃO</a>
			<div class="box-fundo">
						<div class="form-solicite-uma-visita aparecer">


		<?php echo do_shortcode( '[contact-form-7 id="161" title="Solicite uma Visita - Home"]' ); ?>
				  			

			</div>
			<div class="form-prefiro-uma-ligacao">
			<?php echo do_shortcode( '[contact-form-7 id="164" title="Prefiro uma ligação - Home"]' ); ?>
			</div>
		</div></div><br class="quebra">
		<div class="container">
		<main>
	 		<h3>Entenda Como Funciona</h3>
	 		<p>Em nosso vídeo explicativo, você conhece as medidas que o Grupo Mais Economia implementa nos diversos estabelecimentos, com o objetivo de promover economia de água.</p>
			<a href="" class="video"></a>
			<h1>Economia de água em Indústrias</h1>
	 		<p>As indústrias empregam muita água em suas atividades. É preciso saber como economizar.</p>

		
		</main>

		</div>

		<div class="container-fluid">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="container">
				<div class="row conteudo-resorts">
					<div class="col-md-6 col-xs-12">
						<p><?php the_content(); ?></p>

						<?php endwhile; else: ?>

 <!-- O primeiro IF testou para ver se havia posts a serem mostrados -->
 <!-- Este ELSE diz ao WordPress o que fazer se não houver nenhum -->
 <p>Sorry, no posts matched your criteria.</p>

 <!-- Término verdadeiro do Loop -->
 <?php endif; ?>

						<!-- <p class="marcadores">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus.</p>

						<p class="marcadores">Porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non num</p>

						<p class="marcadores">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus.</p>

						<p class="marcadores">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus</p> -->

						<a href="" class="botao-chamada">QUERO ECONOMIZAR TAMBÉM</a>
					</div>
					    <?php include 'faq.php' ?>

		
<?php get_footer(); ?>
<script type="text/javascript">

$(function(){
	$('.duvidas div').click(function(){
		var coletado = $(this).index()

		$('.duvidas div p').slideUp(500)
		$('.duvidas div a').css({'background-image': 'url(' + local + '/images/mais.png' + ')', 'background-color': '#ebeae3', 'color' : '#262626'});
		$(this).children('p').slideDown(500)
		$(this).children('a').css({'background-image': 'url(' + local + 'images/menos.png' + ')', 'background-color': '#203372', 'color' : '#fff', });

	})

})
</script>
