<?php


session_start();
if (isset($_SESSION['auth'])) {
    if ($_SESSION['auth'] != 1) {
        header("location:accountlogin.html");
    }
} else {
    if (isset($_COOKIE['auther'])) {
        if ($_COOKIE['auther'] != true) {
            header("location:accountlogin.html");
        }
    } else {
        header("location:accountlogin.html");
    }
}

include "../lib/db_connect.php";
$name = $email = $subject = $comments  = $message = "";

if (isset($_POST["submit"])) {

    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $subject = $_POST['Ammount'];
    $comments = $_POST['comment'];



     
        
            
       
            $sql = "INSERT INTO `payment`(`name`, `email`, `amount`, `comments`) 
            VALUES ('$name','$email','$subject','$comments')";

            if ($conn->query($sql)) {
                $message = "Message send";
                echo '<script>alert("' . $message . '")</script>';
            } else {
                die($conn->error);
            }
        }
        


?>