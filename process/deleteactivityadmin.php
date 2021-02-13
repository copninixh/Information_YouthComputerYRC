<?php
    include("../connect/connect.php");
    if(isset($_GET['id'])){
        $p_id = $_GET['id'];
        $sql = "DELETE FROM port WHERE p_id = '$p_id'";
        $result = mysqli_query($conn,$sql);
        if($result){
            $sql2 = "DELETE FROM picport WHERE p_id = '$p_id'";
            $result2 = mysqli_query($conn,$sql2);
            if($result2){
                header("location:../addactivityforadmin.php?status=successdel");
            }else{
                header("location:../addactivityforadmin.php?status=erordel");
            }
        }else{
            header("location:../addactivityforadmin.php?status=erordel2");
        }
    }
?>