<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
  <title>Apps diagnosa</title>

  <!-- CSS  -->

  <link href="css/materialize11.css" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="css/font.css" rel="stylesheet">


  <style type="text/css">
    body {
      background: url('foto1.jpg') no-repeat scroll;
      background-size: 100% 100%;
      min-height: 700px;
    }
  </style>

</head>

<body>
  <?php


  ini_set("display_errors", "Off");
  session_start();
  $sesi = $_SESSION['nama'];
  if ($sesi == "") {
    include "menu.php";
  } else {
    include "menuadmin.php";
  } ?>


  <div class="container">
    <div class="card-panel  teal lighten-5 ">
      <?php include "koneksi.php"; ?>
      <?php include "isi.php"; ?>
    </div>
  </div>

  <?php include "footer.php";
  ?>



  <!--  Scripts-->

  <script src="js/materialize11.js"></script>

  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script src="js/java.js"></script>


  <script type="text/javascript">
    $(document).ready(function() {
      // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
      $('.modal').modal();
    });
  </script>

</body>

</html>