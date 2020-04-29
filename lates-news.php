<?php
include './class/include.php';

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
                                <h2 class="small highlight">Lates News</h2>
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
                            <div class="col-md-6 text-center">
                                <div class="with_frame_image"> <img src="img/about/about.png" alt="" class="rounded"> </div>
                            </div>

                           <div class="col-md-6">
                                <h2 class="section_header with_line">Lates News</h2>
                                 <div class="item-content">
<!--                                        <div class="owl-carousel topmargin_60"  data-dots="true">-->
                                    <?php
                                    $NEWS = new Activities(NULL);
                                    foreach ($NEWS->all() as $news) {
                                        ?>
                                       

                                            <div class="item-content">
                                                <header class="entry-header">



                                                    <h4 class="entry-title"> <a href="#"><?php echo $news['title'] ?></a> </h4>
                                                </header>
                                                <div class="entry-content">
                                                    <p class="content-3lines-ellipsis "style="text-align: justify"><?php echo $news['short_description'] ?></p> <span class="button_wrap">
                                                       
                                                    </span> </div>
                                            </div>
                                 
                                        <?php
                                    }
                                    ?>
<!--                                </div>-->
<!--                               <p class="fontsize_20 "><?php echo $news['title'] ?></p>
                                <p style="text-align: justify"><?php echo $news['short_description'] ?>
                                </p>-->
                                <div class="content-justify vertical-center content-margins topmargin_25">
                                    <div>
                                        <h3 class="highlight bottommargin_0">Roshan Fenando</h3>
                                        <p class="small-text grey">Music Artist</p>
                                    </div> <img src="images/signature.png" alt=""> </div>
                            </div>
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