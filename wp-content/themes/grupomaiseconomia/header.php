

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>


<!-- Última versão CSS compilada e minificada -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bootstrap/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Tema opcional -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bootstrap/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">


<link rel="profile" href="http://gmpg.org/xfn/11" />
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />


<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />

<meta charset="<?php bloginfo( 'charset' ); ?>">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">





<link href="https://fonts.googleapis.com/css?family=Poppins:400,600" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick.css"/>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/font-awesome/css/font-awesome.min.css">

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PTGRJJM');</script>
<!-- End Google Tag Manager -->

<script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>
</head>
<body>
	
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PTGRJJM"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

  <!--	<div class="box-esquerda">
	  	<a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a>
	  	<a href="https://www.linkedin.com/company/22316127/" title="Ir para o LinkedIn"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
	  	<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
	  	<a href="https://www.facebook.com/grupomaiseconomia/" title="Ir para o Facebook"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
		<p>Siga-nos</p>
	</div>-->

	<div class="video-ativo">

  		<iframe width="90%" height="90%" src="https://www.youtube.com/embed/qgX0OOKM_rQ" frameborder="0" allowfullscreen></iframe>
  	</div>
<form>

	
</form>
  	<div class="form-contato-ativo">
  		<div class="container">
	  		<div class="modal-form">

	  		  	<h5>Contato</h5>
	  			<p class="retornaremos">Retornaremos em alguns instantes</p>
	  			<?php echo do_shortcode( '[contact-form-7 id="165" title="Modal"]' ); ?>
	  			
		
	
	  			<!-- <form class="formulario-index">
	  				<div class="input_label">
						<label>Seu Nome</label>
		  				<input name="nome" type="text" value=""/>
		  			</div>

		  			<div class="input_label">
						<label>Telefone</label> 
		  				<input name="nome" type="text" value="" placeholder="(xx) xxxxx-xxxx" />
		  			</div>

		  			<div class="input_label">
						<label>Seu E-mail</label> 
		  				<input name="nome" type="text" value="" placeholder="marcelo@3xceler.com.br" />
		  			</div>

		  			<div class="input_label">
						<label>Estado</label> 
		  				<select name="pessoas" class="media">
							<option value="" selected="selected">Estado</option>
							<option value="" >São Paulo</option>
							<option value="" >Rio de Janeiro</option>
							<option value="" >Minas Gerais</option>
						</select>
		  			</div>

		  			<div class="input_label">
						<label>Cidade</label> 
		  				<select name="pessoas" class="media">
							<option value="" selected="selected">Cidade</option>
							<option value="" >São Paulo</option>
							<option value="" >Rio de Janeiro</option>
							<option value="" >Minas Gerais</option>
						</select>
		  			</div>

		  			<div class="input_label">
						<label>Bairro</label> 
		  				<input name="nome" type="text" value="" />
		  			</div>

		  			<div class="input_label">
						<label>Tipo de Empreendimento</label> 
		  				<select name="pessoas" class="media">
							<option value="" selected="selected">Selecione</option>
							<option value="" >Condominios Residênciais</option>
							<option value="" >Comdominios Empresariais</option>
							<option value="" >Motéis / Hoteis</option>
							<option value="" >Colégios / Creches</option>
							<option value="" >Faculdades</option>
							<option value="" >Hospitais / Clinicas</option>
							<option value="" >Industrias</option>
							<option value="" >Residenciais</option>
							<option value="" >Outros</option>
						</select>
		  			</div>                    
					<input name="enviar" type="submit" value="ENVIAR" class="bt-enviar" />
					<div class="input_label msg">
					<label>Mensagem</label> 
						<textarea rows="10" cols="50"></textarea>
					</div>

	  			</form> -->
	  		</div>
  		</div>
  	</div>

<div class="sticky_navigation">
	  	<header class="container">
	  		<a href="" title="Ir para a Home"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-grupo-mais-economia.png" class="logo" alt="Grupo Mais Economia" title="Grupo Mais Economia"></a>
			<ul class="menu">
				<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="home" title="Ir para Home">Home</a></li>
				
				<li><a class="servicos">Serviço de Economia</a>
					<ul class="sub-menu-fechado">
						<span class="triangulo icones"></span>
						<li><a href="economia-de-agua-em-residencias/" title="Ir para a Residências" >Residências</a></li>
						<li><a href="economia-de-agua-em-condominios-empresariais/" title="Ir para a Condomínios Empresariais">Condomínios Empresariais</a></li>
						<li><a href="economia-de-agua-em-condominios-residenciais/" title="Ir para a Condomínios Residenciais">Condomínios Residenciais</a></li>
						<li><a href="economia-de-agua-para-colegios-e-creches/" title="Ir para a Colégios e Creches">Colégios e Creches</a></li>
						<li><a  href="economia-de-agua-em-faculdades/" title="Ir para a Faculdades">Faculdades</a></li>
						<li><a  href="economia-de-agua-em-hospitais-e-clinicas/" title="Ir para a Hospitais e Clínicas">Hospitais e Clínicas</a></li>
						<li><a href="economia-de-agua-em-hoteis-e-moteis/" title="Ir para a Hotéis e Motéis">Hotéis e Motéis </a></li>
						<li><a  href="economia-de-agua-em-industrias/" title="Ir para a Indústrias">Indústrias</a></li>
						 
						<!-- <li>
							 <ul class="drop_down2">
								
								<li><a href="unidades.php">São Paulo</a></li>
								<li><a href="unidades.php">Bahia</a>
								<li><a href="unidades.php">Rio de Janeiro</a></li>
								<li><a href="unidades.php">São Paulo</a></li>
							</ul> 
						</li>
						<li><a href="#">Rio de Janeiro</a>
							<ul class="drop_down2">						
								<li><a href="#">São Paulo</a></li>
								<li><a href="#">Bahia</a>
								<li><a href="#">Rio de Janeiro</a></li>
								<li><a href="#">São Paulo</a></li>
							</ul>	
						</li>
						<li><a href="unidades.php">São Paulo</a></li> -->				
					</ul>
				<li><a href="unidades" class="unidades" title="Ir para Unidades">Unidades</a></li>	
				<li><a href="sobre" class="quem-somos" title="Ir para Quem Somos">Quem Somos</a></li>		
				<li><a href="cases" class="cases" title="Ir para Cases de Sucesso">Cases de Sucesso</a></li>
				<li><a href="blog" class="blog" title="Ir para Blog">Blog</a></li>
				<div class="bloco_direito">
					<li>
						<a class="telefone_escondido">
							<span class="triangulo icones"></span>
							71 3042.0062
						</a>VER TELEFONE
					</li>



				</div>

			</ul>
			
			<a href="#" class="menu-abrir" title="Fechar"></a>	
			<a href="#" class="menu-fechar" title="Fechar"></a>
			
			<a href="#" class="sub-menu-fechar" title="Fechar"></a>		
		</header>
    </div>

