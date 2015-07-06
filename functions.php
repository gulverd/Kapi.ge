<?php

add_theme_support('menus');
register_sidebar(array(
	'name' => 'right_sidebar',
	'id' => 'right-sidebar'
));?>
<?php
function get_content($id) {

    $post = get_page($id);
    $content = apply_filters('get_the_content', $post->post_content);
    echo $content;

} 
;?>