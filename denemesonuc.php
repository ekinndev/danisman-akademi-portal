<!doctype html>
<html lang="en">
<head>
	<title>Deneme Sonuçları | Danışman Akademi Portal</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<meta name="description" content="Danışmanakademi Deneme Sonuç Sayfası">
	<meta name="keywords" content="Danışman Akademi,Muhammet Eroğlu,Tyt,ayt,deneme,çizelge,yks">
	<meta name="author" content="abaliogluekin@gmail.com">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

	
</head>
<body>
	<?php 
	require_once('header.php');
	require_once ('fonksiyon.php');
	require_once('baglan.php');
	?>
	<div class="container">

		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script> <!-- portalust --> <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-3665641666948158" data-ad-slot="1817827366" data-ad-format="auto" data-full-width-responsive="true"></ins> <script> (adsbygoogle = window.adsbygoogle || []).push({}); </script>
		<h1  style="font-size:40px;"  class="display-3 text-center"> Danışman Akademi Deneme Sonuçları</h1>

		

		<hr>
		<div class="row">
			<?php
			$denemesonsor=$db->prepare("Select * From denemeayar ORDER BY id DESC");
			$denemesonsor->execute();
			while ($denemesoncek=$denemesonsor->fetch(PDO::FETCH_ASSOC)) { ?>
				<div class="col-md-2">
					<?php 
					if ($denemesoncek['denemeayar_yayin']==1) { ?>
						<div class="card mb-3 h-100">

							<img class="img-fluid card-img-top" src="http://<?php echo $denemesoncek["deneme_resim"]; ?>" alt="Muhammet Eroğlu">
							<div class="card-body text-justify">
								<h4 class="card-title text-center "><?php echo $denemesoncek["sonuc_denemeisim"]; ?></h4>
								
								<?php echo $denemesoncek["sonuc_aciklama"]; ?> 
							</div>
							<div class="card-footer text-muted">
								<span><?php echo $denemesoncek["sonuc_denemetarih"]; ?></span>
							</div>
							<a href="sonuc-goster.php?deneme_isim=<?php echo seo($denemesoncek["sonuc_denemeisim"]); ?>" target="_blank" class="btn btn-success">Sonuçları Göster</a>

						</div>
					<?php }?>


				</div>
			<?php } ?>



		</div>
		<hr>
		<?php
		include('footer.php');
		?>


	</div>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery-3.3.1.slim.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js" ></script>
</body>
</html>