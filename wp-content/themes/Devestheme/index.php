<?php get_header(); ?>

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

            </div> <!-- end masonry -->
        </div> <!-- end masonry-wrap -->

        <div class="row">
            <div class="col-full">
                <nav class="pgn">
                    <ul>
                        <li><a class="pgn__prev" href="#0"></a></li>
                        <li><a class="pgn__num" href="#0">۱</a></li>
                        <li><span class="pgn__num current">۲</span></li>
                        <li><a class="pgn__num" href="#0">۳</a></li>
                        <li><a class="pgn__num" href="#0">۴</a></li>
                        <li><a class="pgn__num" href="#0">۵</a></li>
                        <li><span class="pgn__num dots">…</span></li>
                        <li><a class="pgn__num" href="#0">۸</a></li>
                        <li><a class="pgn__next" href="#0"></a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <?php wp_reset_postdata(); ?>

    </section> <!-- s-content -->
    <?php else : ?>
            <p><?php esc_html_e( 'مقاله ای وجود ندارد !' ); ?></p>
          <?php endif; ?>

<?php get_footer(); ?>