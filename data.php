
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

	<section>
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