<?php
    session_start();
    if(isset($_SESSION['auth'])){
        if($_SESSION['auth']!=1){
            // header("location:teacher.php");
        }
    }
    else{
        if(isset($_COOKIE['auther'])){
            if($_COOKIE['auther']!=true){
                // header("location:teacher.php");
            }
        }
        else{
            // header("location:teacher.php");
        }
    }


    // include "../lib/db_connect.php";
    $src="";
    if(isset($_GET['id'])){
        $id = $_GET['id'];

        


        $sql = "DELETE FROM teacher WHERE id = $id";

        if($conn -> query($sql)){
            header("location:teacher.php");
        }
        else{
            die($conn -> error);
        }
    }
    else{
        // header("location:teacher.php");
    }

?>