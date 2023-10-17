<?php
function list_action()
{
    $posts = get_all_posts();
    require 'templates/list.php';
}

function show_action($id)
{
    $post = get_post_by_id($id);
    if ($post)
        require 'templates/show.php';
    else
        require 'templates/empty.php';
}
