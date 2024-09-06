 <title>Login Gagal</title>
<?php
session_start();
include "config/koneksi.php";

$user=$_POST['username'];
$pass=md5($_POST['password']);

$login=mysqli_query($conn,"select * from admin where username='$user' and password='$pass'");

$ketemu=mysqli_num_rows($login);
$r=mysqli_fetch_array($login);
if ($ketemu>0) {
	$_SESSION['username'] = $r['username'];
	$_SESSION['password'] = $r['password'];
	$_SESSION['nama_lengkap'] = $r['nama_lengkap'];
	header("location: index.php");
}
else{?>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>ERES - Bootstrap Admin Dashboard</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <link href="./css/style.css" rel="stylesheet">
    
</head>
<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-5">
                    <div class="form-input-content text-center error-page">
                        <h4><i class="fa fa-times-circle text-danger"></i> Login Gagal!</h4>
                        <p>Password atau username yang Anda masukkan salah!.</p>
						<div>
                            <a class="btn btn-primary" href="index.php?module=formlogin">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<!-- Required vendors -->
<script src="./vendor/global/global.min.js"></script>
<script src="./vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="./js/custom.min.js"></script>
<script src="./js/deznav-init.js"></script>

</html>
<?php
  
}
?>