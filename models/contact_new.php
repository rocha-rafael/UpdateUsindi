<?php
$msg_error = "";
$msg_success = "";
$field_notice = array();

$stylesheets[] = array("file" => DOCBASE."js/plugins/isotope/css/layout.css", "media" => "all");



if(isset($_POST['send'])){

    $captcha = strtoupper($_POST['captcha']);
    require(SYSBASE."includes/securimage/securimage.php");
    $img = new Securimage();
    $valid = $img->check($captcha);

    if($valid === false) $field_notice['captcha'] = $texts['INVALID_CAPTCHA_CODE'];

    $nome = html_entity_decode($_POST['nome'], ENT_QUOTES, "UTF-8");
    $endereco = html_entity_decode($_POST['endereco'], ENT_QUOTES, "UTF-8");
    $telefone = html_entity_decode($_POST['telefone'], ENT_QUOTES, "UTF-8");
    $email = $_POST['email'];
    $msg = html_entity_decode($_POST['msg'], ENT_QUOTES, "UTF-8");
    $titulo = html_entity_decode($_POST['titulo'], ENT_QUOTES, "UTF-8");

    if($nome == "") $field_notice['nome'] = <p>"Campo obrigatório"</p>
    if($msg == "") $field_notice['msg'] = <p>"Campo obrigatório"</p>
    if($titulo == "") $field_notice['titulo'] = <p>"Campo obrigatório"</p>

    if($email == "" || !preg_match("/^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$/i", $email)) $field_notice['email'] = $texts['INVALID_EMAIL'];

    if(count($field_notice) == 0){

        $data = array();
        $data['id'] = "";
        $data['nome'] = $nome;
        $data['endereco'] = $endereco;
        $data['telefone'] = $telefone;
        $data['email'] = $email;
        $data['titulo'] = $titulo;
        $data['msg'] = $msg;
        $data['add_date'] = time();
        $data['edit_date'] = null;

        $result_message = db_prepareInsert($db, "pm_message", $data);
        $result_message->execute();

        $mailContent = "<b>nome:</b> ".$nome."<br> \n\n";
        if($endereco != "") $mailContent .= "<b>endereco:</b> ".$endereco."<br> \n\n";
        if($telefone != "") $mailContent .= "<b>telefone:</b> ".$telefone."<br> \n\n";
        $mailContent .= "<b>E-mail:</b> ".$email."<br> \n\n";
        $mailContent .= "<b>Message:</b><br>".$msg." \n\n";

        if(!sendMail(EMAIL, OWNER, $titulo, $mailContent, $email, $nome))
            $msg_error .= $texts['MAIL_DELIVERY_FAILURE'];
        else
            $msg_success .= $texts['MAIL_DELIVERY_SUCCESS'];
    }else
        $msg_error .= $texts['FORM_ERRORS'];

}else{
    $nome = "";
    $endereco = "";
    $telefone = "";
    $email = "";
    $titulo = "";
    $msg = "";
}
require(SYSBASE."templates/".TEMPLATE."/common/header.php"); ?>
<style type="text/css">

      #contato {  position: fixed; left: 60%; bottom: 10%;}

  </style>

<!-- SCRIPT CARREGAR MAPA HOME -->
    <script>
        /* Google Map Market Settings */

        var mapMarkers = [
            {
                "id": "1",
                "title": "USINDI",
                "endereco": "Avenida Presidente Get&uilde;lio Vargas, 4353 Tubar&atilde;o - SC",
                "custompinimage": "<?php echo DOCBASE."templates/".TEMPLATE."/images/marker.png"; ?>"
            }
        ]
    </script>
    <script type="text/javascript">
        $(function() {
            var offset = $("#contato").offset();
            var topPadding = 15;
            $(window).scroll(function() {
                if ($(window).scrollTop() > offset.top) {
                    $("#contato").stop().animate({
                        marginTop: $(window).scrollTop() - offset.top + topPadding
                    });
                } else {
                    $("#contato").stop().animate({
                        marginTop: 0
                    });
                };
            });
        });
    </script>


    <!-- INICIO PAGINA CONTATO -->
    <div class="contato">
    <!-- INICIO TOPO PAGINA CONTATOS -->
        <div class="fundocontato">
            <div class="container">
                <h1 class="main-title__primary"><?php echo $texts['PAGINA_CONTATO']; ?></h1>
                <h3 class="main-title__secondary"><?php echo $texts['NOME_CONTATO']; ?></h3>
            </div>
        </div>
    </div>
    <!-- FIM TOPO PAGINA CONTATOS -->

    <div class="breadcrumbs margin-bottom-0">
        <div class="container">
            <span>
                <a class="home" href="<?php echo DOCBASE.LANG_ALIAS; ?>" title="<?php echo $homepage['title']; ?>"><?php echo $homepage['nome']; ?></a>
            </span>
            <span>
                <span><?php echo $texts['PAGINA_CONTATO']; ?></span>
            </span>
        </div>
        <!-- MAPA USINDI -->
        <div class="map margin-bottom-60">     

        </div>
        
            <div class="values2 margin-bottom-40">

                <div class="container">

                    <div class="col-sm-8 col-sm-offset-2">

                </div>
            </div>
        </div>

        <!-- FIM MAPA USINDI -->

        <div class="container">
            <div class="row margin-bottom-30">
              <section class="clearfix hidden-xs">

        <div class="col-sm-3.5 hentry" id="contato">

            <div class="widget_black-studio-tinymce">
                <div class="featured-widget">
                    <h3 class="widget-title">
                        <span class="widget-title__inline">CONTATOS</span>
                    </h3>
                    <p>
                        <strong>USINDI | Montagens e Manutenção EIRELI</strong><br>
                        Avenida Presidente Get&ucute;lio Vargas, <br>
                        4074 – Bairro Revoredo, Tubarão – SC.
                    </p>
                    <p>
                      Fone/Fax: +55 (48) 3622-1866<br>
                      CEP: 88704-715<br><br>
                      Recursos Humanos:
                        <a href="mailto:rh@usindi.com.br">rh@usindi.com.br</a>
                      <br>Contato comercial:
                        <a href="mailto:comercial@usindi.com.br">comercial@usindi.com.br</a>
                    </p>
                </div>
            </div>
        </div>
      </section>

                <div class="col-sm-9">

                    <h3 class="widget-title margin-top-0">
                        FORMULARIO DE CONTATO USINDI
                    </h3>

                    <p>
                        Entre em contato conosco através dos canais disponibilizados a seguir ou nos envie uma mensagem utilizando o formulário abaixo.
                    </p>

                    <form data-toggle="validator" method="post" action="<?php echo DOCBASE.$page['alias']; ?>" role="form">
                    <div style="display:none"><input type="text" nome="maximus" value=""></div>
                    <input type="hidden" nome="thetitulo" value="CargoPress: Contact Request">

                    <div class="row">
                    <div class="col-xs-12 col-md-4">
                        <div class="form-group">
                                <input type="text" nome="nome" value="<?php echo htmlentities($nome, ENT_QUOTES, "UTF-8"); ?>" placeholder="<?php echo $texts['LASTnome']." ".$texts['FIRSTnome']; ?> *" required>
                            <div class="field-notice" rel="nome"></div>
                        </div>
                    </div>
                    </div>

                    <div class="row">
                      <div class="col-xs-12 col-md-4">
                        <div class="form-group">
                                <input type="text" nome="email" value="<?php echo $email; ?>" placeholder="<?php echo $texts['EMAIL']; ?> *" required>
                            <div class="field-notice" rel="email"></div>
                        </div>
                      </div>

                      <div class="col-xs-12 col-md-4">
                      <div class="form-group" >
                              <input type="text" nome="telefone" value="<?php echo htmlentities($telefone, ENT_QUOTES, "UTF-8"); ?>" placeholder="<?php echo $texts['telefone']; ?>">
                          <div class="field-notice" rel="telefone"></div>
                      </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-xs-12 col-md-8">
                          <div class="form-group">
                                  <textarea  nome="endereco" placeholder="<?php echo $texts['endereco'].", ".$texts['POSTCODE'].", ".$texts['CITY']; ?>"><?php echo htmlentities($endereco, ENT_QUOTES, "UTF-8"); ?></textarea>
                              <div class="field-notice" rel="endereco"></div>
                          </div>
                      </div>
                    <div class="col-xs-12 col-md-8">
                        <div class="form-group">
                                <input type="text" class="form-control" nome="titulo" value="<?php echo htmlentities($titulo, ENT_QUOTES, "UTF-8"); ?>" placeholder="<?php echo $texts['titulo']; ?> *" required>
                            </div>
                            <div class="field-notice" rel="titulo"></div>
                        </div>

                        <div class="col-xs-12 col-md-8">

                        <div class="form-group">
                                <textarea class="form-control" nome="msg" placeholder="<?php echo $texts['MESSAGE']; ?> *" rows="4" required><?php echo htmlentities($msg, ENT_QUOTES, "UTF-8"); ?></textarea>
                            </div>
                            <div class="field-notice" rel="msg"></div>
                            <div class="col-xs-12 col-md-8">

                            <div class="form-group form-inline">
                                    <input type="text"  nome="captcha" id="captcha" value="" placeholder="<?php echo $texts['COPY_CODE']; ?> *" required>
                                <img id="captcha_image" alt="" src="<?php echo DOCBASE; ?>includes/securimage/securimage_show.php?sid=<?php echo md5(uniqid(time())); ?>" style="vertical-align:middle;">
                                <a href="#" onclick="document.getElementById('captcha_image').src = '<?php echo DOCBASE; ?>includes/securimage/securimage_show.php?sid=' + Math.random(); return false">
                                    <i class="fa fa-refresh"></i>
                                </a>
                                <div class="field-notice" rel="captcha"></div>
                            </div>
                            <div class="form-group row">
                                <span class="col-sm-12"><button type="submit" class="btn btn-primary" nome="send"><i class="fa fa-send"></i> <?php echo $texts['SEND']; ?></button> <i> * <?php echo $texts['REQUIRED_FIELD']; ?></i></span>
                            </div>

                        </div>
                        </div>
                        </div>
                        </div>

                    </div>
                </form>

                </div>
            </div>
        </div>
        <!-- fim PAGINA CONTATO -->
			