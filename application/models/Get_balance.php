<?php

class Get_balance extends CI_model{
    

   public function get_balances(){
       $this->db->select('SUM(deposit-spent) as balance,deusers.fullname as fullname, account.user_id as user_id,deusers.user_id as user_id');
       $this->db->from('account');
       $this->db->join('deusers', 'deusers.user_id = account.user_id');
       $this->db->order_by("deusers.user_id", "asc");
       return $this->db->get()->result_array(); 
    }
}