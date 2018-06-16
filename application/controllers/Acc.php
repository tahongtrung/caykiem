<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Acc extends CI_Controller {

public function __construct(){
		parent::__construct();

        // To use site_url and redirect on this controller.
        $this->load->helper('url');
						$this->load->model('shop_model');	


	}

	
	public function index(){

		$this->load->library('facebook'); // Automatically picks appId and secret from config
		$user = $this->facebook->request('get', '/me?fields=id,name,email');



            $data['login_url'] = $this->facebook->login_url(array(
                'redirect_uri' => site_url(), 
                'scope' => array("email") // permissions here
            ));

        if (!empty ($user['id'])) {
               $this->session->set_userdata("user_profile",$this->facebook->request('get', '/me?fields=id,name,email'));
                $data['user_profile'] = $this->session->userdata("user_profile");
			$emaila = "";
			$datadb = $data['user_profile'];
			if(isset($datadb['email'])) $emaila = $datadb['email'];
			$getuserif = $this->shop_model->checkUser($datadb['id'],$emaila,$datadb['name']);
			$data['money'] = $getuserif[0]['cash'];
			if ($getuserif[0]['trangthai'] == 0 )	$data['admin'] = true;
            $data['logout_url'] = site_url('shopacc/logout'); // Logs off application
        }


			$data['user'] = $this->db->count_all('nguoidung');
			  $lmht = array('loainick'=>'LMHT', 'trangthai' => 'on');
		$cf = array('loainick'=>'CF', 'trangthai'=> 'on');
		$data['dotkich'] = $this->db->where($cf)->count_all_results("baidang");
		$data['lienminh'] = $this->db->where($lmht)->count_all_results("baidang");


		if(isset($_GET['id']) )
		{
		$this->db->where('id',$_GET['id']);
		$query = $this->db->get('baidang');
		$data['query'] = $query->result_array();
		$data['memonline'] =  $this->shop_model->getAmungStats("fa3k1r2sr3fg");
		$data['useronline'] =  $this->shop_model->getAmungStats("dmrfqe4prez6");
		$q = $data['query'];
		
		if ($query->num_rows() > 0 && $q[0]['trangthai'] == "on")
		{
		$data['not'] = false;		
		}
		else
		{
		$data['not'] = true;
		}
		if(isset($_GET["act"]) && $_GET['act']=="info")
		{
			$this->load->view('accinfo_views',$data);
		}
		else
		{
		
		$this->load->view('acc_views',$data);
		}
	
		
		}
	
	}
	
	
}
