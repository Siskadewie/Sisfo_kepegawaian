<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/login.css">

		<div class="utama">
    	<div class="kepala">
			<?php include "header.php" ?>
		</div>
    <!--ini untuk menu-->
		<div class="menu-malasngoding">
			<?php include "menu.php" ?>
		</div>
<?php
session_start();
session_destroy();

header("location: login.php");
?>
<div class="footer">
			<?php include "footer.php" ?>
		</div>
