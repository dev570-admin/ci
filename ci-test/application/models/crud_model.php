<?php 

defined('BASEPATH') OR exit('No direct script access allowed');


	 class crud_model extends CI_Model {

	 	public function getAllProduct(){

	 		//$this->db->get('table_name');

	 		$query =$this->db->get('product');
	 	
	 	if($query){

	 		return $query->result();
	 	
	 	}
	  
	  }

	 	public function InsertProduct($data){

	 	$query=	$this->db->insert('product',$data);

		 	if($query){

		 		return true;
		 	}else{
		 		return false ;
		 	}

	 	}

	 	public function getSingleProduct($id){

	 			
	 		$this->db->where('id',$id);

	 		$query = $this->db->get('product');

	 		if($query){

	 			return $query->row();

	 		}


	 	}

	 	public function UpdateProduct($data,$id){

	 		$this->db->where('id',$id);
	 		$query = $this->db->update('product',$data);

	 		if($query){

	 			return true;

	 		}else{
	 			return false;
	 		}

	 	}

	 	public function deleteItem($id){

	 		$this->db->where('id',$id);

	 		$query = $this->db->delete('product');

	 			if($query){

	 			return true;

	 		}else{
	 			return false;
	 		}

	 	}




 }



?>