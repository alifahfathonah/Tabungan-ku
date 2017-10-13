<?php include 'partials/header.php';?>
<!-- APP MAIN ==========-->
<main id="app-main" class="app-main">
  <div class="wrap">
	<section class="app-content">
		<div class="col-md-6">
			<div class="widget p-lg">
				<h4 class="m-b-lg">Detail Siswa</h4>
				<?php siswa_history();?>
			</div><!-- .widget -->
		</div>
		<div class="col-md-6">
			<div class="widget p-lg">
				<h4 class="m-b-lg">History Tabungan Siswa</h4>
				<table class="table table-bordered">
					<tbody>
						<tr>
							<th>Tanggal</th>
							<th>Keterangan</th>
							<th>Saldos</th>
						</tr>
						<?php history();?>
					</tbody>
				</table>
			</div><!-- .widget -->
		</div>
		
	</section><!-- #dash-content -->
</div><!-- .wrap -->
</main>
<?php include 'partials/footer.php';?>