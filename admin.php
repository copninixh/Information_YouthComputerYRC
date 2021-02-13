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
		<div id="content" class="content wow fadeInUp">
			
            <div class="row ">
                <div class="col-xl-1 col-3">
                    <img src="assets/img/logo.png" class="img-fluid" alt="">
                </div>
                <div class="col-xl-11 col-7 mt-xl-3 mt-xs-2">
                    <h3 class="text-pink fw-700">สารสนเทศ ยุวคอมพิวเตอร์ | Information Youth Computer YRC</h3>
                    <h5>ยุวคอมพิวเตอร์ โรงเรียนยุพราชวิทยาลัย จังหวัดเชียงใหม่</h5>
                    <h5>สำนักงานเขตพื้นที่การศึกษามัธยมศึกษา เขต 34</h5>
                </div>
            </div>

            <hr>

            <div class="row">
              

                <div class="col-xl-4">
                    <div class="panel panel-inverse">
                        <div class="panel-heading bg-pink">
                            <h4 class="panel-title s12 fw-700" style="font-size: 15px">ประกาศ/แนะนำ</h4>
                        </div>
                        
                        <div class="panel-body">
                            <h3>ประกาศ / แจ้งเตือน / แนะนำ </h3>
                            <hr>

                            <?php 

                                $sql = "SELECT * FROM team WHERE u_id = '$_SESSION[u_id]'";
                                $result = mysqli_query($conn,$sql);

                                while($row = mysqli_fetch_array($result)){
                    
                            ?>


                            <?php if($row['t_status']== '0') {?>
                                <div class="alert alert-danger fade show s1" style="font-size:15px">
                                    <span class="close" data-dismiss="alert">×</span>
                                    <strong>ยังไม่ได้แก้ไขข้อมูลส่วนตัว !</strong>
                                    กรุณาอัพเดทข้อมูลส่วนตัว
                                    
                                </div>
                            <?php }else{?>
                                <div class="alert alert-success fade show s1" style="font-size:15px">
                                    <span class="close" data-dismiss="alert">×</span>
                                    <strong>อัพเดทข้อมูลส่วนตัวแล้ว !</strong>
                                    คุณได้ทำการอัพเดทข้อมูลส่วนตัวแล้ว
                                    
                                </div>
                            <?php }?>
                            
                            <?php }?>

                            <div class="note note-danger">
                                <div class="note-icon"><i class="fa fa-lightbulb"></i></div>
                                <div class="note-content">
                                    <h4><b>ข้อแนะนำ !</b></h4>
                                    <p>ควรใช้ PC/Notebook ในการเพิ่ม/แก้ไขข้อมูล </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end panel -->
                </div>

                <div class="col-xl-8">
                    <div class="panel panel-inverse">
                        <div class="panel-heading bg-pink">
                            <h4 class="panel-title s12 fw-700" style="font-size: 15px">สารสนเทศ</h4>
                        </div>
                        
                        <div class="panel-body">
                            <h3>แจ้งเตือนผู้ใช้งาน </h3>
                            <hr>

                            <?php 

                                $sql = "SELECT * FROM team WHERE t_status = 0 ";
                                $result = mysqli_query($conn,$sql);

                                while($row = mysqli_fetch_array($result)){
                    
                            ?>


                            
                                <div class="alert alert-danger fade show s1" style="font-size:15px">
                                    <span class="close" data-dismiss="alert">×</span>
                                    <strong>กรุณาอัพเดทข้อมูลส่วนตัว !</strong>
                                    <?php echo $row['t_nameth'] ?>
                                </div>
                            
                            
                            <?php }?>

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
<?php }  ?>