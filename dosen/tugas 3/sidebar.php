<?php

if (isset($key)) {
	?>
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
	<?php
} else {
	header('location: index.php');
}

?>