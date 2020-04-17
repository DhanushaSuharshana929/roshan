
<?php
include './class/include.php';
$BIOGRAPHYINFO = new Page(1);
$BIOGRAPHYDISCRIPTION = new Page(2);
?>

<!DOCTYPE html>

<html class="no-js">


    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Singer</title>
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <![endif]-->	
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
        <link href="contact-form/style.css" rel="stylesheet" type="text/css"/>
    </head>


    <body>



        <!--<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal"> <button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
        <!--        <span aria-hidden="true">-->
        <!--            <i class="rt-icon2-cross2"></i>-->
        <!--        </span>-->
        <!--    </button>-->
        <!--    <div class="widget widget_search">-->
        <!--        <form method="get" class="searchform search-form form-inline" action="http://webdesign-finder.com/html/singer/">-->
        <!--            <div class="form-group bottommargin_0"> <input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input"> </div> <button type="submit" class="theme_button no_bg_button">Search</button> </form>-->
        <!--    </div>-->
        <!--</div>-->

        <!--<div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">-->
        <!--    <div class="fw-messages-wrap ls with_padding">-->

        <!--    </div>-->
        <!--</div>-->

        <div id="canvas">
            <div id="box_wrapper">

                <?php
                include './header2.php';
                ?>

                <?php
                include './slider.php';
                ?>

                <section id="about" class="ds ms page_about parallax section_padding_top_130 section_padding_bottom_75 table_section table_section_md columns_margin_bottom_30">
                    <div class="container">
                        
                        <div class="row">
                            <div class="col-md-6 text-center">
                                <div class="with_frame_image"> <img src="img/about/about.png" alt="" class="rounded"> </div>
                            </div>

                            <div class="col-md-6">
                                <h2 class="section_header with_line">Biography</h2>
                                <p class="fontsize_20 "><?php echo $BIOGRAPHYINFO->description ?>
                                </p>
                                <p style="text-align: justify"><?php echo $BIOGRAPHYDISCRIPTION->description ?>
                                </p>
                                <div class="content-justify vertical-center content-margins topmargin_25">
                                    <div>
                                        <h3 class="highlight bottommargin_0">Roshan Fenando</h3>
                                        <p class="small-text grey">Music Artist</p>
                                    </div> <img src="images/signature.png" alt=""> </div>
                            </div>
                        </div>
                    </div>
                </section>
                  <section id="events" class="ds ms section_padding_top_100 section_padding_bottom_100">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <h2 class="section_header with_line">My Albums</h2>
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

                <section id="latest-album" class="ds ms page_latest_album parallax section_padding_top_100 section_padding_bottom_100 columns_margin_bottom_30 columns_padding_25">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <h2 class="section_header with_line">Music Tracks</h2>
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
                <section id="contact" class="ds ms background_cover page_contact section_padding_top_150 section_padding_bottom_150">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6 col-sm-offset-6 text-center">
                                <h2 class="section_header with_line">Contact for Booking</h2>
                                <p> For booking and press inquiries please contact my manager by filling the form or calling the number:  +94 77 741 1231</p>

                                <form class="contact-form columns_padding_10 topmargin_30" method="post" action="http://webdesign-finder.com/html/singer/">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group margin_0"> <label for="name">Full Name <span class="required">*</span></label> <input type="text" aria-required="true" size="30" value="" name="name" id="txtFullName" class="form-control" placeholder="Full Name*"> 
                                                <div class="form-group col-md-12 col-sm-6 co-xs-12">
                                                    <span id="spanFullName"></span> 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group margin_0"> <label for="email">Email address<span class="required">*</span></label> <input type="email" aria-required="true" size="30" value="" name="email" id="txtEmail" class="form-control" placeholder="Your Email Address*"> 
                                                <div class="form-group col-md-12 col-sm-6 co-xs-12">
                                                    <span id="spanEmail" ></span> 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group margin_0"> <label for="subject">Subject <span class="required">*</span></label> <input type="text" aria-required="true" size="60" value="" name="name" id="txtSubject" class="form-control" placeholder="Your Subject*"> 
                                                <div class="form-group col-md-12 col-sm-6 co-xs-12">
                                                    <span id="spanSubject" ></span> 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group margin_0"> <label for="message">Your question</label> <textarea aria-required="true" rows="5" cols="45" name="message" id="txtMessage" class="form-control" placeholder="Your Message*"></textarea> 
                                                <div class="form-group col-md-12 col-sm-6 co-xs-12">
                                                    <span id="spanMessage" ></span> 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group margin_0"> <label for="Security Code">Security Code <span class="required">*</span></label> <input type="text" aria-required="true" size="30" value="" name="name" id="captchacode" class="form-control" placeholder="Security Code*"> 
                                                <div class="form-group col-md-12 col-sm-6 co-xs-12">
                                                    <span id="capspan" ></span> 
                                                </div>

                                            </div>
                                        </div>


                                        <div class="form-group col-md-5  col-sm-12 co-xs-12">


                                            <?php include './contact-form/captchacode-widget.php'; ?>
                                        </div>


                                    </div>
                                    <div class="row topmargin_20">
                                        <div class="col-sm-12">
                                            <div class="contact-form-submit text-center"> <button type="submit" id="contact_form_submit" name="contact_submit" class="theme_button color1 min_width_button">Submit now</button> </div>
                                        </div>
                                    </div>
                                    <div id="dismessage"   align="center"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="news" class="ds ms section_padding_top_150 section_padding_bottom_130">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <h2 class="section_header with_line">Latest News</h2>
                                <div class="owl-carousel topmargin_60" data-responsive-lg="3" data-dots="true">
                                    <?php
                                    $NEWS = new Activities(NULL);
                                    foreach ($NEWS->all() as $news) {
                                        ?>
                                        <article class="vertical-item content-padding with_background rounded text-center offset_button">
                                            <div class="item-media top_rounded overflow_hidden"> 
                                                <img src="upload/activity/<?php echo $news['image_name'] ?>" alt=""/>
                                                <div class="media-links"> <a href="#" class="abs-link"></a> </div>
                                            </div>
                                            <div class="item-content">
                                                <header class="entry-header">



                                                    <h4 class="entry-title"> <a href="#"><?php echo $news['title'] ?></a> </h4>
                                                </header>
                                                <div class="entry-content">
                                                    <p class="content-3lines-ellipsis "style="text-align: justify"><?php echo $news['short_description'] ?></p> <span class="button_wrap">
                                                        <a href="#" class="theme_button color1">Read More</a>
                                                    </span> </div>
                                            </div>
                                        </article>
                                        <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="gallery" class="ds ms">
                    <div class="owl-carousel gallery-carousel" data-responsive-xlg="8" data-responsive-lg="6" data-responsive-md="5" data-responsive-sm="4" data-responsive-xs="2" data-loop="true" data-margin="0" data-nav="true">

                        <?php
                        $GALLERY = new AlbumPhoto(NULL);
                        foreach ($GALLERY->all() as $gallery) {
                            ?>
                            <div class="vertical-item corporate consulting">
                                <div class="item-media">  <img src="upload/photo-album/gallery/thumb/<?php echo $gallery['image_name'] ?>" alt=""/> 

                                    <div class="media-links"> <a class="abs-link prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="upload/photo-album/gallery/<?php echo $gallery['image_name'] ?>"alt=""/></a> </div>
                                </div>
                            </div>

                            <?php
                        }
                        ?>

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

    <script src="contact-form/scripts.js" type="text/javascript"></script>

</html>