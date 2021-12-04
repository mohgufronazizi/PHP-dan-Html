<?
/*
Quiz

1. brang ada 3, harga (20.000, 30.000, 50.000)
2. diskon barang ke 3 saja: 20 %;
3. ketika total bayar > 75.000 dapat diskon 15%
4. diskon hanya boleh salah satu, dipilih diskon yang terbesar
5. hitung jumlah bayar
*/
$barang=3;
$harga=0;
$jenis_barang="";
$jumlah=5;

$bayar=0;

$diskon=15/100;
$diskon_brg3=20/100;

switch ($barang) {
	case 1:
		$jenis_barang= "barang 1";
		$harga=20000;
		$total=$harga*$jumlah;
		
		break;
	case 2:
		$jenis_barang= "barang 2";
		$harga=30000;
		$total=$harga*$jumlah;
		
		break;
	case 3:
		$jenis_barang= "barang 3";
		$harga=50000;
		$total=$harga*$jumlah;
		break;
}

if ( $total > 75000 && $jenis_barang=="barang 3") {
		$diskon_spesial=$total*$diskon_brg3;
		$bayar=$total-$diskon_spesial;
		$diskon_harga="20 %";

}
elseif ( $total > 75000 ){
	$hitungan_diskon=$total*$diskon;
	$bayar=$total-$hitungan_diskon;
	$diskon_harga="15 %";

}
else {
	$bayar=$total;
	$diskon_harga="-";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Quiz</title>
	<style type="text/css">
		body{
			background: whitesmoke;
		}
		table{
			font-family: cursive;
			text-align: center;
		}
		tr{
			background: antiquewhite;	
		}
		th{
			padding: 0px 10px 0px 10px;
			background: skyblue;
		}
		.container{
			width: 1000px;
			margin: auto;
		}
		.note{
			font-family: monospace;
			font-size: 10px;
			color: red;
		}
	</style>
</head>
<body>
	<div class="container">
	<p class="note">
		*Jika jumlah bayar lebih dari Rp 75.000 akan mendapatkan diskon<br>
		*Diskon default adalah 15%<br>
		*Khusus untuk barang 3 memiliki diskon 20%
	</p>
	<table>
		<tr>
			<th>Jenis Barang</th>
			<th>Harga Barang</th>
			<th>Jumlah Barang</th>
			<th>Diskon</th>
			<th>Jumlah Bayar</th>
		</tr>
		<tr>
			<td><?=$jenis_barang?></td>
			<td>Rp <?=$harga?></td>
			<td><?=$jumlah?></td>
			<td><?=$diskon_harga?></td>
			<td>Rp <?=$bayar?></td>
		</tr>
	</table>
	</div>
</body>
</html>