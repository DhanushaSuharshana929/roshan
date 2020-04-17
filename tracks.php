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
                                <h2 class="small highlight">Tracks</h2>
                            </div>
                            <div class="col-md-4 text-center text-md-right">
                                <ol class="breadcrumb greylinks">
                                    <li> <a href="index.php">
                                            Home
                                        </a> </li>
                                    <li> <a href="#">Media</a> </li>
                                    <li class="active">Tracks</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </section>


                <section id="latest-album" class="ds ms page_latest_album parallax section_padding_top_100 section_padding_bottom_100 columns_margin_bottom_30 columns_padding_25">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <h2 class="section_header with_line">Latest Album</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5 col-sm-7">
                                <div class="vertical-item slide-media opened-media">
                                    <div class="item-media-wrap"> <img src="images/albums/02.jpg" alt="">
                                        <div class="item-media back-media"> <img src="images/albums/cd.png" alt=""> </div>
                                        <div class="item-media with_frame_image"> <img src="img/album.png" alt=""/>


                                        </div>
                                    </div>
                                    <div class="item-content topmargin_35">
                                        <h3 class="entry-title"> <a href="#">Supem Suwandak Aran</a> </h3>
                                        <p> <span class="grey">Released:</span>  19/07/2012 <br> <span class="grey">Label:</span> I am the Best <br> <span class="grey">Format:</span> MP3 download, CD <br> 
                                        <div class="big-icons topmargin_25">
                                            <a href="#" class="social-icon border-icon rounded-icon socicon-apple"></a> 
                                            <a href="#" class="social-icon border-icon rounded-icon socicon-play"></a> 
                                            <a href="#" class="social-icon border-icon rounded-icon socicon-amazon"></a> 
                                            <a href="#" class="social-icon border-icon rounded-icon socicon-spotify"></a>										<a href="#" class="social-icon border-icon rounded-icon socicon-soundcloud"></a> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7 col-sm-12">
                                <article>
                                    <div class="entry-content">
                                        <div class="cue-playlist-container">
                                            <div class="cue-playlist cue-theme-default">
                                                <ol class="cue-tracks"></ol>
                                            </div>
                                            <script type="application/json" class="cue-playlist-data">
                                                {
                                                "embed_link": "",
                                                "permalink": "",
                                                "skin": "",
                                                "thumbnail": "images/albums/background.jpg",
                                                "tracks": [
                                                {
                                                "artist": "Roshan Fernando",
                                                "artworkId": 0,
                                                "artworkUrl": "#0",
                                                "audioId": 1,
                                                "audioUrl": "https://roshan.synotec.lk/files/mp3/1.mp3",
                                                "format": "mp3",
                                                "length": "4:04",
                                                "title": "Husma Dhige",
                                                "order": 0,
                                                "mp3": "https://roshan.synotec.lk/files/mp3/1.mp3",
                                                "meta":
                                                {
                                                "artist": "Roshan Fernando",
                                                "length_formatted": "4:04"
                                                },
                                                "src": "https://roshan.synotec.lk/files/mp3/1.mp3",
                                                "thumb":
                                                {
                                                "src": "img/songs/1.png"
                                                }
                                                },
                                                {
                                                "artist": "Roshan Fernando",
                                                "artworkId": 0,
                                                "artworkUrl": "#0",
                                                "audioId": 2,
                                                "audioUrl": "https://roshan.synotec.lk/files/mp3/2.mp3",
                                                "format": "mp3",
                                                "length": "4:48",
                                                "title": " Supem Suwandak Aran",
                                                "order": 0,
                                                "mp3": "https://roshan.synotec.lk/files/mp3/2.mp3",
                                                "meta":
                                                {
                                                "artist": "Roshan Fernando",
                                                "length_formatted": "4:48"
                                                },
                                                "src": "https://roshan.synotec.lk/files/mp3/2.mp3",
                                                "thumb":
                                                {
                                                "src": "img/songs/2.png"
                                                }
                                                },
                                                {
                                                "artist": "Roshan Fernando",
                                                "artworkId": 0,
                                                "artworkUrl": "#0",
                                                "audioId": 3,
                                                "audioUrl": "https://roshan.synotec.lk/files/mp3/3.mp3",
                                                "format": "mp3",
                                                "length": "3:16",
                                                "title": "Hitha Hiri Wattana",
                                                "order": 0,
                                                "mp3": "https://roshan.synotec.lk/files/mp3/3.mp3",
                                                "meta":
                                                {
                                                "artist": "Roshan Fernando",
                                                "length_formatted": "3:16"
                                                },
                                                "src": "https://roshan.synotec.lk/files/mp3/3.mp3",
                                                "thumb":
                                                {
                                                "src": "img/songs/3.png"
                                                }
                                                },
                                                {
                                                "artist": "Roshan Fernando",
                                                "artworkId": 0,
                                                "artworkUrl": "#0",
                                                "audioId": 4,
                                                "audioUrl": "https://roshan.synotec.lk/files/mp3/4.mp3",
                                                "format": "mp3",
                                                "length": "3:58",
                                                "title": "Perada Handawa ",
                                                "order": 0,
                                                "mp3": "https://roshan.synotec.lk/files/mp3/4.mp3",
                                                "meta":
                                                {
                                                "artist": "Roshan Fernando",
                                                "length_formatted": "3:58"
                                                },
                                                "src": "https://roshan.synotec.lk/files/mp3/4.mp3",
                                                "thumb":
                                                {
                                                "src": "img/songs/6.png"
                                                }
                                                },
                                                {
                                                "artist": "Roshan Fernando",
                                                "artworkId": 0,
                                                "artworkUrl": "#0",
                                                "audioId": 5,
                                                "audioUrl": "https://roshan.synotec.lk/files/mp3/5.mp3",
                                                "format": "mp3",
                                                "length": "3:23",
                                                "title": "Sihina Siththarawi ",
                                                "order": 0,
                                                "mp3": "https://roshan.synotec.lk/files/mp3/5.mp3",
                                                "meta":
                                                {
                                                "artist": "Roshan Fernando",
                                                "length_formatted": "3:23"
                                                },
                                                "src": "https://roshan.synotec.lk/files/mp3/5.mp3",
                                                "thumb":
                                                {
                                                "src": "img/songs/4.png"
                                                }
                                                },
                                                {
                                                "artist": "Roshan Fernando",
                                                "artworkId": 0,
                                                "artworkUrl": "#0",
                                                "audioId": 6,
                                                "audioUrl": "https://roshan.synotec.lk/files/mp3/6.mp3",
                                                "format": "mp3",
                                                "length": "4:01",
                                                "title": " Wasantha Kaleta",
                                                "order": 0,
                                                "mp3": "https://roshan.synotec.lk/files/mp3/6.mp3",
                                                "meta":
                                                {
                                                "artist": "Roshan Fernando",
                                                "length_formatted": "4:01"
                                                },
                                                "src": "https://roshan.synotec.lk/files/mp3/6.mp3",
                                                "thumb":
                                                {
                                                "src": "img/songs/8.png"
                                                }
                                                },
                                                {
                                                "artist": "Roshan Fernando",
                                                "artworkId": 0,
                                                "artworkUrl": "#0",
                                                "audioId": 7,
                                                "audioUrl": "https://roshan.synotec.lk/files/mp3/7.mp3",
                                                "format": "mp3",
                                                "length": "3:42",
                                                "title": "Methuwak Dura",
                                                "order": 0,
                                                "mp3": "https://roshan.synotec.lk/files/mp3/7.mp3",
                                                "meta":
                                                {
                                                "artist": "Roshan Fernando",
                                                "length_formatted": "3:42"
                                                },
                                                "src": "https://roshan.synotec.lk/files/mp3/7.mp3",
                                                "thumb":
                                                {
                                                "src": "img/songs/7.png"
                                                }
                                                }]
                                                }
                                            </script>
                                        </div>
                                    </div>
                                </article>
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