
<?php include 'partials/header.php';?>
<!-- APP MAIN ==========-->
<main id="app-main" class="app-main">
  <div class="wrap">
	<section class="app-content">
		<div class="col-md-12">
			<div class="widget">
				<header class="widget-header">
					<h4 class="widget-title">Input Tabungan</h4>
				</header><!-- .widget-header -->
				<hr class="widget-separator">
				<div class="widget-body">
					<div class="m-b-xl">
						<?php 
							$get = $_GET['m'];
							if (isset($get)) {
								if ($get === 'user-notfound') {
									echo '
									<div class="alert alert-danger">
									  <strong>Gagal!</strong> NISN Murid tidak ditemukan, silakan lakukan pendaftaran murid terlebih dahulu.
									</div>
									';
								} elseif ($get === 'success') {
									echo '
									<div class="alert alert-success">
									  <strong>Berhasil!</strong> Tabungan Murid Telah Di inputkan.
									</div>
									';
								}
							} else {

							}

						?>
						<form class="form-inline" method="post" action="process/tabungan.php">
							<div class="form-group">
								<label for="exampleInputName2">NISN</label>
								<input name="nisn" type="text" class="form-control" id="exampleInputName2" placeholder="* * *">
							</div>
							<div class="form-group">
								<label for="exampleInputEmail2">Nominal</label>
								<input name="nominal" type="text" class="form-control" id="exampleInputEmail2" placeholder="10000">
							</div>
							<button type="submit" class="btn btn-default">Masukkan</button>
						</form>
					</div>
				</div><!-- .widget-body -->
			</div><!-- .widget -->
		</div>
		<div class="col-md-12">
			<div class="widget p-lg">
				<h4 class="m-b-lg">Daftar Tabungan Siswa</h4>
				<table class="table table-bordered">
					<tbody>
						<tr>
							<th>NISN</th>
							<th>Nama</th>
							<th>Hari / Tanggal / Bulan</th>
							<th>Nominal</th>
							<th>Keterangan</th>
							<th>Aksi</th>
						</tr>
						<?php list_tabungan();?>
					</tbody>
				</table>
			</div><!-- .widget -->
		</div>
	</section><!-- #dash-content -->
</div><!-- .wrap -->
</main>
<?php include 'partials/footer.php';?>