
<footer class="page_footer ds section_padding_top_100 section_padding_bottom_100 columns_padding_25">
    <div class="container">
        <div class="row">
            <div class="col-md-4 text-center">
                <div class="widget widget_text">
                    <h4 class="widget-title "> My Contacts </h4>
                    <div class="pull-left">
                        <div class="media small-media inline-block pull-left">
                            <div class="media-left"> <i class="fa fa-map-marker highlight" aria-hidden="true"></i> </div>
                            <div class="media-body"> Flashback, Katuneriya, Sri Lanka. </div>
                        </div><br>
                        <div class="media small-media greylinks inline-block pull-left">
                            <div class="media-left"> <i class="fa fa-phone highlight" aria-hidden="true"></i> 
                                <a href="tel: +94 77 741 1231" class="top-cell" >  <span>(+94) 77 741 1231 </span></a></div>
                        </div><br>
                        <div class="media small-media greylinks inline-block pull-left">
                            <div class="media-left"> <i class="fa fa-pencil highlight" aria-hidden="true"></i>
                                <a href="mailto:mail@roshanfernando.lk" class="top-email"> <span>   mail@roshanfernando.lk</span></a></div>

                        </div><br>
                        <div class="media small-media greylinks inline-block pull-left">
                            <div class="media-left"> <i class="fa fa-internet-explorer highlight" aria-hidden="true"></i> </div>
                            <div class="media-body"> <a href="#">https:// www.roshanfernando.lk</a> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 text-center">
                <div class="widget widget_recent_entries">
                    <h4 class="widget-title ">My Albums</h4>
                    <ul class="greylinks ">
                        <?php
                        $ALBUM = new Attraction(NULL);
                        foreach ($ALBUM->all() as $key => $album) {
                            if ($key < 4) {
                                ?>

                        <li>

                                     <a href="./view_album.php?id=<?php echo $album['id'] ?>" > <?php echo $album['title'] ?></a> 
                        </li>
                        <?php
                            }
                        }
                        ?>
                    </ul>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 text-center">
                <div class="widget widget_recent_entries">
                    <h4 class="widget-title ">Recent Songs</h4>
                    <ul class="greylinks ">
                        <li>
                            <p class="bottommargin_0"> <a href="https://roshan.synotec.lk/files/mp3/1.mp3">Husma Dhige</a> </p> 

                        </li>
                        <li>
                            <p class="bottommargin_0"> <a href="https://roshan.synotec.lk/files/mp3/2.mp3">Supem Suwandak Aran</a> </p> 
                        </li>
                        <li>
                            <p class="bottommargin_0"> <a href="https://roshan.synotec.lk/files/mp3/3.mp3">Hitha Hiri Wattana</a> </p> 
                        </li>
                        <li>
                            <p class="bottommargin_0"> <a href="https://roshan.synotec.lk/files/mp3/5.mp3">Sihina Siththarawi</a> </p> 
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<section class="ds ms page_copyright section_padding_top_40 section_padding_bottom_40">
    <div class="container">
        <div class="row">


            <div class="col-md-6">
                <p>&copy;2020 Roshan Fernando. All Rights Reserved.</p>

            </div>

            <div class="col-md-3 pull-right">
                <a class=" pull-right" href="#" title="Instagram" target=""><img src="img/socialmedia/002-instagram.png" class="s-i" target="_blank" alt="" style="margin-left: 10px"/></a> 
                <a class=" pull-right" href="https://api.whatsapp.com/send?phone=+94 77 741 1231" title="watsapp">  <img src="img/socialmedia/006-whatsapp.png" alt="" class="s-i" target="_blank" style="margin-left: 10px"/>  </a>
                <a class=" pull-right" href="#" title="Facebook" target="_blank"> <img src="img/socialmedia/001-facebook.png" class="s-i" alt=""/></a>
            </div>

        </div>
    </div>
</section>