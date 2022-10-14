<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {


		public function index(){
			

				// $this->load->model('crud_model');---this model already loded in autolod.php

				$data['product_details']=$this->crud_model->getAllProduct();
				$this->load->view('crud_vew',$data);

		}

		public function addProduct(){


			$this->form_validation->set_rules('name', '  Product Name','trim|required' );
			$this->form_validation->set_rules('price', ' Product Price','trim|required' );
			$this->form_validation->set_rules('qty' ,  ' Product Qty','trim|required' );
			
			if ( $this->form_validation->run() == false){

				

				$this->session->set_flashdata('message', validation_errors());

				 //$this->session->set_flashdata( $data_error );

				

			} else{

			$result = $this->crud_model->InsertProduct([

					'product' => $this->input->post('name'),
					'price'   =>  $this->input->post('price'),
					'qty'     =>   $this->input->post('qty')

				]);

			if($result){
			 $this->session->set_flashdata('sucess', 'Your Data successfully inserted');
			}
		

		}
		redirect("crud");
			
		}
		    public function editProduct($id){

		    	//$id = (int) $this->uri->segment(2);
		    	$data['singeleProduct'] = $this->crud_model->getSingleProduct($id );

		    	$this->load->view('edit_vew', $data );
		    }


		    public function update($id){

		    $this->form_validation->set_rules('name', '  Product Name','trim|required' );
			$this->form_validation->set_rules('price', ' Product Price','trim|required' );
			$this->form_validation->set_rules('qty' ,  ' Product Qty','trim|required' );
			
			if ( $this->form_validation->run() == false){

				

				$this->session->set_flashdata('error', validation_errors());

				 //$this->session->set_flashdata( $data_error );

				

			} else{

			$result = $this->crud_model->UpdateProduct(

				[
					'product' => $this->input->post('name'),
					'price'   =>  $this->input->post('price'),
					'qty'     =>   $this->input->post('qty')

				 ], $id
			  );

			if($result){
			 $this->session->set_flashdata('sucess', 'Your Data successfully Updated');
			}
			
		}

		redirect("crud");
		}


		public function deleteProduct($id){

			$result = $this->crud_model->deleteItem($id);

			if( $result==true ){
			 
			 $this->session->set_flashdata('deleted', 'Your Item has been  successfully deleted');
			
			}
			redirect("crud");


		}


}


?>