<?= $this->extend('layouts/header') ?>

<?= $this->section('body-contents') ?><br><br>
<div class="container">
<a  class="btn btn-info" href="<?=  base_url('category/create') ?>">Create Category</a><br><br>
  <h2>Category</h2>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>S.No</th>
        <th>Name</th>
      </tr>
    </thead>
    <tbody>
    	<?php 
      $count = 1;
      foreach($data as $category){ ?>
      <tr>
        <td><?= $count ?></td>
        <td><?= $category['name'] ?></td>
      </tr>
      <?php 
      $count++;
    } ?>
    </tbody>
  </table>
</div>
<?= $this->endSection() ?>
