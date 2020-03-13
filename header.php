<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-116345183-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-116345183-1');
	</script>

</head>
<div class="container">
	<div class="row">
		<a href="index"> <img class="img-fluid mr-auto d-block" src="https://danismanakademi.org/wp-content/uploads/2018/03/logo-web.png" alt="Danışman Akademi Logo"></a>

		
	</div>
</div>
<?php 

$sayfadurum= $_SERVER['SCRIPT_NAME'];

?>
<nav class="navbar navbar-expand-lg navbar-dark bg-success sticky-top my-3">
	<div class="container">
		
		<a href="index" class="navbar-brand">Danışman Akademi</a>
		<button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#menuac">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="menuac">
			<ul class="navbar-nav ml-auto ">
				<li class="nav-item <?php echo strstr($sayfadurum,"index") ?  'active' :'' ?> "><a href="index" class="nav-link"><i class="fas fa-home"></i> Anasayfa</a></li>
				
				<li class="nav-item <?php echo strstr($sayfadurum,"giris") ?  'active' :'' ?>"><a href="giris" class="nav-link"><i class="fas fa-sign-in-alt"></i> Giriş</a></li>
				<li class="nav-item <?php echo strstr($sayfadurum,"kayit") ?  'active' :'' ?>"><a href="kayit" class="nav-link"><i class="far fa-registered"></i> Kayıt Ol</a></li>
				
				<li class="nav-item <?php echo strstr($sayfadurum,"profil") ?  'active' :'' ?>"><a href="profil/profil" class="nav-link"><i class="fas fa-user-plus"></i> Profil</a></li>
				<li class="nav-item dropdown">
					<a href="#" class="nav-link dropdown-toggle ustmenu <?php echo strstr($sayfadurum,"denemesonuc") ?  'active' :'' ?> <?php echo strstr($sayfadurum,"canli") ?  'active' :'' ?><?php echo strstr($sayfadurum,"meslek") ?  'active' :'' ?><?php echo strstr($sayfadurum,"cizelge") ?  'active' :'' ?>" data-toggle="dropdown"><i class="fas fa-graduation-cap"></i> Akademi</a>
					<div class="dropdown-menu">
						<a href="canli" class="dropdown-item"><i class="fas fa-satellite-dish"></i> Canlı Yayın</a>
						<a href="denemesonuc" class="dropdown-item"><i class="fas fa-poll"></i> Deneme Sonuç</a>
						<a href="meslek" class="dropdown-item"><i class="fas fa-user-md"></i> Meslek Testi</a>
						<a href="cizelge" class="dropdown-item"><i class="fas fa-clipboard-list"></i> Çizelgeler</a>
						
					</div>
				</li>
			</ul>
		</div>
	</div>

</nav>

