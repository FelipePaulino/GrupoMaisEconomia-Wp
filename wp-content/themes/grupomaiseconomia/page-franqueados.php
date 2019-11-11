<?php 

/*
Template Name: Franqueados
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
.box-servicos h4{
	color: #fff;
}
.servicos-interno{
	border-radius: 10px;
}

</style>	
	<div>
				<div class="banner banner-faca-parte-da-nossa-rede-de-franqueados-celular">
					<div class="container">
						<h2>Economia de Água para <span>Franqueados</span></h2>
						<p>O Grupo Mais Economia é uma rede de franquias com tecnologias especializadas na redução do consumo de água para residências, condomínios e outros tipos de estabelecimentos.</p>
						<a href="#" class="abrir-modal">Contato</a>
					</div>
				</div>
		<div class="carrosel">
			<div>
				<div class="banner banner-faca-parte-da-nossa-rede-de-franqueados">
					<div class="container">
						<h2>Economia de Água para <span>Franqueados</span></h2>
						<p>O Grupo Mais Economia é uma rede de franquias com tecnologias especializadas na redução do consumo de água para residências, condomínios e outros tipos de estabelecimentos.</p>
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
			<h1>Economia de água em Condomínios Residenciais</h1>
	 		<p>Conheça meios para economizar água em condomínios residenciais.</p>

		
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

						<a href="#" class="botao-chamada abrir-modal">QUERO ECONOMIZAR TAMBÉM</a>
					</div>
					    <div class="col-md-6 duvidas col-xs-12">
    <h2>Principais Dúvidas</h2>
    <div>
        <a>isso realmente funciona? </a>
        <p>Sim. O Grupo Mais Economia atua com serviços de economia de água para condomínios e diversos tipos de estabelecimentos, como hospitais, escolas e indústrias. Com tecnologia adequada, profissionais experientes e capacitados, diagnosticamos e solucionamos possíveis problemas na rede hidráulica e implementamos mecanismos que evitam o desperdício e reduzem o consumo de água, sem prejudicar as atividades desempenhadas nesses locais.<br><br>
        Em cada projeto, com sucesso comprovado, é possível reduzir consideravelmente o consumo de água e os gastos decorrentes. Além dos benefícios financeiros que o contratante obtém, ainda ajudamos o nosso planeta, por meio da preservação de um recurso cada vez mais escasso.
        </p>
    </div>
    <div>
        <a>quanto isso vai custar para meu condomínio?</a>
        <p>Nada. É isso mesmo que você leu. Você não pagará pelo serviço, pois a remuneração do Grupo Mais Economia vem do próprio valor economizado.
    </div>
    <div>
        <a>QUANTO TEMPO DURA O CONTRATO?</a>
        <p>O contrato tem duração padrão de 24 meses, mas pode passar por renovações.</p>
    </div>
    <div>
        <a>como funciona?</a>
        <p>Com equipamentos eletrônicos, visitamos todos os ambientes dos estabelecimentos, para inspecionar toda a rede de água e identificar problemas hidráulicos e vazamentos, mesmo que estejam sob o concreto. Para evitar o desperdício, instalamos tecnologias de economia de água, como válvulas que reduzem a pressão das torneiras, tornando-as econômicas, mas confortáveis. Verificamos, também, a caixa de água inferior para evitar a perda de água por infiltrações. A caixa de água superior também é inspecionada a fim de evitar transbordamentos. Ajustamos também a vazão de todas as descargas para uma posição econômica, eliminando os transbordamentos. Por fim, ajustamos a pressão geral da água do local.
        <br><br>
        Além desses procedimentos, também é possível realizar um projeto de captação e reuso de água da chuva ou nascente.
        </p>
    </div>
    <div>
        <a>existe garantia da economia?</a>
        <p>Sim. Possuímos diversos casos de clientes que comprovam a nítida redução nos gastos com consumo de água em diversos tipos de estabelecimentos. O Grupo Mais Economia emprega estratégias e tecnologias avançadas, com ótima infraestrutura para assegurar que haverá economia imediata em suas despesas mensais.</p>
    </div>
</div>
</div>
</div>
</div>
        

    <div class="container">
            
            <span class="triangulo-motivos icones"></span>
    

        <div class="todos-posts col-md-12">
        
                        
<a href="#" class="box-servicos motivo-ativo-franqueado servicos-interno">
                    <div class="bonequinho-franqueado"></div> 
                    <h4>10 Motivos p/ seu um franqueado</h4>
                    <p>Invista em seu sucesso e faça parte do Grupo Mais Economia</p>
                    <span>+20 franqueados</span>
            </a>
                    
       
            <div class="posts-economia posts-ativo">
                <a class="motivo">
                    <h4>1   Ecológico e Sustentável</h4>
                    <p>Sistema de negócios que protege o meio ambiente, economizando água, o bem mais precioso da terra.</p>
                </a>
                <a class="motivo">
                    <h4>2	Retorno em 4 Meses</h4>
                    <p>O payback mais rápido do mercado. Em 4 meses você recupera o capital investido.</p>
                </a>
                <a class="motivo">
                    <h4>3	Lucratividade Elevada</h4>
                    <p>Custo baixo de aplicação dos produtos e serviços, com faturamento muito alto.</p>
                </a>
                <a class="motivo">
                    <h4>4	Faturamento Líquido</h4>
                    <p>R$ 30.000,00 em média nos primeiros meses.</p>
                </a>
                <a class="motivo">
                    <h4>5	Home Office</h4>
                    <p>Você não precisa de uma mega estrutura para gerenciar este negócio. Na sua residência você terá a flexibilidade para administrar toda as operações.</p>
                </a>
                <a href="#depoimentos" class="ver-mais-franqueado">Ver mais ></a>
                <div class="box-encondido-franqueado">
                    <a class="motivo">
                        <h4>6	Suporte Permanente</h4>
                        <p>Apoio da matriz com uma equipe técnica altamente qualificada.</p>
                    </a>
                    <a class="motivo">
                        <h4>7	Sistema Operacional</h4>
                        <p>Sistema intranet social com CRM completo para o gerenciamento do negócio.</p>
                    </a>
                    <a class="motivo">
                        <h4>8	Divulgação do franqueado </h4>
                        <p>Mídia para os franqueados, em suas regiões, no nosso site, de graça.</p>
                    </a>
                    <a class="motivo">
                        <h4>9	Mercado de Necessidade Mundial</h4>
                        <p>Estamos vivenciando duas crises sérias: Crise hídrica e financeira. Por oferecer solução para as duas, somos muito requisitados.</p>
                    </a>
                    <a class="motivo">
                        <h4>10	Franquia Barata</h4>
                        <p>É a franquia mais barata neste segmento. E a taxa de franquia é financiada pelo próprio franqueador.</p>
                    </a>
                </div>
            </div>
        </div>       
    </div> 



     


  <?php include 'depoimentos.php' ?>
<?php get_footer(); ?>
<script type="text/javascript">

$(function(){
	$('.duvidas div').click(function(){
		var coletado = $(this).index()

		$('.duvidas div p').slideUp(500)
		$('.duvidas div a').css({'background-image': 'url(' + local + '/images/mais.png' + ')', 'background-color': '#ebeae3', 'color' : '#262626'});
		$(this).children('p').slideDown(500)
		$(this).children('a').css({'background-image': 'url(' + local + '/images/menos.png' + ')', 'background-color': '#203372', 'color' : '#fff', });

	})

})
</script>
