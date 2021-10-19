<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>OUTPUT</title>
</head>
<body>
	<h2>OUTPUT</h2>
<?php 

$nilai1=$_POST['nilai_satu'];
$nilai2=$_POST['nilai_dua'];
$lis=$_POST['lis'];

if (isset($_POST['submit'])){
	if ($lis=="segitiga"){
		$hasil=1/2*$nilai1*$nilai2;

		echo "Nilai a adalah=".$nilai1.'<br/>';
		echo "Nilai b adalah=".$nilai2.'<br/>';
		echo "Rumus Yang Dipilih= segitiga".'<br/>';
		echo "Hasil Perhitungan Rumus=".$hasil.'<br/>';
	}
	elseif ($lis=="persegi") {
		$hasil=$nilai1*$nilai2;

		echo "Nilai a adalah=".$nilai1.'<br/>';
		echo "Nilai b adalah=".$nilai2.'<br/>';
		echo "Rumus Yang Dipilih= persegi panjang".'<br/>';
		echo "Hasil Perhitungan Rumus=".$hasil.'<br/>';
	}
	else{
		echo "priksa pilihan";
	}
}


?>
<br>
<a href="input.php">
<button>Kembali ke INPUT</button></a>
</body>
</html>