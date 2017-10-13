<?php 
	include '../connection.php';
	include '../functions.php';

	$pen = $_POST['jumlah'];
	$nisn = $_POST['nisn'];
	$tahun = date('Y');
	$tanggal = date('l, j F Y');
	$salds = ambil_total($nisn) - $pen;
	$q = "SELECT * FROM siswa WHERE nisn = '$nisn'";
	$datas = $conn->query($q);
	$data = $datas->fetch_assoc();
	$nama = $data['nama'];

	$qu = "UPDATE total SET jumlah = jumlah-$pen, tahun = '$tahun', keterangan = 'Penarikan sebesar Rp.$pen pada $tanggal'";
	$ins = "INSERT INTO history VALUES('', '$nisn', '$nama', '$tanggal', 'Penarikan sebesar Rp.$pen pada $tanggal', '$salds')";
	$conn->query($qu);
	$conn->query($ins);
	header("location:../invoice.php?nisn=$nisn&status=pen&total=$pen");

?>