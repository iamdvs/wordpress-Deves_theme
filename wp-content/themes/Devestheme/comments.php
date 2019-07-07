<?php

if ( post_password_required() )
	return;
?>
  <?php if ( have_comments() ) : ?>
                  <?php wp_list_comments('type=comment&avatar_size=80&callback=advanced_comment'); ?>
    <?php
      // Are there comments to navigate through?
      if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
    ?>
    <nav class="navigation comment-navigation" role="navigation">
      <h1 class="screen-reader-text section-heading"><?php _e( 'Comment navigation', 'twentythirteen' ); ?></h1>
      <div class="nav-previous"><?php previous_comments_link( __( '&larr; قدیمی تر', 'twentythirteen' ) ); ?></div>
      <div class="nav-next"><?php next_comments_link( __( 'جدیدتر &rarr;', 'twentythirteen' ) ); ?></div>
    </nav><!-- .comment-navigation -->
    <?php endif; // Check for comment navigation ?>
  <?php endif; // have_comments() ?>




<?php if ( comments_open()) : ?>
  <?php
  $args = array(
  'id_form'           => 'commentform',
  'id_submit'         => 'submit',
  'class_submit'         => 'btn btn-success has_icon',
  'title_reply'       => __( '' ),
  'title_reply_to'    => __( 'ارسال پاسخ به %s' ),
  'cancel_reply_link' => __( 'لغو پاسخ' ),
  'label_submit'      => __( 'Post Comment' ),

  'comment_field' =>  ' <div class="form-group">
  <textarea id="comment" placeholder="متن دیدگاه" class="form-control w-100" name="comment"  cols="30" rows="9" aria-required="true"></textarea>'.'</div>',

  'must_log_in' => 'You Should login to send comment',

  'logged_in_as' => '<p class="logged-in-as text-right">' .
    sprintf(
    __( 'شما با حساب کاربری  <a class="" href="%1$s">%2$s</a> وارد شده‌اید. <a class="" href="%3$s" title="خروج از این حساب کاربری ">خارج می‌شوید؟</a>' ),
      admin_url( 'profile.php' ),
      $user_identity,
      wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) )
    ) . '</p>',

  'comment_notes_before' => '',

  'comment_notes_after' => '',

  'fields' => apply_filters( 'comment_form_default_fields', array(

    'author' =>'<input class="form-control" id="author" placeholder="نام" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .'"/>',

    'email' =>'<input class="form-control mt-4" id="email" name="email" placeholder="ایمیل" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .'" size="30"/>'    )
  
),
);

comment_form( $args, get_the_ID() );
?>




<?php endif; ?>
