<?php
include"koneksi.php";
?><span class="card-title"><h5><center><strong>Tabel Gejala</strong></center></h5></span>

<table class="striped scroll" >
        <thead>
          <tr>
              <th >No</th>
              <th>Kode Gejala</th>
              <th  >Gejala</th>
              <th >Nilai Densitas</th>
               <th align="center">Aksi</th>
          </tr>
        </thead>

        <tbody>
        	<?php 
$no=1;
$sql=mysqli_query($conn,"select * from gejala ");
while($ds=mysqli_fetch_array($sql))
    {
?>

          <tr>
            <td> <?php echo $no;?> </td>
            <td> <?php echo $ds['Kodegejala'];?></td>
            <td><?php echo $ds['Namagejala'];?> </td>
            <td> <?php echo $ds['Nilaidensitas'];?></td>
            <td>
            <a href="index.php?konten=editgejala&id=<?php echo "$ds[Kodegejala] "?>">
            <button type="button" class="btn  ">Ubah</button>
            
            <a href="konten/proses.php?proses=hapus_gejala&id=<?php echo "$ds[Kodegejala] "?>">
            <button type="button" class="btn red accent-4">Hapus</button> </a></td>
          </tr>
           <?php $no=$no+1; } ?> 
        </tbody>
      </table>
      <br>
<div align="right">       
<a  class="modal-trigger" href="#modal1"> <button type="submit" class="btn light-blue darken-4">+ Tambah</button></a>  </div>            
  <div id="modal1" class="modal modal-fixed-footer">
    <div class="modal-content">
     <h5>Tambah Gejala</h5>
<form class="col s12" method="post" action="konten/proses.php?proses=tambahgejala">
  <div class="row"> 
<div class="input-field col s12">
<input  type="text" class="validate" name="kode">
<label >Kode Gejala</label>

</div>
<div class="input-field col s12">
<input  type="text" class="validate" name="nama">
<label >Nama Gejala</label>

</div>

<div class="input-field col s12">
<input  type="text" class="validate" name="nilai">
<label >  Nilai Densitas</label>
</div>
  </div>
<div class="col s1 offset-s1">
<button type="submit"class="btn btn-default">Simpan</button>
</div>
  
</form>

    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Tutup</a>
    </div>
  </div>