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

  <script type="text/javascript">
      $(function() {
          var offset = $("#servicos").offset();
          var topPadding = 15;
          $(window).scroll(function() {
              if ($(window).scrollTop() > offset.top) {
                  $("#servicos").stop().animate({
                      marginTop: $(window).scrollTop() - offset.top + topPadding
                  });
              } else {
                  $("#servicos").stop().animate({
                      marginTop: 0
                  });
              };
          });
      });
  </script>
 <!-- MAIN TITLE -->
 <div class="empresa">
		<div class="fundoempresa">
			<div class="container">
				<h1 class="main-title__primary"><?php echo $texts['TODOS_SERVICOS']; ?></h1>
				<h3 class="main-title__secondary"><?php echo $texts['NOME_EMPRESA']; ?></h3>
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
					<span><?php echo $texts['TODOS_SERVICOS']; ?></span>
				</span>
			</div>
		</div><!-- /.breadcrumbs -->
    <div class="container">

    			<div class="row">

    				<main class="col-xs-12 col-md-9 col-md-push-3">

    					<div class="row margin-bottom-30">

    						<div class="col-sm-6">

    							<div class="page-box page-box--block">
    								<a href="<?php echo $texts['TEXTE_FERROVIÁRIOS']; ?>" class="page-box__picture">
    									<img alt="Ferroviários" class="wp-post-image" sizes="(min-width: 781px) 360px, calc(100vw - 30px)" srcset="<?php echo DOCBASE; ?>templates/<?php echo TEMPLATE; ?>/images/servicos/ferroviarios.png 360w, " src="<?php echo DOCBASE; ?>templates/<?php echo TEMPLATE; ?>/images/servicos/ferroviarios.png">
    								</a>
    								<div class="page-box__content">
    									<h5 class="page-box__title text-uppercase">
    										<a href="<?php echo $texts['TEXTE_FERROVIÁRIOS']; ?>"><?php echo $texts['FERROVIÁRIOS']; ?></a>
    									</h5>
    									<p><?php echo $texts['TEXTO_FERROVIARIOS']; ?></p>
    									<p>
    										<a class="read-more" href="<?php echo $texts['TEXTE_FERROVIÁRIOS']; ?>"><?php echo $texts['READMORE']; ?></a>
    									</p>
    								</div>
    							</div>

    						</div><!-- /.col -->

    						<div class="col-sm-6">

    							<div class="page-box page-box--block">
    								<a href="<?php echo $texts['TEXTE_FUNDICAO']; ?>" class="page-box__picture">
                      <img alt="Fundição" class="wp-post-image" sizes="(min-width: 781px) 360px, calc(100vw - 30px)" srcset="<?php echo DOCBASE; ?>templates/<?php echo TEMPLATE; ?>/images/servicos/fundicao.png 360w," src="<?php echo DOCBASE; ?>templates/<?php echo TEMPLATE; ?>/images/servicos/fundicao.png">
    								</a>
    								<div class="page-box__content">
    									<h5 class="page-box__title text-uppercase">
    										<a href="<?php echo $texts['TEXTE_FUNDICAO']; ?>"><?php echo $texts['FUNDICAO']; ?></a>
    									</h5>
    									<p><?php echo $texts['TEXTO_FUNDICAO']; ?></p>
    									<p>
    										<a class="read-more" href="<?php echo $texts['TEXTE_FUNDICAO']; ?>"><?php echo $texts['READMORE']; ?></a>
    									</p>
    								</div>
    							</div>

    						</div><!-- /.col -->


    					</div><!-- /.row -->

    					<div class="row margin-bottom-30">
                <div class="col-sm-6">

    							<div class="page-box page-box--block">
    								<a href="<?php echo $texts['TEXTE_GALVANIZACAO']; ?>" class="page-box__picture">
                      <img alt="Galvanização" class="wp-post-image" sizes="(min-width: 781px) 360px, calc(100vw - 30px)" srcset="<?php echo DOCBASE; ?>templates/<?php echo TEMPLATE; ?>/images/servicos/galvanizacao.png 360w," src="<?php echo DOCBASE; ?>templates/<?php echo TEMPLATE; ?>/images/servicos/galvanizacao.png">
    								</a>
    								<div class="page-box__content">
    									<h5 class="page-box__title text-uppercase">
    										<a href="<?php echo $texts['TEXTE_GALVANIZACAO']; ?>"><?php echo $texts['GALVANIZACAO']; ?></a>
    									</h5>
    									<p><?php echo $texts['TEXTO_GALVANIZACAO']; ?></p>
    									<p>
    										<a class="read-more" href="<?php echo $texts['TEXTE_GALVANIZACAO']; ?>"><?php echo $texts['READMORE']; ?></a>
    									</p>
    								</div>
    							</div>

    						</div><!-- /.col -->

    						<div class="col-sm-6">

    							<div class="page-box page-box--block">
    								<a href="<?php echo $texts['TEXTE_ELETROFERRAGENS']; ?>" class="page-box__picture">
                      <img alt="Eletroferragens" class="wp-post-image" sizes="(min-width: 781px) 360px, calc(100vw - 30px)" srcset="<?php echo DOCBASE; ?>templates/<?php echo TEMPLATE; ?>/images/servicos/eletroferragens.png 360w," src="<?php echo DOCBASE; ?>templates/<?php echo TEMPLATE; ?>/images/servicos/eletroferragens.png">
    								</a>
    								<div class="page-box__content">
    									<h5 class="page-box__title text-uppercase">
    										<a href="<?php echo $texts['TEXTE_ELETROFERRAGENS']; ?>"><?php echo $texts['ELETROFERRAGENS']; ?></a>
    									</h5>
    									<p><?php echo $texts['TEXTO_ELETROFERRAGENS']; ?></p>
    									<p>
    										<a class="read-more" href="<?php echo $texts['TEXTE_ELETROFERRAGENS']; ?>"><?php echo $texts['READMORE']; ?></a>
    									</p>
    								</div>
    							</div>

    						</div><!-- /.col -->





    					</div><!-- /.row -->

    				</main><!-- /.col -->

<section class="clearfix hidden-xs">
    <div class="col-xs-12 col-md-3 col-md-pull-9" id="servicos">
        <div class="sidebar widget_nav_menu">
            <ul class="menu" id="menu-services-menu">
              <li class="current-menu-item">
              <a href="<?php echo $texts['TEXTE_TODOS_SERVICOS']; ?>"><?php echo $texts['TODOS_SERVICOS']; ?></a>
              </li>
              <li>
              <a href="<?php echo $texts['TEXTE_FERROVIÁRIOS']; ?>"><?php echo $texts['FERROVIÁRIOS']; ?></a>
              </li>
              <li>
              <a href="<?php echo $texts['TEXTE_FUNDICAO']; ?>"><?php echo $texts['FUNDICAO']; ?></a></a>
              </li>
              <li>
              <a href="<?php echo $texts['TEXTE_GALVANIZACAO']; ?>"><?php echo $texts['GALVANIZACAO']; ?></a>
              </li>
              <li>
              <a href="<?php echo $texts['TEXTE_ELETROFERRAGENS']; ?>"><?php echo $texts['ELETROFERRAGENS']; ?></a>
              </li>
            </ul>
        </div>
    </div>
</section>


    			</div><!-- /.row -->

    		</div><!-- /.container -->
