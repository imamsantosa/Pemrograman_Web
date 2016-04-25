<?php
$filename = "file.txt";
$file = file_get_contents($filename);
$dataAll = explode("|R|", $file);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Chat Box Sederhana</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<container>
		<div class="chat-box">
			<div class="panel">
				<div class="chat-list">
					<div class="list">
						<?php
						if($dataAll[0] != ''){
							foreach ($dataAll as $baris) {
								$data = explode("|F|", $baris);	
								?>
								<div class="message">
									<div class="identity">
										<div class="name"><?php echo $data[0]; ?></div>
										<div class="email">&nbsp;(<a href="mailto:<?php echo $data[1]; ?>"><?php echo $data[1]; ?></a>)</div>
									</div>
									<div class="isi-chat"><?php echo $data[2]; ?></div>
								</div>
								<?php					
							}
						}
						?>
					</div>
				</div>
				<hr>
				<div class="chat-form">
					<form action="proses.php" id="form_chat" method="POST">
						<div class="form-inline">
							<div class="inline">
								<input type="text" id="nama" name="nama" class="form-input input-inline" placeholder="Nama..."/>
							</div>
							<div class="inline">
								<input type="text" id="email" name="email" class="form-input input-inline" placeholder="Email..."/>
							</div>
						</div>
						<textarea class="form-input input-text" id="content" name="content" placeholder="Isi Chat ..."></textarea>
						<input type="submit" name="submit_btn" value="Kirim" class="button-submit" onclick="validasi()"/>
					</form>
				</div>
			</div>
		</div>
	</container>
	<script type="text/javascript">
		function checkEmail(str) {
			var chkMail = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i.test(str);

			return chkMail;
		}
		function validasi() {
			event.preventDefault();
			var nama = document.getElementById('nama').value;
			var email = document.getElementById('email').value;
			var content = document.getElementById('content').value;

			if (nama == '') {
				alert("nama tidak boleh kosong gan!");
				return;
			}

			if (email == '') {
				alert("email tidak boleh kosong gan!");
				return;
			}

			if(!checkEmail(email)){
				alert("email tidak valid gan!");
				return;
			}

			if (content == '') {
				alert("content tidak boleh kosong gan!");
				return;
			}
			document.getElementById("form_chat").submit();
		}
	</script>

</body>
</html>