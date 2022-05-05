<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
   
        $this->load->library('cart');   
    }

public function login(){
   if($this->session->userdata("user_id"))//If already logged in
    {
        redirect(base_url());//redirect to the blog page
    }
    $data['error'] = 0;
    if($this->input->post())//data inputed for login
    {
        $email = $this->security->xss_clean( $this->input->post('email', TRUE));
        $password =$this->security->xss_clean(  $this->input->post('password', TRUE));

        $user = $this->Account_model->login($email, $password);
        if(!$user){
          $data['error'] = 1;
        }//when user doesn't exist
        else //when user exist
        {
            $this->session->set_userdata('user_id', $user['user_id']);
            $this->session->set_userdata('status', $user['status']);

            redirect('dashboard');
        }
      }
    $this->load->view('pages/login',$data);
}

 public function logout() {
    $this->session->unset_userdata('user_id');
    $this->session->unset_userdata('status');
  $this->session->set_flashdata('logout', 'Logout successful');
    // $this->session->set_userdata($data);
    redirect('login');

}

public function signup(){
   if($this->session->userdata("user_id"))//If already logged in
    {
        redirect('dashboard');//redirect to the blog page
    }
    $data['error'] = NULL;
    if($this->input->post())
    {
        $config = array(
            array(
                'field' => 'fullname',
                'label' => 'Fullname',
                'rules' => 'trim|required|min_length[5]'//is unique username in the user's table of DB
            ),
            array(
                'field' => 'phone',
                'label' => 'Phone number',
                'rules' => 'trim|required|min_length[11]'//is unique username in the user's table of DB
            ),
            array(
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'trim|required|min_length[8]|max_length[20]'
            ),

            array(
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'trim|required|is_unique[deusers.email]|valid_email',//is unique email in the user's table of DB
                'errors' => array('is_unique' => 'Email Already Exist')
            ),
            array(
            'field' => 'cpassword',
            'label' => 'Confirm password',
            'rules' => 'trim|required|min_length[8]|matches[password]',
            ),
        );
        $this->load->library('form_validation');
        $this->form_validation->set_rules($config);
        if($this->form_validation->run() == FALSE)
        {
            $this->load->view('pages/signup', $data);
        }
        else
        {
        $status ="users";
            $data = array(
                'fullname' =>$this->security->xss_clean(  $this->input->post('fullname')),
                'phone' => $this->security->xss_clean($this->input->post('phone')),
                'email' => $this->security->xss_clean( $this->input->post('email')),
                'password' =>$this->security->xss_clean(sha1($this->input->post('password'))),
                'status' => $status,
            );
            $user_id = $this->Account_model->create_user($data);
            $this->session->set_userdata('user_id',$user_id);
            $this->session->set_userdata('status',$user_id);
            $this->session->set_userdata('email',$this->input->post('email'));
            // Code to create new wallet id for user
            if($user_id){
                $id = $this->session->userdata('user_id');
                $datas = array(
                    "user_id" => $id,
                    "balance" => 0,
                    "ref" => rand(10000000,99999999)
                );
                $this->db->insert("wbalance",$datas);
            }
            redirect('dashboard');
        }

    }


    $this->load->view('pages/signup',$data);

 }
 
 
   public function forget_password()
    {
    	
	   $this->load->view('pages/forgotpassword',@$data);	
   }


 public function resetlink(){
    $email=$this->input->post('email');
   $result = $this->db->query("select * from deusers where email ='".$email."'")->result_array();
    if(count($result)>0){
    $this->load->library('email');
    $token = sha1(rand(1000,9999));
    $data['email'] = $email;
   $data['name'] = $result['fullname'];
    $data['message']="There was recently a request to change the password for your account.


If you requested this password change, please click on the following link to reset your password ".base_url('account/reset?email=').$email."</h3></br>";
$this->email->set_newline("\r\n");
$body = $this->load->view('pages/mail.php',$data,TRUE);
    $this->email->from('info@sammyjoe.com.ng','Sammyjoe');
    $this->email->to($email);
    $this->email->subject('Password Reset Confirmation');
    $this->email->message($body);
    
if ($this->email->send()) {
            $this->session->set_flashdata('message',"We’ve sent a reset password link to your email
.Resetlink expires after 15 minutes.");
redirect(base_url('forget-password'));

        } else {
            show_error($this->email->print_debugger());
        }
    }else{
$this->session->set_flashdata('message',"email not registered");
redirect(base_url('forget-password'));
    }
}
public function reset(){
    
    date_default_timezone_set("Africa/Lagos"); // set time_zone according to your location
$data['email'] = $this->input->get('email');

$now = date("Y-m-d H:i:s"); // your current time.
$expire_date = strtotime($now) + 900;
if ($now>$expire_date) {

$this->session->set_flashdata('message',"Your password reset link has expired. Please enter your email address to start the password reset process.");
    redirect('account/forget-password');
}
else
{
    $this->load->view('pages/resetpass',$data);
    
}
    
}
public function updatepass(){
     $data['error'] = NULL;
  $email = $this->input->post('email');

    $this->load->library('form_validation');
    if(!$this->input->post('change_pass'))
		{
   
    $this->form_validation->set_rules('password', 'password', 'required');
    $this->form_validation->set_rules('passwordc', 'confirm password', 'required|matches[password]');

    $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

    if($this->form_validation->run() == false) {
        $this->load->view('templates/header', $data);
        $this->load->view('pages/resetpass', $data);
        $this->load->view('templates/footer', $data);
    }
    else {


        $newpass = $this->input->post('password');

         $data = array(
                'password' => sha1($newpass)

            );
            $user_id = $this->Account_model->update_pass($data,$email);
            redirect('account/login');
    }
    
  
    }

   
    
 
}
 
 
 

}