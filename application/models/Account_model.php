
    <?php
class Account_model extends CI_Model{



  public function get_itemCRUD(){
  $query = $this->db->get('Databundle');
		return $query->result();
    }


    function login($email, $password)
    {
        $match = array(
            'email'=>$email,
            'password' => sha1($password),

        );

        $this->db->select()->from('deusers')->where($match);
        $query = $this->db->get();
        return $query->first_row('array');
    }
    
    function create_user($data)
    {
        $this->db->insert('deusers', $data);
        return $this->db->insert_id();
    }
     function mtndata($id)
 {
 $query = $this->db->get_where('Databundle',array("network"=>$id));
        return $query;
 }
    function fetch_price($id){
        $query = $this->db->get_where('Databundle',array("id"=>$id));
        return $query;
    }
    function submit($accountNo,$amount,$status,$service,$phone){
// Code to credit user wallet balance
      $ref = rand(00000000, 9999999999);
        $data = array(        
            'user_id' => $accountNo,
            'user_deposit' => $amount,
            'total_amount' => $amount,
            'phone_number' => $phone,          
            'service' => $service,
            'ref' => $ref,
            'status' => $status,
            
        );
        
        $query = $this->db->insert('transactions',$data);
        if($query){
          $sum = $this->db->select('SUM(transactions.user_deposit - transactions.amount) as balance');
          $this->db->from('wbalance');
          $this->db->join('transactions','transactions.user_id = wbalance.user_id ');
          $this->db->where('wbalance.user_id',$accountNo);
          $this->db->where('transactions.user_id ',$accountNo);
          $querys =  $this->db->get();
          if($querys){
            $result = $querys->row_array();
            $this->db->set('balance',$result['balance']);
            $this->db->where('user_id',$accountNo);
            $this->db->update("wbalance");
    
          }
        }
        return $this->db->insert_id();;

    }
    
    // public function getBala($accountNo){
    //   $sum = $this->db->select('SUM(deposit-amount) as balance');
		// $this->db->where('user_id',$accountNo);
		// $result = $this->db->get('account');
		 
		// return $result->row_array();
    // }
    
// sum customer wallet deposit
   public function getBalance($accountNo)
	{
		
    $sum = $this->db->select('SUM(transactions.user_deposit - transactions.amount) as balance');
    $this->db->from('wbalance');
    $this->db->join('transactions','transactions.user_id = wbalance.user_id ');
    $this->db->where('wbalance.user_id',$accountNo);
    $this->db->where('transactions.user_id ',$accountNo);
    $query =  $this->db->get();
    if($query){
      $result = $query->row_array();
      $this->save_balance_to_db($result,$accountNo);
    }
    return $query->row_array();

    }

    // save customer wallet balance to db
    private function save_balance_to_db($result,$accountNo){
     $this->db->where('user_id',$accountNo);
     $this->db->update("wbalance",$result);
    }

  //     public function Balance($id)
	// {
	// 	$sum = $this->db->select('SUM(deposit-amount) as balance');
	// 	$this->db->where('user_id',$id);
	// 	$result = $this->db->get('account');
		 
	// 	return $result->row_result();
  //   }
    
public function allBalance()
	{
		$sum = $this->db->select('SUM(user_deposit-amount) as balance');
		
		$result = $this->db->get('transactions');
		 
		return $result->row_array();
    }
    public function account($accountNo)
	{
		$this->db->where('user_id',$accountNo);
		$result = $this->db->get('deusers');
		return $result->row_array();
    }
  function alltransaction($accountNo){
      $this->db->from('transactions');
      $this->db->where('user_id',$accountNo);
      return $this->db->count_all_results();
  }
     
    public function edit($data,$accountNo)
	{
		$this->db->where('user_id',$accountNo);
		$this->db->update('deusers',$data);
    }
    
    
    public function get_user($id)
    {
        $this->db->where('user_id', $id);
        $query = $this->db->get('deusers');
        return $query->row();
    }

    public function update_user($id, $userdata)
    {
        $this->db->where('user_id', $id);
        $this->db->update('deusers',  $userdata);
    }
    
    public function save_ebundle($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('Databundle',  $data);
    }
    
    public function record_get($accountNo,$limit, $start) {

        $this->db->limit($limit, $start);
        $this->db->where('user_id',$accountNo);
        $this->db->order_by("date", "DESC");
        $query = $this->db->get("transactions");

        return $query->result();
   }
   
   public function recieveairtime($message,$amount,$phone,$accountNo,$service,$ref){
        $data = array(
            
            'amount' => $amount,
            'user_id' => $accountNo,
             'status' => $service,
              'service' => $service,
             'phone_number' => $phone,
            'ref' => $ref,
            'total_amount' => $amount,
        );
        
        $this->db->insert('transactions',$data);
        return $this->db->insert_id();

   }
   
      public function recieveDatabundle($amount,$phone,$accountNo,$service){
        $data = array(
            
            'amount' => $amount,
            'user_id' => $accountNo,
             'status' => $service,
              'service' => $service,
             'phone_number' => $phone,
            'ref' => rand(0000,9999),
            'total_amount' => $amount,
        );
        
        $this->db->insert('transactions',$data);
        return $this->db->insert_id();

   }
 
		public function users()
	{
	    $this->db->select('fullname,wbalance.user_id,balance');
	    $this->db->from('wbalance');
	    $this->db->join('deusers','deusers.user_id = wbalance.user_id');
       return $this->db->get()->result_array(); 
	}
	
	function alluser(){
  $this->db->from('deusers');
  return $this->db->count_all_results();    
 }
   
   
        function edit_pro($id){
        $query = $this->db->get_where('deusers',array('user_id' => $id));
        return $query;
    }
       function edit_bundle($id){
        $query = $this->db->get_where('Databundle',array('id' => $id));
        return $query;
    }
      public function save($data,$pid)
	{
   	// $this->db->where('user_id',$pid);
	 $query = $this->db->insert('transactions',$data);
   if($query){
     $this->update_user_balance($data,$pid);
   }
    }

    private function update_user_balance($data,$pid){
      $sum = $this->db->select('SUM(transactions.user_deposit - transactions.amount) as balance');
      $this->db->from('wbalance');
      $this->db->join('transactions','transactions.user_id = wbalance.user_id ');
      $this->db->where('wbalance.user_id',$pid);
      $this->db->where('transactions.user_id ',$pid);
      $query =  $this->db->get();
      if($query){
        $result = $query->row_array();
        $this->db->set('balance',$result['balance']);
        $this->db->where('user_id',$pid);
        $this->db->update("wbalance");

      }
    }
    
  function deleterecords($id)
  {
    $this->db->where("user_id", $id);
    $this->db->delete("deusers");
    return true;
  }
  
         function delete_bundle($id)
  {
    $this->db->where("id", $id);
    $this->db->delete("Databundle");
    return true;
  }
  function dataplans($id){
      $this->db->where("id", $id);
  $query = $this->db->get('Databundle');
        return $query->row_array();
  }
    function add_bundle($data){
        $this->db->insert('Databundle',$data);
                return $this->db->insert_id();;
  }
    }