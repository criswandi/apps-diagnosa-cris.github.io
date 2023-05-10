<?php
session_start();
?>


<table>
  <tr>
    <th width="20px">Nama</th>
    <th width="10px">:</th>
    <th><?php echo $_SESSION['user']; ?></th>
  </tr>
  <tr>
    <th>Usia</th>
    <th>:</th>
    <th><?php echo $_SESSION['usia']; ?></th>
  </tr>
  <tr>
    <th>Alamat</th>
    <th>:</th>
    <th><?php echo $_SESSION['alamat']; ?></th>
  </tr>


</table>




<?php
$koneksi = mysqli_connect("localhost", "root", "", "criswandi") or die("koneksi gagal coy");

//perintah mengambil value dari checkbox di masukkan kedalam array $gejalaygdipilih
$no = 1;
$sql = mysqli_query($koneksi, "select * from gejala ");
while ($rs = mysqli_fetch_array($sql)) {
  if ($_POST[$no] == "") {
  } else {
    $gejalaygdipilih[] = $_POST[$no];
  }
  $no = $no + 1;
}
if (count($gejalaygdipilih) < 2) {
  echo "gejala yang dipilih harus lebih dari satu ";
} else {


?>






  <?php

  for ($i = 0; $i < count($gejalaygdipilih); $i++) {
    $sql1 = mysqli_query($koneksi, "SELECT * from gejala where Kodegejala='$gejalaygdipilih[$i]' ");
    $rs1 = mysqli_fetch_array($sql1);
    $gejalapasien[] = $rs1["Namagejala"];
  }

  /// perhitungan awal
  $sql = mysqli_query($koneksi, "SELECT * FROM kelainan");
  while ($rs = mysqli_fetch_array($sql)) {
    $tempkombinasinama[] = $rs["Kodekelainan"];
  }
  mysqli_query($koneksi, "TRUNCATE temp");
  $jkt = implode("", $tempkombinasinama);

  mysqli_query($koneksi, "INSERT INTO temp (nama,nilai) 
    values(
      '$jkt',
      '1')");



  //perulangan untuk menampilkan gejala yang di pilih pada form diagnosa
  for ($i = 0; $i < count($gejalaygdipilih); $i++) {
    unset($nilai);
    unset($kata);
  ?>


    <?php
    //guery untuk menampilkan kombinasi penyakit
    $sql2 = mysqli_query($koneksi, "SELECT * FROM Basispengetahuan WHERE Kodegejala='$gejalaygdipilih[$i]' ");
    while ($rs2 = mysqli_fetch_array($sql2)) {
      $namapenyakit[] = $rs2["Kodekelainan"];
    }

    //query untuk menampilkan  nama gejala
    $sql1 = mysqli_query($koneksi, "SELECT * FROM gejala WHERE Kodegejala='$gejalaygdipilih[$i]' ");
    $rs1 = mysqli_fetch_array($sql1);


    $pl = 1 - $rs1["Nilaidensitas"];  ?>

<?php
    $sql3 = mysqli_query($koneksi, "select * from temp");
    while ($rs3 = mysqli_fetch_array($sql3)) {
      //inisialisasi data temp dari database menjadi variabel
      $value = $rs3["nama"];
      $key = $rs3["nilai"];
      //$value dan $value2 merupakan string yang akan di cari irisan nya      
      $value2 = implode("", $namapenyakit);
      // perintah irisan antar 2 kombinasi 
      for ($e = 0; $e < strlen($value); $e++) {
        for ($f = 0; $f < strlen($value2); $f++) {
          if ($value[$e] == $value2[$f]) {
            $komb[] = $value[$e];
          }
        }
      }

      $kata[] = implode("", $komb);
      $nilai[] = $rs1["Nilaidensitas"] * $key;
      unset($komb);
      $kata[] = $value;
      $nilai[] = $pl * $key;
    }
    //menyimpan hasil perkalian ke dalam array sekaligus menjumlahkan jika ada value yang sama
    for ($k = 0; $k < count($kata); $k++) {
      for ($l = $k + 1; $l < count($kata); $l++) {
        if ($kata[$k] == $kata[$l]) {
          $nilai[$k] = $nilai[$k] + $nilai[$l];
          unset($nilai[$l]);
        }
      }
    }
    $nilai = array_values($nilai);
    $kata = array_values(array_unique($kata));

    //$kata=array_unique($kata);
    //$nilai=array_values($nilai);      
    //echo implode(" | ", $nilai);
    //echo"</br>";
    //echo implode(" | ", $kata);
    for ($p = 0; $p < count($kata); $p++) {
    }



    // menentukan faktor pembagi pada rumus Dempster Shafer
    $tou = 0;
    for ($t = 0; $t < count($kata); $t++) {
      if ($kata[$t] == "") {
        $tou = $tou + $nilai[$t];
        unset($nilai[$t]);
      }
    }
    if (is_null($tou)) {
      $tou = 0;
    }
    $xy = 1 - $tou;


    mysqli_query($koneksi, "TRUNCATE temp");

    for ($m = 0; $m < count($kata); $m++) {

      $kata1 = $kata[$m];
      $nilai1 = $nilai[$m] / $xy;
      if ($kata[$m] == "") {
      } else {

        $proses = mysqli_query($koneksi, "INSERT INTO temp (nama,nilai) 
    values(
      '$kata1',
      '$nilai1')");
        mysqli_query($koneksi, " UPDATE temp SET nilai='$nilai1'where nama ='$kata1'");
      }
    }


    unset($namapenyakit);
    unset($irisannama);
  }
  unset($nilai);
  unset($kata);

  // hasil diagnosa
  $sqlq = mysqli_query($koneksi, "SELECT * FROM temp ORDER BY nilai DESC ");
  $rsq = mysqli_fetch_array($sqlq);
  $ab = $rsq["nama"];
  for ($i = 0; $i < strlen($ab); $i++) {
    $sqlqq = mysqli_query($koneksi, "SELECT * FROM kelainan where kodekelainan='$ab[$i]' ");
    $rsqq = mysqli_fetch_array($sqlqq);
    $pn[] = $rsqq["Namakelainan"];
    $solusi = $rsqq["Solusi"];
  }
  echo "<h3> <center>Hasil Diagnosa </h3>";
  echo "</br>";
  echo "Berdasarkan hasil dari gejala yang dialami, maka dapat Ditarik kesimpulan Buah Anda ";
  $persen = 100 * $rsq["nilai"];
  echo "Penyakit  " . implode(" ", $pn) . " ,sebesar: ";
  if ($persen > 80) {
    echo "<h2 class=red-text> <strong>";
  } else {
    echo "<h2 class=blue-text> <strong>";
  }
  echo $persen . " % </strong></h2>";
  $diag = " " . implode(" ", $pn) . " Dengan persentasi " . $persen . "";
  echo "<h4>Solusi <br> </h4>";
  echo  $solusi;
  unset($pn);
}
?>
<br>
<a href="index.php">BACK</a>
</center>