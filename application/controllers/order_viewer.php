<?php
/**************************************************************************
-- Order_viewer controller class loads the order_helper and order_model ---
-- so that their methods and data can be used for the order_viewer page. --
---------------------------------------------------------------------------
-- AuthorL Irene Gayle Roque ----------------------------------------------
**************************************************************************/
class order_viewer extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		//loads order_helper
		$this->load->helper('order_helper');

		//loads order_model
		$this->load->model('order_model');

		//pass getOrders method and its values to $data["results"]
		$data["results"] = $this->order_model->getOrders();
		
		//loads order_viewer along with the values passed to $data
		$this->load->view('order_viewer', $data);
	}

	
}
?>