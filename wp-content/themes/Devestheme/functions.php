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

