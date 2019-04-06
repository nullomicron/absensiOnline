<?php

	include 'siswa.php';
	$no         = 1;
	$keterangan = $_POST["ket"];
	
	for ($i=0;$i<=17;$i++) {
		if (isset($keterangan)) {
			$keterangan[] = "Tidak Hadir";
		}
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	<title>Daftar Kehadiran</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<h1 id="title">Kehadiran Siswa</h1>
	<table>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Status</th>
		</tr>
		<?php for ($i=0;$i<=17;$i++) : ?>
			<tr>
				<td><?= $no; ?></td>
				<td><?= $siswa[$i]; ?></td>
				<?php if (isset($keterangan)) : ?>
					<td style="background-color: salmon;text-align: center;"><?= $keterangan[$i]; ?></td>
				<?php else : ?>
					<td style="background-color: lightgreen;text-align: center;"><?= $keterangan[$i]; ?></td>
				<?php endif; ?>
			</tr>
		<?php $no++ ?>
		<?php endfor; ?>
		<tr>
			<td id="klik" colspan="3"><a href="index.php"><button>Menu Utama</button></a></td>
		</tr>
	</table>
</body>
</html>