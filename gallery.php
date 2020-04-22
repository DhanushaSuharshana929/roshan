<?php
include './class/include.php';
?>
<!DOCTYPE html>

<html class="no-js">




    <head>
        <title>Best Sri Lankan Band | Best Band Artist | Roshan Fernando | Gallery</title>
        <meta charset="utf-8">
        <meta name="keywords" content="music artist, flashback, singer, familly ">
        <meta name="description" content="Roshan Fernando who started his career as a drummer is now the leader of the Flashback crew.">
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
                <!-- template sections -->

                <?php
                include './header-1.php';
                ?>
                <section class="page_breadcrumbs ls section_padding_top_25 section_padding_bottom_25 table_section table_section_md">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 text-center text-md-left">
                                <h2 class="small highlight">Gallery</h2>
                            </div>
                            <div class="col-md-4 text-center text-md-right">
                                <ol class="breadcrumb greylinks">
                                    <li> <a href="index.php">
                                            Home
                                        </a> </li>

                                    <li class="active">Gallery</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="ds ms page_portfolio section_padding_top_150 section_padding_bottom_100 columns_margin_bottom_40">
                    <div class="container">
                        <div class="row">
                            <?php
                            $GALLERY = new AlbumPhoto(NULL);
                            foreach ($GALLERY->all() as $gallery) {
                                ?>

                                <div class="col-md-3 col-sm-4 col-sm-12 ">
                                    <div class="item-media">  <img src="upload/photo-album/gallery/thumb/<?php echo $gallery['image_name'] ?>" alt=""/> 

                                        <div class="media-links"> <a class="abs-link prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="upload/photo-album/gallery/<?php echo $gallery['image_name'] ?>"alt=""/></a> </div>
                                    </div>
                                </div>



                                <?php
                            }
                            ?>

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