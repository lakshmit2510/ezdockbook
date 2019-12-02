<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Common_model extends CI_Model 
{

    
  function getTableData($table,$active='')
  {
    if(!empty($active))
    {
      $this->db->where('Active',1);
    }
    $q = $this->db->get($table);  
    if($q->num_rows()>0)
    {
      return $q->result();
    } else {
      return 0;
    }
  }


  function getVehcileNo()
  {
    $this->db->select('*');
    if(in_array($this->session->userdata('Role'), array(2,4))) 
    {
     $this->db->where('vehicle.CreatedBy', $this->session->userdata('UserUID')); 
    }
    return $this->db->get('vehicle')->result();
  }



  function getDriverInfo($id)
  {
    $this->db->select('*');
    $this->db->where('ID', $id);
    return $this->db->get('vehicle')->row();
  }

  function getSupplierGroupInfo()
  {
    $this->db->select('*');
    $this->db->join('slottypes','slottypes.STypeID = suppliergroup.DockTypeID','LEFT');
    return $this->db->get('suppliergroup')->result();
  }

  function getSupplierById($id){
    $this->db->select('*');
    $this->db->where('GroupID', $id);
    return $this->db->get('suppliergroup')->result();
  }

  function getSupplierGroupdetails()
  {
    $this->db->select('*');
    return $this->db->get('suppliergroup')->result();
  }

  function updateSupplierGroup($data, $id){
    $this->db->where('GroupID', $id);
    $this->db->update('suppliergroup', $data);
  }
  function checkGroupName($groupName){
    $this->db->select('*');
    $this->db->where('SupplierGroup', $groupName);
    return $this->db->get('suppliergroup')->result();
  }

  function insertSupplierGroup($data){
    $this->db->insert('suppliergroup', $data);
    return $this->db->insert_id();
  }

  function deleteSupplierGroupById($GroupID)
  {
    $this->db->where('GroupID',$GroupID);
    if($this->db->delete('suppliergroup'))
    {
        return 1;
    } else {
        return 0;
    }
  }

  function getVehicleInfo($vno)
  {

    $this->db->select('*');
    $this->db->where('ID', $vno);
    $this->db->join('vechicletype','vechicletype.TypeID = vehicle.VehicleTypeID','LEFT');
    return $this->db->get('vehicle')->row();
  }

  function getMax($table)
  {
    $this->db->select('count(1) AS Total');
    $r = $this->db->get($table)->row();
    return $r->Total + 1;
  }

  function getStatusById($id)
  {
    $this->db->select('*');
    $this->db->where('StatusID', $id);
    $q = $this->db->get('status')->row();
    return $q->StatusName;
  }

}
