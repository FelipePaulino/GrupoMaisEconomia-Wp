
		
		$(document).ready(function () { 
		
			$.getJSON('http://www.grupomaiseconomia.com/wp-content/themes/grupomaiseconomia/estados_cidades.json', function (data) {

				var items = [];
				var options = '<option value="">Estado</option>';	

				$.each(data, function (key, val) {
					options += '<option value="' + val.nome + '">' + val.nome + '</option>';
				});					
				$("#estados").html(options);				
				
				$("#estados").change(function () {				
				
					var options_cidades = '';
					var str = "";					
					
					$("#estados option:selected").each(function () {
						str += $(this).text();
					});
					
					$.each(data, function (key, val) {
						if(val.nome == str) {							
							$.each(val.cidades, function (key_city, val_city) {
								options_cidades += '<option value="' + val_city + '">' + val_city + '</option>';
							});							
						}
					});

					$("#cidades").html(options_cidades);
					
				}).change();		
			
			});
		
		});
		
	

$(document).ready(function () {
	
	$.getJSON('http://www.grupomaiseconomia.com/wp-content/themes/grupomaiseconomia/estados_cidades.json', function (data) {

		var items = [];
		var options = '<option value="">escolha um estado</option>';	

		$.each(data, function (key, val) {
			options += '<option value="' + val.nome + '">' + val.nome + '</option>';
		});					
		$("#estados2").html(options);				
		
		$("#estados2").change(function () {				
			
			var options_cidades = '';
			var str = "";					
			
			$("#estados2 option:selected").each(function () {
				str += $(this).text();
			});
			
			$.each(data, function (key, val) {
				if(val.nome == str) {							
					$.each(val.cidades, function (key_city, val_city) {
						options_cidades += '<option value="' + val_city + '">' + val_city + '</option>';
					});							
				}
			});

			$("#cidades2").html(options_cidades);
			
		}).change();		
		
	});
	
});


$(document).ready(function(){
	$('.carrosel').slick({dots:true,arrows:false,infinite:true,slidesToShow:1,slidesToScroll:1,autoplay:true,autoplaySpeed:5000,responsive:[{breakpoint:480,settings:{dots:false,arrows:false,infinite:false,slidesToShow:1,slidesToScroll:1,autoplay:false}}]});});
$(function(){
	$('a.nos-ligamos').click(function(e){e.preventDefault();
	$('.telefone-aparece').removeClass('telefone-fechado');
	$('.telefone-aparece').addClass('telefone-aberto');
	$('.fechar img').css('display','block')});
	$('.fechar').click(function(e){e.preventDefault();
		$('.telefone-aparece').removeClass('telefone-aberto');
		$('.telefone-aparece').addClass('telefone-fechado');
		$('.fechar img').css('display','none')});});
$(function(){
		$('.bloco_direito li').eq(0).click(function(e){e.preventDefault();
			if($('.telefone_escondido').hasClass('aparecer')){
				$('.telefone_escondido').removeClass('aparecer');
				$(this).addClass('aparecer');}
			else{
				$('.telefone_escondido').addClass('aparecer');
				$(this).removeClass('aparecer');setTimeout(function(){
				$('.telefone_escondido').removeClass('aparecer');},7000);}});});


$(function(){
	$('a.prefiro-ligacao').click(function(e){e.preventDefault();
		if($('.solicite-visita').hasClass('ativo')){
			$('.form-solicite-uma-visita').removeClass('aparecer');
			$('.form-prefiro-uma-ligacao').addClass('aparecer');
			$('.solicite-visita').removeClass('ativo');
			$('.prefiro-ligacao').addClass('ativo');
		}
		else{
			$('.form-prefiro-uma-ligacao ').removeClass('aparecer');
			$('.form-solicite-uma-visita').addClass('aparecer');
			$('.prefiro-ligacao').removeClass('ativo');
			$('.solicite-visita').addClass('ativo');
		}});
	$('a.solicite-visita').click(function(e){e.preventDefault();
		if($('.solicite-visita').hasClass('ativo')){
			$('.form-solicite-uma-visita').removeClass('aparecer');
			$('.form-prefiro-uma-ligacao').addClass('aparecer');
			$('.solicite-visita').removeClass('ativo');
			$('.prefiro-ligacao').addClass('ativo');
		}
		else{
			$('.form-prefiro-uma-ligacao ').removeClass('aparecer');
			$('.form-solicite-uma-visita').addClass('aparecer');
			$('.prefiro-ligacao').removeClass('ativo');
			$('.solicite-visita').addClass('ativo');}});




$('a.video').click(function(e){e.preventDefault();if($('.video-ativo').hasClass('ativar')){$('.video-ativo').addClass('ativar');}else{$('.video-ativo').addClass('ativar');$('iframe').attr('src','https://www.youtube.com/embed/qgX0OOKM_rQ?autoplay=1')}});$('.video-ativo').click(function(e){e.preventDefault();if($('.video-ativo').hasClass('ativar')){$('.video-ativo').removeClass('ativar');$('iframe').attr('src','https://www.youtube.com/embed/qgX0OOKM_rQ')}});$('.servicos-franqueado').removeClass('motivo-ativo-franqueado');$('.servicos-franqueado').click(function(e){e.preventDefault();$('.servicos-economia ').removeClass('motivo-ativo-economia');$('.servicos-franqueado ').addClass('motivo-ativo-franqueado');$('.posts-economia').removeClass('posts-ativo')
$('.posts-franqueado').addClass('posts-ativo')
$('.triangulo-motivos').animate({left:800})
$('.todos-posts').css('height','1220px')
$('.box-encondido-economia').slideUp(0);$('.box-encondido-franqueado').slideUp(0);$('.ver-mais-franqueado').fadeIn(100)});$('.servicos-economia').click(function(e){e.preventDefault();$('.servicos-franqueado').removeClass('motivo-ativo-franqueado');$('.servicos-economia ').addClass('motivo-ativo-economia');$('.posts-franqueado').removeClass('posts-ativo')
$('.posts-economia').addClass('posts-ativo')
$('.triangulo-motivos').animate({left:155})
$('.todos-posts').css('height','1220px')
$('.box-encondido-economia').slideUp(0);$('.box-encondido-franqueado').slideUp(0);$('.ver-mais-economia').fadeIn(100)});$('.ver-mais-economia').click(function(){$('.box-encondido-economia').slideDown(500);$(this).fadeOut(100)
$('.todos-posts').css('height','2050px')})
$('.ver-mais-franqueado').click(function(){$('.box-encondido-franqueado').slideDown(500);$(this).fadeOut(100)
$('.todos-posts').css('height','2050px')})
$('a.abrir-modal').click(function(e){e.preventDefault();$('.form-contato-ativo').fadeIn(200)})
$('.fechar').click(function(e){e.preventDefault();$('.form-contato-ativo').fadeOut(200)})});$(function(){$('a.click').eq(0).click(function(){$('.box-recentes').slideDown(500)
$('.box-popular').slideUp(500)
$('a.click').eq(1).removeClass('ativo')
$(this).addClass('ativo')})
$('a.click').eq(1).click(function(){$('.box-popular').slideDown(500)
$('.box-recentes').slideUp(500)
$('a.click').eq(0).removeClass('ativo')
$(this).addClass('ativo')})});$(function(){$('a.menu-abrir').click(function(e){e.preventDefault();$('.menu').removeClass('menu-fechado');$('.menu').addClass('menu-aberto');$('a.menu-fechar').css('display','block')
$('a.menu-abrir').css('display','none')})
$('a.menu-fechar').click(function(e){e.preventDefault();$('.menu').removeClass('menu-aberto');$('.menu').addClass('menu-fechado');$('a.menu-fechar').css('display','none')
$('a.menu-abrir').css('display','block')})})
$(function(){$('a.servicos').click(function(e){e.preventDefault();$('.menu li ul').removeClass('sub-menu-fechado');$('.menu li ul').addClass('sub-menu-aberto');$('a.sub-menu-fechar').css('display','block')})
$('a.sub-menu-fechar').click(function(e){e.preventDefault();$('.menu-aberto li ul').removeClass('sub-menu-aberto');$('.menu-aberto li ul').addClass('sub-menu-fechado');$('a.sub-menu-fechar').css('display','none')})})
$(function(){$('.box-endereco').css('display','none')
$('.box-endereco').eq(0).css('display','block')
$('.box-endereco').eq(1).css('display','block')
$('.box-endereco').eq(2).css('display','block')
$('.box-endereco').eq(3).css('display','block')
$('.box-endereco').eq(4).css('display','block')
$('.box-endereco').eq(5).css('display','block')
$('.box-endereco').eq(6).css('display','block')
$('.box-endereco').eq(7).css('display','block')
$('.box-endereco').eq(8).css('display','block')
$('.box-endereco').eq(9).css('display','block')
$('.ver-mais-unidades').click(function(){$('.box-endereco').slideDown(200);$(this).css('display','none')})})
$(document).ready(function(){$.getJSON('estados_cidades.json',function(data){var items=[];var options='<option value="">escolha um estado</option>';$.each(data,function(key,val){options+='<option value="'+val.nome+'">'+val.nome+'</option>';});$("#estados").html(options);$("#estados").change(function(){var options_cidades='';var str="";$("#estados option:selected").each(function(){str+=$(this).text();});$.each(data,function(key,val){if(val.nome==str){$.each(val.cidades,function(key_city,val_city){options_cidades+='<option value="'+val_city+'">'+val_city+'</option>';});}});$("#cidades").html(options_cidades);}).change();});});$(function(){$(window).resize(function(){var x=$(window).width()
if(x<480){$('.carrosel').remove()}});})
$(function(){var x=$(window).width()
if(x<480){$('.carrosel').remove()
$('.solicite-visita').click(function(){$('.box-fundo').css('height',455);})
$('.prefiro-ligacao').click(function(){$('.box-fundo').css('height',305);})
$('.dicas .dica_especifica').css('width',x)
$('.servicos-franqueado ').addClass('motivo-ativo-franqueado');$('.servicos-franqueado').click(function(e){e.preventDefault();$('.servicos-franqueado ').addClass('motivo-ativo-franqueado');$('.servicos-economia ').addClass('motivo-ativo-economia');})
$('.servicos-economia').click(function(e){e.preventDefault();$('.servicos-franqueado ').addClass('motivo-ativo-franqueado');$('.servicos-economia ').addClass('motivo-ativo-economia');})
$(function(){$('.sticky_navigation').addClass('menu-fixed');
	$('.logo').attr('src',local + '/images/logo-grupo-mais-economia-preto.png')})

$('.tipos-empreendimentos').slick({breakpoint:480,settings:{infinite:true,arrows:true,slidesToShow:1,variableWidth:true,slidesToScroll:1}});$('.blocos-cases').slick({breakpoint:480,settings:{infinite:true,arrows:true,slidesToShow:3,variableWidth:true,slidesToScroll:3}});}
else{$(function(){var sticky_navigation_offset_top=$('.sticky_navigation').offset().top;var sticky_navigation=function(){var scroll_top=$(window).scrollTop();if(scroll_top>sticky_navigation_offset_top){$('.sticky_navigation').addClass('menu-fixed');
	$('.logo').attr('src',local + '/images/logo-grupo-mais-economia-preto.png')}else{$('.sticky_navigation').removeClass('menu-fixed');
	$('.logo').attr('src',local + '/images/logo-grupo-mais-economia.png')}};sticky_navigation();$(window).scroll(function(){sticky_navigation();});});}})
$('.carrosel-depoimentos').slick({centerMode:true,centerPadding:'0',variableWidth:true,dots:true,arrows:false,autoplay:true,autoplaySpeed:5000,focusOnSelect:true,slidesToShow:3,responsive:[{breakpoint:768,settings:{arrows:false,centerMode:true,centerPadding:'0',slidesToShow:3}},{breakpoint:480,settings:{arrows:false,centerMode:true,centerPadding:'0',slidesToShow:1}}]});$('.dicas').slick({infinite:true,arrows:true,slidesToShow:1,variableWidth:true,slidesToScroll:1,responsive:[{breakpoint:768,settings:{infinite:true,arrows:true,slidesToShow:1,variableWidth:true,slidesToScroll:1}}]});


