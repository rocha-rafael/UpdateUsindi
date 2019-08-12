<?php
/* ==============================================
 * CSS AND JAVASCRIPT USED IN THIS MODEL
 * ==============================================
 */
$stylesheets[] = array("file" => DOCBASE."js/plugins/isotope/css/layout.css", "media" => "all");
$javascripts[] = DOCBASE."js/plugins/isotope/jquery.isotope.min.js";
$javascripts[] = DOCBASE."js/plugins/isotope/jquery.isotope.sloppy-masonry.min.js";

$stylesheets[] = array("file" => DOCBASE."js/plugins/lazyloader/lazyloader.css", "media" => "all");
$javascripts[] = DOCBASE."js/plugins/lazyloader/lazyloader.js";

$stylesheets[] = array("file" => DOCBASE."js/plugins/star-rating/css/star-rating.min.css", "media" => "all");
$javascripts[] = DOCBASE."js/plugins/star-rating/js/star-rating.min.js";

require(SYSBASE."templates/".TEMPLATE."/common/send_comment.php");

require(SYSBASE."templates/".TEMPLATE."/common/header.php"); ?>


  <div class="noticias">
              <!-- MAIN TITLE -->
              <div class="fundonoticias">
                  <div class="container">
                      <h1 class="main-title__primary"><?php echo $texts['PAGINA_NOTICIAS']; ?></h1>
                      <!-- <h3 class="main-title__secondary"><?php echo $texts['NOME_NOTICIAS']; ?></h3> -->
                      <p>Fique ligado nas novidades da USINDI!</p>
                  </div>
                    </div>
              </div><!-- /.main-title -->

            <!-- BREADCRUMBS -->
            <div class="breadcrumbs">
                <div class="container">
                    <span>
                        <a class="home" href="<?php echo DOCBASE.LANG_ALIAS; ?>" title="<?php echo $homepage['title']; ?>"><?php echo $homepage['name']; ?></a>
                    </span>
                    <span>
                        <span><?php echo $texts['PAGINA_NOTICIAS']; ?></span>
                    </span>
                </div>
            </div><!-- /.breadcrumbs -->



<!--INDEX POST COMEÇO -->
<div class="container">
<div class="row margin-bottom-25">

            <div class="alert alert-success" style="display:none;"></div>
            <div class="alert alert-danger" style="display:none;"></div>

            <div class="row">
                <?php
                $lz_offset = 1;
                $lz_limit = 9;
                $lz_pages = 0;
                $num_records = 0;
                $result = $db->query("SELECT count(*) FROM pm_article WHERE id_page = ".$page_id." AND checked = 1 AND (publish_date IS NULL || publish_date <= ".time().") AND (unpublish_date IS NULL || unpublish_date > ".time().") AND lang = ".LANG_ID);
                if($result !== false){
                    $num_records = $result->fetchColumn(0);
                    $lz_pages = ceil($num_records/$lz_limit);
                }
                if($num_records > 0){

                    $result_tag = $db->query("SELECT * FROM pm_tag WHERE pages REGEXP '(^|,)".$page_id."(,|$)' AND checked = 1 AND lang = ".LANG_ID." ORDER BY rank");
                    if($result_tag !== false){
                        $nb_tags = $db->last_row_count();

                        if($nb_tags > 0){ ?>

                            <?php
                        }
                    } ?>

                    <div class="isotopeWrapper clearfix isotope lazy-wrapper" data-loader="<?php echo DOCBASE."templates/".TEMPLATE."/common/get_articles.php"; ?>" data-mode="click" data-limit="<?php echo $lz_limit; ?>" data-pages="<?php echo $lz_pages; ?>" data-is_isotope="true" data-variables="page_id=<?php echo $page_id; ?>&page_alias=<?php echo $page['alias']; ?>">
                        <?php include(SYSBASE."templates/".TEMPLATE."/common/get_articles.php"); ?>

                    </div>
                    <?php
                } ?>
            </div>

            <?php
            $nb_comments = 0;
            $item_type = "page";
            $item_id = $page_id;
            $allow_comment = $page['comment'];
            $allow_rating = $page['rating'];
            if($allow_comment == 1){
                $result_comment = $db->query("SELECT * FROM pm_comment WHERE id_item = ".$item_id." AND item_type = '".$item_type."' AND checked = 1 ORDER BY add_date DESC");
                if($result_comment !== false)
                    $nb_comments = $db->last_row_count();
            }
            include(SYSBASE."templates/".TEMPLATE."/common/comments.php"); ?>
        </div>
    </div>
</section>
