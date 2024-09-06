<?php
$module = $_GET['module'];
?>
					
					
					<li><a class="ai-icon" href="./" aria-expanded="false">
							<i class="flaticon-381-networking"></i>
							<span class="nav-text">Dashboard</span>
						</a>
                    </li>
					<?php
  if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
      ?>
					<li><a class="ai-icon" href="?module=admin" aria-expanded="false">
							<i class="fa fa-user"></i>
							<span class="nav-text">Admin</span>
						</a>
                        
                    </li>
                    <li><a class="ai-icon" href="?module=penyakit" aria-expanded="false">
							<i class="fa fa-bug"></i>
							<span class="nav-text">Penyakit</span>
						</a>
                       
                    </li>
                    <li><a href="?module=gejala" class="ai-icon" aria-expanded="false">
							<i class="fa fa-eyedropper"></i>
							<span class="nav-text">Gejala</span>
						</a>
					</li>
                    
                    <li><a class="ai-icon" href="?module=pengetahuan" aria-expanded="false">
							<i class="fa fa-flask"></i>
							<span class="nav-text">Pengetahuan</span>
						</a>
                    </li>
                    <li><a class="ai-icon" href="?module=post" aria-expanded="false">
							<i class="flaticon-381-layer-1"></i>
							<span class="nav-text">Post Keterangan</span>
						</a>
                    </li>
                    
                    </li>
                    <li><a class="ai-icon" href="?module=riwayat" aria-expanded="false">
						<i class="flaticon-381-television"></i>
							<span class="nav-text">Riwayat</span>
						</a>
<?php
  }else {
      ?>
					<!--<li><a class="ai-icon" href="?module=diagnosa" aria-expanded="false">
							<i class="flaticon-381-notepad"></i>
							<span class="nav-text">Diagnosa</span>
						</a>-->
                        
                    </li>
                    <li><a class="ai-icon" href="?module=riwayat" aria-expanded="false">
						<i class="flaticon-381-television"></i>
							<span class="nav-text">Riwayat</span>
						</a>
                        
                    </li>
                    <li><a class="ai-icon" href="?module=keterangan" aria-expanded="false">
							<i class="flaticon-381-controls-3"></i>
							<span class="nav-text">Keterangan</span>
						</a>
                        
                    </li>
<?php
  }
  ?>
                   