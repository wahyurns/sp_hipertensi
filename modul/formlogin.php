<script type="text/javascript">
function Blank_TextField_Validator()
{
if (text_form.username.value == "")
{
   alert("Isi dulu username !");
   text_form.username.focus();
   return (false);
}
if (text_form.password.value == "")
{
   alert("Isi dulu password !");
   text_form.password.focus();
   return (false);
}
return (true);
}
-->
</script>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login Pakar</title>
      <link rel="stylesheet" href="aset/login/css/style.css">
</head>
<body class="h-90">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-80 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">Sign in your account</h4>
                                    <form action="login.php" method="post">
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Username</strong></label>
                                            <input type="text" class="form-control" name="username">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Password</strong></label>
                                            <input type="password" class="form-control" name="password">
                                        </div>
                                        <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                            <div class="form-group">
                                               <div class="custom-control custom-checkbox ml-1">
													<input type="checkbox" class="custom-control-input" id="basic_checkbox_1">
													<label class="custom-control-label" for="basic_checkbox_1">Remember my preference</label>
												</div>
                                            </div>
                                            <div class="form-group">
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" name="submit" id="submitku" class="btn btn-primary btn-block">Login</button>
                                        </div>
                                    </form>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="./vendor/global/global.min.js"></script>
	<script src="./vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="./js/custom.min.js"></script>
    <script src="./js/deznav-init.js"></script>

</body>

</html><script>
$('input[type="password"]').on('focus', () => {
  $('*').addClass('password');
}).on('focusout', () => {
  $('*').removeClass('password');
});;
</script>
<script>
var d = document.getElementById("pakarayam");
d.className += " sidebar-collapse";
</script>