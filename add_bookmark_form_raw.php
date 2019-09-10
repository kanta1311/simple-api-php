<?php
error_reporting(0);
include('db.php');

$request=json_decode(file_get_contents("php://input"));

$title=$request->title;
$link=$request->link;

if(!$title){
    echo json_encode([
        "error"=>true,
        "message"=>"Bookmark title is messing",
    ]);
}else if(!$link){
    echo json_encode([
        "error"=>true,
        "message"=>"Bookmark link is messing",
    ]);
}else{
    if(addBookmark($title,$link)){
        echo json_encode([
            "error"=>false,
            "message"=>"Bookmark added",
        ]);
    }else{
        echo json_encode([
            "error"=>true,
            "message"=>"Somthing went wrong please try again",
        ]);
    }
}