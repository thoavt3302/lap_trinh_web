<?php
if(! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
    }
	public function index()
	{
		echo 'Hello';


	}


//ĐĂNG NHẬP
    public function xuLyLogin(){


        $username = $this->input->POST('username');
        $password = $this->input->POST('password');


        $thongBao = "";

          //gọi hàm checkLogin, đầu tiên phải gọi User_model
          $this->load->model('User_model');
        $isCheck = $this->User_model->checkLogin($username,$password);


         if($isCheck){
             $thongBao = "Chúc mừng bạn đăng nhập thành công";

         }else{
             $thongBao = "Username hoặc password k đúng";
         }


            // var_dump($data);
            // die();
        $data['thongBao'] = $thongBao;
       $this->load->view('login_view',$data,FALSE);


    }


    //HIỂN THỊ DANH SÁCH NGƯỜI DÙNG
    public function loginView()
    {
        //$this->load->view('login_view');
        $this->load->model('User_model');
		$data = $this->User_model->getAll();
		$data['alldata'] = $data;
		$this->load->view('userlist_view', $data);

    }

    //THÊM NGƯỜI DÙNG
    public function addUser()
    {
        $this->load->view('addUser');


        $username = $this->input->post('username');
        $password= $this->input->post('password');
        $fullname = $this->input->post('fullname');
        $address = $this->input->post('address');

        if($username){
            $this->load->model('User_model');
            $this->User_model->addUser($username,$password,$fullname,$address);
        }
    }


    //XÓA
    public function deleteUser($id){
        $this->load->model('User_model');
        $this->User_model->deleteUser($id);
    }



     // SỬA
     public function editUser($id)
     {
         // Lấy dữ liệu theo id

         $this->load->model('User_model');
         $result['info'] = $this->User_model->getUserbyId($id)->result_array();

        //  echo '<pre>';
        //  print_r($result);
        $this->load->view('editUser',$result);
     }

     //5. SỬA
     public function updateUser()
     {

         $id = $this->input->post('id');
         //lấy về
        $username = $this->input->post('username');
        $password= $this->input->post('password');
        $fullname = $this->input->post('fullname');
        $address = $this->input->post('address');

        if($username){
          //Gửi dữ liệu sang model
        $this->load->model('User_model');
        $this->User_model->updateUser($id, $username,$password,$fullname,$address);
         }

     }






    //
}
