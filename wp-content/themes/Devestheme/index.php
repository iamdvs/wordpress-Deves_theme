<?php get_header(); ?>




    <section class="s-content">

<div class="row masonry-wrap">
<h2>دوره ها</h2>

    <div class="masonry">

        <div class="grid-sizer"></div>
        <?php 

        // the query
                        $the_query = new WP_Query( array('post_type' => 'product','posts_per_page'=> '4' ) ); ?>
                    <?php if ( $the_query->have_posts() ) : ?>
                            <!-- pagination here -->
                            <!-- the loop -->
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>



<article class="masonry__brick entry format-standard" data-aos="fade-up">

    <div class="entry__thumb">
        <a href="<?php the_permalink(); ?>" class="entry__thumb-link">
        <?php the_post_thumbnail('articlethumb'); ?>
        </a>
    </div>

    <div class="entry__text">
        <div class="entry__header">
            
            <div class="entry__date">
                <a href="single-standard.html">مهر ۱۰, ۱۳۹۴</a>
            </div>
            <h1 class="entry__title"><a href="<?php the_permalink(); ?>"> 
            <?php the_title(); ?>
.</a></h1>
            
        </div>
        <div class="entry__excerpt">
            <p>

                <?php echo $product->get_price_html(); ?>
            </p>
        </div>
        <div class="entry__meta">
            <span class="entry__meta-links">
                <a href="#">زندگی</a> 
                <a href="#">چرخه زندگی</a>

                <button class="btn">
                <?php echo $product->add_to_cart_url(); ?>

                </button>
            </span>
        </div>
    </div>

</article> <!-- end article -->



<?php endwhile; ?>
            <!-- end of the loop -->
            <?php wp_reset_postdata(); ?>



<?php else : ?>
            <p><?php esc_html_e( 'مقاله ای وجود ندارد !' ); ?></p>
          <?php endif; ?>
</div> <!-- end masonry -->
        </div> <!-- end masonry-wrap -->

</section>

    <!-- s-content
    ================================================== -->
    <section class="s-content">

        <div class="row masonry-wrap">
        <h2>مقاله ها</h2>

            <div class="masonry">

                <div class="grid-sizer"></div>

                <?php 
                    // the query
                        $the_query = new WP_Query( array('post_type' => 'post','posts_per_page'=>'8' ) ); ?>
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
            <?php wp_reset_postdata(); ?>


            <!-- pagination here -->

            </div> <!-- end masonry -->
        </div> <!-- end masonry-wrap -->

  <nav class="mb" data-pagination>
  <a href=# ><i class=ion-chevron-left></i></a>
  <ul>
  <?php the_posts_pagination( array( 'mid_size' => 5 ,'screen_reader_text' => __( '&nbsp;' )) ); ?>

  </ul>
  <a href=#2><i class=ion-chevron-right></i></a>
</nav>
  

    </section> <!-- s-content -->
    <?php else : ?>
            <p><?php esc_html_e( 'مقاله ای وجود ندارد !' ); ?></p>
          <?php endif; ?>
<?php get_footer(); ?>