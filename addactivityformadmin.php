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
					<h1 class="page-header ">เพิ่มผลงาน/กิจกรรม<small>&nbsp;Information Youth Computer YRC</small></h1>
				</div>
				<br>
			</div>

            <div class="row">

            
              

                <div class="col-xl-12">
                    <div class="panel panel-inverse">
                        <div class="panel-heading bg-pink">
                            <h4 class="panel-title s12 fw-700" style="font-size: 15px">เพิ่มผลงาน/กิจกรรม</h4>
                        </div>
                        
                        <div class="panel-body">
                        <form action="process/addactivityactadmin.php" method="post" enctype="multipart/form-data">
						<div class="form-group row m-b-15">
							<label class="col-form-label col-md-2">ชื่อกิจกรรม/ผลงาน</label>
								<div class="col-md-10">
									<input type="text" class="form-control m-b-5" placeholder="กรอกชื่อกิจกรรม/ผลงาน" name="p_name"  required>
								</div>
                        </div>
                        
                        <div class="form-group row m-b-15">
							<label class="col-form-label col-md-2">หน่วยงานที่จัด</label>
								<div class="col-md-10">
									<input type="text" class="form-control m-b-5" placeholder="กรอกชื่อหน่วยงานที่จัด" name="p_ref"  required>
								</div>
                        </div>
                        
                        <div class="form-group row m-b-15">
							<label class="col-form-label col-md-2">ปีการศึกษา</label>
								<div class="col-md-10">
									<input type="text" class="form-control m-b-5" placeholder="ปีการศึกษา" name="p_date"  required>
								</div>
						</div>

						<div class="form-group row m-b-15">
							<label class="col-form-label col-md-2">รายละเอียด</label>
								<div class="col-md-10">
								<textarea class="ckeditor" id="editor1" name="p_detail" rows="20"></textarea>
								</div>
						</div>
						

						<div class="form-group row m-b-15 d-none">
							<label class="col-form-label col-md-2">ไอดีนักเรียน</label>
								<div class="col-md-10">
									<input type="text" class="form-control m-b-5" value="<?php echo $_SESSION['u_id'] ?>" name="u_id" id="u_id">
								</div>
						</div>
						<input type="submit" class="btn btn-purple w-100" style="color: white" name="submit" value="เพิ่มผลงาน">
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