<?php 

/*
Template Name: sobre
*/

get_header(); 

?>
<style type="text/css">
a.quem-somos{
		padding-top: 20px;
		border-top: 4px #fff solid;
}
.menu-fixed a.quem-somos{
	padding-top: 20px;
	border-top: 4px #203372 solid;
	color: #203372;
}
.conteudo{
 	height: 920px;
}
.conteudo div {
    width: 47%;
}
</style>
	<div class="banner banner-precisa-de-ajuda-para-economizar-celular">
				<div class="container">

					<h2>Precisa de ajuda para <span>ECONOMIZAR?</span></h2>
					<p>Com 26 anos de experiência em hidráulica, o Grupo Mais Economia criou uma tecnologia avançada para reduzir a conta de água em até 40%.</p>
					<a href="#" class="abrir-modal">Contato</a>
				</div>
			</div>

		<div class="carrosel">
			<div>

				<div class="banner banner-precisa-de-ajuda-para-economizar">
					<div class="container">

						<h2>Precisa de ajuda
para <span>ECONOMIZAR?</span></h2>
						<p>Conheça nossos casos de sucesso, proporcionamos
	até 56% de economia para nossos clientes.</p>
						<a href="#" class="abrir-modal" >Contato</a>
					</div>
				</div>
			</div>

		</div>

		<div class="container">
			<div class="conteudo">
				<span class="triangulo"></span>
				<div>
					<p class="texto-sobre">O Grupo Mais Economia é uma rede de franquias de serviços de economia de água, aplicando tecnologias de redução de consumo em diferentes tipos de empreendimentos.</p>
					<h2>Nossa História</h2>
					<p>Com 27 anos de experiência em hidráulica Manoel de Quadros Vasconcellos ao se deparar com um grave problema de consumo de água em seu condomínio buscou uma solução para o problema. Ao listar uma série de métodos e executá-los no seu condomínio obteve um resultado de 33% de economia, a partir daí, passou a implantar os mesmos métodos em outros condomínios, sempre com êxito. Ao aplicar a tecnologia de redução de consumo de água na cidade de Salvador-BA, foi comprovado o sucesso da operação. Surgiu então a ideia de formatar a empresa em uma rede de franquias de serviços de economia de água. Hoje, presente em várias cidades espalhadas pelo Brasil, e também em Angola na África.</p>

					<p>O Grupo Mais Economia convida você a participar do MAIOR NEGÓCIO SUSTENTÁVEL DO PAÍS.</p>
<!-- 
					<img src="<?php //echo get_template_directory_uri(); ?>/images/ligacao-3pontos.jpg" class="tres-pontos">
					<p class="datas">2012-2015</p>
					<h3>Lorem ipsum dolor sit amet, consectetur</h3>
					<p class="menor">Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius claritas est etiam processus dynamicus.</p>
					<p class="datas">2010-2012</p>
					<h3>Lorem ipsum dolor sit amet, consectetur</h3>
					<p class="menor">Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius claritas est etiam processus dynamicus.</p>
					<p class="datas">2006-2010</p>
					<h3>Lorem ipsum dolor sit amet, consectetur</h3>
					<p class="menor">Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius claritas est etiam processus dynamicus.</p> -->



					<h2>Missão:</h2>
					<p>Não ficar com essa tecnologia somente para nós, mas como já fizemos envolvemos nossos familiares. Esta é uma franquia que dá para muitos que querem começar um negócio com pouco recursos. Nossa missão é ajudar as pessoas a economizarem, serem ecologicamente corretas, e no caso dos nossos franqueados ter um meio sadio, altamente rentável, e satisfatório de ganhar a vida de modo sustentável.</p>
				</div>
				<div>
					<h2>Visão</h2>
					<p>Atualmente os acontecimentos indicam futuro aonde a água potável do planeta está cada vez mais escassa. Comercialmente esse campo de economia de água é muito fértil, e com poucas empresas no Brasil disponíveis para esse trabalho, tão importante para preservar o líquido mais precioso para a vida. Temos, também, uma visão ecológica no aproveitamento de águas de nascentes e águas pluviais que são barbaramente desperdiçadas.</p>

					<h2>Política:</h2>
					<p>Que nossa inquietude seja correr em direção ao aprimoramento de tecnologia futuristas e ecológicas, para servir nossos clientes, e satisfazer os desejos de todos os nossos franqueados.</p>
					<!-- <img src="<?php //echo get_template_directory_uri(); ?>/images/ligacao-2pontos.jpg" class="dois-pontos">
					<p class="datas">2012-2015</p>
					<h3>Lorem ipsum dolor sit amet, consectetur</h3>
					<p class="menor">Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius claritas est etiam processus dynamicus.</p>
					<p class="datas">2010-2012</p>
					<h3>Lorem ipsum dolor sit amet, consectetur</h3>
					<p class="menor">Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius claritas est etiam processus dynamicus.</p> -->

				</div>
			</div>

		</div>

		<br class="quebra">

	<?php get_footer(); ?>
	<script type="text/javascript">
$(function(){
	var x = $(window).width()
	var y = $(window).height()
	if(x < 480){
		$('.conteudo').css({'height': y - 1550 , 'margin-bottom': '20'})
		$('.conteudo div').css({'width': '100%'})
	}
})
</script>