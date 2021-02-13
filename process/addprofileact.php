<?php
    include("../connect/connect.php");
    if(isset($_POST['submit'])){
        $t_nameth = $_POST['t_nameth'];
        $t_nicknameth = $_POST['t_nicknameth'];
        $t_nameen = $_POST['t_nameen'];
        $t_nicknameen = $_POST['t_nicknameen'];
        $t_facebook = $_POST['t_facebook'];
        $t_email = $_POST['t_email'];
        $t_github = $_POST['t_github'];
        $t_status = $_POST['t_status'];
        $t_idstu = $_POST['t_idstu'];

        if($t_email == ''){
            $sql = "SELECT * FROM user WHERE u_idstu = '$t_idstu'";
            $query = mysqli_query($conn,$sql);
            $fetch = mysqli_fetch_array($query);
            $u_id = $fetch['u_id'];

            $temp = explode('.',$_FILES['t_pic']['name']);
            $newName = round(microtime(true)). '.'.end($temp) ;
    
            move_uploaded_file($_FILES['t_pic']['tmp_name'], '../assets/team/' .$newName);

            $sql2 = "INSERT INTO `team` (`t_id`, `t_nameth`, `t_nameen`, `t_nicknameth`, `t_nicknameen`, `t_facebook`, `t_email`, `t_github`, `t_pic`, `u_id`, `t_status`) 
            VALUES (NULL, '$t_nicknameth', '$t_nameen', '$t_nicknameth', '$t_nicknameen', '$t_facebook', '$t_email', '$t_github', '".$newName."', '$u_id', '0')";
            $result = mysqli_query($conn,$sql2);
            if($result){
                header("location:../manageprofile.php?status=successinsert");
            }else{
                header("location:../manageprofile.php?status=errorinsert");
            }
        }else{
            $sql = "SELECT * FROM user WHERE u_idstu = '$t_idstu'";
            $query = mysqli_query($conn,$sql);
            $fetch = mysqli_fetch_array($query);
            $u_id = $fetch['u_id'];

            $temp = explode('.',$_FILES['t_pic']['name']);
            $newName = round(microtime(true)). '.'.end($temp) ;
    
            move_uploaded_file($_FILES['t_pic']['tmp_name'], '../assets/team/' .$newName);

            $sql2 = "INSERT INTO `team` (`t_id`, `t_nameth`, `t_nameen`, `t_nicknameth`, `t_nicknameen`, `t_facebook`, `t_email`, `t_github`, `t_pic`, `u_id`, `t_status`) 
            VALUES (NULL, '$t_nicknameth', '$t_nameen', '$t_nicknameth', '$t_nicknameen', '$t_facebook', '$t_email', '$t_github', '".$newName."', '$u_id', '1')";
            $result = mysqli_query($conn,$sql2);
            if($result){
                header("location:../manageprofile.php?status=successinsert");
            }else{
                header("location:../manageprofile.php?status=errorinsert");
            }
        }
    }

?>