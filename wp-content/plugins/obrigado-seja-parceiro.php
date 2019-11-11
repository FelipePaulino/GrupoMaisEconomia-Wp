<?php
/**
 * Template Name: Obrigado Seja Parceiro
 *
 * 
 *
 * @package WordPress
 * @subpackage Kapor_Pisos
 * @since Kapor Pisos 1.0
 */
get_header();
?>
<div class="empresa-step">
      <div class="gridD">
        <div class="left">
          <div class="topic-header">
            <ul>
              <li>Sobre Nós</li>
              <li>A Empresa</li>
            </ul>
          </div>
          <div class="content-resume-categoria">
            <div class="title">
              <h1>A Kapor</h1>
            </div>
            <div class="content">
              <p>A Kapor Revestimentos de Madeira é uma das empresas mais conceituadas e renomadas no ramo, fundada em 1945. Possuímos um grande know-how em relação ao trabalho com revestimentos em madeiras nobres.</p>
              <div class="more-details"><a href="#" title="Fazer um Orçamento">faça um orçamento</a></div>
            </div>
          </div>
        </div>
        <div class="right">
          <div class="banner-categoria-produtos">
            <div class="slide">
              <div class="img"></div>
            </div>
            <!-- <div class="slide">
              <div class="img"></div>
            </div> -->
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
 
    <!-- <div class="form-step">
      <div class="gridD">
        <div class="left"><img src="<?php //echo get_template_directory_uri(); ?>/assets/img/man-left.jpg" alt="" title=""></div>
        <div class="right">
          <div class="title">
            <h2>Seja parceiro</h2>
            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod <br>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim</p>
          </div>
          <div class="form">
            <form>
              <input type="text" placeholder="Seu Nome">
              <input type="text" placeholder="Seu E-mail">
              <input type="text" placeholder="Seu Telefone">
              <textarea placeholder="Sua Mensagem"></textarea>
              <button type="submit"></button>
            </form>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
    </div> -->
    <?php get_template_part( 'inc/parceiro-form' ); ?>
    <?php get_template_part( 'inc/cadastre-form' ); ?>
    <!-- <div style="margin-bottom: -35px;" class="seja-parceiro"><a href="#" alt=""><img src="<?php //echo get_template_directory_uri(); ?>/assets/img/seja-parceiro-mobile.jpg" alt="" title=""></a></div> -->
    <!-- <div class="newsletter-step">
      <div class="gridD">
        <div class="overlay-beige"></div>
        <div class="left">
          <div class="title">
            <h2>CADASTRE E RECEBA NOVIDADES</h2>
            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod <br>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim</p>
          </div>
          <div class="form-news">
            <form>
              <input type="text" placeholder="Seu E-mail">
              <button type="submit"></button>
            </form>
          </div>
        </div>
        <div class="right">
          <div class="title">
            <h2>Tire sua dúvida</h2>
            <p> Diga-nos suas dúvidas e <br>em breve responderemos :)</p>
          </div>
          <div class="faq-form">
            <form>
              <input type="text" placeholder="Seu Nome">
              <input type="text" placeholder="Seu E-mail">
              <textarea placeholder="Sua Dúvida"></textarea>
              <button type="submit"></button>
            </form>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
    </div> -->
    <?php get_footer();?>