<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Transaction extends CI_Controller {

public function __construct(){
		parent::__construct();

        // To use site_url and redirect on this controller.
        $this->load->helper('url');
						$this->load->model('shop_model');	


	}
	
	
	
	public function index(){

		require('GB_API.php');

		$user = $this->session->userdata("user_profile");
        
       if ($user) {
            try {
                $data['user_profile'] = $this->session->userdata("user_profile");
            } catch (FacebookApiException $e) {
                $user = null;
            }
			$emaila = "";
			if(isset($datadb['email'])) $emaila = $datadb['email'];
			$datadb = $data['user_profile'];
			$getuserif = $this->shop_model->checkUser($datadb['id'],$emaila,$datadb['name']);
			$money = $getuserif[0]['cash'];
            
			if (!empty($_POST)){
				//Lấy thông tin từ Gamebank tại https://sv.gamebank.vn/user/tich-hop-the-cao
				$merchant_id = 34246; // interger
				$api_user = ""; // string
				$api_password = ""; // string
				
				// truyen du lieu the
				$pin = $_POST['cardPin']; // string
				$seri = $_POST['cardSerial']; // string
				$card_type = $_POST['telcoCode']; // interger
				switch ($card_type) {
 case 1:
 $TxtType = 'VTT';

 break;
 case 2:
 $TxtType = 'VMS';

 break;
 case 3:
 $TxtType = 'VNP';

 break;
 case 4:
 $TxtType = 'FPT';

 break;
 case 6:
 $TxtType = 'VNM';

 break;
  case 7:
 $TxtType = 'ZING';

 break;
  case 8:
 $TxtType = 'BIT';

 break;
 } 
				$gb_api = new GB_API();
				//$gb_api->setMerchantId($merchant_id);
				//$gb_api->setApiUser($api_user);
				//$gb_api->setApiPassword($api_password);
				//$gb_api->setPin($pin);
				//$gb_api->setSeri($seri);
				//$gb_api->setCardType(intval($card_type));
				//$gb_api->setNote("username ".$getuserif[0]['name']); // ghi chu giao dich ben ban tu sinh
				//$gb_api->cardCharging();
				$url = 'http://api.banthe247.com/CardCharge.ashx';
				//$url .= '?partnerId=3839';
				//$url .= '&telco='.$card_type;
				//$url .= '&serial='.$info['cardSerial'];
				//$url .= '&cardcode='.$info['cardPin'];
				$transid = rand().'_3839';
				//$url .= '&transId='.$transid;        
				//$url .= '&key='.
			$fields = array(
            'partnerId' => '3839',
			'telco'=>$TxtType,
			'serial' => $seri,
            'cardcode' => $pin,            
            'transId' => $transid,
			'key' => md5('3839-569922009_15224_D247'.'-'.$TxtType.'-'.$seri.'-'.$pin.'-'.$transid)
        );
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_DIGEST);
        curl_setopt($ch, CURLOPT_TIMEOUT, 120);
		$result = curl_exec($ch);
		//var_dump($result);die();
        $result = json_decode($result);
				$code = intval($result->ResCode);
				$info_card = intval($result->Amount);

		 
			
				// nap the thanh cong
				if($code ==1) {
					$info_card=$info_card*1000;
						$money += $info_card;
						$date = date("H:i Y-m-d");
						$data = array('cash' => $money );
						$this->shop_model->updatedb($datadb['id'],$data);
						$datanap = array('id' => $datadb['id'], 'name' => $getuserif[0]['name'] ,'loaithe' => $_POST['telcoCode'],'serial' => $_POST['cardSerial'],'mathe' => $_POST['cardPin'], 'menhgia' => $info_card , 'date' => $date);
						$this->shop_model->insertdba($datanap,'lichsunap');
						$arr = array('err' => 0, 'msg' => 'Nạp thẻ thành công mệnh giá '.$info_card);
				}
				else {
						$arr = array('err' => 1, 'msg' => 'THẻ đã sử dụng hoặc không tồn tại');

				}
			}


        }else {
			$arr = array('err' => 1, 'msg' => 'Bạn chưa đăng nhập');
            // Solves first time login issue. (Issue: #10)
            //$this->facebook->destroySession();
        }
		echo json_encode($arr);
        
		

	}
}

?>