<?php
// headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: DELETE');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization,X-Requested-With');

// initializing api
include_once('../core/initialize.php');

// instantiate post
$post = new Post($db);

// get raw data
$post->id = isset($_GET['id']) ? $_GET['id'] : false;

// create post
if ($post->delete()){
    echo json_encode(
        array('message' => 'Post deleted')
    );
} else {
    echo json_encode(
        array('message' => 'Post fail to deleted')
    );
}