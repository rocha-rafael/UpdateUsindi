<?php
/* ==============================================
 * CSS AND JAVASCRIPT USED IN THIS MODEL
 * ==============================================
 */
$stylesheets[] = array("file" => DOCBASE."js/plugins/royalslider/royalslider.css", "media" => "all");
$stylesheets[] = array("file" => DOCBASE."js/plugins/royalslider/skins/minimal-white/rs-minimal-white.css", "media" => "all");
$javascripts[] = DOCBASE."js/plugins/royalslider/jquery.royalslider.min.js";

$stylesheets[] = array("file" => DOCBASE."js/plugins/isotope/css/layout.css", "media" => "all");




$javascripts[] = DOCBASE."js/plugins/isotope/jquery.isotope.min.js";
$javascripts[] = DOCBASE."js/plugins/isotope/jquery.isotope.sloppy-masonry.min.js";



require(SYSBASE."templates/".TEMPLATE."/common/header.php");

$slide_id = 0;
$result_slide_file = $db->prepare("SELECT * FROM pm_slide_file WHERE id_item = :slide_id AND checked = 1 AND lang = ".DEFAULT_LANG." AND type = 'image' AND file != '' ORDER BY rank LIMIT 1");
$result_slide_file->bindParam("slide_id", $slide_id);

$result_slide = $db->query("SELECT * FROM pm_slide WHERE id_page = ".$page_id." AND checked = 1 AND lang = ".LANG_ID." ORDER BY rank", PDO::FETCH_ASSOC);
if($result_slide !== false){
	$nb_slides = $db->last_row_count();
	if($nb_slides > 0){ ?>

			<div class="royalSlider heroSlider rsMinW sliderContainer fullWidth clearfix ">

					<?php
					foreach($result_slide as $i => $row){
							$slide_id = $row['id'];
							$slide_legend = $row['legend'];
							$url_video = $row['url'];
							$id_page = $row['id_page'];

							$result_slide_file->execute();

							if($result_slide_file !== false && $db->last_row_count() == 1){
									$row = $result_slide_file->fetch();

									$file_id = $row['id'];
									$filename = $row['file'];
									$label = $row['label'];

									$realpath = SYSBASE."medias/slide/big/".$file_id."/".$filename;
									$thumbpath = DOCBASE."medias/slide/small/".$file_id."/".$filename;
									$zoompath = DOCBASE."medias/slide/big/".$file_id."/".$filename;

									if(is_file($realpath)){ ?>

											<div class="rsContent">
												<div class="video-texture active_texture" style="opacity: 1;">  </div>
													<img class="rsImg" src="<?php echo $zoompath; ?>" alt=""<?php if($url_video != "") echo " data-rsVideo=\"".$url_video."\""; ?>>
													<?php
													if($slide_legend != ""){ ?>
														<div class="container">
																<div class="jumbotron-content">
																		<div class="jumbotron-content__title">

																		<h1><a href="#"><?php echo $slide_legend; ?></a></h1>

																		</div>
																</div>
															</div>
															<?php
													} ?>
											</div>
											<?php
									}
							}
					} ?>
			</div>
			</div>
		<?php
	}
} ?>
<script>
        /* Google Map Market Settings */

        var mapMarkers = [
            {
                "id": "1",
                "title": "USINDI",
                "address": "Avenida Presidente Getúlio Vargas, 4353 Tubarão - SC",
                "custompinimage": "<?php echo DOCBASE."templates/".TEMPLATE."/images/marker.png"; ?>"
            }
        ]
    </script>

<!-- COMEÇO SERVIÇOS -->
    <div class="container" role="main">
        <div class="row jumbotron-overlap first">
            <div class="col-sm-3">
                <a href="<?php echo $texts['TEXTE_FERROVIÁRIOS']; ?>">
									<img alt="Ferroviários" class="post-image" sizes="(min-width: 781px) 360px, calc(100vw - 30px)" srcset="<?php echo DOCBASE; ?>templates/<?php echo TEMPLATE; ?>/images/servicos/ferroviarios.png 360w, " src="<?php echo DOCBASE; ?>templates/<?php echo TEMPLATE; ?>/images/servicos/ferroviarios.png">
                </a>

                <h5 class="page-box__title"><a href="<?php echo $texts['TEXTE_FERROVIÁRIOS']; ?>"><?php echo $texts['FERROVIÁRIOS']; ?></a></h5>

                <p><?php echo $texts['TEXTO_FERROVIARIOS']; ?></p>

                <p>
                    <a class="read-more" href="<?php echo $texts['TEXTE_FERROVIÁRIOS']; ?>"><?php echo $texts['READMORE']; ?></a>
                </p>

            </div>

            <div class="col-sm-3">

                <a href="<?php echo $texts['TEXTE_FUNDICAO']; ?>">
                    <img alt="Fundição" class="post-image" sizes="(min-width: 781px) 360px, calc(100vw - 30px)" srcset="<?php echo DOCBASE; ?>templates/<?php echo TEMPLATE; ?>/images/servicos/fundicao.png 360w," src="<?php echo DOCBASE; ?>templates/<?php echo TEMPLATE; ?>/images/servicos/fundicao.png">
                </a>

                <h5 class="page-box__title"><a href="<?php echo $texts['TEXTE_FUNDICAO']; ?>"><?php echo $texts['FUNDICAO']; ?></a></h5>

                <p><?php echo $texts['TEXTO_FUNDICAO']; ?></p>

                <p>
                    <a class="read-more" href="<?php echo $texts['TEXTE_FUNDICAO']; ?>"><?php echo $texts['READMORE']; ?></a>
                </p>

            </div>

            <div class="col-sm-3">

                <a href="<?php echo $texts['TEXTE_GALVANIZACAO']; ?>">
                    <img alt="Galvanização" class="post-image" sizes="(min-width: 781px) 360px, calc(100vw - 30px)" srcset="<?php echo DOCBASE; ?>templates/<?php echo TEMPLATE; ?>/images/servicos/galvanizacao.png 360w," src="<?php echo DOCBASE; ?>templates/<?php echo TEMPLATE; ?>/images/servicos/galvanizacao.png">
                </a>

                <h5 class="page-box__title"><a href="<?php echo $texts['TEXTE_GALVANIZACAO']; ?>"><?php echo $texts['GALVANIZACAO']; ?></a></h5>

                <p><?php echo $texts['TEXTO_GALVANIZACAO']; ?></p>

                <p>
                    <a class="read-more" href="<?php echo $texts['TEXTE_GALVANIZACAO']; ?>"><?php echo $texts['READMORE']; ?></a>
                </p>

            </div>

            <div class="col-sm-3">

                <a href="<?php echo $texts['TEXTE_ELETROFERRAGENS']; ?>">
                    <img alt="Eletroferragens" class="post-image" sizes="(min-width: 781px) 360px, calc(100vw - 30px)" srcset="<?php echo DOCBASE; ?>templates/<?php echo TEMPLATE; ?>/images/servicos/eletroferragens.png 360w," src="<?php echo DOCBASE; ?>templates/<?php echo TEMPLATE; ?>/images/servicos/eletroferragens.png">
                </a>

                <h5 class="page-box__title"><a href="<?php echo $texts['TEXTE_ELETROFERRAGENS']; ?>"><?php echo $texts['ELETROFERRAGENS']; ?></a></h5>

                <p><?php echo $texts['TEXTO_ELETROFERRAGENS']; ?></p>

                <p>
                    <a class="read-more" href="<?php echo $texts['TEXTE_ELETROFERRAGENS']; ?>"><?php echo $texts['READMORE']; ?></a>
                </p>

            </div>
        </div>
    </div>
<!-- FIM SERVIÇOS -->

<!-- INICIO BEM VINDOS -->
    <div class="values margin-bottom-40">

        <div class="container">

            <div class="col-sm-8 col-sm-offset-2">

                <h3><?php echo $texts['BEM_VINDOS']; ?></h3>
                <p class="text-center">
                    <!-- <span><?php echo $texts['NOME_EMPRESA']; ?></span> -->
                    USINDI MONTAGENS E MANUTEN&Ccedil;&Atilde;O LTDA
                <!-- </p>
                <hr class="hr-quote">
                <p class="text-center">

		<?php echo $texts['TEXTO_BEM_VINDOS']; ?> 
                </p>-->

                <p>
                <hr class="hr-quote">
                <p class="text-center">
                A USINDI, empresa especializada em manuten&ccedil;&atilde;o, produ&ccedil;&atilde;o mec&acirc;nica, caldeiraria e usinagem
                de alta tecnologia, foi certificada no Sistema de Gest&atilde;o da Qualidade - ISO 9001:2008, em
                julho de 2010. Essa conquista evidencia o compromisso da empresa em atender o mercado com
                produtos de qualidade e pre&ccedil;os adequados ao cliente.
                </p>
		<br>
                <p class="text-center">
                    <img class="img-responsive" alt="Logo" src="<?php echo DOCBASE; ?>templates/<?php echo TEMPLATE; ?>/images/logo.png">
                </p>

            </div>
        </div>
    </div>
<!-- FIM BEM VINDOS -->

<!-- COMEÇO BARRA CONTATO -->
    <div class="cta">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="call-to-action">

                        <div class="call-to-action__button">
                            <!-- <a target="_self" href="<?php echo $texts['PAGINA_CONTATO_LINK']; ?>" class="btn btn-secondary"><?php echo $texts['ENTRE_CONTATO']; ?></a> -->
                            <a target="_self" href="http://usindi.com.br/pt/contato" class="btn btn-secondary"><?php echo $texts['ENTRE_CONTATO']; ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- FIM BARRA CONTATO -->

<!-- COMEÇO ULTIMAS NOTICIAS -->
    <div class="news">
        <div class="container">
					<div class="row margin-bottom-30">
					            <?php
					            $result_article = $db->query("SELECT * FROM pm_article WHERE (id_page = ".$page_id." OR home = 1) AND checked = 1 AND (publish_date IS NULL || publish_date <= ".time().") AND (unpublish_date IS NULL || unpublish_date > ".time().") AND lang = ".LANG_ID." ORDER BY rank");
					            if($result_article !== false){
					                $nb_articles = $db->last_row_count();

					                if($nb_articles > 0){ ?>
					                    <div class="">
					                        <?php
					                        $article_id = 0;
					                        $result_article_file = $db->prepare("SELECT * FROM pm_article_file WHERE id_item = :article_id AND checked = 1 AND lang = ".DEFAULT_LANG." AND type = 'image' AND file != '' ORDER BY rank LIMIT 1");
					                        $result_article_file->bindParam(":article_id",$article_id);
					                        foreach($result_article as $i => $row){
					                            $article_id = $row['id'];
					                            $article_title = $row['title'];
					                            $article_alias = $row['alias'];
					                            $article_text = strtrunc(strip_tags($row['text']),170);
					                            $article_tags = $row['tags'];
					                            $article_page = $row['id_page'];

					                            if($article_tags != "") $article_tags = " tag".str_replace(","," tag",$article_tags);

					                            if(isset($pages[$article_page])){

					                                $article_alias = DOCBASE.$pages[$article_page]['alias']."/".text_format($article_alias); ?>

					                                <article class="article-<?php echo $article_id; ?> col-sm-4 margin-bottom-30<?php echo $article_tags; ?>">
					                                    <div class="isotopeInner">
					                                        <a itemprop="url" href="<?php echo $article_alias; ?>" class="moreLink">
					                                            <?php
					                                            if($result_article_file->execute() !== false && $db->last_row_count() == 1){
					                                                $row = $result_article_file->fetch(PDO::FETCH_ASSOC);

					                                                $file_id = $row['id'];
					                                                $filename = $row['file'];
					                                                $label = $row['label'];

					                                                $realpath = SYSBASE."medias/article/small/".$file_id."/".$filename;
					                                                $thumbpath = DOCBASE."medias/article/small/".$file_id."/".$filename;
					                                                $zoompath = DOCBASE."medias/article/big/".$file_id."/".$filename;

					                                                if(is_file($realpath)){ ?>
																														<div class="">
																														<a class="thumb" role="button" <a href="<?php echo $article_alias; ?>" alt="<?php echo $label; ?>"> <img class="img-responsive" src="<?php echo $thumbpath; ?>" alt="<?php echo $label; ?>"/> </a>

																														<div class="latest-news__date">
																														<img alt="Logo" src="<?php echo DOCBASE; ?>templates/<?php echo TEMPLATE; ?>/images/us.png">
																														</div>
																														</div>

					                                                    <?php
					                                                }
					                                            } ?>

					                                            <div class="latest-news__content">
																													<h4 ><?php echo $article_title; ?></h4>
																													<div class="" >
					                                                <p>
					                                                    <?php echo $article_text; ?>
					                                                </p>
																													</div>

																													<a href="<?php echo $article_alias; ?>" class="btn btn-primary"  role="button"> <?php echo $texts['READMORE']; ?></a>

					                                            </div>
					                                        </a>
					                                    </div>
					                                </article>

					                                <?php
					                            }
					                        } ?>
					                    </div>
					                    <?php
					                }
					            } ?>
					        </div>


        </div>
    </div>
    <!-- FIM ULTIMAS NOTICIAS -->


		<!-- INICIO SOBRE NOS / FOTOS EMPRESA -->
<div class="container">
  <div class="row margin-bottom-60">
      <div class="col-sm-6">

          <h3 class="widget-title big lined">
              <span><?php echo $texts['SOBRE_NOS']; ?></span>
          </h3>
          <p><?php echo $texts['CONTEUDO_EMPRESA']; ?></p>

          <p><?php echo $texts['CONTEUDO_EMPRESA_1']; ?></p>

          <p>
              <a href="<?php echo $texts['TEXTE_ABOUT']; ?>" class="read-more"><?php echo $texts['READMORE']; ?></a>
          </p>
      </div>
<!-- COMEÇO COLUNA FOTOS SOBRE NOS-->
<div class="topo">

  <div class="col-sm-6">
      <div class="widget_black-studio-tinymce">
        <div class="gallery gallery-columns-3 gallery-size-medium">
					<h3 class="widget-title lined big">

          </h3>
            <figure class="gallery-item">
							<a href="<?php echo DOCBASE; ?>templates/<?php echo TEMPLATE; ?>/images/empresa/grande/7.jpg">
									<img alt="about" src="<?php echo DOCBASE; ?>templates/<?php echo TEMPLATE; ?>/images/empresa/pequena/7.jpg">
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
							<a href="<?php echo DOCBASE; ?>templates/<?php echo TEMPLATE; ?>/images/empresa/grande/14.jpg">
									<img alt="about" src="<?php echo DOCBASE; ?>templates/<?php echo TEMPLATE; ?>/images/empresa/pequena/14.jpg">
							</a>
            </figure>
            <figure class="gallery-item">
							<a href="<?php echo DOCBASE; ?>templates/<?php echo TEMPLATE; ?>/images/empresa/grande/6.jpg">
									<img alt="about" src="<?php echo DOCBASE; ?>templates/<?php echo TEMPLATE; ?>/images/empresa/pequena/6.jpg">
							</a>
            </figure>
            <figure class="gallery-item">
							<a href="<?php echo DOCBASE; ?>templates/<?php echo TEMPLATE; ?>/images/empresa/grande/4.jpg">
									<img alt="about" src="<?php echo DOCBASE; ?>templates/<?php echo TEMPLATE; ?>/images/empresa/pequena/4.jpg">
							</a>
            </figure>

        </div>
      </div>
    </div>

	</div>
<!-- FIM COLUNA FOTOS SOBRE NOS-->
  </div>
</div>
<!-- FIM SOBRE NOS / FOTOS EMPRESA -->
<div class="values2 margin-bottom-40">

        <div class="container">

            <div class="col-sm-8 col-sm-offset-2">
            <!--iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1753.7035501232672!2d-48.990521065270144!3d-28.467284138638135!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x177f538e69fc65bf!2sUSINDI+-+Montagens+e+Manuten%C3%A7%C3%A3o+LTDA!5e0!3m2!1spt-BR!2sbr!4v1555329612537!5m2!1spt-BR!2sbr" width="2048" height="400" frameborder="0" style="border:0" allowfullscreen></iframe-->


            </div>
        </div>
    </div>
