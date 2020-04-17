<?php
include './class/include.php';
?>
<!DOCTYPE html>

<html class="no-js">
    


  
    <head>
        <title>Singer</title>
        <meta charset="utf-8">
        
        <meta name="description" content="">
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
                                <h2 class="small highlight">Album</h2>
                            </div>
                            <div class="col-md-4 text-center text-md-right">
                                <ol class="breadcrumb greylinks">
                                    <li> <a href="index.php">
                                            Home
                                        </a> </li>
                                    <li> <a href="#">Media</a> </li>
                                    <li class="active">Album</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </section>

                 <section id="events" class="ds ms section_padding_top_100 section_padding_bottom_100">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <h2 class="section_header with_line">Albums</h2>
                                <div class="owl-carousel topmargin_60" data-dots="false" data-nav="true" data-responsive-lg="3">
                                    
                                <?php
                                $ALBUM = new Attraction(NULL);
                                foreach ($ALBUM->all() as $album){
                                   
                                ?>
                                        <div class="vertical-item content-absolute hover-entry-content">
                                        <div class="item-media mutted-media ds">  
                                            <img src="upload/attraction/<?php echo $album['image_name']?>" alt=""/>

                                        </div>
                                        <div class="item-content cs">
                                            <h3 class="entry-title bottommargin_0"> <a href="#"></a> <?php echo $album['title']?></h3>
                                            
                                            <div class="entry-content">
                                                <p> <?php echo $album['short_description']?></p>
                                                <p class="topmargin_20 event_buttons"> <a href="./view_album.php?id=<?php echo $album['id'] ?>" class="theme_button color3 view_button">View More</a> </p>
                                            </div>
                                        </div>
                                             </div>
                                        <?php
                                }
                                ?>
                                   
                             

                                </div>
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