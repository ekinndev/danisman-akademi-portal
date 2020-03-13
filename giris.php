<?php 
session_start();
ob_start();

require_once('baglan.php');

$giris1=$db->prepare('SELECT *  FROM sayfaisim where sayfa_id=:id ');
$giris1->execute(array(
  'id'=>2
));
$girisyazi1=$giris1->fetch(PDO::FETCH_ASSOC); 
$giris2=$db->prepare('SELECT *  FROM sayfaisim where sayfa_id=:id ');
$giris2->execute(array(
  'id'=>3
));
$girisyazi2=$giris2->fetch(PDO::FETCH_ASSOC); 


?>
<!doctype html>
<html lang="en">
<head>
 <title>Giriş | Danışman Akademi Portal</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <link rel="stylesheet" type="text/css" href="style.css">
 <meta name="description" content="Danışman Akademi Giriş">
 <meta name="keywords" content="Danışman Akademi,Muhammet Eroğlu,Tyt,ayt,deneme,çizelge,yks">
 <meta name="author" content="abaliogluekin@gmail.com">
 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="css/bootstrap.min.css">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

</head>
<body>

  <?php require_once('header.php');
  if (!isset($_SESSION["k_adi"])) {
    ?>

    <div class="container">
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script> <!-- portalust --> <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-3665641666948158" data-ad-slot="1817827366" data-ad-format="auto" data-full-width-responsive="true"></ins> <script> (adsbygoogle = window.adsbygoogle || []).push({}); </script>

      <h1 style="font-size:40px;" class="display-2 text-center">Danışman Akademi Portala Giriş Yapın</h1><hr>

      <?php   
      if (isset($_GET['giris'])) {
       if ($_GET['giris']=="ok") {

        header("Refresh: 2; url=profil/profil.php"); 
      }
      else if($_GET['giris']=="hata")
      {
       echo '<div class="alert alert-danger">Sorun Var! <b>K.Adı ya da Şifre Yanlış</b></div>'; 
     }
   }


   ?> 

   <form action="islem.php" method="POST">

     <div class="row">

      <div class="col-md-4">

        <div class="form-group">
          <label >E-Mail:</label>
          <input type="email" class="form-control" required  placeholder="Mail" name="kadi">
        </div>
        <div class="form-group">
          <label >Şifre:</label>
          <input type="password" class="form-control" required placeholder="Şifre" name="pwd">
        </div>

        <button type="submit" class="btn btn-success" name="girisislem">Giriş Yap</button>
        <button type="submit" class="btn btn-info">Reset</button>
      </div>
      <div class="col-md-4">
        <h4><?php echo $girisyazi1['sayfabaslik']; ?></h4>
        <?php echo $girisyazi1['sayfaicerik']; ?>
      </div>
      <div class="col-md-4 text-justify">
       <h4>  <?php echo $girisyazi2['sayfabaslik']; ?></h4>
       <?php echo $girisyazi2['sayfaicerik']; ?>

     </div>
   </div>
 </form>



 <hr>


 <?php require_once('footer.php');?>
</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery-3.3.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js" ></script>
<?php } 
else 
{
 header("Location:profil/profil");
 ob_end_flush();
 exit;

}?>
</body>
</html>
<?php 

?>