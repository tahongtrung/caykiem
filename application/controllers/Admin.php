<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Admin extends CI_Controller {

public function __construct(){
		parent::__construct();

        // To use site_url and redirect on this controller.
        $this->load->helper('url');
				$this->load->model('shop_model');	

	}


	
	public function index(){

		$this->load->library('facebook'); // Automatically picks appId and secret from config
   		$user = $this->facebook->request('get', '/me?fields=id,name,email');
        
if (!empty ($user['id'])) {
               $this->session->set_userdata("user_profile",$this->facebook->request('get', '/me?fields=id,name,email'));
                $data['user_profile'] = $this->session->userdata("user_profile");
        
      
			$datadb = $data['user_profile'];
			if(isset($datadb['email'])) $emaila = $datadb['email'];
			$getuserif = $this->shop_model->checkUser($datadb['id'],$emaila,$datadb['name']);

        if ($getuserif[0]['trangthai'] == 0 )	{

       
	
	  $lmht = array('loainick'=>'LMHT', 'trangthai' => 'on');

		$data['querylmht'] = $this->db->where($lmht)->order_by("id","desc")->get("baidang")->result_array();
		$data['lienminh'] = $this->db->where($lmht)->count_all_results("baidang");
		
		$cf = array('loainick'=>'CF', 'trangthai'=> 'on');
		
		$data['querycf'] = $this->db->where($cf)->order_by("id","desc")->get("baidang")->result_array();
		$data['dotkich'] = $this->db->where($cf)->count_all_results("baidang");
		
    $data['saled'] = $this->db->count_all_results("lichsumua");
    $data['sale'] = $this->db->order_by("uid","desc")->get("lichsumua")->result_array();
    $data['addmoney'] = $this->db->order_by("uid","desc")->get("lichsunap")->result_array();

		$data['user'] = $this->db->count_all('nguoidung');
		
		
        $this->load->view('administrator',$data);
        }else{redirect(base_url());}

	}}
  
  public function deleteccboa($id){
$this->db->where('id', $id);
$this->db->deleteccboa('baidang');
redirect(base_url() . "admin");
}

}

