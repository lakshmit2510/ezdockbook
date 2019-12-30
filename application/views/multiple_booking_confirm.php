<?php $this->load->view('template/header'); ?>
<style type="text/css">
    .dockslot {
        background-color: #d8d8d8;
        display: inline-block;
        width: 15%;
        text-align: center;
        height: 100px;
        border-radius: 8px;
        padding: 25px;
        margin: 5px;
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
        background-color: #eb6357;
        color: #fff;
        border: 1px dashed #333;
    }

    .border-dotted {
        border: 2px dotted #ccc;
        padding: 20px 25px;
    }

    body {
        font-size: 20px;
    }

    .h4,
    h4 {
        font-size: 20px;
    }
</style>
<div class="be-content">
    <div class="main-content container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <?php if (!empty($QR)) { ?>
                        <div class="panel-heading panel-heading-divider">Verified Successfully</div>
                    <?php } else { ?>
                        <div class="panel-heading panel-heading-divider">Thank you</div>
                    <?php
                    } ?>
                    <div class="panel-body">
                        <div role="alert" class="alert alert-success alert-icon alert-icon-border alert-dismissible">
                            <div class="icon"><span class="mdi mdi-check"></span></div>
                            <div class="message">

                                <?php if (!empty($QR)) { ?>
                                    <button type="button" data-dismiss="alert" aria-label="Close" class="close">
                                        <span aria-hidden="true" class="mdi mdi-close"></span>
                                    </button>
                                    <h4><b>Your Job Order No : <?php echo $confirm_page_data; ?>.</b></h4> <strong>Success!</strong> has verfied successfully. Status has been changed to <b><?php echo $status; ?></b>.<br>
                                <?php } else { ?>
                                    <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true" class="mdi mdi-close"></span></button>
                                    <h4><b>Your Job Order No : <?php echo $confirm_page_data; ?>.</b></h4> <strong>Success!</strong> Your booking is confirmed.
                                    <p>Below booking details email to your registerd email address</p><b></b>
                                    <a href="<?php echo base_url('Booking/Add'); ?>" class="btn btn-ml btn-primary">Next Booking</a>
                                <?php } ?>
                                <a class="btn btn-md btn-danger" id="printview"><i class="mdi mdi-print"></i> Print</a>
                            </div>
                        </div>
                        <?php
                        $bookingArr = explode(',', $confirm_page_data);
                        foreach ($bookingArr as $key => $value) {
                            $book = $this->Booking_model->getBookingDetailID($value, 'RefNo');
                        ?>
                            <div class="printview">
                                <div class="col-sm-12 page-break">
                                    <h4><b><i class="mdi mdi-book-image"></i> Booking Information : P.O No(<?php echo $book->PONumber; ?>)</b></h4>
                                    <div class="col-sm-6">
                                        <table class="table">
                                            <tr>
                                                <td><b>P.O No / W.O No </b></td>
                                                <td><?php echo $book->PONumber; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Job Order No</b></td>
                                                <td><?php echo $book->BookingRefNo; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Booking Date</b></td>
                                                <td><?php echo date('m/d/Y', strtotime($book->CheckIn)); ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Check-In / Check-Out Time</b></td>
                                                <td><?php echo date('H:i', strtotime($book->CheckIn)) . ' <b>To</b> ' . date('H:i', strtotime($book->CheckOut)); ?></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="col-sm-6">
                                        <table class="table">
                                            <tr>
                                                <td><b>Docks Type / Dock.No</b></td>
                                                <td><?php echo $book->DockType . ' / ' . $book->SlotName; ?></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"><img src="<?php echo base_url($book->QRCode); ?>" width="120"></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>

                            </div>

                        <?php
                        }

                        ?>


                    </div>
                </div>
            </div>

            <?php $this->load->view('template/footer'); ?>

            <script type="text/javascript">
                $('#printview').on('click', function() {
                    var data = '';
                    $.each($('.printview'), function() {
                        data += $(this).html()
                    });
                    var mywindow = window.open('', 'my div', 'height=800,width=700');
                    mywindow.document.write('<html><head><title></title>');
                    mywindow.document.write('<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/lib/material-design-icons/css/material-design-iconic-font.min.css"/><link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" type="text/css"/>');
                    mywindow.document.write('<style type="text/css" media="print">@page{size:auto;margin:1mm} @media print {.page-break {page-break-after: always;}}.table>tbody>tr>td{ padding:5px; } </style></head><body>');
                    mywindow.document.write(data);
                    mywindow.document.write('</body></html>');
                    mywindow.document.close();
                    mywindow.print();
                    mywindow.close();
                });
            </script>