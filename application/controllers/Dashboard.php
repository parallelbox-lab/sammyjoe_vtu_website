<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    
	public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('user_id')){
          redirect('login');
        }  
    }

public function index(){
    
      $accountNo=$this->session->userdata('user_id');    
      $data['balance']=$this->Account_model->getBalance($accountNo);
      $update = $data['balance'];
      $data['account']=$this->Account_model->account($accountNo);
      $data['alltransaction']=$this->Account_model->alltransaction($accountNo);
		  $data['title'] = '';
	    $this->load->view('dashboard/header',$data);
		$this->load->view('dashboard/index',$data);
		$this->load->view('dashboard/footer');

}

public function fundwallet(){
      $accountNo = $this->session->userdata('user_id');
      $data['account']=$this->Account_model->account($accountNo);
		  $data['title'] = '';
	    $this->load->view('dashboard/header',$data);
		$this->load->view('dashboard/fundwallet',$data);
		$this->load->view('dashboard/footer');

}


public function airtime(){

      $accountNo=$this->session->userdata('user_id');
      $data['account']=$this->Account_model->account($accountNo);
      $balance =$this->Account_model->getBalance($accountNo);
       $pay = $this->input->post('sub');
  if(isset($pay)) {
    $user="CK100251896";
    $apikey = "5BF4MTUT8XEB924T0M5EXH48D62ZC16393W958BX6267BV25Z3R8RW0BWGBI64B3";
    $network = $this->input->post('id',TRUE);
    $phone   = $this->input->post('phone_no',TRUE);
    $amount = $this->input->post('amount',TRUE);
    $accountNo=$this->session->userdata('user_id');
    $ref = rand(1000000, 9999999999);
    $timeout = 100;
    
   $call ="sammyjoe.com.ng/dashboard/airtime";
    if($amount > $balance['balance']){
    $this->session->set_flashdata('error', 'Insufficient Balance');
       redirect('dashboard/airtime');
  }else{
  $url = "https://www.nellobytesystems.com/APIAirtimeV1.asp?UserID=$user&APIKey=$apikey&MobileNetwork=$network&Amount=$amount&MobileNumber=$phone&RequestID=$ref&CallBackURL=$call";

  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL,$url);  
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
   $request = curl_exec ($ch);
  if(curl_errno($ch)){
   echo 'error:' . curl_error($ch);
 }
  curl_close ($ch);
  //
$json_output = json_decode($request,true);
$service = "airtime recharge";

if($json_output['status'] == "ORDER_RECEIVED") {
	//the request was successful
	$data['message'] = "Request Received Succesfully";
  $data['code'] =$json_output;

  $message = "Request Received Succesfully";

$this->Account_model->recieveairtime($message,$amount,$phone,$accountNo,$service,$ref);

}else{
    $data['message_error'] ="Technical Error please Contact our admin for this error";
  }	
}

  }
		  $data['title'] = '';
	    $this->load->view('dashboard/header',$data);
		$this->load->view('dashboard/airtime',$data);
		$this->load->view('dashboard/footer');

}
public function elect(){
      $accountNo=$this->session->userdata('user_id');
      $data['account']=$this->Account_model->account($accountNo);
      $balance =$this->Account_model->getBalance($accountNo);
      
$pay = $this->input->post('sub');
if(isset($pay)) {
$user="CK100251896";
$apikey ="5BF4MTUT8XEB924T0M5EXH48D62ZC16393W958BX6267BV25Z3R8RW0BWGBI64B3";
 $electricitycompany = $this->input->post('cboElectricCompany');
  $metertype = $this->input->post('cboMeterType');
   $Meterno = $this->input->post('lblMeterNo');
   $phone = $this->input->post('txtPhoneNo');
   $amount  = $this->input->post('txtAmount');
 $ref = rand(1000000, 9999999999);
$call ="sammyjoe.com.ng/dashboard/data-bundle";
 if($amount > $balance['balance']){
      $data['message_error']  = $this->session->set_flashdata('error', 'insufficient balance');
       redirect('dashboard/data-bundle');
}else{
   
  $url = "https://www.nellobytesystems.com/APIDatabuDndleV1.asp?UserID=$user&APIKey=$apikey&MobileNetwork=$network&DataPlan=$datacode&MobileNumber=$phone&RequestID=$ref&CallBackURL=$call";
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL,$url);
  
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  //
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
   $request = curl_exec ($ch);

  if(curl_errno($ch))
{
echo 'error' . curl_error($ch);
}
  curl_close ($ch);
  //

$json_output = json_decode($request,true);
  $service = "Databundle topup";
if($json_output['status'] == "INSUFFICIENT_APIBALANCE") {
$data['message_error'] ="Technical Error please Contact our admin for this error";
}else if($json_output['status']== "ORDER_RECEIVED") {
	//the request was successful
	$data['message'] = $json_output['status'];
	
$data['code'] = $json_output;

$message = $json_output['message'];
$this->session->set_flashdata('error', 'insufficient balance');
$this->Account_model->recieveairtime($message,$amount,$phone,$accountNo,$service);



}else{
    $data['message_error'] ="Technical Error please Contact our admin for this error";

} 
}
}

      
      
  $data['title'] = '';
	    $this->load->view('dashboard/header',$data);
		$this->load->view('dashboard/elect',$data);
		$this->load->view('dashboard/footer');


}
public function databundle(){
      $accountNo=$this->session->userdata('user_id');
      $data['account']=$this->Account_model->account($accountNo);
      $balance =$this->Account_model->getBalance($accountNo);
       $pay = $this->input->post('sub');
  if(isset($pay)) {
$user="CK100251896";
$apikey ="5BF4MTUT8XEB924T0M5EXH48D62ZC16393W958BX6267BV25Z3R8RW0BWGBI64B3";
 $id = $this->input->post('dataplan');
  $network = $this->input->post('Network');
   $phone = $this->input->post('phone');
   $data['post'] = $this->Account_model->dataplans($id);
$datacode = $data['post']['datacode'];
$dataplan = $data['post']['dataplan'];
$amount = $data['post']['price'];
 $ref = rand(1000000, 9999999999);
$call ="sammyjoe.com.ng/dashboard/data-bundle";
 if($amount > $balance['balance']){
      $data['message_error']  = $this->session->set_flashdata('error', 'insufficient balance');
       redirect('dashboard/data-bundle');
}else{
   
  $url = "https://www.nellobytesystems.com/APIDatabundleV1.asp?UserID=$user&APIKey=$apikey&MobileNetwork=$network&DataPlan=$datacode&MobileNumber=$phone&RequestID=$ref&CallBackURL=$call";

  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL,$url);
  
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  //
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
   $request = curl_exec ($ch);

  if(curl_errno($ch))
{
echo 'error' . curl_error($ch);
}
  curl_close ($ch);
  //

$json_output = json_decode($request,true);
  $service = "$dataplan - $amount Databundle topup";
if($json_output['status']=="INSUFFICIENT_APIBALANCE") {
$data['message_error'] ="Technical Error please Contact our admin for this error";
}else if($json_output['status']=="ORDER_RECEIVED") {
	//the request was successful
	$data['message'] = "DataBundle Topup Successful";
	$message = "DataBundle Topup Successful";
// $data['code'] =$json_output;

$message = $json_output['message'];
$this->session->set_flashdata('success', 'DataBundle Topup Successful');
$this->Account_model->recieveDatabundle($amount,$phone,$accountNo,$service);
    }else{
        $data['message_error'] ="Technical Error please Contact our admin for this error";

    }
  }
}



  $data['title'] = '';
	  $this->load->view('dashboard/header',$data);
		$this->load->view('dashboard/databundle',$data);
		$this->load->view('dashboard/footer');


}
public function cabletv(){ 
      $accountNo=$this->session->userdata('user_id');
      $data['account']=$this->Account_model->account($accountNo);
      $data['balance']=$this->Account_model->getBalance($accountNo);
      
    $this->load->view('dashboard/header',$data);
		$this->load->view('dashboard/cabletv',$data);
		$this->load->view('dashboard/footer');

}
public function waec(){
      $accountNo=$this->session->userdata('user_id');
      $data['account']=$this->Account_model->account($accountNo);
      $data['balance']=$this->Account_model->getBalance($accountNo);
      
   
		$this->load->view('dashboard/waec',$data);


}
public function spectranet(){
      $accountNo=$this->session->userdata('user_id');
      $data['account']=$this->Account_model->account($accountNo);
      $data['balance']=$this->Account_model->getBalance($accountNo);
      
   
		$this->load->view('dashboard/spectranet',$data);


}
public function dstv(){
      $accountNo=$this->session->userdata('user_id');
      $data['account']=$this->Account_model->account($accountNo);
      $balance =$this->Account_model->getBalance($accountNo);
        $pay = $this->input->post('sub');
  if(isset($pay)) {
$user="CK100251896";
$apikey ="5BF4MTUT8XEB924T0M5EXH48D62ZC16393W958BX6267BV25Z3R8RW0BWGBI64B3";
$type = $this->input->post('cboCableTV');
$package = $this->input->post('cbopackage');
$iuc = $this->input->post('iuc');
$amount = $this->input->post('txtAmount');
 $ref = rand(1000000, 9999999999);
$call ="https://sammyjoe.com.ng/dashboard/cabletv/startimes";
 if($amount > $balance['balance']){
      $data['message_error']  = $this->session->set_flashdata('error', 'insufficient balance');
       redirect('dashboard/data-bundle');
}else{
   
  $url = "https://www.nellobytesystems.com/APICableTVV1.asp?UserID=$user&APIKey=$apikey&CableTV=$type&Package=$package&SmartCardNo=$iuc&CallBackURL=$call";

  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL,$url);
  
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  //
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
   $request = curl_exec ($ch);

  if(curl_errno($ch))
{
echo 'error' . curl_error($ch);
}
  curl_close ($ch);
  //

$json_output = json_decode($request,true);
  $service = "Databundle topup";
if($json_output['status']=="INSUFFICIENT_APIBALANCE") {
$data['message_error'] ="Technical Error please Contact our admin for this error";
}
if($json_output['status']=="ORDER_RECEIVED") {
	//the request was successful
	$data['message'] = $json_output['status'];
	
$data['code'] =$json_output;

$message = $json_output['message'];
$this->session->set_flashdata('error', 'insufficient balance');
$this->Account_model->recieveairtime($message,$amount,$accountNo,$service);



} 
}
}


    $this->load->view('dashboard/header',$data);
		$this->load->view('dashboard/dstv',$data);
		$this->load->view('dashboard/footer');

}
public function gotv(){
      $accountNo=$this->session->userdata('user_id');
      $data['account']=$this->Account_model->account($accountNo);
      $balance=$this->Account_model->getBalance($accountNo);
        $pay = $this->input->post('sub');
if(isset($pay)) {
      
$user="CK100251896";
$apikey ="5BF4MTUT8XEB924T0M5EXH48D62ZC16393W958BX6267BV25Z3R8RW0BWGBI64B3";
$type = $this->input->post('cboCableTV');
$package = $this->input->post('cbopackage');
$iuc = $this->input->post('iuc');
$amount = $this->input->post('txtAmount');
$bal = $this->input->post('bal');
 $ref = rand(1000000, 9999999999);
$call ="https://sammyjoe.com.ng/dashboard/cabletv/startimes";
 if($amount > $balance['balance']){
      $data['message_error']  = $this->session->set_flashdata('error', 'insufficient balance');
       redirect('dashboard/data-bundle');
}else{
   
  $url = "https://www.nellobytesystems.com/APICableTVV1.asp?UserID=$user&APIKey=$apikey&CableTV=$type&Package=$package&SmartCardNo=$iuc&CallBackURL=$call";

  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL,$url);
  
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  //
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
   $request = curl_exec ($ch);

  if(curl_errno($ch))
{
echo 'error' . curl_error($ch);
}
  curl_close ($ch);
  //

$json_output = json_decode($request,true);
  $service = "Databundle topup";
if($json_output['status']=="INSUFFICIENT_APIBALANCE") {
$data['message_error'] ="Technical Error please Contact our admin for this error";
}
if($json_output['status']=="ORDER_RECEIVED") {
	//the request was successful
	$data['message'] = $json_output['status'];
	
$data['code'] =$json_output;

$message = $json_output['message'];
$this->session->set_flashdata('error', 'insufficient balance');
$this->Account_model->recieveairtime($message,$amount,$accountNo,$service);
  } 
 }
}

    $this->load->view('dashboard/header',$data);
		$this->load->view('dashboard/gotv',$data);
		$this->load->view('dashboard/footer');

}
public function startimes(){
      $accountNo=$this->session->userdata('user_id');
      $data['account']=$this->Account_model->account($accountNo);
      $balance=$this->Account_model->getBalance($accountNo);
       $pay = $this->input->post('sub');
  if(isset($pay)) {
$user="CK100251896";
$apikey ="5BF4MTUT8XEB924T0M5EXH48D62ZC16393W958BX6267BV25Z3R8RW0BWGBI64B3";
$type = $this->input->post('cboCableTV');
$package = $this->input->post('cbopackage');
$iuc = $this->input->post('iuc');
$amount = $this->input->post('txtAmount');
 $ref = rand(1000000, 9999999999);
$call ="https://sammyjoe.com.ng/dashboard/cabletv/startimes";
 if($amount > $balance['balance']){
      $data['message_error']  = $this->session->set_flashdata('error', 'insufficient balance');
       redirect('dashboard/data-bundle');
}else{
   
  $url = "https://www.nellobytesystems.com/APICableTVV1.asp?UserID=$user&APIKey=$apikey&CableTV=$type&Package=$package&SmartCardNo=$iuc&CallBackURL=$call";

  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL,$url);
  
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  //
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
   $request = curl_exec ($ch);

  if(curl_errno($ch))
{
echo 'error' . curl_error($ch);
}
  curl_close ($ch);
  //

$json_output = json_decode($request,true);
  $service = "Databundle topup";
if($json_output['status']=="INSUFFICIENT_APIBALANCE") {
$data['message_error'] ="Technical Error please Contact our admin for this error";
}
if($json_output['status']=="ORDER_RECEIVED") {
	//the request was successful
	$data['message'] = $json_output['status'];
	
$data['code'] =$json_output;

$message = $json_output['message'];
$this->session->set_flashdata('error', 'insufficient balance');
$this->Account_model->recieveairtime($message,$amount,$accountNo,$service);

} 
}
}

    $this->load->view('dashboard/header',$data);
		$this->load->view('dashboard/startimes',$data);
		$this->load->view('dashboard/footer');

}
public function verifycabletv(){
        $id = $this->input->post('id',TRUE);
    $user="CK100251896";
$apikey ="5BF4MTUT8XEB924T0M5EXH48D62ZC16393W958BX6267BV25Z3R8RW0BWGBI64B3";

 $url = "https://www.nellobytesystems.com/APIVerifyCableTVV1.0.asp?UserID=$user&APIKey=$apikey&cabletv=01&smartcardno=$id";

 $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL,$url);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  //
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
 
  $request = curl_exec($ch);
  curl_close ($ch);
$status = json_decode($request, true);

if($status['customer_name']) {
  echo json_encode($status['customer_name']);
}else{
     $output['failed'] = "technical error";
      echo json_encode($output['failed']);


 }

                
    
}
private function verifygotv(){
      $accountNo=$this->session->userdata('user_id');
      $data['account']=$this->Account_model->account($accountNo);
      $data['balance']=$this->Account_model->getBalance($accountNo);
$id = $this->input->post('id',TRUE);
 $user="CK100251896";
$apikey ="5BF4MTUT8XEB924T0M5EXH48D62ZC16393W958BX6267BV25Z3R8RW0BWGBI64B3";
     $gotv = 02;
 $url = "https://www.nellobytesystems.com/APIVerifyCableTVV1.0.asp?UserID=$user&APIKey=$apikey&cabletv=$gotv&smartcardno=$id";
 
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL,$url);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
 
  $request = curl_exec($ch);
  
curl_close ($ch);
$status = json_decode($request, true);
if($status['status']=="INSUFFICIENT_APIBALANCE") {
 $output = "technical Error";
 echo json_encode($output);
}
                

    
    

}
     
     private function verifystartimes(){
      $accountNo=$this->session->userdata('user_id');
      $data['account']=$this->Account_model->account($accountNo);
      $data['balance']=$this->Account_model->getBalance($accountNo);
        $id = $this->input->post('id',TRUE);
        $user="CK100251896";
        $startimes = "startimes";
$apikey ="5BF4MTUT8XEB924T0M5EXH48D62ZC16393W958BX6267BV25Z3R8RW0BWGBI64B3";

$url = "https://www.nellobytesystems.com/APIVerifyCableTVV1.0.asp?UserID=$user&APIKey=$apikey&cabletv=$startimes&smartcardno=$id";

 $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL,$url);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  //
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
 
  $request = curl_exec($ch);
  
  curl_close ($ch);
$status = json_decode($request, true);
if($status['status']=="INSUFFICIENT_APIBALANCE") {
 $output = "technical error";
 echo json_encode($output);
}else{
    
  echo json_encode($status);

}

                
    
}

public function editprofile(){
  $accountNo=$this->session->userdata('user_id');
  $data['account']=$this->Account_model->account($accountNo);
  $data['balance']=$this->Account_model->getBalance($accountNo);
  $data['error'] = NULL;

  if($this->input->post())
  {
    $config = array(
        array(
            'field' => 'fullname',
            'label' => 'fullname',
            'rules' => 'trim|required|min_length[5]'//is unique username in the user's table of DB
        ),
        array(
            'field' => 'number',
            'label' => 'Phone number',
            'rules' => 'trim|required|min_length[11]'//is unique username in the user's table of DB
        ),


        array(
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'trim|required|valid_email',//is unique email in the user's table of DB
        ),
    );
    $this->load->library('form_validation');
    $this->form_validation->set_rules($config);
    if($this->form_validation->run() == FALSE)
    {
        $data['error'] = validation_errors();
    }
    else
    {
        $data = array(
            'fullname' => $this->input->post('fullname'),
            'phone' => $this->input->post('number'),
            'email' => $this->input->post('email'),

        );
        $user_id = $this->Account_model->edit($data,$accountNo);



    $data['data']  = $this->session->set_flashdata('success', 'recorded successfully');
    redirect('dashboard/edit-profile');
}

}
  $this->load->view('dashboard/header',$data);
  $this->load->view('dashboard/edit',$data);
  $this->load->view('dashboard/footer');
      }

      public function change_pass()
  {
    $accountNo=$this->session->userdata('user_id');
    $data['account']=$this->Account_model->account($accountNo);
    $data['balance']=$this->Account_model->getBalance($accountNo);

    $this->load->library('form_validation');
    if(!$this->input->post('change_pass'))
    {
    $this->form_validation->set_rules('oldpass', 'old password', 'callback_password_check');
    $this->form_validation->set_rules('newpass', 'new password', 'required');
    $this->form_validation->set_rules('passconf', 'confirm password', 'required|matches[newpass]');

    $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

    if($this->form_validation->run() == false) {
        $this->load->view('dashboard/header', $data);
        $this->load->view('dashboard/change_pass', $data);
        $this->load->view('dashboard/footer', $data);
    }
    else {


        $newpass = $this->input->post('newpass');

        $this->Account_model->update_user($accountNo, array('password' => sha1($newpass)));
        redirect('dashboard');
    }
    
    
      }
    }
      public function password_check($oldpass)
      {
      if(!$this->session->userdata('user_id')){
        redirect('login');
      }
        $accountNo=$this->session->userdata('user_id');

          $user = $this->Account_model->get_user($accountNo);

          if($user->password !== sha1($oldpass)) {
              $this->form_validation->set_message('password_check', 'The {field} does not match');
              return false;
          }

          return true;
      }
      
      
public function transaction(){
   $accountNo=$this->session->userdata('user_id');
  $data['balance']=$this->Account_model->getBalance($accountNo);
        $data['account']=$this->Account_model->account($accountNo);

 $config = array();
        $config["base_url"] = base_url() . "dashboard/transaction";
        $config["total_rows"] = $this->Account_model->Alltransaction($accountNo);
        $config["per_page"] = 10;
        $config["uri_segment"] = 3;

        $this->pagination->initialize($config);

		
		$page = ($this->uri->segment(3))? $this->uri->segment(3) : 0;
		
        $data["links"] = $this->pagination->create_links();

        $data['transaction'] = $this->Account_model->record_get($accountNo, $config["per_page"],$page);

   
  
     $this->load->view('dashboard/header',$data);
  $this->load->view('dashboard/Transaction',$data);
  $this->load->view('dashboard/footer');
}


function fetch_price(){
                $id = $this->input->post('dataplan',TRUE);
                $data = $this->Account_model->fetch_price($id)->result();
                echo json_encode($data);
            }
function fetch_bundle(){
                $id = $this->input->post('id',TRUE);
                $data = $this->Account_model->mtndata($id)->result();
                echo json_encode($data);
            }

}