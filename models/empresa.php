<?php
/* ==============================================
 * CSS AND JAVASCRIPT USED IN THIS MODEL
 * ==============================================
 */
$stylesheets[] = array("file" => DOCBASE."js/plugins/isotope/css/layout.css", "media" => "all");
$stylesheets[] = array("file" => DOCBASE."js/plugins/isotope/css/magnific-popup.css", "media" => "all");
$stylesheets[] = array("file" => DOCBASE."js/plugins/isotope/css/style-switcher.css", "media" => "all");



$javascripts[] = DOCBASE."js/plugins/isotope/jquery.isotope.min.js";
$javascripts[] = DOCBASE."js/plugins/isotope/jquery.isotope.sloppy-masonry.min.js";

require(SYSBASE."templates/".TEMPLATE."/common/header.php");?>

 <!-- MAIN TITLE -->
 <div class="empresa">
		<div class="fundoempresa">
			<div class="container">
				<h1 class="main-title__primary"><?php echo $texts['SOBRE_NOS']; ?></h1>
				<!--h3 class="main-title__secondary"><?php echo $texts['NOME_EMPRESA']; ?></h3 -->
                                <p><b> USINDI - Montagens e Manuten&ccedil;&atilde;o LTDA </b></p>
			</div>
		</div><!-- /.main-title -->
		</div>


		<!-- BREADCRUMBS -->
		<div class="breadcrumbs">
			<div class="container">
				<span>
					<a class="home" href="<?php echo DOCBASE.LANG_ALIAS; ?>" title="<?php echo $homepage['title']; ?>"><?php echo $homepage['name']; ?></a>
				</span>
				<span>
					<span><?php echo $texts['PAGINA_EMPRESA']; ?></span>
				</span>
			</div>
		</div><!-- /.breadcrumbs -->

		<div class="container">
<h2><?php echo $texts['SOBRE_NOS']; ?></h2>
			<div class="row margin-bottom-30">

				<div class="col-sm-6">
                    <!--
                	<p><?php echo $texts['CONTEUDO_EMPRESA']; ?></p>

					<p><?php echo $texts['CONTEUDO_EMPRESA_1']; ?></p>

					<p><?php echo $texts['CONTEUDO_EMPRESA_2']; ?></p>

					<p><?php echo $texts['CONTEUDO_EMPRESA_3']; ?></p>

					<p><?php echo $texts['CONTEUDO_EMPRESA_4']; ?></p>
                    -->

                    <p>Uma empresa com mais de 25 Anos de história nas indústrias de metalurgia, metal mecânica, fundição e prestação de serviços de montagem e manutenção Industrial de Médio e Grande porte em todo território nacional.</p>
                    <p>Com parque industrial estruturado com tecnologias de última geração com mais de 7.000 m2 de área construída. Com 3 Unidades Produtivas: Tubarão –SC. – Pedras Grandes – SC. e Capivari de Baixo – SC. (No Complexo Termelétrico ENGIE Brasil Energia S.A.).</p>
                    <p>Operando com um quadro de 200 Colaboradores Fixos e 150 Colaboradores Variáveis, de acordo com Contratos firmados.</p>
                    <p>Equipe qualificada e preparada para a excelência na qualidade de seus produtos e serviços, tendo como objetivo maior executar nossa MISSÃO: “Produzir e comercializar os produtos e serviços, com a tecnologia adequada e qualidade superior, visando à satisfação do cliente, contribuindo para o desenvolvimento nacional, a conservação e preservação do meio ambiente e o bem-estar social”.</p>
                    <p>Estes atributos fazem da USINDI o parceiro comercial ideal nas áreas: Componentes Ferroviários, Materiais para Eletro Ferragem, Prestação de Serviços de Montagem e Manutenção Industrial, Caldeiraria, Dobra, Solda, Usinagem. Empresa Certificada no Sistema de Gestão da Qualidade – ISO 9001:2008 pela RINA Services S.p.A. - Itália.</p>

          <p class="text-center">
              <img class="img-responsive" alt="Logo" src="<?php echo DOCBASE; ?>templates/<?php echo TEMPLATE; ?>/images/rina.png">
          </p>

				</div><!-- /.col -->

        <div class="col-sm-6">
      <div class="widget_black-studio-tinymce">
        <div class="gallery gallery-columns-3 gallery-size-medium">

					<h3 class="widget-title lined big">

          </h3>
            <figure class="gallery-item">
                <a href="<?php echo DOCBASE; ?>templates/<?php echo TEMPLATE; ?>/images/empresa/grande/1.jpg">
                    <img alt="about" src="<?php echo DOCBASE; ?>templates/<?php echo TEMPLATE; ?>/images/empresa/pequena/1.jpg">
                </a>
            </figure>
            <figure class="gallery-item">
                <a href="<?php echo DOCBASE; ?>templates/<?php echo TEMPLATE; ?>/images/empresa/grande/2.jpg">
                    <img alt="about" src="<?php echo DOCBASE; ?>templates/<?php echo TEMPLATE; ?>/images/empresa/pequena/2.jpg">
                </a>
            </figure>
            <figure class="gallery-item">
                <a href="<?php echo DOCBASE; ?>templates/<?php echo TEMPLATE; ?>/images/empresa/grande/4.jpg">
                    <img alt="about" src="<?php echo DOCBASE; ?>templates/<?php echo TEMPLATE; ?>/images/empresa/pequena/4.jpg">
                </a>
            </figure>
            <figure class="gallery-item">
                <a href="<?php echo DOCBASE; ?>templates/<?php echo TEMPLATE; ?>/images/empresa/grande/5.jpg">
                    <img alt="about" src="<?php echo DOCBASE; ?>templates/<?php echo TEMPLATE; ?>/images/empresa/pequena/5.jpg">
                </a>
            </figure>
            <figure class="gallery-item">
                <a href="<?php echo DOCBASE; ?>templates/<?php echo TEMPLATE; ?>/images/empresa/grande/6.jpg">
                    <img alt="about" src="<?php echo DOCBASE; ?>templates/<?php echo TEMPLATE; ?>/images/empresa/pequena/6.jpg">
                </a>
            </figure>
            <figure class="gallery-item">
                <a href="<?php echo DOCBASE; ?>templates/<?php echo TEMPLATE; ?>/images/empresa/grande/7.jpg">
                    <img alt="about" src="<?php echo DOCBASE; ?>templates/<?php echo TEMPLATE; ?>/images/empresa/pequena/7.jpg">
                </a>
            </figure>
            <figure class="gallery-item">
                <a href="<?php echo DOCBASE; ?>templates/<?php echo TEMPLATE; ?>/images/empresa/grande/8.jpg">
                    <img alt="about" src="<?php echo DOCBASE; ?>templates/<?php echo TEMPLATE; ?>/images/empresa/pequena/8.jpg">
                </a>
            </figure>
            <figure class="gallery-item">
                <a href="<?php echo DOCBASE; ?>templates/<?php echo TEMPLATE; ?>/images/empresa/grande/9.jpg">
                    <img alt="about" src="<?php echo DOCBASE; ?>templates/<?php echo TEMPLATE; ?>/images/empresa/pequena/9.jpg">
                </a>
            </figure>
            <figure class="gallery-item">
                <a href="<?php echo DOCBASE; ?>templates/<?php echo TEMPLATE; ?>/images/empresa/grande/10.jpg">
                    <img alt="about" src="<?php echo DOCBASE; ?>templates/<?php echo TEMPLATE; ?>/images/empresa/pequena/10.jpg">
                </a>
            </figure>
            <figure class="gallery-item">
                <a href="<?php echo DOCBASE; ?>templates/<?php echo TEMPLATE; ?>/images/empresa/grande/11.jpg">
                    <img alt="about" src="<?php echo DOCBASE; ?>templates/<?php echo TEMPLATE; ?>/images/empresa/pequena/11.jpg">
                </a>
            </figure>
            <figure class="gallery-item">
                <a href="<?php echo DOCBASE; ?>templates/<?php echo TEMPLATE; ?>/images/empresa/grande/12.jpg">
                    <img alt="about" src="<?php echo DOCBASE; ?>templates/<?php echo TEMPLATE; ?>/images/empresa/pequena/12.jpg">
                </a>
            </figure>
            <figure class="gallery-item">
                <a href="<?php echo DOCBASE; ?>templates/<?php echo TEMPLATE; ?>/images/empresa/grande/13.jpg">
                    <img alt="about" src="<?php echo DOCBASE; ?>templates/<?php echo TEMPLATE; ?>/images/empresa/pequena/13.jpg">
                </a>
            </figure>
            <figure class="gallery-item">
                <a href="<?php echo DOCBASE; ?>templates/<?php echo TEMPLATE; ?>/images/empresa/grande/14.jpg">
                    <img alt="about" src="<?php echo DOCBASE; ?>templates/<?php echo TEMPLATE; ?>/images/empresa/pequena/14.jpg">
                </a>
            </figure>
            <figure class="gallery-item">
                <a href="<?php echo DOCBASE; ?>templates/<?php echo TEMPLATE; ?>/images/empresa/grande/15.jpg">
                    <img alt="about" src="<?php echo DOCBASE; ?>templates/<?php echo TEMPLATE; ?>/images/empresa/pequena/15.jpg">
                </a>
            </figure>
            <figure class="gallery-item">
                <a href="<?php echo DOCBASE; ?>templates/<?php echo TEMPLATE; ?>/images/empresa/grande/16.jpg">
                    <img alt="about" src="<?php echo DOCBASE; ?>templates/<?php echo TEMPLATE; ?>/images/empresa/pequena/16.jpg">
                </a>
            </figure>
            <figure class="gallery-item">
                <a href="<?php echo DOCBASE; ?>templates/<?php echo TEMPLATE; ?>/images/empresa/grande/17.jpg">
                    <img alt="about" src="<?php echo DOCBASE; ?>templates/<?php echo TEMPLATE; ?>/images/empresa/pequena/17.jpg">
                </a>
            </figure>
            <figure class="gallery-item">
                <a href="<?php echo DOCBASE; ?>templates/<?php echo TEMPLATE; ?>/images/empresa/grande/18.jpg">
                    <img alt="about" src="<?php echo DOCBASE; ?>templates/<?php echo TEMPLATE; ?>/images/empresa/pequena/18.jpg">
                </a>
            </figure>

        </div>
      </div>
    </div>

			</div><!-- /.row -->
		</div><!-- /.container -->
