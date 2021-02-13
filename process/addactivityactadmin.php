<?php
    include("../connect/connect.php");
    if(isset($_POST['submit'])){
        $p_name = $_POST['p_name'];
        $p_ref = $_POST['p_ref'];
        $p_date = $_POST['p_date'];
        $p_detail = $_POST['p_detail'];
        $u_id = $_POST['u_id'];

        $sql ="INSERT INTO port (p_id , p_name , p_ref , p_date , p_detail , u_id) VALUES 
        (NULL , '$p_name', '$p_ref', '$p_date', '$p_detail', '$u_id')";
        $result = mysqli_query($conn,$sql);
        if($result){
            header("location:../addactivityforadmin.php?status=successinsert");
        }else{
            header("location:../addactivityforadmin.php?status=errorinsert");
        }
    }


?>