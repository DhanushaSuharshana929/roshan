 <section class="intro_section page_mainslider ds">
                        <div class="flexslider" data-dots="true" data-nav="te">
                            <ul class="slides">
    
                                <?php
                                $SLIDER_OBJ = new Slider(NULL);
                                foreach ($SLIDER_OBJ->all() as $slider){
                                   
                                ?>
                                <li>
                                    <img src="upload/slider/<?php echo $slider['image_name']?>" alt=""/>

                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-12 text-center">
                                                <div class="slide_description_wrapper">
                                                    <div class="slide_description">
                                                        <div class="intro-layer" data-animation="fadeInUp">
                                                            <h2> <span class="small"><?php echo  $slider['url']?></span> <?php echo $slider['title'] ?> </h2>
                                                        </div>
                                                        <div class="intro-layer" data-animation="fadeInUp">
<!--                                                            <p>Music only makes me stronger. Music speaks to the heart in ways words cannot express.</p>-->
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </li>
                               <?php
                            }
                            ?> 
                            </ul>
                           
                        </div>

                    </section>