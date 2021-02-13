<?php
	session_start();
	include("connect/connect.php");
	if(!$_SESSION['u_id']){
		header('Location: ./index.php?status=2');
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
			include_once 'component/navbar.php';
		?>
		
		<?php
			include_once 'component/slidebar.php';
		?>
		
		<!-- begin #content -->
		<div id="content" class="content">
			
			<div class="row">
				<div class="col-xl-12">
					<h1 class="page-header ">ระบบบริหารจัดการข้อมูล<small>&nbsp;Information Youth Computer YRC</small></h1>
				</div>
				<br>
			</div>

			<!-- begin panel -->
			<div class="panel panel-inverse">
				<div class="panel-heading bg-pink">
					<h4 class="panel-title s12 fw-700" style="font-size: 15px">แก้ผลงาน/กิจกรรม</h4>
				</div>
				
				<div class="panel-body">
                    <form action="process/editactivity.php" method="post" enctype="multipart/form-data">
                    <div class="form-group row m-b-15 d-none">
							<label class="col-form-label col-md-2">ไอดีกิจกรรม</label>
								<div class="col-md-10">
									<input type="text" class="form-control m-b-5" value="<?php echo $row['p_id'] ?>" name="p_id" id="p_id">
								</div>
                        </div>
                        
						<div class="form-group row m-b-15">
							<label class="col-form-label col-md-2">ชื่อกิจกรรม/ผลงาน</label>
								<div class="col-md-10">
									<input type="text" class="form-control m-b-5" placeholder="กรอกชื่อกิจกรรม/ผลงาน" name="p_name" value="<?php echo $row['p_name'] ?>"  required>
								</div>
                        </div>
                        
                        <div class="form-group row m-b-15">
							<label class="col-form-label col-md-2">หน่วยงานที่จัด</label>
								<div class="col-md-10">
									<input type="text" class="form-control m-b-5" placeholder="กรอกชื่อหน่วยงานที่จัด" name="p_ref" value="<?php echo $row['p_ref'] ?>"   required>
								</div>
                        </div>
                        
                        <div class="form-group row m-b-15">
							<label class="col-form-label col-md-2">ปีการศึกษา</label>
								<div class="col-md-10">
									<input type="text" class="form-control m-b-5" placeholder="ปีการศึกษา" name="p_date" value="<?php echo $row['p_date'] ?>"   required>
								</div>
						</div>

						<div class="form-group row m-b-15">
							<label class="col-form-label col-md-2">รายละเอียด</label>
								<div class="col-md-10">
									<textarea class="ckeditor" id="editor1" name="p_detail" rows="20">
										<?php echo $row['p_detail']; ?>
									</textarea>
								</div>
						</div>
						

						<div class="form-group row m-b-15 d-none">
							<label class="col-form-label col-md-2">ไอดีนักเรียน</label>
								<div class="col-md-10">
									<input type="text" class="form-control m-b-5" value="<?php echo $_SESSION['u_id'] ?>" name="u_id" id="u_id">
								</div>
						</div>

						<input type="submit" class="btn btn-purple w-100" style="color: white" name="submit" value="แก้ไขผลงาน">
					</form>
					
					
					
				</div>
			</div>
			<!-- end panel -->
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
    <script src="ckeditor/ckeditor.js"></script>
    <script>
	CKEDITOR.replace('editor1',{
		filebrowserBrowseUrl: 'ckfinder/ckfinder.html',
		filebrowserUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&currentFolder=/upload/'
	});
</script>

</body>
</html>
<?php }  ?>