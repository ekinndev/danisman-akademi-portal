<?php 
ob_start();
session_start();
require_once 'baglan.php';

if (isset($_POST['admingiris'])) {
	$kullanici_adi=$_POST['k_adi'];
	$kullanicisifre=md5($_POST['k_sifre']);

	$yoneticisor=$db->prepare("SELECT * FROM yonetici where k_adi=:kadi and k_sifre=:ksifre");
	$yoneticisor->execute(array(

		'kadi'=>$kullanici_adi,
		'ksifre'=>$kullanicisifre
	));
	$say=$yoneticisor->rowCount();

	echo $say;
	if ($say==1) {
		$_SESSION['k_adi']=$kullanici_adi;
		header("Location:index.php");
	}
	else
	{
		echo "tests";
		header("Location:login.php?durum=no");
		exit;
	}

	
}

if ($_GET["uyesil"]=="ok") {
	$sil=$db->prepare("DELETE From uyeler where uye_id=:id");
	$kontrol=$sil->execute(array(
		'id'=>$_GET["uye_id"]



	));
	if ($kontrol) {
		header("Location:uyeler.php?durum=ok");
		exit;
	}
	else
	{
		header("Location:uyeler.php?durum=hata");
		exit;
	}
}

if ($_GET["yoneticisil"]=="ok") {
	$sil=$db->prepare("DELETE From yonetici where id=:id");
	$kontrol=$sil->execute(array(
		'id'=>$_GET["yonetici_id"]



	));
	if ($kontrol) {
		header("Location:yoneticiler.php?durum=ok");
		exit;
	}
	else
	{
		header("Location:yoneticiler.php?durum=hata");
		exit;
	}
}
if ($_GET["denemesil"]=="ok") {
	$sil=$db->prepare("DELETE From denemeayar where id=:id");
	$kontrol=$sil->execute(array(
		'id'=>$_GET["denemesil_id"]



	));
	if ($kontrol) {
		header("Location:denemeekle.php?durum=ok");
		exit;
	}
	else
	{
		header("Location:denemeekle.php?durum=hata");
		exit;
	}
}




if ($_GET["deneme_sil"]=="ok") {
	$sil=$db->prepare("DELETE From denemesonuclink where id=:id");
	$kontrol=$sil->execute(array(
		'id'=>$_GET["deneme_id"]



	));
	if ($kontrol) {
		header("Location:denemeekle.php?durum=ok");
		exit;
	}
	else
	{
		header("Location:denemeekle.php?durum=hata");
		exit;
	}
}

if ($_GET["canliyayin_sil"]=="ok") {
	$sil=$db->prepare("DELETE From canliyayinlink where id=:id");
	$kontrol=$sil->execute(array(
		'id'=>$_GET["canliyayin_id"]



	));
	if ($kontrol) {
		header("Location:canliekle.php?durum=ok");
		exit;
	}
	else
	{
		header("Location:canliekle.php?durum=hata");
		exit;
	}
}


if (isset($_POST['btnayar'])) {

	$updatesorgu=$db->prepare("UPDATE  ayar set

		sitedurum=:sitedurum,
		denemedurum=:denemedurum



		where id='1'
		");

	$update=$updatesorgu->execute(array(


		'denemedurum'=>$_POST['denemedurum'],
		'sitedurum'=>$_POST['sitedurum']
		
		




	));

	
	if($update)
	{
		header("Location:index.php?durum=ok");
		exit;
	}
	else
	{

		header("Location:index.php?durum=hata");
		exit;

	}
}

if ($_GET["cizelge_sil"]=="ok") {
	$sil=$db->prepare("DELETE From cizelgeler where id=:id");
	$kontrol=$sil->execute(array(
		'id'=>$_GET["cizelge_id"]



	));
	if ($kontrol) {
		header("Location:cizelgeekle.php?durum=ok");
		exit;
	}
	else
	{
		header("Location:cizelgeekle.php?durum=hata");
		exit;
	}
}
if ($_GET["test_sil"]=="ok") {
	$sil=$db->prepare("DELETE From meslekayar where id=:id");
	$kontrol=$sil->execute(array(
		'id'=>$_GET["test_id"]



	));
	if ($kontrol) {
		header("Location:testekle.php?durum=ok");
		exit;
	}
	else
	{
		header("Location:testekle.php?durum=hata");
		exit;
	}
}


if (isset($_POST['testekle'])) {

	$kaydet=$db->prepare("INSERT into meslekayar set
		meslekisim=:meslekisim,
		mesleksoru=:mesleksoru,
		mesleklink=:mesleklink

		");

	$insert=$kaydet->execute(array(

		'meslekisim'=>htmlspecialchars($_POST['meslekisim']),
		'mesleksoru'=>htmlspecialchars($_POST['mesleksoru']),
		'mesleklink'=>htmlspecialchars($_POST['mesleklink'])


	));

	if($insert)
	{
		header("Location:testekle.php?durum=ok");
		exit;

	}
	else
	{
		header("Location:testekle.php?durum=hata");
		exit;

	}


}

if (isset($_POST['canliekle'])) {

	$kaydet=$db->prepare("INSERT into canliyayinlink set
		canlikonu=:canlikonu,
		canlimetin=:canlimetin,
		canlilink=:canlilink,
		canliresim=:canliresim

		");

	$insert=$kaydet->execute(array(

		'canlikonu'=>htmlspecialchars($_POST['canlikonu']),
		'canlimetin'=>htmlspecialchars($_POST['canlimetin']),
		'canlilink'=>htmlspecialchars($_POST['canlilink']),
		'canliresim'=>htmlspecialchars($_POST['canliresim'])


	));

	if($insert)
	{
		header("Location:canliekle.php?durum=ok");
		exit;

	}
	else
	{
		header("Location:canliekle.php?durum=hata");
		exit;

	}


}

if (isset($_POST['cizelgeekle'])) {

	$kaydet=$db->prepare("INSERT into cizelgeler set
		cizelgeadi=:cizelgeadi,
		cizelgelink=:cizelgelink


		");

	$insert=$kaydet->execute(array(

		'cizelgeadi'=>htmlspecialchars($_POST['cizelgeadi']),
		'cizelgelink'=>htmlspecialchars($_POST['cizelgelink'])



	));

	if($insert)
	{
		header("Location:cizelgeekle.php?durum=ok");
		exit;

	}
	else
	{
		header("Location:cizelgeekle.php?durum=hata");
		exit;

	}


}



if (isset($_POST['sayfaduz'])) {
	$sayfaid=$_POST['sayfa_id'];
	$sayfaupdatesorgu=$db->prepare("UPDATE  sayfaisim set

		sayfabaslik=:sayfabaslik,
		sayfaicerik=:sayfaicerik



		where sayfa_id=$sayfaid
		");

	$sayfaupdate=$sayfaupdatesorgu->execute(array(


		'sayfabaslik'=>$_POST['sayfabaslik'],
		'sayfaicerik'=>$_POST['sayfaicerik']
		
		




	));

	
	if($sayfaupdate)
	{
		header("Location:sayfa-duzenle.php?sayfa_id=$sayfaid&durum=ok");
		exit;
	}
	else
	{

		header("Location:sayfa-duzenle.php?sayfa_id=$sayfaid&durum=hata");
		exit;

	}
}


if (isset($_POST['denemeekle'])) {
	$kaydet=$db->prepare("INSERT into denemeayar set
		sonuc_denemeisim=:sonuc_denemeisim,
		sonuc_aciklama=:sonuc_aciklama,
		denemeayar_katilim=:denemeayar_katilim,
		denemeayar_yayin=:denemeayar_yayin,
		deneme_resim=:deneme_resim


		");

	$insert=$kaydet->execute(array(

		'sonuc_denemeisim'=>htmlspecialchars($_POST['sonuc_denemeisim']),
		'sonuc_aciklama'=>htmlspecialchars($_POST['sonuc_aciklama']),
		'denemeayar_katilim'=>$_POST['denemeayar_katilim'],
		'denemeayar_yayin'=>$_POST['denemeayar_yayin'],
		'deneme_resim'=>htmlspecialchars($_POST['deneme_resim'])



	));

	if($insert)
	{
		header("Location:denemeekle.php?durum=ok");
		exit;

	}
	else
	{
		header("Location:denemeekle.php?durum=hata");
		exit;

	}
}
if (isset($_POST['denemeduz'])) {
	$denemeid=$_POST['id'];
	$denemeupdatesorgu=$db->prepare("UPDATE  denemeayar set

		sonuc_denemeisim=:sonuc_denemeisim,
		sonuc_aciklama=:sonuc_aciklama,
		denemeayar_yayin=:denemeayar_yayin,
		denemeayar_katilim=:denemeayar_katilim


		where id=$denemeid
		");

	$denemeupdate=$denemeupdatesorgu->execute(array(


		'sonuc_denemeisim'=>$_POST['sonuc_denemeisim'],
		'sonuc_aciklama'=>$_POST['sonuc_aciklama'],
		'denemeayar_yayin'=>$_POST['denemeayar_yayin'],
		'denemeayar_katilim'=>$_POST['denemeayar_katilim']
		




	));

	
	if($denemeupdate)
	{
		header("Location:deneme-duzenle.php?deneme_id=$denemeid&durum=ok");
		exit;
	}
	else
	{

		header("Location:deneme-duzenle.php?deneme_id=$denemeid&durum=hata");
		exit;

	}
}




?>