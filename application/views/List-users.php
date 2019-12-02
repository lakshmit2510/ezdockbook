<?php $this->load->view('template/header'); ?>

<div class="be-content">
        <div class="main-content container-fluid">
          <div class="row">
            <div class="col-sm-12">
              <div class="panel panel-default panel-border-color panel-border-color-primary">
                <div class="panel-heading panel-heading-divider"><?PHP echo $Title;?></div>
                <div class="panel-body">

                  <table id="table3" class="table table-striped table-hover table-fw-widget">
                    <thead>
                      <tr>
                        <th width="30">S.No</th>
                        <th>Name</th>
                        <th>Login ID</th>
                        <th>Vehicle Type</th>
                        <th>Vehicle No</th>
                        <th>ACRA / UN</th>
                        <th>CreateOn</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      if($Users!=0)
                      {
                        $i=1;
                        foreach($Users as $row)
                        {
                          echo '<tr>
                            <td>'.$i++.'</td>
                            <td>'.$row->UserName.'</td>
                            <td>'.$row->UniqueID.'</td>
                            <td>'.$row->Type.'</td>
                            <td>'.$row->VNo.'</td>
                            <td>'.$row->UAN.'</td>
                            <td class="center">'.date('d/m/Y H:i',strtotime($row->CreatedOn)).'</td>';
                        }
                      }
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
    <?php $this->load->view('template/footer'); ?>
    <script src="<?php echo base_url();?>assets/lib/datatables/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/js/datatable.js');?>" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/lib/datatables/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/lib/datatables/plugins/buttons/js/dataTables.buttons.js" type="text/javascript"></script>

    <script type="text/javascript">
      $(document).ready(function(){
        
        $("#table3").dataTable({
          buttons:["copy", 
          {
            extend: 'excel',
            className: 'btn btn-default',
            exportOptions: {
              columns: ['th:not(:last-child)']
            }
          },"pdf"],
          lengthMenu:[[10,25,50,-1],[6,10,25,50,"All"]],
          dom:"Bfrtip"
        });
        $('.buttons-html5').addClass('btn btn-default');
      });
    </script>