<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">

    <title><?php echo $title_tag; ?></title>

    <meta name="description" content="<?php echo $page['descr']; ?>">
    <meta name="robots" content="<?php if($page['robots'] != "") echo $page['robots']; else echo "index, follow"; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="<?php echo DOCBASE; ?>templates/<?php echo TEMPLATE; ?>/images/favicon.png">

    <link rel="stylesheet" href="<?php echo DOCBASE; ?>common/bootstrap/css/bootstrap.min.css">
    <?php
    if(RTL_DIR){ ?>
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.2.0-rc2/css/bootstrap-rtl.min.css">
        <?php
    } ?>
<link href="//fonts.googleapis.com/css?family=Roboto%3A400%2C700%7CSource+Sans+Pro%3A700%2C900&amp;subset=latin" rel="stylesheet">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:300,400,700">
<?php
//CSS required by the current model
if(isset($stylesheets)){
  foreach($stylesheets as $stylesheet){ ?>
  <link rel="stylesheet" href="<?php echo $stylesheet['file']; ?>" media="<?php echo $stylesheet['media']; ?>">
  <?php
}
} ?>
  <link rel="stylesheet" href="<?php echo DOCBASE; ?>js/plugins/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.5/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="<?php echo DOCBASE; ?>common/js/plugins/magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo DOCBASE; ?>common/css/shortcodes.css">
    <link rel="stylesheet" href="<?php echo DOCBASE; ?>templates/<?php echo TEMPLATE; ?>/css/layout.css">
    <link rel="stylesheet" href="<?php echo DOCBASE; ?>templates/<?php echo TEMPLATE; ?>/css/colors.css" id="colors">
    <link rel="stylesheet" href="<?php echo DOCBASE; ?>templates/<?php echo TEMPLATE; ?>/css/custom.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.5/js/bootstrap-select.min.js"></script>
    <script src="<?php echo DOCBASE; ?>common/js/modernizr-2.6.1.min.js"></script>

    <script>
        Modernizr.load({
            load : [
                '<?php echo DOCBASE; ?>common/bootstrap/js/bootstrap.min.js',
                '<?php echo DOCBASE; ?>js/plugins/respond/respond.min.js',
                '//code.jquery.com/ui/1.11.4/jquery-ui.js',
                '<?php echo DOCBASE; ?>js/plugins/easing/jquery.easing.1.3.min.js',
                '<?php echo DOCBASE; ?>common/js/plugins/magnific-popup/jquery.magnific-popup.min.js',
                //Javascripts required by the current model
                <?php if(isset($javascripts)) foreach($javascripts as $javascript) echo "'".$javascript."',\n"; ?>

                '//cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/2.1.0/jquery.imagesloaded.min.js',
			        	'<?php echo DOCBASE; ?>js/plugins/imagefill/js/jquery-imagefill.js',
                '<?php echo DOCBASE; ?>js/plugins/toucheeffect/toucheffects.js',
            ],
            complete : function(){
                Modernizr.load('<?php echo DOCBASE; ?>common/js/custom.js');
                Modernizr.load('<?php echo DOCBASE; ?>js/custom.js');
            }
        });

        $(function(){
            <?php
            if(isset($msg_error) && $msg_error != ""){ ?>
                var msg_error = '<?php echo preg_replace("/(\r\n|\n|\r)/","",nl2br(addslashes($msg_error))); ?>';
                if(msg_error != '') $('.alert-danger').html(msg_error).slideDown();
                <?php
            }
            if(isset($msg_success) && $msg_success != ""){ ?>
                var msg_success = '<?php echo preg_replace("/(\r\n|\n|\r)/","",nl2br(addslashes($msg_success))); ?>';
                if(msg_success != '') $('.alert-success').html(msg_success).slideDown();
                <?php
            }
            if(isset($field_notice) && !empty($field_notice))
                foreach($field_notice as $field => $notice) echo "$('.field-notice[rel=\"".$field."\"]').html('".$notice."').fadeIn('slow').parent().addClass('alert alert-danger');\n"; ?>
        });

        /* ==============================================
         * COLOCAR ANALITICS
         * ==============================================
         */
         var _gaq = _gaq || [];

    </script>
</head>
<body <?php if(RTL_DIR) echo " dir=\"rtl\""; ?>>

<!-- COMEÇO MENU -->
<div class="top">
  <div class="container">
    <div class="top__tagline">
<!--seleciona linguagem do site -->
<?php
if(LANG_ENABLED){
if(count($langs) > 0){ ?>
    <div class="dropdown pull-<?php echo (RTL_DIR) ? "left" : "right"; ?>">
          <button class="btn-default dropdown-toggle" type="button" id="lang-btn" data-toggle="dropdown">
          <img src="<?php echo $langs[LANG_TAG]['file']; ?>" alt="<?php echo $langs[LANG_TAG]['title']; ?>"> <?php echo $langs[LANG_TAG]['title']; ?> <span class="caret"></span>
          </button>
        <ul class="dropdown-menu" role="menu" aria-labelledby="lang-btn" id="lang-menu">
        <?php
        foreach($langs as $row){
        $title_lang = $row['title']; ?>
        <li><a href="<?php echo DOCBASE.$row['tag']; ?>"><img src="<?php echo $row['file']; ?>" alt="<?php echo $title_lang; ?>"> <?php echo $title_lang; ?></a></li>
        <?php
        } ?>
        </ul>
    </div>
<?php
}
} ?>
<!--fim seleciona linguagem do site -->
    </div>
    <nav class="top__menu">
        <ul class="top-navigation js-dropdown">
            <li>
                <div id="searchWrapper" class="pull-<?php echo (RTL_DIR) ? "left" : "right"; ?> hidden-xs">
                  <?php $csrf_token = get_token("search"); ?>
                  <form method="post" action="<?php echo DOCBASE.$sys_pages['search']['alias']; ?>" role="form" class="form-inline">
                      <input type="text" class="form-control" name="global-search" placeholder="<?php echo $texts['SEARCH']; ?>">
                      <input type="hidden" name="csrf_token" value="<?php echo $csrf_token; ?>">
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
      <a  href="<?php echo DOCBASE.LANG_ALIAS; ?>" title="<?php echo $homepage['title']; ?>"><img class="img-responsive" src="<?php echo DOCBASE; ?>templates/<?php echo TEMPLATE; ?>/images/logo.png" alt="<?php echo SITE_TITLE; ?>"></a>

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
            <?php
                        function subMenu($subpages)
                        {
                            global $parents;
                            global $pages; ?>
                            <span class="dropdown-btn visible-xs"></span>
                            <ul class="sub-menu">
                                <?php
                                foreach($subpages as $id_subpage){
                                    $subpage = $pages[$id_subpage]; ?>
                                    <li>
                                        <?php
                                        $nb_subpages = (isset($parents[$id_subpage])) ? count($parents[$id_subpage]) : 0; ?>
                                        <a class="<?php if($nb_subpages > 0) echo " hasSubMenu"; ?>" href="<?php echo DOCBASE.$subpage['alias']; ?>" title="<?php echo $subpage['title']; ?>"><?php echo $subpage['name']; ?></a>
                                        <?php if($nb_subpages > 0) subMenu($parents[$id_subpage]); ?>
                                    </li>
                                    <?php
                                } ?>
                            </ul>
                            <?php
                        }
                        $nb_pages = count($pages);
                        foreach($pages as $page_id_nav => $page_nav){
                            if($page_nav['checked'] == 1){
                                $id_parent = $page_nav['id_parent'];
                                if($page_nav['main'] == 1 && ($id_parent == 0 || $id_parent == $homepage['id'])){ ?>

                                    <li class="current-menu-item">
                                        <?php
                                        if($page_nav['home'] == 1){ ?>
                                            <a class="firstLevel<?php if($ishome) echo " active"; ?> "  href="<?php echo DOCBASE.LANG_ALIAS; ?>" title="<?php echo $page_nav['title']; ?>"><i class="fa fa-building-o"></i><?php echo $page_nav['name']; ?></a>
                                            <?php
                                        }else{
                                            $nb_subpages = (isset($parents[$page_id_nav])) ? count($parents[$page_id_nav]) : 0; ?>
                                            <a class="dropdown-toggle disabled firstLevel<?php if($nb_subpages > 0) echo " hasSubMenu"; if($page_nav['id'] == $page_id) echo " active"; ?>" href="<?php echo DOCBASE.$page_nav['alias']; ?>" title="<?php echo $page_nav['title']; ?>"><?php echo $page_nav['name']; ?></a>
                                            <?php if($nb_subpages > 0) subMenu($parents[$page_id_nav]);
                                        } ?>
                                    </li>
                                    <?php
                                }
                            }
                        } ?>
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
<?php
if(LANG_ENABLED){
  if(count($langs) > 0){ ?>
      <button class="btn btn-secondary" type="button" id="lang-btn" data-toggle="dropdown">
      <img src="<?php echo $langs[LANG_TAG]['file']; ?>" alt="<?php echo $langs[LANG_TAG]['title']; ?>"> <?php echo $langs[LANG_TAG]['title']; ?>
      </button>
    <?php
  }
} ?>
<!--fim linguagem do site -->
</section>
<section class="">
<li> <a target="_self" class="btn btn-primary" <a href="<?php echo $texts['PAGINA_CONTATO_LINK']; ?>"><i class="fa-newspaper-o"></i> <?php echo $texts['PAGINA_CATALOGO']; ?></a></li>
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
