<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>VIOLETTA FLORIST</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
	<link rel="stylesheet" href="assets/css/bootstrap.css">
</head>
<body>

	<!-- header -->
	<div class="medsos">
		<div class="container">
			<ul>
				<li><a href="https://www.facebook.com/"><i class="fa-brands fa-square-facebook"></i><i></a></li>
				<li><a href="https://instagram.com/violettaflorist_bekasi?igshid=NGVhN2U2NjQ0Yg=="><i class="fa-brands fa-instagram"></i><i></a></li>
				<li><a href="https://wa.me/6285779082884?text=Mohon info tentang produk"><i class="fa-brands fa-whatsapp"></i><i></a></li>
				<li><a href="https://shorturl.at/gsEJX"><i class="fa-solid fa-location-dot"></i><i></a></li>	
			</ul>
		</div>
	</div>
	<header>
		<div class="container">
		<h1><a href="home.html"></a><b>VIOLETTA FLORIST</h1></b>
		<ul>
			<li><a href="home.html"><b>HOME</a></li></b>
			<li><a href="produk.html"><b>PRODUCT</a></li></b>
			<li class="active"><a href="pemesanan.html"><b>ORDER</a></li></b>
			<li><a href="index.html"><b>LOGOUT</a></li></b>
		</ul>
		</div>
	</header>
	<!-- End Header -->

	<div class="container">
		<h2>Data Pesanan</h2>
		<hr>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>No Telp</th>
					<th>Nama</th>
					<th>Produk</th>
					<th>Jumlah</th>
					<th>Total Harga</th>
					<th>Alamat</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><?php echo $_POST["nt"]; ?></td>
					<td><?php echo $_POST["nama_pelanggan"]; ?></td>
					<td><?php echo $_POST["paket"]; ?></td>
					<td><?php echo $_POST["jumlah"]; ?></td>
					<td><script>
						var bunga = prompt("Masukkan nama produk yang anda pilih : ");
						var harga = 0;

						if (bunga === "Carnation Bouquet") {
							harga = 175000
						} else if (bunga === "Blue Saffron Bouquet") {
							harga = 5900000
						} else if (bunga === "SunFlower Bouquet") {
							harga = 249000
						} else if (bunga === "Gypsophilla Bouquet") {
							harga = 460000
						} else {
							harga = 0
						}
						var jumlahBarang = <?php echo $_POST["jumlah"]; ?>;
                   		var totalharga = harga * jumlahBarang;

                   		document.write(totalharga);
					</script></td>
					<td><?php echo $_POST["alamat"]; ?></td>
				</tr>
			</tbody>
		</table>
		<a href="produk.html" class="btn btn-primary" onclick="alert('Terima Kasih Telah Berbelanja Di Violetta Florist, Pesanan Anda Akan Segera Kami Proses')">Pesan Sekarang</a>
	</div>
	<br></br>
	<br></br>
	<br></br>
	<br></br>
	<!-- footer -->
	<footer>
		<div class="container">
			<small> Copyright &copy; 2023 - Violetta florist, All Rights Reserved.</small>
		</div>
	</footer>
</body>
</html>