
<!doctype html>
<html lang="en">
<head>
	<title>Anasayfa | Danışman Akademi Portal</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Danışmanakademi portal sayfası denemeye katılmak için üye olun.">
	<meta name="keywords" content="Danışman Akademi,Muhammet Eroğlu,Tyt,ayt,deneme,çizelge,yks">
	<meta name="author" content="abaliogluekin@gmail.com">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">


</head>


<body>

</div>
<?php 
require_once('baglan.php');
require_once('header.php');?>
<div class="container">
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script> <!-- portalust --> <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-3665641666948158" data-ad-slot="1817827366" data-ad-format="auto" data-full-width-responsive="true"></ins> <script> (adsbygoogle = window.adsbygoogle || []).push({}); </script>
	<?php $anakontrol=$db->prepare('SELECT *  FROM sayfaisim where sayfa_id=:id ');
	$anakontrol->execute(array(
		'id'=>1
	));
	$anayazi=$anakontrol->fetch(PDO::FETCH_ASSOC); ?>


	<h1 style="font-size:40px;" class="display-2 text-center"><?php echo $anayazi['sayfabaslik']; ?> </h1>
	<hr>
	<p class="text-center"><?php echo $anayazi['sayfaicerik']; ?></p>
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
	<?php include('footer.php');?>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery-3.3.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js" ></script>

</body>
</html>