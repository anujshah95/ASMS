<?php

class admin_search_by_date_model extends CI_Model
{
	function admin_search_by_date_model_f($search_by_date_data)
	{
		$from=$this->input->post('from');
		$to=$this->input->post('to');
		
		$this->db->select('tbl_Transaction.tid,tbl_Retailer_Login.shop_name,tbl_Retailer_Login.rname,
			tbl_Transaction.products,tbl_Transaction.total,tbl_Transaction.purchase_date');
		$this->db->from('tbl_Transaction');
		$this->db->join('tbl_Retailer_Login','tbl_Retailer_Login.rid=tbl_Transaction.rid','Left');
		$this->db->where('tbl_Transaction.purchase_date >=', $from);
		$this->db->where('tbl_Transaction.purchase_date <=', $to);
		$this->db->or_where('tbl_Retailer_Login.shop_name =',$this->input->post('shop_name'));
		
		$result=$this->db->get();
		if($result->num_rows >0)
        {
	    	return $result->result();
	    }
	}
}