<?php
    include("../connect/connect.php");
    if(isset($_GET['id'])){
        $u_id = $_GET['id'];
        $sql = "DELETE FROM user WHERE u_id = '$u_id'";
        $result = mysqli_query($conn,$sql);
        if($result){
            header("location:../managestudent.php?status=successdel");
        }else{
            header("location:../managestudent.php?status=errordel1");
        }
    }

?>