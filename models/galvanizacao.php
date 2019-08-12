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
				<h1 class="main-title__primary"><?php echo $texts['GALVANIZACAO']; ?></h1>
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
					<a class="post post-page" href="<?php echo $texts['TEXTE_TODOS_SERVICOS']; ?>" title="Servicos" rel="v:url"><?php echo $texts['PAGINA_SERVICOS']; ?></a>
				</span>
				<span>
					<span><?php echo $texts['GALVANIZACAO']; ?></span>
				</span>
			</div>
		</div><!-- /.breadcrumbs -->
    <div class="container">

    			<div class="row">

            <main class="col-xs-12 col-md-9 col-md-push-3">

					<div class="row margin-bottom-30">

						<div class="col-sm-6">

							<p><?php echo $texts['CONTEUDO_GALVANIZACAO_1']; ?></p>

							<p><?php echo $texts['CONTEUDO_GALVANIZACAO_2']; ?></p>

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
                    <a href="<?php echo DOCBASE; ?>templates/<?php echo TEMPLATE; ?>/images/empresa/grande/3.jpg">
                        <img alt="about" src="<?php echo DOCBASE; ?>templates/<?php echo TEMPLATE; ?>/images/empresa/pequena/3.jpg">
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

            </div>
          </div>
        </div>


					</div><!-- /.row -->

				</main><!-- /.col -->

<section class="clearfix hidden-xs">
    <div class="col-xs-12 col-md-3 col-md-pull-9" id="servicos">
        <div class="sidebar widget_nav_menu">
            <ul class="menu" id="menu-services-menu">
              <li>
              <a href="<?php echo $texts['TEXTE_TODOS_SERVICOS']; ?>"><?php echo $texts['TODOS_SERVICOS']; ?></a>
              </li>
              <li>
              <a href="<?php echo $texts['TEXTE_FERROVIÁRIOS']; ?>"><?php echo $texts['FERROVIÁRIOS']; ?></a>
              </li>
              <li>
              <a href="<?php echo $texts['TEXTE_FUNDICAO']; ?>"><?php echo $texts['FUNDICAO']; ?></a></a>
              </li>
              <li class="current-menu-item">
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
