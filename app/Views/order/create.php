<?= $this->extend('layouts/header') ?>

<?= $this->section('body-contents') ?><br>
<script type="text/javascript">
function get_image()
{
	$("#MyPopup").modal("show");
} 
</script>
<h2><?= $data['name'] ?> 
	<input type="button" id="myModal" value="View Images" onClick="get_image();" class="btn btn-info"></h2>
	<p> Price:<b> <?= $data['price'] ?> </b></p>
	<p> Description: <?= $data['short_description'] ?> </p>
	<div id="container" style="padding-left:300px;">
		<?php $image =  unserialize($data['images']);?>
		<div id="MyPopup" class="modal fade" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">
							&times;</button>
							<h4 class="modal-title">
							</h4>
						</div>
						<?php foreach ($image as $key) {
							?><a href="#" class="btnShowPopup"><img style="width: 250px;
							height: 140px;"
							src="<?php echo base_url('uploads') ?>/<?= $key ?>" alt="<?= $key ?>" ></a><br/><?php
						} ?>
					</div>
				</div>
			</div>
			<h2>Checkout</h2><br>
			<form class="form-horizontal" action="<?php echo base_url() ?>/cart/add" method="POST">
				<input type="hidden" name="product_id" class="form-control col-sm-4" id="product_id" value="<?= $data['name'] ?>">
				<p>Name: <input type="text" name="name" class="form-control col-sm-4" id="name"  required autocomplete="off"></p>
				<p>Email: <input type="email" name="email" class="form-control col-sm-4" id="email" required autocomplete="off"></p>
				<p>Mobile: <input type="text" name="phone" class="form-control col-sm-4" id="phone" required autocomplete="off"></p>
				<p>Address: <textarea name="address" class="form-control col-sm-4" id="address"></textarea></p>
				<input type="submit" class="form-control btn btn-success col-sm-1" id="submit" value="Submit">
				<a name="cancel" class="form-control btn btn-warning col-sm-1" href="<?php echo base_url() ?>/cart">Cancel</a>
			</form>
		</div>
		<?= $this->endSection() ?>
