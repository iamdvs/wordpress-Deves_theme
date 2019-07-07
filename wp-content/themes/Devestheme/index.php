<?php get_header(); ?>
        <div class="pageheader-content row">
            <div class="col-full">

                <div class="featured">

                    <div class="featured__column featured__column--big">
                        <div class="entry" style="background-image:url('<?php echo get_template_directory_uri();?>/images/thumbs/featured/featured-guitarman.jpg');">
                            
                            <div class="entry__content">
                                <span class="entry__category"><a href="#0">موزیک</a></span>

                                <h1><a href="#0" title="">این سایت سایت شخصی من است که در ان مطالب هکینگ قرار میدهم</a></h1>

                                <div class="entry__info">
                                    <a href="#0" class="entry__profile-pic">
                                        <img class="avatar" src="<?php echo get_template_directory_uri();?>/images/avatars/user-03.jpg" alt="">
                                    </a>

                                    <ul class="entry__meta ">
                                        <li><a href="#0">داود وثاقتی</a></li>
                                        <li>مهر ۲۹, ۱۳۹۸</li>
                                    </ul>
                                </div>
                            </div> <!-- end entry__content -->
                            
                        </div> <!-- end entry -->
                    </div> <!-- end featured__big -->

                    <div class="featured__column featured__column--small">

                        <div class="entry" style="background-image:url('<?php echo get_template_directory_uri();?>/images/thumbs/featured/featured-watch.jpg');">
                            
                            <div class="entry__content">
                                <span class="entry__category"><a href="#0">مدیریت</a></span>

                                <h1><a href="#0" title="">مدیریت در خون من است</a></h1>

                                <div class="entry__info">
                                    <a href="#0" class="entry__profile-pic">
                                        <img class="avatar" src="<?php echo get_template_directory_uri();?>/images/avatars/user-03.jpg" alt="">
                                    </a>

                                    <ul class="entry__meta">
                                        <li><a href="#0">داود وثاقتی</a></li>
                                        <li>شهریور ۲۷, ۱۳۹۸</li>
                                    </ul>
                                </div>
                            </div> <!-- end entry__content -->
                          
                        </div> <!-- end entry -->

                        <div class="entry" style="background-image:url('<?php echo get_template_directory_uri();?>/images/thumbs/featured/featured-beetle.jpg');">

                            <div class="entry__content">
                                <span class="entry__category"><a href="#0">نحوه زندگی</a></span>

                                <h1><a href="#0" title="">زندگی در حال اتفاق افتادن است</a></h1>

                                <div class="entry__info">
                                    <a href="#0" class="entry__profile-pic">
                                        <img class="avatar" src="<?php echo get_template_directory_uri();?>/images/avatars/user-03.jpg" alt="">
                                    </a>

                                    <ul class="entry__meta">
                                        <li><a href="#0">داود وثاقتی</a></li>
                                        <li>شهریور ۲۱, ۱۳۹۸</li>
                                    </ul>
                                </div>
                            </div> <!-- end entry__content -->

                        </div> <!-- end entry -->

                    </div> <!-- end featured__small -->
                </div> <!-- end featured -->

            </div> <!-- end col-full -->
        </div> <!-- end pageheader-content row -->

    </section> <!-- end s-pageheader -->


    <!-- s-content
    ================================================== -->
    <section class="s-content">
        
        <div class="row masonry-wrap">
            <div class="masonry">

                <div class="grid-sizer"></div>

                
                <?php 

                    // the query
                        $the_query = new WP_Query( array('post_type' => 'post' ) ); ?>
                    <?php if ( $the_query->have_posts() ) : ?>
                            <!-- pagination here -->
                            <!-- the loop -->
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>






                <article class="masonry__brick entry format-standard" data-aos="fade-up">
                        
                    <div class="entry__thumb">
                        <a href="single-standard.html" class="entry__thumb-link">
                            <?php the_post_thumbnail('articlethumb'); ?>
                        </a>
                    </div>
    
                    <div class="entry__text">
                        <div class="entry__header">
                            
                            <div class="entry__date">
                                <a href="single-standard.html"><?php the_time('F j, Y'); ?></a>
                            </div>
                            <h1 class="entry__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                            
                        </div>
                        <div class="entry__excerpt">
                            <p>
این پست بسیار استاندارد میباشد و از نظر ما هیچ نقضی در ان وجود ندارد که ما بخواهیم ان را انکار کنیم
                            </p>
                        </div>
                        <div class="entry__meta">
                            <span class="entry__meta-links">
                                 <a href="category.html"><?php the_tags('#تگ ها : '); ?> &nbsp; </a> 
                            </span>
                        </div>
                    </div>
    
                </article> <!-- end article -->




                <?php endwhile; ?>
            <!-- end of the loop -->

            <!-- pagination here -->

            <?php wp_reset_postdata(); ?>

          <?php else : ?>
            <p><?php esc_html_e( 'مقاله ای وجود ندارد !' ); ?></p>
          <?php endif; ?>


<!-- 
                <article class="masonry__brick entry format-quote" data-aos="fade-up">
                        
                    <div class="entry__thumb">
                        <blockquote>
                                <p>
این پست بسیار استاندارد میباشد و از نظر ما هیچ نقضی در ان وجود ندارد که ما بخواهیم ان را انکار کنیم
                                </p>
    
                                <cite>سایت شما</cite>
                        </blockquote>
                    </div>   
    
                </article> end article -->

                <!-- <article class="masonry__brick entry format-standard" data-aos="fade-up">
                        
                    <div class="entry__thumb">
                        <a href="single-standard.html" class="entry__thumb-link">
                            <img src="<?php echo get_template_directory_uri();?>/images/thumbs/masonry/tulips-400.jpg" 
                                    srcset="<?php echo get_template_directory_uri();?>/images/thumbs/masonry/tulips-400.jpg 1x, images/thumbs/masonry/tulips-800.jpg 2x" alt="">
                        </a>
                    </div>
    
                    <div class="entry__text">
                        <div class="entry__header">
                            
                            <div class="entry__date">
                                <a href="single-standard.html">مهر ۱۵, ۱۳۹۷</a>
                            </div>
                            <h1 class="entry__title"><a href="single-standard.html">سلام این متن تنست میباشد.</a></h1>
                            
                        </div>
                        <div class="entry__excerpt">
                            <p>
                            این پست بسیار استاندارد میباشد و از نظر ما هیچ نقضی در ان وجود ندارد که ما بخواهیم ان را انکار کنیم

                            </p>
                        </div>
                        <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a href="category.html">زندگی</a>
                            </span>
                        </div>
                    </div>
    
                </article> end article -->
<!-- 
                <article class="masonry__brick entry format-standard" data-aos="fade-up">

                    <div class="entry__thumb">
                        <a href="single-standard.html" class="entry__thumb-link">
                            <img src="<?php echo get_template_directory_uri();?>/images/thumbs/masonry/cookies-400.jpg" 
                                    srcset="<?php echo get_template_directory_uri();?>/images/thumbs/masonry/cookies-400.jpg 1x, images/thumbs/masonry/cookies-800.jpg 2x" alt="">
                        </a>
                    </div>
    
                    <div class="entry__text">
                        <div class="entry__header">
                            
                            <div class="entry__date">
                                <a href="single-standard.html">مرداد ۱۰, ۱۳۹۵</a>
                            </div>
                            <h1 class="entry__title"><a href="single-standard.html">این متن یک تست میباشد.</a></h1>
                            
                        </div>
                        <div class="entry__excerpt">
                            <p>
این پست بسیار استاندارد میباشد و از نظر ما هیچ نقضی در ان وجود ندارد که ما بخواهیم ان را انکار کنیم
                            </p>
                        </div>
                        <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a href="category.html">حالا حالا</a>
                                <a href="category.html">زندگی</a>
                            </span>
                        </div>
                    </div>
    
                </article> end article -->
<!-- 
                <article class="masonry__brick entry format-standard" data-aos="fade-up">

                    <div class="entry__thumb">
                        <a href="single-standard.html" class="entry__thumb-link">
                            <img src="<?php echo get_template_directory_uri();?>/images/thumbs/masonry/wheel-400.jpg" 
                                    srcset="<?php echo get_template_directory_uri();?>/images/thumbs/masonry/wheel-400.jpg 1x, images/thumbs/masonry/wheel-800.jpg 2x" alt="">
                        </a>
                    </div>
    
                    <div class="entry__text">
                        <div class="entry__header">
                            
                            <div class="entry__date">
                                <a href="single-standard.html">مهر ۱۰, ۱۳۹۴</a>
                            </div>
                            <h1 class="entry__title"><a href="single-standard.html">این متن تست میباشد.</a></h1>
                            
                        </div>
                        <div class="entry__excerpt">
                            <p>
این پست بسیار استاندارد میباشد و از نظر ما هیچ نقضی در ان وجود ندارد که ما بخواهیم ان را انکار کنیم
                            </p>
                        </div>
                        <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a href="#">زندگی</a> 
                                <a href="#">چرخه زندگی</a>
                            </span>
                        </div>
                    </div>
    
                </article> end article -->

                <!-- <article class="masonry__brick entry format-video" data-aos="fade-up">
                        
                    <div class="entry__thumb video-image">
                        <a href="https://player.vimeo.com/video/117310401?color=01aef0&title=0&byline=0&portrait=0" data-lity>
                            <img src="<?php echo get_template_directory_uri();?>/images/thumbs/masonry/shutterbug-400.jpg" 
                                    srcset="<?php echo get_template_directory_uri();?>/images/thumbs/masonry/shutterbug-400.jpg 1x, images/thumbs/masonry/shutterbug-800.jpg 2x" alt="">
                        </a>
                    </div>
    
                    <div class="entry__text">
                        <div class="entry__header">
                            
                            <div class="entry__date">
                                <a href="single-video.html">مهر ۱۰, ۱۳۹۸</a>
                            </div>
                            <h1 class="entry__title"><a href="single-video.html">این متن تست برای پست است.</a></h1>
                            
                        </div>
                        <div class="entry__excerpt">
                            <p>
این پست بسیار استاندارد میباشد و از نظر ما هیچ نقضی در ان وجود ندارد که ما بخواهیم ان را انکار کنیم
                            </p>
                        </div>
                        <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a href="category.html">فامیلی</a> 
                                <a href="category.html">فوتوگرافی</a>
                            </span>
                        </div>
                    </div>
    
                </article> end article -->

<!-- 
                <article class="masonry__brick entry format-gallery" data-aos="fade-up">
                        
                    <div class="entry__thumb slider">
                        <div class="slider__slides">
                            <div class="slider__slide">
                                <img src="<?php echo get_template_directory_uri();?>/images/thumbs/masonry/gallery/gallery-1-400.jpg" 
                                        srcset="<?php echo get_template_directory_uri();?>/images/thumbs/masonry/gallery/gallery-1-400.jpg 1x, images/thumbs/masonry/gallery/gallery-1-800.jpg 2x" alt=""> 
                            </div>
                            <div class="slider__slide">
                                <img src="<?php echo get_template_directory_uri();?>/images/thumbs/masonry/gallery/gallery-2-400.jpg" 
                                        srcset="<?php echo get_template_directory_uri();?>/images/thumbs/masonry/gallery/gallery-2-400.jpg 1x, images/thumbs/masonry/gallery/gallery-2-800.jpg 2x" alt=""> 
                            </div>
                            <div class="slider__slide">
                                <img src="<?php echo get_template_directory_uri();?>/images/thumbs/masonry/gallery/gallery-3-400.jpg" 
                                        srcset="<?php echo get_template_directory_uri();?>/images/thumbs/masonry/gallery/gallery-3-400.jpg 1x, images/thumbs/masonry/gallery/gallery-3-800.jpg 2x" alt="">  
                            </div>
                        </div>
                    </div>
    
                    <div class="entry__text">
                        <div class="entry__header">
                            
                            <div class="entry__date">
                                <a href="single-gallery.html">مهر ۱۰, ۱۳۹۷</a>
                            </div>
                            <h1 class="entry__title"><a href="single-gallery.html">این متن برای تست این صفحه میباشد.</a></h1>
                            
                        </div>
                        <div class="entry__excerpt">
                            <p>
این پست بسیار استاندارد میباشد و از نظر ما هیچ نقضی در ان وجود ندارد که ما بخواهیم ان را انکار کنیم
                            </p>
                        </div>
                        <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a href="category.html">کار</a> 
                                <a href="category.html">مدیریت</a>
                            </span>
                        </div>
                    </div>
    
                </article> end article -->

                <!-- <article class="masonry__brick entry format-audio" data-aos="fade-up">

                    <div class="entry__thumb">
                        <a href="single-audio.html" class="entry__thumb-link">
                            <img src="<?php echo get_template_directory_uri();?>/images/thumbs/masonry/guitarman-400.jpg" 
                                    srcset="<?php echo get_template_directory_uri();?>/images/thumbs/masonry/guitarman-400.jpg 1x, images/thumbs/masonry/guitarman-800.jpg 2x" alt="">
                        </a>
                        <div class="audio-wrap">
                            <audio id="player" src="<?php echo get_template_directory_uri();?>/media/AirReview-Landmarks-02-ChasingCorporate.mp3" width="100%" height="42" controls="controls"></audio>
                        </div>
                    </div>

                    <div class="entry__text">
                        <div class="entry__header">
                            
                            <div class="entry__date">
                                <a href="single-audio.html">شهریور ۱۰, ۱۳۹۷</a>
                            </div>
                            <h1 class="entry__title"><a href="single-audio.html">سلام این متن دوباره تست است توجه نکنید.</a></h1>
                            
                        </div>
                        <div class="entry__excerpt">
                            <p>
این پست بسیار استاندارد میباشد و از نظر ما هیچ نقضی در ان وجود ندارد که ما بخواهیم ان را انکار کنیم
                            </p>
                        </div>
                        <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a href="category.html">موزیک</a> 
                                <a href="category.html">چرخه زندگی</a>
                            </span>
                        </div>
                    </div>

                </article> end article -->

                <!-- <article class="masonry__brick entry format-link" data-aos="fade-up">
                    
                    <div class="entry__thumb">
                        <div class="link-wrap">
                            <p>این متن برای تست میباشد لطفا توجه نکنید.</p>
                            <cite>
                                <a target="_blank" href="https://instagram.com/iam_dvs">https://instagram.com/iam_dvs</a>
                            </cite>
                        </div>
                    </div>
                    
                </article> end article -->

                <!-- <article class="masonry__brick entry format-standard" data-aos="fade-up">

                    <div class="entry__thumb">
                        <a href="single-standard.html" class="entry__thumb-link">
                            <img src="<?php echo get_template_directory_uri();?>/images/thumbs/masonry/jump-400.jpg" 
                                    srcset="<?php echo get_template_directory_uri();?>/images/thumbs/masonry/jump-400.jpg 1x, images/thumbs/masonry/jump-800.jpg 2x" alt="">
                        </a>
                    </div>

                    <div class="entry__text">
                        <div class="entry__header">
                            
                            <div class="entry__date">
                                <a href="single-standard.html">مهر ۱۰, ۱۳۹۵</a>
                            </div>
                            <h1 class="entry__title"><a href="single-standard.html">ساخت این مجموعه با ماست.</a></h1>
                            
                        </div>
                        <div class="entry__excerpt">
                            <p>
این پست بسیار استاندارد میباشد و از نظر ما هیچ نقضی در ان وجود ندارد که ما بخواهیم ان را انکار کنیم
                            </p>
                        </div>
                        <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a href="category.html">فامیلی</a>
                                <a href="category.html">کشتی</a>
                            </span>
                        </div>
                    </div>

                </article> end article -->

                <!-- <article class="masonry__brick entry format-standard" data-aos="fade-up">

                    <div class="entry__thumb">
                        <a href="single-standard.html" class="entry__thumb-link">
                            <img src="<?php echo get_template_directory_uri();?>/images/thumbs/masonry/beetle-400.jpg" 
                                    srcset="<?php echo get_template_directory_uri();?>/images/thumbs/masonry/beetle-400.jpg 1x, images/thumbs/masonry/beetle-800.jpg 2x" alt="">
                        </a>
                    </div>

                    <div class="entry__text">
                        <div class="entry__header">
                            
                            <div class="entry__date">
                                <a href="single-standard.html">مهر ۱۱, ۱۳۹۸</a>
                            </div>
                            <h1 class="entry__title"><a href="single-standard.html">این متن تست است.</a></h1>
                            
                        </div>
                        <div class="entry__excerpt">
                            <p>
                            این پست بسیار استاندارد میباشد و از نظر ما هیچ نقضی در ان وجود ندارد که ما بخواهیم ان را انکار کنیم

                            </p>
                        </div>
                        <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a href="category.html">نحوه زندگی</a>
                            </span>
                        </div>
                    </div>

                </article> end article -->

                <!-- <article class="masonry__brick entry format-standard" data-aos="fade-up">

                    <div class="entry__thumb">
                        <a href="single-standard.html" class="entry__thumb-link">
                            <img src="<?php echo get_template_directory_uri();?>/images/thumbs/masonry/fuji-400.jpg" 
                                    srcset="<?php echo get_template_directory_uri();?>/images/thumbs/masonry/fuji-400.jpg 1x, images/thumbs/masonry/fuji-800.jpg 2x" alt="">
                        </a>
                    </div>

                    <div class="entry__text">
                        <div class="entry__header">
                            
                            <div class="entry__date">
                                <a href="single-standard.html">مهر ۱۱, ۱۳۹۴</a>
                            </div>
                            <h1 class="entry__title"><a href="single-standard.html">زندگی در حال گذر است.</a></h1>
                            
                        </div>
                        <div class="entry__excerpt">
                            <p>
این پست بسیار استاندارد میباشد و از نظر ما هیچ نقضی در ان وجود ندارد که ما بخواهیم ان را انکار کنیم
                            </p>
                        </div>
                        <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a href="category.html">Design</a> 
                                <a href="category.html">Photography</a>
                            </span>
                        </div>
                    </div>

                </article> end article -->

                <!-- <article class="masonry__brick entry format-standard" data-aos="fade-up">

                    <div class="entry__thumb">
                        <a href="single-standard.html" class="entry__thumb-link">
                            <img src="<?php echo get_template_directory_uri();?>/images/thumbs/masonry/sydney-400.jpg" 
                                    srcset="<?php echo get_template_directory_uri();?>/images/thumbs/masonry/sydney-400.jpg 1x, images/thumbs/masonry/sydney-800.jpg 2x" alt="">
                        </a>
                    </div>

                    <div class="entry__text">
                        <div class="entry__header">
                            
                            <div class="entry__date">
                                <a href="single-standard.html">ابان ۱۲, ۱۳۹۵</a>
                            </div>
                            <h1 class="entry__title"><a href="single-standard.html">این متن تست میباشد.</a></h1>
                            
                        </div>
                        <div class="entry__excerpt">
                            <p>
این پست بسیار استاندارد میباشد و از نظر ما هیچ نقضی در ان وجود ندارد که ما بخواهیم ان را انکار کنیم
                            </p>
                        </div>
                        <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a href="category.html">Travel</a> 
                                <a href="category.html">Vacation</a>
                            </span>
                        </div>
                    </div>

                </article> end article -->

            </div> <!-- end masonry -->
        </div> <!-- end masonry-wrap -->

        <div class="row">
            <div class="col-full">
                <nav class="pgn">
                    <ul>
                        <li><a class="pgn__prev" href="#0">قبلی</a></li>
                        <li><a class="pgn__num" href="#0">۱</a></li>
                        <li><span class="pgn__num current">۲</span></li>
                        <li><a class="pgn__num" href="#0">۳</a></li>
                        <li><a class="pgn__num" href="#0">۴</a></li>
                        <li><a class="pgn__num" href="#0">۵</a></li>
                        <li><span class="pgn__num dots">…</span></li>
                        <li><a class="pgn__num" href="#0">۸</a></li>
                        <li><a class="pgn__next" href="#0">بعدی</a></li>
                    </ul>
                </nav>
            </div>
        </div>

    </section> <!-- s-content -->


    <!-- s-extra

  <section class="s-extra">

        <div class="row top">

            <div class="col-eight md-six tab-full popular">
                <h3>Popular Posts</h3>

                <div class="block-1-2 block-m-full popular__posts">
                    <article class="col-block popular__post">
                        <a href="#0" class="popular__thumb">
                            <img src="/images/thumbs/small/wheel-150.jpg" alt="">
                        </a>
                        <h5><a href="#0">زندگی یک معما میباشد ما باید حلش کنیم</a></h5>
                        <section class="popular__meta">
                                <span class="popular__author"><span>By</span> <a href="#0"> داود وثاقتی </a></span>
                            <span class="popular__date"><span>on</span> <time datetime="2017-12-19">مهر ۱۴, ۱۳۹۲</time></span>
                        </section>
                    </article>
                    <article class="col-block popular__post">
                        <a href="#0" class="popular__thumb">
                            <img src="images/thumbs/small/shutterbug-150.jpg" alt="">
                        </a>
                        <h5><a href="#0">سلام این متن تست میباشد.</a></h5>
                        <section class="popular__meta">
                            <span class="popular__author"><span>By</span> <a href="#0"> داود وثاقتی </a></span>
                            <span class="popular__date"><span>on</span> <time datetime="2017-12-18">مهر ۱۴, ۱۳۵۲</time></span>
                        </section>
                    </article>
                    <article class="col-block popular__post">
                        <a href="#0" class="popular__thumb">
                            <img src="images/thumbs/small/cookies-150.jpg" alt="">
                        </a>
                        <h5><a href="#0">سلام این متن تست میباشد.</a></h5>
                        <section class="popular__meta">
                                <span class="popular__author"><span>By</span> <a href="#0"> داود وثاقتی</a></span>
                            <span class="popular__date"><span>on</span> <time datetime="2017-12-16">شهریور ۱۵, ۱۳۹۵</time></span>
                        </section>
                    </article>
                    <article class="col-block popular__post">
                        <a href="#0" class="popular__thumb">
                            <img src="images/thumbs/small/beetle-150.jpg" alt="">
                        </a>
                        <h5><a href="#0">سلام این متن تست میباشد.</a></h5>
                        <section class="popular__meta">
                            <span class="popular__author"><span>By</span> <a href="#0"> داود وثاقتی</a></span>
                            <span class="popular__date"><span>on</span> <time datetime="2017-12-16">شهریور ۱۴, ۱۳۹۵</time></span>
                        </section>
                    </article>
                    <article class="col-block popular__post">
                        <a href="#0" class="popular__thumb">
                            <img src="images/thumbs/small/tulips-150.jpg" alt="">
                        </a>
                        <h5><a href="#0">سلام این متن یک تست میباشد.</a></h5>
                        <section class="popular__meta">
                            <span class="popular__author"><span>By</span> <a href="#0"> علی محمدی</a></span>
                            <span class="popular__date"><span>on</span> <time datetime="2017-12-14">شهریور ۱۴, ۱۳۹۵</time></span>
                        </section>
                    </article>
                    <article class="col-block popular__post">
                        <a href="#0" class="popular__thumb">
                            <img src="images/thumbs/small/salad-150.jpg" alt="">
                        </a>
                        <h5><a href="#0">خوبی چطوری تو زنده ای اصلا</a></h5>
                        <section class="popular__meta">
                            <span class="popular__author"><span>By</span> <a href="#0"> محمد محمدی</a></span>
                            <span class="popular__date"><span>on</span> <time datetime="2017-12-12">مهر ۱۲, ۱۳۹۵</time></span>
                        </section>
                    </article>
                </div> 
            </div> 
            
            <div class="col-four md-six tab-full about">
                <h3>درباره فوتو گرافی</h3>

                <p>
این پست بسیار استاندارد میباشد و از نظر ما هیچ نقضی در ان وجود ندارد که ما بخواهیم ان را انکار کنیم
                </p>

                <ul class="about__social">
                    <li>
                        <a href="#0"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                    </li>
                </ul>
            </div> 

        </div> 

        <div class="row bottom tags-wrap">
            <div class="col-full tags">
                <h3>تگ ها</h3>

                <div class="tagcloud">
                    <a href="#0">سالاد</a>
                    <a href="#0">دوستان</a>
                    <a href="#0">مکان ها</a>
                    <a href="#0">تیپ ها</a>
                    <a href="#0">زندگی</a>
                    <a href="#0">سفر</a>
                    <a href="#0">درامد</a>
                    <a href="#0">خواندن</a>
                    <a href="#0">اجرا کردن</a>
                    <a href="#0">کمک خود</a>
                    <a href="#0">امارگیری</a>
                </div> 
            </div> 
        </div>

    </section> 
 {% endcomment %}

 -->
<?php get_footer(); ?>