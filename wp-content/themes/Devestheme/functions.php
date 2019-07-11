<?php 

function loadfiles(){
    wp_enqueue_style('bootstrap',get_template_directory_uri().'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css',false);
    wp_enqueue_style('allmin',get_template_directory_uri().'/css/base.css',false);
    wp_enqueue_style('themify',get_template_directory_uri().'/css/vendor.css',false);
    wp_enqueue_style('stylecss',get_template_directory_uri().'/css/main.css',false);

    wp_enqueue_script('bootstrap-bundle',get_template_directory_uri().'/js/modernizr.js',array('jquery'),'1.0','false');
    wp_enqueue_script('bootstrap-bundle',get_template_directory_uri().'/js/pace.min.js',array('jquery'),'1.0','false');
    wp_enqueue_script('bootstrap-owl.carousel',get_template_directory_uri().'/js/plugins.js',array('jquery'),'1.0','false');
    wp_enqueue_script('jquery.nic',get_template_directory_uri().'/js/main.js',array('jquery'),'1.0','false');



}

add_action('wp_enqueue_scripts','loadfiles');

add_theme_support('post-thumbnails');
add_image_size('articlethumb',350,300,true)




?>

<?php 

function my_menus() {
    register_nav_menus(
      array(
        'header-menu' => __( 'منوی اصلی' ),
        'footer-menu' => __( 'منوی اخر صفحه' )
      )
    );
  }
  add_action( 'init', 'my_menus' );

 ?>



<?php

    function advanced_comment($comment, $args, $depth) {
       $GLOBALS['comment'] = $comment; ?>



          <ol class="commentlist">

                
<li class="depth-1 comment">

<div class="comment__avatar">
    <?php echo get_avatar( $comment, 100 ); ?>

</div>

<div class="comment__content">

    <div class="comment__info">
        <cite><?php echo get_comment_author_link();  ?></cite>

        <div class="comment__meta">
            <time class="comment__time"> <?php printf(__('%1$s'), get_comment_date('j F Y در g:i a'), get_comment_time()) ?></time>
            <p><?php comment_text(); ?>

        </div>
    </div>

    <div class="comment__text m-0">
    <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
    </p>


    <?php if ($comment->comment_approved == '0') : ?>
         <p>
              <em>دیدگاه شما منتظر تایید مدیریت است.</em><br />
      </p>
     <?php endif; ?>



  </p>
    </div>

</div>

</li>

</ol>



<?php } ?>

<?php


function getPostViews($postID){
  $count_key = 'post_views_count';
  $count = get_post_meta($postID, $count_key, true);
  if($count==''){
      delete_post_meta($postID, $count_key);
      add_post_meta($postID, $count_key, '0');
      return "0 بازدید";
  }
  return $count.' بازدید';
}
function setPostViews($postID) {
  $count_key = 'post_views_count';
  $count = get_post_meta($postID, $count_key, true);
  if($count==''){
      $count = 0;
      delete_post_meta($postID, $count_key);
      add_post_meta($postID, $count_key, '0');
  }else{
      $count++;
      update_post_meta($postID, $count_key, $count);
  }
}
// Remove issues with prefetching adding extra views
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);


?>


<?php
/*=============================================
=            BREADCRUMBS			            =
=============================================*/
//  to include in functions.php
function the_breadcrumb() {
    $sep = ' > ';
    if (!is_front_page()) {
	
	// Start the breadcrumb with a link to your homepage
        echo '<div class="breadcrumbs">';
        echo '<a href="';
        echo get_option('home');
        echo '">';
        bloginfo('name');
        echo '</a>' . $sep;
	
	// Check if the current page is a category, an archive or a single page. If so show the category or archive name.
        if (is_category() || is_single() ){
            the_category(' > ');
        } elseif (is_archive() || is_single()){
            if ( is_day() ) {
                printf( __( '%s', 'text_domain' ), get_the_date() );
            } elseif ( is_month() ) {
                printf( __( '%s', 'text_domain' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'text_domain' ) ) );
            } elseif ( is_year() ) {
                printf( __( '%s', 'text_domain' ), get_the_date( _x( 'Y', 'yearly archives date format', 'text_domain' ) ) );
            } else {
                _e( 'Blog Archives', 'text_domain' );
            }
        }
	
	// If the current page is a single post, show its title with the separator
        if (is_single()) {
            echo $sep;
            the_title();
        }
	
	// If the current page is a static page, show its title.
        if (is_page()) {
            echo the_title();
        }
	
	// if you have a static page assigned to be you posts list page. It will find the title of the static page and display it. i.e Home >> Blog
        if (is_home()){
            global $post;
            $page_for_posts_id = get_option('page_for_posts');
            if ( $page_for_posts_id ) { 
                $post = get_page($page_for_posts_id);
                setup_postdata($post);
                the_title();
                rewind_posts();
            }
        }
        echo '</div>';
    }
}




?>


<?php 


function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );

}

add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );
?>