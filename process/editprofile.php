<?php
    include("../connect/connect.php");
    if($_POST['t_id'] == ''){
        header("location:../manageprofile.php?status=notfoundid");
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
    $t_pic = $_FILES['t_pic']['name'];

    if($t_pic == ''){
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
            header("location:../manageprofile.php?status=successedit");
        }else{
            header("location:../manageprofile.php?status=erroredit");
        }
    }else{
        $temp = explode('.',$_FILES['t_pic']['name']);
        $newName = round(microtime(true)). '.'.end($temp) ;

        move_uploaded_file($_FILES['t_pic']['tmp_name'], '../assets/team/' .$newName);
        $sql = "UPDATE team SET
       t_nameth = '$t_nameth',
       t_nicknameth = '$t_nicknameth',
       t_nameen = '$t_nameen',
       t_nicknameen = '$t_nicknameen',
       t_facebook = '$t_facebook',
       t_email = '$t_email',
       t_github = '$t_github',
       t_pic = '".$newName."',
       t_status = '$t_status'
       WHERE t_id = '$t_id'";

        $result = mysqli_query($conn,$sql);
        if($result){
            header("location:../manageprofile.php?status=successedit");
        }else{
            header("location:../manageprofile.php?status=erroredit");
        }
    }
    

?>