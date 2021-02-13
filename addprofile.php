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
                        <h4 class="panel-title s12 fw-700" style="font-size: 15px">แก้ไขข้อมูลส่วนบุคคล</h4>
                        </div>
                        
                        <div class="panel-body">
                           
                            <form action="process/addprofileact.php" method="post" enctype="multipart/form-data">
                                <h4><i class="fas fa-user-edit"></i> ส่วนที่ 1 ข้อมูลส่วนบุคคล</h4>
                                <hr>

                                <div class="form-group row m-b-15">
                                    <label class="col-form-label col-md-2">ชื่อ-สกุล ภาษาไทย</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control m-b-5" placeholder="ชื่อ-สกุล ภาษาไทย" name="t_nameth" required>
                                        </div>
                                </div>

                                <div class="form-group row m-b-15">
                                    <label class="col-form-label col-md-2">ชื่อเล่น ภาษาไทย</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control m-b-5" placeholder="ชื่อเล่น ภาษาไทย" name="t_nicknameth" required>
                                        </div>
                                </div>
                                
                                <div class="form-group row m-b-15">
                                    <label class="col-form-label col-md-2">ชื่อ-สกุล ภาษาอังกฤษ</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control m-b-5" placeholder="ชื่อ-สกุล ภาษาอังกฤษ" name="t_nameen" >
                                        </div>
                                </div>

                                <div class="form-group row m-b-15">
                                    <label class="col-form-label col-md-2">ชื่อเล่น ภาษาอังกฤษ</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control m-b-5" placeholder="ชื่อเล่น ภาษาอังกฤษ" name="t_nicknameen" >
                                        </div>
                                </div>

                                <div class="form-group row m-b-15">
                                    <label class="col-form-label col-md-2">เลขประจำตัว</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control m-b-5" placeholder="เลขประจำตัว" name="t_idstu" required>
                                        </div>
                                </div>

                                <h4><i class="fas fa-share-alt"></i> ส่วนที่ 2 ช่องทางการติดต่อ</h4>
                                <hr>

                                <div class="form-group row m-b-15">
                                    <label class="col-form-label col-md-2">อีเมล</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control m-b-5" placeholder="อีเมล" name="t_email" >
                                            <small class="f-s-12 text-grey-darker">บัญชี @yupparaj.ac.th</small>
                                        </div>
                                        
                                        
                                </div>
                                
                                <div class="form-group row m-b-15">
                                    <label class="col-form-label col-md-2">Facebook Profile</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control m-b-5" placeholder="Facebook Profile" name="t_facebook" >
                                        </div>
                                </div>

                                <div class="form-group row m-b-15">
                                    <label class="col-form-label col-md-2">Github Profile</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control m-b-5" placeholder="Github Profile" name="t_github"  >
                                        </div>
                                </div>

                        
                                

                                <div class="form-group row m-b-15 d-none">
                                    <label class="col-form-label col-md-2">ไอดีนักเรียน</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control m-b-5"  name="u_id" id="u_id">
                                            
                                        </div>
                                </div>

                                

                                <div class="form-group row m-b-15 d-none">
                                    <label class="col-form-label col-md-2">ค่าดีฟอล</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control m-b-5" value="0" name="t_status" id="t_status">
                                        </div>
                                </div>

                                <input type="submit" class="btn btn-purple w-100" style="color: white" name="submit" value="เพิ่มโปรไฟล์">
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