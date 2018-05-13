<?php include "includes/header.php" ?>

<?php include "includes/sidebar.php" ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Bill
        <small>details</small>
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

        <div class="col-md-12">          
        <div class="box">
        <div class="box-header with-border">

          <div class="col-md-6">
          <!-- left column   -->

            <!-- start of first main box -->
            <div class="box box-primary">
              <div class="box-header with-border">

                <div class="">
                  <div class="box-header">
                    <div class="row">
                      <h1>
                        Customer
                        <small>details</small>
                      </h1>
                    </div>
                  </div>
                </div>

                <div class="">              
                  <div class="row">
                    <div class="box-body col-md-6">             
                       <label class="control-label" for="inputSuccess">Customer NIC</label>                      
                    </div>
                    <div class="box-body col-md-6">             
                      <div class="form-group">
                        <select class="form-control select2" style="width: 100%;">
                          <option selected="selected">None</option>
                          <option>95</option>
                          <option>96</option>
                          <option>97</option>                        
                        </select>
                      </div>              
                    </div>
                  </div>              
                </div>            

                <div class="">              
                  <div class="row">
                    <div class="box-body col-md-6">             
                       <label class="control-label" for="inputSuccess">Account ID</label>                      
                    </div>
                    <div class="box-body col-md-6">             
                      <div class="form-group">
                        <select class="form-control select2" style="width: 100%;">
                          <option selected="selected">None</option>
                          <option>95</option>
                          <option>96</option>
                          <option>97</option>                        
                        </select>
                      </div>               
                    </div>
                  </div>              
                </div>                        

              </div>
            </div>
            <!-- end of first main box -->

            <!-- start of second main box -->
            <div class="box box-primary">
              <div class="box-header with-border">

                <div class="">
                  <div class="box-header">
                    <div class="row">
                      <h1>
                        2018
                        <small>May</small>
                      </h1>
                    </div>
                  </div>
                </div>
              
                <div class="">
                  <div class="row">
                    <div class="box-header">
                      <h3 class="box-title">New reading</h3>
                    </div>
                  </div>
                  <div class="row">
                    <div class="box-body col-md-6">             
                      <input class="form-control" type="text" placeholder="reading">              
                    </div>
                    <div class="box-body col-md-6">             
                      <input class="form-control" type="text" placeholder="date">              
                    </div>
                  </div>              
                </div>
                <!-- /.box -->
              
                <div class="">
                  <div class="row">
                    <div class="box-header">
                      <h3 class="box-title">Last reading</h3>
                    </div>
                  </div>
                  <div class="row">
                    <div class="box-body col-md-6">             
                      <input class="form-control" type="text" placeholder="reading">              
                    </div>
                    <div class="box-body col-md-6">             
                      <input class="form-control" type="text" placeholder="date">              
                    </div>
                  </div>
                  <!-- /.box-body -->
                </div>
                <!-- /.box -->

                <div class="">
                  <div class="row">
                    <div class="box-header">
                      <h2>
                        Months'
                        <small>usage is</small>                    
                        100
                        <small>units</small>  
                      </h2>                  
                    </div>
                  </div>              
                </div>
                <!-- /.box -->

                <div class="">
                  <div class="row">
                    <div class="box-header">
                      <h2>
                        Average
                        <small>usage is</small>                    
                        120
                        <small>units</small>  
                      </h2>                  
                    </div>
                  </div>              
                </div>
                <!-- /.box -->           

              </div>
            </div>
            <!-- end of second main box -->

          </div>
          <!--/.col (left) -->


          <!-- col (right) -->
          <div class="col-md-6">

            <div class="box box-primary">
            <div class="box-header with-border">

            <div class="">
              <div class="">
                <div class="box-header">
                  <div class="row">
                    <h1>
                      Payments
                      <small>details</small>
                    </h1>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="form-group has-general">
                  <div class="box-body col-md-6">             
                    <label class="control-label" for="inputSuccess">Usage charges</label>            
                  </div>
                  <div class="box-body col-md-6">             
                    <input class="form-control" type="text" placeholder="Usage charge">              
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="form-group has-general">
                  <div class="box-body col-md-6">             
                    <label class="control-label" for="inputSuccess">Additional charges</label>            
                  </div>
                  <div class="box-body col-md-6">             
                    <input class="form-control" type="text" placeholder="Additional charges">                                
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="form-group has-general">
                  <div class="box-body col-md-6">             
                    <label class="control-label" for="inputSuccess">Balance from last month</label>            
                  </div>
                  <div class="box-body col-md-6">             
                    <input class="form-control" type="text" placeholder="Balance from last month">
                    <hr style="border-color:#428BCA">                    
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="form-group has-general">
                  <div class="box-body col-md-6">             
                    <label class="control-label" for="inputSuccess">Total</label>            
                  </div>
                  <div class="box-body col-md-6">                  
                    <input class="form-control" type="text" placeholder="Total">              
                  </div>                
                </div>              
              </div>

              <div class="row">
                <div class="form-group has-general">
                  <div class="box-body col-md-6">             
                    <label class="control-label" for="inputSuccess">Govenment discount</label>            
                  </div>
                  <div class="box-body col-md-6">             
                    <input class="form-control" type="text" placeholder="Discount">
                    <hr style="border-color:#428BCA">                  
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="form-group has-general">
                  <div class="box-body col-md-6">             
                    <label class="control-label" for="inputSuccess">Total Payable</label>            
                  </div>
                  <div class="box-body col-md-6">             
                    <input class="form-control" type="text" placeholder="Sub Total">              
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="form-group has-general">
                  <div class="box-body col-md-6">             
                    <label class="control-label" for="inputSuccess">Payment</label>            
                  </div>
                  <div class="box-body col-md-6">             
                    <input class="form-control" type="text" placeholder="Payment">
                    <hr style="border-color:#428BCA">              
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="form-group has-general">
                  <div class="box-body col-md-6">             
                    <label class="control-label" for="inputSuccess">Balance</label>            
                  </div>
                  <div class="box-body col-md-6">             
                    <input class="form-control" type="text" placeholder="Balance">              
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->

            </div>
            </div>              

          </div>
          <!--/.col (right) -->

        </div>
        <!-- /.row -->

        <!-- row -->
        <div class="row">        
          <div class="col-md-12">
            <div class="box-footer">           
              <button type="submit" class="btn btn-primary pull-right">Generate PDF</button>
            </div>
          </div>
        </div>

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