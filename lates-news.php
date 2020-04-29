<?php
include './class/include.php';
$id = '';

$id = $_GET['id'];


$NEWS = new Activities($id);
?>
<!DOCTYPE html>
<html class="no-js">
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Best Sri Lankan Band | Best Band Artist | Roshan Fernando | Lates News</title>
        <meta name="keywords" content="music artist, flashback crew, singer, popular artists, presenter, flashback studio ">
        <meta name="description" content="The band “Flashback”was established under the able guidance of Mr. Donald Fernando, the father of Roshan Fernando in 1991 in Katumeriya and he is also known as the founder of “Flashback”">
        <meta name="author" content="Synotec Holdings">
        <meta name="viewport" content="width=device-width, initial-scale=1">    
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/animations.css">
        <link rel="stylesheet" href="css/fonts.css">
        <link rel="stylesheet" href="css/cue.css">
        <link rel="stylesheet" href="css/main.css" class="color-switcher-link">
        <link rel="stylesheet" href="css/shop.css" class="color-switcher-link">
        <link rel="stylesheet" href="css/mediaelementplayer-legacy.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>

    </head>

    <body>



        <div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal"> <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">
                    <i class="rt-icon2-cross2"></i>
                </span>
            </button>
            <div class="widget widget_search">
                <form method="get" class="searchform search-form form-inline" action="http://webdesign-finder.com/html/singer/">
                    <div class="form-group bottommargin_0"> <input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input"> </div> <button type="submit" class="theme_button no_bg_button">Search</button> </form>
            </div>
        </div>
        <div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
            <div class="fw-messages-wrap ls with_padding">

            </div>
        </div>

        <div id="canvas">
            <div id="box_wrapper">


                <?php
                include './header-1.php';
                ?>
                <section class="page_breadcrumbs ls section_padding_top_25 section_padding_bottom_25 table_section table_section_md">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 text-center text-md-left">
                                <h2 class="small highlight"><?php echo $NEWS->title; ?></h2>
                            </div>
                            <div class="col-md-4 text-center text-md-right">
                                <ol class="breadcrumb greylinks">
                                    <li> <a href="index.php">
                                            Home
                                        </a> </li>


                                    <li class="active">Lates News</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="about" class="ds ms page_about parallax section_padding_top_130 section_padding_bottom_75 table_section table_section_md columns_margin_bottom_30">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-7 col-md-8 col-lg-8">
                                <article class="single-post vertical-item content-padding big-padding with_background post rounded overflow_hidden">
                                    <div class="entry-thumbnail item-media"> 
                                        <?php
                                        $NEWS_PHOTOS_OBJ = new ActivitiesPhoto(NULL);
                                        $NEWS_PHOTOS = $NEWS_PHOTOS_OBJ->getActivitiesPhotosById($id);
                                        foreach ($NEWS_PHOTOS as $key => $news_photos) {
                                            if ($key == 0) {
                                                ?>
                                                <img src="upload/activity/gallery/<?php echo $NEWS->image_name ?>" alt=""> 
                                                <?php
                                            }
                                        }
                                        ?>
                                    </div>
                                    <div class="item-content">

                                        <!-- .entry-header -->
                                        <div class="entry-content">
                                            <?php echo $NEWS->description; ?>
                                        </div>
                                        <!-- .entry-content -->
                                    </div>
                                    <!-- .item-content -->
                                </article>

                            </div>
                            <!--eof .col-sm-8 (main content)-->
                            <!-- sidebar -->
                            <aside class="col-sm-5 col-md-4 col-lg-4" style="vertical-align: top;">

                                <div class="widget widget_recent_posts">
                                    <h3 class="widget-title">Recent News</h3>

                                    <ul class="media-list">
                                        <?php
                                        foreach ($NEWS->all() as $news) {
                                            ?>
                                            <li class="media loop-color">
                                                <div class="media-left media-middle"> <img src="upload/activity/<?php echo $news['image_name'] ?>" alt=""> </div>
                                                <div class="media-body media-middle">
                                                    <h4 class="entry-title"> <a href="lates-news.php?id=<?php echo $news['id'];?>"><?php echo $news['title'] ?></a> </h4>
                                                  
                                                </div>
                                            </li>
                                            <?php
                                        }
                                        ?>
                                    </ul>
                                </div>

                            </aside>
                            <!-- eof aside sidebar -->
                        </div>
                    </div>


                </section>

                <?php
                include './footer.php';
                ?>

            </div>

        </div>

        <script src="js/compressed.js"></script>
        <script src="js/main.js"></script>
        <script src="js/mediaelement-and-player.min.js"></script>
        <script src="js/mediaelement-migrate.min.js"></script>
        <script>

            var _cueSettings = {
                "l10n":
                        {
                            "nextTrack": "Next Track",
                            "previousTrack": "Previous Track",
                            "togglePlayer": "Toggle Player",
                            "togglePlaylist": "Toggle Playlist"
                        }
            };

        </script>
        <script src="js/cue.min.js"></script>
        <script src="js/switcher.js"></script>
    </body>



</html>