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
										value: 252,
										color: "#F7464A",
										highlight: "darkgrey",
										label: "Positive"
									},
									{
										value: 108,
										color: "rgb(72, 167, 221)",
										highlight: "black",
										label: "Negative"
									},
								];

								var data = [
									{
										value: 252,
										color: "#FDB45C",
										highlight: "darkgrey",
										label: "Relatable"
									},
									{
										value: 108,
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
												<span class="colorlib-counter js-counter" data-from="0" data-to="3875" data-speed="5000" data-refresh-interval="50"></span>
												<span class="colorlib-counter-label">Youtube's video commentar we use for making this web App</span>
											</div>
										</div>
									</div>
									<div class="col-md-4 col-sm-4 text-center animate-box">
										<div class="counter-entry">
											<span class="icon"><i class="flaticon-church"></i></span>
											<div class="desc">
												<span class="colorlib-counter js-counter" data-from="0" data-to="2735" data-speed="5000" data-refresh-interval="50"></span>
												<span class="colorlib-counter-label">From that are positive commentar</span>
											</div>
										</div>
									</div>
									<div class="col-md-4 col-sm-4 text-center animate-box">
										<div class="counter-entry">
											<span class="icon"><i class="flaticon-dove"></i></span>
											<div class="desc">
												<span class="colorlib-counter js-counter" data-from="0" data-to="1140" data-speed="5000" data-refresh-interval="50"></span>
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
<div class="container mt-15 mb-8">
<table class="table table-hover">
  <thead class="thead-dark">
    <tr>
	  <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Category</th>
      <th scope="col">Author</th>
      <th scope="col">Comment</th>
    </tr>
  </thead>
  <tbody>
    <tr>
	  <th scope="col">1</th>
      <td scope="row">Corona: Kepastian di Antara Ketidakpastian | Catatan Najwa</td>
      <td>News & Politics</td>
      <td>Agus Hardoyo</td>
      <td>Suka kalimat kuncinya : "kemampuan beradaptasi"</td>
    </tr>
    <tr>
	  <th scope="col">2</th>
      <td scope="row">WARTEG FAVORIT</td>
      <td>Entertainment</td>
      <td>dana wijayanto</td>
      <td>Salut sama Ria yg ga pernah pilih2 makanan yg mewah2 aja dan keliatan bgt enjoy makan diwarteg dan di pinggiran jalan karena menurut aku reviewers lain kebanyakan hanya review di tempat2 yg kategori menengah keatas tapi beda dg Ria yg tetep humble walau termasuk youtuber yg sudah mumpuni, salut dah pokoknya Salam dari Malang, kapan2 main kemalang lah Ria disini buanyak makanan yg luar biasaaa</td>
    </tr>
    <tr>
	  <th scope="col">3</th>
      <td scope="row">Yuk Lakukan Senam Aerobik Hanya 15 Menit Untuk Membakar Lemak Tubuh !</td>
      <td>Howto & Style</td>
      <td>Belajar bertani Petani</td>
      <td>Wooowww luar biasa langsung tak subcribe,,,pejuang kurus angkat jempol nya</td>
    </tr>
	<tr>
	  <th scope="col">4</th>
      <td scope="row">Apa Itu Ilmu 'Kimia' Sebenarnya? Apa Gunanya Di Hidup Kita? #BelajardiRumah</td>
      <td>Education</td>
      <td>Leo Zodiak</td>
      <td>Liat notif \"KIMIA\" Langsung males bukaknya akhirnya dibuka juga eh seru</td>
    </tr>
    <tr>
	  <th scope="col">5</th>
      <td scope="row">Official Trailer GUNDALA (2019) - In theatres August 29, 2019</td>
      <td>Film & Animation</td>
      <td>Rumah Jahit Rina</td>
      <td>Pengambilan gambarnya keren semangat untuk film indonesia</td>
    </tr>
  </tbody>
</table>
<br><br>
</div>