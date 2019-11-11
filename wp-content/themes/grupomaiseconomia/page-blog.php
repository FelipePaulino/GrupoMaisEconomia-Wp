<?php 

/*
Template Name: Blog
*/

get_header(); 

?>	
<style type="text/css">
a.blog{
	padding-top: 20px;
	border-top: 4px #fff solid;
}
.menu-fixed a.blog{
	padding-top: 20px;
	border-top: 4px #203372 solid;
	color: #203372;
}
body{
	background: #ffffff;
}

@media (max-width: 480px) {
	.menu-fixed a, .menu-fixed a.blog{
	padding-top: 20px;
	border-top: 0;
	color: #fff;
}
}
</style>
<!--	<div class="banner banner-faca-parte-da-nossa-rede-de-franqueados-celular">
			<div class="container">

				<h2>Faça parte da nossa 
rede de  <span>FRANQUEADOS</span></h2>
				<p>Conheça nossos casos de sucesso, proporcionamos
até 56% de economia para nossos clientes.</p>
				<a href="#">Saiba Mais</a>
			</div>
		</div>
		<div class="carrosel">
			<div>
				<div class="banner banner-faca-parte-da-nossa-rede-de-franqueados">
					<div class="container">

						<h2>Faça parte da nossa 
rede de  <span>FRANQUEADOS</span></h2>
						<p>Conheça nossos casos de sucesso, proporcionamos
	até 56% de economia para nossos clientes.</p>
						<a href="#">Saiba Mais</a>
					</div>
				</div>
			</div>

		</div>-->

		<div class="container">
			<p class="caminho">HOME > <span> Blog</span></p>
			<div class="left">
				
				<br class="quebra">


				<?php $args = array( 'post_type' => 'post', 'posts_per_page' => 10 );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();
				?>
				<div class="materia">
				<div class="imagem-post-grande">
					<?php the_post_thumbnail('imagem-post'); ?>
					</div>
					<div class="pessoas">
						<?php echo get_avatar( $id_or_email, $size, $default, $alt, $args ); ?> 
						<p class="escrito">Escrito por <span><?php the_author(); ?></span></p>
					</div>
					<div class="textos">
						<div class="informacoes-lateral">
						<h2><?php the_title(); ?></h2>
						<p><?php echo get_the_date(); ?></p>
						<p><span class="cinzaclaro"><?php comments_number(); ?></span></p>
						<p>
							<span class="cinzaclaro">IN</span>
							 
								<?php
$categories = get_the_category( $post_ID );
foreach ( $categories as $category ) {
echo '<span class="laranja"' . get_category_link( $category->term_id ) . '"> ' . $category->name . '</span>';
}
?>




							
						</p>
						</div>
						<br class="quebra">
						
						<p class="texto-postado">
						<?php the_excerpt(); ?></p>
						<a href="<?php the_permalink(); ?>" title="Continue Lendo">Continue lendo <span class="seta"></span></a>
						
					</div>
				</div>
				<?php endwhile; ?>



				
			</div>
			<?php get_sidebar(''); ?>
		</div>

			<div class="paginacao pag-blog">
				<a href="#"> < </a>
				<a href="#"> 1 </a>
				<a href="#"> 2 </a>
				<a href="#"> 3 </a>
				<a href="#"> 4 </a>

				<a href="#"> > </a>
			</div>

		<br class="quebra">

<?php get_footer('blog'); ?>
