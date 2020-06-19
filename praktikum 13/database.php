<!DOCTYPE html>
<html>
	<head>
		<title>Data Base</title>
	</head>

	<body>
		<h2>Menampilkan Pesanan Tiket</h2>
		<table border="1">
			<tr>
				<th>No</th>
				<th>No.Ktp</th>
				<th>Nama</th>
				<th>ALamat</th>
				<th>TTL</th>
				<th>Jenis Kelamin</th>
				<th>No.tlpn</th>
				<th>Stasuin Asal</th>
				<th>Stasuin Tujuan</th>
				<th>Jumlah Beli</th>
				<th>Nama Kereta </th>

			</tr>
			<?php
				include "koneksi.php";
				$no = 1;
				$data = mysqli_query($koneksi,"select * from daftar");
				while($d = mysqli_fetch_array($data)){
			?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $d['No.Ktp']; ?></td>
						<td><?php echo $d['Nama']; ?></td>
						<td><?php echo $d['Alamat']; ?></td>
						<td><?php echo $d['TTL']; ?></td>
						<td><?php echo $d['Jenis Kelamin']; ?></td>
						<td><?php echo $d['No.tlpn']; ?></td>
						<td><?php echo $d['Stasiun Asal']; ?></td>
						<td><?php echo $d['Stasiun Tujuan']; ?></td>
						<td><?php echo $d['Jumlah Beli']; ?></td>
						<td><?php echo $d['Nama Kereta']; ?></td>

					</tr>
				<?php
				}
				?>
		</table>
		
	</body>
</html>
