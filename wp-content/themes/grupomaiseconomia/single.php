		<?php get_header(); ?>
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
	.menu-fixed a.blog{
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
		 <!-- Começa o Loop. -->
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="container">

			<p class="caminho">HOME > BLOG > CATEGORIA > <span><?php the_title(); ?></span></p>
			<div class="left">
			<br class="quebra">
				<div class="blog-interno">
					<div class="imagem-post-grande">
					<?php the_post_thumbnail('imagem-post'); ?>
					</div>
					<div class="pessoas">
						<img src="<?php echo get_template_directory_uri(); ?>/images/foto2.png" width="45">
						<p>Escrito por <span><?php the_author(); ?></span></p>
					</div>
					

					<div class="textos">

						<h2><?php the_title(); ?></h2>
						<div class="info">
						<p><?php echo get_the_date(); ?></p>
						<p><span class="cinzaclaro"><?php comments_number(); ?></span></p>
						<p>
							<span class="cinzaclaro">IN</span>
							<span class="laranja"> 								<?php
$categories = get_the_category( $post_ID );
foreach ( $categories as $category ) {
echo '<span class="laranja"' . get_category_link( $category->term_id ) . '"> ' . $category->name . '</span>';
}
?></span>
						</p>
						</div>	<div class="tags-share-content">
						<p class="texto-principal">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat enim ad minim.</p>
						<br class="quebra">
						
						<p><?php the_content();?></p>
					
					
						<div class="tags">
							
						<span>
							<?php the_tags(); ?></span>
						</div>	</div><br class="quebra">

</div>	
				
					
					
				</div>	
				<br class="quebra">
				<div class="botoes-direcionais">
						
							
							 <?php previous_post_link('<strong class="prev" >%link</strong>'); ?> 

						
						
							
							<?php next_post_link( '<strong class="next">%link</strong>' ); ?>

						
				</div>
				<br class="quebra">
				<?php comments_template(); ?>
			<!--	<div class="comentarios">
					<h3>4 Comentários</h3>
					<div class="comentario">
						<img src="<?php echo get_template_directory_uri(); ?>/images/foto3.png">
						<h4>Sandy Miranda</h4>
						<p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta. </p>
						<p class="data">October 29, 2017 at 4:49 pm</p>
					</div>
					<div class="comentario interna">
						<img src="<?php echo get_template_directory_uri(); ?>/images/foto2.png">
						<h4>Jonathan Simpson</h4>
						<p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta. </p>
						<p class="data">October 29, 2017 at 4:49 pm</p>
					</div>
					<div class="comentario interna">
						<img src="<?php echo get_template_directory_uri(); ?>/images/foto1.png">
						<h4>Jennifer Smith</h4>
						<p>Claritas est etiam processus dynamicus, qui sequitur mutationem. </p>
						<p class="data">October 29, 2017 at 4:49 pm</p>
					</div>
					<div class="comentario">
						<img src="<?php echo get_template_directory_uri(); ?>/images/foto2.png">
						<h4>Paul Richards</h4>
						<p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta. </p>
						<p class="data">October 29, 2017 at 4:49 pm</p>
					</div>
					<h3>Este Post Ajudou Você? Comente!</h3>
					<br class="quebra">
					<form>
						<textarea rows="10" cols="50" placeholder="Escreve aqui seu comentário.."></textarea>
						<input type="text" name="" placeholder="Seu Nome*">
						<input type="text" name="" placeholder="Seu E-Mail*">
						<input name="enviar" type="submit" value="ENVIAR" class="bt-enviar" />
					</form>
					<br class="quebra">

				</div> -->

			</div>
			 <!-- Termina o Loop (mas repare no "else" - veja próxima linha) -->
 <?php endwhile; else: ?>

 <!-- O primeiro IF testou para ver se havia posts a serem mostrados -->
 <!-- Este ELSE diz ao WordPress o que fazer se não houver nenhum -->
 <p>Sorry, no posts matched your criteria.</p>

 <!-- Término verdadeiro do Loop -->
 <?php endif; ?>
			<?php get_sidebar(); ?>
		</div>

		<br class="quebra">

	<?php get_footer('blog'); ?>
