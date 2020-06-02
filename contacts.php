<?php
include './class/include.php';
?>
<!DOCTYPE html>

<html class="no-js">




    <head>
        <title>Best Sri Lankan Band | Best Band Artist | Roshan Fernando | Contact</title>
        <meta charset="utf-8">
        <meta name="keywords" content="full name, address, subject, message">
        <meta name="description" content="For booking and press inquiries please contact my manager by filling the form or calling the Roshan Fernando ">
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
        <link href="contact-form/style.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>



        <div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal"> <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">
                    <i class="rt-icon2-cross2"></i>
                </span>
            </button>
            <div class="widget widget_search">
                <form method="get" class="searchform search-form form-inline" action="">
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
                                <h2 class="small highlight">Contact</h2>
                            </div>
                            <div class="col-md-4 text-center text-md-right">
                                <ol class="breadcrumb greylinks">
                                    <li> <a href="index.php">
                                            Home
                                        </a> </li>

                                    <li class="active">Contact</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </section>


                <section id="contact" class="ds ms background_cover page_contact section_padding_top_150 section_padding_bottom_150">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6 col-sm-offset-6 text-center">
                                <h2 class="section_header with_line">Contact for Booking</h2>
                                <p> For booking and press inquiries please contact my manager by filling the form or calling the number: +94 77 741 1231 </p>
                                <div class="contact-form columns_padding_10 topmargin_30" method="post" action="">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group margin_0"> <label for="name">Full Name <span class="required">*</span></label> <input type="text" aria-required="true" size="30" value="" name="name" id="txtFullName" class="form-control" placeholder="Full Name*"> 

                                            </div> 
                                            <div class="form-group col-md-12 col-sm-12 co-xs-12">
                                                <span id="spanFullName"></span> 
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
                                            <div class="contact-form-submit text-center">
                                                <button type="submit" id="btnSubmit" name="contact_submit" class="theme_button color1 min_width_button">Submit now</button> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">

                                            <img src="contact-form/img/checking.gif" alt="checking" id="checking"/>
                                        </div>

                                    </div>

                                    <div id="dismessage"  align=center"></div>

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
    <script src="contact-form/scripts.js" type="text/javascript"></script>


</html>