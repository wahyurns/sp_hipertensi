
<title>Riwayat</title>
<div class="row">
<div class="card">
<div class="card-body">

<h2 class='text text-primary'>Riwayat Konsultasi</h2>
<hr>
<?php
include "config/fungsi_alert.php";
$aksi = "modul/riwayat/aksi_hasil.php";
switch ($_GET[act]) {
// Tampil hasil
    default:
        $offset = $_GET['offset'];
//jumlah data yang ditampilkan perpage
        $limit = 15;
        if (empty($offset)) {
            $offset = 0;
        }

        $sqlgjl = mysqli_query($conn,"SELECT * FROM gejala order by kode_gejala+0");
        while ($rgjl = mysqli_fetch_array($sqlgjl)) {
            $argjl[$rgjl['kode_gejala']] = $rgjl['nama_gejala'];
        }

        $sqlpkt = mysqli_query($conn,"SELECT * FROM penyakit order by kode_penyakit+0");
        while ($rpkt = mysqli_fetch_array($sqlpkt)) {
            $arpkt[$rpkt['kode_penyakit']] = $rpkt['nama_penyakit'];
            $ardpkt[$rpkt['kode_penyakit']] = $rpkt['det_penyakit'];
            $arspkt[$rpkt['kode_penyakit']] = $rpkt['srn_penyakit'];
        }

        $tampil = mysqli_query($conn,"SELECT * FROM hasil ORDER BY id_hasil");
        $baris = mysqli_num_rows($tampil);
        if ($baris > 0) {
            echo"<div class='row'><div class='col-md-8'><table class='table table-bordered table-striped riwayat' style='overflow-x=auto' cellpadding='0' cellspacing='0'>
          <thead>
            <tr>
              <th>No</th>
              <th>Tanggal</th>
              <th>Penyakit</th>
              <th nowrap>Nilai CF</th>
              <th width='21%' class='text-center'>Aksi</th>
            </tr>
          </thead>
		  <tbody>
		  ";
            $hasil = mysqli_query($conn,"SELECT * FROM hasil ORDER BY id_hasil limit $offset,$limit");
            $no = 1;
            $no = 1 + $offset;
            $counter = 1;
            while ($r = mysqli_fetch_array($hasil)) {
              if ($r[hasil_id]>0){
                if ($counter % 2 == 0)
                    $warna = "dark";
                else
                    $warna = "light";
                echo "<tr class='" . $warna . "'>
			 <td align=center>$no</td>
			 <td>$r[tanggal]</td>
			 <td>" . $arpkt[$r[hasil_id]] . "</td>
			 <td><span class='label label-default'>" . $r[hasil_nilai] . "</span></td>
			 <td align=center>
			 <a type='button' class='btn btn-info btn-xs' target='_blank' href=?module=riwayat-detail&id=$r[id_hasil]><i class='fa fa-eye' aria-hidden='true'></i> Detail </a> &nbsp;
	         </td></tr>";
                $no++;
                $counter++;
            }
            }
            echo "</tbody></table></div>";
            ?>

            <div class="col-md-4">
              <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Grafik Riwayat</h4>
                                    </div>
                                    <div class="card-body">
                                       <canvas id="pie_chart"></canvas>
                                    </div>
                                </div>
            </div>


            <?php
            echo "</div><div class='col-md-12'><div class='row'><div class=paging>";

            if ($offset!=0) {
			$prevoffset = $offset-10;
			echo "<span class='btn btn-square btn-outline-light btn-xs'> <a href=index.php?module=riwayat&offset=$prevoffset>Back</a></span>";
		}
		else {
			echo "<button class='btn btn-square btn-outline-light btn-xs' disabled=disabled>Back</button>";//cetak halaman tanpa link
		}
          //hitung jumlah halaman
          $halaman = intval($baris / $limit); //Pembulatan

          if ($baris % $limit) {
            $halaman++;
          }
          for ($i = 1; $i <= $halaman; $i++) {
            $newoffset = $limit * ($i - 1);
            if ($offset != $newoffset) {
              echo "<span class='btn btn-square btn-outline-light btn-xs'><a href=index.php?module=riwayat&offset=$newoffset>$i</a></span>";
              //cetak halaman
            } else {
              echo "<button class='btn btn-square btn-success btn-xs' disabled=disabled>".$i."</button>"; //cetak halaman tanpa link
            }
          }

          //cek halaman akhir
          if (!(($offset / $limit) + 1 == $halaman) && $halaman != 1) {

            //jika bukan halaman terakhir maka berikan next
            $newoffset = $offset + $limit;
            echo "<span class='btn btn-square btn-outline-light btn-xs'><a href=index.php?module=riwayat&offset=$newoffset>Next</a>";
          } else {
            echo "<button class='btn btn-square btn-outline-light btn-xs' disabled=disabled>Next</button>"; //cetak halaman tanpa link
          }

            echo "</div></div></div>";
        } else {
            echo "<br><b>Data Kosong !</b>";
        }
}
?>
</div>
</div>
</div>


<script>
<?php
$hasilg = mysqli_query($conn, "SELECT hasil_id, count(hasil_id) jlh_id FROM hasil GROUP BY hasil_id ORDER BY jlh_id DESC");
$arr = array();
while ($rg = mysqli_fetch_array($hasilg)) {
    if ($rg['hasil_id'] > 0) {
        $arr[] = array('label' => $arpkt[$rg['hasil_id']], 'data' => $rg['jlh_id']);
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




