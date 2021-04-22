<?= $this->extend('layouts/header') ?>

<?= $this->section('body-contents') ?><br><br>
<a  class="btn btn-info" href="<?=  base_url('products') ?>">View Products</a><br><br>
<h2>Create Product</h2><br>
<form class="form-horizontal" action="<?=  base_url('products/create') ?>" method="POST" enctype="multipart/form-data">
	<p>Name: <input type="text" name="name" class="form-control col-sm-4" id="name"   required autocomplete="off"></p>
	<p>Category: <select name="category" class="form-control col-sm-4" id="category"   required autocomplete="off">
		<option value=""></option>
		<?php
		if($data){
			foreach ($data as $category) {
				?><option value="<?= $category['name']?>"><?= $category['name']?></option>
				<?php 
			}
		}?>
	</select></p>
	<p>Short Description: <input type="text" name="short_description" class="form-control col-sm-4" id="short_description" autocomplete="off"></p><br>
	<p>Description: <textarea name="description" class="form-control col-sm-4" id="description"></textarea></p>
	<p>Image: <input type="file" name="image[]" class="form-control col-sm-4" id="image"   required  multiple></p>
	<p>Price: <input type="text" name="price" class="form-control col-sm-4" id="price"   required autocomplete="off"></p>
	<p>Status: <select name="status" class="form-control col-sm-4" id="category"   required >
		<option value="1">Active</option>
		<option value="0">Inactive</option>
	</select></p>
	<input type="submit" class="form-control btn btn-success col-sm-1" id="submit" value="Submit">
	<a name="cancel" class="form-control btn btn-warning col-sm-1" href="<?=  base_url('products') ?>">Cancel</a>
</form>
<?= $this->endSection() ?>
