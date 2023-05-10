<?php include "header.php"; ?>
<nav class="teal black-text" role="navigation">
	<div class="nav-wrapper ">
		<ul class="right hide-on-med-and-down">
			<li><a href="index.php?konten=admin" class="black-text">Home</a></li>
			<li><a href="index.php?konten=kelainan" class="black-text">Penyakit</a></li>
			<li><a href="index.php?konten=gejala" class="black-text">Gejala</a></li>
			<li><a href="index.php?konten=basispengetahuan" class="black-text">Basis Pengetahuan</a></li>
			<li><a href="logout.php" onclick="return confirm('Apakah Anda ingin keluar dari Sistem?')" class="black-text">Logout</a></li>
		</ul>

		<a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
	</div>
</nav>