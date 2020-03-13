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
            <h2>Yönetici Listesi</h2>
            
            <div class="clearfix"></div>
          </div>

          <br>
          <div class="table-responsive">
          <table id="datatable" class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>ID</th>
                <th>K.Adı</th>
                <th>Mail</th>
                <th></th>
              </tr>

            </thead>
            <tbody>
             <?php 
             $yoneticisor=$db->prepare("Select * From yonetici");
             $yoneticisor->execute();
             while ($yoneticicek=$yoneticisor->fetch(PDO::FETCH_ASSOC)) {?>
              <tr>
                <td><?php echo $yoneticicek["id"]; ?></td>
                <td><?php echo $yoneticicek["k_adi"]; ?></td>
                <td><?php echo $yoneticicek["mail"]; ?></td>
                     <td><a href="islem.php?yonetici_id=<?php  echo $yoneticicek["id"]; ?>&yoneticisil=ok"><button name="yonetici_sil" class="btn btn-danger">Sil</button></a></td>
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