<?php
if(!$_GET['konten']){
	include "home.php";}


if($_GET['konten']=="isibukutamu"){
	include "konten/user/isibukutamu.php";}
if($_GET['konten']=="admin"){
	include "konten/admin/admin.php";}
	
	if($_GET['konten']=="kelainan"){
	include "konten/kelainan/kelainan.php";}
	if($_GET['konten']=="gejala"){
	include "konten/gejala/gejala.php";}
	if($_GET['konten']=="basispengetahuan"){
	include "konten/basispengetahuan/basispengetahuan.php";}
	if($_GET['konten']=="editgejala"){
	include "konten/gejala/editgejala.php";}
if($_GET['konten']=="editkelainan"){
	include "konten/kelainan/editkelainan.php";}

if($_GET['konten']=="diagnosa"){
	include "konten/diagnosa/diagnosa.php";}
if($_GET['konten']=="hasildiagnosa"){
	include "konten/diagnosa/hasildiagnosa.php";}

?>

