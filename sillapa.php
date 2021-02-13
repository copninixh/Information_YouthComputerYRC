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
					<h1 class="page-header ">ลงทะเบียนงานศิลปหัตถกรรมนักเรียน<small>&nbsp;Information Youth Computer YRC</small></h1>
				</div>
				<br>
			</div>

            <div class="row">

            
              

                <div class="col-xl-12">
                    <div class="panel panel-inverse">
                        <div class="panel-heading bg-pink">
                            <h4 class="panel-title s12 fw-700" style="font-size: 15px">ลงทะเบียนงานศิลปหัตถกรรมนักเรียน</h4>
                        </div>
                        
                        <div class="panel-body">
                        <a href="addcompettition.php" class="btn btn-pink">เพิ่มรายการแข่ง</a>
                        <hr>
                        <?php
                            $sql = "SELECT * FROM compettition ORDER BY c_id ASC";
                            $result = mysqli_query($conn,$sql);
                            $num = mysqli_num_rows($result);
                        ?>
                        <?php while($row  = mysqli_fetch_array($result)){ ?>

                        <?php } ?>
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
    <script src="ckeditor/ckeditor.js"></script>
    <script>
	CKEDITOR.replace('editor1',{
		filebrowserBrowseUrl: 'ckfinder/ckfinder.html',
		filebrowserUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&currentFolder=/upload/'
	});
</script>
	
	<!-- ================== BEGIN BASE JS ================== -->
	<?php
		include_once 'component/jslink.php';
    ?>
    

	<!-- ================== END BASE JS ================== -->
</body>
</html>
<?php }  ?>
<?php }  ?>