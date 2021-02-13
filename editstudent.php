<?php
	session_start();
	include("connect/connect.php");
	if(!$_SESSION['u_id']){
            header('Location: ./index.php');
	}else{
        if($_SESSION["u_check"]=='U'){
            header('Location: ./manage.php');
        }else{

        

?>
<?php
    if(isset($_GET['id'])){
        $u_id = $_GET['id'];
        $sql = "SELECT * FROM user WHERE u_id = '$u_id'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result);
    }


?>
<!DOCTYPE html>
<html lang="en">
		<?php
			include_once 'component/header.php';
		?>
<body class="">
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade show">
		<div class="material-loader">
			<svg class="circular" viewBox="25 25 50 50">
				<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"></circle>
			</svg>
			<div class="message">โหลด...</div>
		</div>
	</div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade page-sidebar-fixed page-header-fixed page-with-wide-sidebar">
		<?php
			include_once 'component/navbar2.php';
		?>
		
		<?php
			include_once 'component/slidebar2.php';
		?>
		
		<!-- begin #content -->
		<div id="content" class="content">
			<div class="row">
				<div class="col-xl-12">
					<h1 class="page-header ">แก้ไขนักเรียน<small>&nbsp;Information Youth Computer YRC</small></h1>
				</div>
				<br>
			</div>

            <div class="row">

            
              

                <div class="col-xl-12">
                    <div class="panel panel-inverse">
                        <div class="panel-heading bg-pink">
                            <h4 class="panel-title s12 fw-700" style="font-size: 15px">ระบบแก้ไขนักเรียน</h4>
                        </div>
                        
                        <div class="panel-body">
                            
                            <form action="process/editstudentact.php" method="post" enctype="multipart/form-data">
                                <h4>ส่วนที่ 1 กรอกข้อมูลส่วนตัว</h4>
                                <hr>

                                <div class="form-group row m-b-15 d-none">
                                    <label class="col-form-label col-md-2">ไอดี</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control m-b-5" placeholder="ชื่อ" name="u_id" value="<?php echo $row['u_id']; ?>" readonly required>
                                        </div>
                                </div>

                                <div class="form-group row m-b-15">
                                    <label class="col-form-label col-md-2">คำนำหน้าชื่อ</label>
                                        <div class="col-md-10">
                                            <select class="form-control" name="u_fname" id="u_fname" required>
                                                    <option><?php echo $row['u_fname']; ?></option>
                                                    <option>เด็กหญิง</option>
                                                    <option>นางสาว</option>
                                                    <option>เด็กชาย</option>
                                                    <option>นาย</option>
                                            </select>
                                        </div>
                                </div>
                                
                                <div class="form-group row m-b-15">
                                    <label class="col-form-label col-md-2">ชื่อ</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control m-b-5" placeholder="ชื่อ" name="u_name" value="<?php echo $row['u_name']; ?>" required>
                                        </div>
                                </div>

                                <div class="form-group row m-b-15">
                                    <label class="col-form-label col-md-2">สกุล</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control m-b-5" placeholder="สกุล" name="u_lname"  value="<?php echo $row['u_lname']; ?>"  required>
                                        </div>
                                </div>
                                
                                <div class="form-group row m-b-15">
                                    <label class="col-form-label col-md-2">เลขประจำตัวนักเรียน</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control m-b-5" placeholder="เลขประจำตัวนักเรียน" name="u_idstu" value="<?php echo $row['u_idstu']; ?>"  required>
                                        </div>
                                </div>
                            
                                <h4 class="mt-5">ส่วนที่ 2 ระดับชั้นมัธยมศึกษา</h4>
                                <hr>

                                <div class="form-group row m-b-15">
                                    <label class="col-form-label col-md-1">ชั้นมัธยมศึกษาปีที่</label>
                                        <div class="col-md-5">
                                            <select class="form-control" name="u_grade" id="u_grade" required>
                                                    <option><?php echo $row['u_grade']; ?></option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                    <option>6</option>
                                            </select>
                                        </div>
                                        <label class="col-form-label col-md-1">ห้องที่</label>
                                        <div class="col-md-5">
                                            <select class="form-control" name="u_room" id="u_room" required>
                                                    <option><?php echo $row['u_room']; ?></option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                    <option>6</option>
                                                    <option>7</option>
                                                    <option>8</option>
                                                    <option>9</option>
                                                    <option>10</option>
                                                    <option>11</option>
                                                    <option>12</option>
                                                    <option>13</option>
                                                    <option>14</option>
                                                    <option>15</option>
                                                    <option>16</option>
                                            </select>
                                        </div>
                                </div>

                                <h4 class="mt-5">ส่วนที่ 3 บัญชีผู้ใช้</h4>
                                <hr>

                                <div class="form-group row m-b-15">
                                    <label class="col-form-label col-md-2">ชื่อบัญชีผู้ใช้</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control m-b-5" placeholder="ชื่อบัญชีผู้ใช้" name="u_username" value="<?php echo $row['u_username']; ?>"  required>
                                        </div>
                                </div>

                                <div class="form-group row m-b-15">
                                    <label class="col-form-label col-md-2">รหัสผ่านชื่อบัญชีผู้ใช้</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control m-b-5" placeholder="รหัสผ่านชื่อบัญชีผู้ใช้" name="u_password" value="<?php echo $row['u_password']; ?>"  required>
                                        </div>
                                </div>

                                <div class="form-group row m-b-15">
                                    <label class="col-form-label col-md-2">รูปโปร์ไฟล์</label>
                                        <div class="col-md-10">
                                            <input type="file" class="form-control m-b-5" name="u_pic" value="<?php echo $row['u_pic']; ?>">
                                            <?php if($row['u_pic'] == ''){?>
                                                <img src="assets/status/404.png" class="img-fluid">
                                            <?php }else{?>
                                                <img src="assets/user/<?php echo $row['u_pic']; ?>" class="img-fluid">
                                            <?php }?>
                                        </div>
                                        
                                </div>

                                

                               
                                

                            

                                <input type="submit" class="btn btn-pink w-100" style="color: white" name="submit" value="แก้ไขนักเรียน">
                            </form>
                            
                            
                            


                            
                            
                          

                           
                        </div>
                    </div>
                    <!-- end panel -->
                </div>
                

                
            </div>
                

			</div>
        <?php
			include_once 'component/footer.php';
		?>
        
		</div>
		<!-- end #content -->

		

		
		
		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-pink btn-scroll-to-top fade" data-click="scroll-top"><i class="material-icons">keyboard_arrow_up</i></a>
		<!-- end scroll to top btn -->
	</div>
	<!-- end page container -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<?php
		include_once 'component/jslink.php';
	?>

	<!-- ================== END BASE JS ================== -->
</body>
</html>
<?php }  ?>
<?php }  ?>