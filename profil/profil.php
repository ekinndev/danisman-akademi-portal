<?php 
ob_start();
session_start();


require_once ('fonksiyon.php');
function tytpuanhesapla($tytturkce,$tytmat,$tytsos,$tytfen)
{

	return ($tytturkce*3.3+$tytmat*3.3+$tytsos*3.4+$tytfen*3.4)+148;

}
function eapuanhesapla($aytedebiyat,$aytmat,$ayttarih1,$aytcog1,$tytpuan,$tytturk,$tytmatt,$tytfenn,$tytsoss)
{
	$ykstythesap=$tytturk*1.32+$tytmatt*1.32+$tytfenn*1.36+$tytsoss*1.36;
	$yksaythesap=$aytmat*3+$aytedebiyat*3+$ayttarih1*2.8+$aytcog1*3.33;
	return $ykstythesap+$yksaythesap+148;
}
function saypuanhesapla($aytmat,$aytfiz,$aytkim,$aytbio,$tytpuan,$tytturk,$tytmatt,$tytfenn,$tytsoss)
{
	$ykstythesap=$tytturk*1.32+$tytmatt*1.32+$tytfenn*1.36+$tytsoss*1.36;
	$yksaythesap=$aytmat*3+$aytfiz*2.85+$aytkim*3.07+$aytbio*3.07;


	return $ykstythesap+$yksaythesap+148;

}
function sozpuanhesapla($aytedebiyat,$ayttarih1,$ayttarih2,$aytcog1,$aytcog2,$aytfelg,$tytpuan,$tytturk,$tytmatt,$tytfenn,$tytsoss)
{
	$ykstythesap=$tytturk*1.32+$tytmatt*1.32+$tytfenn*1.36+$tytsoss*1.36;
	$yksaythesap=$aytedebiyat*3+$ayttarih2*2.91+$ayttarih1*2.8+$aytcog1*3.33+$aytcog2*2.91+$aytfelg*3.33;
	return $ykstythesap+$yksaythesap+148;
}
function dilpuanhesapla($dil,$tytpuan,$tytturk,$tytmatt,$tytfenn,$tytsoss)
{
	$ykstythesap=$tytturk*1.32+$tytmatt*1.32+$tytfenn*1.36+$tytsoss*1.36;
	$yksaythesap=$dil*3;
	return $ykstythesap+$yksaythesap+148;
}



?>    
<!doctype html>
<html lang="en">
<head>
	<title>Profil | Danışman Akademi Portal</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	
</head>
<body>
	<?php include('header.php');?>
	<div class="container">
		<div class="col-md-12">
			<?php 
			if (isset($_SESSION["k_adi"])) {

				$bilgisor=$db->prepare('SELECT uye_kad, uye_sifre,uye_mail,uye_sehir,uye_alan FROM uyeler WHERE 
					uye_kad=?');
				$bilgisor->execute(array( $_SESSION["k_adi"]));
				$bilgicek=$bilgisor->fetch(PDO::FETCH_ASSOC);
				
				?>
				<h1 style="font-size:40px;" class="display-2 text-center">Danışman Akademi Profil Sayfası</h1><hr>
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
				<div class="row">

					<ul style="" class="nav  ">

						<li class="nav-item ">
							<a href="#anasayfa" data-toggle="tab" class="nav-link active   ">Profilim</a>

						</li>



						<li class="nav-item">
							<a href="#denemegir" data-toggle="tab" class="nav-link ">Denemeye Katıl</a>

						</li>
						
						<li class="nav-item">
							<a href="cikis.php"  class="nav-link ">Güvenli Çıkış</a>

						</li>

					</ul>
				</div>
				<hr>
				<div class="tab-content ">
					<div class="tab-pane fade active fade show mb-4 " id="anasayfa" >
						<form action='' method="POST" >
							<?php 
							$kad=$_SESSION["k_adi"];
							if (isset($_POST["updateislemi"])) {
								$updatesorgu=$db->prepare("UPDATE  uyeler set

									uye_sifre=:uye_sifre,
									uye_mail=:uye_mail,
									uye_sehir=:uye_sehir,
									uye_alan=:uye_alan
									where uye_kad='$kad'
									");

								$update=$updatesorgu->execute(array(


									'uye_sifre'=>md5($_POST['uye_sifre']),
									'uye_mail'=>$_POST['uye_mail'],
									'uye_sehir'=>$_POST['uye_sehir'],
									'uye_alan'=>$_POST['uye_alan']




								));

								if($update)
								{
									echo '<div class="alert alert-success">Bilgilerin <b>Başarıyla Güncellendi</b></div>';
									header("Refresh: 1; url=profil.php");
								}
								else
								{

									echo '<div class="alert alert-danger">Sorun Var! Güncelleme İşlemi <b>Başarısız</b></div>';

								}

							}
							?>

							<div class="form-group">
								<label class="form-control-label">Kullanıcı Adınız:</label>
								<input type="text" class="form-control"  value=<?php echo $_SESSION["k_adi"] ?> disabled name="uye_kad">
							</div>
							<div class="form-group">
								<label class="form-control-label">Şifre:</label>
								<input type="password" class="form-control" maxlength="20" minlength="5" required name="uye_sifre">
							</div>
							<div class="form-group">
								<label class="form-control-label">Email:</label>
								<input type="email" class="form-control" required  value=<?php echo $bilgicek['uye_mail'] ?> name="uye_mail">
							</div>
							<div class="form-group">
								<label class="form-control-label">Şehir:</label>
								<input type="text" class="form-control" required minlength="2" maxlength="20" value=<?php echo $bilgicek['uye_sehir'] ?> name="uye_sehir">
							</div>
							<label class="form-control-label"> Alanınız:</label><br>
							<div class="form-check">

								<input type="radio" class="form-check-input"  <?php echo $bilgicek['uye_alan']=="SAY" ? "checked":"" ?> value="SAY" required name="uye_alan">
								<label class="form-control-label mr-4">Say</label>

								<input type="radio" class="form-check-input"    <?php echo $bilgicek['uye_alan']=="EA" ? "checked":"" ?> value="EA" required name="uye_alan">
								<label class="form-control-label mr-4">Ea</label>

								<input type="radio" class="form-check-input"  Value="SÖZ"  <?php echo $bilgicek['uye_alan']=="SÖZ" ? "checked":"" ?> required name="uye_alan">
								<label class="form-control-label mr-4">Söz</label>

								<input type="radio" class="form-check-input"  value="DİL" <?php echo $bilgicek['uye_alan']=="DİL" ? "checked":"" ?> required name="uye_alan">
								<label class="form-control-label ">Dil</label>
							</div>

							<button type="submit" name="updateislemi" class="btn btn-success">Değiştir</button>
							<button type="reset" class="btn btn-info">Reset</button>
						</form></div>

						<div class="tab-pane fade mb-4" id="denemegir" >
							<?php 

							if (isset($_POST["denemegonder"])) {






								$tytpuansay=tytpuanhesapla($_POST['tytturknet'],$_POST['tytmatnet'],$_POST['tytsosnet'],$_POST['tytfennet']);


								if ($bilgicek['uye_alan']=="SAY") {

									$denemekaysay=$db->prepare("INSERT into denemesonuc set
										denemekadi=:denemekadi,
										denemealan=:denemealan,
										denemesehir=:denemesehir,
										denemesonuc_isim=:denemesonuc_isim,
										tytturknet=:tytturknet,
										tytmatnet=:tytmatnet,
										tytsosnet=:tytsosnet,
										tytfennet=:tytfennet,
										tytpuan=:tytpuan,
										

										aytmat=:aytmat,
										aytfiz=:aytfiz,
										aytkim=:aytkim,
										aytbio=:aytbio,
										yksgenelpuan=:yksgenelpuan


										");




									$kayitsay=$denemekaysay->execute(array(

										'denemekadi'=>$_SESSION['k_adi'],
										'denemealan'=>$bilgicek['uye_alan'],
										'denemesehir'=>$bilgicek['uye_sehir'],
										'tytturknet'=>$_POST['tytturknet'],
										'denemesonuc_isim'=>seo($_POST['denemesonuc_isim']),
										'tytmatnet'=>$_POST['tytmatnet'],
										'tytsosnet'=>$_POST['tytsosnet'],
										'tytfennet'=>$_POST['tytfennet'],
										
										'tytpuan'=>$tytpuansay,



										'aytmat'=>$_POST['aytmat'],
										'aytfiz'=>$_POST['aytfiz'],
										'aytkim'=>$_POST['aytkim'],
										'aytbio'=>$_POST['aytbio'],
										'yksgenelpuan'=>saypuanhesapla($_POST['aytmat'],$_POST['aytfiz'],$_POST['aytkim'],$_POST['aytbio'],$tytpuansay,$_POST['tytturknet'],$_POST['tytmatnet'],$_POST['tytfennet'],$_POST['tytsosnet'])



									));



									if($kayitsay)
									{
										echo '<div class="alert alert-success"> <b>Kayıt Başarılı</b></div>';

									}
									else
									{
										echo '<div class="alert alert-danger">Sorun Var! <b>Kayıt Başarısız</b></div>';

									}
								}
								else if ($bilgicek['uye_alan']=="EA") {
									$denemekayea=$db->prepare("INSERT into denemesonuc set
										denemekadi=:denemekadi,
										denemealan=:denemealan,
										denemesehir=:denemesehir,
										tytturknet=:tytturknet,
										denemesonuc_isim=:denemesonuc_isim,
										tytmatnet=:tytmatnet,
										tytsosnet=:tytsosnet,
										tytfennet=:tytfennet,
										tytpuan=:tytpuan,


										aytmat=:aytmat,
										aytedeb=:aytedeb,
										ayttar1=:ayttar1,
										aytcog1=:aytcog1,
										yksgenelpuan=:yksgenelpuan

										");




									$kayitea=$denemekayea->execute(array(

										'denemekadi'=>$_SESSION['k_adi'],
										'denemealan'=>$bilgicek['uye_alan'],
										'denemesehir'=>$bilgicek['uye_sehir'],
										'tytturknet'=>$_POST['tytturknet'],
										'denemesonuc_isim'=>seo($_POST['denemesonuc_isim']),
										'tytmatnet'=>$_POST['tytmatnet'],
										'tytsosnet'=>$_POST['tytsosnet'],
										'tytfennet'=>$_POST['tytfennet'],
										'tytpuan'=>tytpuanhesapla($_POST['tytturknet'],$_POST['tytmatnet'],$_POST['tytsosnet'],$_POST['tytfennet']),



										'aytmat'=>$_POST['aytmat'],
										'aytedeb'=>$_POST['aytedeb'],
										'ayttar1'=>$_POST['ayttar1'],
										'aytcog1'=>$_POST['aytcog1'],
										'yksgenelpuan'=>eapuanhesapla($_POST['aytedeb'],$_POST['aytmat'],$_POST['ayttar1'],$_POST['aytcog1'],$tytpuansay,$_POST['tytturknet'],$_POST['tytmatnet'],$_POST['tytfennet'],$_POST['tytsosnet'])   





									));


									if($kayitea)
									{
										echo '<div class="alert alert-success"> <b>Kayıt Başarılı</b></div>';

									}
									else
									{
										echo '<div class="alert alert-danger">Sorun Var! <b>Kayıt Başarısız</b></div>';

									}
								}
								else if ($bilgicek['uye_alan']=="SÖZ") {

									$denemekaysoz=$db->prepare("INSERT into denemesonuc set
										denemekadi=:denemekadi,
										denemealan=:denemealan,
										denemesonuc_isim=:denemesonuc_isim,
										denemesehir=:denemesehir,
										tytturknet=:tytturknet,
										tytmatnet=:tytmatnet,
										tytsosnet=:tytsosnet,
										tytfennet=:tytfennet,
										tytpuan=:tytpuan,


										
										aytedeb=:aytedeb,
										ayttar1=:ayttar1,
										aytcog1=:aytcog1,

										ayttar2=:ayttar2,
										aytcog2=:aytcog2,
										aytfelg=:aytfelg,
										yksgenelpuan=:yksgenelpuan

										");




									$kayitsoz=$denemekaysoz->execute(array(

										'denemekadi'=>$_SESSION['k_adi'],
										'denemealan'=>$bilgicek['uye_alan'],
										'denemesehir'=>$bilgicek['uye_sehir'],
										'tytturknet'=>$_POST['tytturknet'],
										'denemesonuc_isim'=>seo($_POST['denemesonuc_isim']),
										'tytmatnet'=>$_POST['tytmatnet'],
										'tytsosnet'=>$_POST['tytsosnet'],
										'tytfennet'=>$_POST['tytfennet'],
										'tytpuan'=>tytpuanhesapla($_POST['tytturknet'],$_POST['tytmatnet'],$_POST['tytsosnet'],$_POST['tytfennet']),




										'aytedeb'=>$_POST['aytedeb'],
										'ayttar1'=>$_POST['ayttar1'],
										'aytcog1'=>$_POST['aytcog1'],
										'ayttar2'=>$_POST['ayttar2'],
										'aytcog2'=>$_POST['aytcog2'],
										'aytfelg'=>$_POST['aytfelg'],
										'yksgenelpuan'=>sozpuanhesapla($_POST['aytedeb'],$_POST['ayttar1'],$_POST['ayttar2'],$_POST['aytcog1'],$_POST['aytcog2'],$_POST['aytfelg'],$tytpuansay,$_POST['tytturknet'],$_POST['tytmatnet'],$_POST['tytfennet'],$_POST['tytsosnet']) 


									));




									if($kayitsoz)
									{
										echo '<div class="alert alert-success"> <b>Kayıt Başarılı</b></div>';

									}
									else
									{
										echo '<div class="alert alert-danger">Sorun Var! <b>Kayıt Başarısız</b></div>';

									}
								}
								elseif ($bilgicek['uye_alan']=="DİL") {

									$denemekaydil=$db->prepare("INSERT into denemesonuc set
										denemekadi=:denemekadi,
										denemealan=:denemealan,
										denemesehir=:denemesehir,
										denemesonuc_isim=:denemesonuc_isim,
										tytturknet=:tytturknet,

										tytmatnet=:tytmatnet,
										tytsosnet=:tytsosnet,
										tytfennet=:tytfennet,
										tytpuan=:tytpuan,


										aytdil=:aytdil,
										yksgenelpuan=:yksgenelpuan


										");




									$kayitdil=$denemekaydil->execute(array(

										'denemekadi'=>$_SESSION['k_adi'],
										'denemealan'=>$bilgicek['uye_alan'],
										'denemesehir'=>$bilgicek['uye_sehir'],
										'tytturknet'=>$_POST['tytturknet'],
										'denemesonuc_isim'=>seo($_POST['denemesonuc_isim']),
										'tytmatnet'=>$_POST['tytmatnet'],
										'tytsosnet'=>$_POST['tytsosnet'],
										'tytfennet'=>$_POST['tytfennet'],
										'tytpuan'=>tytpuanhesapla($_POST['tytturknet'],$_POST['tytmatnet'],$_POST['tytsosnet'],$_POST['tytfennet']),



										'aytdil'=>$_POST['aytdil'],
										'yksgenelpuan'=>dilpuanhesapla($_POST['aytdil'],$tytpuansay,$_POST['tytturknet'],$_POST['tytmatnet'],$_POST['tytfennet'],$_POST['tytsosnet']) 
									));


									if($kayitdil)
									{
										echo '<div class="alert alert-success"> <b>Kayıt Başarılı</b></div>';

									}
									else
									{
										echo '<div class="alert alert-danger">Sorun Var! <b>Kayıt Başarısız</b></div>';

									}


								}}






								$denemekontrol=$db->prepare('SELECT denemedurum FROM ayar ');
								$denemekontrol->execute();
								$denemeacikmi=$denemekontrol->fetch(PDO::FETCH_ASSOC);

								$denemeisimsor=$db->prepare("SELECT * FROM denemeayar");

								$denemeisimsor->execute();

								?>

								<form action='' method="POST" >
									<h3>Deneme Seçiniz</h3>

									
									<select class="form-control" required="" name="denemesonuc_isim">
										<?php while ($denemeisimcek=$denemeisimsor->fetch(PDO::FETCH_ASSOC)) {


											if ($denemeisimcek['denemeayar_katilim']==1) {?>
												<option value="<?php echo $denemeisimcek['sonuc_denemeisim']; ?>"><?php echo $denemeisimcek['sonuc_denemeisim']; ?></option>
												
												
												
											<?php }}?>
										</select>



										<div class="row">
											
											<div class="col-md-6" >

												<h3>TYT Bölümü </h3>
												<hr>
												<div class="form-group">
													<label class="form-control-label">Türkçe Net:</label>
													<input type="number" class="form-control" value="0" step="0.25" max="40" min="0" name="tytturknet" >
												</div>
												<div class="form-group">
													<label class="form-control-label">Matematik Net:</label>
													<input type="number" class="form-control" value="0" step="0.25" max="40" min="0"  name="tytmatnet">
												</div>
												<div class="form-group">
													<label class="form-control-label">Sosyal Net:</label>
													<input type="number" class="form-control" value="0" step="0.25" max="20" min="0" name="tytsosnet">
												</div>
												<div class="form-group">
													<label class="form-control-label">Fen Net:</label>
													<input type="number" class="form-control" value="0" step="0.25" max="20" min="0" name="tytfennet">
												</div>
											</div>



											<div class="col-md-6">

												<h3>Ayt Bölümü </h3>
												<hr>
												<?php 
												if ($bilgicek['uye_alan']=="SAY") {
													?>
													<div class="form-group">
														<label class="form-control-label">Ayt Matematik Net:</label>
														<input type="number" class="form-control" step="0.25" value="0" max="40" min="0" name="aytmat" >
													</div>
													<div class="form-group">
														<label class="form-control-label">Ayt Fizik Net:</label>
														<input type="number" class="form-control" step="0.25"  value="0" max="14" min="0" name="aytfiz">
													</div>
													<div class="form-group">
														<label class="form-control-label">Ayt Kimya Net:</label>
														<input type="number" class="form-control" step="0.25"  value="0" max="13" min="0" name="aytkim">
													</div>
													<div class="form-group">
														<label class="form-control-label">Ayt Biyoloji Net:</label>
														<input type="number" class="form-control" step="0.25" value="0" max="13" min="0" name="aytbio">
													</div>
												<?php } 
												elseif ($bilgicek['uye_alan']=="EA") {?>
													<div class="form-group">
														<label class="form-control-label">Ayt Matematik Net:</label>
														<input type="number" class="form-control" step="0.25" value="0" max="40" min="0" name="aytmat" >
													</div>

													<div class="form-group">
														<label class="form-control-label">Ayt Edebiyat Net:</label>
														<input type="number" class="form-control" step="0.25" value="0" max="24" min="0" name="aytedeb" >
													</div>
													<div class="form-group">
														<label class="form-control-label">Ayt Tarih-1 Net:</label>
														<input type="number" class="form-control" step="0.25" value="0" max="10" min="0" name="ayttar1">
													</div>
													<div class="form-group">
														<label class="form-control-label">Ayt Coğ-1 Net:</label>
														<input type="number" class="form-control" step="0.25" value="0" max="6" min="0"  name="aytcog1">
													</div>

												<?php  } 
												elseif ($bilgicek['uye_alan']=="DİL") {?>
													<div class="form-group">
														<label class="form-control-label">Ayt Dil Net:</label>
														<input type="number" class="form-control" step="0.25" value="0" max="80" min="0" name="aytdil">
													</div>
												<?php      } 
												else if ($bilgicek['uye_alan']=="SÖZ") {?>
													<div class="form-group">
														<label class="form-control-label">Ayt Edebiyat Net:</label>
														<input type="number" class="form-control" step="0.25" value="0" max="24" min="0" name="aytedeb" >
													</div>
													<div class="form-group">
														<label class="form-control-label">Ayt Tarih-1 Net:</label>
														<input type="number" class="form-control" step="0.25" value="0" max="10" min="0" name="ayttar1">
													</div>
													<div class="form-group">
														<label class="form-control-label">Ayt Coğ-1 Net:</label>
														<input type="number" class="form-control" step="0.25" value="0" max="6" min="0" name="aytcog1">
													</div>
													<div class="form-group">
														<label class="form-control-label">Ayt Tarih-2 Net:</label>
														<input type="number" class="form-control" step="0.25" value="0" max="11" min="0" name="ayttar2" >
													</div>
													<div class="form-group">
														<label class="form-control-label">Ayt Coğrafya-2 Net:</label>
														<input type="number" class="form-control" step="0.25" value="0" max="11 " min="0" name="aytcog2">
													</div>
													<div class="form-group">
														<label class="form-control-label">Ayt Felsefe G. ve Din Net:</label>
														<input type="number" class="form-control" step="0.25" value="0" max="18" min="0" name="aytfelg">
													</div>




												<?php }

												?>



											</div>
											<?php if($denemeacikmi["denemedurum"]==0){ echo "Deneme Sistemi Şuan Kapalıdır."; } ?>
											<button type="submit" name="denemegonder" class="btn btn-success ml-3 " <?php echo $denemeacikmi["denemedurum"]==1 ? '':'disabled' ?> >Gönder</button>




										</div>

									</form>

								</div>


							</div>

						</div>
					<?php }
					else
					{
						header("Location:../index.php");
						exit;
					} ?>



					<!-- <?php include('footer.php');?> -->
				</div>

				<!-- Optional JavaScript -->
				<!-- jQuery first, then Popper.js, then Bootstrap JS -->

				<script src="js/jquery-3.3.1.slim.min.js"></script>
				<script src="js/popper.min.js"></script>
				<script src="js/bootstrap.min.js" ></script>
				<!-- Global site tag (gtag.js) - Google Analytics -->
				<script async src="https://www.googletagmanager.com/gtag/js?id=UA-116345183-1"></script>
				<script>
					window.dataLayer = window.dataLayer || [];
					function gtag(){dataLayer.push(arguments);}
					gtag('js', new Date());

					gtag('config', 'UA-116345183-1');
				</script>

			</body>
			</html>
			<?php 
			ob_end_flush();
			?>