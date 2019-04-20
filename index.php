<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Menghitung rugi dan laba menggunakan PHP</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<h1>yudistira.xyz</h1>
	<h3>Membuat perhitungan laba dan rugi dengan PHP</h3>
	<br>
	<form method="POST">
		<table>
			<tbody>
				<tr>
					<td>Harga Jual</td>
					<td><input type="text" name="harga"></td>
				</tr>
				<tr>
					<td>Harga Beli</td>
					<td><input type="text" name="modal"></td>
				</tr>
				<tr>
					<td>
						<input type="submit" name="submit" value="Hitung!">
					</td>
				</tr>
			</tbody>
		</table>
		<?php 
			require 'hitung.php';
		 ?>
	</form>
</body>
</html>