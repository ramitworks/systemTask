<html>
<head>
	<meta charset="UTF-8">
	<title>System Cart</title>
	<script type="text/javascript" src="<?php echo base_url() ?>/public/js/jquery.min.js"></script>
	<link rel="stylesheet" href="<?php echo base_url() ?>/public/css/bootstrap.min.css">
	<script type="text/javascript" src="<?php echo base_url() ?>/public/js/bootstrap.min.js"></script>
</head>
<body>
	<header>
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="#">Logo</a>
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url() ?>/products">Products</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url() ?>/category">Category</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url() ?>/cart">Cart</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url() ?>/place">Placed Orders</a>
    </li>
  </ul>
</nav>
</header>

<?=$this->renderSection('body-contents')?>
</body>
</html>