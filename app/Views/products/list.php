<?= $this->extend('layouts/header') ?>

<?= $this->section('body-contents') ?><br><br>
<script type="text/javascript">
function get_image(id)
{
  $("#MyPopup"+id).modal("show");
} 
</script>
<div class="container">
  <a  class="btn btn-info" href="<?=  base_url('products/create') ?>">Create Product</a><br><br>
  <h2>Products</h2>
  <table class="table table-bordered">
    <thead>
      <tr>
      	<th>S.No</th>
        <th>Product Name</th>
        <th>Category</th>
        <th>Image</th>
        <th>Price</th>
        <th>Short Description</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    	<?php 
    	$count = 1;
    	foreach($data as $product){ 
        $image =  unserialize($product['images']);?>
        <tr>
         <td><?= $count ?></td>
         <td><?= $product['name'] ?></td>
         <td><?= $product['category'] ?></td>
         <td><input type="button" id="<?= $count?>" value="View Images" onClick="get_image(this.id);" class="btn btn-info" /></td>
         <div id="MyPopup<?= $count?>" class="modal fade" role="dialog">
          <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Product Images</h4>
              </div>
              <?php foreach ($image as $key) {
                ?><a href="#" class="btnShowPopup"><img style="width: 250px;
                height: 140px;"
                src="<?php echo base_url('uploads') ?>/<?= $key ?>" alt="<?= $key ?>" ></a><br/><?php
              } ?>
            </div>
          </div>
        </div>
        <td><?= $product['price'] ?></td>
        <td><?= $product['short_description'] ?></td>
        <?php if($product['cart'] == 0){ ?>
        <td><a  class="btn btn-info" href="<?php echo base_url() ?>/products/add/<?=$product['id'] ?>">Add to Cart</a></td>
        <?php }else{ ?>
        <td>Item added to cart</td>
        <?php } ?>
      </tr>
      <?php 
      $count++;
    } ?>
  </tbody>
</table>
</div>
<?= $this->endSection() ?>
