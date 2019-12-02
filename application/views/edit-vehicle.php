<?php $this->load->view('template/header'); ?>

<div class="be-content">
        <div class="main-content container-fluid">
          <div class="row">
            <div class="col-sm-12">
              <div class="panel panel-default panel-border-color panel-border-color-primary be-loading">
                <div class="panel-heading panel-heading-divider"><i class="icon mdi mdi-car"></i> <?php echo $Title;?></div>
                <div class="panel-body">
                  <form action="<?php echo base_url('Vehicles/editVehiclePost');?>" class="form-horizontal" method="post">
                     <input type="hidden" value="<?php echo $vehicle->ID ?>"   name="vehicle_id">
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Vehicle Number</label>
                      <div class="col-sm-6">
                        <input type="text" required="" value="<?php echo $vehicle->VehicleNo?>" name="VehicleNo" placeholder="Vehicle Number" class="form-control">
                      </div>
                    </div>
                      <!--   Adding vehivle name-->
<!--                      <div class="form-group">-->
<!--                          <label class="col-sm-3 control-label">Vehicle Name</label>-->
<!--                          <div class="col-sm-6">-->
<!--                              <select class="form-control" required="true" name="VehicleName">-->
<!--                                  <option value="">--- Choose Vehicle Name ----</option>-->
<!--                                  <option value="Van">Van</option>-->
<!--                                  <option value="Container">Container</option>-->
<!--                                  <option value="Motorbike">Motorbike</option>-->
<!---->
<!--                              </select>-->
<!--                          </div>-->
<!--                      </div>-->
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Vehicle Type</label>
                      <div class="col-sm-6">
                        <select class="form-control" required="true" name="Type">
                          <option value="">--- Choose Vehicle Type ----</option>
                          <?php 
                          foreach ($vtype as $key => $value) 
                          {
                            if($vehicle->VehicleTypeID == $value->TypeID)
                            {
                              echo '<option value="'.$value->TypeID.'" selected>'.$value->Type.'</option>';
                            } else {
                              echo '<option value="'.$value->TypeID.'">'.$value->Type.'</option>';
                            }
                          }
                          ?>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Driver Name</label>
                      <div class="col-sm-6">
                        <input type="text" required="" name="Driver" value="<?php echo $vehicle->DriverName?>" placeholder="Driver Name" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Driver Number</label>
                      <div class="col-sm-6">
                        <input type="text" required="" name="DriverNo" placeholder="Driver Number" class="form-control" value="<?php echo $vehicle->DriverNumber?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Driver NRIC/FIN</label>
                      <div class="col-sm-6">
                        <input type="text" name="NRIC" value="<?php echo $vehicle->DriverNRIC?>" placeholder="Driver NRIC/FIN" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-3"></div>
                      <div class="col-sm-6">
                        <button type="submit" class="btn btn-space btn-primary">Submit</button>
                        <a href="<?php echo base_url('Vehicles/update');?>" class="btn btn-space btn-default">Cancel</a>
                      </div>
                    </div>
                  </form>
              </div>

              <div class="be-spinner">
                <svg width="50px" height="50px" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
                  <circle fill="none" stroke-width="5" stroke-linecap="round" cx="33" cy="33" r="30" class="circle"></circle>
                </svg>
              </div>

            </div>
          </div>
    
    <?php $this->load->view('template/footer'); ?>
    <script src="<?php echo base_url();?>assets/lib/parsley/parsley.min.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){ 
        $('form').parsley();

        $('select').select2();

        $('form').submit(function(){
          $('.be-loading').addClass('be-loading-active');
        }); 

       });
    </script>