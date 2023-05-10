<?php
include"koneksi.php";
?>
<h5>Tambah Gejala</h5>
<?php 

$sql=mysqli_query($conn,"select * from gejala where Kodegejala ='$_GET[id]'");
$rs=mysqli_fetch_array($sql);
?>
<form class="col s12" method="post" action="konten/proses.php?proses=editgejala">
	<div class="row"> 
<div class="input-field col s12">
<input  type="text" class="validate" name="kode" value="<?php  echo "$rs[Kodegejala]";?>">
<label >Kode Gejala</label>

</div>
<div class="input-field col s12">
<input  type="text" class="validate" name="nama" value="<?php  echo "$rs[Namagejala]";?>">
<label >Nama Gejala</label>

</div>

<div class="input-field col s12">
<input  type="text" class="validate" name="nilai" value="<?php echo  "$rs[Nilaidensitas]";?>">
<label >  Nilai Densitas</label>
</div>
	</div>
<div align="right" class="col s1 offset-s1">
<button type="submit"class="btn btn-default">Edit</button>
</div>
	
</form>
