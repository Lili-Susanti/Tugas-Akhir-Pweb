<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body background="1.jpg">
<div class="jumbotron">

<?php
echo "<head><title>DATA SISWA</head></title>";
$fp = fopen("datasiswa.txt","a+");
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$pasword = $_POST['pasword'];


fputs($fp,"$nama|$nim|$pasword\n");
fclose($fp);
echo " Terima Kasih Atas Partisipasi Anda Mengisi Data<br>";
echo "<a class=btn href=bukuu.html> Isi Buku Tamu </a><br>";
echo "<a class=btn href=index.html> Lihat Profile </a><br> ";
?>
</div>
</body>
</html>