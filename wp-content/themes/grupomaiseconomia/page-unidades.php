<?php 

/*
Template Name: Unidades
*/

get_header(); 

?>		
<style type="text/css">
a.unidades{
	padding-top: 20px;
	border-top: 4px #fff solid;
}
.menu-fixed a.unidades{
	padding-top: 20px;
	border-top: 4px #203372 solid;
	color: #203372;
}
.carrosel, .slick-track {
    height: 800px;
}
.box-fundo{

}
#google-maps {
  height: 800px;
}
a.seleciona-form {
    margin-top: -154px;
}
.gm-style-iw{
	font-family: 'Poppins', sans-serif;
}
.maps-google-thumbs{
	line-height: 28px;
	padding: 15px;
}
.maps-google-thumbs strong{
	font-size: 18px;
}
.maps-google-thumbs i{
	margin-right: 20px;
}
</style>
<script src="https://www.w3schools.com/lib/w3.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCPfAJVg4uyHBWNpL8dZuJh3P5LmWCEwsg"></script>

			
		<div class="carrosel">
			<div>
				<div class="mapa">
					<!-- <div class="container">

					</div> -->
					<div id="google-maps"></div>
				</div>
			</div>
		</div>


		<div class="container">			
			<a class= "ativo seleciona-form-mapas">SELECIONE A REGIÃO</a>
			<div class="box-fundo back-mapas" style="width: 47%"></div>
			<form action="" method="post" id="form" class="form-mapas">	

			
					<div class="box-form">

						
						<div id="side_bar"></div>
						<!-- <select name="pessoas" class="media">
							<option value="" selected="selected">Cidade</option>
							<option value="" >São Paulo</option>
							<option value="" >Rio de Janeiro</option>
							<option value="" >Minas Gerais</option>

						</select> -->
						<span class="form-selecione-estado">* Selecione uma unidade</span>
						<!-- <select name="pessoas" class="media">
							<option value="" selected="selected">Bairro</option>
							<option value="" >São Paulo</option>
							<option value="" >Santo André</option>
							<option value="" >Guarulhos</option>
						</select>
						<span class="form-selecione-cidade">* Selecione sua cidade</span>                    
						<input name="enviar" type="submit" value="BUSCAR" class="bt-enviar" /> -->
					</div>			
			</form>
			
		</div>
		<br class="quebra">
		<div class="container">
		<?php 
			$args = array( 'post_type' => 'unidades', 'posts_per_page' => 100 );
		$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
?>
			<div class="box-endereco">
				<span><?php the_title(); ?></span>
				
				<h5><?php echo rwmb_meta('regiao'); ?></h5>
				<p><i class="fa fa-user" aria-hidden="true"></i>
				<?php echo rwmb_meta('pessoa'); ?></p>
				<p><i class="fa fa-envelope" aria-hidden="true"></i>
				<?php echo rwmb_meta('email'); ?></p>
				<p><i class="fa fa-phone" aria-hidden="true"></i>
				<?php echo rwmb_meta('telefone');?> / <?php echo rwmb_meta('telefone-dois');?></p>
				<a href="<?php the_permalink(); ?>" class="link-unidades-interna" title="Entrar em Contato">CONTATO</a>
				<?php the_post_thumbnail('mapa'); ?>




				
			</div>





		<?php endwhile; ?>


		<br class="quebra">

			<a class="ver-mais-unidades">Ver mais ></a>
	<!--		<div class="paginacao">
				<a href="#"> << </a>
				<a href="#"> < </a>
				<a href="#" class="ativo"> 1 </a>
				<a href="#"> 2 </a>
				<a href="#"> 3 </a>
				<a href="#"> 4 </a>
				<a href="#"> 5 </a>
				<a href="#"> 6 </a>
				<a href="#"> 7 </a>
				<a href="#"> > </a>
				<a href="#"> >> </a>
				<span>12 Páginas</span>
			</div> -->
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
$(function(){
	var x = $(window).width()
	if(x < 480){
		$('a.link-unidades-interna').attr('href','tel:(71) 3042-0062');
	}
})
</script>
