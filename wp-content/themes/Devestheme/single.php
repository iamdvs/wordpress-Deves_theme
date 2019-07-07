

<?php get_header(); ?>



</div> <!-- end s-pageheader -->


<!-- s-content
================================================== -->
<section class="s-content s-content--narrow s-content--no-padding-bottom">

    <article class="row format-standard">

        <div class="s-content__header col-full">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <h1 class="s-content__header-title">
                <?php the_title(); ?>
            </h1>
            <ul class="s-content__header-meta">
                <li class="date"> <?php the_time('j F Y'); ?></li>
                <li class="cat">
                    دسته
                    <a href="#0">زندگی</a>
                    <a href="#0">چرخه حیات</a>
                </li>
            </ul>
        </div> <!-- end s-content__header -->

        <div class="s-content__media col-full">
            <div class="s-content__post-thumb">
                <img src="images/thumbs/single/standard/standard-1000.jpg" 
                     srcset="images/thumbs/single/standard/standard-2000.jpg 2000w, 
                             images/thumbs/single/standard/standard-1000.jpg 1000w, 
                             images/thumbs/single/standard/standard-500.jpg 500w" 
                     sizes="(max-width: 2000px) 100vw, 2000px" alt="" >
            </div>
        </div> <!-- end s-content__media -->

        <div class="col-full s-content__main">

            
           
      
            <p><?php the_content();?></p>

            <p class="s-content__tags">
                <span>تگ ها</span>

                <span class="s-content__tag-list">

                <?php the_tags(' '); ?>
            
                </span>
            </p> <!-- end s-content__tags -->

            <div class="s-content__author">
                <img src="images/avatars/user-03.jpg" alt="">

                <div class="s-content__author-about">
                <?php echo get_avatar( get_the_author_meta('user_email'),'80',''); ?>

                    <h4 class="s-content__author-name">


          
                        <a href="#0"> <?php the_author(); ?></a>
                    </h4>

                    
                    <p>
                  <?php  the_author_description(); ?>
</p>
      </p>

                    <ul class="s-content__author-social">
                
                       <li><a href="https://www.instagram.com/iam_deves">Instagram</a></li>
                    </ul>
                </div>
            </div>

            <div class="s-content__pagenav">
                <div class="s-content__nav">
                    <div class="s-content__next text-left">
                        <a href="" rel="next">
                           <?php previous_post_link(); ?>
                        </a>
                    </div>
                    <div class="s-content__prev">
                        <a href="" rel="prev">
                            <?php next_post_link(); ?>
                        </a>
                    </div>
                </div>
            </div> <!-- end s-content__pagenav -->

        </div> <!-- end s-content__main -->


        <?php endwhile; else : ?>
                        <p><?php esc_html_e( 'متاسفانه هیچ مقاله ای برای نمایش وجود ندارد !' ); ?></p>
                      <?php endif; ?>
    </article>


    <!-- comments
    ================================================== -->
    <div class="comments-wrap">

        <div id="comments" class="row">
            <div class="col-full">

                <h3 class="h2">5 کامنت</h3>

    
                <!-- respond
                ================================================== -->
                <div class="respond">


                    <?php comments_template(); ?>

 <!-- end form -->

                </div> <!-- end respond -->

            </div> <!-- end col-full -->

        </div> <!-- end row comments -->
    </div> <!-- end comments-wrap -->

</section> <!-- s-content -->













<?php get_footer(); ?>