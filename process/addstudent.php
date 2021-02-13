<?php
    include("../connect/connect.php");
    if(isset($_POST['submit'])){
        $u_fname  = $_POST['u_fname'];
        $u_name = $_POST['u_name'];
        $u_lname = $_POST['u_lname'];
        $u_idstu = $_POST['u_idstu'];
        $u_grade = $_POST['u_grade'];
        $u_room = $_POST['u_room'];
        $u_username = $_POST['u_username'];
        $u_password = $_POST['u_password'];

        $temp = explode('.',$_FILES['u_pic']['name']);
        $newName = round(microtime(true)). '.'.end($temp) ;

        move_uploaded_file($_FILES['u_pic']['tmp_name'], '../assets/user/' .$newName);

        $sql = "INSERT INTO `user` (`u_id`, `u_fname`, `u_name`, `u_lname`, `u_idstu`, `u_grade`, `u_room`, `u_pic`, `u_username`, `u_password`, `u_check`) 
        VALUES (NULL, '$u_fname', '$u_name', '$u_lname', '$u_idstu', '$u_grade', '$u_room', '".$newname."', '$u_username', '$u_password', 'U')";
        $result = mysqli_query($conn,$sql);
        if($result){
            header("location:../managestudent.php?status=successinsert");
        }else{
            header("location:../managestudent.php?status=errorinsert");
        }
        
    
       
    }



?>