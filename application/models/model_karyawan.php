<?php
Class model_karyawan extends CI_Model
{
  function tampilkaryawan() 
    {
        $this->db->order_by('nik', 'ASC');
        return $this->db->from('karyawan')
          ->get()
          ->result();
    }

    function Getnik($nik = '')
    {
      return $this->db->get_where('karyawan', array('nik' => $nik))->row();
    }

    function hapuskaryawan($nik)
    {
        $this->db->delete('karyawan',array('nik' => $nik));
    }
}