<?php 
include 'header.php' ;
?>
<!-- /top navigation -->

<!-- page content -->
<div class="right_col" role="main">



  <div class="clearfix"></div>

  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Deneme  Ekleme</h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>

            </li> 
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="col-md-7">
          <form action="islem.php" method="POST">
            <label>Deneme Adı</label>
            <input type="text" name="sonuc_denemeisim"  required="required" class="form-control ">
            <br>
            <label>Deneme Açıklama</label>
            <input type="text"  name="sonuc_aciklama" required="required" class="form-control "><br>
            <label>Deneme Resim</label>
            <input type="text"  name="deneme_resim" required="required" class="form-control "><br>
            <div class="form-check" >
              <label>Yayın</label><br>
              <input type="radio" class="form-check-input" value="1"  name="denemeayar_yayin"required>
              <label class="form-control-label mr-4">Açık</label>

              <input type="radio" class="form-check-input"  value="0" name="denemeayar_yayin"required>
              <label class="form-control-label mr-4">Kapalı</label><br>
              <label>Katılım:</label><br>
              <input type="radio" class="form-check-input" value="1"  name="denemeayar_katilim"required>
              <label class="form-control-label mr-4">Açık</label>

              <input type="radio" class="form-check-input"  value="0" name="denemeayar_katilim"required>
              <label class="form-control-label mr-4">Kapalı</label>




            </div>
            <br>
            <button tyoe="submit" name="denemeekle" class="btn btn-success">Ekle</button>
          </form>
        </div>
        <br>
        <div class="table-responsive col-md-12">
          <table  class="table table-striped table-bordered ">
            <thead>
              <tr>
                <th>Sıra</th>
                <th>Deneme Adı</th>
                <th>Açıklama</th>
                <th>Tarih</th>
                <th>Yayın</th>
                <th>Katılım</th>
                <th></th>
              </tr>

            </thead>
            <tbody>
              <?php 
              $denemedursor=$db->prepare("Select * From denemeayar");
              $denemedursor->execute();
              $sira=0;
              while ($denemedurcek=$denemedursor->fetch(PDO::FETCH_ASSOC)) {$sira++;?>
               <tr>
                <td><?php echo $sira; ?></td>
                <td><?php echo $denemedurcek['sonuc_denemeisim'] ?></td>
                <td><?php echo $denemedurcek['sonuc_aciklama'] ?></td>
                <td><?php echo $denemedurcek['sonuc_denemetarih'] ?></td>
                <td><?php echo $denemedurcek['denemeayar_yayin'] ?></td>
                <td><?php echo $denemedurcek['denemeayar_katilim'] ?></td>


                <td><a href="deneme-duzenle.php?deneme_id=<?php  echo $denemedurcek["id"]; ?>"><button name="deneme_duzenle" class="btn btn-primary btn-xs">Düzenle</button></a>
                  <a href="islem.php?denemesil_id=<?php  echo $denemedurcek["id"]; ?>&denemesil=ok"><button name="deneme_sil" class="btn btn-danger btn-xs">Sil</button></a></td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- Bitiyor -->


  </div>

</div>
<!-- /page content -->
<!-- footer content -->
<?php include 'footer.php'; ?>