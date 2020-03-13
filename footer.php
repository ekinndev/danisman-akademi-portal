
<?php 

$footeryazi=$db->prepare('SELECT *  FROM sayfaisim where sayfa_id=:id ');
$footeryazi->execute(array(
  'id'=>4
));
$footeryazicek=$footeryazi->fetch(PDO::FETCH_ASSOC);  ?>
 <div class="media">
  <img class="align-self-start mr-3 rounded-circle" src="https://secure.gravatar.com/avatar/e0c969052a9749d5566b1722a9cee76e?s=100&d=mm&r=g" alt="Muhammet Eroğlu">
  <div class="media-body">
    <h5 class="mt-0">    <?php  echo $footeryazicek['sayfabaslik']; ?></h5>
    <?php  echo $footeryazicek['sayfaicerik']; ?>
  </div>
</div>
<hr>


<div class="row ">
  <div class="col-md-12 text-center">
  <a target=_blank href="https://www.instagram.com/danisman_akademi/"> <i class="fab fa-instagram fa-lg mr-2 "></i></a>
  <a target=_blank href="https://twitter.com/danismanakademi"> <i style="color:#1DA1F2;" class="fab fa-twitter fa-lg mr-2"></i></a>
  <a target=_blank href="https://www.facebook.com/DanismanAkademi/"> <i style="color:#4267B2;" class="fab fa-facebook-square fa-lg mr-2"></i></a>
   <a target=_blank href="https://www.youtube.com/channel/UCdHxZxddllqarH2_Boto3iQ"><i   style="color:#FF0000;" class="fab fa-youtube fa-lg"></i></a>
 </div>
 
</div>
<footer class="footer font-small blue">
  <div class="footer-tasarlayan text-center py-3"><small>© 2019
    <a href="http://ekinabalioglu.com/" >Tasarlayan | Kodlayan</a></small></div>

  </footer>