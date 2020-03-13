<?php 
include 'header.php' ;



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
            <h2>Site ve Deneme Ayarları </h2>
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
       
            <div class="rows">
              <div class="col-md-6">
                <?php $ayarsor=$db->prepare("Select * From ayar");
               $ayarsor->execute();
               $ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);?>
    <form action="islem.php" method="POST">
                 <div class="form-inline">
                  <input class="form-control" type="radio" name="sitedurum" value="1" <?php echo $ayarcek['sitedurum']=="1" ? "checked":''; ?>  >
                  <label class="form-check-label" >
                    Site Açık
                  </label>
                   <input class="form-control" type="radio" name="sitedurum" value="0" <?php echo $ayarcek['sitedurum']=="1" ? "":'checked'; ?>>
                  <label class="form-check-label" >
                    Site Kapalı
                  </label>
                </div>
                <div class="form-inline">
                  <input class="form-control" type="radio" name="denemedurum" value="1" <?php echo $ayarcek['denemedurum']=="1" ? "checked":''; ?> >
                  <label class="form-check-label" >
                    Deneme Açık
                  </label>
                  <input class="form-control" type="radio" name="denemedurum" value="0"  <?php echo $ayarcek['denemedurum']=="1" ? "":'checked'; ?> >
                  <label class="form-check-label" >
                    Deneme Kapalı
                  </label>
                </div>
                <br>
              <button type="submit" class="btn btn-primary" name="btnayar">Güncelle</button>
              </form>
            </div>
          </div>

       
      </div>
    </div>

    <!-- Bitiyor -->


  </div>
</div>
</div>
<!-- /page content -->
<!-- footer content -->
<?php include 'footer.php'; ?>