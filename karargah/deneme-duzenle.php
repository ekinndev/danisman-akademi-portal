<?php 
include 'header.php' ;
$denemekontrol=$db->prepare('SELECT * FROM denemeayar where id=:id');
$denemekontrol->execute(array(
  "id" => $_GET['deneme_id']

));
$denemecek=$denemekontrol->fetch(PDO::FETCH_ASSOC);
?>
<!-- /top navigation -->

<!-- page content -->
<div class="right_col" role="main">
  <div class="">


    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Sayfa Düzenle</h2>
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
            <form action='islem.php' method="POST">
              <label>Deneme Adı</label>
              <input type="text" name="sonuc_denemeisim" required="required" value="<?php echo $denemecek['sonuc_denemeisim']; ?>" class="form-control ">
              <br>

              <!-- Ck Editör Başlangıç -->

              <div class="form-group">



                <input type="hidden" name="id" value="<?php echo $denemecek['id']; ?>">
                <textarea  class="ckeditor" id="editor1" name="sonuc_aciklama"><?php echo $denemecek['sonuc_aciklama']; ?></textarea>

              </div>

              <script type="text/javascript">

               CKEDITOR.replace( 'editor1',

               {

                filebrowserBrowseUrl : 'ckfinder/ckfinder.html',

                filebrowserImageBrowseUrl : 'ckfinder/ckfinder.html?type=Images',

                filebrowserFlashBrowseUrl : 'ckfinder/ckfinder.html?type=Flash',

                filebrowserUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',

                filebrowserImageUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',

                filebrowserFlashUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',

                forcePasteAsPlainText: true

              } 

              );

            </script>

            <!-- Ck Editör Bitiş -->
            <label>Yayın:</label><br>
            <input type="radio" class="form-check-input" value="1" <?php echo $denemecek['denemeayar_yayin']=="1" ? "checked":"" ?> name="denemeayar_yayin"required >

            <label class="form-control-label mr-4">Açık</label>

            <input type="radio" class="form-check-input" <?php echo $denemecek['denemeayar_yayin']=="0" ? "checked":"" ?> value="0" name="denemeayar_yayin"required>
            <label class="form-control-label mr-4">Kapalı</label><br>
            <label>Katılım:</label><br>
             <input type="radio" class="form-check-input" value="1" <?php echo $denemecek['denemeayar_katilim']=="1" ? "checked":"" ?> name="denemeayar_katilim"required >
            
            <label class="form-control-label mr-4">Açık</label>

            <input type="radio" class="form-check-input" <?php echo $denemecek['denemeayar_katilim']=="0" ? "checked":"" ?> value="0" name="denemeayar_katilim"required>
            <label class="form-control-label mr-4">Kapalı</label><br>
            <button type="submit" name="denemeduz" class="btn btn-success">Düzenle</button>
          </form>
        </div>



        <br>

      </div>
    </div>

    <!-- Bitiyor -->


  </div>
</div>
</div>
<!-- /page content -->
<!-- footer content -->
<?php include 'footer.php'; ?>

