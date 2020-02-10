<?php $this->load->view('template/header'); ?>

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/lib/jquery.gritter/css/jquery.gritter.css" />
<style type="text/css">
  .dockslot {
    background-color: #0b53ca;
    display: inline-block;
    width: 10%;
    color: #fff;
    text-align: center;
    height: 60px;
    margin: 0 5px;
    border-radius: 8px;
    padding: 13px;
    cursor: pointer;
    border: 1px dashed #b5b5b5;
  }

  #dockslots-div input[type=checkbox] {
    display: none;
  }

  #dockslots-div input[type=checkbox]:checked+.dockslot {
    background-color: #11ca11;
    color: #fff;
    border: 1px dashed #333;
  }

  #dockslots-div input[type=checkbox]:disabled+.dockslot {
    background-color: #e60606;
    color: #fff;
    border: 1px dashed #333;
  }

  #dockslots-div input[type=checkbox] {
    display: none;
  }

  #dockslots-div input[type=checkbox]:checked+.dockslot_1 {
    background-color: #11ca11;
    color: #fff;
    border: 1px dashed #333;
  }

  #dockslots-div input[type=checkbox]:disabled+.dockslot_1 {
    background-color: #e60606 !important;
    color: #fff;
    border: 1px dashed #333;
  }

  #dockslots-div input[type=checkbox] {
    display: none;
  }

  #dockslots-div input[type=checkbox]:checked+.dockslot_2 {
    background-color: #11ca11;
    color: #fff;
    border: 1px dashed #333;
  }

  #dockslots-div input[type=checkbox]:disabled+.dockslot_1 {
    background-color: #e60606 !important;
    color: #fff;
    border: 1px dashed #333;
  }

  .border-dotted {
    border: 2px dotted #ccc;
    padding: 20px 25px;
  }

  h3.docleg>span::before {
    content: '';
    width: 20px;
    height: 20px;
    display: inline-block;
    background: #444;
  }

  .select2-container {
    width: 100% !important;
  }

  #AvailableDocks {
    position: relative;
  }

  .docklegend {
    display: inline-block;
    width: 35%;
    position: absolute;
    right: 0;
    top: 0;
  }

  .docklegend>span {
    width: 115px;
    display: block;
    float: left;
    font-size: 15px;
  }

  .docklegend>span::before {
    content: '';
    width: 26px;
    display: block;
    height: 13px;
    float: left;
    margin: 4px 5px;
    padding: 0px;
  }

  .docklegend>span.free::before {
    background: #0b53ca;
  }

  .docklegend>span.booked::before {
    background: #e60606;
  }

  .docklegend>span.select::before {
    background: #11ca11;
  }

  #pono-available-docks {
    clear: both;
    position: relative;
    padding-top: 20px;
  }

  #pono-available-docks .border-dotted {
    padding: 40px 25px !important;
  }

  #pono-available-docks .docklegend {
    width: auto;
    position: absolute;
    right: 0;
    top: 60px;
  }
</style>

<div class="be-content">
  <div class="main-content container-fluid">

    <div class="row wizard-row">
      <div class="col-md-12 fuelux">
        <?php if ($this->session->flashdata('type') == 'done') { ?>
          <div role="alert" class="alert alert-success alert-icon alert-icon-border alert-dismissible">
            <div class="icon"><span class="mdi mdi-check"></span></div>
            <div class="message">
              <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true" class="mdi mdi-close"></span></button><strong>Success!</strong> <?php echo $this->session->flashdata('msg'); ?>.
            </div>
          </div>
        <?php } else if ($this->session->flashdata('type') == 'error') { ?>
          <div role="alert" class="alert alert-danger alert-icon alert-icon-border alert-dismissible">
            <div class="icon"><span class="mdi mdi-check"></span></div>
            <div class="message">
              <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true" class="mdi mdi-close"></span></button><strong>Error!</strong> <?php echo $this->session->flashdata('msg'); ?>.
            </div>
          </div>
        <?php } ?>
        <div class="block-wizard panel panel-default panel-border-color panel-border-color-primary be-loading">
          <div id="wizard1" class="wizard wizard-ux no-steps-container">
            <ul class="steps" style="margin-left: 0">
              <li data-step="1" class="active">Booking Info<span class="chevron"></span></li>
            </ul>
            <form action="<?php echo base_url('Booking/saveMultiple'); ?>" class="form-horizontal" method="post" enctype="multipart/form-data">
              <div class="step-content">
                <input type="hidden" name="VType" id="pVType">
                <div data-step="1" class="step-pane active">
                  <div class="form-group col-sm-6">
                    <label class="col-sm-3 control-label">D.o Number</label>
                    <div class="col-sm-6">
                      <input type="text" name="DONumber" placeholder="D.o Number" class="form-control">
                    </div>
                  </div>
                  <div class="form-group col-sm-6">
                    <label class="col-sm-3 control-label">Airway Bill No</label>
                    <div class="col-sm-6">
                      <input type="text" name="BillNo" placeholder="Airway Bill No" class="form-control">
                    </div>
                  </div>
                  <div class="form-group col-sm-6">
                    <label class="col-sm-3 control-label">B/L No</label>
                    <div class="col-sm-6">
                      <input type="text" name="BLNo" placeholder="B/L No" class="form-control">
                    </div>
                  </div>
                  <div class="form-group col-sm-6">
                    <label class="col-sm-3 control-label">Company (Delivery To) <span style="color: #ff0000">*</span></label>
                    <div class="col-sm-6">
                      <select class="form-control required" required="true" name="DeliveryTo">
                        <option value="">--- Choose Company ----</option>
                        <?php
                        foreach ($company as $key => $value) {
                          echo '<option value="' . $value->CompanyUID . '">' . $value->CompanyName . '</option>';
                        }
                        ?>
                      </select>
                    </div>
                  </div>
                  <div class="form-group col-sm-6">
                    <label class="col-sm-3 control-label">Vehicle Number <span style="color: #ff0000">*</span></label>
                    <div class="col-sm-6">
                      <select class="form-control required" data-parsley-trigger="keyup" required="true" id="VNumber" name="VNumber">
                        <option value="">--- Choose Vehicle Number ----</option>
                        <?php
                        foreach ($vnumber as $key => $value) {
                          echo '<option value="' . $value->ID . '">' . $value->VehicleNo . '</option>';
                        }
                        ?>
                      </select>
                    </div>
                  </div>
                  <div class="form-group col-sm-6">
                    <label class="col-sm-3 control-label">Driver Name <span style="color: #ff0000">*</span></label>
                    <div class="col-sm-6">
                      <select class="form-control required" required="true" id="Driver" name="Driver">
                        <option value="">--- Choose Driver ----</option>
                        <?php
                        foreach ($vnumber as $key => $value) {
                          echo '<option value="' . $value->ID . '">' . $value->DriverName . '</option>';
                        }
                        ?>
                      </select>
                    </div>
                  </div>
                  <div class="form-group col-sm-6">
                    <label class="col-sm-3 control-label">Vehicle Type</label>
                    <div class="col-sm-6">
                      <input type="text" id="VType" class="form-control" readonly="true">
                    </div>
                  </div>
                  <div class="form-group col-sm-6">
                    <label class="col-sm-3 control-label">Driver NRIC/FIN</label>
                    <div class="col-sm-6">
                      <input type="text" name="NRIC" id="NRIC" readonly="true" class="form-control">
                    </div>
                  </div>
                  <!--Upload file input-->
                  <div class="form-group col-sm-6">
                    <label class="col-sm-3 control-label">Attatch Documents</label>
                    <div class="col-sm-6">
                      <input type="file" name="upload_file" multiple />
                    </div>
                  </div>

                  <div class="form-group col-sm-6">
                    <label class="col-sm-3 control-label">Docks Type <span style="color: #ff0000">*</span></label>
                    <div class="col-sm-6">
                      <select class="form-control" required="true" data-parsley-trigger="keyup" name="SlotType" id="SlotType">
                        <option value="">--- Choose Docks Type ----</option>
                        <?php
                        foreach ($slottype as $key => $value) {
                          if (!in_array($this->session->userdata('Role'), array(1, 3))) {
                            if ($value->Type == 'Parking') {
                              continue;
                            }
                          }
                          if ($supplierGroupInfo[0]->DockTypeID != 0) {
                            if ($supplierGroupInfo[0]->DockTypeID === $value->STypeID) {
                              echo '<option selected value="' . $value->STypeID . '">' . $value->Type . '</option>';
                            }
                          } else {
                            echo '<option value="' . $value->STypeID . '">' . $value->Type . '</option>';
                          }
                        }
                        ?>
                      </select>
                    </div>
                    <div class="col-sm-3">
                      <input type="hidden" id="SlotNos" name="SlotNos" value="1">
                    </div>
                  </div>

                  <div class="row">
                    <div class="card-body" style="margin-top: 30px;">
                      <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link active" data-toggle="tab" href="">P.O No & Datetime Selection<span style="color: red;margin-left: 5px;font-size: 15px;">*</span></a>
                        </li>
                      </ul>
                    </div>
                    <div class="tab-content">
                      <table id="pono-table-3" class="table table-striped table-bordered">
                        <thead>
                          <tr>
                            <th>Purchase order No</th>
                            <th>Bulliding Name</th>
                            <th>CheckIn/CheckOut Datetime</th>
                            <th>DockType</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class="no-pono">
                            <td colspan="3">Please click on Plus botton to add Po Number.</td>
                          </tr>
                        </tbody>
                      </table>
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" id="add-pono" disabled> + </button>
                    </div>
                  </div>
                  <!-- <div class="form-group add-field">
                        <label class="col-sm-3 control-label">P.O No / W.O No <span style="color: #ff0000">*</span></label>
                        <div class="multiple-puchaseorder-no col-sm-6" >
                            <input type="text" name="PONumber[]" data-parsley-trigger="keyup" required="true" placeholder="P.O No / W.O No" class="form-control required">
                        </div> 
                        <button type="button" class="btn btn-primary input-add"> + </button>
                    </div> -->

                  <?php if ($this->session->userdata('Role') == 1) { ?>
                    <input type="hidden" value="Internal" name="UserType">
                  <?php } else {
                    echo '<input type="hidden" name="UserType" value="' . $this->session->userdata('UserType') . '">';
                  } ?>

                  <div class="form-group">
                    <div class="col-sm-offset-5 col-sm-10" style="padding: 15px 0;">
                      <a href="<?php echo base_url('Booking'); ?>" class="btn btn-space btn-default">Cancel</a>
                      <button type="submit" class="btn btn-success btn-space">Submit</button>
                    </div>
                  </div>

                  <!-- <div data-step="3" class="step-pane">
                  <div class="col-sm-12">
                    <div class="form-group" id="AvailableDocks"></div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-5 col-sm-10" style="padding: 15px 0;">
                      <button data-wizard="#wizard1" class="btn btn-default btn-space wizard-previous">Previous</button>
                      <button type="submit" class="btn btn-success btn-space">Proceed to Book</button>
                    </div>
                  </div>
                </div> -->
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
    </div>


    <?php $this->load->view('add_PoNo'); ?>
    <?php $this->load->view('template/footer'); ?>
    <script src="<?php echo base_url(); ?>assets/lib/fuelux/js/wizard.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/lib/bootstrap-slider/js/bootstrap-slider.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/lib/parsley/parsley.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/lib/jquery.gritter/js/jquery.gritter.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function() {

        // $('#BuildingName').multiSelect({
        //   noneText: '--- Choose Building ---'
        // });

        $('form').parsley();

        $(".wizard-ux").wizard(), $(".wizard-ux").on("changed.fu.wizard", function() {
          $(".bslider").slider()
        }), $(".wizard-next").click(function(e) {
          $('form').parsley().validate();
          var t = $(this).data("wizard");
          $fill = 0;
          $('.required').each(function() {
            if (!$(this).val()) {
              $fill = 0;
              return false;
            } else {
              $fill = 1;
            }
          });

          if ($fill == 1) {
            $(t).wizard("next");
          }
          e.preventDefault();
        }), $(".wizard-previous").click(function(e) {
          var t = $(this).data("wizard");
          $(t).wizard("previous"), e.preventDefault()
        });

        var date = new Date();
        var today = new Date(date.getFullYear(), date.getMonth(), date.getDate());
        $(".checkintime").datetimepicker({
          startDate: new Date(),
          minTime: 0,
          minView: 1,
          autoclose: !0,
          componentIcon: ".mdi.mdi-calendar",
          navIcons: {
            rightIcon: "mdi mdi-chevron-right",
            leftIcon: "mdi mdi-chevron-left"
          }
        }).on('change', function(event, date) {
          checkin = event.delegateTarget.childNodes[1].value;
          timestamp = new Date(checkin);
          var chkdate = moment(timestamp).format("YYYY-MM-DD HH:mm");

          chkdate = new Date(chkdate);
          chkdate.setHours(chkdate.getHours() + 1);
          checkout = moment(chkdate).format("YYYY-MM-DD HH:mm");
          $('#CheckOut').val(checkout);
          var checkInVal = $('#CheckIn').val();
          if (checkInVal !== '') {
            showDockTypes();
          }

        });

        Date.prototype.addHours = function(h) {
          this.setHours(this.getHours() + h);
          return this;
        }


        $('#VNumber').change(function() {
          datas = new FormData();
          datas.append('VNumber', $(this).val());
          $.ajax({
            type: 'POST',
            url: 'getVehicleInfo',
            data: datas,
            dataType: 'JSON',
            contentType: false,
            processData: false,
            beforeSend: function() {
              $('.be-loading').addClass('be-loading-active');
            },
            success: function(data) {
              $('.be-loading').removeClass('be-loading-active');
              $('#pVType').empty();
              $('#VType').empty();
              $('#pVType').val(data.VehicleTypeID);
              $('#VType').val(data.Type);
            }
          });
        });

        $('#Driver').change(function() {
          datas = new FormData();
          datas.append('Driver', $(this).val());
          $.ajax({
            type: 'POST',
            url: 'getDriverInfo',
            data: datas,
            dataType: 'JSON',
            contentType: false,
            processData: false,
            beforeSend: function() {
              $('.be-loading').addClass('be-loading-active');
            },
            success: function(data) {
              $('.be-loading').removeClass('be-loading-active');
              $('#NRIC').empty();
              $('#NRIC').val(data.DriverNRIC);
            }
          });
        });

        $(document).on('click', '.freeslots', function() {
          var limit = 1; //$('#SlotNos').val();
          if (limit == '') {
            $.gritter.add({
              title: 'Please choose Number of docs',
              time: 1000,
              class_name: "color danger"
            });
            return false;
          }

          if (limit == 1) {
            $('.freeslots').not(this).prop('checked', false);
            return true;
          }

          if ($(this).siblings(':checked').length >= limit) {
            this.checked = false;
            $.gritter.add({
              title: 'You have select Only : ' + limit + ' docks',
              time: 1000,
              class_name: "color danger"
            });
          }
        });


        $('form').submit(function() {
          var ponoInfo = $('#pono-table-3 tbody tr');
          if (ponoInfo.length < 2) {
            $.gritter.add({
              title: 'Please Add P.O No & Datetime Selection',
              time: 1000,
              class_name: "color danger"
            });
            return false;
          }
          $('.be-loading').addClass('be-loading-active');
        });

        $('#SlotType').change(function() {
          var slotTypeVal = $(this).val();
          if (slotTypeVal || slotTypeVal !== '') {
            $('#add-pono').prop('disabled', false);
          } else {
            $('#add-pono').prop('disabled', true);
          }
        });
        $('#SlotType').trigger('change');
        // Add po no
        $('#save-add-pono').on('click', function(e) {
          $('#add-pono-form').parsley().validate();
          if ($('#add-pono-form').parsley().isValid()) {
            var isEditActive = $('#pono-table-3 .pono-edit-active');
            var poNumber = $('[name="PONumber"').val();
            var buildingName = $('#BuildingName').val();
            var checkInTime = $('#CheckIn').val();
            var checkOutTime = $('#CheckOut').val();
            var dockType = '';
            $.each($('input[name="Docks[]"]:checked'), function() {
              dockType = $(this).val();
            });
            if (!dockType) {
              alert('Please select Dock Information');
              return false;
            }

            var dockLabel = $('label[for="docsk' + dockType + '"]').text();
            var tableRow = '<tr>';
            tableRow += '<td class="pono-td">' + poNumber + '</td>';
            tableRow += '<input type="hidden" value="' + poNumber + '" name="poNumber[]"/>';
            tableRow += '<td class="buildingname-td">' + buildingName + '</td>';
            tableRow += '<input type="hidden" value="' + buildingName + '" name="buildingName[]"/>';
            tableRow += '<td class="checkin-checkout-td">' + checkInTime + ' - ' + checkOutTime;
            tableRow += '<input type="hidden" value="' + checkInTime + '" name="checkinTime[]"/>';
            tableRow += '</td>';
            tableRow += '<td class="docktype-td">' + dockLabel;
            tableRow += '<input type="hidden" value="' + dockType + '" name="dockType[]"/>';
            tableRow += '</td>';
            tableRow += '<td>';
            tableRow += '<button type="button" class="btn btn-primary edit-pono" data-toggle="modal" data-target="#exampleModal"> Edit </button>';
            tableRow += '<button type="button" class="btn btn-primary delete-pono" style="margin-left:10px"> Delete </button>';
            tableRow += '</td>';
            tableRow += '</tr>';
            if (poNumber !== '' && checkInTime !== '' && checkOutTime !== '') {
              if (isEditActive.length > 0) {
                isEditActive.replaceWith(tableRow);
              } else {
                $('#pono-table-3 tbody').prepend(tableRow);
              }

              $('.no-pono').hide();
            }

          } else {
            e.stopPropagation();
          }

        });
        $('#close-add-pono').on('click', function() {
          $('#pono-table-3 .pono-edit-active').removeClass('pono-edit-active');
        });
        $('#add-pono').on('click', function() {
          $('#pono-table-3 .pono-edit-active').removeClass('pono-edit-active');
          $('[name="PONumber"').val('');
          $('#BuildingName').val();
          $('#CheckIn').val('');
          $('#CheckOut').val('');
          $('#pono-available-docks').empty();
        });

        $('#pono-table-3').on('click', '.edit-pono', function() {
          $('#pono-table-3 .pono-edit-active').removeClass('pono-edit-active');
          var trEle = $(this).parents('tr');
          trEle.addClass('pono-edit-active');
          var cIOEle = $(trEle).find('.checkin-checkout-td').text();
          var cIOArr = cIOEle.split(' - ');
          var poNumber = $(trEle).find('.pono-td').text();
          var buildingName = $(trEle).find('.buildingname-td').text();
          var dockType = $(trEle).find('[name="dockType[]"]').val();
          $('#BuildingName').val(buildingName);
          $('[name="PONumber"').val(poNumber);
          $('#CheckIn').val(cIOArr[0]);
          $('#CheckOut').val(cIOArr[1]);
          showDockTypes(dockType);
        });

        $('#pono-table-3').on('click', '.delete-pono', function() {
          var trEle = $(this).parents('tr');
          trEle.remove();
          setTimeout(function() {
            if ($('#pono-table-3 tbody tr').length === 1) {
              $('.no-pono').show();
            }
          }, 100)
        });

        function showDockTypes(selectedVal) {
          var CheckIn = $('#CheckIn').val();
          var datas = new FormData();
          datas.append('SlotType', $('#SlotType').val());
          datas.append('Mode', $('#Mode').val());
          datas.append('BuildingName', $('#BuildingName').val());
          datas.append('CheckIn', CheckIn);

          $.ajax({
            type: 'POST',
            url: 'getAvailableDocks',
            data: datas,
            contentType: false,
            processData: false,
            beforeSend: function() {
              $('.be-loading').addClass('be-loading-active');
            },
            success: function(data) {
              $('#pono-available-docks').empty();
              $('.be-loading').removeClass('be-loading-active');
              $('#pono-available-docks').html(data);
              var tableRows = $('#pono-table-3 tbody tr');
              if (selectedVal) {
                $('#dockslots-div').find('[value="' + selectedVal + '"]').attr('checked', true)
              }
              $.each(tableRows, function() {
                var trCheckin = $(this).find('.checkin-checkout-td [name="checkinTime[]"]');
                if (trCheckin.length > 0) {
                  var checkinStr = trCheckin.val();
                  if (checkinStr === CheckIn) {
                    var trCheckin = $(this).find('.docktype-td').find('[name="dockType[]"]').val();
                    $('#dockslots-div').find('[value="' + trCheckin + '"]').attr('disabled', 'disabled');
                  }
                }
              });
            }
          });
        }
      });
    </script>