<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-countto/1.2.0/jquery.countTo.min.js"></script>
	
	
	<section id="home" class="video-hero" style="height: 500px; background-image: url(images/cover_img_1.jpg);  background-size:cover; background-position: center center;background-attachment:fixed;" data-section="home">
		<div class="overlay"></div>

			<div class="display-t display-t2 text-center">
				<div class="display-tc display-tc2">
					<div class="container">
						<div class="col-md-12 col-md-offset-0">
							<div class="animate-box">
								<h2>Data</h2>
								<p class="breadcrumbs"><span><a href="index.php">Home</a></span> <span>Data</span></p>
							</div>
						</div>
					</div>
				</div>
			</div>
	</section>

<br><br>

	<section>
		<div class="judul">
		<center><h1>Diagram Persentase Data Hasil Anotasi</></center>	
		</div>
			<!--CHART-->
				<div class="chart container">
					<div class="col-md-12">
						<div class="work-flex ">
							<div class="half animate-box chartbox">
								<div class="row no-gutters">
									<div class="no-gutters">
										<div class="display-t desc">
											<div class="display-tc">
												<div >
													<p>Respon Audiens</p>
													<canvas id="myChart2"></canvas>
												</div>
												<p>Keterangan : </p>
												<p>Biru : Komentar Positif</p>
												<p>Kuning : Komentar Negatif</p>
												<p>Hijau : Komentar Netral</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="half animate-box chartbox">
								<div class="row no-gutters">
									<div class="no-gutters">
										<div class="display-t desc">
											<div class="display-tc">
												<div>
													<p>Kesesuaian dengan Isi Konten</p>
													<canvas id="myChart"></canvas>
												</div>
												<p>Keterangan : </p>
												<p>Merah : Komentar Dalam Konteks (sesuai)</p>
												<p>Ungu : Komentar Luar Konteks (tidak sesuai)</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<script>
							$(document).ready(function(){
								var chrt = $("#myChart").get(0).getContext("2d");
								var chrt2 = $("#myChart2").get(0).getContext("2d");
			
								var data2 = [
									{
										value: 2193,
										color: "rgb(72, 167, 221)",
										highlight: "darkgrey",
										label: "Positif"
									},
									{
										value: 561,
										color: "#FDB45C",
										highlight: "black",
										label: "Negatif"
									},
									{
										value: 1513,
										color: "rgb(13, 150, 80)",
										highlight: "brown",
										label: "Netral"
									},
								];

								var data = [
									{
										value: 2753,
										color: "#F7464A",
										highlight: "darkgrey",
										label: "Dalam Konteks"
									},
									{
										value: 1520,
										color: "rgb(191, 0, 255)",
										highlight: "black",
										label: "Luar Konteks"
									},
								];
			
								var chart = new Chart(chrt).Doughnut(data);
								var chart = new Chart(chrt2).Doughnut(data2);
								
			
							});
						</script>

						<!--END OF CHART-->
					</div>
				</div>
				</section>




<div id="colorlib-counter" class="colorlib-counters" style="background-image: url(images/cover_img_1.jpg);" data-stellar-background-ratio="0.5">

		<div class="colorlib-work">
			<div class="container">
				<div class="row">
						<div class="overlay"></div>
						<div class="container">
							<div class="row">
								<div class="col-md-12">
									<div class="col-md-4 col-sm-4 text-center animate-box">
										<div class="counter-entry">
											<span class="icon"><i class="flaticon-church"></i></span>
											<div class="desc">
												<span class="colorlib-counter js-counter" data-from="0" data-to="2193" data-speed="5000" data-refresh-interval="50"></span>
												<span class="colorlib-counter-label">Komentar berisi komentar positif</span>
											</div>
										</div>
									</div>
									<div class="col-md-4 col-sm-4 text-center animate-box">
										<div class="counter-entry">
											<span class="icon"><i class="flaticon-ribbon"></i></span>
											<div class="desc">
												<span class="colorlib-counter js-counter" data-from="0" data-to="1513" data-speed="5000" data-refresh-interval="50"></span>
												<span class="colorlib-counter-label">Komentar berisi komentar netral</span>
											</div>
										</div>
									</div>
									<div class="col-md-4 col-sm-4 text-center animate-box">
										<div class="counter-entry">
											<span class="icon"><i class="flaticon-dove"></i></span>
											<div class="desc">
												<span class="colorlib-counter js-counter" data-from="0" data-to="561" data-speed="5000" data-refresh-interval="50"></span>
												<span class="colorlib-counter-label">Komentar berisi komentar negatif</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>	
</div>

<br><br>

<div class="judul">
		<center><h1>Sample Data Komentar</></center>
		
</div>
<br>	

<?php
 //ambil data json dari file
  $content=file_get_contents("Proses 1 - Scraping Komentar Youtube/ListVideo.json");

  //mengubah standar encoding
  $content=utf8_encode($content);

  //mengubah data json menjadi data array asosiatif
  $result=json_decode($content,true);
?>

<div class="container text-center mt-15 mb-8">
<table class="table table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Title</th>
	  <th scope="col">Channel</th>
      <th scope="col">Category</th>
      <th scope="col">Link Video</th>
    </tr>
  </thead>
  <tbody>
  
  	<?php foreach ($result as $value) : ?>
			<tr>
				<td scope="row"><a href="index.php?page=source&title=<?= $value["title"]; ?>"><?=$value['title']?></a></td>
				<td><?=$value['channel']?></td>
				<td><?=$value['category']?></td>
				<td><a href="<?=$value['link']?>" target='_blank'>Tonton Video</a></td>
			</tr>
	<?php 	endforeach; ?>

  </tbody>
</table>
<br><br>
</div>