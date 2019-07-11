

<?php get_header(); ?>



</div> <!-- end s-pageheader -->


<!-- s-content
================================================== -->
<section class="s-content s-content--narrow s-content--no-padding-bottom">

    <article class="row format-standard">

        <div class="s-content__header col-full">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <h2 class="s-content__header-title">
                <?php the_title(); ?>
            </h2>
            <ul class="s-content__header-meta">
                <li class="date"> <?php the_time('j F Y'); ?></li>
                <li class="cat">
                    دسته
                   
                  

                </li>

                <a href="#0" class=""> <?php the_category(','); ?> </a>
&nbsp;
                <?php setPostViews(get_the_ID()); ?>
                   <?php echo getPostViews(get_the_ID(),'sfaaf'); ?>

            </ul>
        </div> <!-- end s-content__header -->

        <div class="s-content__media col-full">
            <div class="s-content__post-thumb">
           




            </div>
        </div> <!-- end s-content__media -->

        <div class="col-full s-content__main">

            
           
      
            <p><?php the_content();?></p>

            <p class="s-content__tags">
                <span>تگ ها</span>

                <span class="s-content__tag-list">

                <?php the_tags(''); ?>
            
                </span>
            </p> <!-- end s-content__tags -->

            

 
        </div> <!-- end s-content__main -->


        <?php endwhile; else : ?>
                        <p><?php esc_html_e( 'متاسفانه هیچ مقاله ای برای نمایش وجود ندارد !' ); ?></p>
                      <?php endif; ?>
    </article>


   

</section> <!-- s-content -->













<?php get_footer(); ?>