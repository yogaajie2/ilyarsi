<!doctype html>
<html lang="en">

  <?php include ('fungsi/koneksi.php'); ?>

  <head>

  	<?php include ('head.html'); ?>

  	<title>Ilyarsi Okularis</title>
  </head>
  
  <body>
  	<div class="container-fluid sticky-top menu">
  		<div class="container">

    		<?php include ('navbar.html') ?>
    	
    	</div>
  	</div>

    <div class="container-fluid px-0">
    	<div id="main-carousel" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active carousel-slide-1">
		    		<div class="container h-50 d-flex align-items-center">
						<h1 class="display-3 text-uppercase mx-auto top-slogan" style="text-align: center;">New Eye, New Life</h1>
					</div>
					<div class="container h-50 d-flex align-items-center">
						<a class="btn btn-lg jumbotron-button mx-auto" href="projects.php">Read More</a>
					</div>
		    	</div>
			    <div class="carousel-item carousel-slide-2">
		    		<div class="container h-50 d-flex align-items-center">
						<h1 class="display-3 text-uppercase mx-auto top-slogan" style="text-align: center;">New Eye, New Life</h1>
					</div>
					<div class="container h-50 d-flex align-items-center">
						<a class="btn btn-lg jumbotron-button mx-auto" href="projects.php">Read More</a>
					</div>
		    	</div>
		  	</div>
		  	<a class="carousel-control-prev" href="#main-carousel" role="button" data-slide="prev">
		    	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    	<span class="sr-only">Previous</span>
		  	</a>
		  	<a class="carousel-control-next" href="#main-carousel" role="button" data-slide="next">
		    	<span class="carousel-control-next-icon" aria-hidden="true"></span>
		    	<span class="sr-only">Next</span>
		  	</a>
		</div>
    </div>

	<div class="container">
		<div class="row my-3">
			<div class="col">
				<p>On TV</p>
			</div>
		</div>
		<div class="row mb-5">

			<?php
				$fitur = "SELECT * FROM fitur WHERE bahasa_fitur = 'en'";
				$hasil_fitur = mysqli_query($koneksi, $fitur);

				while ($row_fitur = mysqli_fetch_array($hasil_fitur, MYSQLI_ASSOC)) {
			?>

			<div class="col-md-4">
			  <img class="img-fluid main-features mb-3" src="<?php echo $row_fitur['gambar_fitur']; ?>">
			    <h4><?php echo $row_fitur['nama_fitur']; ?></h4>
			</div>

			<?php } ?>

		</div>
	</div>

	<!-- <div class="container-fluid gray-background py-5">
		<div class="row mt-5 justify-content-center">
			<h3 class="text-uppercase">Our Works</h3>
		</div>
		
		<div class="row my-5">
			<div class="col-4 d-flex align-items-center justify-content-center">
				<img class="img-fluid" src="img/icons/icon-1.png" style="width: 70px;">
			</div>
			<div class="col-4 d-flex align-items-center justify-content-center">
				<img class="img-fluid" src="img/icons/icon-2.png" style="width: 70px;">
			</div>
			<div class="col-4 d-flex align-items-center justify-content-center">
				<img class="img-fluid" src="img/icons/icon-3.png" style="width: 70px;">
			</div>
		</div>
		<div class="row mb-5">

			<?php
				$pekerjaan = "SELECT * FROM pekerjaan WHERE bahasa_pekerjaan = 'en'";
				$hasil_pekerjaan = mysqli_query($koneksi, $pekerjaan);

				while ($row_pekerjaan = mysqli_fetch_array($hasil_pekerjaan, MYSQLI_ASSOC)) {
			?>

			<div class="col-4 d-flex align-items-center justify-content-center">
				<h4 class="work-name"><?php echo $row_pekerjaan['nama_pekerjaan']; ?></h4>
			</div>
			
			<?php } ?>

		</div>
	</div> -->

	<div class="container-fluid px-0">
    	<div id="testi-carousel" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active carousel-slide-1">
		    		<div class="container h-50 d-flex align-items-center">
						<h1 class="display-3 text-uppercase mx-auto top-slogan" style="text-align: center;">Foto</h1>
					</div>
					<div class="container h-50 d-flex align-items-center">
						<h3 style="color: #fff;">"Terima kasih saya ucapkan kepada bapak Rizwan dan mba Desy yang telah membantu Nadhira. Mata palsunya sangat bagus persis seperti aslinya nyaman dipakai oleh nadhira. Sekali lagi terima kasih banyak semoga bapak Rizwan dan mba Desy dimudahkan rejekinya dan dimudahkan segala urusannya. Aamiin."</h3>
					</div>
		    	</div>
			    <div class="carousel-item carousel-slide-2">
		    		<div class="container h-50 d-flex align-items-center">
						<h1 class="display-3 text-uppercase mx-auto top-slogan" style="text-align: center;">Foto</h1>
					</div>
					<div class="container h-50 d-flex align-items-center">
						<h3 style="color: #fff;">"Terima kasih saya ucapkan kepada bapak Rizwan dan mba Desy yang telah membantu Nadhira. Mata palsunya sangat bagus persis seperti aslinya nyaman dipakai oleh nadhira. Sekali lagi terima kasih banyak semoga bapak Rizwan dan mba Desy dimudahkan rejekinya dan dimudahkan segala urusannya. Aamiin."</h3>
					</div>
		    	</div>
		  	</div>
		  	<a class="carousel-control-prev" href="#testi-carousel" role="button" data-slide="prev">
		    	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    	<span class="sr-only">Previous</span>
		  	</a>
		  	<a class="carousel-control-next" href="#testi-carousel" role="button" data-slide="next">
		    	<span class="carousel-control-next-icon" aria-hidden="true"></span>
		    	<span class="sr-only">Next</span>
		  	</a>
		</div>
    </div>

    <!-- <div class="jumbotron jumbotron-fluid center-jumbotron my-0">
    	<div class="container d-flex h-100 align-items-center">
    		<div class="row">
    			<div class="col-9">
    				<h1 style="text-transform: uppercase;" class="center-jumbotron-text">Contributed to the nation's development since 2002</h1>
    				<br>
    				<a class="btn btn-lg jumbotron-button" href="#">Our Story</a>
    			</div>
    		</div>
    	</div>
    </div> -->

    <!-- <div class="container-fluid gray-background py-5">
    	<div class="row justify-content-center mt-5">
			<h3 class="text-uppercase">Latest Projects</h3>
		</div>
		<div class="container">
			<div class="row mt-5">

				<?php
	                $proyek = "SELECT * FROM proyek WHERE bahasa_proyek = 'en' ORDER BY id_proyek DESC LIMIT 4";
	                $hasil_proyek = mysqli_query($koneksi, $proyek);

	                while ($row_proyek = mysqli_fetch_array($hasil_proyek, MYSQLI_ASSOC)) {
	            ?>

				<div class="col-md-3 py-3">
					<div class="container position-relative d-inline-block">
						<img class="img-fluid" src="<?php echo $row_proyek['gambar_proyek']; ?>">
						<div class="container position-absolute project-overlay">
	                        <div class="position-absolute project-overlay-text">
	                            <h3><?php echo $row_proyek['nama_proyek']; ?></h3>
	                            <p><?php echo $row_proyek['lokasi_proyek']; ?></p>
	                        </div>
	                    </div>
					</div>
				</div>

				<?php } ?>

			</div>
			<div class="row my-5 justify-content-center">
				<a class="btn btn-lg jumbotron-button" href="projects.php">See All Projects</a>
			</div>
		</div>
	</div> -->

	<div class="container">
		<div class="row mt-5">
			<div class="col-md-6"></div>
			<div class="col-md-6">
				<h1>Gerakan Seribu Mata Palsu</h1>
				<p>Membuat mata palsu bukanlah pekerjaan yang mudah. Dari prosesnya yang panjang, masih dibutuhkan lagi proses pengepasan di mata pasien lagi. Benar-benar dibutuhkan sekali kesabaran...</p>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col">
				<p>Frequently Asked Questions</p> 
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="row">
					<div class="col">
						<h3>Masa Pakai Mata Palsu</h3>
						<p>Ada tiga alasan mengapa mata palsu perlu diganti, biasanya harus diganti karena:Tidak lagi cocok dengan</p>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<h3>Masa Pakai Mata Palsu</h3>
						<p>Ada tiga alasan mengapa mata palsu perlu diganti, biasanya harus diganti karena:Tidak lagi cocok dengan</p>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<h3>Masa Pakai Mata Palsu</h3>
						<p>Ada tiga alasan mengapa mata palsu perlu diganti, biasanya harus diganti karena:Tidak lagi cocok dengan</p>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="row">
					<div class="col">
						<h3>Masa Pakai Mata Palsu</h3>
						<p>Ada tiga alasan mengapa mata palsu perlu diganti, biasanya harus diganti karena:Tidak lagi cocok dengan</p>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<h3>Masa Pakai Mata Palsu</h3>
						<p>Ada tiga alasan mengapa mata palsu perlu diganti, biasanya harus diganti karena:Tidak lagi cocok dengan</p>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<h3>Masa Pakai Mata Palsu</h3>
						<p>Ada tiga alasan mengapa mata palsu perlu diganti, biasanya harus diganti karena:Tidak lagi cocok dengan</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- <div class="container">
		<div class="row mt-5">
			<div class="col-md-6">
				<h3 class="text-uppercase">Our Clients</h3>
				<div class="row my-3">
					<div class="col">
						<table class="table-bordered text-center" style="width: 100%; height: 200px;">
							<tr>

								<?php
									$client = "SELECT * FROM client ORDER BY id_client DESC";
									$hasil_client = mysqli_query($koneksi, $client);

									$i = 0;

									while ($row_client = mysqli_fetch_array($hasil_client, MYSQLI_ASSOC)) {
								?>

								<td>
									<h3><?php echo $row_client['nama_client']; ?></h3>
								</td>

								<?php 
						          $i++;
						          if ($i % 3 == 0) {
						            echo '</tr><tr>';
						          }
						        ?>

						    	<?php } ?>
					
						</table>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<h3 class="text-uppercase">Testimonials</h3>

				<?php
					$testimonial = "SELECT * FROM testimonial WHERE bahasa_testimonial = 'en' ORDER BY id_testimonial DESC LIMIT 2";
					$hasil_testimonial = mysqli_query($koneksi, $testimonial);

					while ($row_testimonial = mysqli_fetch_array($hasil_testimonial, MYSQLI_ASSOC)) {
				?>

				<blockquote class="blockquote">
					<p><?php echo $row_testimonial['isi_testimonial']; ?></p>
					<p class="blockquote-footer"><?php echo $row_testimonial['sumber_testimonial']; ?></p>
				</blockquote>

				<?php } ?>

			</div>
		</div>
    </div> -->

    <?php include ('footer.php') ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>