<?php 
include 'header.php' ;
$sayfakontrol=$db->prepare('SELECT * FROM sayfaisim where sayfa_id=:id');
$sayfakontrol->execute(array(
"id" => $_GET['sayfa_id']

));
$sayfacek=$sayfakontrol->fetch(PDO::FETCH_ASSOC);
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
            <label>Başlık</label>
            <input type="text" name="sayfabaslik" required="required" value="<?php echo $sayfacek['sayfabaslik']; ?>" class="form-control ">
            <br>

            <!-- Ck Editör Başlangıç -->

            <div class="form-group">

           

              <input type="hidden" name="sayfa_id" value="<?php echo $sayfacek['sayfa_id']; ?>">
            <textarea  class="ckeditor" id="editor1" name="sayfaicerik"><?php echo $sayfacek['sayfaicerik']; ?></textarea>

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

        <button type="submit" name="sayfaduz" class="btn btn-success">Düzenle</button>
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

