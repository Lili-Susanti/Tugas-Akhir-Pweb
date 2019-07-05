<html>
<head>
	<body style="background-image:url(1.jpg); "></body>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<!DOCTYPE html>
<html>
<head><style>
		table{
	font-family : times new roman,sans-serif;
	border-collapse: collapse;
	font-size: 70px;
	width :100%;
}
tr:nth-child(even){
	background-color: pink; 
}
td,th{
	border :0.5px solid blue;
	text-align: Left ;
	padding:30px;
}
</style>
	<title>DATA SISWA</title>
	<link rel="stylesheet" type="text/css" href="css/style4.css">
	<script language="javascript" src="js/javascript.js"></script>
</head>
<body>

<div class="header">
	<center><font color="black"size="10">UNIVERSITAS AHMAD DAHLAN YOGYAKARTA</font><br><br></center>
	<h1 style="font-size: 40px; font-family: verdana; float: left; color: white;" id="jam"></h1>
<center>
	<img src="img/uad.jpg" width="70px" height="70px">
	<img src="img/o.png" width="70px" height="70px">
	<br>
</div>
	<div class="menubar">
		<ul>
		<li><a href="home.html"><b>Home</b></a></li>
			<li><a href="index.html"><b>Biodata</b></a></li>
			<li><a href="materi.html"><b>Materi Kuliah</a></b></li>
			<li><a href="cari.html"><b>Pencarian</b></a></li>
			<li><a href="lihat.php"><b>Data Siswa Masuk</b></a></li>
			<li><a href="bukuu.html"><b>Data Siswa Masuk</b></a></li>
			<form name="formcari" onSubmit="cari()"><pre>
  			<input class="search" name="keyword" type="text" placeholder="Cari..." required><input class="button" type="submit" value="Cari">		
			</form></pre>
		</ul>
</div>	
<div class="menu2">
	<center>
	<br><br>
	<h2><font color="black">LIHAT DATA</font></h2>
	<hr width="90%">
	<div class="profil">
	
<script type="text/javascript">
 window.onload = function() { jam(); }

 function jam() {
  var e = document.getElementById('jam'),
  d = new Date(), h, m, s;
  h = d.getHours();
  m = set(d.getMinutes());
  s = set(d.getSeconds());

  e.innerHTML = h +':'+ m +':'+ s;

  setTimeout('jam()', 1000);
 }

 function set(e) {
  e = e < 10 ? '0'+ e : e;
  return e;
 }
</script>
</div>

</body>
</html>

<?php
error_reporting(0);//Error_reporting adalah bagian dari sebuah fungsi php yang bertugas untuk menangani error. Dalam istilah ini sering di kenal dengan istilah  	error handling, yang artinya adalah sebuah cara pengendalian apabila error terjadi.
echo "<head><title>DATA SISWA</title></head>";
$fp = fopen("datasiswa.txt","r");//untuk membuka data file Data bayar.txt sekaligus menggunakan metode append 'a+' untuk dapat di tambahkan 
echo "<table border=0>";
while ($isi = fgets($fp,80))
{
$pisah = explode("|",$isi);
echo "<tr><td>Nama </td><td>: $pisah[0]</td></tr>";//fungsinya untuk Menampilkan Pelanggan  
echo "<tr><td>nim </td><td>: $pisah[1]</td></tr>";//fungsinya untuk Menampilkan Nama Barang  
echo "<tr><td>pasword </td><td>: $pisah[2]</td></tr>";//yaitu itu untuk menampilkan Jumlah
}
echo "</table>";
echo "<a class=btn href=bukuu.html> Isi Buku tamu </a>";
echo "<a class=btn href=cari.html> Pencarian </a>";
?>

</html>