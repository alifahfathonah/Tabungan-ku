
<?php include 'partials/header.php';?>
<!-- APP MAIN ==========-->
<main id="app-main" class="app-main">
  <div class="wrap">
	<section class="app-content">
		
			<?php 
			if (isset($_GET['nisn'])) {
				# code...
			} else { ?>
			<div class="col-md-12">
			<div class="widget">
				<div class="widget-body">
					<form action="penarikan.php" method="get">
						<div class="form-group">
							<label for="exampleInputEmail1">NISN Siswa</label>
							<input name="nisn" type="text" class="form-control" id="exampleInputEmail1" placeholder="000">
						</div>
						<button type="submit" class="btn btn-primary btn-md">Cari</button>
					</form>
					
				</div>
			</div>
			</div>
			<?php } ?>
		<?php data_penarikan();?>
	</section><!-- #dash-content -->
</div><!-- .wrap -->
</main>
<?php include 'partials/footer.php';?>