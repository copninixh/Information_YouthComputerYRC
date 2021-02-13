<head>
	<meta charset="utf-8" />
	<link rel="icon" href="assets/img/logoyrc2.png" type="image/png" >
	<title>:: ระบบบริหารจัดการข้อมูล Information Youth Computer Yupparaj Wittayalai School 2563 ::</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Kanit|Niramit|Pattaya|Pridi|Sarabun|Athiti|Chakra+Petch|K2D|Krub|Mitr|Athiti|Pridi&display=swap" rel="stylesheet">
	<link href="assets/css/material/app.min.css" rel="stylesheet" />

	<link href="assets/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
	<link href="assets/plugins/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" />
	<link href="assets/css/styleyrc.css" rel="stylesheet" />
	<link href="assets/css/fontawesome.css" rel="stylesheet" id="theme-css-link">
	<link href="assets/plugins/dropzone/dist/min/dropzone.min.css" rel="stylesheet">

	<link href="assets/css/material/theme/pink.min.css" rel="stylesheet" id="theme-css-link">
	<link href="assets/plugins/superbox/superbox.min.css" rel="stylesheet" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css">
	
	
	<!-- ================== END BASE CSS STYLE ================== -->
</head>
<style>
    body{
        font-family: 'Kanit', sans-serif;
    }
</style>

<script>
	   wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100,
        callback:     function(box) {
          console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
      }
    );
    wow.init();
    document.getElementById('moar').onclick = function() {
      var section = document.createElement('section');
      section.className = 'section--purple wow fadeInDown';
      this.parentNode.insertBefore(section, this);
    };
</script>