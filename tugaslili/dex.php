<html>
<head>
<title>Lili Susanti</title>

</head>
<body>
<div class="ketengah" color="red" align="center"><h3>My Profile</h3></div>
	<center><img src="naufal.JPG" class="img-thumbnail img-fluid" width="300" height="400" alt="Cinque Terre">
	<table class="table">
	<div class="table-responsive">
		<table class="table  table-striped table-hover">
			<body style="background-image:url(warni.jpg); ">
		<tbody>
			<tr>
				<td><h4>Nama</h4></td>
				<td><h4> : </h4></td>
				<td><h4>Lili Susanti</h4></td>
			</tr>
			<tr>
				<td><h4>NIM</h4></td>
				<td><h4> : </h4></td>
				<td><h4>1800018030</h4></td>
			</tr>
			<tr>
				<td><h4>Prodi</h4></td>
				<td><h4> : </h4></td>
				<td><h4>Teknik Informatika</h4></td>
			</tr>
			<tr>
				<td><h4>Alamat</h4></td>
				<td><h4> : </h4></td>
				<td><h4>Jl. Taman Siswa No.37b, DIY</h4></td>
			</tr>
			</tbody></center>
	</table>
<a aling="center" href="bukuu.html" class="btn btn-primary btn-lg">Buku Tamu</a>
<a aling="center" href="lihat.php" class="btn btn-info btn-lg">Lihat Pengunjung</a>
<?php
$filecounter="counter.txt";
$fl=fopen($filecounter,"r+");
$hit=fread($fl,filesize($filecounter));
echo("<table width=300 align=center border=1 cellspacing=0 cellpadding=0
bordercolor=#0000FF size=4><tr>");
echo("<td width=300 valign=middle align=center>");
echo("<font face=verdana size=4 color=#FF0000><b>");
echo("Anda pengunjung yang ke:");
echo($hit);
echo("</b></font>");
echo("</td>");
echo("</tr></table>");
fclose($fl);
$fl=fopen($filecounter,"w+");
$hit=$hit+1;
fwrite($fl,$hit,strlen($hit));
fclose($fl);
?>
</body>

</html>