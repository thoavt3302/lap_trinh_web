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

def is_prime(n):
    """Kiểm tra xem một số có phải số nguyên tố không"""
    if n < 2:
        return False
    for i in range(2, int(n ** 0.5) + 1):
        if n % i == 0:
            return False
    return True

def find_primes(start, end):
    """Tìm và in ra các số nguyên tố trong khoảng [start, end]"""
    primes = []
    for num in range(start, end + 1):
        if is_prime(num):
            primes.append(num)
    return primes

def main():
    """Hàm chính để nhập khoảng giá trị và in ra số nguyên tố"""
    try:
        start = int(input("Nhập số bắt đầu: "))
        end = int(input("Nhập số kết thúc: "))

        if start > end:
            print("Lỗi: Số bắt đầu phải nhỏ hơn số kết thúc.")
            return
        
        prime_numbers = find_primes(start, end)
        print(f"Các số nguyên tố trong khoảng {start} - {end}: {prime_numbers}")

    except ValueError:
        print("Vui lòng nhập số nguyên hợp lệ.")

if __name__ == "__main__":
    main()
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
