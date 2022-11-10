<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model{

    public $variable;

    public function __construct()
    {
        parent::__construct();
    }

    //ĐĂNG NHẬP
    public function checkLogin($username, $password){
        //select count (*) from user where username = $username and password =$pasword
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $data= $this->db->get('user');
        $data =  $data->result_array();


        if(empty($data)){
            return false;
        }else{
            return true;
        }



    }

    public function getAll(){
        $data = $this->db->get('user');
        return $data->result_array();

    }

    public function addUser($username,$password,$fullname,$address){
        $object = array('username'=>$username,
                        'password'=>$password,
                        'fullname'=>$fullname,
                        'address'=>$address

                        );
        $this->db->insert('user',$object);

        redirect('test/loginView','refresh');
    }




    //XÓA
    public function deleteUser($id)
    {

        $this->db->where('id', $id);

        $this->db->delete('user');
        redirect('test/loginView','refresh');
    }



    public function getUserbyId($id)
    {
        $this->db->where('id',$id);
       return $this->db->get('user');
    }

    public function updateUser($id, $username, $password, $fullname, $address)
    {
        $this->db->where('id',$id);
        $object = array('username'=>$username,
        'password'=>$password,
        'fullname'=>$fullname,
        'address'=>$address
        );
        $this->db->update('user', $object);

        redirect('test/loginView','refresh');
    }







}