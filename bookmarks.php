<?php
include('db.php');
echo json_encode([
    "error"=>false,
    "message"=>"Bookmark list",
    "data"=>getBookmarkList()
]);