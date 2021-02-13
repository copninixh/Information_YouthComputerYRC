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
        $p_id = $_GET['id'];
        $sql = "SELECT * FROM port WHERE p_id = '$p_id'";
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
					<h1 class="page-header ">ผลงานของนักเรียน<small>&nbsp;Information Youth Computer YRC</small></h1>
				</div>
				<br>
			</div>

            <div class="row">
            

            
              

                <div class="col-xl-12 s1">
                    <div class="panel panel-inverse">
                        <div class="panel-heading bg-pink">
                            <h4 class="panel-title s12 fw-700" style="font-size: 15px">ผลงานนักเรียนยุวคอมพิวเตอร์</h4>
                        </div>
                        
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-xl-1 col-3">
                                    <img src="assets/img/logo.png" class="img-fluid" alt="">
                                </div>
                                <div class="col-xl-11 col-7 mt-xl-3 mt-xs-2">
                                    <h3 class="text-pink fw-700"><?php echo $row['p_name'] ?></h3>
                                    <h5>ผลงานนักเรียนยุวคอมพิวเตอร์ โรงเรียนยุพราชวิทยาลัย จังหวัดเชียงใหม่</h5>
                                    <h5>สำนักงานเขตพื้นที่การศึกษามัธยมศึกษา เขต 34</h5>
                                </div>
                            </div>

                            
                            <hr>
                            <?php
                                $sql3 = "SELECT * FROM team WHERE u_id = '$row[u_id]'";
                                $result3 = mysqli_query($conn,$sql3);
                                $fetch3 = mysqli_fetch_array($result3);
                            ?>
                            <p style="font-size: 15px"><b class="text-pink">ผู้เข้าร่วม : </b><?php echo $fetch3['t_nameth'] ?> </p>
                            <p style="font-size: 15px"><b class="text-pink">จัดโดย : </b><?php echo $row['p_ref'] ?> </p>
                            <p style="font-size: 15px"><b class="text-pink">ปีการศึกษา : </b><?php echo $row['p_date'] ?> </p>
                            <?php
                                $sql2 = "SELECT * FROM picport WHERE p_id = '$row[p_id]' ";
                                $query = mysqli_query($conn,$sql2);
                            ?>   
                            <div class="superbox " data-offset="50">           
                            <?php while($fetch = mysqli_fetch_array($query)){ ?>
                                    <div class="superbox-list">
                                        <a href="javascript:;" class="superbox-img">
                                        <img data-img="uploads/<?php echo $fetch['p_file'] ?>" />
                                        <span style="background: url(uploads/<?php echo $fetch['p_file'] ?>);"></span>
                                        </a>
                                    </div>
                            <?php }?>    
                            </div>
                            <hr>
                            <b class="text-pink" style="font-size: 15px">รายละเอียด</b>

                            <p style="font-size: 18px">
                            <?php 
                                if($row['p_detail'] == ''){
                                    echo "ไม่มีรายละเอียด";
                                }else{
                                    echo $row['p_detail'];
                                }
                            ?> 
                            </p>

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