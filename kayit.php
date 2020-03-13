<!doctype html>
<html lang="en">
<head>
  <title>Kayıt | Danışman Akademi Portal</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="style.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <meta name="description" content="Danışmanakademi Portal Kayıt Sayfası">
  <meta name="keywords" content="Danışman Akademi,Muhammet Eroğlu,Tyt,ayt,deneme,çizelge,yks">
  <meta name="author" content="abaliogluekin@gmail.com">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  
</head>
<body>
  <?php 
  require_once("baglan.php");
  require_once('header.php');?>
  <div class="container">
  	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script> <!-- portalust --> <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-3665641666948158" data-ad-slot="1817827366" data-ad-format="auto" data-full-width-responsive="true"></ins> <script> (adsbygoogle = window.adsbygoogle || []).push({}); </script>
    <h1 style="font-size:40px;" class="display-2 text-center">Danışman Akademi Portala Kayıt Olun</h1><hr>
    <?php 
    if (isset($_POST['kayitislem'])) {



      $kullanicisor=$db->prepare("select * from uyeler where uye_kad=:kad or uye_mail=:mail");
      $kullanicisor->execute(array(
        'kad'=> $_POST['uye_kad'],
        'mail'=>$_POST['uye_mail']


      ));

      $say=$kullanicisor->rowCount();
      if ($say==0) {
        # code...


        $kaydet=$db->prepare("INSERT into uyeler set
          uye_kad=:uye_kad,
          uye_sifre=:uye_sifre,
          uye_mail=:uye_mail,
          uye_sehir=:uye_sehir,
          uye_alan=:uye_alan
          ");

        $insert=$kaydet->execute(array(

          'uye_kad'=>htmlspecialchars($_POST['uye_kad']),
          'uye_sifre'=>md5($_POST['uye_sifre']),
          'uye_mail'=>htmlspecialchars($_POST['uye_mail']),
          'uye_sehir'=>htmlspecialchars($_POST['uye_sehir']),
          'uye_alan'=>$_POST['uye_alan']




        ));

        if($insert)
        {
         echo '<div class="alert alert-success">Hoşgeldin <b>Kayıt Başarılı</b></div>';

       }
       else
       {
        echo '<div class="alert alert-danger">Sorun Var! <b>Kayıt Başarısız</b></div>';

      }


    }

    else
    {
      echo '<div class="alert alert-warning">Kullanıcı Adı veya Mail Kullanımda <b>Kayıt Başarısız</b></div>';
    }



  }

  ?>
  <form action='' method="POST">

   <div class="form-group">
    <label class="form-control-label">Kullanıcı Adınız:</label>
    <input type="text" required class="form-control" minlength="5" maxlength="30" placeholder="Kullanıcı Adı" name="uye_kad">
  </div>
  <div class="form-group">
   <label class="form-control-label">Şifre:</label>
   <input type="password" required class="form-control" minlength="5" maxlength="30" placeholder="Şifre" name="uye_sifre">
 </div>
 <div class="form-group">
   <label class="form-control-label">Email:</label>
   <input type="email"  required class="form-control"  placeholder="ornek@danismanakademi.org" name="uye_mail">
 </div>
 <div class="form-group">
   <label class="form-control-label">Şehir:</label>
   <input type="text" required class="form-control" maxlength="20" placeholder="Ankara" name="uye_sehir">
 </div>
 <label class="form-control-label"> Alanınız:</label><br>
 <div class="form-check" >

  <input type="radio" class="form-check-input" value="SAY"  name="uye_alan"required>
  <label class="form-control-label mr-4">Say</label>

  <input type="radio" class="form-check-input"  value="EA" name="uye_alan"required>
  <label class="form-control-label mr-4">EA</label>

  <input type="radio" class="form-check-input"  value="SÖZ" name="uye_alan" required>
  <label class="form-control-label mr-4">Söz</label>

  <input type="radio" class="form-check-input"  value="DİL" name="uye_alan" required>
  <label class="form-control-label ">Dil</label>
</div>

<button type="submit" name="kayitislem" class="btn btn-success">Kayıt Ol</button>
<button type="reset" class="btn btn-info">Reset</button>
</form>

<hr>

<?php require_once('footer.php');?>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery-3.3.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js" ></script>
</body>
</html>