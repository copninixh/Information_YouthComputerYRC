<?php 
    include("../connect/connect.php");
    if($_POST['u_id'] == ''){
        
    }else{
        $u_fname  = $_POST['u_fname'];
        $u_id  = $_POST['u_id'];
        $u_name = $_POST['u_name'];
        $u_lname = $_POST['u_lname'];
        $u_idstu = $_POST['u_idstu'];
        $u_grade = $_POST['u_grade'];
        $u_room = $_POST['u_room'];
        $u_username = $_POST['u_username'];
        $u_password = $_POST['u_password'];
        $u_pic = $_FILES['u_pic']['name'];

        if($u_pic == ''){
            $sql = "UPDATE user SET
            u_fname = '$u_fname',
            u_name = '$u_name',
            u_lname = '$u_lname',
            u_idstu = '$u_idstu',
            u_grade = '$u_grade',
            u_room = '$u_room',
            u_username = '$u_username',
            u_password = '$u_password'
            WHERE u_id = '$u_id'
            ";
            $result = mysqli_query($conn,$sql);
            if($result){
                header("location:../managestudent.php?status=successedit");
            }else{
                header("location:../managestudent.php?status=erroredit");
            }
        }else{
            $temp = explode('.',$_FILES['u_pic']['name']);
            $newName = round(microtime(true)). '.'.end($temp) ;
    
            move_uploaded_file($_FILES['u_pic']['tmp_name'], '../assets/user/' .$newName);

            $sql = "UPDATE user SET
            u_fname = '$u_fname',
            u_name = '$u_name',
            u_lname = '$u_lname',
            u_idstu = '$u_idstu',
            u_grade = '$u_grade',
            u_room = '$u_room',
            u_pic = '".$newName."',
            u_username = '$u_username',
            u_password = '$u_password'
            WHERE u_id = '$u_id'
            ";
            $result = mysqli_query($conn,$sql);
            if($result){
                header("location:../managestudent.php?status=successedit");
            }else{
                header("location:../managestudent.php?status=erroredit2");
            }
            
        }
    }

?>