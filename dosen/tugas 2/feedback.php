<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Web Profile Kelompok 1a</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
	<container>
		<header class="row">
			<section id="top-header">
				<div class="top-header-body">
					<h1>Selamat Datang</h1>
				</div>
			</section>
			<section id="main-menu">
				<nav>
					<ul class="menu">
						<li>
							<a href="index.php">Home</a>
						</li>
						<li>
							<a href="profile.php">Profile</a>
						</li>
						<li>
							<a href="gallery.php">Gallery</a>
						</li>
						<li>
							<a href="feedback.php">Feedback</a>
						</li>
						<li>
							<a href="contact.php">Contact</a>
						</li>
					</ul>
				</nav>
			</section>
		</header>

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
				
			<div id="sidebar">
				<div class="sidebar-panel" id="form_search">
					<form action="">
						<input type="search" placeholder="Search...">
					</form>
				</div>

				<div class="sidebar-panel" id="date_time">
					<div id="clock"></div>
					<div id="date"></div>
				</div>
				<div class="sidebar-panel" id="feedback">
					<div class="sidebar-header">
						<div class="sidebar-title">
							Feedback
						</div>
					</div>
					<div class="sidebar-body">
						<div class="feedback-sidebar">
							<div class="feedback-sidebar-header">
								<img src="assets/image/poptocat.png" class="feedback-image">
								<div class="feedback-sidebar-identity">
									<h4 class="feedback-name">Saifun Anwar</h4>
									<h5 class="feedback-id">@anwar17</h5>
								</div>
							</div>
							<div class="feedback-sidebar-content">
								<p>Webnya menarik dan bagus. pertahankan ya mas</p>
							</div>
						</div>
						<div class="feedback-sidebar">
							<div class="feedback-sidebar-header">
								<img src="assets/image/foundingfather_v2.png" class="feedback-image">
								<div class="feedback-sidebar-identity">
									<h4 class="feedback-name">Ahmad Subardjo</h4>
									<h5 class="feedback-id">@subardjo45</h5>
								</div>
							</div>
							<div class="feedback-sidebar-content">
								<p>Uaapik rek !!!</p>
							</div>
						</div>
						<div class="feedback-sidebar">
							<div class="feedback-sidebar-header">
								<img src="assets/image/labtocat.png" class="feedback-image">
								<div class="feedback-sidebar-identity">
									<h4 class="feedback-name">Apoy Wali</h4>
									<h5 class="feedback-id">@apoy14</h5>
								</div>
							</div>
							<div class="feedback-sidebar-content">
								<p>Sangat bagus, contentnya mudah untuk dipahami</p>
							</div>
						</div>
						<div class="feedback-sidebar">
							<div class="feedback-sidebar-header">
								<img src="assets/image/imam.jpg" class="feedback-image">
								<div class="feedback-sidebar-identity">
									<h4 class="feedback-name">Imam Santosa</h4>
									<h5 class="feedback-id">@imamsantosa123</h5>
								</div>
							</div>
							<div class="feedback-sidebar-content">
								<p>Terima Kasih atas sarannya :-)</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<footer class="row">
			<section id="credit-footer">
				<div class="credit-footer-body">
					<strong>© 2016</strong> | developed by Kelompok 1A
				</div>
			</section>
		</footer>
	</container>
	<script type="text/javascript">
		function showTime() {
		    var today = new Date();
		    var jam = today.getHours();
		    var menit = today.getMinutes();
		    var detik = today.getSeconds();
		    var tanggal = today.getDate();
		    var bulan = today.getMonth();
		    var tahun = (today.getYear() < 1000) ? today.getYear() + 1900 : today.getYear();
		    jam = checkTime(jam);
		    menit = checkTime(menit);
		    detik = checkTime(detik);
		 	var bln = ['', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
		 	document.getElementById('clock').innerHTML=jam + ":" + menit + ":" + detik;
		 	document.getElementById('date').innerHTML=checkTime(tanggal) + " " + bln[bulan] + " " + tahun;
		
		}

		function checkTime(i) {
		    if (i < 10) {
		        i = "0" + i;
		    }
		    return i;
		}

		setInterval(showTime, 500);
	</script>
</body>
</html>