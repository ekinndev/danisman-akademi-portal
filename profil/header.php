 <div class="container">
 <a href="../index"> <img class="img-fluid mr-auto d-block" src="https://danismanakademi.org/wp-content/uploads/2018/03/logo-web.png" alt="Danışman Akademi Logo"></a>
 </div>
<?php 
require_once('../baglan.php'); 

?>

 


 <nav class="navbar navbar-expand-lg navbar-dark bg-success my-3">
    <div class="container">
      
      <a href="../index.php" class="navbar-brand">Danışman Akademi</a>
      <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#menuac">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="menuac">
        <ul class="navbar-nav ml-auto ">
          <li class="nav-item  "><a href="../index" class="nav-link"><i class="fas fa-home"></i> Anasayfa</a></li>
           <!-- <li class="nav-item "><a href="../canli.php" class="nav-link"><i class="fas fa-satellite-dish"></i> Canlı Yayın</a></li>
           <li class="nav-item "><a href="../denemesonuc.php" class="nav-link"><i class="fas fa-poll"></i> Deneme Sonuç</a></li> -->
           <li class="nav-item "><a href="../giris" class="nav-link"><i class="fas fa-sign-in-alt"></i> Giriş</a></li>
           <li class="nav-item "><a href="../kayit" class="nav-link"> <i class="far fa-registered"></i> Kayıt Ol</a></li>
           <!-- <li class="nav-item "><a href="../meslek.php" class="nav-link"><i class="fas fa-user-md"></i> Meslek Testi</a></li> -->
            <li class="nav-item active"><a href="profil" class="nav-link"><i class="fas fa-user-plus"></i> Profil</a>
            </li>
            <li class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle ustmenu" data-toggle="dropdown"><i class="fas fa-graduation-cap"></i> Akademi</a>
              <div class="dropdown-menu">
              <a href="../canli" class="dropdown-item"><i class="fas fa-satellite-dish"></i> Canlı Yayın</a>
              <a href="../denemesonuc" class="dropdown-item"><i class="fas fa-poll"></i> Deneme Sonuç</a>
              <a href="../meslek" class="dropdown-item"><i class="fas fa-user-md"></i> Meslek Testi</a>
              <a href="../cizelge" class="dropdown-item"><i class="fas fa-graduation-cap"></i> Çizelgeler</a>
              
            </div>
            </li>
        </ul>
      </div>
    </div>

  </nav>

