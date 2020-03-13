<?php 

ob_start();
session_start();

require_once("baglan.php");



if (isset($_POST["girisislem"])) {






	$bilgisor=$db->prepare('SELECT uye_mail, uye_sifre FROM uyeler WHERE 
		uye_mail=? AND uye_sifre=?');
	$bilgisor->execute(array($_POST["kadi"],md5($_POST["pwd"])));
	$bilgicek=$bilgisor->fetch(PDO::FETCH_ASSOC);




	if($bilgisor->rowCount() > 0){

		$uyebilgicek=$db->prepare('SELECT *  FROM uyeler where uye_mail=:mail');
		$uyebilgicek->execute(array(
			'mail'=>$_POST["kadi"]
		));
		$uyebilgisor=$uyebilgicek->fetch(PDO::FETCH_ASSOC);




		$_SESSION["k_adi"]=$uyebilgisor['uye_kad'];
		$_SESSION["pass"]=$_POST["pwd"];
		$formkadi=$_POST["kadi"];
		$formpwd=$_POST["pwd"];

		header("Location:giris.php?giris=ok");

	}
	else
	{

		header("Location:giris.php?giris=hata");
	}

}









ob_end_flush();

?>
