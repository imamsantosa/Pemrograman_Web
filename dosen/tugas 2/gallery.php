<?php 
ob_start();

function tanggal($date)
{
	$bln = ['', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
	$tanggal = substr($date, 0, 2);
	$bulan = substr($date, 3, 2);
	$tahun = substr($date, 6, 4);
	$jam = substr($date, 11);
	if(substr($bulan, 0, 1) == 0)
		$bulan = substr($bulan, 1);

	return $tanggal.' '.$bln[$bulan].' '.$tahun.' '.$jam;
}

$gallery_path = 'assets/gallery';
$handle = opendir($gallery_path);
$list = [];
while (($file = readdir($handle)) !== false) {
	if($file != '.' && $file != '..')
		$list[] = $file;
}
closedir($handle); 

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
						Upload Image
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
					<form action="" method="post" enctype="multipart/form-data">
						<div class="form-upload">
							<label class="label-upload-file">Pilih File : </label>
                 			<input type="file" name="gallery_file" required="true"/>
						</div>
						<div class="contact">
							<input type="submit" class="contact-submit" name="gallery_submit" value="Upload" />
						</div>
                 	</form>
				</div>

				<div class="content-body">
					<div class="content-title">
						Gallery
					</div>
					<?php
						arsort($list);
						foreach($list as $image){
							?>
							<div id="content_artikel">
		                    	<center>
		                        	<img src="<?php echo $gallery_path.'/'.$image; ?>" width="70%" height="70%">
		                        	<div id="author">
		                        		<p>Uploaded : <?php echo tanggal(date("d-m-Y H:i:s.", filemtime($gallery_path.'/'.$image))); ?></p>
		                    		</div>
		                        </center>
		                    </div>
							<?php
						}

					?>
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

<?php
	
	if (isset($_POST['gallery_submit'])) {
		$name = $_FILES['gallery_file']['name'];
	    $size = $_FILES['gallery_file']['size'];
	    $type = $_FILES['gallery_file']['type'];
	    $info = pathinfo($name);
	    $ext = $info['extension'];
	    if (strtoupper($ext) == 'JPG' || strtoupper($ext) == 'PNG' || strtoupper($ext) == 'JPEG') {
	    	if(!empty($_FILES['gallery_file']['tmp_name'])){
	    		$filename = 'gallery'.(count($list)+1).'.'.$ext;
	    		$destination = $gallery_path.'/'.$filename;
		        move_uploaded_file($_FILES['gallery_file']['tmp_name'], $destination);
	    		header('location:?status=success&message=Berhasil Mengunggah Image');

	    	}else{
	    		header('location:?status=error&message=Terjadi kesalahan. silahkan ulangi lagi');
	    	}
	    } else {
	    	header('location:?status=error&message=Hanya image yang berextensi JPG, PNG, dan JPEG yang diperbolehkan');
	    }
	}

?>