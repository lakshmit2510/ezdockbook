<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Multiple_Vendor_model extends CI_Model
{
    function SaveBooking($data)
    {
        $this->db->insert('vendor_booking', $data);
        $booking_id = $this->db->insert_id();
        // if (!empty($booking_id)) {
        //     foreach ($slots as $key => $value) {
        //         $ds[$key]['SlotID'] = $value;
        //     }
        //     $this->db->insert_batch('vendor_booking', $ds);
        //     return $booking_id;
        // } else {
        //     return 0;
        // }
    }
    function getDetailByID($id)
    {
        $this->db->select('*');
        $this->db->where('VendorBookingRefNo', $id);
        $q = $this->db->get('vendor_booking');
        if ($q->num_rows() > 0) {
            return $q->row();
        } else {
            return array();
        }
    }

    function getBookingDetailID($id, $type = '')
    {
        $this->db->select('*, slottypes.Type AS DockType, vendor_booking.CreatedBy AS BookedBy, vendor_booking.CreatedOn AS BookedOn');
        $this->db->from('vendor_booking');
        $this->db->join('company', 'company.CompanyUID = vendor_booking.DeliveryTo', 'LEFT');
        $this->db->join('slottypes', 'slottypes.STypeID = vendor_booking.SlotType', 'LEFT');
        $this->db->join('slots', 'slots.SlotID = vendor_booking.SlotID', 'LEFT');
        $this->db->join('vechicletype', 'vechicletype.TypeID = vendor_booking.VType', 'LEFT');
        $this->db->join('vehicle', 'vehicle.ID = vendor_booking.VNo', 'LEFT');
        if ($type == 'RefNo') {
            $this->db->where('vendor_booking.VendorBookingRefNo', $id);
        } else {
            $this->db->where('vendor_booking.VendorBookingId', $id);
        }
        $q = $this->db->get();
        if ($q->num_rows() > 0) {
            return $q->row();
        } else {
            return array();
        }
    }

    function getMax()
    {
        $this->db->select('count(1) AS Booked');
        $r = $this->db->get('vendor_booking')->row();
        return $r->Booked + 1;
    }
}
