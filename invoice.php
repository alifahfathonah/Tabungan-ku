
<?php include 'partials/header.php';?>
<!-- APP MAIN ==========-->
<main id="app-main" class="app-main">
  <div class="wrap">
	<section class="app-content">
		<div class="container-fluid">
			<div class="panel panel-default">
				<div class="panel-heading bg-white">
					<h4 class="panel-title">KWITANSI</h4>
				</div>

				<div class="panel-body">
					<div class="row">
						<div class="col-sm-8 col-xs-6">
							<h4 class="fw-600">PAUD Beliti Darussalam,</h4>
							<p>Jl. Rambutan Dalams<br>RT. 06, Pasar Muara Beliti<br>Musi Rawas</p>
							<p>Telepon : 0853-8131-8521</p>

							<h4 class="m-t-lg fw-600">Invoice Kepada Orang Tua:</h4>
							<p><?php get_siswa('ortu');?></p>
							<p><?php get_siswa('alamat');?></p>
						</div>
						<div class="col-sm-4 col-xs-6">
							<h4 class="fw-600 text-right">
								<?php 
									if (isset($_GET['status'])) {
										$get = $_GET['status'];
										if ($get === 'pen') {
											echo 'NOTA PENARIKAN';
										} elseif ($get === 'tab') {
											echo 'NOTA SETORAN';
										}
									}

								?>
							</h4>
							<p class="text-right">Tanggal : <?php echo date('l, j F Y');?></p>

							<h4 class="m-t-lg fw-600">Detail Siswa:</h4>
							<div class="clearfix">
								<p class="pull-left">NISN Siswa :</p>
								<p class="pull-right"><?php get_siswa('nisn');?></p>
							</div>
							<div class="clearfix">
								<p class="pull-left">Nama Siswa :</p>
								<p class="pull-right"><?php get_siswa('nama');?></p>
							</div>
							<div class="clearfix">
								<p class="pull-left">Kelas :</p>
								<p class="pull-right"><?php get_siswa('kelas');?></p>
							</div>
							<div class="clearfix">
								<p class="pull-left">Angkatan :</p>
								<p class="pull-right"><?php get_siswa('angkatan');?></p>
							</div>
						</div>
						<img src="assets/PAUD2.jpg" id="watermark">
					</div>

					<div class="table-responsive m-h-lg">
						<table class="table">
							<tbody><tr><th>#</th><th>Deskripsi</th><th>Total</th></tr>
							<tr><td>#</td><td>
								<?php 
									if (isset($_GET['status'])) {
										$get = $_GET['status'];
										if ($get === 'pen') {
											echo 'Penarikan Tunai Sebesar Rp.'.$_GET['total'].' pada '.date('l, j F Y');
										} elseif ($get === 'tab') {
											echo 'Setoran Tunai Sebesar Rp.'.$_GET['total'].' pada '.date('l, j F Y');
										}
									}

								?>
							</td><td>Rp.<?php echo $_GET['total'];?></td></tr>
						</tbody></table>
					</div>

					<div class="row">
						<div class="col-sm-3 col-sm-push-9">
							<p>Jumlah Penarikan: <span class="text-primary">Rp.<?php echo $_GET['total'];?></span></p>
							<p>Sisa Saldo: <span class="text-primary">Rp.<?php get_saldo();?></span></p>
							
						</div>
						<?php 
							if (isset($_GET['status'])) {
								$get = $_GET['status'];
								if ($get === 'pen') { ?>
								<div class="col-sm-3">
									<p>Penerima</p>
									<br/>
									<br/>
									<br/>
									<p>( ............................... )</p>
								</div>
								<?PHP } elseif ($get === 'tab') {
								
								}
							}

						?>
					</div>

				</div><!-- .panel-body -->
			</div>
		</div>
		
	</section><!-- #dash-content -->
</div><!-- .wrap -->
</main>
<?php include 'partials/footer.php';?>