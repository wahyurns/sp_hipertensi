<title>Keterangan</title>
<h2 class='text text-primary'>Keterangan</h2>
<hr>
<div class="row">
					
        <?php
		$characterLimit = 100;
        $hasil = mysqli_query($conn, "SELECT * FROM post ORDER BY kode_post");
        while ($r = mysqli_fetch_array($hasil)) {
			$shortDetPost = substr($r['det_post'], 0, $characterLimit);
        ?>
					<div class="col-xl-4">
                        <div class="card mb-3">
                            <img class="card-img-top img-fluid" src="<?php echo 'gambar/' . $r['gambar']; ?>" alt="<?php echo $r['nama_post']; ?>">
                            <div class="card-header">
                                <h5 class="card-title"><?php echo $r['nama_post']; ?></h5>
                            </div>
                            <div class="card-body">
                                <p class="card-text"><?php echo $shortDetPost."......"; ?>
                                </p>
                            </div>
                            <div class="card-footer">
                                <a class="btn btn-warning btn-flat margin" href="#" data-toggle="modal" data-target="#modal<?php echo $r['kode_post']; ?>">
									<i class="fa fa-puzzle-piece" aria-hidden="true"></i> Detail
								</a>
                        <a class="btn btn-success btn-info margin" href="#" data-toggle="modal" data-target="#modaltindakan<?php echo $r['kode_post']; ?>">
                            <i class="fa fa-quote-right" aria-hidden="true"></i> Saran
                        </a>
                            </div>
                        </div>
                    </div>

            <!-- Modal for Detail -->
            <div class="modal fade" id="modal<?php echo $r['kode_post']; ?>" tabindex="-1" role="dialog" aria-labelledby="modalDetailLabel<?php echo $r['kode_post']; ?>" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header detail-ket">
                            <h5 class="modal-title" id="modalDetailLabel<?php echo $r['kode_post']; ?>">
                                <i class="fa fa-puzzle-piece" aria-hidden="true"></i> Detail Untuk <?php echo $r['nama_post']; ?>
                            </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body" style="text-align: justify;">
                            <p><?php echo $r['det_post']; ?></p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal for Saran -->
            <div class="modal fade" id="modaltindakan<?php echo $r['kode_post']; ?>" tabindex="-1" role="dialog" aria-labelledby="modalSaranLabel<?php echo $r['kode_post']; ?>" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header saran-ket">
                            <h5 class="modal-title" id="modalSaranLabel<?php echo $r['kode_post']; ?>">
                                <i class="fa fa-quote-right" aria-hidden="true"></i> Saran Untuk <?php echo $r['nama_post']; ?>
                            </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body" style="text-align: justify;">
                            <p><?php echo $r['srn_post']; ?></p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>

    </div>
