<?php 

try {

	$db=new PDO("mysql:host=localhost;dbname=danisma2_portal;charset=utf8",'danisma2_portal',')sjU$!OqU*w)');
	$acikkontrol=$db->prepare('SELECT sitedurum FROM ayar ');
	$acikkontrol->execute();
	$acikmi=$acikkontrol->fetch(PDO::FETCH_ASSOC);
	
	if(!$acikmi["sitedurum"])
	{
		die('Site Kapalı');
	}
} catch (PDOException $e) {
	
	echo $e->getmessage();
}

?>