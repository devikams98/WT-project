<?php


session_start();
            $_SESSION["eror"]=0;
$submit = $_POST['submit'];
$user = strip_tags(($_POST['user']));
$pswd = strip_tags(($_POST['pswd']));


if($submit){
    include_once 'db.php';
    if(empty($user) || empty($pswd) ){
        header("Location: index.php?login=empty");
        exit();
    }else{
        $sql= "SELECT * FROM users WHERE uname='$user' && pswd='$pswd'";
        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result) < 1){
            session_start();
            $_SESSION["eror"]=1;
            header("Location: index.php?login=eror");
            exit();  
        }else{
            session_start();
            $_SESSION["username"]=$user;
            header("Location: list.php");
        }
    }
}