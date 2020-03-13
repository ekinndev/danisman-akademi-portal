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
            <h2>Canlı Yayın Ekleme</h2>
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
            <label>Canlı Yayın Adı</label>
            <input type="text" name="canlikonu" required="required" class="form-control ">
            <br>
            <label>Canlı Yayın Metni</label>
            <input type="text" name="canlimetin" required="required" class="form-control "><br>
            <label>Link(http:// olmadan)</label>
            <input type="text" name="canlilink" required="required" class="form-control "><br>
            <label>Resim Link(http:// olmadan)</label>
            <input type="text" name="canliresim" required="required" class="form-control "><br>
            <button name="canliekle" type="submit" class="btn btn-success">Ekle</button>
            </form>
          </div>
          <br>
          <table id="datatable" class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>ID</th>
                <th>İsim</th>
                <th>Tarih</th>
                <th></th>
              </tr>

            </thead>
            <tbody>
                  <?php  $canlisor=$db->prepare("Select * From canliyayinlink");
              $canlisor->execute();
              while ($canlicek=$canlisor->fetch(PDO::FETCH_ASSOC)) {?>
              <tr>
                <td><?php  echo $canlicek['id'];?></td>
                <td><?php  echo $canlicek['canlikonu'];?></td>
                <td><?php  echo $canlicek['tarih'];?></td>
                <td width="200"><a href="islem.php?canliyayin_id=<?php echo $canlicek['id']; ?>&canliyayin_sil=ok"><button class="btn btn btn-danger">Sil</button></a></td>
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