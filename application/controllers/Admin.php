<?php
/**
 * Created by PhpStorm.
 * User: asamad
 * Date: 6/29/17
 * Time: 2:02 PM
 */

class Admin extends CI_Controller
{
    function home()
    {
    if(!$this->session->userdata('user_id')){
        redirect('login');
      }
      
    $accountNo=$this->session->userdata('user_id');
    $data['account']=$this->Account_model->account($accountNo);
       $data['balance']=$this->Account_model->allBalance();
            if (isset($_SESSION['user_id'])) {
            if ($_SESSION['status'] == 'admin') {
        try{       
                $user ="CK100251896";
                $apikey ="5BF4MTUT8XEB924T0M5EXH48D62ZC16393W958BX6267BV25Z3R8RW0BWGBI64B3";
    $url = "https://www.nellobytesystems.com/APIWalletBalanceV1.asp?UserID=$user&APIKey=$apikey";
 
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL,$url);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  //
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
 
  $request = curl_exec($ch);
  curl_close ($ch);
  
  echo $request;
  $json_output = json_decode($request,true);
    if(isset($json_output['balance'])){
   $data['request'] = $json_output['balance'];
    }
  }catch(Exception  $e){
    echo 'Message: ' .$e->getMessage();
  }
    
    $this->load->view('admin/header',$data);

    $this->load->view('admin/index',$data);
    
    }else {
                
       redirect('login');   
       
        }
        }
        
    }
    function users(){
    if(!$this->session->userdata('user_id')){
        redirect('login');
      }
      
    $accountNo=$this->session->userdata('user_id');
    $data['account']=$this->Account_model->account($accountNo);
       
        if (isset($_SESSION['user_id'])) {
        if ($_SESSION['status'] == 'admin') {
                
          $data['users']=$this->Account_model->users();
          $data['allusers']=$this->Account_model->alluser();
          $this->load->view('admin/header',$data);
          $this->load->view('admin/users',$data);
                
    }
    }else {
       redirect('login');     
        }
    
    }
    
     public function all_bundle()
   {
        if(!$this->session->userdata('user_id')){
        redirect('login');
      }
      
    $accountNo=$this->session->userdata('user_id');
    $data['account']=$this->Account_model->account($accountNo);
       
            if (isset($_SESSION['user_id'])) {
            if ($_SESSION['status'] == 'admin') {
                
       $data['data'] = $this->Account_model->get_itemCRUD();


  $this->load->view('admin/header');
  $this->load->view('admin/all_bundle',$data);
      
            }
    }else {
       redirect('login');     
        }
   }
   
   public function user_balance(){
        if(!$this->session->userdata('user_id')){
        redirect('login');
      }
        $this->load->model('get_balance');
        if ($_SESSION['status'] == 'admin') {
        
        $data['get_balance'] =  $this->get_balance->get_balances();
        
        $this->load->view('admin/header');
        $this->load->view('admin/users-total-wallet-balance',$data);
        }else {
       redirect('login');     
        }
      
   }
    
    
      public function add_bundle()
   {
         if(!$this->session->userdata('user_id')){
        redirect('login');
      }
      
    $accountNo=$this->session->userdata('user_id');
    $data['account']=$this->Account_model->account($accountNo);
       
                   if (isset($_SESSION['user_id'])) {
            if ($_SESSION['status'] == 'admin') {
                

           $data['error'] = NULL;
 
          

 $pay = $this->input->post();
  if(isset($pay)) {                  

                    $config = array(
                        
                        
                        array(
                            'field' => 'dataplan',
                            'label' => 'Dataplan',
                            'rules' => 'required'//is unique username in the user's table of DB
                        ),
                        array(
                            'field' => 'price',
                            'label' => 'Price',
                            'rules' => 'required'//is unique username in the user's table of DB
                        ),
                         array(
                            'field' => 'code',
                            'label' => 'datacode',
                            'rules' => 'required'//is unique username in the user's table of DB
                        ),
 array(
                            'field' => 'bid',
                            'label' => 'Select network',
                            'rules' => 'required'//is unique username in the user's table of DB
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
                            'price' => $this->input->post('price'),
                            
                            'dataplan' =>  $this->input->post('dataplan'),
                            'datacode' => $this->input->post('code'),
                            'network' =>$this->input->post('bid'),

                        );
                        
                        
                        $this->Account_model->add_bundle($data);



                     $this->session->set_flashdata('success', 'Bundle Added successfully');
                                             redirect('cw3admin/add-bundle');

                    }

                }
  $this->load->view('admin/header');
  $this->load->view('admin/data',$data);
      
            }
    }else {
       redirect('login');     
        }
   }
   
    public function edit_bundle(){
       if(!$this->session->userdata('user_id')){
        redirect('login');
      }
            $accountNo=$this->session->userdata('user_id');
    $data['account']=$this->Account_model->account($accountNo);
       
                   if (isset($_SESSION['user_id'])) {
            if ($_SESSION['status'] == 'admin') {

                                  $id = $_GET['id'];
     $query = $this->Account_model->edit_bundle($id);
       
 $data['error'] = NULL;
 
            $data['datas'] = $query->result();
                      $pid = $this->input->post('pid');


                  if($this->input->post())
                  {

                    $config = array(
                        
                        
                        array(
                            'field' => 'dataplan',
                            'label' => 'Dataplan',
                            'rules' => 'required'//is unique username in the user's table of DB
                        ),
                        array(
                            'field' => 'price',
                            'label' => 'Price',
                            'rules' => 'required'//is unique username in the user's table of DB
                        ),
array(
                            'field' => 'code',
                            'label' => 'Datacode',
                            'rules' => 'required'//is unique username in the user's table of DB
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
                            'dataplan' => $this->input->post('dataplan'),
                            'price' =>  $this->input->post('price'),
                            'datacode' => $this->input->post('code'),

                        );
                        
                        
                        $this->Account_model->save_ebundle($id,$data);



                         $this->session->set_flashdata('success', 'Databundle Edited successfully');
                        redirect("cw3admin/edit-bundle?id= $id");
                    }

                }
                       
     $this->load->view('admin/header');
      $this->load->view('admin/edit_bundle',$data);
      
      
      }
    }else {
       redirect('login');     
        }
    
        
    } 
    
    
    public function deletedata()
{
     if(!$this->session->userdata('user_id')){
        redirect('login');
      }
      
    $accountNo=$this->session->userdata('user_id');
    $data['account']=$this->Account_model->account($accountNo);
       
                   if (isset($_SESSION['user_id'])) {
            if ($_SESSION['status'] == 'admin') {
                
                 
  $id=$this->input->get('id');
  $response=$this->Account_model->deleterecords($id);
  if($response==true){
$this->session->set_flashdata('success','record succesfully deleted');
redirect('cw3admin/users');
      
  }
  else{
$this->session->set_flashdata('warning','error unable to process data');
redirect('cw3admin/users');

  }
            }
    }else {
       redirect('login');     
        }
}
 public function delete_bundle()
{
     if(!$this->session->userdata('user_id')){
        redirect('login');
      }
      
    $accountNo=$this->session->userdata('user_id');
    $data['account']=$this->Account_model->account($accountNo);
       
                   if (isset($_SESSION['user_id'])) {
            if ($_SESSION['status'] == 'admin') {
                
                 
  $id=$this->input->get('id');
  $response=$this->Account_model->delete_bundle($id);
  if($response==true){
$this->session->set_flashdata('success','Databundle deleted  succesfully ');
redirect('cw3admin/manage-products');
      
  }
  else{
$this->session->set_flashdata('warning','error unable to process data');
redirect('cw3admin/manage-products');

  }
            }
    }else {
       redirect('login');     
        }
}




   public function fund(){
    
    $accountNo=$this->session->userdata('user_id');
    $data['account']=$this->Account_model->account($accountNo);
       
            if (isset($_SESSION['user_id'])) {
            if ($_SESSION['status'] == 'admin') {

                                  $id = $_GET['id'];
     $query = $this->Account_model->edit_pro($id);
       
 $data['error'] = NULL;
 
            $data['datas'] = $query->result();
                      $pid = $this->input->post('pid');
$status ="Wallet funding successful";
$service="Wallet funding";

                  if($this->input->post())
                  {

                    $config = array(
                        
                        
                        array(
                            'field' => 'name',
                            'label' => 'name',
                            'rules' => 'required'//is unique username in the user's table of DB
                        ),
                        array(
                            'field' => 'price',
                            'label' => 'Price',
                            'rules' => 'required'//is unique username in the user's table of DB
                        ),

                     array(
                            'field' => 'phone',
                            'label' => 'Phone Number',
                            'rules' => 'required'//is unique username in the user's table of DB
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
                            'user_id' => $pid,
                            'user_deposit' => $this->input->post('price'),
                            'total_amount' => $this->input->post('price'),
                            'phone_number' => $this->input->post('phone'),
                            'status' => $status,
                            'service' => $service,
                            'ref' => rand(0000,9998),
                            'status' => "successful"                       
                        );                                                
                      $this->Account_model->save($data,$pid);
                      $this->session->set_flashdata('success', 'user wallet funded successfully');
                        redirect("cw3admin/fund?id=$id");
                    }

                }
                       
     $this->load->view('admin/header');
     $this->load->view('admin/fund',$data);
    
      }
    }else {
       redirect('login');     
        }
    
        
    } 
    
}


?>