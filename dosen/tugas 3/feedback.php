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
						FEEDBACK
					</div>
					<form action="" method="post">
						<div class="contact">
							<h4>Username :</h4>
                 			<input type="text" placeholder="Username" name="nama" required="true" class="form-contact" />
						</div>
						<div class="contact">
							<h4>Feedback :</h4>	                 			
                 			<textarea class="form-contact" rows="10" cols="50" name="pesan"></textarea>
						</div>
						<div class="contact">
							<input type="submit" class="contact-submit" name="submit" value="Send Feedback" />
						</div>
                 	</form>
                 	<br>
					<hr>
					<br>
					<div class="content-title">
						OUR FEEDBACK
					</div>
                    <div class="feedback">
						<div class="feedback-header">
							<img src="assets/image/poptocat.png" class="feedback-image">
							<div class="feedback-identity">
								<h4 class="feedback-name">Saifun Anwar</h4>
								<h5 class="feedback-id">@anwar17</h5>
							</div>
						</div>
						<div class="feedback-content">
							<p>Webnya menarik dan bagus. pertahankan ya mas</p>
						</div>
					</div>
					<div class="feedback">
						<div class="feedback-header">
							<img src="assets/image/foundingfather_v2.png" class="feedback-image">
							<div class="feedback-identity">
								<h4 class="feedback-name">Ahmad Subardjo</h4>
								<h5 class="feedback-id">@subardjo45</h5>
							</div>
						</div>
						<div class="feedback-content">
							<p>Uaapik rek !!!</p>
						</div>
					</div>
					<div class="feedback">
						<div class="feedback-header">
							<img src="assets/image/labtocat.png" class="feedback-image">
							<div class="feedback-identity">
								<h4 class="feedback-name">Apoy Wali</h4>
								<h5 class="feedback-id">@apoy14</h5>
							</div>
						</div>
						<div class="feedback-content">
							<p>Sangat bagus, contentnya mudah untuk dipahami</p>
						</div>
					</div>
					<div class="feedback">
						<div class="feedback-header">
							<img src="assets/image/imam.jpg" class="feedback-image">
							<div class="feedback-identity">
								<h4 class="feedback-name">Imam Santosa</h4>
								<h5 class="feedback-id">@imamsantosa123</h5>
							</div>
						</div>
						<div class="feedback-content">
							<p>Terima Kasih atas sarannya :-)</p>
						</div>
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