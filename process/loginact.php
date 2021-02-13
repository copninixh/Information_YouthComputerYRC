<?php
    session_start();
    include("connect.php");
    if(isset($_POST['submit'])){
        include("connect.php");
            $u_username = $_POST['u_username'];
            $u_password = $_POST['u_password'];
            $sql = "SELECT * FROM `user` WHERE `u_username` = '".$u_username."' AND `u_password` = '".$u_password."'";
            $result = mysqli_query($conn,$sql);
            $row = mysqli_fetch_array($result);
            if($row>0){
                $_SESSION["u_id"] = $row["u_id"] ;
                $_SESSION["u_fname"] = $row["u_fname"] ;
                $_SESSION["u_name"] = $row["u_name"] ;
                $_SESSION["u_lname"] = $row["u_lname"];
                $_SESSION["u_pic"] = $row["u_pic"];
                $_SESSION["u_idstu"] = $row["u_idstu"] ;
                $_SESSION["u_check"] = $row["u_check"];

                if($_SESSION["u_check"] == 'U'){
                    header('Location: ../manage.php');
                }else if($_SESSION["u_check"] == 'A'){
                    header('Location: ../admin.php');
                }   
               
                
            }else{
                header('Location: ../index.php?status=1');
            }
    }
?>
