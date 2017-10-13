<?php 
	include '../connection.php';
	include '../functions.php';
	session_start();
	$nisn = $_POST['nisn'];
	$nominal = $_POST['nominal'];
	$admin = $_SESSION['username'];
	$salds = ambil_total($nisn) + $nominal;
	$hari = date('l');
	$tanggal = date('j');
	$bulan = date('F');
	$date = date('l, j F Y');
	$tahun = date('Y');
	$sql = "SELECT * FROM siswa WHERE nisn = '$nisn'";
	$sql = $conn->query($sql);
	if ($sql->num_rows > 0) {
		$data = $sql->fetch_assoc();
		$nama = $data['nama'];
		$inp = "INSERT INTO tabungan VALUES('', '$nama', '$nisn', '$nominal', '$hari', '$tanggal', '$bulan', 'Setor tunai pada $date', '$admin')";
		$up = "UPDATE total SET  jumlah = jumlah+$nominal, keterangan = 'Baru setor tunai sebesar Rp.$nominal pada $date', tahun = '$tahun' WHERE nisn = '$nisn'";
		$his = "INSERT INTO history VALUES('', '$nisn', '$nama', '$date', 'Setor tunai sebesar Rp.$nominal', '$salds')";
	

		$conn->query($up);
		$conn->query($inp);
		$conn->query($his);
		header("location:../invoice.php?nisn=$nisn&status=tab&total=$nominal");
	} else {
		header("location:../tabungan.php?m=user-notfound");
	}

?>`