<?php include "includes/header.php" ?>

<?php include "includes/sidebar.php" ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Map
        <small>live</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">General Elements</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        
        <!-- box -->
        <div class="col-md-12">          
          <div class="box">
            <div class="box-header with-border">

              <div id="googleMap" style="width:100%;height:450px;"></div>

              <script>
              function myMap() {
              var mapProp= {
                  center:new google.maps.LatLng(51.508742,-0.120850),
                  zoom:5,
              };
              var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
              }
              </script>

              <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAekxJBh1_8FogD0C7eveyawGQAq1sXxxw&callback=myMap"></script>

            </div>
          </div>
        </div>
        <!-- /box -->

      </div>
    </section>
    <!-- /.content -->

  </div>
  <!-- /.content-wrapper -->
  <?php include "includes/footer.php" ?>
  <?php include "includes/slider.php" ?>
  <?php include "includes/js.php" ?>