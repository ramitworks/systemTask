<?= $this->extend('layouts/header') ?>

<?= $this->section('body-contents') ?><br><br>
<div class="container">
  <h2>Orders Placed</h2>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>S.No</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Products</th>
      </tr>
    </thead>
    <tbody>
    	<?php 
      $count = 1;
      foreach($data as $order){ ?>
      <tr>
        <td><?= $count ?></td>
        <td><?= $order['name'] ?></td>
        <td><?= $order['email'] ?></td>
        <td><?= $order['phone'] ?></td>
        <td><?= $order['address'] ?></td>
        <td><?= $order['product_id'] ?></td>
      </tr>
      <?php 
      $count++;
    } ?>
    </tbody>
  </table>
</div>
<?= $this->endSection() ?>
