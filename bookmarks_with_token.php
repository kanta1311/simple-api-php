<?php
include('db.php');
error_reporting(0);
$token=getallheaders()['token'];
if($token!=NULL){
    echo json_encode([
        "error"=>false,
        "message"=>"Bookmark list",
        "data"=>getBookmarkList()
    ]);
}else{
    echo json_encode([
        "error"=>true,
        "message"=>"Invalid token or token not found",
    ]);
}