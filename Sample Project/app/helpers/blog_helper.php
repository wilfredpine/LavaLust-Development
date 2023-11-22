<?php

function get_blog_title($blog_id)
{
    $LAVA = &lava_instance();
    $result = $LAVA->db->table('blog')
                        ->select('title')
                        ->where('id', $blog_id)
                        ->get();
    return $result['title'];
}


?>