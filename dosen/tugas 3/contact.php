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
					<div class="contact">
						<div class="content-title"> Home Office : </div>
						<center>
							<h3>Jalan Sumbersari 304A Malang</h3>
							<h3>085786267752</h3>
						</center>
					</div>
					<hr>
					<br>
					<div class="contact-form">
						<div class="content-title">
							Contact US
						</div>
						<form action="#" method="post">
							<div class="contact">
								<h4>Name :</h4>
	                 			<input type="text" placeholder="Full Name" name="nama" required="true" class="form-contact" />
							</div>
							<div class="contact">
								<h4>Email :</h4>
	                 			<input type="email" placeholder="Email" name="email" required="true" class="form-contact" />
							</div>
							<div class="contact">
								<h4>Subject :</h4>
	                 			<input type="text" placeholder="Subject" name="subject" required="true" class="form-contact" />
							</div>
							<div class="contact">
								<h4>Message :</h4>	                 			
	                 			<textarea class="form-contact" rows="10" cols="50" name="pesan"></textarea>
							</div>
							<div class="contact">
								<input type="submit" class="contact-submit" name="submit" value="Kirim" />
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