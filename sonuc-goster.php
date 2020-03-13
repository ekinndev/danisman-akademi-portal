<?php 
require_once("baglan.php");

?>
<!doctype html>
<html lang="en">
<head>
	<title><?php echo $_GET['deneme_isim'] ?> | Danışman Akademi Portal</title>
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
	<?php require_once('header.php');?>
	<div class="container">
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script> <!-- portalust --> <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-3665641666948158" data-ad-slot="1817827366" data-ad-format="auto" data-full-width-responsive="true"></ins> <script> (adsbygoogle = window.adsbygoogle || []).push({}); </script>
		<h4 style="font-size:50px;" class="display-3 text-center">TYT Sonuçları</h4>
		<hr>
		<?php
		if (isset($_GET['deneme_isim'])) {
			$tytturktop=0;
			$tytfentop=0;
			$tytmattop=0;
			$tytsostop=0;
			$deneme_adi=$_GET['deneme_isim'];
			$siralatyt=1;
			$tytsonucsor=$db->prepare("SELECT * FROM denemesonuc where denemesonuc_isim=:isim  order by tytpuan desc ");

			$tytsonucsor->execute(array(

				'isim' => $deneme_adi




			));
			?>
			<div align="center">
				<div class="table-responsive">
					<table class="table table-sm table-striped table-dark">
						<thead>
							<tr>
								<th>Sıra</th>
								<th>Adı</th>
								<th>Şehir</th>
								<td>Alan</td>
								<th>Türkçe Net</th>
								<th>Matematik Net</th>
								<th>Sosyal Net</th>
								<th>Fen Net</th>
								<th>TYT PUAN</th>

							</tr>
						</thead>
						<tbody>
							<?php while ($tytsonuccek=$tytsonucsor->fetch(PDO::FETCH_ASSOC)) {?>
								<tr>
									<td><?php echo $siralatyt++;?></td>
									<td><?php echo $tytsonuccek['denemekadi']; ?></td>
									<td><?php echo $tytsonuccek['denemesehir']; ?></td>
									<td><?php echo $tytsonuccek['denemealan']; ?></td>
									<td><?php echo $tytsonuccek['tytturknet']; ?></td>
									<td><?php echo $tytsonuccek['tytmatnet']; ?></td>
									<td><?php echo $tytsonuccek['tytsosnet']; ?></td>
									<td><?php echo $tytsonuccek['tytfennet']; ?></td>
									<td><?php echo $tytsonuccek['tytpuan']; ?></td>

								</tr>
								<?php 
								$tytturktop+=$tytsonuccek['tytturknet'];
								$tytmattop+=$tytsonuccek['tytmatnet']; 
								$tytsostop+= $tytsonuccek['tytsosnet'];
								$tytfentop+=$tytsonuccek['tytfennet'];
							}?>


						</tbody>


					</table>
				</div>
				<b>TYT Türkçe Ortalama Net:</b><?php echo  $tytturktop/($siralatyt-1) ?><br>
				<b>TYT Matematik Ortalama Net:</b><?php echo $tytmattop/($siralatyt-1) ?><br>
				<b>TYT Sosyal Ortalama Net:</b><?php echo $tytsostop/($siralatyt-1) ?><br>
				<b>TYT Fen Ortalama Net:</b><?php echo $tytfentop/($siralatyt-1) ?><br>
				<hr>
			</div>

			<?php 
			$siralaea=1;
			$easonucsor=$db->prepare("SELECT * FROM denemesonuc where denemealan=:alan AND denemesonuc_isim=:isim  order by yksgenelpuan desc");

			$easonucsor->execute(array(

				'alan'=>"EA",
				'isim'=>$deneme_adi
				

			));


			$ayteamattop=0;
			$ayteaedebtop=0;
			$ayteatar1top=0;
			$ayteacog1top=0;
			?>


			<div align="center">
				<h4 style="font-size:50px;" class="display-3 text-center">EA Sonuçları</h4><hr>
				<div class="table-responsive">
					<table class="table table-sm table-striped table-dark">
						<thead>
							<tr>
								<th>ID</th>
								<th>Adı</th>
								<th>Şehir</th>
								<th>TYT PUAN</th>
								<th>Matematik Net</th>
								<th>Edebiyat Net</th>
								<th>Tarih-1 Net</th>
								<th>Coğrafya-1 Net</th>
								<th>GENEL PUAN</th>
							</tr>
						</thead>
						<tbody>
							<?php while ($easonuccek=$easonucsor->fetch(PDO::FETCH_ASSOC)) {?>
								<tr>
									<td><?php echo $siralaea++;?></td>
									<td><?php echo $easonuccek['denemekadi']; ?></td>
									<td><?php echo $easonuccek['denemesehir']; ?></td>
									<td><?php echo $easonuccek['tytpuan']; ?></td>
									<td><?php echo $easonuccek['aytmat']; ?></td>
									<td><?php echo $easonuccek['aytedeb']; ?></td>
									<td><?php echo $easonuccek['ayttar1']; ?></td>
									<td><?php echo $easonuccek['aytcog1']; ?></td>
									<td><?php echo $easonuccek['yksgenelpuan']; ?></td>
								</tr>
								<?php 
								$ayteamattop+=$easonuccek['aytmat'];
								$ayteaedebtop+=$easonuccek['aytedeb']; 
								$ayteatar1top+= $easonuccek['ayttar1'];
								$ayteacog1top+=$easonuccek['aytcog1'];
								
							}

							?>


						</tbody>


					</table>
				</div>
				<b>Ayt Mat Ortalama Net:</b><?php echo  $ayteamattop/($siralaea-1) ?><br>
				<b>Ayt Edebiyat Ortalama Net:</b><?php echo $ayteaedebtop/($siralaea-1) ?><br>
				<b>Ayt Tarih-1 Ortalama Net:</b><?php echo $ayteatar1top/($siralaea-1) ?><br>
				<b>Ayt Coğrafya-1 Ortalama Net:</b><?php echo $ayteacog1top/($siralaea-1) ?><br>
			</div>


			<?php 
			$aytsozedebtop=0;
			$aytsoztar1top=0;
			$aytsoztar2top=0;
			$aytsozcog1top=0;
			$aytsozcog2top=0;
			$aytsozfeldintop=0;
			$siralasoz=1;
			$sozsonucsor=$db->prepare("SELECT * FROM denemesonuc where denemealan=:alan AND denemesonuc_isim=:isim order by yksgenelpuan desc");

			$sozsonucsor->execute(array(

				'alan'=>"SÖZ",
				'isim'=>$deneme_adi


			));
			?>

			<hr>
			<div align="center">
				<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
				<!-- portalalt -->
				<ins class="adsbygoogle"
				style="display:block"
				data-ad-client="ca-pub-3665641666948158"
				data-ad-slot="6353529245"
				data-ad-format="auto"
				data-full-width-responsive="true"></ins>
				<script>
					(adsbygoogle = window.adsbygoogle || []).push({});
				</script>
				<hr>
				<h4 style="font-size:50px;" class="display-3 text-center">Sözel Sonuçları</h4><hr>
				<div class="table-responsive">
					<table class="table table-sm table-striped table-dark">
						<thead>
							<tr>
								<th>ID</th>
								<th>Adı</th>
								<th>Şehir</th>
								<th>TYT Puanı</th>
								<th>Edebiyat Net</th>
								<th>Tarih-1 Net</th>
								<th>Coğrafya-1 Net</th>
								<th>Tarih-2 Net</th>
								<th>Coğrafya-2 Net</th>
								<th>Felsefe+Din Net</th>

								<th>GENEL PUAN</th>
							</tr>
						</thead>
						<tbody>
							<?php while ($sozsonuccek=$sozsonucsor->fetch(PDO::FETCH_ASSOC)) {?>
								<tr>
									<td><?php echo $siralasoz++;?></td>
									<td><?php echo $sozsonuccek['denemekadi']; ?></td>
									<td><?php echo $sozsonuccek['denemesehir']; ?></td>
									<td><?php echo $sozsonuccek['tytpuan']; ?></td>
									<td><?php echo $sozsonuccek['aytedeb']; ?></td>
									<td><?php echo $sozsonuccek['ayttar1']; ?></td>
									<td><?php echo $sozsonuccek['aytcog1']; ?></td>
									<td><?php echo $sozsonuccek['ayttar2']; ?></td>
									<td><?php echo $sozsonuccek['aytcog2']; ?></td>
									<td><?php echo $sozsonuccek['aytfelg']; ?></td>

									<td><?php echo $sozsonuccek['yksgenelpuan']; ?></td>
								</tr>
								<?php 


								$aytsozedebtop+=$sozsonuccek['aytedeb'];
								$aytsoztar1top+=$sozsonuccek['ayttar1']; 
								$aytsoztar2top+= $sozsonuccek['ayttar2'];
								$aytsozcog1top+=$sozsonuccek['aytcog1'];
								$aytsozfeldintop+=$sozsonuccek['aytfelg'];
								$aytsozcog2top+=$sozsonuccek['aytcog2'];
							}



							?>


						</tbody>


					</table>
				</div>
				<b>Ayt Edebiyat Ortalama Net:</b><?php echo  $aytsozedebtop/($siralasoz-1) ?><br>
				<b>Ayt Tarih-1 Ortalama Net:</b><?php echo $aytsoztar1top/($siralasoz-1) ?><br>
				<b>Ayt Tarih-2 Ortalama Net:</b><?php echo $aytsoztar2top/($siralasoz-1) ?><br>
				<b>Ayt Coğrafya-1 Ortalama Net:</b><?php echo $aytsozcog1top/($siralasoz-1) ?><br>
				<b>Ayt Coğrafya-2 Ortalama Net:</b><?php echo $aytsozcog2top/($siralasoz-1) ?><br>
				<b>Ayt Felsefe Grubu Ortalama Net:</b><?php echo $aytsozfeldintop/($siralasoz-1) ?><br>
			</div>

			<hr>



			<?php 

			$aytsaymattop=0;
			$aytsayfiztop=0;
			$aytsaykimtop=0;
			$aytsaybiotop=0;

			$siralasay=1;
			$saysonucsor=$db->prepare("SELECT * FROM denemesonuc where denemealan=:alan AND denemesonuc_isim=:isim order by yksgenelpuan desc");

			$saysonucsor->execute(array(

				'alan'=>"SAY",
				'isim'=>$deneme_adi


			));

			?>








			<div align="center">
				<h4 style="font-size:50px;" class="display-3 text-center">Sayısal Sonuçları</h4><hr>
				<div class="table-responsive">
					<table class="table table-sm table-striped table-dark">
						<thead>
							<tr>
								<th>ID</th>
								<th>Adı</th>
								<th>Şehir</th>

								<th>TYT PUAN</th>
								<th>Matematik Net</th>
								<th>Fizik Net</th>
								<th>Kimya Net</th>
								<th>Biyoloji Net</th>
								<th>GENEL PUAN</th>
							</tr>
						</thead>
						<tbody>
							<?php while ($saysonuccek=$saysonucsor->fetch(PDO::FETCH_ASSOC)) {?>
								<tr>
									<td><?php echo $siralasay++;?></td>
									<td><?php echo $saysonuccek['denemekadi']; ?></td>
									<td><?php echo $saysonuccek['denemesehir']; ?></td>

									<td><?php echo $saysonuccek['tytpuan']; ?></td>
									<td><?php echo $saysonuccek['aytmat']; ?></td>
									<td><?php echo $saysonuccek['aytfiz']; ?></td>
									<td><?php echo $saysonuccek['aytkim']; ?></td>
									<td><?php echo $saysonuccek['aytbio']; ?></td>
									<td><?php echo $saysonuccek['yksgenelpuan']; ?></td>
								</tr>
								<?php 
								$aytsaymattop+=$saysonuccek['aytmat'];
								$aytsaykimtop+=$saysonuccek['aytkim']; 
								$aytsayfiztop+= $saysonuccek['aytfiz'];
								$aytsaybiotop+=$saysonuccek['aytbio'];

							}

							?>


						</tbody>


					</table>
				</div>
				<b>Ayt Matematik Ortalama Net:</b><?php echo  $aytsaymattop/($siralasay-1) ?><br>
				<b>Ayt Fizik Ortalama Net:</b><?php echo $aytsayfiztop/($siralasay-1) ?><br>
				<b>Ayt Kimya Ortalama Net:</b><?php echo $aytsaykimtop/($siralasay-1) ?><br>
				<b>Ayt Biyoloji Ortalama Net:</b><?php echo $aytsaybiotop/($siralasay-1) ?><br>
			</div>



			<?php 
			$siraladil=1;

			$dilsonucsor=$db->prepare("SELECT * FROM denemesonuc where denemealan=:alan AND denemesonuc_isim=:isim order by yksgenelpuan desc");

			$dilsonucsor->execute(array(

				'alan'=>"DİL",
				'isim'=>$deneme_adi


			));

			$aytdiltop=0;
			?>

			<hr>





			<div align="center">
				<h4 style="font-size:50px;" class="display-3 text-center">Dil Sonuçları</h4><hr>
				<div class="table-responsive">
					<table class="table table-sm table-striped table-dark">
						<thead>
							<tr>
								<th>ID</th>
								<th>Adı</th>
								<th>Şehir</th>
								<th>TYT PUAN</th>
								<th>Dil Net</th>
								<th>GENEL PUAN</th>
							</tr>
						</thead>
						<tbody>
							<?php while ($dilsonuccek=$dilsonucsor->fetch(PDO::FETCH_ASSOC)) {?>
								<tr>
									<td><?php echo $siraladil++;?></td>
									<td><?php echo $dilsonuccek['denemekadi']; ?></td>
									<td><?php echo $dilsonuccek['denemesehir']; ?></td>
									<td><?php echo $dilsonuccek['tytpuan']; ?></td>
									<td><?php echo $dilsonuccek['aytdil']; ?></td>
									<td><?php echo $dilsonuccek['yksgenelpuan']; ?></td>
								</tr>
								<?php 

								$aytdiltop+=$dilsonuccek['aytdil'];
							}

							?>


						</tbody>


					</table>

				</div>
				<b>Ayt Dil Ortalama Net:</b><?php echo $aytdiltop/($siraladil-1) ?><br>
			</div>





			<hr>







		<?php }?>








		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<!-- portalalt -->
		<ins class="adsbygoogle"
		style="display:block"
		data-ad-client="ca-pub-3665641666948158"
		data-ad-slot="6353529245"
		data-ad-format="auto"
		data-full-width-responsive="true"></ins>
		<script>
			(adsbygoogle = window.adsbygoogle || []).push({});
		</script>

<hr>

		<?php require_once('footer.php'); ?>
	</div>


	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery-3.3.1.slim.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js" ></script>
</body>
</html>