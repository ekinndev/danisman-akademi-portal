
<?php 
error_reporting(0);
$grupa=array(1,11,21,31,41,51,61,71,81,91,101,111,121,131,141,151);
$grupb=array(2,12,22,32,42,52,62,72,82,92,102,112,122,132,142,152);
$grupc=array(3,13,23,33,43,53,63,73,83,93,103,113,123,133,143,153);
$grupd=array(4,14,24,34,44,54,64,74,84,94,104,114,124,134,144,154);
$grupe=array(5,15,25,35,45,55,65,75,85,95,105,115,125,135,145,155);
$grupf=array(6,16,26,36,46,56,66,76,86,96,106,116,126,136,146,156);
$grupg=array(7,17,27,37,47,57,67,77,87,97,107,117,127,137,147,157);
$gruph=array(8,18,28,38,48,58,68,78,88,98,108,118,128,138,148,158);
$grupk=array(9,19,29,39,49,59,69,79,89,99,109,119,129,139,149,159);
$grupi=array(10,20,30,40,50,60,702,80,90,100,110,120,130,140,150,160);

$grupatop=0;
$grupbtop=0;
$grupctop=0;
$grupdtop=0;
$grupetop=0;
$grupftop=0;
$grupgtop=0;
$gruphtop=0;
$grupktop=0;
$grupitop=0;
//print_r( $_POST);


if (isset($_POST["meslekhesap"])) {
	for ($i=0; $i < count($grupa) ; $i++) { 
		$grupatop+=$_POST["Secenek"][$grupa[$i]]*10;
		$grupbtop+=$_POST["Secenek"][$grupb[$i]]*10;
		$grupctop+=$_POST["Secenek"][$grupc[$i]]*10;
		$grupdtop+=$_POST["Secenek"][$grupd[$i]]*10;
		$grupetop+=$_POST["Secenek"][$grupe[$i]]*10;
		$grupftop+=$_POST["Secenek"][$grupf[$i]]*10;
		$grupgtop+=$_POST["Secenek"][$grupg[$i]]*10;
		$gruphtop+=$_POST["Secenek"][$gruph[$i]]*10;
		$grupktop+=$_POST["Secenek"][$grupk[$i]]*10;
		$grupitop+=$_POST["Secenek"][$grupi[$i]]*10;
	}

	




}
$grupameslek=array("Ziraat Mühendisi","Orman Mühendisi","Veteriner","Çevre Mühendisi","Su Ürünleri Mühendisi","Maden Mühendisi","Turizmcilik","Tütün Eksperliği","Arkeoloji","Spor","Meteoroloji Mühendisi","Coğrafya");
$grupbmeslek=array("Tekstil Mühendisi","Makine Mühendisi","Mimar","Radyo-TV Teknisyeni","Teknik Eleman","Teknik Ressam","Teknik Öğretmenlikler","Diş Teknisyenliği","İç Mimar");
$grupcmeslek=array("Hukuk","Avukat","Yargıç","Savcı","Siyasal Bilimler","İşletme","Yönetici");
$grupdmeslek=array("Fotoğraf","Sinema Tiyatro","Müzik","Resim","Heykeltıraş","Mimar","Peyzaj Mimarı","Arkeolog-arkeoloji","Dekoratör","Sanat tarihi");
$grupemeslek=array("Edebiyat Öğretmenliği","Gazeteci","Öğretmen","İlahiyatçı","Halkla ilişkiler","Reklamcı","Pazarlamacı","Tarih","Rehberlik");
$grupfmeslek=array("Psikoloji","Felsefe","Sosyoloji","Antropoloji","Hukuk","Pazarlama","Kamu Yönetimi","Gazeteci","Yazar","Halkla ilişkiler");
$grupgmeslek=array("Mütercimlik","Filoloji","Otelcilik","Turizmcilik","Uluslararası ilişkiler","Yabancı Dil Öğretmenliği");
$gruphmeslek=array("Biyolog","Eczacı","Doktor","Diş Hekimi","Veteriner","Hemşire","Kimyagerlik");
$grupkmeslek=array("İktisatçı","Bankacı","Tüccar","Maliyeci","Maliye Müfettişi","Ekonomist","Muhasebe","Kamu ve Özel sektör Yöneticisi");
$grupimeslek=array("Bilgisayar Mühendisliği","Matematik","Fizik","İnşaat","Elektrik-Elektronik","Uçak Mühendisliği","Endüstri Mühendisliği");

?>
<!doctype html>
<html lang="en">
<head>

	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<title>Danışman Akademi Portal | Meslek Sonuç</title>
</head>
<body>
	<div class="container">
		
		<a href="index.php"> <img class="img-fluid mx-auto d-block" src="https://danismanakademi.org/wp-content/uploads/2018/03/logo-web.png" alt="Danışman Akademi Logo"></a>
		<hr>
		<h3>  NASIL DEĞERLENDİRİLİR VE YORUMLANIR?</h3>
		<hr>
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<!-- portalust -->
		<ins class="adsbygoogle"
		style="display:block"
		data-ad-client="ca-pub-3665641666948158"
		data-ad-slot="1817827366"
		data-ad-format="auto"
		data-full-width-responsive="true"></ins>
		<script>
			(adsbygoogle = window.adsbygoogle || []).push({});
		</script>
		<p class="lead"><strong>Puanınız 00-40  arası ise;  Bu mesleklere ilginiz yok. </strong>  <br>

			<strong> Puanınız 040-080  arası ise;  İlginiz var ama bu meslekleri seçmeniz için yeterli değil.</strong> <br>

			<strong> Puanınız 080-100  arası ise;  Bu mesleklere ilginiz var ama seçmeden önce bir kere 
			daha düşününüz.</strong> <br> 

			<strong> Puanınız 100-130  arası ise;  Normal, bu meslekleri seçebilirsiniz.</strong> <br>

			<strong> Puanınız 130-160  arası ise; <b style="color:red;"> Bu meslekler sizin için çok uygun</b></p> </strong> <br>

			<h3>Puanlar</h3>
			
			

			
			<div class="row">
				<div class="table-responsive col-md-3">
					<table  class="table table-striped table-sm ">
						<thead>
							<tr class="text-center">
								<th>
									A Grubu Meslekleri Puan:<?php echo $grupatop; ?>
								</th>

							</tr>
						</thead>
						<tbody>
							<?php 
							foreach ($grupameslek as $meslek) {?>
								<tr class="text-center">
									<td><?php echo $meslek ?></td>
								</tr>
							<?php  }
							?>


						</tbody>
					</table>
				</div>
				<div class="table-responsive col-md-3">
					<table  class="table table-striped table-sm ">
						<thead>
							<tr class="text-center">
								<th>
									B Grubu Meslekleri Puan:<?php echo $grupbtop; ?>
								</th>

							</tr>
						</thead>
						<tbody>
							<?php 
							foreach ($grupbmeslek as $meslek) {?>
								<tr class="text-center">
									<td><?php echo $meslek ?></td>
								</tr>
							<?php  }
							?>


						</tbody>
					</table>
				</div>
				<div class="table-responsive col-md-3">
					<table  class="table table-striped table-sm ">
						<thead>
							<tr class="text-center">
								<th>
									C Grubu Meslekleri Puan:<?php echo $grupctop; ?>
								</th>

							</tr>
						</thead>
						<tbody>
							<?php 
							foreach ($grupcmeslek as $meslek) {?>
								<tr class="text-center">
									<td><?php echo $meslek ?></td>
								</tr>
							<?php  }
							?>


						</tbody>
					</table>
				</div>
				<div class="table-responsive col-md-3">
					<table  class="table table-striped table-sm ">
						<thead>
							<tr class="text-center">
								<th>
									D Grubu Meslekleri Puan:<?php echo $grupdtop; ?>
								</th> 

							</tr>
						</thead>
						<tbody>
							<?php 
							foreach ($grupdmeslek as $meslek) {?>
								<tr class="text-center">
									<td><?php echo $meslek ?></td>
								</tr>
							<?php  }
							?>


						</tbody>
					</table>
				</div>

			</div>
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
			<div class="row">
				<div class="table-responsive col-md-3">
					<table  class="table table-striped table-sm ">
						<thead>
							<tr class="text-center">
								<th>
									E Grubu Meslekleri Puan:<?php echo $grupetop; ?>
								</th>

							</tr>
						</thead>
						<tbody>
							<?php 
							foreach ($grupemeslek as $meslek) {?>
								<tr class="text-center">
									<td><?php echo $meslek ?></td>
								</tr>
							<?php  }
							?>


						</tbody>
					</table>
				</div>
				<div class="table-responsive col-md-3">
					<table  class="table table-striped table-sm ">
						<thead>
							<tr class="text-center">
								<th>
									F Grubu Meslekleri Puan:<?php echo $grupftop; ?>
								</th>

							</tr>
						</thead>
						<tbody>
							<?php 
							foreach ($grupfmeslek as $meslek) {?>
								<tr class="text-center">
									<td><?php echo $meslek ?></td>
								</tr>
							<?php  }
							?>


						</tbody>
					</table>
				</div>
				<div class="table-responsive col-md-3">
					<table  class="table table-striped table-sm ">
						<thead>
							<tr class="text-center">
								<th>
									G Grubu Meslekleri Puan:<?php echo $grupgtop; ?>
								</th>

							</tr>
						</thead>
						<tbody>
							<?php 
							foreach ($grupgmeslek as $meslek) {?>
								<tr class="text-center">
									<td><?php echo $meslek ?></td>
								</tr>
							<?php  }
							?>


						</tbody>
					</table>
				</div>
				<div class="table-responsive col-md-3">
					<table  class="table table-striped table-sm ">
						<thead>
							<tr class="text-center">
								<th>
									H Grubu Meslekleri Puan:<?php echo $gruphtop; ?>
								</th>

							</tr>
						</thead>
						<tbody>
							<?php 
							foreach ($gruphmeslek as $meslek) {?>
								<tr class="text-center">
									<td><?php echo $meslek ?></td>
								</tr>
							<?php  }
							?>


						</tbody>
					</table>
				</div>
				<div class="table-responsive col-md-3">
					<table  class="table table-striped table-sm ">
						<thead>
							<tr class="text-center">
								<th>
									K Grubu Meslekleri Puan:<?php echo $grupktop; ?>
								</th>

							</tr>
						</thead>
						<tbody>
							<?php 
							foreach ($grupkmeslek as $meslek) {?>
								<tr class="text-center">
									<td><?php echo $meslek ?></td>
								</tr>
							<?php  }
							?>


						</tbody>
					</table>
				</div>
				<div class="table-responsive col-md-3" >
					<table  class="table table-striped table-sm">
						<thead>
							<tr class="text-center">
								<th>
									İ Grubu Meslekleri Puan:<?php echo $grupitop; ?>
								</th>

							</tr>
						</thead>
						<tbody>
							<?php 
							foreach ($grupimeslek as $meslek) {?>
								<tr class="text-center">
									<td><?php echo $meslek ?></td>
								</tr>
							<?php  }
							?>


						</tbody>
					</table>
				</div>
			</div>
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
		</div>
		
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
	</html>