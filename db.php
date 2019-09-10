<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
$dbcon = new mysqli("localhost", "root", "", "test_demo");
if ($dbcon->connect_error) {
    die("error found" . $dbcon->connect_error);
}

function getBookmarkList()
{
    global $dbcon;
    $sql = $dbcon->query("SELECT * FROM `bookmark`");
    if ($sql->num_rows > 0) {
        while ($row = $sql->fetch_assoc()) { 
            $data[]=[
                "title"=>$row['title'],
                'link'=>$row['link'],
                'id'=>$row['id'],
            ];
        }

        return $data;
    }else{
        return [];
    }
}
function idExist($id)
{
    global $dbcon;
    $sql = $dbcon->query("SELECT * FROM `bookmark` WHERE `bookmark`.`id`=$id");
    return $sql->num_rows > 0;
}

function addBookmark($title,$link){
    global $dbcon;
    return $dbcon->query("INSERT INTO `bookmark` (`id`, `title`, `link`) VALUES (NULL, '$title', '$link')");
}

function deleteBookmark($id){
    global $dbcon;
    return $dbcon->query("DELETE FROM `bookmark` WHERE `bookmark`.`id` = $id") === true;
}