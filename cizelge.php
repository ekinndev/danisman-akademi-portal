<!doctype html>
<html lang="en">
<head>
	<title>Çizelgeler | Danışman Akademi Portal</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="description" content="Danışman Akademi çizelge sayfası.">
	<meta name="keywords" content="Danışman Akademi,Muhammet Eroğlu,Tyt,ayt,deneme,çizelge,yks">
	<meta name="author" content="abaliogluekin@gmail.com">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	
</head>
<body>
	<?php 
	require_once('header.php');
	require_once('baglan.php');
	?>
	<div class="container">
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script> <!-- portalust --> <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-3665641666948158" data-ad-slot="1817827366" data-ad-format="auto" data-full-width-responsive="true"></ins> <script> (adsbygoogle = window.adsbygoogle || []).push({}); </script>
		<h1 style="font-size:40px;" class="display-2 text-center">Çizelgelere Hoş Geldiniz !</h1>
		<hr>
		
		<table class="table table-sm table-dark table-striped table-bordered ">
			<thead>
				<tr>
					<th width="300px">#</th>
					<th width="300px">Konu</th>
					<th width="300px"> Yayınlandığı Tarih</th>
					
					<th width="35px"> </th>
				</tr>
				



			</thead>
			<tbody>
				<?php
				$cizelgesay=1;
				$cizelgesor=$db->prepare("Select * From cizelgeler");
				$cizelgesor->execute();
				while ($cizelgecek=$cizelgesor->fetch(PDO::FETCH_ASSOC)) {?>
					<tr >
						<td><?php echo $cizelgesay ?></td>
						<td><?php echo $cizelgecek['cizelgeadi']?></td>
						<td><?php echo $cizelgecek['tarih']?></td>
						
						<td><a href="http://<?php echo $cizelgecek['cizelgelink']?>" target="_blank" type="button"  name="indirmesayi" class="btn btn-success btn-sm" >İndir</a></td>
					</tr>
					<?php 
					$cizelgesay++;
				} 
      //testgir php'nin içine kodlancak arttırma
    //   if (isset($_POST["indirmesayi"])) {
    //     $tabloid=$cizelgecek['id'];
    //     $updatesorgu=$db->prepare("UPDATE  cizelgeler set

    //       indirilmesayi=:indirilmesayi
    //       where id=$tabloid");

    //     $update=$updatesorgu->execute(array(


    //       'indirilmesayi'=>($cizelgecek['indirilmesayi']++)
				




    //     ));

				

    // }
				?>




			</tbody>
		</table> 


		<hr>
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
		<?php require_once('footer.php');?>
	</div>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery-3.3.1.slim.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js" ></script>
</body>
</html>