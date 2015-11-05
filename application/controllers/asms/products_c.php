<?php

class Products_c extends CI_Controller
{

	function __construct()
	{
			parent::__construct();
			$this->load->model('/asms/products_m');
			
	}
	function index()
	{
		$this->load->view('/asms/admin/add_products');
	}
	function add_products()
	{
		
		$img_file =$this->input->post('image_url');

		// Read image path, convert to base64 encoding
		$imgData = base64_encode(file_get_contents($img_file));
        
		$data=array(
			'pname'=>$this->input->post('pname'),
			'mname'=>$this->input->post('mname'),
			'car_type'=>$this->input->post('car_type'),
			'ptype'=>$this->input->post('ptype'),
			'description'=>$this->input->post('description'),
			'image_url'=>$imgData,
			'price'=>$this->input->post('price'),
			'quantity'=>$this->input->post('quantity')
						);
		$this->products_m->add_products($data);
		
		echo "<script>
		     alert('Value inserted Successfully!! '); 
			 </script>";
	}
	function display_products()
	{
		$this->data['posts'] = $this->products_m->display_products();
   	
   		$this->load->view('/asms/admin/display_products', $this->data);
	}
}