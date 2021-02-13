<!DOCTYPE html>
<html lang="en">
<?php
	include_once 'component/header.php';
?>
<style>
    body{
        font-family: 'Sarabun', sans-serif;
    }
</style>
<body class="pace-top s1">
		<!-- begin #page-loader -->
		<div id="page-loader" class="fade show">
		<div class="material-loader">
			<svg class="circular" viewBox="25 25 50 50">
				<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"></circle>
			</svg>
			<div class="message">Loading...</div>
		</div>
	</div>
	<!-- end #page-loader -->
	
	<div class="login-cover">
		<div class="login-cover-image" style="background-image: url(assets/img/02.jpg)" data-id="login-cover-image"></div>
		<div class="login-cover-bg"></div>
	</div>
	<!-- begin #page-container -->
	<div id="page-container" class="fade">
		<!-- begin login -->
		<div class="login login-v2" data-pageload-addclass="animated fadeIn">
			<!-- begin brand -->
			<div class="login-header">
				<div class="brand f-w-600">
					Login <span class="f-w-300">Student Member</span>
					<small class="">Youth Computer Yupparaj Wittayalai School</small>
				</div>
				<div class="icon">
					<i class="fa fa-lock"></i>
				
				</div>
		
			</div>

				
			<!-- end brand -->
			<!-- begin login-content -->
			<div class="login-content">
			<?php
					if(isset($_GET['status'])){
						$status = $_GET['status'];
						if($status == '1'){
				?>	
				<div class="alert alert-danger fade show mt-3">
				<span class="close" data-dismiss="alert">×</span>
				<strong>Username หรือ Password ไม่ถูกต้อง !</strong>
				
				</div>
				
				<?php }else if($status == '2'){?>	

					<div class="alert alert-danger fade show mt-3">
				<span class="close" data-dismiss="alert">×</span>
				<strong>กรุณา Login ก่อนเข้าใช้งาน !</strong>
				
				</div>
					<?php }?>
				<?php }?>
				
				<!--div class="alert alert-danger fade show mt-3">
						<span class="close" data-dismiss="alert">×</span>
						<strong>ปิดระบบสารสนเทศฯ วันที่ 20/03/2563 !</strong>
				
				</div-->
				
				<form action="process/loginact.php" method="post" class="margin-bottom-0">
					<div class="form-group m-b-20">
						<input type="text" class="form-control form-control-lg" name="u_username" placeholder="Username" required />
					</div>
					<div class="form-group m-b-20">
						<input type="password" class="form-control form-control-lg" name="u_password" placeholder="Password" required />
					</div>
					
					<div class="login-buttons">
						<button type="submit" name="submit" class="btn btn-pink btn-block btn-lg">Login</button>
					</div>
					<div class="m-t-20 text-center">
						<hr style="background-color: white">
						&copy; <?php echo date("Y"); ?> Information Youth Computer YRC All Right Reserved
					</div>
				</form>
			</div>
			<!-- end login-content -->
		</div>
		<!-- end login -->
	<!-- end page container -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<?php
			include_once 'component/jslink.php';
		?>
	<!-- ================== END BASE JS ================== -->
</body>
</html>
