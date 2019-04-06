<?php

	include 'siswa.php';
	$no     = 1;
	$status = "Hadir";
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	<title>Absensi Online</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<h1 id="title">Daftar Siswa X RPL 1</h1>
	<table>
		<form action="kehadiran.php" method="post">
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Ceklis</th>
			</tr>
			<?php for ($i=0;$i<=17;$i++) : ?>
				<tr>
					<td><?= $no; ?></td>
					<td><?= $siswa[$i]; ?></td>
					<td id="ceklis">
						<label class="ceklis">
							<input type="checkbox" name="ket[]" value="<?= $status; ?>">
							<span class="checkmark"></span>
						</label>
					</td>
				</tr>
			<?php $no++; ?>
			<?php endfor; ?>
			<tr>
				<td id="klik" colspan="3"><button type="submit" name="submit">Kirim</button></td>
			</tr>
		</form>
	</table>
</body>
</html>