<title>Dashboard</title>
				<div class="form-head d-flex mb-3 mb-md-4 align-items-start">
					<div class="mr-auto d-none d-lg-block">
						<h3 class="text-black font-w600">Selamat Datang di </h3>
						<p class="mb-0 fs-18">Sistem Pakar Diagnosa Hipertensi dengan Certainty Factor!</p>
					</div>
					<!--
					<div class="input-group search-area ml-auto d-inline-flex">
						<input type="text" class="form-control" placeholder="Search here">
						<div class="input-group-append">
							<button type="button" class="input-group-text"><i class="flaticon-381-search-2"></i></button>
						</div>
					</div>
					<a href="javascript:void(0);" class="settings-icon  ml-3"><i class="flaticon-381-settings-2 mr-0"></i></a>-->
				</div>
				<div class="row">	
				<?php 
	$htpenyakit=mysqli_query($conn,"SELECT count(*) as total from penyakit");
	  $dtpenyakit=mysqli_fetch_assoc($htpenyakit); ?>
					<div class="col-xl-3 col-xxl-6 col-sm-6">
						<div class="card gradient-bx text-white bg-danger rounded">	
							<div class="card-body">
								<div class="media align-items-center">
									<div class="media-body">
										<p class="mb-1">Total Penyakit</p>
										<div class="d-flex flex-wrap">
											<h2 class="fs-40 font-w600 text-white mb-0 mr-3"><?php echo $dtpenyakit["total"]; ?></h2>
											<div>	
												<svg width="28" height="19" viewBox="0 0 28 19" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M8.56244 9.25C6.35869 11.6256 2.26214 16.0091 0.999939 17.5H26.4374V1L16.8124 13.375L8.56244 9.25Z" fill="url(#paint0_linear4)"/>
													<path d="M0.999939 17.5C2.26214 16.0091 6.35869 11.6256 8.56244 9.25L16.8124 13.375L26.4374 1" stroke="white" stroke-width="2"/>
													<defs>
													<linearGradient id="paint0_linear4" x1="13.7187" y1="3.0625" x2="14.7499" y2="17.5" gradientUnits="userSpaceOnUse">
													<stop stop-color="white" stop-opacity="0.73" offset="0.1"/>
													<stop offset="1" stop-color="white" stop-opacity="0"/>
													</linearGradient>
													</defs>
												</svg>
											</div>
										</div>
									</div>
									<span class="border rounded-circle p-4">
										<svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M23.6667 0.333311C21.1963 0.264777 18.7993 1.17744 17 2.87164C15.2008 1.17744 12.8038 0.264777 10.3334 0.333311C8.9341 0.337244 7.55292 0.649469 6.28803 1.24778C5.02315 1.84608 3.90564 2.71577 3.01502 3.79498C-0.039984 7.45998 -0.261651 13.3333 1.19668 17.5966C1.21002 17.6266 1.22002 17.6566 1.23335 17.6866C3.91168 25.3333 15.2717 33.6666 17 33.6666C18.6983 33.6666 30.025 25.5166 32.7667 17.6866C32.78 17.6566 32.79 17.6266 32.8034 17.5966C34.2417 13.4016 34.0867 7.51498 30.985 3.79498C30.0944 2.71577 28.9769 1.84608 27.712 1.24778C26.4471 0.649469 25.0659 0.337244 23.6667 0.333311ZM17 30.03C14.6817 28.5233 8.23168 24 5.30335 18.6666H12C12.2743 18.6667 12.5444 18.599 12.7863 18.4696C13.0282 18.3403 13.2344 18.1532 13.3867 17.925L14.83 15.7583L17.0867 22.525C17.1854 22.8207 17.3651 23.0829 17.6054 23.2816C17.8456 23.4803 18.1368 23.6076 18.4458 23.6491C18.7548 23.6906 19.0693 23.6446 19.3535 23.5163C19.6376 23.388 19.8801 23.1825 20.0533 22.9233L22.8917 18.6666H28.6984C25.7684 24 19.3183 28.5233 17 30.03ZM29.975 15.3333H22C21.7257 15.3333 21.4556 15.4009 21.2137 15.5303C20.9718 15.6597 20.7656 15.8468 20.6133 16.075L19.17 18.2416L16.9133 11.475C16.8146 11.1792 16.6349 10.9171 16.3947 10.7184C16.1544 10.5196 15.8632 10.3923 15.5542 10.3508C15.2452 10.3093 14.9307 10.3553 14.6466 10.4837C14.3624 10.612 14.1199 10.8174 13.9467 11.0766L11.1084 15.3333H4.02502C3.35835 12.1816 3.50502 8.41164 5.57668 5.92831C6.151 5.22081 6.87614 4.65057 7.69911 4.25927C8.52209 3.86797 9.42209 3.6655 10.3334 3.66664C15.445 3.66664 14.9117 7.16664 16.9817 7.18664H17C19.0733 7.18664 18.5483 3.66664 23.6667 3.66664C24.5785 3.665 25.4792 3.86723 26.3027 4.25855C27.1263 4.64987 27.852 5.22037 28.4267 5.92831C30.4867 8.40331 30.6467 12.1666 29.975 15.3333Z" fill="white"/>
										</svg>
									</span>
								</div>
							</div>
						</div>
					</div>
					<?php 
  $htgejala=mysqli_query($conn,"SELECT count(*) as total from gejala");
	$dtgejala=mysqli_fetch_assoc($htgejala); ?>
					<div class="col-xl-3 col-xxl-6 col-sm-6">
						<div class="card gradient-bx text-white bg-success rounded">	
							<div class="card-body">
								<div class="media align-items-center">
									<div class="media-body">
										<p class="mb-1">Total Gejala</p>
										<div class="d-flex flex-wrap">
											<h2 class="fs-40 font-w600 text-white mb-0 mr-3"><?php echo $dtgejala["total"]; ?></h2>
											<div>	
												<svg width="28" height="19" viewBox="0 0 28 19" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M18.875 9.25C21.0787 11.6256 25.1753 16.0091 26.4375 17.5H1V1L10.625 13.375L18.875 9.25Z" fill="url(#paint0_linear1)"/>
													<path d="M26.4375 17.5C25.1753 16.0091 21.0787 11.6256 18.875 9.25L10.625 13.375L1 1" stroke="white" stroke-width="2"/>
													<defs>
													<linearGradient id="paint0_linear1" x1="13.7188" y1="3.0625" x2="12.6875" y2="17.5" gradientUnits="userSpaceOnUse">
													<stop stop-color="white" stop-opacity="0.73" offset="0.1"/>
													<stop offset="1" stop-color="white" stop-opacity="0"/>
													</linearGradient>
													</defs>
												</svg>
											</div>
										</div>
									</div>
									<span class="border rounded-circle p-4">
										<svg width="34" height="34" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M37.3333 15.6666C37.3383 14.7488 37.0906 13.8473 36.6174 13.061C36.1441 12.2746 35.4635 11.6336 34.6501 11.2084C33.8368 10.7831 32.9221 10.5899 32.0062 10.65C31.0904 10.7101 30.2087 11.021 29.4579 11.5489C28.707 12.0767 28.1159 12.8011 27.7494 13.6425C27.3829 14.484 27.255 15.4101 27.3799 16.3194C27.5047 17.2287 27.8774 18.086 28.4572 18.7976C29.0369 19.5091 29.8013 20.0473 30.6667 20.3533V25.6666C30.6667 27.8768 29.7887 29.9964 28.2259 31.5592C26.6631 33.122 24.5435 34 22.3333 34C20.1232 34 18.0036 33.122 16.4408 31.5592C14.878 29.9964 14 27.8768 14 25.6666V23.8666C16.7735 23.4642 19.3097 22.0777 21.1456 19.9603C22.9815 17.8429 23.9946 15.1358 24 12.3333V2.33329C24 1.89127 23.8244 1.46734 23.5118 1.15478C23.1993 0.842221 22.7754 0.666626 22.3333 0.666626H17.3333C16.8913 0.666626 16.4674 0.842221 16.1548 1.15478C15.8423 1.46734 15.6667 1.89127 15.6667 2.33329C15.6667 2.77532 15.8423 3.19924 16.1548 3.5118C16.4674 3.82436 16.8913 3.99996 17.3333 3.99996H20.6667V12.3333C20.6667 14.5434 19.7887 16.663 18.2259 18.2258C16.6631 19.7887 14.5435 20.6666 12.3333 20.6666C10.1232 20.6666 8.00358 19.7887 6.44077 18.2258C4.87797 16.663 4 14.5434 4 12.3333V3.99996H7.33333C7.77536 3.99996 8.19928 3.82436 8.51184 3.5118C8.8244 3.19924 9 2.77532 9 2.33329C9 1.89127 8.8244 1.46734 8.51184 1.15478C8.19928 0.842221 7.77536 0.666626 7.33333 0.666626H2.33333C1.8913 0.666626 1.46738 0.842221 1.15482 1.15478C0.842259 1.46734 0.666664 1.89127 0.666664 2.33329V12.3333C0.672024 15.1358 1.68515 17.8429 3.52106 19.9603C5.35697 22.0777 7.8932 23.4642 10.6667 23.8666V25.6666C10.6667 28.7608 11.8958 31.7283 14.0837 33.9162C16.2717 36.1041 19.2391 37.3333 22.3333 37.3333C25.4275 37.3333 28.395 36.1041 30.5829 33.9162C32.7708 31.7283 34 28.7608 34 25.6666V20.3533C34.9723 20.0131 35.8151 19.3797 36.4122 18.5402C37.0092 17.7008 37.3311 16.6967 37.3333 15.6666Z" fill="white"/>
										</svg>
									</span>
								</div>
							</div>
						</div>
					</div>
					<?php 
	$htpengetahuan=mysqli_query($conn,"SELECT count(*) as total from hasil");
	  $dtpengetahuan=mysqli_fetch_assoc($htpengetahuan); ?>
	  <div class="col-xl-3 col-lg-6 col-sm-6 col-xxl-6">
						<div class="widget-stat card bg-info">
							<div class="card-body  p-4">
								<div class="media">
									<span class="mr-3">
										<i class="fa fa-flask"></i>
									</span>
									<div class="media-body text-white text-right">
										<p class="mb-1">Total Pengetahuan</p>
										<h3 class="text-white"><?php echo $dtpengetahuan["total"]; ?></h3>
									</div>
								</div>
							</div>
						</div>
                    </div>
					<?php 
	$htriwayat=mysqli_query($conn,"SELECT count(*) as total from hasil");
	  $dtriwayat=mysqli_fetch_assoc($htriwayat); ?>
					
					<div class="col-xl-3 col-lg-6 col-sm-6 col-xxl-6">
						<div class="widget-stat card bg-secondary">
							<div class="card-body  p-4">
								<div class="media">
									<span class="mr-3">
										<i class="flaticon-381-television"></i>
									</span>
									<div class="media-body text-white text-right">
										<p class="mb-1">Riwayat Diagnosa</p>
										<h3 class="text-white"><?php echo $dtriwayat["total"]; ?></h3>
									</div>
								</div>
							</div>
						</div>
                    </div>
					
					<div class="col-xl-9 col-xxl-8 col-lg-8">
						<div class="card">	
							<div class="card-header d-sm-flex d-block border-0 pb-0">
								<h3 class="fs-20 mb-3 mb-sm-0 text-black">Patient Statistic</h3>
								<div class="card-action card-tabs mt-3 mt-sm-0 mt-3 mt-sm-0">
									<!--<ul class="nav nav-tabs" role="tablist">
										<li class="nav-item">
											<a class="nav-link active" data-toggle="tab" href="#monthly" role="tab">
												Monthly
											</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" data-toggle="tab" href="#weekly" role="tab">
												Weekly
											</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" data-toggle="tab" href="#today" role="tab">
												Today
											</a>
										</li>
									</ul>-->
								</div>
							</div>
							<div class="card-body">
								<canvas id="pie_chart"></canvas>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-lg-12">
                        <div class="card border-0 pb-0">
                            <div class="card-header border-0 pb-0">
                                <h4 class="card-title">Riwayat Diagnosa</h4>
                            </div>
                            <div class="card-body"> 
                                <div id="DZ_W_Todo2" class="widget-media dz-scroll height370">
                                    <ul class="timeline">
									<?php 
									$hasil = mysqli_query($conn,"SELECT * FROM hasil LEFT JOIN penyakit ON hasil.hasil_id=penyakit.kode_penyakit ORDER BY id_hasil limit 10"); 
									while ($r = mysqli_fetch_array($hasil)) {?>
                                        
                                        <li>
                                            <div class="timeline-panel">
												<div class="media-body">
													<h5 class="mb-1"><?= $r['nama_penyakit'] ?> <span class="badge badge-warning">CF : <?= $r['hasil_nilai'] ?></span></h5>
													<small class="d-block"><?= $r['tanggal'] ?></small>
												</div>
												<div class="dropdown">
													<a href="?module=riwayat-detail&id=<?= $r['id_hasil'] ?>" class="btn btn-info light sharp">
														<i class="fa fa-eye" style="font-size: 18px;"></i>
													</a>
													
												</div>
											</div>
                                        </li>
									<?php } ?>
										 
                                       
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
					</div>
					
				</div>

<script>
<?php
$hasilg = mysqli_query($conn, "SELECT hasil_id, nama_penyakit, count(hasil_id) jlh_id FROM hasil LEFT JOIN penyakit ON hasil.hasil_id=penyakit.kode_penyakit GROUP BY hasil.hasil_id ORDER BY jlh_id DESC");
$arr = array();
while ($rg = mysqli_fetch_array($hasilg)) {
    if ($rg['hasil_id'] > 0) {
        $arr[] = array('label' => $rg['nama_penyakit'], 'data' => $rg['jlh_id']);
    }
}
$labels = array_column($arr, 'label');
$data = array_column($arr, 'data');
?>
// JavaScript part
document.addEventListener('DOMContentLoaded', function() {
    var ctx = document.getElementById('pie_chart').getContext('2d');
    var pie_chart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: <?php echo json_encode($labels); ?>,
            datasets: [{
                data: <?php echo json_encode($data); ?>,
                backgroundColor: [
                    '#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#9966FF', '#FF9F40', '#FFCD56'
                ],
                hoverBackgroundColor: [
                    '#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#9966FF', '#FF9F40', '#FFCD56'
                ]
            }]
        },
        options: {
            responsive: true,
            legend: {
                position: 'top',
            },
            animation: {
                animateScale: true,
                animateRotate: true
            }
        }
    });
});
</script>
