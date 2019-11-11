<div class="right">
	<div class="box-conteudo">
		<img src="<?php echo get_template_directory_uri(); ?>/images/logo-grupo-mais-economia-preto.png">
		<p>Com 27 anos de experiência em hidráulica Manoel de Quadros Vasconcellos ao se deparar com um grave problema de consumo de água em seu condomínio buscou uma solução para o problema.</p>
		<a href="sobre">Saiba Mais</a>
	</div>
	<div class="box-conteudo">
		<h3>Categorias</h3>
		<ul>
			<?php
			$args=array(
			  'orderby' => 'name',
			  'order' => 'ASC'
			  );
			$categories=get_categories($args);
			  foreach($categories as $category) { 
			    echo '<li> <a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name. '<span>'. $category->count . '</span> 	</a> </li> ';
			    } 
			?>
		</ul>
	</div>
	<div class="box-conteudo">
		<a class="click ativo">Recentes</a>
		<a class="click">Popular</a>
		<div class="box-recentes">


		<?php $args = array( 'post_type' => 'post', 'posts_per_page' => 4 );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();
				?>
			<a class="bloco-post" href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail('imagem-post-sidebar'); ?>
				<h3><?php the_title(); ?></h3>
				<p class="data"><?php echo get_the_date(); ?></p>
			</a>
		<?php endwhile; ?>



		</div>
		<div class="box-popular">


<?php
		$nova_consulta = new WP_Query( 
    array(
        'posts_per_page'      => 4,                 // Máximo de 4 artigos
        'no_found_rows'       => true,              // Não conta linhas
        'post_status'         => 'publish',         // Somente posts publicados
        'ignore_sticky_posts' => true,              // Ignora posts fixos
        'orderby'             => 'meta_value_num',  // Ordena pelo valor da post meta
        'meta_key'            => 'tp_post_counter', // A nossa post meta
        'order'               => 'DESC'             // Ordem decrescente
    )
);
?>
    <?php if ( $nova_consulta->have_posts() ): ?>
        <?php while ( $nova_consulta->have_posts() ): ?>
        
            <?php $nova_consulta->the_post(); ?>
            <?php $tp_post_counter = get_post_meta( $post->ID, 'tp_post_counter', true );?>


			<div class="bloco-post">
				<?php the_post_thumbnail('imagem-post-sidebar'); ?>
				<h3><?php the_title(); ?></h3>
				<p class="data"><?php echo get_the_date(); ?></p>
			</div>
			  <?php endwhile; ?>
    <?php endif; // have_posts ?>
 
    <?php wp_reset_postdata(); ?>


		</div>
	</div>
<a class="abrir-modal"><img src="<?php echo get_template_directory_uri(); ?>/images/banner-lateral.jpg" class="banner-lateral"></a>
</div>
