<?php

?>
<span class="card-title">
  <h5>
    <center><strong>Tabel Basis Pengetahuan</strong></center>
  </h5>
</span>
<table class="striped scroll">
  <thead>
    <tr>
      <th>No</th>
      <th>Kode Penyakit</th>
      <th>Kode Gejala</th>
      <th align="center">Aksi</th>
    </tr>
  </thead>

  <tbody>
    <?php
    $no = 1;
    $sql = mysqli_query($conn, "SELECT * FROM basispengetahuan ");
    while ($ds = mysqli_fetch_array($sql)) {
    ?>

      <tr>
        <td> <?php echo $no; ?></td>
        <td><?php $kode = $ds['Kodekelainan'];

            $sql1 = mysqli_query($conn, "SELECT * FROM kelainan WHERE Kodekelainan ='$kode'");
            $rs1 = mysqli_fetch_array($sql1);
            echo $rs1["Namakelainan"];


            ?>

        </td>
        <td> <?php $kode2 = $ds['Kodegejala'];
              $sql2 = mysqli_query($conn, "select * from gejala where Kodegejala ='$kode2'");
              $rs2 = mysqli_fetch_array($sql2);
              echo $rs2["Namagejala"];


              ?>
        </td>
        <td>

          <a href="konten/proses.php?proses=hapus_basispengetahuan&id=<?php echo "$ds[id] " ?>">
            <button type="button" class="btn red accent-4">Hapus</button> </a>
        </td>
      </tr>
      </tr>
    <?php $no = $no + 1;
    } ?>
  </tbody>
</table>

<div align="right">
  <a class="modal-trigger" href="#modal1"> <button type="submit" class="btn light-blue darken-4">+ Tambah</button></a>
</div>
<div id="modal1" class="modal modal-fixed-footer">
  <div class="modal-content">
    <h5>Tambah Gejala</h5>




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

          $sql = mysqli_query($conn, "SELECT * from kelainan ");
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





  </div>
  <div class="modal-footer">
    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Tutup</a>
  </div>
</div>