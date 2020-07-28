<footer>
<div class="footer-content">
  <div class="footersair">
  <div class="container">
  <div class="row">
  				<div class="col-md-12">
  					<div class="footer-logo float-left">
  						<img alt="logo-footer" src="<?php echo DOCBASE; ?>templates/<?php echo TEMPLATE; ?>/images/logo-branca.png" class="logo">
  					</div>
  					<!-- <p style="margin-bottom: 20px;"><?php echo $texts['TEXTO_BEM_VINDOS']; ?>
  					</p> -->
                                        <p class="text-left">
                                            A USINDI, empresa especializada em manuten&ccedil;&atilde;o, produ&ccedil;&atilde;o mec&acirc;nica, caldeiraria e usinagem
                                            de alta tecnologia, certificada no Sistema de Gest&atilde;o da Qualidade - ISO 9001:2015. Essa conquista evidencia o compromisso da empresa em atender o mercado com
                                            produtos de qualidade e pre&ccedil;os adequados ao cliente.
                                        </p>
          </div>

  				</div>
  			</div>
      </div>


        <div class="container">

        <div class="row">

                <div class="col-md-13">
                  </div>
        				</div>
              </div>


    <section id="mainFooter">

        <div class="container" id="footer">
            <div class="row">

            <?php displayWidgets("footer", $page_id); ?>

            </div>
        </div>
    </section>
    <div id="footerRights">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>
                        &copy; <?php echo date("Y"); ?>
                        <?php echo OWNER." ".$texts['ALL_RIGHTS_RESERVED']; ?>
                    </p>
                </div>
                <div class="col-md-6">
                    <p class="text-right">

<a target="_blank" href="https://www.facebook.com/usindi.brasil/" <i="" class="fa fa-facebook"></a>
<a target="_blank" href="https://www.linkedin.com/company/usindi-brasil/" <i="" class="fa fa-linkedin"></a>
<a target="_blank" href="https://www.youtube.com/channel/UC1qVyc8IfCPFAHGcty8mEFw?view_as=subscriber" <i="" class="fa fa-youtube"></a>
                        <?php
                        foreach($pages as $page_id_nav => $page_nav){
                            $id_parent = $page_nav['id_parent'];
                            if($page_nav['footer'] == 1){ ?>
                                <a href="<?php echo DOCBASE.$page_nav['alias']; ?>" title="<?php echo $page_nav['title']; ?>"><?php echo $page_nav['name']; ?></a>
                                &nbsp;&nbsp;
                                <?php
                            }
                        } ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    </div>
</footer>
<a href="#" id="toTop"><i class="fa-angle-up" style="bottom: 30px; color: white;"></i></a>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.6&appId=1803150593239083";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<script src="<?php echo DOCBASE; ?>js/plugins/js/bootstrap/carousel.js"></script>
<script src="<?php echo DOCBASE; ?>js/plugins/js/bootstrap/transition.js"></script>
<script src="<?php echo DOCBASE; ?>js/plugins/js/bootstrap/button.js"></script>
<script src="<?php echo DOCBASE; ?>js/plugins/js/bootstrap/collapse.js"></script>
<script src="<?php echo DOCBASE; ?>js/plugins/js/bootstrap/validator.js"></script>
<script src="<?php echo DOCBASE; ?>js/plugins/js/underscore.js"></script>

<script src="<?php echo DOCBASE; ?>js/plugins/js/NumberCounter.js"></script>
<script src="<?php echo DOCBASE; ?>js/plugins/js/jquery.magnific-popup.min.js"></script>
<script src="<?php echo DOCBASE; ?>js/plugins/js/custom.js"></script>





</body>
</html>
