<?php
// headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization,X-Requested-With');

// initializing api
include_once('../core/initialize.php');

// instantiate post
$post = new Post($db);

// get raw data
$data = json_decode(file_get_contents("php://input"));

$post->id = isset($_GET['id']) ? $_GET['id'] : false;

// $post->id = $data->id;
$post->title = $data->title;
$post->body = $data->body;
$post->author = $data->author;
$post->category_id = $data->category_id;


// create post
if ($post->id == false){
    echo json_encode(
        array('message' => 'You must input the ID')
    );
} else if($post->update()) {
    echo json_encode(
        array('message' => 'Post updated', 'id' => $post->id)
    );
} else {
    echo json_encode(
        array('message' => 'Post fail to updated')
    );
}
