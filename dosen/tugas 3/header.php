<?php

if (isset($key)) {
	?>
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
	<?php
} else {
	header('location: index.php');
}

?>