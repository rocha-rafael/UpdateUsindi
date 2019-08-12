<?php
$stylesheets[] = array("file" => DOCBASE."js/plugins/isotope/css/layout.css", "media" => "all");

require(SYSBASE."templates/".TEMPLATE."/common/header.php"); ?>


<div class="breadcrumbs">
<div class="container">

<span typeof="v:Breadcrumb"><a class="home" href="<?php echo DOCBASE.LANG_ALIAS; ?>" title="<?php echo $homepage['title']; ?>"><?php echo $homepage['name']; ?></a></span>
<span typeof="v:Breadcrumb"><span property="v:title">404</span></span> </div>
</div>


<div class="error-404">
<div class="container">
<img src="<?php echo DOCBASE; ?>templates/<?php echo TEMPLATE; ?>/images/404.png" alt="404 Picture" class="push-down-30">
<div class="error-404__content">
<h2 class="alternative-heading--center">PARECE QUE ALGO DEU ERRADO!</h2>
<p class="error-404__text">
A página que você estava procurando não está aqui. <br> Ir para o <b><a href="/">INICIO </a></b> ou tentar procurar: </p>
<div class="widget_search">
<form role="search" method="get" class="search-form" action="/">
<label>
<span class="screen-reader-text">Search for:</span>
<input type="search" class="search-field" placeholder="Search ..." value="" name="s">
</label>
<button type="submit" class="search-submit"><i class="fa  fa-lg  fa-search"></i></button>
</form> </div>
</div>
</div>
</div>
