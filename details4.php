
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<section id="home" class="video-hero" style="height: 500px; background-image: url(images/cover_img_1.jpg);  background-size:cover; background-position: center center;background-attachment:fixed;" data-section="home">
		<div class="overlay"></div>

			<div class="display-t display-t2 text-center">
				<div class="display-tc display-tc2">
					<div class="container">
						<div class="col-md-12 col-md-offset-0">
							<div class="animate-box">
								<h2>Details Data</h2>
							</div>
						</div>
					</div>
				</div>
			</div>
	</section>
<div class="judul">
	<hr>
		<center><h1><br>Detail Data Komentar</> - Education-Apa Itu Ilmu Kimia Sebenarnya</center>
		
</div>
<br>
    <div class="row" style="font-size: 13px">
        <div class="col-md-10 offset-md-1">
            <table id="bimz" class="table table-striped table-bordered">
                <thead>
                    <tr>
                    	<th style="width: 8px">No</th>
                        <th>Kategori</th>
                        <th>Author</th>
                        <th>Komentar</th>
                        <th>Like</th>
                    </tr>
                </thead>
                <tbody>
                	
                </tbody>
            </table>
        </div>
    </div>
<br>

<script type="text/javascript">
    $(document).ready(function () {
        $('#bimz').DataTable({
            processing: true,
            "ajax": {
                "url": "json/data4.json",
                dataSrc:""
            },
            "fnRowCallback": function(nRow,aData,iDisplayIndex,iDisplayIndexFull) {
				var index = iDisplayIndex + 1;
				$('td:eq(0)',nRow).html(index);
				return nRow;
			},
            "columns": [
                { "data": "title" },
                { "data": "category" },
                { "data": "author" },
                { "data": "comment" },
                { "data": "like" }
            ]
        });
    });
</script>
