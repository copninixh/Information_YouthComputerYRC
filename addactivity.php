<?php
	session_start();
	include("connect/connect.php");
	if(!$_SESSION['u_id']){
		header('Location: ./index.php?status=2');
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
			include_once 'component/navbar.php';
		?>
		
		<?php
			include_once 'component/slidebar.php';
		?>
		
		<!-- begin #content -->
		<div id="content" class="content">
			<div class="row">
				<div class="col-xl-12">
					<h1 class="page-header ">ระบบบริหารจัดการข้อมูล<small>&nbsp;Youth Computer YRC Information </small></h1>
				</div>
				<br>
			</div>

		

			

			<!-- begin panel -->
			<div class="row">
				
				<div class="col-xl-12">

				
			<div class="panel panel-inverse">
				<div class="panel-heading bg-pink">
					<h4 class="panel-title s12 fw-700" style="font-size: 15px">เพิ่มผลงาน/กิจกรรม</h4>
				</div>
				
				<div class="panel-body">
				<?php
						if(isset($_GET['status'])){
							$status = $_GET['status'];
							if($status == 'successedit'){

					?>
					<div class="alert alert-success fade show s1" style="font-size:15px">
						<span class="close" data-dismiss="alert">×</span>
						<strong>แก้ไขกิจกรรมแล้ว !</strong>
						คุณได้ทำการแก้ไขกิจกรรมแล้ว
						
					</div>
					<?php }else if($status == 'erroredit'){?>
					<div class="alert alert-danger fade show s1" style="font-size:15px">
						<span class="close" data-dismiss="alert">×</span>
						<strong>ไม่สามารถแก้ไขกิจกรรมได้ !</strong>
						กรุณาติดต่อผู้ดูแลระบบ
						
					</div>
					
					<?php }else if($status == 'notfoundid'){?>
					<div class="alert alert-danger fade show s1" style="font-size:15px">
						<span class="close" data-dismiss="alert">×</span>
						<strong>กิจกรรมที่ต้องการแก้ไขผิดพลาดหรือไม่มีอยู่จริง !</strong>
						กรุณาติดต่อผู้ดูแลระบบ
						
					</div>
					<?php }else if($status == 'successinsert'){?>
					<div class="alert alert-success fade show s1" style="font-size:15px">
						<span class="close" data-dismiss="alert">×</span>
						<strong>เพิ่มกิจกรรมแล้ว !</strong>
						คุณได้ทำการเพิ่มกิจกรรมแล้ว
					</div>
					<?php }else if($status == 'errorinsert'){?>
					<div class="alert alert-danger fade show s1" style="font-size:15px">
						<span class="close" data-dismiss="alert">×</span>
						<strong>ไม่สามารถเพิ่มกิจกรรมได้ !</strong>
						กรุณาติดต่อผู้ดูแลระบบ
					</div>
					<?php }else if($status == 'successdel'){?>
					<div class="alert alert-success fade show s1" style="font-size:15px">
						<span class="close" data-dismiss="alert">×</span>
						<strong>ลบกิจกรรมแล้ว !</strong>
						คุณได้ทำการลบกิจกรรมแล้ว
					</div>
					<?php }else if($status == 'erordel1'){?>
					<div class="alert alert-danger fade show s1" style="font-size:15px">
						<span class="close" data-dismiss="alert">×</span>
						<strong>ไม่สามารถลบกิจกรรมได้ !</strong>
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
						
        <a href="addactivityform.php" class="btn btn-pink">เพิ่มผลงาน</a>
				
					<hr>
					
                    
                    <?php 
                        $sql = "SELECT * FROM port WHERE u_id = '$_SESSION[u_id]'";
						$result = mysqli_query($conn,$sql);
						

						echo '<div class="table-responsive">';
							echo'<table class="table table-striped m-b-0 text-center s9" >';
							echo'<thead>';
							echo'<tr class="fw-700">';
							echo'<th width="100px">ปีการศึกษา</th>';
							echo'<th width="700px" >ชื่อกิจกรรม/ผลงาน</th>';
							echo'<th width="200px">แสดงหลักฐาน</th>';
							echo'<th width="200px">เพิ่มหลักฐาน</th>';
							echo'<th width="200px">แก้ไขผลงาน</th>';
							echo'<th width="200px">ลบกิจผลงาน</th>';
							echo'</tr>';
							echo'</thead>';
							echo'<tbody>';
                        while($row = mysqli_fetch_array($result)){
							echo'<tr>';
							echo'<td>' .$row['p_date'].  '</td>';
							echo'<td>' .$row['p_name'].  '</td>';
							$re = "SELECT * FROM picport WHERE u_id = '$_SESSION[u_id]' AND p_id  = '$row[p_id]'";
							$query = mysqli_query($conn,$re);
							
							echo '<td>';
							while($fetch2 = mysqli_fetch_array($query)){

								if($fetch2['p_file'] == ''){
									
								}else{
										echo"<img src=uploads/$fetch2[p_file] class='img-fluid'><br><br> ";	
										echo"<a href=process/deletepic.php?id=$fetch2[0] class='btn btn-danger'>ลบหลักฐาน</a><br><br>";
									
									}
							}
							
						
							echo '</td>';

							echo'<td>';

							echo "<form action=process/upload.php?id=$row[0] class='dropzone'>";
							echo '<div class="dz-message needsclick">
									คลิก/ดรอปไฟล์ภาพ<br />
									<span class="dz-note needsclick">
									(<strong>*สามารถเลือกได้สูงสุด 10 ไฟล์*</strong>)
									</span>
								</div>';
							echo '</form>';

							echo '</td>';

							echo"<td><a href=editactivity.php?id=$row[0] class='btn btn-pink'>แก้ไขผลงาน</a> ";
                            echo"<td><a onClick=\"javascript: return confirm('ต้องการลบ ($row[p_name]) ใช่หรือไม่? ไม่สามารถกู้คืนได้ภายหลัง! ');\" href=process/deleteactivity.php?id=$row[0] class='btn btn-danger'>ลบผลงาน</a> ";
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
		<!-- end #content -->

		<?php
			include_once 'component/footer.php';
		?>

		
		
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