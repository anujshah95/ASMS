<?php
// Model

/*Tut -1
class site_model extends CI_Controller

{
	function getData()
		{
			$query = $this->db->query('SELECT id,title FROM test');

			foreach ($query->result() as $row)
				{
    				echo $row->id;
    				echo $row->title."<hr>";
				}

			echo 'Total Results: ' . $query->num_rows();
		}
}
*/

/* Tut - 2 ... select all records
class site_model extends CI_Controller{

	function getAll()
	{

		$q=$this->db->query('select * from data');

		if($q->num_rows()>0)
		{
			foreach ($q->result() as $row) 
			{
				$data[]=$row;
			}
			return $data;
		}
		else
			echo "No Records Found;";
	}
}
*/


/* Tut -2 ... active records_1
class site_model extends CI_Controller{

	function getAll()
	{

		$q=$this->db->get('data');

		if($q->num_rows()>0)
		{
			foreach ($q->result() as $row) 
			{
				$data[]=$row;
			}
			return $data;
		}
		else
			echo "No Records Found;";
	}
}
*/

/* Tut -2 ... selected records
class site_model extends CI_Controller{

	function getAll()
	{

		$this->db->select('title,contents');
		$q=$this->db->get('data');

		if($q->num_rows()>0)
		{
			foreach ($q->result() as $row) 
			{
				$data[]=$row;
			}
			return $data;
		}
		else
			echo "No Records Found;";
	}
}
*/



/* Tut -2 ... query binding_1
class site_model extends CI_Controller{

	function getAll()
	{
		$sql='select title,author,contents from data where id = ? ';
		$q = $this->db->query($sql,4);
	
		if($q->num_rows()>0)
		{
			foreach ($q->result() as $row) 
			{
				$data[]=$row;
			}
			return $data;
		}
		else
			echo "No Records Found;";
	}
}
*/

/* Tut -2 ... query binding_2
class site_model extends CI_Controller{

	function getAll()
	{
		$sql='select title,author,contents from data where id = ? and author= ? ';
		$q = $this->db->query($sql,array(1,'anuj'));
	
		if($q->num_rows()>0)
		{
			foreach ($q->result() as $row) 
			{
				$data[]=$row;
			}
			return $data;
		}
		else
			echo "No Data Found ..";
	}
}
*/


// Tut -2 ... active records_2..more specific

class site_model extends CI_Controller
{
	function getAll()
	{
		$this->db->select('title,contents');
		$this->db->from('data');
		$this->db->where('id',5);

		$q=$this->db->get();

		if($q->num_rows()>0)
		{
			foreach ($q->result() as $row) 
			{
				$data[]=$row;
			}
			return $data;
		}
		else
			echo '<h1>'."No Records Found ..".'</h1>';
	}
}


?>