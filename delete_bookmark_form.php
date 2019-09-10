<?php
// error_reporting(0);
include('db.php');

$id = $_GET['id'];

if (!$id) {
    echo json_encode([
        "error" => true,
        "message" => "Bookmark id is messing",
    ]);
} else {
    if (idExist($id)) {
        if (idExist($id) && deleteBookmark($id)) {
            echo json_encode([
                "error" => false,
                "message" => "Bookmark Deleted Successfully",
            ]);
        } else {
            echo json_encode([
                "error" => true,
                "message" => "somthing went wrong Please try again",
            ]);
        }
    } else {
        echo json_encode([
            "error" => true,
            "message" => "Bookmark not found",
        ]);
    }
}
