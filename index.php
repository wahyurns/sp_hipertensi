<?php
error_reporting(0);
ob_start();
session_start();
include "config/koneksi.php";
include "config/fungsi_alert.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
	<base href="https://wahyurns.github.io/sp_hipertensi/">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
	<link href="./vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="./vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">
	<link href="https://cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet">
	
	 <!-- Summernote -->
    <link href="./vendor/summernote/summernote.css" rel="stylesheet">
	
	<script src="./js/jQuery-2.js"></script>
	
	<script src="./js/Flot/jquery.flot.js"></script>
	<!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
    <script src="./js/Flot/jquery.flot.resize.js"></script>
    <!-- FLOT PIE PLUGIN - also used to draw donut charts -->
    <script src="./js/Flot/jquery.flot.pie.js"></script>
    <!-- FLOT CATEGORIES PLUGIN - Used to draw bar charts -->
    <script src="./js/Flot/jquery.flot.categories.js"></script> 

</head>
<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.php" class="brand-logo">
                <img class="logo-abbr" src="./images/logo.png" alt="">
                <img class="logo-compact" src="./images/logo-text.png" alt="">
                <img class="brand-title" src="./images/logo-text.png" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->
		
		
		<!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
                                Klasifikasi Tingkatan Penyakit Hipertensi
                            </div>
                        </div>
						<?php
                if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
                    ?>
                        <ul class="navbar-nav header-right">
                            
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="javascript:;" role="button" data-toggle="dropdown">
                                    <img src="images/profile/admin.png" width="20" alt=""/>
									<div class="header-info">
										<span>Hello,<strong> <?php echo ucfirst($_SESSION['username']); ?></strong></span>
									</div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    
                                    <a href="JavaScript: confirmIt('Anda yakin akan logout dari aplikasi ?','logout.php','','','','u','n','Self','Self')" onMouseOver="self.status = ''; return true" onMouseOut="self.status = ''; return true" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
						<?php } else { ?> 
				  <li class="dropdown messages-menu">
                    <a <?php if ($module == "formlogin") echo 'class="active"'; ?> class="btn btn-rounded btn-primary" href="?module=formlogin"><i class="fa fa-sign-in"></i> <span>Login</span></a>
                  </li>
              <?php } ?>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="deznav">
            <div class="deznav-scroll">
				<ul class="metismenu" id="menu">
                    <?php include "menu.php"; ?>
                </ul>
            
				<div class="plus-box">
					<p class="fs-16 font-w500 mb-1">Check Hipertensi Anda!</p>
					<a class="text-white fs-26" href="?module=diagnosa"><i class="las la-long-arrow-alt-right"></i></a>
				</div>
				<div class="copyright">
					<p class="fs-14 font-w200"><strong class="font-w400">Klasifikasi Tingkatan Penyakit Hipertensi</strong> © 2024 All Rights Reserved</p>
					<p>Metode <i class="fa fa-heart"></i> Certainty Factor</p>
				</div>
			</div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
		
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
			<div class="container-fluid">
			
            <!-- row -->
			<?php include "content.php"; ?>	
			</div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Menggunakan Metode <a href="" target="_blank">Certainty Factor</a> 2024</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="./vendor/global/global.min.js"></script>
	<script src="./vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="./vendor/chart.js/Chart.bundle.min.js"></script>
    <script src="./js/custom.min.js"></script>
	<script src="./js/deznav-init.js"></script>
	<script src="./vendor/owl-carousel/owl.carousel.js"></script>
	
	<!-- Apex Chart -->
	<script src="./vendor/apexchart/apexchart.js"></script>
	
	<!-- Dashboard 1 -->
	<script src="./js/dashboard/dashboard-1.js"></script>
	
	<!-- Chart ChartJS plugin files -->
    <script src="./vendor/chart.js/Chart.bundle.min.js"></script>
	
	 <!-- Summernote -->
    <script src="./vendor/summernote/js/summernote.min.js"></script>
    <!-- Summernote init -->
    <script src="./js/plugins-init/summernote-init.js"></script>
	
	<script>
		function assignedDoctor()
		{
		
			/*  testimonial one function by = owl.carousel.js */
			jQuery('.assigned-doctor').owlCarousel({
				loop:false,
				margin:30,
				nav:true,
				autoplaySpeed: 3000,
				navSpeed: 3000,
				paginationSpeed: 3000,
				slideSpeed: 3000,
				smartSpeed: 3000,
				autoplay: false,
				dots: false,
				navText: ['<i class="fa fa-caret-left"></i>', '<i class="fa fa-caret-right"></i>'],
				responsive:{
					0:{
						items:1
					},
					576:{
						items:2
					},	
					767:{
						items:3
					},			
					991:{
						items:2
					},
					1200:{
						items:3
					},
					1600:{
						items:5
					}
				}
			})
		}
		
		jQuery(window).on('load',function(){
			setTimeout(function(){
				assignedDoctor();
			}, 1000); 
		});
		
	</script>
	
</body>
</html>
<?php            ob_end_flush();
?>
