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
					<div class="content-title">
						OUR TEAM
					</div>
            		<div class="profile">
            			<center>
            				<img src="assets/image/imam.jpg" class="profile-image" width="30%" height="30%">
            				<p class="profile-name">Moch. Wahyu Imam Santosa</p>
            				<p class="profile-id">145150201111170</p>
            				<p class="profile-position">Project Manager</p>
            			</center>
            		</div>
            		<div class="profile">
            			<center>
            				<img src="assets/image/ridho.jpg" class="profile-image" width="30%" height="30%">
            				<p class="profile-name">Muhammad Ridho K. Pratama</p>
            				<p class="profile-id">145150201111103</p>
            				<p class="profile-position">Backend Engineer | DevOps</p>
            			</center>
            		</div>
            		<div class="profile">
            			<center>
            				<img src="assets/image/kevin.jpg" class="profile-image" width="30%" height="30%">
            				<p class="profile-name">Kevin Charlie</p>
            				<p class="profile-id">145150200111197</p>
            				<p class="profile-position">UI Designer</p>
            			</center>
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