<?php include "includes/header.php" ?>

<?php include "includes/sidebar.php" ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Rates
        <small>new</small>
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
        <!-- left column -->
        <div class="col-md-6">

          <!-- Form Element sizes -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Amphere</h3>
            </div>
            <div class="box-body">
             
              <input class="form-control" type="text" placeholder="Please insert the new amphere value">
              
            </div>

            <div class="box-footer">           
              <button type="submit" class="btn btn-primary pull-right">Save</button>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- Form Element sizes -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Phase</h3>
            </div>
            <div class="box-body">
             
              <input class="form-control" type="text" placeholder="Please insert the new phase value">
              
            </div>

            <div class="box-footer">           
              <button type="submit" class="btn btn-primary pull-right">Save</button>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- Form Element sizes -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Connection</h3>
            </div>
            <div class="box-body">
             
              <input class="form-control" type="text" placeholder="Please insert the new connection type">
              
            </div>

            <div class="box-footer">           
              <button type="submit" class="btn btn-primary pull-right">Save</button>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          

        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">         

          <!-- Form Element sizes -->
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Occupant</h3>
            </div>
            <div class="box-body">
             
              <input class="form-control" type="text" placeholder="Please insert the new occupant type">
              
            </div>

            <div class="box-footer">           
              <button type="submit" class="btn btn-primary pull-right">Save</button>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- Form Element sizes -->
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Tariff</h3>
            </div>
            <div class="box-body">
             
              <input class="form-control" type="text" placeholder="Please insert the new tariff type">
              
            </div>

            <div class="box-footer">           
              <button type="submit" class="btn btn-primary pull-right">Save</button>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- general form elements -->
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Sub area</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">                
                <div class="form-group">
                <label>District</label>
                  <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">Please select</option>
                    <option>Mrs.</option>
                    <option>Miss.</option>
                    <option>Dr.</option>                        
                  </select>
                </div>
                <div class="form-group">
                  <!-- for attribute of the lable tag shold match with the corresponding input tag-->
                  <label for="inputCustomerFirstName">Sub area</label>
                  <input type="text" class="form-control" id="inputCustomerFirstName" placeholder="please enter the new sub area name">
                </div> 
                <div class="box-footer">           
                  <button type="submit" class="btn btn-primary pull-right">Save</button>
                </div>                                           
              </div>
              <!-- /.box-body -->
            </form>
          </div>
          <!-- /.box -->   
          
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->      

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include "includes/footer.php" ?>
  <?php include "includes/slider.php" ?>
  <?php include "includes/js.php" ?>