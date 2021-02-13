<?php
    session_start();
    include("../connect/connect.php");

    if(isset($_GET['id'])){
        $pi_id = $_GET['id'];
        $sql = "DELETE FROM picport WHERE pi_id  = '$pi_id';";
        $result = mysqli_query($conn,$sql);

        if($result){
            header("location:../addactivity.php?status=1");
        }else{
            header("location:../addactivity.php?status=2");
        }

    }

   


?>