<?php
    include("../connect/connect.php");
    if($_POST['p_id']== ''){
        header("location:../addactivity.php?status=notfoundid");
    }
    $p_id = $_POST['p_id'];
    $p_name = $_POST['p_name'];
    $p_ref = $_POST['p_ref'];
    $p_date = $_POST['p_date'];
    $p_detail  = $_POST['p_detail'];

    $sql = "UPDATE port SET
        p_name = '$p_name',
        p_ref = '$p_ref',
        p_date = '$p_date',
        p_detail = '$p_detail'
        WHERE p_id = '$p_id'
    ";
    $result = mysqli_query($conn,$sql);
    if($result){
        header("location:../addactivity.php?status=successedit");
    }else{
        header("location:../addactivity.php?status=erroredit");
    }   

?>
