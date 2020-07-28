<?php
if($article_alias == "") err404();

$result = $db->query("SELECT * FROM pm_article WHERE id_page = ".$page_id." AND checked = 1 AND (publish_date IS NULL || publish_date <= ".time().") AND (unpublish_date IS NULL || unpublish_date > ".time().") AND lang = ".LANG_ID." AND alias = ".$db->quote($article_alias));
if($result !== false && $db->last_row_count() == 1){

    $article = $result->fetch(PDO::FETCH_ASSOC);

    $article_id = $article['id'];
    $title_tag = $article['title']." - ".$title_tag;
    $page_title = $article['title'];
    $page_subtitle = $article['subtitle'];
    $page_alias = DOCBASE.$pages[$page_id]['alias']."/".text_format($article['alias']);

}else err404();

check_URI($page_alias);

/* ==============================================
 * CSS AND JAVASCRIPT USED IN THIS MODEL
 * ==============================================
 */
$javascripts[] = DOCBASE."js/plugins/owl-carousel/owl.carousel.min.js";
$javascripts[] = DOCBASE."js/plugins/sharrre/jquery.sharrre.min.js";

$stylesheets[] = array("file" => DOCBASE."js/plugins/owl-carousel/owl.carousel.css", "media" => "all");
$stylesheets[] = array("file" => DOCBASE."js/plugins/owl-carousel/owl.theme.css", "media" => "all");
$stylesheets[] = array("file" => DOCBASE."js/plugins/isotope/css/layout.css", "media" => "all");


$stylesheets[] = array("file" => DOCBASE."js/plugins/star-rating/css/star-rating.min.css", "media" => "all");
$javascripts[] = DOCBASE."js/plugins/star-rating/js/star-rating.min.js";

require(SYSBASE."templates/".TEMPLATE."/common/send_comment.php");

require(SYSBASE."templates/".TEMPLATE."/common/header.php"); ?>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.6&appId=1803150593239083";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<div class="noticias">
            <!-- MAIN TITLE -->
            <div class="fundonoticias">
                <div class="container">
                    <h1 class="main-title__primary"><?php echo $texts['PAGINA_NOTICIAS']; ?></h1>
                    <h3 class="main-title__secondary"><?php echo $texts['NOME_NOTICIAS']; ?></h3>
                </div>
                  </div>
            </div><!-- /.main-title -->

<div class="breadcrumbs">
            <div class="container">

                        <?php
                        if($article_id == 0){
                            $page_title = $page['title'];
                            $page_subtitle = $page['subtitle'];
                            $page_name = $page['name']; ?>

                            <?php
                        }else{
                            $page_name = $page_title; ?>

                            <?php
                        }
                        if($page_subtitle != "") echo "<p>".$page_subtitle."</p>"; ?>

                    <div class="col-sm-<?php echo (RTL_DIR) ? 12 : 12; ?> hidden-xs">
                        <div itemprop="breadcrumb" class="">

                            <a href="<?php echo DOCBASE.LANG_ALIAS; ?>" title="<?php echo $homepage['title']; ?>"><?php echo $homepage['name']; ?></a>

                            <?php
                            foreach($breadcrumbs as $id_parent){
                                if(isset($pages[$id_parent])){
                                    $parent = $pages[$id_parent]; ?>
                                    <a href="<?php echo DOCBASE.$parent['alias']; ?>" title="<?php echo $parent['title']; ?>"><?php echo $parent['name']; ?></a>
                                    <?php
                                }
                            }
                            if($article_id > 0){ ?>
                                <a href="<?php echo DOCBASE.$page['alias']; ?>" title="<?php echo $page['title']; ?>"><?php echo $page['name']; ?></a>
                                <?php
                            } ?>

                            <span><?php echo $page_name; ?></span>
                        </div>

                    </div>
            </div>
            </div>


            <div class="container">

			<div class="row margin-bottom-30">

				<div class="col-xs-12 col-md-9">

					<article class="clearfix hentry">

            <div class="col-sm-12">
                    <div class="owl-carousel owlWrapper" data-items="1" data-autoplay="true" data-dots="true" data-nav="false" data-rtl="<?php echo (RTL_DIR) ? "true" : "false"; ?>">
                        <?php
                        $result_article_file = $db->query("SELECT * FROM pm_article_file WHERE id_item = ".$article_id." AND checked = 1 AND lang = ".DEFAULT_LANG." AND type = 'image' AND file != '' ORDER BY rank");
                        if($result_article_file !== false){

                            foreach($result_article_file as $i => $row){

                                $file_id = $row['id'];
                                $filename = $row['file'];
                                $label = $row['label'];

                                $realpath = SYSBASE."medias/article/big/".$file_id."/".$filename;
                                $thumbpath = DOCBASE."medias/article/big/".$file_id."/".$filename;

                                if(is_file($realpath)){ ?>
                                    <img alt="<?php echo $label; ?>" src="<?php echo $thumbpath; ?>" class="img-responsive" style="max-height:600px;"/>
                                    <?php
                                }
                            }
                        } ?>
                    </div>
                </div>
						<div class="meta-data">
							<time class="meta-data__date" datetime="2015-05-06T15:00:06+00:00"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo (!RTL_DIR) ? strftime(DATE_FORMAT, $article['add_date']) : strftime("%F", $article['add_date']); ?></time>
							<span class="meta-data__separator">/</span>
							<span class="meta-data__author"><i class="fa fa-user"></i> <?php echo db_getFieldValue($db, "pm_user", "login", $article['id_user']); ?></span>
							<span class="meta-data__separator">/</span>
							<span class="meta-data__categories">
              <div class="fb-like" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
              </span>
						</div>
						<h2 class="hentry__title"><?php echo $article['title']; ?></h2>
						<div class="hentry__content">
              <?php
                    $nb_comments = 0;
                    $item_type = "article";
                    $item_id = $article_id;
                    $allow_comment = $article['comment'];
                    $allow_rating = $article['rating'];
                    if($allow_comment == 1){
                        $result_comment = $db->query("SELECT * FROM pm_comment WHERE id_item = ".$item_id." AND item_type = '".$item_type."' AND checked = 1 ORDER BY add_date DESC");
                        if($result_comment !== false)
                            $nb_comments = $db->last_row_count();
                    } ?>

                    <?php
                    echo $article['text'];

                    $short_text = strtrunc(strip_tags($article['text']), 100);
                    $site_url = getUrl(); ?>

                    <div class="fb-like" data-url="<?php echo $site_url; ?>" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
						</div>


					</article>
<div class="fb-comments" data-width="100%" data-numposts="5"></div>


				</div><!-- /.col -->

				<div class="col-xs-12 col-md-3">

					<div class="sidebar">
						<div class="widget_search">
							<form action="#" class="search-form" method="get">
								<label>
									<span class="screen-reader-text">Search for:</span>
									<input type="search" name="s" value="" placeholder="Search ..." class="search-field">
								</label>
								<button class="search-submit" type="submit"><i class="fa fa-lg fa-search"></i></button>
							</form>
						</div>
						<div class="widget_recent_entries">
							<div class="fb-page" data-href="https://www.facebook.com/usindi.brasil" data-tabs="timeline,events,messages" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/usindi.brasil" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/usindi.brasil">USINDI - Montagens e Manutenção EIRELI</a></blockquote></div>
						</div>


					</div>

				</div><!-- /.col -->

			</div><!-- /.row -->

		</div>
