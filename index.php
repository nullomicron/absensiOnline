<?php

	$menu = ["Lakukan Absensi", "Cek Absen"];
	$link = ["absen.php", "kehadiran.php"];
	$no   = 1;

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	<title>Selamat Datang | Absensi Online</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<h1 id="title">Absensi Online</h1>
	<table>
		<?php for ($i=0;$i<=1;$i++) : ?>
			<tr>
				<td><?= $no; ?></td>
				<td><?= $menu[$i]; ?></td>
				<td class="pil"><a href="<?= $link[$i]; ?>">Pilih</a></td>
			</tr>
		<?php $no++; ?>
		<?php endfor; ?>
	</table>
</body>
</html>