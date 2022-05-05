<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paystack extends CI_Controller {
public function __construct(){
parent::__construct();
// check if user is loggedIn
if(!$this->session->userdata('user_id')){
  redirect('account/login');
}
define("api_key","sk_live_349488c3adcb06118f5d65e3cdf5d787fbeb65fd");
}
public function pay(){
   
$curl = curl_init();

$email = $this->input->post('email',TRUE);
if($email == null){
    redirect('login');
}else{
$amount = $this->input->post('amount',TRUE);//the amount in kobo. This value is actually NGN 300
$ref = rand(1000000, 9999999999);
// url to go to after payment
$callback_url = 'https://sammyjoe.com.ng/Paystack/verify_payment/'.$ref;  

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.paystack.co/transaction/initialize",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => json_encode([
    'amount'=>$amount*100,
    'email'=>$email,
    'reference'=>$ref,
    'callback_url' => $callback_url
  ]),
  CURLOPT_HTTPHEADER => [
    "authorization: Bearer sk_live_349488c3adcb06118f5d65e3cdf5d787fbeb65fd", //replace this with your own test key
    "content-type: application/json",
    "cache-control: no-cache"
  ],
));
}
$response = curl_exec($curl);
$err = curl_error($curl);

if($err){
  // there was an error contacting the Paystack API
  redirect("errorpayment");
  die('Curl returned error: ' . $err);

}

$tranx = json_decode($response, true);

if(!$tranx['status']){
  // there was an error from the API
  print_r('API returned error: ' . $tranx['message']);
}

// comment out this line if you want to redirect the user to the payment page
// print_r($tranx);
// redirect to page so User can pay
// uncomment this line to allow the user redirect to the payment page
header('Location: ' . $tranx['data']['authorization_url']);


}
  private function getPaymentInfo($ref) {
    
     $token = "sk_live_349488c3adcb06118f5d65e3cdf5d787fbeb65fd";
        $result = array();
        $url = 'https://api.paystack.co/transaction/verify/'.$ref;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        //
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt(
            $ch, CURLOPT_HTTPHEADER, [
                'Authorization: Bearer '.$token]
        );
        $request = curl_exec($ch);
        curl_close($ch);
        //
        $result = json_decode($request, true);
        //
        return $result['data'];

    }
   
    public function verify_payment($ref) {
    
        $result = array();
        $url = 'https://api.paystack.co/transaction/verify/'.$ref;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        //
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt(
            $ch, CURLOPT_HTTPHEADER, [
            'Authorization: Bearer '.api_key]
        );
        $request = curl_exec($ch);
        curl_close($ch);
        //
        if ($request) {
            $result = json_decode($request, true);
            // print_r($result);
            if($result){
                if($result['data']){
                    //something came in
                    if($result['data']['status'] == 'success'){

               
                        header("Location: ".base_url().'dashboard/success/'.$ref);

                    }else{
                      
                        header("Location: ".base_url().'dashboard/fail/'.$ref);

                    }
                }
                else{

                    //echo $result['message'];
                    header("Location: ".base_url().'dashboard/fail/'.$ref);
                }

            }else{
              
                header("Location: ".base_url().'dashboard/fail/'.$ref);
            }
        }else{
           
            header("Location: ".base_url().'dashboard/fail/'.$ref);
        }

    }
public function success($ref) {
    
      $accountNo=$this->session->userdata('user_id');
      $data['account'] = $this->Account_model->account($accountNo);
        $data = array();
        $info = $this->getPaymentInfo($ref);
        $phone = $data['account']['phone'];
        // $data['amount'] = $info['amount']/100;
        $amount = $info['amount']/100;
        $status = "wallet funding successful";
        $service = "Wallet Funding";


      //
        $this->Account_model->submit($accountNo,$amount,$service,$status,$phone);


        redirect('dashboard');

    
}

    public function fail() {

    } 

    public function error(){
      $this->load->view("dashboard/error");
    }


}