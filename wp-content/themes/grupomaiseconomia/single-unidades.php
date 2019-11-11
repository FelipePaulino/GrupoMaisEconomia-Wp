		<?php get_header(); ?>
	<div class="mapa-celular">
			<div class="container">

			</div>
		</div>
		<div class="carrosel">
			<div>
				<div class="mapa">
				<?php echo rwmb_meta('mapa'); ?>
				
					<div class="container">


					</div>
				</div>
			</div>
		</div>
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="container">			
			
			<div class="box-fundo">
			<div class="row">
			<div class="endereco-completo col-md-6">
				<h5><?php echo rwmb_meta('regiao'); ?></h5>
				<p><?php the_content(); ?></p>
				<div class="end-especifico">
			
					<p><span class="icone_telefone"></span><?php echo rwmb_meta('telefone');?> / <?php echo rwmb_meta('telefone-dois');?></p>
					<p><span class="icone_a"></span><?php echo rwmb_meta('email'); ?></p>
					<br class="quebra">
					<a href="<?php echo rwmb_meta('facebook'); ?>" class="face"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
					<a href="<?php echo rwmb_meta('twitter'); ?>"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
					<a href="<?php echo rwmb_meta('google-mais'); ?>"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a>
					<a href="<?php echo rwmb_meta('linkedin'); ?>"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
				</div>
			</div>
			<div class="form-unidades-interna col-md-6">
				<h2>Contato</h2>
				<?php echo do_shortcode( '[contact-form-7 id="154" title="Teste de Fomulario"]' ); ?>
			</div>

		<!--	<form class="form-unidades-interna col-md-6">
				<h2>Contato</h2>
				<div>	
					<label>Seu Nome</label>	
					<input type="text" name="">
				</div>
				<div>
					<label>Telefone</label>
					<input type="text" name="">
				</div>
				<div>
					<label>Seu E-Mail</label>
					<input type="text" name="">
				</div>
				<div>
					<label>Sua Mensagem</label>
					<textarea rows="10" cols="50" placeholder="Escreva aqui..."></textarea>
				</div>
				<input name="enviar" type="submit" value="ENVIAR" class="bt-enviar" />
			</form>-->
		</div>		
	</div>
	</div>

	<br class="quebra">
	


	<?php get_footer(); ?>
	<script type="text/javascript">
	$(function(){

		$('.sticky_navigation').addClass('menu-fixed');
		$('.logo').attr('src', local + '/images/logo-grupo-mais-economia-preto.png')
	})


    $(document).ready(function(){
      $('.carrosel').slick({
      	  dots: true,
      	  arrows:false,      
          infinite: true,
		  slidesToShow: 1,
		  slidesToScroll: 1,
		  autoplay: true,
  		autoplaySpeed: 5000
		  
      });
    });
    	$(function(){
		$('.bloco_direito li').eq(0).click(function(e){
		   e.preventDefault();
		   if($('.telefone_escondido').hasClass('aparecer')){
		     $('.telefone_escondido').removeClass('aparecer');
		     $(this).addClass('aparecer');
		   }else{
		     $('.telefone_escondido').addClass('aparecer');
		     $(this).removeClass('aparecer');
		     setTimeout(function(){ 
				$('.telefone_escondido').removeClass('aparecer');
			}, 7000);
		   }
		});	
	});

</script>