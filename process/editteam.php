<?php
    include("../connect/connect.php");
    if($_POST['t_id'] == ''){

    }

    $t_id = $_POST['t_id'];
    $t_nameth = $_POST['t_nameth'];
    $t_nicknameth = $_POST['t_nicknameth'];
    $t_nameen = $_POST['t_nameen'];
    $t_nicknameen = $_POST['t_nicknameen'];
    $t_facebook = $_POST['t_facebook'];
    $t_email = $_POST['t_email'];
    $t_github = $_POST['t_github'];
    $t_status = $_POST['t_status'];
    
    $sql = "UPDATE team SET
       t_nameth = '$t_nameth',
       t_nicknameth = '$t_nicknameth',
       t_nameen = '$t_nameen',
       t_nicknameen = '$t_nicknameen',
       t_facebook = '$t_facebook',
       t_email = '$t_email',
       t_github = '$t_github',
       t_status = '$t_status'
       WHERE t_id = '$t_id'";

    $result = mysqli_query($conn,$sql);
    if($result){
        header("location:../editprofile.php?status=successedit");
    }else{
        header("location:../editprofile.php?status=erroredit");
    }

    



?>