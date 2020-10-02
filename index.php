<!DOCTYPE html>
<html lang="en">
<head>
	<title>SISTEM KONVERSI BILANGAN</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="WAFA RIFQI ANAFIN"
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="bg-contact2">
		<div class="container-contact2">
			<div class="wrap-contact2">
				<form class="contact2-form validate-form" method="post" action="">
					<span class="contact2-form-title">
						Sistem Konversi Bilangan.
					</span>

					<div class="wrap-input2 validate-input" data-validate="Silahkan Masukan Bilangan">
						<input class="input2" name="angka" type="text">
						<span class="focus-input2" data-placeholder="Masukan Bilangan"></span>
					</div>


					<div class="wrap-input2">
						<textarea disabled class="input2" name="message"><?php
  
  $angka = isset($_POST['angka']) ? $_POST['angka']:"";
 
  if (isset($_POST['d2b'])) {
      echo decbin($angka);
  }
  if (isset($_POST['d2o'])) {
      echo decoct($angka);
  }
  if (isset($_POST['d2h'])) {
      echo dechex($angka);
  }
  if (isset($_POST['b2d'])) {
      echo bindec($angka);
  }
  if (isset($_POST['o2d'])) {
      echo octdec($angka);
  }
  if (isset($_POST['h2d'])) {
      echo hexdec($angka);
  }
 
  ?></textarea>
						<span class="focus-input2"></span>
					</div>

					<div class="container-contact2-form-btn">
						<div class="wrap-contact2-form-btn">
							<div class="contact2-form-bgbtn"></div>
                            <input type="submit" name="d2b" value="Desimal Ke Biner" />
                        </div>

                        <div class="wrap-contact2-form-btn">
							<div class="contact2-form-bgbtn"></div>
                            <input type="submit" name="b2d" value="Biner Ke Desimal" />
                        </div>
                        
                        <div class="wrap-contact2-form-btn">
							<div class="contact2-form-bgbtn"></div>
                            <input type="submit" name="d2o" value="Desimal Ke Oktal" />
                        </div>
                        
                        <div class="wrap-contact2-form-btn">
							<div class="contact2-form-bgbtn"></div>
                            <input type="submit" name="o2d" value="Oktal Ke Desimal" />
                        </div>

                        
                        
                        
</div>
<div class="container-contact2-form-btn">
<div class="wrap-contact2-form-btn">
							<div class="contact2-form-bgbtn"></div>
                            <input type="submit" name="d2h" value="Desimal Ke Heksadesimal" />
                        </div>                        

                        <div class="wrap-contact2-form-btn">
							<div class="contact2-form-bgbtn"></div>
                            <input type="submit" name="h2d" value="Heksadesimal Ke Desimal" />
                        </div>

                        
                        
					</div>
				</form>
			</div>
		</div>
	</div>




<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

	

</body>
</html>
