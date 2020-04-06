<?php

$submit = $_POST['submit'];
$place = strip_tags(($_POST['place']));
$user = strip_tags(($_POST['user']));

if($submit){
    include_once 'db.php';
    echo "..";

    if(!empty($place) ){
        $sql = "INSERT INTO list VALUES('$user','$place','no')";
        mysqli_query($conn,$sql);
        header("Location: list.php?list=success");
    }
}else{
    echo ".........";
    header("Location: list.php?list=out");
}