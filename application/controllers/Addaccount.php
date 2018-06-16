<?php
ini_set('display_errors', 0);
defined('BASEPATH') OR exit('No direct script access allowed');
ini_set('display_errors', 0);
class Addaccount extends CI_Controller {

public function __construct(){
		parent::__construct();

        // To use site_url and redirect on this controller.
        $this->load->helper('url');
		

	}
	
	function insertdb($data){
// Inserting in Table(students) of Database(college)
    $this->db->insert('nguoidung', $data);
    }
	function insertdba($data,$db){
// Inserting in Table(students) of Database(college)
    $this->db->insert($db, $data);
    }
	function updatedb($id,$data){
	$this->db->where('id', $id);
	$this->db->update('nguoidung', $data);
	}
	function updatedbacc($id,$data){
	$this->db->where('id', $id);
	$this->db->update('baidang', $data);
	}
	function existsdb($id)
	{
	$this->db->where('id',$id);
    $query = $this->db->get('nguoidung');
	return $query->num_rows();
	}
	 function checkUser($id,$email){
	
       if ($this->existsdb($id) > 0){
	   $data = array('id' => $id,'email' => $email );
	   $this->updatedb($id,$data);
			}else{
	   $data = array('id' => $id,'email' => $email,'cash' => 0,'trangthai' => 1);
	   $this->insertdb($data);
	    }
		$this->db->where('id',$id);
		$qa = $this->db->get("nguoidung");
		return $qa->result_array();
		}
	
	public function index(){

   

	$user = $this->session->userdata("user_profile");
        
       if ($user) {
            try {
                $data['user_profile'] = $this->session->userdata("user_profile");
            } catch (FacebookApiException $e) {
                $user = null;
            }
			$emaila = "";
			$datadb = $data['user_profile'];
			if(isset($datadb['email'])) $emaila = $datadb['email'];
			$getuserif = $this->checkUser($datadb['id'],$emaila,$datadb['name']);
			if($getuserif[0]['trangthai']==0)
			{
			if(isset($_GET['act']) && $_GET['act'] == 'upacc')
			{
			$this->load->view('addaccount_cf'); 		
			}
			elseif(isset($_GET['act']) && $_GET['act'] == 'saveacc')
			{
			if(isset($_POST['promo'],$_POST['price'],$_POST['idpassword'],$_POST['description'],$_POST['imgs']) && stristr($_POST['idpassword'], ':')){
			$price = $_POST['price'];
			$price -= ($_POST['promo'] / 100) * $_POST['price']  ;
			$idpassword = explode(":",$_POST['idpassword']);
			$email = explode(":",$_POST['email']);
			$cauhoi = explode(":",$_POST['cauhoibaomat']);
			$description = $_POST['description'];
			$imgs = $_POST['imgs'];
			$date = date("H:i Y-m-d"); 
			$active = (isset($_POST['active'])) ? "on" : "off";
			$data = array(
                        'loainick' => $_POST['loainick']
			,'taikhoan' => $idpassword[0] 
			, 'matkhau' => $idpassword[1] 
			, 'noidung' => $description 
			,'idemail' => $email[0]
			,'mkemail' => $email[1]
			,'cauhoi' => $cauhoi[0]
			,'cautraloi' => $cauhoi[1]
			,'cmnd' => $_POST['cmnd']
			, 'date' => $date
			, 'hinhanh' => $imgs
			, 'gia' =>	$price
			, 'giacu' => $_POST['price']
			, 'promo' => $_POST['promo']
			, 'trangthai' => $active);
			
			$this->insertdba($data,'baidang');
			
			$arr = array('err' => 0, 'msg' => 'Đăng acc thành công');
			}
			else{
			$arr = array('err' => 1, 'msg' => 'Đăng acc thất bại');
			}
			echo json_encode($arr);
			}
			
			}
			
			
			}
			else {			redirect(base_url());
}

	}
}

?>