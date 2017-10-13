
<?php include 'partials/header.php';?>
<!-- APP MAIN ==========-->
<main id="app-main" class="app-main">
  <div class="wrap">
	<section class="app-content">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<h3>Tambah Murid Baru</h3>
				<div class="m-b-xl">
					Mohon di isikan semua data secara lengkap
					<?php 
						$get = $_GET['m'];
						if (isset($get)) {
							if ($get === 'nisn-duplicate') {
								echo '
								<div class="alert alert-danger">
								  <strong>Gagal!</strong> Terdapat NISN yang sama dengan yang telah di inputkan sebelumnya.
								</div>
								';
							} elseif ($get === 'success') {
								echo '
								<div class="alert alert-success">
								  <strong>Berhasil!</strong> Input Murid Berhasil.
								</div>
								';
							}
						} else {

						}

					?>
				</div>
			</div>
			<div class="col-md-10 col-md-offset-1">

				<form action="process/tambah_murid.php" method="post" class="form-horizontal">
					<div class="form-group">
						<label for="control-demo-4" class="col-sm-3">Saldo Awal</label>
						<div class="col-sm-9">
							<input name="saldo" type="text" id="control-demo-4" class="form-control" value="5000"  required>
						</div>
					</div><!-- .form-group -->

					<hr/>

					<div class="form-group">
						<label for="control-demo-1" class="col-sm-3">NISN</label>
						<div class="col-sm-9">
							<input name="nisn" type="text" id="control-demo-1" class="form-control" required>
						</div>
					</div><!-- .form-group -->
					<div class="form-group">
						<label for="control-demo-2" class="col-sm-3">Nama</label>
						<div class="col-sm-9">
							<input name="nama" type="text" id="control-demo-2" class="form-control" required>
						</div>
					</div><!-- .form-group -->
					<div class="form-group">
						<label for="control-demo-3" class="col-sm-3">Kelas</label>
						<div class="col-sm-9">
							<select class="form-control" name="kelas">
								<option value="A1">A1</option>
								<option value="A2">A2</option>
								<option value="A3">A3</option>
								<option value="B1">B1</option>
								<option value="B2">B2</option>
								<option value="B3">B3</option>
							</select>
						</div>
					</div><!-- .form-group -->
					<div class="form-group">
						<label for="control-demo-4" class="col-sm-3">Angkatan</label>
						<div class="col-sm-9">
							<input name="angkatan" type="text" id="control-demo-4" class="form-control" placeholder="" required>
						</div>
					</div><!-- .form-group -->
					<div class="form-group">
						<label for="control-demo-4" class="col-sm-3">Jenis Kelamin</label>
						<div class="col-sm-9">
							<select class="form-control" name="jk">
								<option value="L">Laki - Laki</option>
								<option value="P">Perempuan</option>
							</select>
						</div>
					</div><!-- .form-group -->
					<div class="form-group">
						<label for="control-demo-4" class="col-sm-3">Nama Orang Tua</label>
						<div class="col-sm-9">
							<input name="ortu" type="text" id="control-demo-4" class="form-control" placeholder="" required>
						</div>
					</div><!-- .form-group -->
					<div class="form-group">
						<label for="control-demo-4" class="col-sm-3">Telpon</label>
						<div class="col-sm-9">
							<input name="tlp" type="text" id="control-demo-4" class="form-control" placeholder="" required>
						</div>
					</div><!-- .form-group -->
					<div class="form-group">
						<label for="control-demo-4" class="col-sm-3">Alamat</label>
						<div class="col-sm-9">
							<textarea name="alamat" class="form-control"></textarea>
						</div>
					</div><!-- .form-group -->

					<div class="form-group">

						<div class="col-sm-9">
							<input type="submit" value="Simpan" class="btn btn-default">
						</div>
					</div><!-- .form-group -->

					<!-- section -->
				</form>
			</div>
		</div>
	</section><!-- #dash-content -->
</div><!-- .wrap -->
</main>
<?php include 'partials/footer.php';?>