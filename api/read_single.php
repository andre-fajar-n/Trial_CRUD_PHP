<?php
// headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

// initializing api
include_once('../core/initialize.php');

// instantiate post
$post = new Post($db);

$post->id = isset($_GET['id']) ? $_GET['id'] : die();
$post->read_single();

if ($post->title == null){
    echo json_encode(array('message' => 'No posts found.'));
} else {
    
    $post_arr = array(
        'id'            => $post->id,
        'title'         => $post->title,
        'body'          => $post->body,
        'author'        => $post->author,
        'category_id'   => $post->category_id,
        'category_name' => $post->category_name,
    );
    
    print_r(json_encode($post_arr));
}