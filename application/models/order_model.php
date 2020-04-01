<?php
/*************************************************************
-- Order_model gets all the data from the database. ----------
--------------------------------------------------------------
-- Author: Irene Gayle Roque --------------------------------- 
*************************************************************/
class order_model extends CI_Model{
	
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
    
    //getOrders()--> gets all the orders from database
	public function getOrders(){

		//SELECT * FROM 'order_items'
		$rs = $this->db->get('order_items');
		return $rs->result_array();
	}

	
}
?>