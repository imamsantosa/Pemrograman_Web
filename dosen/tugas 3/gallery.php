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
		<?php
			$key = true;
		
			include('header.php');
		?>
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