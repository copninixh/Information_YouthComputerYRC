<!-- begin #sidebar -->
<div id="sidebar" class="sidebar" data-disable-slide-animation="true" >
			<!-- begin sidebar scrollbar -->
			<div data-scrollbar="true" data-height="100%">
				<!-- begin sidebar user -->
				<ul class="nav" >
					<li class="nav-profile">
						<a href="javascript:;" data-toggle="nav-profile">
							<div class="cover" style="background: url(https://d2gg9evh47fn9z.cloudfront.net/800px_COLOURBOX23310792.jpg);background-size:100%;width:100%;opacity:0.6"></div>
							<div class="image  bg-black text-grey-darker" style="width: 150px;height: 150px;border-radius: 150px;">
							<img src="assets/user/<?php echo $_SESSION["u_pic"]; ?>" class="img-fluid">
							</div>
							<div class="info s1" style="font-size: 16px">
								<b class="caret pull-right"></b>
								<?php echo $_SESSION['u_fname']; echo $_SESSION['u_name']; echo'&nbsp;'; echo $_SESSION["u_lname"]; ?>
								<small>เลขประจำตัว : <?php echo $_SESSION["u_idstu"]; ?></small>
							</div>
						</a>
					</li>
					<li>
						<ul class="nav nav-profile">
							<li><a href="process/logout.php"><i class="fas fa-sign-out-alt" style="font-size: 17px"></i>ออกจากระบบ</a></li>
						</ul>
					</li>
				</ul>
				<!-- end sidebar user -->
				<!-- begin sidebar nav -->
				<ul class="nav">

					<li class="nav-header">:: สารสนเทศผู้ดูแลระบบ ::</li>
					<li class="active">
						<a href="admin.php">
						<i class="fas fa-home" style="font-size: 17px"></i>
							<span>หน้าหลัก</span>
						</a>
					</li>

					<li class="has-sub">
						<a href="dashboard.php" >
						<i class="fas fa-tachometer-alt" style="font-size: 17px"></i>
							<span>แดชบอร์ดสารสนเทศ</span>
						</a>
					</li>

					<li class="has-sub">
						<a href="managestudent.php" >
						<i class="fas fa-user-graduate" style="font-size: 17px"></i>
							<span>บริหารจัดการนักเรียน</span>
						</a>
					</li>

					
					<li class="has-sub">
						<a href="manageprofile.php">
						<i class="fas fa-user-circle" style="font-size: 17px"></i>
							<span>บริหารจัดการโปรไฟล์</span>
						</a>
					</li>

					<li class="has-sub">
						<a href="resultport.php">
						<i class="fas fa-award" style="font-size: 19px"></i>
							<span>รายงานผลงานของนักเรียน</span>
						</a>
					</li>

					<li class="nav-header">:: สารสนเทศงานศิลปหัตถกรรม ::</li>
					<li class="has-sub">
						<a href="#">
						<i class="fas fa-user-plus" style="font-size: 17px"></i>
							<span>ลงรายชื่อกิจกรรมแข่งขัน</span>
						</a>
					</li>

					<li class="nav-header">:: สารสนเทศ ::</li>

					<li class="has-sub">
						<a href="editprofileforadmin.php">
						<i class="fas fa-user-edit" style="font-size: 17px"></i>
							<span>แก้ไขข้อมูลส่วนตัว</span>
						</a>
					</li>

					<li class="has-sub">
						<a href="addactivityforadmin.php">
						<i class="fas fa-trophy" style="font-size: 17px"></i>
							<span>เพิ่มผลงาน/กิจกรรม/รางวัล</span>
						</a>
					</li>

					

					<li class="nav-header">:: เมนูการใช้งาน ::</li>
					<li class="has-sub">
						<a href="#">
						<i class="fas fa-feather-alt" style="font-size: 17px"></i>
							<span>เขียนบทความ</span>
						</a>
					</li>
					
					<!-- begin sidebar minify button -->
					<li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left" style="font-size: 17px"></i></a></li>
					<!-- end sidebar minify button -->
				</ul>
				<!-- end sidebar nav -->
			</div>
			<!-- end sidebar scrollbar -->
		</div>
		<div class="sidebar-bg"></div>
<!-- end #sidebar -->