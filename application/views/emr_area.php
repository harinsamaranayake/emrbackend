<?php include "includes/header.php" ?>

<?php include "includes/sidebar.php" ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Area Administrator
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
              <h3 class="box-title">Identification info</h3>
            </div>
            <div class="box-body">
             
              <input class="form-control" type="text" placeholder="Please insert the National Identity Card Number">
              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- Form Element sizes -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">EPF info</h3>
            </div>
            <div class="box-body">
             
              <input class="form-control" type="text" placeholder="Please insert the EPF Number">
              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">General info</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">                
                <div class="form-group">
                <label>Designation</label>
                  <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">Mr.</option>
                    <option>Mrs.</option>
                    <option>Miss.</option>
                    <option>Dr.</option>                        
                  </select>
                </div>
                <div class="form-group">
                  <!-- for attribute of the lable tag shold match with the corresponding input tag-->
                  <label for="inputCustomerFirstName">Display name</label>
                  <input type="text" class="form-control" id="inputCustomerFirstName" placeholder="">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Full name</label>
                  <input type="text" class="form-control" id="inputCustomerMiddleName" placeholder="">
                </div>                               
              </div>
              <!-- /.box-body -->
            </form>
          </div>
          <!-- /.box -->                

        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">         

          <!-- Input addon -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Contact info</h3>
            </div>
            <div class="box-body">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-mobile"></i></span>
                <input type="email" class="form-control" placeholder="Mobile">
              </div>
              <br>

              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                <input type="email" class="form-control" placeholder="Telephone">
              </div>
              <br>

              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-at"></i></span>
                <input type="email" class="form-control" placeholder="Email">
              </div>
              <br>

              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-eye"></i></span>
                <input type="email" class="form-control" placeholder="Password">
              </div>
              <br>

              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-key"></i></span>
                <input type="email" class="form-control" placeholder="PIN">
              </div>
              <br> 
                                     
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- general form elements -->
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Location info</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group has-success">
                  <label class="control-label" for="inputSuccess">Longitude</label>
                  <input type="text" class="form-control" id="inputSuccess" placeholder="Enter the lattitude">                  
                </div>
                <div class="form-group has-success">
                  <label class="control-label" for="inputSuccess">Lattitude</label>
                  <input type="text" class="form-control" id="inputSuccess" placeholder="Enter the lattitude">                  
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

      <!-- row -->
      <div class="row">        
        <div class="col-md-12">
          <div class="box-footer">           
            <button type="submit" class="btn btn-primary pull-right">Generate Administrator</button>
          </div>
        </div>
      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include "includes/footer.php" ?>
  <?php include "includes/slider.php" ?>
  <?php include "includes/js.php" ?>