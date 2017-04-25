<?php
// add_filter('embed_oembed_html', 'my_embed_oembed_html', 99, 4);
// function my_embed_oembed_html($html, $url, $attr, $post_id) {
//   return '<div class="block"><div class="video-wrap"><div class="embed-responsive embed-responsive-16by9">' . $html . '</div></div></div>';
// }

add_filter('embed_oembed_html', 'my_embed_oembed_html', 99, 4);
function my_embed_oembed_html($html,$url,$args){
  $url_string = parse_url($url, PHP_URL_QUERY);
  parse_str($url_string, $id);
  if (isset($id['v'])) {
      return '<div class="module"><div class="video-wrap"><div class="embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item" src="https://www.youtube.com/embed/' .$id['v'].'?rel=0&amp;controls=1&amp;&amp;showinfo=0&amp;modestbranding=0" allowfullscreen=""></iframe></div></div></div>';
  }
  return $html;
}