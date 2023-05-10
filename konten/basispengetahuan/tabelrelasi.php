<?php
$conn = mysqli_connect("localhost", "root", "", "criswandi") or die("koneksi gagal coy");
include "koneksi.php";

?>
</br>
</br>
</br>

<form method="post" action="konten/proses.php?proses=tambahrelasi">
	<div class="input-field col s12">
		<select class="browser-default" name="penyakit">
			<option value="" disabled selected> Pilih Kelainan</option>
			<?php

			$sql = mysqli_query($conn, "SELECT * from kelainan");
			while ($ds = mysqli_fetch_array($sql)) { ?>

				<option name="" value="<?php echo "$ds[Kodekelainan]"; ?> "><?php echo "$ds[Namakelainan]"; ?> </option>

			<?php }
			?>
		</select>
	</div>
	<div class="input-field col s12">
		<select class="browser-default" name="gejala">
			<option value="" disabled selected> Pilih Gejala</option>
			<?php

			$sql = mysqli_query($conn, "SELECT * from gejala");
			while ($ds = mysqli_fetch_array($sql)) { ?>

				<option value="<?php echo "$ds[Kodegejala]"; ?>"><?php echo "$ds[Namagejala]"; ?> </option>
			<?php
			} ?>

		</select>


	</div>
	</br>
	</br>

	<div class="col s1 offset-s1">
		<button type="submit" class="btn btn-default">Simpan</button>
	</div>
</form>