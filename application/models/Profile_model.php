<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Profile_model extends CI_Model
{



    public function __construct()
    {
        parent::__construct();
    }

    public function getAll()
    {
        $data = $this->db->get('thongtin');
        return $data->result_array();
    }

    public function insert($profile)
    {
        return $this->db->insert('thongtin', $profile);
    }
    public function getProfileById($id)
    {
        $this->db->from('thongtin');
        $this->db->where('id', $id);
        $profile = $this->db->get();
        return $profile->result_array();
    }
    
    public function deleteProfileById($id)
    {
        $this->db->where('id', $id);

        $this->db->delete('thongtin');
        redirect('Profile', 'refresh');
}
}