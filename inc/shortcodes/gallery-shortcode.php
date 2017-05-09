<?php 
// Remove built in shortcode
remove_shortcode('gallery', 'gallery_shortcode');
add_shortcode('gallery', 'carousel_shortcode');

// Replace with custom shortcode
function carousel_shortcode($attr) {
    $post = get_post();

    static $instance = 0;
    $instance++;

    if (!empty($attr['ids'])) {
        if (empty($attr['orderby'])) {
            $attr['orderby'] = 'post__in';
        }
        $attr['include'] = $attr['ids'];
    }

    $output = apply_filters('post_gallery', '', $attr);

    if ($output != '') {
        return $output;
    }

    if (isset($attr['orderby'])) {
        $attr['orderby'] = sanitize_sql_orderby($attr['orderby']);
        if (!$attr['orderby']) {
            unset($attr['orderby']);
        }
    }

    extract(shortcode_atts(array(
        'order' => 'ASC',
        'orderby' => 'menu_order ID',
        'id' => $post->ID,
        'itemtag' => '',
        'icontag' => '',
        'captiontag' => '',
        'columns' => 3,
        'size' => 'thumbnail',
        'include' => '',
        'link' => '',
        'exclude' => ''
                    ), $attr));

    $id = intval($id);

    if ($order === 'RAND') {
        $orderby = 'none';
    }

    if (!empty($include)) {
        $_attachments = get_posts(array('include' => $include, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby));

        $attachments = array();
        foreach ($_attachments as $key => $val) {
            $attachments[$val->ID] = $_attachments[$key];
        }
    } elseif (!empty($exclude)) {
        $attachments = get_children(array('post_parent' => $id, 'exclude' => $exclude, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby));
    } else {
        $attachments = get_children(array('post_parent' => $id, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby));
    }

    if (empty($attachments)) {
        return '';
    }

    //Output Begins Here
    $output = '<div id="carousel-gallery" class="carousel slide" data-ride="carousel">';
    $output .= '  <ol class="carousel-indicators">';
    $indicator = 0;
    foreach ($attachments as $id => $attachment) {
      if ( $indicator == '0' ) { $active_indicator = ' class="active"'; } else { $active_indicator = ''; }      
      $output .= '    <li data-target="#carousel-gallery" data-slide-to="' . $indicator . '"' . $active_indicator . '></li>';
      $indicator++;      
    }
    $output .= '  </ol>';
    $output .= '  <div class="carousel-inner" role="listbox">'; 
		$size = 'full';
    
    //Begin counting slides to set the first one as the active class
    $counter = 0;
    foreach ($attachments as $id => $attachment) {
  		$image_alt = get_post_meta( $id, '_wp_attachment_image_alt', true);
      $link = isset($attr['link']) && 'file' == $attr['link'] ? wp_get_attachment_link($id, $size, false, false) : wp_get_attachment_link($id, $size, true, false);

      $image_src_url = wp_get_attachment_image_src($id, $size);
      if ( $counter == '0' ) { $active = ' active'; } else { $active = ''; }      
      $output .= '<div class="item' . $active . '">';
      $output .= '  <img src="' . ( get_vt_resize( $id, 1200, 675, true )['url'] ) . '" alt="'. $image_alt . '">';
      $output .= '</div><!-- .item -->';
      $counter++;
    }

    $output .= '        </div><!-- .carousel-inner -->';
    $output .= '      </div><!-- .carousel -->';

    return $output;
}