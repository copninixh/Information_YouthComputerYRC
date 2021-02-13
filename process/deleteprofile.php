<?php
    if(isset($_GET['id'])){
        $t_id = $_GET['id'];
        $sql = "DELETE FROM team WHERE t_id = '$t_id'";
        $result = mysqli_query($conn,$sql);
        if($result){
            header("location:../manageprofile.php?status=successdel");
        }else{
            header("location:../manageprofile.php?status=errordel1");
        }
    }



?>