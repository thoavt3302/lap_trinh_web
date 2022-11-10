<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller{

    public $variable;

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Profile_model');
    }

    public function index(){
        $data = $this->Profile_model->getAll();
        $data['allprofile']=$data;
        $this->load->view('profilelist_view',$data);
    }


    public function viewAddProfile(){
        $this->load->view('addprofile_view');
    }

    public function addProfile(){

        $profile = $this->input->post();
		//upload file
		 $target_dir = "image/avatar";
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
		  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
		  if($check !== false) {
		    echo "File is an image - " . $check["mime"] . ".";
		    $uploadOk = 1;
		  } else {
		    echo "File is not an image.";
		    $uploadOk = 0;
		  }
		}

		// Check if file already exists
		if (file_exists($target_file)) {
		  echo "Sorry, file already exists.";
		  $uploadOk = 0;
		}

		// Check file size
		if ($_FILES["fileToUpload"]["size"] > 5000000) {
		  echo "Sorry, your file is too large.";
		  $uploadOk = 0;
		}

		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
		  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		  $uploadOk = 0;
		}

		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		  echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
		  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
		  } else {
		    echo "Sorry, there was an error uploading your file.";
		  }
		}

		$profile['avatar'] = 'image/avatar/'.htmlspecialchars( basename( $_FILES["fileToUpload"]["name"]));


		//$tenanh = htmlspecialchars( basename( $_FILES["fileToUpload"]["name"]));

		if ($this->Profile_model->insert($profile)) {
			echo 'Thêm mới profile thành công!';
		} else {
			echo 'Có lỗi, thêm  mới thất bại';
		}
		$data = $this->Profile_model->getAll();
		$data['allprofile'] = $data;

		$this->load->view('profilelist_view', $data);
    }
	public function editProfile($id){

		$profileArray = $this->Profile_model->getProfileById($id);
		$profile['profileEdit'] = $profileArray[0];
		
		$this->load->view('editprofile',$profile);

	}
    public function deleteProfileById($id){
        if ($this->Profile_model->deleteProfileById($id)) {
			echo 'Xóa profile thành công!';
		} else {
			echo 'Có lỗi, xóa thất bại';
		}
		$data = $this->Profile_model->getAll();
		$data['allprofile'] = $data;
		$this->load->view('profilelist_view', $data);
    }
}