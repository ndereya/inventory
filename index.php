<?php
include("includes/header.php");
include("includes/sidebar.php");
?>

<div class="page-wrapper">
<div class="content">
<div class="row">
<div class="col-lg-3 col-sm-6 col-12">
<div class="dash-widget">
<div class="dash-widgetimg">
<span><img src="assets/img/icons/dash1.svg" alt="img"></span>
</div>
<div class="dash-widgetcontent">
<h5>UGX<span class="counters" data-count="307144.00">UGX 307,144.00</span></h5>
<h6>Total Stock Value</h6>
</div>
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12">
<div class="dash-widget dash1">
<div class="dash-widgetimg">
<span><img src="assets/img/icons/dash2.svg" alt="img"></span>
</div>
<div class="dash-widgetcontent">
<h5>UGX<span class="counters" data-count="4385.00">UGX4,385.00</span></h5>
<h6>Total Sales Due</h6>
</div>
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12">
<div class="dash-widget dash2">
<div class="dash-widgetimg">
<span><img src="assets/img/icons/dash3.svg" alt="img"></span>
</div>
<div class="dash-widgetcontent">
<h5>UGX<span class="counters" data-count="385656.50">385,656.50</span></h5>
<h6>Total Sale Amount</h6>
</div>
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12">
<div class="dash-widget dash3">
<div class="dash-widgetimg">
<span><img src="assets/img/icons/dash4.svg" alt="img"></span>
</div>
<div class="dash-widgetcontent">
<h5>UGX<span class="counters" data-count="40000.00">400.00</span></h5>
<h6>Total Sale Amount</h6>
</div>
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12 d-flex">
<div class="dash-count">
<div class="dash-counts">
<h4>100</h4>
<h5>Customers</h5>
</div>
<div class="dash-imgs">
<i data-feather="user"></i>
</div>
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12 d-flex">
<div class="dash-count das1">
<div class="dash-counts">
<h4>100</h4>
<h5>In Stock</h5>
</div>
<div class="dash-imgs">
<i data-feather="user-check"></i>
</div>
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12 d-flex">
<div class="dash-count das2">
<div class="dash-counts">
<h4>100</h4>
<h5>Purchase Invoice</h5>
</div>
<div class="dash-imgs">
<i data-feather="file-text"></i>
</div>
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12 d-flex">
<div class="dash-count das3">
<div class="dash-counts">
<h4>105</h4>
<h5>Sales Invoice</h5>
</div>
<div class="dash-imgs">
<i data-feather="file"></i>
</div>
</div>
</div>
</div>

<div class="row">
<div class="col-lg-7 col-sm-12 col-12 d-flex">
<div class="card flex-fill">
<div class="card-header pb-0 d-flex justify-content-between align-items-center">
<h5 class="card-title mb-0">Purchase & Sales</h5>
<div class="graph-sets">
<ul>
<li>
<span>Sales</span>
</li>
<li>
<span>Purchase</span>
</li>
</ul>
<div class="dropdown">
<button class="btn btn-white btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
 2022 <img src="assets/img/icons/dropdown.svg" alt="img" class="ms-2">
</button>
<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
<li>
<a href="javascript:void(0);" class="dropdown-item">2022</a>
</li>
<li>
<a href="javascript:void(0);" class="dropdown-item">2021</a>
</li>
<li>
<a href="javascript:void(0);" class="dropdown-item">2020</a>
</li>
</ul>
</div>
</div>
</div>
<div class="card-body">
<div id="sales_charts"></div>
</div>
</div>
</div>
<div class="col-lg-5 col-sm-12 col-12 d-flex">
<div class="card flex-fill">
<div class="card-header pb-0 d-flex justify-content-between align-items-center">
<h4 class="card-title mb-0">Recent sales</h4>
<div class="dropdown">
<a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false" class="dropset">
<i class="fa fa-ellipsis-v"></i>
</a>
<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
<li>
<a href="productlist.php" class="dropdown-item">Product List</a>
</li>
<li>
<a href="addproduct.php" class="dropdown-item">Product Add</a>
</li>
</ul>
</div>
</div>
<div class="card-body">
<div class="table-responsive dataview">
<table class="table datatable ">
<thead>
<tr>
<th>customer</th>
<th>phone</th>
<th>status</th>
</tr>
</thead>
<tbody>
<tr>
<td>1</td>
<td class="productimgname">
<a href="productlist.php" class="product-img">
<img src="assets/img/product/iphone16.webp" alt="product">
</a>
<a href="productlist.php">iphone 16</a>
</td>
<td style="color:green;">cleared</td>
</tr>
<tr>
<td>2</td>
<td class="productimgname">
<a href="productlist.php" class="product-img">
<img src="assets/img/product/iphone16.webp" alt="product">
</a>
<a href="productlist.php">iPhone 11</a>
</td>
<td style="color:green;">cleared</td>
</tr>
<tr>
<td>3</td>
<td class="productimgname">
<a href="productlist.php" class="product-img">
<img src="assets/img/product/iphone16.webp" alt="product">
</a>
<a href="productlist.php">samsung</a>
</td>
<td style="color:red;">uncleared</td>
</tr>
<tr>
<td>4</td>
<td class="productimgname">
<a href="productlist.php" class="product-img">
<img src="assets/img/product/iphone16.webp" alt="product">
</a>
<a href="productlist.php">Macbook Pro</a>
</td>
<td style="color:green;">cleared</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
<div class="card mb-0">
<div class="card-body">
<h4 class="card-title">Low  Stock</h4>
<div class="table-responsive dataview">
<table class="table datatable ">
<thead>
<tr>
<th>SNo</th>
<th>Product Code</th>
<th>Product Name</th>
<th>Brand Name</th>
<th>Storage</th>
<th>In stock</th>
</tr>
</thead>
<tbody>
<tr>
<td>1</td>
<td><a href="javascript:void(0);">IT0001</a></td>
<td class="productimgname">
<a class="product-img" href="productlist.php">
<img src="assets/img/product/iphone 16 pro max.webp" alt="product">
</a>
<a href="productlist.php">iPhone 16 Pro Max.webp</a>
</td>
<td>N/D</td>
<td>32GB</td>
<td>9</td>
</tr>
<tr>
<td>2</td>
<td><a href="javascript:void(0);">IT0002</a></td>
<td class="productimgname">
<a class="product-img" href="productlist.php">
<img src="assets/img/product/iphone 15.webp" alt="product">
</a>
<a href="productlist.php">iPhone 15</a>
</td>
<td>N/D</td>
<td>128GB</td>
<td>1</td>
</tr>
<tr>
<td>3</td>
<td><a href="javascript:void(0);">IT0003</a></td>
<td class="productimgname">
<a class="product-img" href="productlist.php">
<img src="assets/img/product/iphone 16 pro.webp" alt="product">
</a>
<a href="productlist.php">iPhone 16 Pro</a>
</td>
<td>N/D</td>
<td>256GB</td>
<td>5</td>
</tr>
<tr>
<td>4</td>
<td><a href="javascript:void(0);">IT0004</a></td>
<td class="productimgname">
<a class="product-img" href="productlist.php">
<img src="assets/img/product/iphone16.webp" alt="product">
</a>
<a href="productlist.php">iPhone 16</a>
</td>
<td>N/D</td>
<td>128GB</td>
<td>6</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
<?php
include("includes/footer.php");
?>