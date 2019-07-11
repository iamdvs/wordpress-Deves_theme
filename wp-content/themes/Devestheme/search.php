
 <?php get_header(); ?>
 
 <!-- s-content
 ================================================== -->
 <section class="s-content">

     <div class="row narrow">
         <div class="col-full s-content__header" data-aos="fade-up">
             <h1> <?php the_search_query(); ?></h1>

             <p class="lead">Dolor similique vitae. Exercitationem quidem occaecati iusto. Id non vitae enim quas error dolor maiores ut. Exercitationem earum ut repudiandae optio veritatis animi nulla qui dolores.</p>
         </div>
     </div>
     
     <div class="row masonry-wrap">
         <div class="masonry">

             <div class="grid-sizer"></div>
             <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

           
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




             <?php endwhile; else : ?>
 <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
         </div> <!-- end masonry -->
     </div> <!-- end masonry-wrap -->

     <div class="row">
         <div class="col-full">
             <nav class="pgn">
                 <ul>
                 <?php the_posts_pagination( array( 'mid_size' => 2 ) ); ?>
                 </ul>
             </nav>
         </div>
     </div>



<?php get_footer(); ?>