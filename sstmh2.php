<?php
error_reporting(0);
$nm = $_POST['nama'];
$kl = $_POST['kloan'];
$harga = $kl * 7500;
//echo "Nama Pelanggan : ".$nm."<br>";
//echo "Total harga: Rp.".$harga."<br><br><br>";

$tglmsk = date('d.m.Y', strtotime($_POST['tgl']));
//echo "Tanggal Masuk:  $tglmsk"."<br>";
$tglambil = date('d.m.Y', strtotime('+2days', strtotime($tglmsk)));
//echo "Bisa diambil dari: $tglambil";


//Membuat connection 
$conn = mysqli_connect('localhost:3307', 'root', '', 'reg');

$mask="INSERT INTO `pesanan_kilo`(`nama`, `Kilopesanan`, `tanggal_masuk`, `tanggal_keluar`) VALUES ('$nm',$kl,'$tglmsk','$tglambil)";

$run=mysqli_query($conn,$mask);

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="style.css" rel="stylesheet">
</head>

<body>

	<div class="text1">
		<table class="table1">
			<tr class="tr1">
				<td colspan="5" class="heading1">
					<h1>Evan's Laundry</h1>
				</td>
			</tr>
			<tr>
				<td id="tgl"><?php echo "Tanggal Masuk : " . $tglmsk ?></td>
				<td></td>
				<td></td>
				<td></td>
				<td class="td1" id="tgl"><?php echo "Tanggal Ambil : " . $tglambil ?></td>
			</tr>
			<tr>
				<td colspan="5" class="td2"><?php echo "Nama Pelanggan : " . $nm ?></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td colspan="2" class="td3"><?php echo "Total Harga : Rp." . $harga ?></td>
			</tr>
			<tr>
				<td id="lk" colspan="5" class="td4"><a href="h1.php" class="link">Terima Kasih Karena Telah Memakai Jasa Kami</a></td>
			</tr>
		</table>
	</div>
	<a id="wa" href="h1.php" target="_blank"><img id="wa" src="./asset/WA.png" alt=""></a>
</body>

</html>

<style>
	#wa {
		position: fixed;
		float: right;
		top: 100px;
		height: 70px;
		right: 20px
	}
</style>