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
					<h1 class="page-header ">บริหารจัดการนักเรียน<small>&nbsp;Information Youth Computer YRC</small></h1>
				</div>
				<br>
			</div>

            <div class="row">

            
              

                <div class="col-xl-12">
                    <div class="panel panel-inverse">
                        <div class="panel-heading bg-pink">
                            <h4 class="panel-title s12 fw-700" style="font-size: 15px">บริหารจัดการนักเรียนในชุมนุม</h4>
                        </div>
                        
                        <div class="panel-body">
                            <h3 class="text-center">รายชื่อนักเรียนยุวคอมพิวเตอร์ รุ่นที่ 9 ปีการศึกษา 2563 โรงเรียนยุพราชวิทยาลัย จังหวัดเชียงใหม่</h3>
                            <hr>
                            <?php
						if(isset($_GET['status'])){
							$status = $_GET['status'];
							if($status == 'successedit'){

					?>
					<div class="alert alert-success fade show s1" style="font-size:15px">
						<span class="close" data-dismiss="alert">×</span>
						<strong>แก้ไขโปรไฟล์นักเรียนแล้ว !</strong>
						คุณได้ทำการแก้ไขโปรไฟล์นักเรียนแล้ว
						
					</div>
					<?php }else if($status == 'erroredit'){?>
					<div class="alert alert-danger fade show s1" style="font-size:15px">
						<span class="close" data-dismiss="alert">×</span>
						<strong>ไม่สามารถแก้ไขโปรไฟล์นักเรียนได้ !</strong>
						กรุณาติดต่อผู้ดูแลระบบ
						
					</div>
					
					<?php }else if($status == 'notfoundid'){?>
					<div class="alert alert-danger fade show s1" style="font-size:15px">
						<span class="close" data-dismiss="alert">×</span>
						<strong>โปรไฟล์นักเรียนที่ต้องการแก้ไขผิดพลาดหรือไม่มีอยู่จริง !</strong>
						กรุณาติดต่อผู้ดูแลระบบ
						
					</div>
					<?php }else if($status == 'successinsert'){?>
					<div class="alert alert-success fade show s1" style="font-size:15px">
						<span class="close" data-dismiss="alert">×</span>
						<strong>เพิ่มโปรไฟล์นักเรียนแล้ว !</strong>
						คุณได้ทำการเพิ่มโปรไฟล์นักเรียนแล้ว
					</div>
					<?php }else if($status == 'errorinsert'){?>
					<div class="alert alert-danger fade show s1" style="font-size:15px">
						<span class="close" data-dismiss="alert">×</span>
						<strong>ไม่สามารถเพิ่มโปรไฟล์นักเรียนได้ !</strong>
						กรุณาติดต่อผู้ดูแลระบบ
					</div>
					<?php }else if($status == 'successdel'){?>
					<div class="alert alert-success fade show s1" style="font-size:15px">
						<span class="close" data-dismiss="alert">×</span>
						<strong>ลบโปรไฟล์นักเรียนแล้ว !</strong>
						คุณได้ทำการลบโปรไฟล์นักเรียนแล้ว
					</div>
					<?php }else if($status == 'erordel1'){?>
					<div class="alert alert-danger fade show s1" style="font-size:15px">
						<span class="close" data-dismiss="alert">×</span>
						<strong>ไม่สามารถลบโปรไฟล์นักเรียนได้ !</strong>
						กรุณาติดต่อผู้ดูแลระบบ
					</div>
					<?php }else if($status == 'erordel2'){?>
					<div class="alert alert-danger fade show s1" style="font-size:15px">
						<span class="close" data-dismiss="alert">×</span>
						<strong>ข้อผิดพลาดฝั่ง SERVER !</strong>
						กรุณาติดต่อผู้ดูแลระบบ
					</div>
					<?php }else if($status == 'successup'){?>
					<div class="alert alert-danger fade show s1" style="font-size:15px">
						<span class="close" data-dismiss="alert">×</span>
						<strong>อัพโหลดรูปภาพแล้ว  !</strong>
						คุณได้ทำการอัพโหลดรูปภาพแล้ว
					</div>
					<?php }else if($status == 'errorup'){?>
					<div class="alert alert-danger fade show s1" style="font-size:15px">
						<span class="close" data-dismiss="alert">×</span>
						<strong>ไม่สามารถอัพโหลดรูปภาพได้  !</strong>
						กรุณาติดต่อผู้ดูแลระบบ
					</div>
					<?php }?>
					<?php }?>
                            <a href="addstudent.php" class="btn btn-purple"><i class="fas fa-user-plus fa-"></i> เพิ่มนักเรียน</a>
                            <hr>
                            

                            <?php 

                                $sql = "SELECT * FROM user ORDER BY u_id ASC";
                                $result = mysqli_query($conn,$sql);

                            
                                    echo '<div class="table-responsive">';
                                    echo'<table class="table table-striped m-b-0 text-center s9"  id="data-table-default" >';
                                    echo'<thead>';
                                    echo'<tr class="fw-700">';
                                    echo'<th width="200px">เลขประจำตัวนักเรียน</th>';
                                    echo'<th width="700px" >ชื่อ-สกุล นักเรียน</th>';
                                    echo'<th width="700px" >ชั้นมัธยมศึกษาปีที่</th>';
                                    echo'<th width="200px">แก้ไข</th>';
                                    echo'<th width="200px">ลบ</th>';
                             
                                    echo'</tr>';
                                    echo'</thead>';
                                    echo'<tbody>';
                                while($row = mysqli_fetch_array($result)){
                                    echo'<tr>';
                                    echo'<td>' .$row['u_idstu'].  '</td>';
                                    echo'<td>' .$row['u_fname'].$row['u_name'].'&nbsp' .$row['u_lname'].  '</td>';
                                    echo'<td>' .$row['u_grade'].'/' .$row['u_room'].  '</td>';
                                    echo"<td><a href=editstudent.php?id=$row[0] class='btn btn-pink'>แก้ไขนักเรียน</a> ";
                                    echo"<td><a onClick=\"javascript: return confirm('ต้องการลบ ($row[u_name]) ใช่หรือไม่? ไม่สามารถกู้คืนได้ภายหลัง! ');\" href=process/deletestudent.php?id=$row[0] class='btn btn-danger'>ลบนักเรียน</a> ";
                                    echo'</tr>';
                                }
                                echo'</tbody>';
                                echo'</table>';
                                echo '</div>';
                                
                    
                            ?>
                            


                            
                            
                          

                           
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