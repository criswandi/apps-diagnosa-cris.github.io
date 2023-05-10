<?php
include "koneksi.php";
session_start();
$nama = $_POST['nama'];
$usia = $_POST['usia'];
$alamat = $_POST['alamat'];
$_SESSION['user'] = $nama;
$_SESSION['usia'] = $usia;
$_SESSION['alamat'] = $alamat;


?>
<table>
    <tr>
        <th width="20px">Nama</th>
        <th width="10px">:</th>
        <th><?php echo $nama; ?></th>
    </tr>
    <tr>
        <th>Usia</th>
        <th>:</th>
        <th><?php echo $usia; ?></th>
    </tr>
    <tr>
        <th>Alamat</th>
        <th>:</th>
        <th><?php echo $alamat; ?></th>
    </tr>


</table>



<form method="post" action="index.php?konten=hasildiagnosa">


    <table class="striped scroll">
        <thead>
            <tr>
                <th>No</th>
                <th>Gejala</th>
                <th align="center">Aksi</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $no = 1;
            $sql = mysqli_query($conn, "SELECT * from gejala ");
            while ($ds = mysqli_fetch_array($sql)) {
            ?>

                <tr>
                    <td> <?php echo $no; ?> </td>
                    <td><?php echo $ds['Namagejala']; ?> </td>
                    <td>
                        <p>
                            <input type="checkbox" class="filled-in" id="<?php echo $no; ?>" name="<?php echo $no; ?>" value="<?php echo $ds["Kodegejala"]; ?>" />
                            <label class="black-text" for="<?php echo $no; ?>"><?php echo $ds["Namagejala"]; ?></label>
                        </p>
                </tr>
            <?php $no = $no + 1;
            } ?>
        </tbody>
    </table>




    <button type="submit" class="btn btn-default">Diagnosa</button>
</form>