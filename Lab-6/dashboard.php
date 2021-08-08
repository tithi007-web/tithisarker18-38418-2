<?php
session_start();
if(isset($_SESSION['auth'])){
    if($_SESSION['auth']!=1){
        header("location:accountlogin.html");
    }
}
else{
    if(isset($_COOKIE['auther'])){
        if($_COOKIE['auther']!=true){
            header("location:accountlogin.html");
        }
    }
    else{
        header("location:accountlogin.html");
    }
}
include "lib/db_connect.php";
$id = $username  = $message = "";

$id = $_SESSION['userid'];
$sql = "SELECT * FROM account where id=$id";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($rows = $result->fetch_assoc()) {
        $username= $rows['username'];
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="dashboard.css" media="screen"/>
    <title>Dashboard Page</title>
</head>
<body>
    <form>
        
        
            <fieldset class="header">

                
                <font color="black" size="8"><b><i> ABC Tuition Care</i></b></font></p>

            <p align="right">Logged in as  <?php echo $username; ?>

                <?php if (isset($_SESSION["userName"])) {
                    echo $_SESSION["userName"];
                }?>

                <a href="logout.php">| Logout</a> </p>




                
</fieldset>
<br><p align="center"> 
                <br><br><br><br><br><p align="center"><font size="20" color="white"> ACCOUNTS  </font></p>  


<hr style="border: 0.2px solid;">
<p>
            <ul><br>
            <center>
            <fieldset style="width: 5%" 
            <tr>
                <td><li><a href="teacher/paymentissue.html"> <font color="black" size="5"><p align="right">TEACHER</p></font></li></a></td>
            </tr>


<tr>
                <td><li><a href="editProfile/viewprofile.php"> <font color="black" size="5"><p align="right"> VIEW PROFILE </p></font></li></a></td>
            </tr></ul></p>



<tr>
<tr>
                <td><li><a href="editProfile/editprofile.php"> <font color="black" size="5"><p align="right"> Edit PROFILE </p></font></li></a></td>
            </tr></ul></p>



<tr>
                <td><li><a href="editProfile/changepassword.php"> <font color="black" size="5"><p align="right"> FORGOT PASSWORD </p></font></li></a></td>
            </tr></ul></p>


            <tr>
                <td><li><a href="logout.php"> <font color="black" size="5"><p align="right"> LOGOUT </p></font></li></a></td>
            </tr></ul></p>

            
</fieldset>
</center>



          
   
    </form>
   
</body>
<section class="footerSec">
<div class="footer">
<br/>
<p align=center><b>Copyright <span>&#169;</span>2021</footer></b></p>
</div>
</section>

</html>

