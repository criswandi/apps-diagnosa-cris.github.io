  <span class="card-title"><h5><center><strong>Tabel Penyakit</strong></center></h5></span>
                     
  <table class="striped scroll" >
          <thead>
            <tr>
                <th width="10%">No</th>
                <th  >Kode penyakit</th>
                <th >Nama  penyakit</th>
                 <th>Solusi</th>
                 <th >Aksi</th>
            </tr>
          </thead>

          <tbody>
          	
  <?php 
  $no=1;
  $sql=mysqli_query($conn,"select * from kelainan ");
  while($ds=mysqli_fetch_array($sql))
      {
  ?>
            <tr>
              <td> <?php echo $no;?></td>
              <td> <?php echo $ds['Kodekelainan'];?></td>
              <td> <?php echo $ds['Namakelainan'];?></td>
              <td> <?php echo $ds['Solusi'];?></td>
              <td >
              <a href="index.php?konten=editkelainan&id=<?php echo "$ds[Kodekelainan] "?>">
              <button type="button" class="btn  "> Ubah </button></a>
              <a href="konten/proses.php?proses=hapus_kelainan&id=<?php echo "$ds[Kodekelainan] "?>">
            <button type="button" class="btn red accent-4">Hapus</button> </a>
           
  </td>          </tr>
              <?php $no=$no+1; } ?>         

          </tbody>
        </table>
              <div align="right"><a class="modal-trigger" href="#modal1"><button type="submit" class="btn light-blue darken-4">+ Tambah</button></a>  
</div>

 <!-- Modal Trigger -->
  
  <!-- Modal Structure -->
  <div id="modal1" class="modal modal-fixed-footer">
    <div class="modal-content">
      

<h5>Tambah Data</h5>
<form class="col s12" method="post" action="konten/proses.php?proses=tambahkelainan">
  <div class="row"> 
<div class="input-field col s12">
<input  type="text" class="validate" name="kode">
<label >Kode Penyakit</label>

</div>
<div class="input-field col s12">
<input  type="text" class="validate" name="nama">
<label >Nama Penyakit</label>

</div>

<div class="input-field col s12">
<input  type="text" class="validate" name="solusi">
<label >  Solusi</label>
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