<?php
	//ambil data di url
	$judul = $_GET["title"];

	//ambil data json dari file
	$content=file_get_contents("Proses 1 - Scraping Komentar Youtube/Isi Scrap Komentar/".$judul.".json");

	//mengubah standar encoding
	$content=utf8_encode($content);
  
	//mengubah data json menjadi data array asosiatif
	$raw_data=json_decode($content,true);

	//pagination
	//konfigurasi
	$jumlahDataPerhalaman = 10;
	$jumlahData = 200;
	$jumlahHalaman =  ceil($jumlahData/$jumlahDataPerhalaman);
	//var_dump($jumlahHalaman);
	$halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1 ;
	//var_dump($halamanAktif);
	$awalData = ($jumlahDataPerhalaman * $halamanAktif) - $jumlahDataPerhalaman ; 

	$result = array_splice($raw_data, $awalData, $jumlahDataPerhalaman);

?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	
	
	<section id="home" class="video-hero" style="height: 500px; background-image: url(images/cover_img_1.jpg);  background-size:cover; background-position: center center;background-attachment:fixed;" data-section="home">
		<div class="overlay"></div>

			<div class="display-t display-t2 text-center">
				<div class="display-tc display-tc2">
					<div class="container">
						<div class="col-md-12 col-md-offset-0">
							<div class="animate-box">
								<h2>Comments Sources</h2>
								<p class="breadcrumbs"><span><a href="index.php">Home</a></span> <span>Comments</span></p>
							</div>
						</div>
					</div>
				</div>
			</div>
	</section>

<br><br>

<div class="judul">
		<center><h1>Sample Data Komentar Video</h1>
				<h1>"<?=$judul;?>"</h1>
		</center/> 
</div>

<br><br>


<!--NAVIGASI-->
<div class="container mt-15 mb-8">

	<?php if($halamanAktif > 1) :  ?>
	<a href="?page=source&title=<?= $judul;?>&halaman=<?=$halamanAktif-1  ?>">&laquo</a> <!-- previous ls=lesserthan --->
	<?php endif ?>

	<?php for ($i=1 ; $i<=$jumlahHalaman ; $i++) : ?>
		<?php if($i==$halamanAktif) :?>
		<a href="??page=source&title=<?= $judul;?>&halaman=<?=$i; ?>" style = "font-weight: bold; color: red;"><?=$i; ?></a>
		<?php else :?>
		<a href="?page=source&title=<?= $judul;?>&halaman=<?=$i; ?>"><?=$i; ?></a>
		<?php endif ?>
	<?php endfor ?>

	<?php if($halamanAktif < $jumlahHalaman) :  ?>
		<a href="?page=source&title=<?= $judul;?>&halaman=<?=$halamanAktif +1  ?>">&raquo</a> <!-- next page gt=greater than --->
	<?php endif ?>
</div>

<br>

<div class="container text-center mt-15 mb-8">
<table class="table table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Comment</th>
	  <th scope="col">Author</th>
      <th scope="col">Like</th>
    </tr>
  </thead>
  <tbody>

  	<?php foreach ($result as $value) : ?>
			<tr>
				<td scope="row"><?=$value['comment']?></td>
				<td><?=$value['author']?></td>
				<td><?=$value['like']?></td>
			</tr>
	<?php 	endforeach; ?>

  </tbody>
</table>
<br><br>
</div>