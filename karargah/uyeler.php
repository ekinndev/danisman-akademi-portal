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
            <h2>Üye Listesi</h2>
            
            <div class="clearfix"></div>
          </div>

          <br>
          
          <div class="table-responsive">
            <table id="datatable" class="table table-striped table-bordered ">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>K Adı</th>
                  <th>Mail</th>
                  <th>Şehir</th>
                  <th>Alan</th>
                  <th></th>
                </tr>

              </thead>
              <tbody>
                <?php 
                $uyesor=$db->prepare("Select * From uyeler");
                $uyesor->execute();
                while ($uyecek=$uyesor->fetch(PDO::FETCH_ASSOC)) {?>
                  <tr>
                    <td><?php echo $uyecek["uye_id"];?></td>
                    <td><?php echo $uyecek["uye_kad"];?></td>
                    <td><?php echo $uyecek["uye_mail"];?></td>
                    <td><?php echo $uyecek["uye_sehir"];?></td>
                    <td><?php echo $uyecek["uye_alan"];?></td>
                    <td><a href="islem.php?uye_id=<?php  echo $uyecek["uye_id"]; ?>&uyesil=ok"><button name="uye_sil" class="btn btn-danger">Sil</button></a></td>
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
</div>
<!-- /page content -->
<!-- footer content -->
<?php include 'footer.php'; ?>