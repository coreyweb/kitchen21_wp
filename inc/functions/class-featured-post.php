<?php
// Custom Meta Boxes for featured posts
function mbex_init() {
  add_action('add_meta_boxes', 'mbex_add_meta_boxes');
  add_action('save_post', 'mbex_save_post');
}
add_action('init', 'mbex_init');

function mbex_add_meta_boxes() {
  add_meta_box(
    'mbex', /* unique HTML id */
    'Post Details', /* title that appears on meta box */
    'mbex_meta_box', /* function that generates meta box body */
    'post', /* or page, or a custom type */
    'side', /* place this in the sidebar */
    'high' /* priority: high = top, low = bottom */
  );
}

function mbex_meta_box($post) {
  wp_nonce_field('mbex', 'mbex_nonce');
  ?>
      <p>
        <input type="checkbox" name="featured_story" id="featured_story" value="1" <?php if (get_post_meta($post->ID, 'featured_story', true)) echo 'checked="checked"' ?> />
        <label for="featured_story">
          Make this a featured post in category
        </label>
      </p>

      <p>
        <label for="featured_alt">“Featured Story” label override:</label>
        <input type="text" id="featured_alt" name="featured_alt" size="30" value="<?php echo esc_attr(get_post_meta($post->ID, 'featured_alt', true)) ?>" />
      </p>

      <hr>
      
      <p>
        <label for="featured_alt">“Read More” label override:</label>
        <input type="text" id="read_more_label" name="read_more_label" size="30" value="<?php echo esc_attr(get_post_meta($post->ID, 'read_more_label', true)) ?>" />
      </p>
      
  <?php
}

function mbex_save_post($post_id) {
  if (wp_verify_nonce($_POST['mbex_nonce'], 'mbex')) {
    update_post_meta($post_id, 'featured_story', $_POST['featured_story']);
    update_post_meta($post_id, 'featured_alt', $_POST['featured_alt']);
    update_post_meta($post_id, 'read_more_label', $_POST['read_more_label']);
  }
}
