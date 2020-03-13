<!doctype html>
<html lang="en">
<head>
	<title>Canlı Yayınlar | Danışman Akademi Portal</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Danışman Akademi - Canlı Yayınlar</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	
</head>
<body>
	<?php 
	require_once('header.php');
	require_once('baglan.php');
	?>
	<div class="container">
		
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script> <!-- portalust --> <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-3665641666948158" data-ad-slot="1817827366" data-ad-format="auto" data-full-width-responsive="true"></ins> <script> (adsbygoogle = window.adsbygoogle || []).push({}); </script>
		<h1  style="font-size:40px;"  class="display-3 text-center"> Danışman Akademi Canlı Yayınlar</h1>

		<h1 style="font-size:30px;" class="display-3 text-center "><a class="dekorasyon" href="https://www.instagram.com/danisman_akademi/" target="_blank" >@danisman_akademi</a></h1>

		<hr>
		<div class="row">
			
			<?php
			$canlisor=$db->prepare("Select * From canliyayinlink ORDER BY id DESC");
			$canlisor->execute();
			while ($canlicek=$canlisor->fetch(PDO::FETCH_ASSOC)) { ?>
				<div class="col-md-3">
					<div  class="card h-100   mb-3">

						<img class="img-fluid card-img-top" src="http://<?php echo $canlicek["canliresim"]; ?>" alt="Muhammet Eroğlu">
						<div class="card-body text-justify">
							<h4 class="card-title text-center "><?php echo $canlicek["canlikonu"]; ?></h4>
							
							<?php echo $canlicek["canlimetin"]; ?>
						</div>
						<div class="card-footer text-muted">
							<span>Tarih: <?php echo $canlicek["tarih"]; ?></span>
						</div>
						<a href="http://<?php echo $canlicek["canlilink"]; ?>" target="_blank" class="btn btn-success">İzle</a>

					</div>
				</div>
			<?php } ?>
			
			
			

		</div>
		<hr>
		

		
		
		
		<?php
		require_once('footer.php');
		?>


	</div>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery-3.3.1.slim.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js" ></script>
</body>
</html>