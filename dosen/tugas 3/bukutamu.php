<?php
ob_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Web Profile Kelompok 1a</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
	<container>
		<?php
			$key = true;
			include('header.php');
		?>
		<div id="body" class="row">
			<div id="content">
				<div class="content-body">
					<div class="contact-form">
						<div class="content-title">
							Buku Tamu
						</div>
						<?php
						if (isset($_GET['status']) && isset($_GET['message'])) {
							if($_GET['status'] == 'error'){
								?>
								<div class="info info-error">
									<div class="info-message"><?php echo $_GET['message']; ?></div>
								</div>
								<?php
							}

							if($_GET['status'] == 'success'){
								?>
								<div class="info info-success">
									<div class="info-message"><?php echo $_GET['message']; ?></div>
								</div>
								<?php
							}
						}

						?>
						<form action="" method="post">
							<div class="contact">
								<h4>Name :</h4>
	                 			<input type="text" placeholder="Full Name" name="nama" required="true" class="form-contact" />
							</div>
							<div class="contact">
								<h4>Email :</h4>
	                 			<input type="email" placeholder="Email" name="email" required="true" class="form-contact" />
							</div>
							<div class="contact">
								<h4>Message :</h4>	                 			
	                 			<textarea class="form-contact" rows="10" cols="50" name="pesan" placeholder="Your Message" required="true" style="font-size: 17px;"></textarea>
							</div>
							<div class="contact">
								<input type="submit" class="contact-submit" name="submit-btn" value="Kirim" />
							</div>
                     	</form>
					</div>
				</div>
			</div>
				
			<?php
				include('sidebar.php');
			?>
		</div>

		<footer class="row">
			<section id="credit-footer">
				<div class="credit-footer-body">
					<strong>© 2016</strong> | developed by Kelompok 1A
				</div>
			</section>
		</footer>
	</container>
	<script type="text/javascript" src="assets/js/scripts.js"></script>
</body>
</html>

<?php 

if (isset($_POST['nama'])) {
	require_once('bukutamuproses.php');

	$insert = new BukuTamu();

	if ($insert->insert($_POST)) { 
		header('location: ?status=success&message=Berhasil mengirimkan buku tamu kedalam system');
	} else {
		header('location: ?status=error&message=Gagal mengirimkan buku tamu kedalam system. Silahkan hubungi administrator'); 
	}
}

?>