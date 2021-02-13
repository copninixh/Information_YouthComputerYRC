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
					<h1 class="page-header ">บริหารจัดการโปรไฟล์นักเรียน<small>&nbsp;Information Youth Computer YRC</small></h1>
				</div>
				<br>
			</div>

            <div class="row">

            
			

                <div class="col-xl-12">
                    <div class="panel panel-inverse">
                        <div class="panel-heading bg-pink">
                            <h4 class="panel-title s12 fw-700" style="font-size: 15px">บริหารจัดการโปรไฟล์นักเรียนในชุมนุม</h4>
                        </div>
                        
                        <div class="panel-body">
                            <h3 class="text-center">โปรไฟล์นักเรียนยุวคอมพิวเตอร์ โรงเรียนยุพราชวิทยาลัย จังหวัดเชียงใหม่</h3>
                            <hr>
							
							
							
                            <?php
						if(isset($_GET['status'])){
							$status = $_GET['status'];
							if($status == 'successedit'){

					?>
					<div class="alert alert-success fade show s1" style="font-size:15px">
						<span class="close" data-dismiss="alert">×</span>
						<strong>แก้ไขนักเรียนแล้ว !</strong>
						คุณได้ทำการแก้ไขนักเรียนแล้ว
						
					</div>
					<?php }else if($status == 'erroredit'){?>
					<div class="alert alert-danger fade show s1" style="font-size:15px">
						<span class="close" data-dismiss="alert">×</span>
						<strong>ไม่สามารถแก้ไขนักเรียนได้ !</strong>
						กรุณาติดต่อผู้ดูแลระบบ
						
					</div>
					
					<?php }else if($status == 'notfoundid'){?>
					<div class="alert alert-danger fade show s1" style="font-size:15px">
						<span class="close" data-dismiss="alert">×</span>
						<strong>นักเรียนที่ต้องการแก้ไขผิดพลาดหรือไม่มีอยู่จริง !</strong>
						กรุณาติดต่อผู้ดูแลระบบ
						
					</div>
					<?php }else if($status == 'successinsert'){?>
					<div class="alert alert-success fade show s1" style="font-size:15px">
						<span class="close" data-dismiss="alert">×</span>
						<strong>เพิ่มนักเรียนแล้ว !</strong>
						คุณได้ทำการเพิ่มนักเรียนแล้ว
					</div>
					<?php }else if($status == 'errorinsert'){?>
					<div class="alert alert-danger fade show s1" style="font-size:15px">
						<span class="close" data-dismiss="alert">×</span>
						<strong>ไม่สามารถเพิ่มนักเรียนได้ !</strong>
						กรุณาติดต่อผู้ดูแลระบบ
					</div>
					<?php }else if($status == 'successdel'){?>
					<div class="alert alert-success fade show s1" style="font-size:15px">
						<span class="close" data-dismiss="alert">×</span>
						<strong>ลบนักเรียนแล้ว !</strong>
						คุณได้ทำการลบนักเรียนแล้ว
					</div>
					<?php }else if($status == 'erordel1'){?>
					<div class="alert alert-danger fade show s1" style="font-size:15px">
						<span class="close" data-dismiss="alert">×</span>
						<strong>ไม่สามารถลบนักเรียนได้ !</strong>
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
					<a href="addprofile.php" class="btn btn-purple"><i class="fas fa-user-plus fa-"></i> เพิ่มโปรไฟล์นักเรียน</a>
					<hr>
                            
                            

                            <?php 
                        $sql = "SELECT * FROM team WHERE t_status ='1'";
						$result = mysqli_query($conn,$sql);
						

						echo '<div class="table-responsive">';
							echo'<table class="table table-striped m-b-0 text-center s9" id="data-table-default">';
							echo'<thead>';
							echo'<tr class="fw-700">';
							echo'<th width="400px">เลขประจำตัวนักเรียน</th>';
							echo'<th width="500px">รูปโปรไฟล์</th>';
                            echo'<th width="500px">ชื่อ ภาษาไทย</th>';
							echo'<th width="500px">ชื่อ ภาษาอังกฤษ</th>';
							echo'<th width="500px">อีเมล</th>';
							
							echo'<th width="200px">แก้ไขโปรไฟล์</th>';
							echo'<th width="200px">ลบโปรไฟล์</th>';
							
							
							echo'</tr>';
							echo'</thead>';
							echo'<tbody>';
                        while($row = mysqli_fetch_array($result)){
							echo'<tr>';
							echo '<td>' .substr($row['t_email'],0,5). '</td>';
							if($row['t_pic'] == ''){
								echo"<td><img src='assets/status/404.png' class='img-fluid'></td> ";
							}else{
								echo"<td> </td>";
							}
							echo'<td>' .$row['t_nameth'].  '</td>';
							echo'<td>' .$row['t_nameen'].  '</td>';
							echo'<td>' .$row['t_email'].  '</td>';
							
							
                      
							
                           
							echo"<td><a href=editprofileall.php?id=$row[0] class='btn btn-warning'>แก้ไขโปรไฟล์</a></td> ";
							echo"<td><a href=process/deleteprofile.php?id=$row[0] class='btn btn-danger'>ลบโปรไฟล์</a></td> ";

                            
							echo'</tr>';
						}
						echo'</tbody>';
						echo'</table>';
						echo '</div>';
					?>
					<hr>

					<p style="font-size: 15px">
						<b class="text-pink">ข้อมูลอัพเดทเมื่อ : </b>
						<?php
							
							$year = date("Y");
							$date = date("D");
							if($date == 'Tue'){
								echo 'วันอังคาร ที่ ';
							}
							else if($date == 'Wed'){
								echo 'วันพุธ ที่ ';
							}
							else if($date == 'Thr'){
								echo 'วันพฤหัสบดี ที่ ';
							}else if($date == 'Fri'){
								echo 'วันศุกร์ ที่ ';
							}else if($date == 'Sat'){
								echo 'วันเสาร์ ที่ ';
							}else if($date == 'Sun'){
								echo 'วันอาทิตย์ ที่ ';
							}else if($date == 'Mon'){
								echo 'วันจันทร์ ที่ ';
							}

							
 

							
							$time = date("d");
							echo $time;

							$month = date("m");
							if($month == '04'){
								echo ' เมษายน ';
							}else if($month == '05'){
								echo ' พฤษภาคม ';
							}else if($month == '06'){
								echo ' มิถุนายน ';
							}else if($month == '07'){
								echo ' กรกฎาคม ';
							}else if($month == '08'){
								echo ' สิงหาคม ';
							}else if($month == '09'){
								echo ' กันยายน ';
							}else if($month == '10'){
								echo ' ตุลาคม ';
							}else if($month == '11'){
								echo ' พฤศจิกายน ';
							}else if($month == '12'){
								echo ' ธันวาคม ';
							}else if($month == '01'){
								echo ' มกราคม ';
							}else if($month == '02'){
								echo ' กุมภาพันธ์ ';
							}else if($month == '03'){
								echo ' มีนาคม ';
							}
							
							$yearbud = $year += 543;
							echo $yearbud;

							$th=mktime(gmdate("H")+7,gmdate("i"));
							$format="H:i";
							
							$str=date($format,$th);
							echo " เวลา: $str น.";

						?>
					</p>
                            


                            
                            
                          

                           
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