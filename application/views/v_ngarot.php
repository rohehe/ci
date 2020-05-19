<!DOCTYPE html>
<html>
<head>
	<title>Daftar GAdis Ngarot</title>
</head>
<body>

	<table border="1px solid black">

		<tr>
			<th>Nama Peserta</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Foto</th>
		</tr>

		<?php foreach ($ngarotlelea as $ngarot) : ?>

			<tr>
				<td><?php echo $ngarot['nama']; ?></td>
				<td><?php echo $ngarot['umur']; ?></td>
				<td><?php echo $ngarot['alamat']; ?></td>
				<td><?php echo $ngarot['foto']; ?></td>
			</tr>

		<?php endforeach; ?>

	</table>

</body>
</html>