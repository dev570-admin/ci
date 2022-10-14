<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php base_url(); ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>

	<div class="container">

	
	<br><br>
<div class="bg-danger" align="center" style="color:#fff;">

					<?php  if( $this->session->flashdata('update') ): ?>
						<span class="bg-danger" >
							
							<?php echo $this->session->flashdata('update') ; ?>
						</span >
					<?php  endif; ?>
</div>

<form action="<?php echo base_url(); ?>crud/update/<?php echo $singeleProduct->id; ?>" method="post">

	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Edit Product</h5>
	        
	      </div>
	      <div class="modal-body">
	       
	       <div class="form-group">
	       	
	       	<label for="name"> Name</label>
	       	<input type="text" name="name" placeholder="enter your name" class="form-control"   value="<?php echo $singeleProduct->product; ?>">

	       </div>
	        <div class="form-group">
	       	
	       	<label for="price"> Price</label>
	       	<input type="text" name="price" placeholder="enter your price" class="form-control"  value="<?php echo $singeleProduct->price; ?>">
	       	
	       </div>
	       <div class="form-group">
	       	
	       	<label for="qty"> Qty</label>
	       	<input type="text" name="qty" placeholder="enter your qty" class="form-control"  value="<?php echo $singeleProduct->qty; ?>">
	       	
	       </div>
	       <input type="submit" name="insert" class="btn btn-info"  value="Save changes"   >
	      </div>
	      
		</form>

		<div class="bg-danger" align="center" style="color:#fff;">

					<?php  if( $this->session->flashdata('message') ): ?>
						<span class="bg-danger" >
							
							<?php echo $this->session->flashdata('message') ; ?>
						</span >
					<?php  endif; ?>
</div>

		
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>