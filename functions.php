<?php 
	include 'connection.php';

	function total_murid(){
		global $conn;
		$query = "SELECT COUNT(*) AS total FROM siswa";
		$sql = $conn->query($query);
		while ($data = $sql->fetch_assoc()) {
			echo $data['total'];
		}
	}

	function total_tahunan(){
		global $conn;
		$thn = date('Y');
		$q = "SELECT SUM(jumlah) AS jml FROM total WHERE tahun = '$thn'";
		$sql = $conn->query($q);
		$data = $sql->fetch_assoc();
		echo $data['jml'];
	}

	function total_harian(){
		global $conn;
		$tgl = date('j');
		$bln = date('F');
		$q = "SELECT SUM(nominal) AS total FROM tabungan WHERE tanggal = '$tgl' AND bulan = '$bln'";
		$sql = $conn->query($q);
		$data = $sql->fetch_assoc();
		echo $data['total'];
	}

	function get_siswa($param){
		global $conn;
		$get = $_GET['nisn'];
		if (!isset($get)) {
			
		}
		$q = "SELECT * FROM siswa WHERE nisn = '$get'";
		$sql = $conn->query($q);
		$data = $sql->fetch_assoc();
		echo $data[$param];
	}
	function get_saldo(){
		global $conn;
		$get = $_GET['nisn'];
		if (!isset($get)) {
			
		}
		$q = "SELECT * FROM total WHERE nisn = '$get'";
		$sql = $conn->query($q);
		$data = $sql->fetch_assoc();
		echo $data['jumlah'];
	}

	function today_sofar(){
		global $conn;
		$dat = date('j');
		$bln = date('F');
		$q = "SELECT COUNT(*) AS total FROM tabungan WHERE tanggal = '$dat' AND bulan = '$bln'";
		$sql = $conn->query($q);
		$data = $sql->fetch_assoc();
		echo $data['total'];
	}

	function ambil_total($nisn){
		global $conn;
		$q = "SELECT * FROM total WHERE nisn = '$nisn'";
		$sql = $conn->query($q);
		$data = $sql->fetch_assoc();
		return $data['jumlah'];
	}
	
	function list_tabungan(){
		global $conn;
		$tanggal = date('j');
		$bulan = date('F');
		$query = "SELECT * FROM tabungan WHERE tanggal = '$tanggal' AND bulan = '$bulan'";
		$sql = $conn->query($query);
		if ($sql->num_rows > 0) {
			while ($data = $sql->fetch_assoc()) { ?>
				<tr>
					<td><?php echo $data['nisn'];?></td>
					<td><?php echo $data['nama'];?></td>
					<td><?php echo $data['hari'];?> / <?php echo $data['tanggal'];?> / <?php echo $data['bulan'];?></td>
					<td>Rp.<?php echo $data['nominal'];?></td>
					<td><?php echo $data['keterangan'];?></td>
					<td><a href="process/delete.php?id=<?php echo $data['id'];?>" class="btn btn-danger">Hapus</a></td>
				</tr>
			<?php }
		} else { ?>
			<tr class="odd"><td valign="top" colspan="6" class="dataTables_empty">Belum ada tabungan masuk pada hari ini </td></tr>	
		<?php }
	}

	function list_murid(){
		global $conn;
		$query = "SELECT * FROM siswa";
		$sql = $conn->query($query);
		
		while ($data = $sql->fetch_assoc()) { 
			$nisin = $data['nisn'];
			$q = "SELECT * FROM total WHERE nisn = '$nisin'";
			$qu = $conn->query($q);
			while ($sin = $qu->fetch_assoc()) { ?>
				<tr>
					<td><?php echo $data['nisn'];?></td>
					<td><?php echo $data['nama'];?></td>
					<td><?php echo $data['kelas'];?></td>
					<td><?php echo $data['jk'];?></td>
					<td><?php echo $data['alamat'];?></td>
					<td><?php echo $data['telp'];?></td>
					<td><?php echo $data['angkatan'];?></td>
					<td><?php echo $data['ortu'];?></td>
					<td>Rp.<?php echo $sin['jumlah'];?></td>
					<td><a href="history.php?nisn=<?php echo $data['nisn'];?>" class="btn rounded mw-small btn-info">History</a></td>
				</tr>
			<?php }
		}

	}

	function history(){
		global $conn;
		$nisn = $_GET['nisn'];
		$query = "SELECT * FROM history WHERE nisn = '$nisn' ORDER BY id DESC";
		$sql = $conn->query($query);
		if ($sql->num_rows > 0) {
			while ($data = $sql->fetch_assoc()) { ?>
				<tr>
					<td><?php echo $data['tanggal'];?></td>
					<td><?php echo $data['keterangan'];?></td>
					<td>Rp.<?php echo $data['saldo'];?></td>
				</tr>
			<?php }
		} else { ?>
			<tr class="odd"><td valign="top" colspan="6" class="dataTables_empty">Belum ada tabungan masuk pada hari ini </td></tr>	
		<?php }
	}

	function siswa_history(){
		global $conn;
		$nisn = $_GET['nisn'];
		$query = "SELECT * FROM siswa WHERE nisn = '$nisn'";
		$quers = "SELECT * FROM total WHERE nisn = '$nisn'";
		$sqls = $conn->query($quers);
		$sql = $conn->query($query);
		$des = $sqls->fetch_assoc();
		$data = $sql->fetch_assoc(); ?>
		<table class="table">
			<tr>
				<td width="30%">NISN</td>
				<td>: <?php echo $data['nisn'];?></td>
			</tr>
			<tr>
				<td width="30%">Nama</td>
				<td>: <?php echo $data['nama'];?></td>
			</tr>
			<tr>
				<td width="30%">Kelas</td>
				<td>: <?php echo $data['kelas'];?></td>
			</tr>
			<tr>
				<td width="30%">Angkatan</td>
				<td>: <?php echo $data['angkatan'];?></td>
			</tr>
			<tr>
				<td width="30%">Jenis Kelamin</td>
				<td>: <?php echo $data['jk'];?></td>
			</tr>
			<tr>
				<td width="30%">Telepon</td>
				<td>: <?php echo $data['telp'];?></td>
			</tr>
			<tr>
				<td width="30%">Nama Orang Tua</td>
				<td>: <?php echo $data['ortu'];?></td>
			</tr>
			<tr>
				<td width="30%">Alamat</td>
				<td>: <?php echo $data['alamat'];?></td>
			</tr>
			<tr>
				<td width="30%">Tahun Saldo</td>
				<td>: <strong><?php echo $des['tahun'];?></strong></td>
			</tr>
			<tr>
				<td width="30%">Total Saldo</td>
				<td>: <strong>Rp.<?php echo $des['jumlah'];?></strong></td>
			</tr>
		</table>
		<?php
	}

	function data_penarikan(){
		global $conn;
		$nisn = $_GET['nisn'];
		if (!isset($nisn)) {

		} else {
			$query = "SELECT * FROM siswa WHERE nisn = '$nisn'";
			$quers = "SELECT * FROM total WHERE nisn = '$nisn'";
			$sqls = $conn->query($quers);
			$sql = $conn->query($query);
			$des = $sqls->fetch_assoc();
			$data = $sql->fetch_assoc(); 
			if ($sql->num_rows >= 1) { ?>
				<div class="col-md-12">
					<?php 
						if (isset($_GET['status'])) {
							$get = $_GET['status'];
							if ($get === 'success') {
								echo '
								<div class="alert alert-success" role="alert">
									<strong>Berhasil! </strong>
									<span>Penarikan Berhasil dilakukan.</span>
								</div>';
							} else {

							}
						} else {

						}

					?>
					<div class="widget">
						<header class="widget-header">
							<h4 class="widget-title">Detail Siswa</h4>
						</header>
						<div class="widget-body">
							<table class="table">
								<tr>
									<td width="30%">Nisn</td>
									<td>: <?php echo $data['nisn'];?></td>
								</tr>
								<tr>
									<td width="30%">Nama</td>
									<td>: <?php echo $data['nama'];?></td>
								</tr>
								<tr>
									<td width="30%">Nama Orang Tua</td>
									<td>: <?php echo $data['ortu'];?></td>
								</tr>
								<tr>
									<td width="30%">Total Saldo</td>
									<td>: <strong>Rp.<?php echo $des['jumlah'];?></strong></td>
								</tr>
							</table>
							<hr/>
							<p>
								Pastikan nama orang tua sesuai dengan data KTP Orang tua / Wali dari murid tersebut untuk menghindari segala macam bentuk penipuan.
							</p>
						</div><!-- .widget-body -->

					</div><!-- .widget -->
					<div class="widget">
						<div class="widget-body">
							<form action="process/penarikan.php" method="post">
								<div class="form-group">
									<label for="exampleInputEmail1">Penarikan</label>
									<input name="jumlah" type="text" class="form-control">
									<input type="hidden" name="nisn" value="<?php echo $_GET['nisn'];?>">
								</div>
								<button type="submit" class="btn btn-primary btn-md">Proses</button>
							</form>
						</div>
					</div>
				</div>
			<?php } else { ?>
				<div class="alert alert-danger alert-custom alert-dismissible">
					<h4 class="alert-title">Maaf!</h4>
					<p>Data dengan NISN : <?php echo $_GET['nisn'];?>. Tidak ditemukan, silakan coba kembali</p>
				</div>
				<a href="penarikan.php" class="btn btn-primary">Kembali</a>
			<?php }
		}
		
	}
?>