<?= $this->extend('layouts/header') ?>

<?= $this->section('body-contents') ?><br>
<script type="text/javascript">
function get_image(id)
{
  $("#MyPopup"+id).modal("show");
} 
</script>
<div class="container">

  <h2>Cart</h2>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>S.No</th>
        <th>Product Name</th>
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
        $image =  unserialize($product['images']); ?>
        <tr>
          <td><?= $count ?></td>
          <td><?= $product['name'] ?></td>
          <td><input type="button" id="<?= $count?>" value="View Images" onClick="get_image(this.id);" class="btn btn-info" /></td>
          <div id="MyPopup<?= $count?>" class="modal fade" role="dialog">
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
            <td><?= $product['price'] ?></td>
            <td><?= $product['short_description'] ?></td>
            <?php if($product['place'] == 0){ ?>
            <td><a  class="btn btn-info" href="<?php echo base_url() ?>/cart/create/<?=$product['id'] ?>">Place Order</a>&emsp;
              <a  class="btn btn-warning" href="<?php echo base_url() ?>/cart/remove/<?=$product['id'] ?>">Remove from cart</a>
            </td>
            <?php }else{ ?>
            <td>Order Placed</td>
            <?php } ?>
          </tr>
          <?php 
          $count++;
        } ?>
      </tbody>
    </table>
  </div>
  <?= $this->endSection() ?>
