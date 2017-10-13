<?php 
	include '../connection.php';
	$saldo = $_POST['saldo'];
	$nisn = $_POST['nisn'];
	$nama = $_POST['nama'];
	$kelas = $_POST['kelas'];
	$akt = $_POST['angkatan'];
	$jk = $_POST['jk'];
	$ortu = $_POST['ortu'];
	$tlp = $_POST['tlp'];
	$almt = $_POST['alamat'];
	$tahun = date('Y');
	$tt = date('l, j F Y');
	$q = "SELECT * FROM siswa WHERE nisn = '$nisn'";
	$qu = $conn->query($q);
	if ($qu->num_rows >= 1) {
		header("location:../tambah_murid.php?m=nisn-duplicate");
	} else {
		$sql1 = "INSERT INTO siswa VALUES('', '$nisn', '$nama', '$kelas', '$jk', '$almt', '$tlp', '$akt', '$ortu')";
		$sql2 = "INSERT INTO total VALUES('', '$nisn', '$nama', '$saldo', '$tahun', 'Buka tabungan baru dengan saldo awal Rp.$saldo')";
		$sql3 = "INSERT INTO history VALUES('', '$nisn', '$nama', '$tt', 'Buka tabungan baru dengan saldo awal Rp.$saldo', '$saldo')";
		$conn->query($sql1);
		$conn->query($sql2);
		$conn->query($sql3);
		header("location:../tambah_murid.php?m=success");
	}

?>