<!DOCTYPE html>
<html>
<head>
	<title>Crud Operation CI</title>
	<link rel="stylesheet" type="text/css" href="<?php base_url(); ?>assets/css/bootstrap.min.css">

	
</head>
<body>

<div class="jumbotron">
	<h1 align="center">Crud CI APP</h1>
</div>

<div class="container">

	<div class="clear-fix">
		
		<h3 style="float: left;">All Products</h3>
		<a href="#" style='float: right;' class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Add Product</a>
	</div>
	<br><br>
	<div class="bg-success" align="center" style="color:#fff;">
		<?php  if( $this->session->flashdata('sucess') ): ?>
					<strong>	
					 <?php 
					 echo $this->session->flashdata('sucess') ; 
					 unset($_SESSION['sucess']);
					 	header("refresh: 3;");
					  ?>
					</strong>		
				<?php  endif; ?>
	</div>
				


		<table class="table table-striped table-hover ">
			
			<thead>
				<th>Product Name</th>
				<th>Product Price</th>
				<th>Product Qty</th>
				<th>Action</th>
			</thead>
			<tbody>
				<?php if($product_details){ ?>
				<?php  foreach ($product_details as  $Productvalu ): ?>

						
				<tr>
					<td> <?php echo $Productvalu->product; ?>   </td>
					<td> <?php echo $Productvalu->price;    ?>  </td>
					<td> <?php echo $Productvalu->qty;       ?> </td>
					<td>
						
				<a class="btn btn-success"  href="<?php echo base_url(); ?>crud/editProduct/<?php echo $Productvalu->id ; ?>">Edit</a>
						<a class="btn btn-danger"  href="<?php echo base_url(); ?>crud/deleteProduct/<?php echo $Productvalu->id ; ?>">Del</a> 
						
					</td>
				</tr>

				<?php  endforeach ; ?>

				<?php  }else{   ?>
					<h1>No Data Found</h1>
				<?php    } ?>
			</tbody>
		</table>
 			



	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
			<form action="<?php echo base_url(); ?>crud/addProduct" method="post">

	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">ADD PRODUCT</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	       
	       <div class="form-group">
	       	
	       	<label for="name"> Name</label>
	       	<input type="text" name="name" placeholder="enter your name" class="form-control">

	       </div>
	        <div class="form-group">
	       	
	       	<label for="price"> Price</label>
	       	<input type="text" name="price" placeholder="enter your price" class="form-control">
	       	
	       </div>
	       <div class="form-group">
	       	
	       	<label for="qty"> Qty</label>
	       	<input type="text" name="qty" placeholder="enter your qty" class="form-control">
	       	
	       </div>
	      </div>
	      	<div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <input type="submit" name="insert" class="btn btn-info"  value="Save changes" >
	      	</div>
		</form>
		</div>
	  </div>
	</div>

</div>
<div class="bg-danger" align="center" style="color:#fff;">

					<?php  if( $this->session->flashdata('message') ): ?>
						<span class="bg-danger" >
							
							<?php echo $this->session->flashdata('message') ; ?>
						</span >
					<?php  endif; ?>

					<!-- error message display while editing data   -->

					<?php  if( $this->session->flashdata('error') ): ?>
						<span class="bg-danger" >
							
							<?php echo $this->session->flashdata('error') ; ?>
						</span >
					<?php  endif; ?>

					
</div>
 <div class="bg-success" align="center" style="color:#fff;">
	<!-- error message display while Deleting data   -->

					<?php  if( $this->session->flashdata('deleted') ): ?>
						<span class="bg-success" >
							
							<?php echo $this->session->flashdata('deleted') ; 	header("refresh: 3;"); ?>
						</span >
					<?php  endif; ?>
</div>


</body>

<!-- JS, Popper.js, and jQuery -->



<script src="https://code.jquery.com/jquery-3.6.1.slim.js" integrity="sha256-tXm+sa1uzsbFnbXt8GJqsgi2Tw+m4BLGDof6eUPjbtk=" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>