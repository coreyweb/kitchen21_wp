<?php 
// =================================================================
/**
 * This function is used to assemble the same data that
 * wp_notify_postauthor() uses to build notification messages.
 */
function Kitchen21_get_comment_data($comment_id) {
  $comment = get_comment( $comment_id );
  $post    = get_post( $comment->comment_post_ID );
  $author  = get_userdata( $post->post_author );

  $comment_author_domain = @gethostbyaddr($comment->comment_author_IP);

  // The blogname option is escaped with esc_html on the way into the database in sanitize_option
  // we want to reverse this for the plain text arena of emails.
  $blogname = wp_specialchars_decode(get_option('blogname'), ENT_QUOTES);

  if ( empty( $comment_type ) ) $comment_type = 'comment';
  
  return compact('comment', 'post', 'author', 'comment_author_domain', 'blogname', 'comment_type');
}
 
add_filter('comment_notification_subject', 'Kitchen21_comment_notification_subject', 10, 2);
function Kitchen21_comment_notification_subject($subject, $comment_id) {
  extract(Kitchen21_get_comment_data($comment_id));
  
  $blogname = wp_specialchars_decode(get_option('blogname'), ENT_QUOTES);

  if ($comment->comment_type == 'facebook') {
    $subject = sprintf(__('[%1$s] Comment: "%2$s"'), $blogname, $post->post_title);
  }

  return $subject;
}

/**
 * This filter controls the content of comment notification e-mails,
 * and ensures that the site admin is copied on all messages.
 */
add_filter('comment_notification_text', 'Kitchen21_comment_notification_text', 10, 2);
function Kitchen21_comment_notification_text($notify_message, $comment_id) {
  extract(Kitchen21_get_comment_data($comment_id));
  
  // send a copy to the site admin?
  if ($admin_email = get_option('admin_email')) {
    $message = $notify_message;
    if ($comment->comment_type == 'facebook') {
      $message .= "\nComment: ".$comment->comment_content;
    }
    @wp_mail($admin_email, sprintf('[%s] Comment: "%s"', get_option('blogname'), $post->post_title), $message);
  }
  
  // TODO: make sure admin isn't the author

  $permalink = get_permalink($comment->comment_post_ID);
  ob_start();
?>
There's a new comment on "<?php echo $post->post_title ?>"

<?php echo $permalink ?> 

Comment: 

<?php echo $comment->comment_content ?> 

<?php
  return ob_get_clean();
}

// FatPanda Facebook Comments is not allowed to override comment notification e-mails:
  add_filter('fbc_can_fix_notifications', '__return_false');