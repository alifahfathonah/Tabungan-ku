
<?php include 'partials/header.php';?>
<!-- APP MAIN ==========-->
<main id="app-main" class="app-main">
  <div class="wrap">
	<section class="app-content">
		<div class="col-md-12">
			<div class="widget p-lg">
				<h4 class="m-b-lg">Daftar Tabungan Siswa</h4>
				<table class="table table-bordered">
					<tbody>
						<tr>
							<th>NISN</th>
							<th>Nama</th>
							<th>Kelas</th>
							<th>Jenis Kelamin</th>
							<th>Alamat</th>
							<th>Telpon</th>
							<th>Angkatan</th>
							<th>Nama Orang Tua</th>
							<th>Saldo</th>
							<th>History</th>
						</tr>
						<?php list_murid();?>
					</tbody>
				</table>
			</div><!-- .widget -->
		</div>
	</section><!-- #dash-content -->
</div><!-- .wrap -->
</main>
<?php include 'partials/footer.php';?>