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
				<h1 class="main-title__primary"><?php echo $texts['CLIENTES']; ?></h1>
				<!-- h3 class="main-title__secondary"><?php echo $texts['NOME_EMPRESA']; ?></h3 -->
                                <p><b> USINDI - Montagens e Manuten&ccedil;&atilde;o EIRELI</b></p>
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
					<span><?php echo $texts['CLIENTES']; ?></span>
				</span>
			</div>
		</div><!-- /.breadcrumbs -->
    <div class="values1 margin-bottom-40">
    <div class="container">

    			<div class="row margin-bottom-60">

    				<div class="col-sm-12">

    					<div class="widget_text">

    						<h3 class="widget-title lined big">
    							<span><?php echo $texts['CLIENTES']; ?></span>
    						</h3>
    						<div class="logo-panel">
    							<div class="row">
                                                                <div class="col-xs-12  col-sm-2">
    									<img alt="Client" src="<?php echo DOCBASE; ?>templates/<?php echo TEMPLATE; ?>/images/clientes/enel.png"></a>
    								</div>
    								<div class="col-xs-12  col-sm-2">
    									<img alt="Client" src="<?php echo DOCBASE; ?>templates/<?php echo TEMPLATE; ?>/images/clientes/ftc.png"></a>
    								</div>
    								<div class="col-xs-12  col-sm-2">
    									<img alt="Client" src="<?php echo DOCBASE; ?>templates/<?php echo TEMPLATE; ?>/images/clientes/rge_sul.png"></a>
    								</div>
                                                                <div class="col-xs-12  col-sm-2">
    									<img alt="Client" src="<?php echo DOCBASE; ?>templates/<?php echo TEMPLATE; ?>/images/clientes/cpflenergia.png"></a>
    								</div>
                                                                <div class="col-xs-12  col-sm-2">
    									<img alt="Client" src="<?php echo DOCBASE; ?>templates/<?php echo TEMPLATE; ?>/images/clientes/cpfl_solucoes.png"></a>
    								</div>
    								<div class="col-xs-12  col-sm-2">
    									<img alt="Client" src="<?php echo DOCBASE; ?>templates/<?php echo TEMPLATE; ?>/images/clientes/cpflpaulista.png"></a>
    								</div>

                                                                <div class="col-xs-12  col-sm-2">
    									<img alt="Client" src="<?php echo DOCBASE; ?>templates/<?php echo TEMPLATE; ?>/images/clientes/cpflsanta.png"></a>
    								</div>

    								<div class="col-xs-12  col-sm-2">
    									<img alt="Client" src="<?php echo DOCBASE; ?>templates/<?php echo TEMPLATE; ?>/images/clientes/cpflpiratininga.png"></a>
    								</div>
                                                                <div class="col-xs-12  col-sm-2">
    									<img alt="Client" src="<?php echo DOCBASE; ?>templates/<?php echo TEMPLATE; ?>/images/clientes/elektro.png"></a>
    								</div>
    								<div class="col-xs-12  col-sm-2">
    									<img alt="Client" src="<?php echo DOCBASE; ?>templates/<?php echo TEMPLATE; ?>/images/clientes/neoenergia.png"></a>
    								</div>
    								<!--div class="col-xs-12  col-sm-2">
    									<img alt="Client" src="<?php echo DOCBASE; ?>templates/<?php echo TEMPLATE; ?>/images/clientes/celpe.png"></a>
    								</div>
    								<div class="col-xs-12  col-sm-2">
    									<img alt="Client" src="<?php echo DOCBASE; ?>templates/<?php echo TEMPLATE; ?>/images/clientes/coelba.png"></a>
    								</div>
    								<div class="col-xs-12  col-sm-2">
    									<img alt="Client" src="<?php echo DOCBASE; ?>templates/<?php echo TEMPLATE; ?>/images/clientes/cosern.png"></a>
    								</div-->
    								<div class="col-xs-12  col-sm-2">
    									<img alt="Client" src="<?php echo DOCBASE; ?>templates/<?php echo TEMPLATE; ?>/images/clientes/celesc.png"></a>
    								</div>
    								<div class="col-xs-12  col-sm-2">
    									<img alt="Client" src="<?php echo DOCBASE; ?>templates/<?php echo TEMPLATE; ?>/images/clientes/cemig.png"></a>
    								</div>
                                                                <div class="col-xs-12  col-sm-2">
    									<img alt="Client" src="<?php echo DOCBASE; ?>templates/<?php echo TEMPLATE; ?>/images/clientes/copel.png"></a>
    								</div>
                                                                <div class="col-xs-12  col-sm-2">
    									<img alt="Client" src="<?php echo DOCBASE; ?>templates/<?php echo TEMPLATE; ?>/images/clientes/edp.png"></a>
    								</div>
                                                                <div class="col-xs-12  col-sm-2">
    									<img alt="Client" src="<?php echo DOCBASE; ?>templates/<?php echo TEMPLATE; ?>/images/clientes/rumoall.png"></a>
    								</div>
                                                                <div class="col-xs-12  col-sm-2">
    									<img alt="Client" src="<?php echo DOCBASE; ?>templates/<?php echo TEMPLATE; ?>/images/clientes/randon.png"></a>
    								</div>
                                                                <div class="col-xs-12  col-sm-2">
    									<img alt="Client" src="<?php echo DOCBASE; ?>templates/<?php echo TEMPLATE; ?>/images/clientes/eneregisa.png"></a>
    								</div>
                                                                <div class="col-xs-12  col-sm-2">
    									<img alt="Client" src="<?php echo DOCBASE; ?>templates/<?php echo TEMPLATE; ?>/images/clientes/engie.png"></a>
    								</div>
                                                                <div class="col-xs-12  col-sm-2">
    									<img alt="Client" src="<?php echo DOCBASE; ?>templates/<?php echo TEMPLATE; ?>/images/clientes/mrs.png"></a>
    								</div>
                                                                <div class="col-xs-12  col-sm-2">
    									<img alt="Client" src="<?php echo DOCBASE; ?>templates/<?php echo TEMPLATE; ?>/images/clientes/usiminas.png"></a>
    								</div>
    							</div><!-- /.row -->
    						</div><!-- /.logo-panel -->

    					</div><!-- /.widget_text -->

    				</div><!-- /.col -->

    			</div><!-- /.row -->

    		</div>
</div>