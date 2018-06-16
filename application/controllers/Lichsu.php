<x></x><?php

defined('BASEPATH') OR exit('No direct script access allowed');
ini_set('display_errors', 0);

class Lichsu extends CI_Controller {

public function __construct(){
		parent::__construct();

        // To use site_url and redirect on this controller.
        $this->load->helper('url');
		

	}
	
		function insertdb($data){
// Inserting in Table(students) of Database(college)
    $this->db->insert('nguoidung', $data);
    }
	
	function updatedb($id,$data){
	$this->db->where('id', $id);
	$this->db->update('nguoidung', $data);
	}
	
	function existsdb($id)
	{
	$this->db->where('id',$id);
    $query = $this->db->get('nguoidung');
	return $query->num_rows();
	}
	  function checkUser($id,$email,$name){
	
       if ($this->existsdb($id) > 0){
	   $data = array('id' => $id, 'name' => $name,'email' => $email );
	   $this->updatedb($id,$data);
			}else{
	   $data = array('id' => $id, 'name' => $name,'email' => $email,'cash' => 0,'trangthai' => 1);
	   $this->insertdb($data);
		}
		$this->db->where('id',$id);
		$qa = $this->db->get("nguoidung");
		return $qa->result_array();
		}
	 function getHis($id){
		$this->db->where('id',$id);
		$this->db->order_by("uid","desc");
		$qa = $this->db->get("lichsumua");
		return $qa->result_array();
		}
		 function getHisall(){
		$this->db->order_by("uid","desc");
		$qa = $this->db->get("lichsumua");
		return $qa->result_array();
		}
		 function getHisnap($id){
		$this->db->where('id',$id);
		$this->db->order_by("uid","desc");
		$qa = $this->db->get("lichsunap");
		return $qa->result_array();
		}
		 function getHisnapall(){
		$this->db->order_by("uid","desc");
		$qa = $this->db->get("lichsunap");
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
        }else {
			redirect(base_url());
            // Solves first time login issue. (Issue: #10)
            //$this->facebook->destroySession();
        }

        if ($user) {
				$emaila = "";
			if(isset($datadb['email'])) $emaila = $datadb['email'];
			$datadb = $data['user_profile'];
			$getuserif = $this->checkUser($datadb['id'],$emaila,$datadb['name']);
			$data['money'] = $getuserif[0]['cash'];
            $data['logout_url'] = site_url('shopacc/logout'); // Logs off application
            // OR 
            // Logs off FB!
            // $data['logout_url'] = $this->facebook->getLogoutUrl();

        } else {
            $data['login_url'] = $this->facebook->getLoginUrl(array(
                'redirect_uri' => site_url(), 
                'scope' => array("email") // permissions here
            ));
        }

		$data['query'] = $this->getHis($datadb['id']);
		$data['querynap'] = $this->getHisnap($datadb['id']);
		if ($getuserif[0]['trangthai'] == 0 ){
		$data['queryall'] = $this->getHisall();
		$data['querynapall'] = $this->getHisnapall();
		$data['admin'] = true;
		}
		$this->load->view('lichsugiaodich',$data);
	}
	
	 
}

	
	
	