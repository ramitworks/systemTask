<?= $this->extend('layouts/header') ?>

<?= $this->section('body-contents') ?><br><br>
<div clas="container">
<a  class="btn btn-info" href="<?=  base_url('category') ?>">View Category</a><br><br>
<h2>Create Category</h2><br>
<form class="form-horizontal" action="<?=  base_url('category/create') ?>" method="POST">
	<p>Name: <input type="text" name="name" class="form-control col-sm-4" id="name" required autocomplete="off"></p>
	<input type="submit" class="form-control btn btn-success col-sm-1" id="submit" value="Submit">
	<a name="cancel" class="form-control btn btn-warning col-sm-1" href="<?=  base_url('category') ?>">Cancel</a>
</form>
</div>
<?= $this->endSection() ?>
