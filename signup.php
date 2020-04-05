<?php

session_start();
$_SESSION["eror1"]=0;
$submit = $_POST['submit'];
$user = strip_tags(($_POST['user']));
$email = strip_tags(($_POST['email']));
$pswd = strip_tags(($_POST['pswd']));


if($submit){
include_once 'db.php';
//$sql = "INSERT INTO users VALUES('$user','$email','$pswd')";
//                mysqli_query($conn,$sql);



if(empty($user) || empty($email) || empty($pswd) ){
    header("Location: signup.php?signup=empty");
    exit();
}else{
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        header("Location: index.php?signup=email");
        exit();
    }else{
        $sql="SELECT * FROM users WHERE uname = '$user'";
        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result) > 0){
            session_start();
            $_SESSION["eror1"]=2;
            header("Location: index.php?signup=usertaken");
            exit();  
        }else{
            $sql = "INSERT INTO users VALUES('$user','$email','$pswd')";
            mysqli_query($conn,$sql);
            header("Location: index.php");
            exit();
        }
       }
    }
}
else{
    header("Location: signup.php?signup=out");
    exit();
}  

       /*       if($submit){

                    include_once 'db.php';
                
                    $user = mysqli_real_escape_string($conn, $_POST['user']);   
                    $email = mysqli_real_escape_string($conn, $_POST['email']);   
                    $pswd = mysqli_real_escape_string($conn, $_POST['password']);   
                
                    echo $user;
                
                    if(empty($user) || empty($email) || empty($pswd) ){
                        header("Location: signup.php?signup=empty");
                        exit();
                    }else{
                        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                            header("Location: signup.php?signup=email");
                            exit();
                        }else{
                            $sql="SELECT * FROM users WHERE uname = '$user'";
                            $result = mysqli_query($conn,$sql);
                
                            if(mysqli_num_rows($result) > 0){
                                header("Location: signup.php?signup=usertaken");
                                exit();  
                            }else{
                                $sql = "INSERT INTO users VALUES('$user','$email','$pswd')";
                                mysqli_query($conn,$sql);
                                
                            }
                        }
                    }

                }else{
                    header("Location: signup.php?signup=out");
                    exit();
                }       */