<h5>Tambah Kelainan</h5>
<?php 
$conn=mysqli_connect("localhost","root","","criswandi") or die("koneksi gagal coy");
include"koneksi.php";

$sql=mysqli_query($conn,"select * from kelainan where Kodekelainan ='$_GET[id]'");
$rs=mysqli_fetch_array($sql);
?>
<form class="col s12" method="post" action="konten/proses.php?proses=editkelainan">
	<div class="row"> 
		<div class="input-field col s12">
<input  type="text" class="validate" name="no" value="<?php  echo "$rs[No]";?>">
<label >No Kelainan</label> 
</div>
<div class="input-field col s12">
<input  type="text" class="validate" name="kode" value="<?php  echo "$rs[Kodekelainan]";?>">
<label >Kode Kelainan</label>

</div>
<div class="input-field col s12">
<input  type="text" class="validate" name="nama" value="<?php  echo "$rs[Namakelainan]";?>">
<label >Nama Kelainan</label>

</div>

<div class="input-field col s12">
            <textarea id="textarea1" class="materialize-textarea" name="solusi" value="" data-length="500"> <?php echo  "$rs[Solusi]";?></textarea>
            <label for="textarea1">Solusi</label>
          </div>


<div class="" align="right">
<button type="submit"class="btn btn-default">Edit</button>
</div>
</div>
	
</form>
