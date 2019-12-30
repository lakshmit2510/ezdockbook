<div class="modal colored-header colored-header-primary fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" data-dismiss="modal" aria-hidden="true" class="close"><span class="mdi mdi-close"></span></button>
      <h5 class="modal-title" id="exampleModalLabel">P.O No & Datetime Selection</h5>
    </div>
    <div class="modal-body" style="min-height: 430px;padding:20px 5px;">
      <form id="add-pono-form">
        <div class="form-group add-field" style="margin-bottom:10px;display: flex;align-items: center;">
          <label class="col-sm-3 control-label">P.O No / W.O No <span style="color: #ff0000">*</span></label>
          <div class="multiple-puchaseorder-no col-sm-9">
            <input type="text" name="PONumber" data-parsley-trigger="keyup" required="true" placeholder="P.O No / W.O No" class="form-control required">
          </div>
        </div>
        <?php
        $disabledHours = [];
        $x = 0;
        if ($supplierGroupInfo[0]->AvailableTimings != '') {
          while ($x <= 24) {
            $availableTimings = explode(',', $supplierGroupInfo[0]->AvailableTimings);

            if (count($availableTimings) > 0 && !in_array($x, $availableTimings)) {
              array_push($disabledHours, $x);
            }
            $x++;
          }
        }
        ?>
        <div class="form-group">
          <label class="col-sm-3 control-label">Chech-In & Check-Out Time <span style="color: #ff0000">*</span></label>
          <div class="datetime-field col-sm-9">
            <div class="col-sm-6">
              <div data-start-view="2" data-date-hour-disabled="<?php echo implode(', ', $disabledHours); ?>" data-date-format="yyyy-mm-dd hh:00" class="input-group date checkintime">
                <input size="16" readonly="true" required="true" data-parsley-trigger="keyup" type="text" id="CheckIn" name="CheckInDate" placeholder="Check-In Time" class="form-control"><span class="input-group-addon btn btn-primary"><i class="icon-th mdi mdi-calendar"></i></span>
              </div>
            </div>
            <div class="col-sm-6">
              <input readonly="true" type="text" id="CheckOut" name="CheckOutDate" placeholder="Check-Out Time" class="form-control">
            </div>
          </div>
        </div>
        <div id="pono-available-docks"></div>
      </form>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal" id="close-add-pono">Close</button>
      <button type="button" class="btn btn-primary" id="save-add-pono" data-dismiss="modal">Save changes</button>
    </div>
  </div>
</div>