<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">

    <title>Servi&ccedil;os | USINDI Montagens e Manuten&ccedil;&atilde;o LTDA</title>

    <meta name="description" content="">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="/templates/default/images/favicon.png">

    <link rel="stylesheet" href="/common/bootstrap/css/bootstrap.min.css">
    <link href="//fonts.googleapis.com/css?family=Roboto%3A400%2C700%7CSource+Sans+Pro%3A700%2C900&amp;subset=latin" rel="stylesheet">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:300,400,700">
  <link rel="stylesheet" href="/js/plugins/isotope/css/layout.css" media="all">
    <link rel="stylesheet" href="/js/plugins/isotope/css/magnific-popup.css" media="all">
    <link rel="stylesheet" href="/js/plugins/isotope/css/style-switcher.css" media="all">
    <link rel="stylesheet" href="/js/plugins/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.5/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="/common/js/plugins/magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="/common/css/shortcodes.css">
    <link rel="stylesheet" href="/templates/default/css/layout.css">
    <link rel="stylesheet" href="/templates/default/css/colors.css" id="colors">
    <link rel="stylesheet" href="/templates/default/css/custom.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

    <script type="text/javascript" src="http://gc.kis.v2.scr.kaspersky-labs.com/FD9A4008-AD0A-DD48-B012-76174E27104A/main.js" charset="UTF-8"></script><script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.5/js/bootstrap-select.min.js"></script>
    <script src="/common/js/modernizr-2.6.1.min.js"></script>

    <script>
        Modernizr.load({
            load : [
                '/common/bootstrap/js/bootstrap.min.js',
                '/js/plugins/respond/respond.min.js',
                '//code.jquery.com/ui/1.11.4/jquery-ui.js',
                '/js/plugins/easing/jquery.easing.1.3.min.js',
                '/common/js/plugins/magnific-popup/jquery.magnific-popup.min.js',
                //Javascripts required by the current model
                '/js/plugins/isotope/jquery.isotope.min.js',
'/js/plugins/isotope/jquery.isotope.sloppy-masonry.min.js',

                '//cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/2.1.0/jquery.imagesloaded.min.js',
			        	'/js/plugins/imagefill/js/jquery-imagefill.js',
                '/js/plugins/toucheeffect/toucheffects.js',
            ],
            complete : function(){
                Modernizr.load('/common/js/custom.js');
                Modernizr.load('/js/custom.js');
            }
        });

        $(function(){
                    });

        /* ==============================================
         * COLOCAR ANALITICS
         * ==============================================
         */
         var _gaq = _gaq || [];

    </script>
</head>
<body >

<!-- COMEÇO MENU -->
<div class="top">
  <div class="container">
    <div class="top__tagline">
<!--seleciona linguagem do site -->
    <div class="dropdown pull-right">
          <button class="btn-default dropdown-toggle" type="button" id="lang-btn" data-toggle="dropdown">
          <img src="/medias/lang/big/7/brasil-65.png" alt="Português"> Português <span class="caret"></span>
          </button>
        <ul class="dropdown-menu" role="menu" aria-labelledby="lang-btn" id="lang-menu">
                <li><a href="/en"><img src="/medias/lang/big/5/estadosunidos65.png" alt="Inglês"> Inglês</a></li>
                <li><a href="/es"><img src="/medias/lang/big/6/espanha-65.png" alt="Espanhol"> Espanhol</a></li>
                <li><a href="/pt"><img src="/medias/lang/big/7/brasil-65.png" alt="Português"> Português</a></li>
                </ul>
    </div>
<!--fim seleciona linguagem do site -->
    </div>
    <nav class="top__menu">
        <ul class="top-navigation js-dropdown">
            <li>
                <div id="searchWrapper" class="pull-right hidden-xs">
                                    <form method="post" action="/pt/search" role="form" class="form-inline">
                      <input type="text" class="form-control" name="global-search" placeholder="Pesquisar">
                      <input type="hidden" name="csrf_token" value="19463666215bae0b3e7cc574.72096059">
                      <button type="submit" class="" name="send"><i class="fa fa-search"></i></button>
                  </form>
                </div>
              <!--REDES SOCIAIS-->
              <li><a target="_blank" href="https://www.facebook.com/usindi.brasil" <i class="fa fa-facebook"></i></a></li>
              <li><a target="_blank" href="https://www.linkedin.com/company/usindi-brasil/" <i class="fa fa-linkedin"></i></a></li>
              <li><a target="_blank" href="https://www.youtube.com/channel/UC1qVyc8IfCPFAHGcty8mEFw?view_as=subscriber" <i class="fa fa-youtube"></i></a></li>
              <li><a href="/admin"><i class="fa fa-sign-in"></i></a></li>
              <li></li>
            </li>
        </ul>
    </nav>
  </div>
</div>

<!-- COMEÇO MENU TOPO -->
<div class="header__container">
  <div class="container">
    <header class="header">
      <div class="header__logo">
      <a  href="/pt/" title="Home"><img class="img-responsive" src="/templates/default/images/logo.png" alt="USINDI | Montagens e Manuten&ccedil;&atilde;o LTDA"></a>

        <button data-target="#usindi-navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
          <span class="navbar-toggle__text">MENU</span>

            <span class="navbar-toggle__icon-bar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </span>
        </button>
      </div>

<!-- MENU-->
<div class="header__navigation">
    <nav class="collapse navbar-collapse" id="usindi-navbar-collapse">
        <ul class="main-navigation js-main-nav js-dropdown ">
            
                                    <li class="current-menu-item">
                                                                                    <a class="firstLevel "  href="/pt/" title="Home"><i class="fa fa-building-o"></i>Home</a>
                                                                                </li>
                                    
                                    <li class="current-menu-item">
                                                                                    <a class="dropdown-toggle disabled firstLevel" href="/pt/empresa" title="Empresa">Empresa</a>
                                                                                </li>
                                    
                                    <li class="current-menu-item">
                                                                                    <a class="dropdown-toggle disabled firstLevel hasSubMenu active" href="/pt/servicos" title="Serviços">Serviços</a>
                                                                        <span class="dropdown-btn visible-xs"></span>
                            <ul class="sub-menu">
                                                                    <li>
                                                                                <a class="" href="/pt/todos-servicos" title="Todos Serviços">Todos Serviços</a>
                                                                            </li>
                                                                        <li>
                                                                                <a class="" href="/pt/ferroviarios" title="Ferroviários">Ferroviários</a>
                                                                            </li>
                                                                        <li>
                                                                                <a class="" href="/pt/fundicao" title="Fundição">Fundição</a>
                                                                            </li>
                                                                        <li>
                                                                                <a class="" href="/pt/galvanizacao" title="Galvanização">Galvanização</a>
                                                                            </li>
                                                                        <li>
                                                                                <a class="" href="/pt/eletro-ferragens" title=" Eletro ferragens"> Eletro ferragens</a>
                                                                            </li>
                                                                </ul>
                                                                </li>
                                    
                                    <li class="current-menu-item">
                                                                                    <a class="dropdown-toggle disabled firstLevel" href="/pt/clientes" title="Clientes">Clientes</a>
                                                                                </li>
                                    
                                    <li class="current-menu-item">
                                                                                    <a class="dropdown-toggle disabled firstLevel" href="/pt/noticias" title="Notícias">Notícias</a>
                                                                                </li>
                                    
                                    <li class="current-menu-item">
                                                                                    <a class="dropdown-toggle disabled firstLevel" href="/pt/contato" title="Contato">Contato</a>
                                                                                </li>
                                            </ul>
    </nav>
</div>
<!--MENU FINAL-->


<!--TELEFONE E EMAIL TOPO-->
<div class="header__widgets">
  <section class="clearfix hidden-xs">
  <div class="widget-icon-box">
    <div class="icon-box">
        <i class="fa fa-headphones"></i>
        <h4 class="icon-box__title">Fone/Fax</h4>
        <span class="icon-box__subtitle">+55 48 3622-1866</span>
    </div>
  </div>
</section>
<section class="clearfix hidden-xs">

<div class="widget-icon-box">
    <div class="icon-box">
        <i class="fa fa-envelope-o"></i>
        <h4 class="icon-box__title">Email: </h4>
        <span class="icon-box__subtitle">comercial@usindi.com.br</span>
    </div>
</div>
</section>



<section class="clearfix hidden-xs">
<!--linguagem do site -->
      <button class="btn btn-secondary" type="button" id="lang-btn" data-toggle="dropdown">
      <img src="/medias/lang/big/7/brasil-65.png" alt="Português"> Português      </button>
    <!--fim linguagem do site -->
</section>
<section class="">
<li> <a target="_self" class="btn btn-primary" <a href="http://catalogo.usindi.com.br/"><i class="fa-newspaper-o"></i> Catálogo</a></li>
</section>
</div>

<!--REDES SOCIAIS-->
<div class="header__navigation-widgets">
    <a target="_blank" href="https://www.facebook.com/usindi.brasil" class="social-icons__link"><i class="fa fa-facebook"></i></a>
    <a target="_blank" href="https://www.linkedin.com/company/usindi-brasil/" class="social-icons__link"><i class="fa fa-linkedin"> </i></a>
    <a target="_blank" href="https://www.youtube.com/channel/UC1qVyc8IfCPFAHGcty8mEFw?view_as=subscriber" class="social-icons__link"><i class="fa fa-youtube"></i></a>
</div>

    </header>
  </div>
</div>
<!-- FIM MENU -->

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
				<h1 class="main-title__primary">Serviços</h1>
				<!-- h3 class="main-title__secondary">Usindi  Montagem e Manutenção Industrial</h3 -->
                                <p><b> USINDI - Montagens e Manuten&ccedil;&atilde;o LTDA </b></p>
			</div>
		</div><!-- /.main-title -->
		</div>


		<!-- BREADCRUMBS -->
		<div class="breadcrumbs">
			<div class="container">
				<span>
					<a class="home" href="/pt/" title="Home">Home</a>
				</span>
				<span>
					<span>Serviços</span>
				</span>
			</div>
		</div><!-- /.breadcrumbs -->

		<div class="container">
      <main class="col-xs-12 col-md-9 col-md-push-3">
			<div class="row margin-bottom-35">


				<div class="col-sm-12">
          <h2>Prestação de Serviços</h2>

					<!-- TEXTO ANTIGO E COM ERROS
                    <p>Temos a solução completa em termos de serviços técnicos de Montagens e Manutenção Industriais de Pequeno/Médio/Grande Porte.</p>

					<p>Nossa equipe de engenheiros e técnicos com experiência comprovada de mais de 20 Anos em Projetos de Montagem e Manutenção Industrial de Médio e Grande Porte dentro do território Nacional e Internacional, está preparada e habilitada para atender às demandas da Indústria Nacional e Internacional.</p>

					<p>Estamos preparados para atender a todas as demandas de Projetos Industriais de médio e grande porte, desde a sua concepção, execução e manutenção dentro do mais alto nível de qualidade e atendimento ao cronograma de execução.</p>

					<p>Nosso portfólio de Obras executadas dentro do território Nacional em mais de 20 Anos conta com uma gama muito grande de obras, dentre elas citamos: Contratos com Grupo ENGIE Brasil Energia S.A., Contratos com o Grupo Votorantim, Projeto de Construção da Ponte Anita Garibaldi –Laguna – SC. Seja qual for sua necessidade a USINDI está preparada para atendê-lo e buscarmos juntos a melhor solução para seu produto ou projeto.</p>
                    -->

                    <p>Temos a solu&ccedil;&atilde;o completa em termos de servi&ccedil;os t&eacute;cnicos de Montagens e Manuten&ccedil;&atilde;o Industriais de Pequeno/M&eacute;dio/Grande Porte.
                     Nossa equipe de engenheiros e t&eacute;cnicos com experi&ecirc;ncia comprovada de mais de 20 anos est&aacute; preparada para atender a todas as 
                     demandas, desde a sua concep&ccedil;&atilde;o, execu&ccedil;&atilde;o e manuten&ccedil;&atilde;o dentro do mais alto n&iacute;vel de qualidade e atendimento ao cronograma de 
                     execu&ccedil;&atilde;o.</p>

                    <p>Nosso portf&oacute;lio de obras executadas est&atilde;o os servi&ccedil;os de revis&atilde;o de caldeira, montagem e fabrica&ccedil;&atilde;o de estruturas met&aacute;licas, 
                    manuten&ccedil;&atilde;o industrial e dentre elas citamos: Contratos com Grupo ENGIE Brasil Energia S.A., Contratos com o Grupo Votorantim, 
                    Projeto de Constru&ccedil;&atilde;o da Ponte Anita Garibaldi – Laguna – SC.</p>

                    <p>Seja qual for sua necessidade a USINDI est&aacute; preparada para atend&ecirc;-lo 
                    e buscarmos juntos a melhor solu&ccedil;&atilde;o para seu produto ou projeto.</p>

				</div><!-- /.col -->
        </main>

        <section class="clearfix hidden-xs">
            <div class="col-xs-12 col-md-3 col-md-pull-9" id="servicos">
                <div class="sidebar widget_nav_menu">
                    <ul class="menu" id="menu-services-menu">
                      <li>
                      <a href="todos-servicos">Todos Serviços</a>
                      </li>
                      <li>
                      <a href="http://usindi.com.br/pt/ferroviarios">Ferroviários</a>
                      </li>
                      <li>
                      <a href="http://usindi.com.br/pt/fundicao">Fundição</a></a>
                      </li>
                      <li>
                      <a href="http://usindi.com.br/pt/galvanizacao">Galvanização</a>
                      </li>
                      <li>
                      <a href="http://usindi.com.br/pt/eletro-ferragens">Eletro Ferragens</a>
                      </li>
                    </ul>
                </div>
            </div>
        </section>


        <!-- COMEÇO COLUNA FOTOS SOBRE NOS-->
        <div class="topo">

          <div class="col-sm-12">
              <div class="widget_black-studio-tinymce">

                <div class="gallery gallery-columns-4 gallery-size-medium">
                    <figure class="gallery-item">
                        <a href="/templates/default/images/empresa/grande/17.jpg">
                          <img alt="about" src="/templates/default/images/empresa/pequena/17.jpg">
                        </a>
                    </figure>
                    <figure class="gallery-item">
                        <a href="/templates/default/images/empresa/grande/16.jpg">
                          <img alt="about" src="/templates/default/images/empresa/pequena/16.jpg">
                        </a>
                    </figure>
                    <figure class="gallery-item">
                        <a href="/templates/default/images/empresa/grande/13.jpg">
                          <img alt="about" src="/templates/default/images/empresa/pequena/13.jpg">
                        </a>
                    </figure>
                    <figure class="gallery-item">
                        <a href="/templates/default/images/empresa/grande/10.jpg">
                          <img alt="about" src="/templates/default/images/empresa/pequena/10.jpg">
                        </a>
                    </figure>


                </div>
              </div>
            </div>
          </div>

        <!-- FIM COLUNA FOTOS SOBRE NOS-->

			</div><!-- /.row -->


		</div><!-- /.container -->

<footer>
<div class="footer-content">
  <div class="footersair">
  <div class="container">
  <div class="row">
  				<div class="col-md-12">
  					<div class="footer-logo float-left">
  						<img alt="logo-footer" src="/templates/default/images/logo-branca.png" class="logo">
  					</div>
  					<p style="margin-bottom: 20px;">A USINDI, empresa especializada em manutenção, produção mecânica, caldeiraria e usinagem de alta tecnologia, foi certificada no Sistema de Gestão da Qualidade – ISO 9001:2008, em julho de 2010. Essa conquista evidencia o compromisso da empresa em atender o mercado com produtos de qualidade e preços adequados ao cliente.  					</p>
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

            <div class="widget-footer"><div id="widget-6" class="widget"><div class="widget-title">Contato</div><div class="widget-content"><div style="background-image: url('http://www.usindi.com.br/images/world-map.png'); background-position: 50% 50%; background-repeat: no-repeat">
<ul class="list-large list-icons">
	<li><strong>Endereço:</strong> Avenida Presidente Getúlio Vargas, <br />
	4074 – Bairro Revoredo, Tubarão – SC.</li>
	<li><strong>Fone/Fax:</strong> +55 (48) 3622-1866<br />
	<strong>CEP:</strong> 88704-715</li>
	<li><strong>Email Comercial:</strong> <a href="mailto:comercial@usindi.com.br">comercial@usindi.com.br</a></li>
	<li><strong>Recursos Humanos: </strong><a href="mailto:rh@usindi.com.br">rh@usindi.com.br</a></li>
</ul>
</div>
</div></div><div id="widget-3" class="widget"><div class="widget-title">Ultimas Notícias</div><div class="widget-content"><ul class="nostyle">
                    
                <li>
                    <a href="/pt/noticias/campanha-doacao-sangue" title="Campanha - Doação de Sangue - Notícias" class="img-container small pull-left tips">
                        <img src="/medias/article/small/47/sem-titulo-1.png">
                    </a>
                </li>
                                
                <li>
                    <a href="/pt/noticias/programa-jovem-aprendiz-usindi" title="Programa Jovem Aprendiz USINDI - Notícias" class="img-container small pull-left tips">
                        <img src="/medias/article/small/48/jovem-aprendiz.png">
                    </a>
                </li>
                                
                <li>
                    <a href="/pt/noticias/campanha-do-agasalho" title="Campanha do agasalho 2018 - Notícias" class="img-container small pull-left tips">
                        <img src="/medias/article/small/39/campanha-do-agasalho-1.jpg">
                    </a>
                </li>
                                
                <li>
                    <a href="/pt/noticias/comportamento-motivacional" title="Comportamento Motivacional - Notícias" class="img-container small pull-left tips">
                        <img src="/medias/article/small/37/de-o-seu-melhor.png">
                    </a>
                </li>
                                
                <li>
                    <a href="/pt/noticias/brigada-de-incendio" title="Treinamento - Brigada de Incêndio - Notícias" class="img-container small pull-left tips">
                        <img src="/medias/article/small/34/27ddd9a6-52c7-4a0e-a25d-f3bfa2dd4ff0.png">
                    </a>
                </li>
                                
                <li>
                    <a href="/pt/noticias/premio-cpfl-mais-valor" title="Prêmio CPFL Mais Valor 2018 – Fornecedores de Materiais - Notícias" class="img-container small pull-left tips">
                        <img src="/medias/article/small/26/ficado.png">
                    </a>
                </li>
                </ul>
</div></div><div id="widget-7" class="widget"><div class="widget-title"></div><div class="widget-content"><p style="text-align: center;"><font color="#000000" face="Arial"><span style="font-size: 13.3333px; background-color: rgb(221, 221, 221);"></font></p>

<p style="text-align: center;"><span style="color:#FFFFFF;"></span><big></span></big></p>

<div class="fb-page" data-adapt-container-width="false" data-height="100" data-hide-cover="false" data-href="https://www.facebook.com/usindi.brasil" data-show-facepile="false" data-small-header="false" data-tabs="timeline,events,messages">
<blockquote cite="https://www.facebook.com/usindi.brasil" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/usindi.brasil" target="_blank">USINDI - Montagens e Manutenção LTDA</a></blockquote>
</div>
</div></div></div>
            </div>
        </div>
    </section>
    <div id="footerRights">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>
                        &copy; 2018                         Todos os direitos reservados                    </p>
                </div>
                <div class="col-md-6">
                    <p class="text-right">

<a target="_blank" href="https://www.facebook.com/usindi.brasil/" <i="" class="fa fa-facebook"></a>
<a target="_blank" href="https://www.linkedin.com/company/usindi-brasil/" <i="" class="fa fa-linkedin"></a>
<a target="_blank" href="https://www.youtube.com/channel/UC1qVyc8IfCPFAHGcty8mEFw?view_as=subscriber" <i="" class="fa fa-youtube"></a>
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

<script src="/js/plugins/js/bootstrap/carousel.js"></script>
<script src="/js/plugins/js/bootstrap/transition.js"></script>
<script src="/js/plugins/js/bootstrap/button.js"></script>
<script src="/js/plugins/js/bootstrap/collapse.js"></script>
<script src="/js/plugins/js/bootstrap/validator.js"></script>
<script src="/js/plugins/js/underscore.js"></script>

<script src="/js/plugins/js/NumberCounter.js"></script>
<script src="/js/plugins/js/jquery.magnific-popup.min.js"></script>
<script src="/js/plugins/js/custom.js"></script>





</body>
</html>
