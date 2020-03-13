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
            <h2>Çizelge Ekleme</h2>
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
            <form action="islem.php" method="post">
            <label>Test Adı</label>
            <input type="text" name="cizelgeadi" required="required" class="form-control ">
            <br>
            <label>Link(http:// olmadan)</label>
            <input type="text" name="cizelgelink" required="required" class="form-control "><br>
          
            <button name="cizelgeekle" type="submit" class="btn btn-success">Ekle</button>
            </form>
          </div>
          <br>
          <table id="datatable" class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>ID</th>
                <th>İsim</th>
                <th>Tarih</th>
                <th>İndirilme Sayısı</th>
                <th></th>
              </tr>

            </thead>
            <tbody>
              <?php  $cizelgesor=$db->prepare("Select * From cizelgeler");
              $cizelgesor->execute();
              while ($cizelgecek=$cizelgesor->fetch(PDO::FETCH_ASSOC)) { ?>
                <tr>
                  <td><?php echo $cizelgecek['id']; ?></td>
                  <td><?php echo $cizelgecek['cizelgeadi']; ?></td>
                  <td><?php echo $cizelgecek['tarih']; ?></td>
                  <td><?php echo $cizelgecek['indirilmesayi']; ?></td>
                   <td width="200"><a href="islem.php?cizelge_id=<?php echo $cizelgecek['id']; ?>&cizelge_sil=ok"><button class="btn btn btn-danger">Sil</button></a></td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>

      <!-- Bitiyor -->


    </div>
  </div>
</div>
<!-- /page content -->
<!-- footer content -->
<?php include 'footer.php'; ?>