<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	
	
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
													<p>Respon Audience</p>
													<canvas id="myChart2"></canvas>
												</div>
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
										color: "#F7464A",
										highlight: "darkgrey",
										label: "Positive"
									},
									{
										value: 561,
										color: "rgb(72, 167, 221)",
										highlight: "black",
										label: "Negative"
									},
									{
										value: 1513,
										color: "rgb(0, 255, 0)",
										highlight: "grey",
										label: "Neutral"
									},
								];

								var data = [
									{
										value: 2758,
										color: "#FDB45C",
										highlight: "darkgrey",
										label: "Relatable"
									},
									{
										value: 1520,
										color: "#46BFBD",
										highlight: "black",
										label: "UnRelatable"
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
											<span class="icon"><i class="flaticon-ribbon"></i></span>
											<div class="desc">
												<span class="colorlib-counter js-counter" data-from="0" data-to="4278" data-speed="5000" data-refresh-interval="50"></span>
												<span class="colorlib-counter-label">Youtube's video commentar we use for making this web App</span>
											</div>
										</div>
									</div>
									<div class="col-md-4 col-sm-4 text-center animate-box">
										<div class="counter-entry">
											<span class="icon"><i class="flaticon-church"></i></span>
											<div class="desc">
												<span class="colorlib-counter js-counter" data-from="0" data-to="2193" data-speed="5000" data-refresh-interval="50"></span>
												<span class="colorlib-counter-label">From that are positive commentar</span>
											</div>
										</div>
									</div>
									<div class="col-md-4 col-sm-4 text-center animate-box">
										<div class="counter-entry">
											<span class="icon"><i class="flaticon-dove"></i></span>
											<div class="desc">
												<span class="colorlib-counter js-counter" data-from="0" data-to="561" data-speed="5000" data-refresh-interval="50"></span>
												<span class="colorlib-counter-label">From that are negative commentar</span>
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
				<td><a href="<?=$value['link']?>" target='_blank'>Watch Video</a></td>
			</tr>
	<?php 	endforeach; ?>

  </tbody>
</table>
<br><br>
</div>

<div class="judul">
	<hr>
		<center><h1><br>Detail Data Komentar</></center>
		
</div>
<br>
    <div class="row" style="font-size: 13px">
        <div class="col-md-10 offset-md-1">
            <table id="bimz" class="table table-striped table-bordered">
                <thead>
                    <tr>
                    	<th style="width: 8px">No</th>
                        <th>Judul</th>
                        <th style="width: 15px">Actions</th>
                    </tr>
                </thead>
                <tbody>
                	<tr>
		                <td>1</td>
		                <td>Berita dan Politik-Kepastian di Antara Ketidakpastian Catatan Najwa</td>
		                <td>
		                	<a href="index.php?page=details1">
		                		<button type="button" class="btn btn-primary">Details</button>
		                	</a>
		                </td>
		            </tr>
		            <tr>
		                <td>2</td>
		                <td>Berita dan Politik-Mengenal Miangas, Pulau Indonesia yang Lebih Dekat ke Filipina</td>
		                <td>
		                	<a href="index.php?page=details2">
		                		<button type="button" class="btn btn-primary">Details</button>
		                	</a>
		                </td>
		            </tr>
		            <tr>
		                <td>3</td>
		                <td>Berita dan Politik-Viral Video Polisi Kejar dan Tembaki Dua Begal Bermotor di Jalan Raya Bekasi</td>
		                <td>
		                	<a href="index.php?page=details3">
		                		<button type="button" class="btn btn-primary">Details</button>
		                	</a>
		                </td>
		            </tr>
		            <tr>
		                <td>4</td>
		                <td>Education-Apa Itu Ilmu Kimia Sebenarnya</td>
		                <td>
		                	<a href="index.php?page=details4">
		                		<button type="button" class="btn btn-primary">Details</button>
		                	</a>
		                </td>
		            </tr>
		            <tr>
		                <td>5</td>
		                <td>Education-Fungsi Pendidikan Selain Supaya Bisa Nyari Uang</td>
		                <td>
		                	<a href="index.php?page=details5">
		                		<button type="button" class="btn btn-primary">Details</button>
		                	</a>
		                </td>
		            </tr>
                </tbody>
            </table>
        </div>
    </div>
<br>

<script type="text/javascript">
	$(document).ready(function () {
        $('#bimz').DataTable({
        	"paging":   false,
	        "info":     false
        });
    });
</script>
