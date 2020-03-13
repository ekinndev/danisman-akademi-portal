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
            <h2>Sayfalar</h2>
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
          <div class="col-md-12">

           <div class="table-responsive">
            <table id="datatable" class="table table-striped table-bordered ">
              <thead>
                <tr>
                  <th>Sıra</th>
                  <th>Sayfa Adı</th>
                  <th></th>
                </tr>

              </thead>
              <tbody>
                <?php 
                $sayfaissor=$db->prepare("Select * From sayfaisim");
                $sayfaissor->execute();
                $sira=0;
                while ($sayfaiscek=$sayfaissor->fetch(PDO::FETCH_ASSOC)) {$sira++;?>
                 <tr>
                  <td><?php echo $sira; ?></td>
                  <td><?php echo $sayfaiscek['sayfa_ad'] ?></td>
                 
                  <td><a href="sayfa-duzenle.php?sayfa_id=<?php  echo $sayfaiscek["sayfa_id"]; ?>"><button name="sayfa_duzenle" class="btn btn-primary btn-xs">Düzenle</button></a></td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>


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

