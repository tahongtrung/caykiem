<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Shopacc extends CI_Controller {

public function __construct(){
		parent::__construct();

        // To use site_url and redirect on this controller.
        $this->load->helper('url');
				$this->load->model('shop_model');	
				
	}
	public function index($skin=null){
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
	  $lmht = array('loainick'=>'LMHT', 'trangthai' => 'on');
        if($skin!=null):
        $data['querylmht'] = $this->db->where($lmht)->like('skins',$skin)->order_by("id","desc")->get("baidang");
        else:
        $data['querylmht'] = $this->db->where($lmht)->order_by("id","desc")->get("baidang");
        endif;
        $data['lienminh'] = count($data['querylmht']->result());;
		
		$cf = array('loainick'=>'CF', 'trangthai'=> 'on');
		
		$data['querycf'] = $this->db->where($cf)->order_by("id","desc")->get("baidang");
		$data['dotkich'] = $this->db->where($cf)->count_all_results("baidang");
		
		$data['user'] = $this->db->count_all('nguoidung');

		//hieudzai
		$data['hieudzai'] = $this->shop_model->getHisall();
		$data['getgiaodich'] = $this->db->/*where('date', $date)->*/order_by("id","desc")->get("lichsumua");

		$data['memonline'] =  $this->shop_model->getAmungStats("fa3k1r2sr3fg");
		$data['useronline'] =  $this->shop_model->getAmungStats("dmrfqe4prez6");
		
        $this->load->view('shopacc_views',$data);

	}

    public function logout(){

        $this->load->library('facebook');

        // Logs off session from website
	$this->facebook->destroy_session();
        // Make sure you destory website session as well.

        redirect(base_url());
    }
}
