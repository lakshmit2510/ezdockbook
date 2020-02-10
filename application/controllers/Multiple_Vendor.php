<?php
defined('BASEPATH') or exit('No direct script access allowed');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
class Multiple_Vendor extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    if (!$this->session->userdata('is_loggin')) {
      redirect(base_url('Login'));
    }
    $this->load->model('Booking_model');
    $this->load->model('User_model');
    $this->load->model('Multiple_Vendor_model');
  }

  public function index($filter = '')
  {
    $data['Title'] = 'Booking';
    $data['Page'] = 'Booking';
    $data['booking'] = $this->Booking_model->getBookingDetail();
    $this->load->view('list_booking', $data);
  }

  function addBookingMultipleVendor()
  {
    if (!in_array($this->session->userdata('Role'), array(1, 2, 3))) {
      redirect('Dashboard');
      exit;
    }
    $data['Title'] = 'Add New Booking';
    $data['Page'] = 'Add';
    $data['vnumber'] = $this->Common_model->getVehcileNo();
    $data['slottype'] = $this->Common_model->getTableData('slottypes', 'Active');
    $data['company'] = $this->Common_model->getTableData('company', 'Active');
    $data['mode'] = $this->Common_model->getTableData('bookingmode', 'Active');
    $data['supplierGroupInfo'] = $this->Common_model->getSupplierById($this->session->userdata('SupplierGroupID'));
    $this->load->view('add_qr_booking', $data);
  }
  function Verify()
  {
    $RefNo = $this->input->post('RefNo');
    $isCheckedIn = $this->Booking_model->getVendorBooking($RefNo);
    if (is_object($isCheckedIn)) {
      if ((!empty($isCheckedIn->ActualCheckIn) || !$isCheckedIn->ActualCheckIn == NULL) && empty($isCheckedIn->ActualCheckOut) || $isCheckedIn->ActualCheckOut == NULL) {

        $this->vendorActualCheckout($isCheckedIn);

        $msg = array('error' => 0, 'status' => 3);
        $this->session->set_flashdata('done', 'Booking has been Checked-Out Successfully');
      } else {
        $msg = array('error' => 1);
      }
      echo json_encode($msg);
    } else {
      $detail = $this->Multiple_Vendor_model->getDetailByID($RefNo);
      if (is_object($detail)) {
        $this->saveToBooking($detail);
        $msg = array('error' => 0, 'status' => 2);
        $this->session->set_flashdata('done', 'Booking has been Checked-In Successfully');
      } else {
        $msg = array('error' => 1);
      }
      echo json_encode($msg);
    }
  }

  function warehouseMultivendorQRCheck()
  {
    $RefNo = $this->input->post('RefNo');
    $isCheckedIn = $this->Booking_model->getVendorBooking($RefNo);
    if (is_object($isCheckedIn)) {
      if (empty($isCheckedIn->WarehouseCheckIn) || $isCheckedIn->WarehouseCheckIn == NULL) {
        $now = date('Y-m-d H:i:s');
        $data['WarehouseCheckIn'] = $now;
        $data['status'] = 6;
        $this->Booking_model->updateCheckout($RefNo, $data);
        $msg = array('error' => 0, 'status' => 6);
        $this->session->set_flashdata('done', 'Booking has been Checked-In to W/H Successfully');
      } else if ((!empty($isCheckedIn->WarehouseCheckIn) || !$isCheckedIn->WarehouseCheckIn == NULL) && empty($isCheckedIn->WarehouseCheckOut) || $isCheckedIn->WarehouseCheckOut == NULL) {

        $this->vendorWarehouseCheckout($isCheckedIn);

        $msg = array('error' => 0, 'status' => 7);
        $this->session->set_flashdata('done', 'Booking has been Checked-Out from W/H Successfully');
      } else {
        $msg = array('error' => 1);
      }
      echo json_encode($msg);
    } else {
      echo json_encode(array('error' => 1));
    }
  }

  function vendorWarehouseCheckout($WHCheckedout)
  {
    $now = date('Y-m-d H:i:s');
    $datetime1 = strtotime($now);
    $datetime2 = strtotime($WHCheckedout->WarehouseCheckIn);
    $interval  = $datetime1 - $datetime2;
    $minutes   = round($interval / 60);
    if ($minutes < 10) // Eairly CheckOut
    {
      $msg = array('error' => 100, 'Msg' => '<b style="color:red">"TOO EARLIY CHECKOUT"</b> PLEASE JOIN THE QUEUE LATER.');
      echo json_encode($msg);
      exit;
    }
    $data['WarehouseCheckOut'] = date('Y-m-d H:i:s');
    $data['status'] = 7;
    $this->Booking_model->updateBooking($data, $WHCheckedout->BookingID);
  }

  function vendorActualCheckout($securityCheckOut)
  {
    $now = date('Y-m-d H:i:s');
    $datetime1 = strtotime($now);
    $datetime2 = strtotime($securityCheckOut->ActualCheckIn);
    $interval  = $datetime1 - $datetime2;
    $minutes   = round($interval / 60);
    if ($minutes < 10) // Eairly CheckOut
    {
      $msg = array('error' => 100, 'Msg' => '<b style="color:red">"TOO EARLY CHECKOUT"</b> PLEASE JOIN THE QUEUE LATER.');
      echo json_encode($msg);
      exit;
    }
    $data['ActualCheckOut'] = date('Y-m-d H:i:s');
    $data['status'] = 3;
    $this->Booking_model->updateBooking($data, $securityCheckOut->BookingID);
  }

  function saveToBooking($iData)
  {

    $this->load->library('ciqrcode');
    $booked = $this->Booking_model->getMax();
    $now = date('Y-m-d H:i:s');
    $data['ActualCheckIn'] = $now;
    $data['CheckIn'] = $now;
    $data['CheckOut'] = date('Y-m-d H:i', strtotime($now . ' +1 hour'));
    $data['BookingRefNo'] = 'SATS' . date('Y') . str_pad($booked, 4, '0', STR_PAD_LEFT);
    $data['CompanyUID'] = $iData->CompanyUID;
    $data['DriverName'] = $iData->DriverName;
    $data['VType'] = $iData->VType;
    // $data['AttachedFiles'] = $fileUploaded['file_path'];
    $data['VNo'] = $iData->VNo;
    $data['PONumber'] = $iData->PONumber;
    $data['DONumber'] = $iData->DONumber;
    $data['BuildingName'] = $iData->BuildingName;
    $data['DeliveryTo'] = $iData->DeliveryTo;
    $data['VendorBookingRefNo'] = $iData->VendorBookingRefNo;
    $data['SlotType'] = $iData->SlotType;
    $data['SlotNos'] = $iData->SlotNos;
    $data['BillNo'] = $iData->AirwayBillNo;
    $data['BLNo'] = $iData->BLNo;
    $data['CreatedBy'] = $iData->CreatedBy;
    $data['status'] = 2;
    // $slot = $this->input->post('Docks');

    $params['data'] = 'Job Order No : ' . $data['BookingRefNo'];
    $params['level'] = 'H';
    $params['size'] = 10;
    if (!file_exists('assets/QRCode')) {
      mkdir('assets/QRCode', 0777, true);
    }
    $params['savename'] = 'assets/QRCode/QR' . $data['BookingRefNo'] . '.png';
    $this->ciqrcode->generate($params);
    $data['QRCode'] = $params['savename'];
    $this->Booking_model->SaveMultiVendorBooking($data);
  }

  function saveBooking()
  {
    $this->load->library('ciqrcode');
    $booked = $this->Multiple_Vendor_model->getMax();
    // $fileUploaded = $this->upload_file('Booking', false, 'upload_file');
    //    if(count($fileUploaded) === 0){
    //        return false;
    //    }
    $data['VendorBookingRefNo'] = 'VBR' . date('Y') . str_pad($booked, 4, '0', STR_PAD_LEFT);
    $data['UserType'] = $this->input->post('UserType');
    $data['CompanyUID'] = $this->input->post('DeliveryTo');
    $data['DriverName'] = $this->input->post('Driver');
    $data['VType'] = $this->input->post('VType');
    // $data['AttachedFiles'] = $fileUploaded['file_path'];
    $data['VNo'] = $this->input->post('VNumber');
    $data['PONumber'] = $this->input->post('PONumber');
    $data['DONumber'] = $this->input->post('DONumber');
    $data['BuildingName'] = $this->input->post('BuildingName');
    $data['SlotType'] = $this->input->post('SlotType');
    $data['CreatedBy'] = $this->session->userdata('UserUID');
    $data['status'] = 1;
    // $data['SlotID'] = $this->input->post('Docks');
    $data['SlotNos'] = $this->input->post('SlotNos');
    $data['AirwayBillNo	'] = $this->input->post('BillNo');
    $data['BLNo	'] = $this->input->post('BLNo');
    $data['DeliveryTo'] = $this->input->post('DeliveryTo');
    $slot = $this->input->post('Docks');
    foreach ($slot as $key => $value) {
      $data['SlotID'] = $value;
    }

    $params['data'] = 'Job Order No : ' . $data['VendorBookingRefNo'];
    $params['level'] = 'H';
    $params['size'] = 10;
    if (!file_exists('assets/QRCode')) {
      mkdir('assets/QRCode', 0777, true);
    }
    $params['savename'] = 'assets/QRCode/QR' . $data['VendorBookingRefNo'] . '.png';
    $this->ciqrcode->generate($params);
    $data['QRCode'] = $params['savename'];
    $store = $this->Multiple_Vendor_model->SaveBooking($data);

    if (!empty($store)) {
      $this->session->set_flashdata('msg', $data['VendorBookingRefNo'] . ' has been Created Successfully');
      $this->session->set_flashdata('type', 'done');

      $Old = $this->User_model->getUserdetails($this->session->userdata('UserUID'));
      $this->config_email();
      $data['mail_title'] = 'Your Booking Details - SATS Dock Management System';
      $data['RefNo'] = $data['VendorBookingRefNo'];
      $from_email = "support@satsez.com";
      $this->email->from($from_email, 'Satsez.com');
      $this->email->to($Old->EmailAddress1); #$Old->EmailAddress1;
      if (!empty($Old->EmailAddress2)) {
        $this->email->cc($Old->EmailAddress2);
      }
      $this->email->subject('Thank you. Your Booking Details - SATS Dock Management System');
      $mes_body = $this->load->view('email/email-template.php', $data, true); // load html templates
      $this->email->message($mes_body);
      $this->email->send();
    } else {
      $this->session->set_flashdata('msg', 'Booking system error. Try again!.');
      $this->session->set_flashdata('type', 'error');
    }
    redirect(base_url('Multiple_Vendor/Confirm/' . $data['VendorBookingRefNo']));
  }

  public function upload_file($sub_folder, $extensions, $name)
  {
    $uploadData = array();
    if (!empty($_FILES[$name]['name'])) {
      $filesCount = count($_FILES[$name]);
      $root_folder = $this->config->item('upload_file_path');
      $root_extensions = $this->config->item('upload_file_extensions');
      $root_file_size = $this->config->item('upload_file_size');
      $config = array(
        'upload_path' => $root_folder . $sub_folder,
        'allowed_types' => $extensions ? $extensions : $root_extensions,
        'overwrite' => TRUE,
        'remove_spaces' => FALSE,
        'max_size' => $root_file_size,
      );
      $this->load->library('upload', $config);
      //            $this->upload->initialize($config);
      if ($this->upload->do_upload($name)) {
        $fileData = $this->upload->data();
        if ($fileData) {
          $uploadData['file_path'] = $sub_folder . '/' . $_FILES[$name]['name'];
        }
      } else {
        $error = array('error' => $this->upload->display_errors());
      }
    }
    return $uploadData;
  }

  function getAvailableDocksVendor()
  {
    $type = $this->input->post('SlotType');
    $mode = $this->input->post('Mode');
    $building = $this->input->post('BuildingName');

    $CheckIn = date('Y-m-d H:i', strtotime($this->input->post('CheckIn')));
    $CheckOut = date('Y-m-d H:i', strtotime($CheckIn . ' +1 hour'));

    if (empty($type)) {
      echo '';
      exit();
    }
    $getslot = $this->Booking_model->getSlots($type, $building);
    $booked = $this->Booking_model->bookedSlot($type, $CheckIn, $CheckOut);

    $slot = '<h3 align="center">Docks Information</h3>';
    $slot .= '<div class="col-sm-12 border-dotted"><div id="dockslots-div">';

    $class = 'dockslot';

    foreach ($getslot as $key => $val) {
      if ($val->SlotID) {
        $disable = '';
      }
      $slot .= '<input type="checkbox" name="Docks[]" value="' . $val->SlotID . '" ' . $disable . ' class="freeslots" id="docsk' . $val->SlotID . '" /><label class="' . $class . '" for="docsk' . $val->SlotID . '">' . $val->SlotName . '</label>';
    }
    $slot .= '</div></div><div class="docklegend"><span class="free"> Available</span><span class="booked">Booked</span><span class="select">Selected</span></div>';
    echo $slot;
  }

  function Confirm($book = '')
  {
    if (empty($book)) {
      redirect('Multiple_Vendor');
      exit;
    }
    $data['Title'] = 'Multiple_Vendor';
    $data['Page'] = 'Multiple_Vendor';
    $data['RefNo'] = $book;
    $this->load->view('vendor_booking_confirmed', $data);
  }

  public function config_email()
  {
    $config = array(
      'charset'   => 'iso-8859-1',
      'newline' => '\r\n',
      'starttls'  => true,
      'wordwrap'  =>  true
    );
    $emailconf = $this->load->library('email', $config);
    $this->email->set_newline("\r\n");
    return $emailconf;
  }
}
