<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
	<div class="container">
		<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
			<div class="col-first">
				<h1>Shop Category page</h1>
				<nav class="d-flex align-items-center">
					<a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
					<a href="#">Shop<span class="lnr lnr-arrow-right"></span></a>
					<a href="category.html">Fashon Category</a>
				</nav>
			</div>
		</div>
	</div>
</section>
<!-- End Banner Area -->
<div class="container">
	<div class="row">
		<div class="col-xl-3 col-lg-4 col-md-5">
			<div class="sidebar-categories">
				<div class="head">Browse Category</div>
				<ul class="main-categories">
					<?php foreach ($data['category'] as $category) : ?>
						<!-- <li class="main-nav-list"><a data-toggle="collapse" href="<?= BASEURL; ?>/category/detail/<?= $category['CategoryID'] ?>" aria-expanded="false" aria-controls="fruitsVegetable"><?= $category['CategoryName'] ?></a> -->
						<li class="main-nav-list">
							<a href="<?= BASEURL; ?>/category/detail/<?= $category['CategoryID'] ?>"><?= $category['CategoryName'] ?></a>
						</li>
						<!-- <ul class="collapse" id="fruitsVegetable" data-toggle="collapse" aria-expanded="false" aria-controls="fruitsVegetable">
									<li class="main-nav-list child"><a href="#">Frozen Fish<span class="number">(13)</span></a></li>
									<li class="main-nav-list child"><a href="#">Dried Fish<span class="number">(09)</span></a></li>
									<li class="main-nav-list child"><a href="#">Fresh Fish<span class="number">(17)</span></a></li>
									<li class="main-nav-list child"><a href="#">Meat Alternatives<span class="number">(01)</span></a></li>
									<li class="main-nav-list child"><a href="#">Meat<span class="number">(11)</span></a></li>
								</ul> -->
						</li>
					<?php endforeach; ?>
				</ul>
			</div>
		</div>
		<div class="col-xl-9 col-lg-8 col-md-7">
			<!-- Start Filter Bar -->
			<div class="filter-bar d-flex flex-wrap align-items-center">
				<div class="sidebar-categories">
					<h3 class="text-light mt-3">Product List</h3>
				</div>

			</div>
			<!-- End Filter Bar -->
			<!-- Start Best Seller -->
			<section class="lattest-product-area pb-40 category-list">
				<div class="row">
					<!-- single product -->
					<?php foreach ($data['product'] as $product) : ?>
						<div class="col-lg-4 col-md-6">
							<div class="single-product">
								<img src="<?= BASEURL; ?>/img/product/<?= $product['ProductImg'] ?>" alt="" width="100" height="230">
								<div class="product-details">
									<h6><?= $product['ProductName'] ?></h6>
									<div class="price">
										<h6>Rp. <?= $product['ProductPrice'] ?>
									</div>
									<div class="prd-bottom">
										<form action="<?= BASEURL; ?>/cart/tambah" method="post">
											<input type="hidden" name="ProductID" id="ProductID" value="<?= $product['ProductID'] ?>">
											<input type="hidden" name="ProductPrice" id="ProductPrice" value="<?= $product['ProductPrice'] ?>">
											<input type="hidden" name="Quantity" id="Quantity" value="1">
											
											<button type="submit" class="btn btn-secondary mb-2">add to cart</button>
										</form>

										<!-- <a href="" class="social-info">
												<span class="lnr lnr-heart"></span>
												<p class="hover-text">Wishlist</p>
											</a> -->
										<!-- <a href="" class="social-info">
												<span class="lnr lnr-sync"></span>
												<p class="hover-text">compare</p>
											</a> -->
										<a href="<?= BASEURL; ?>/singleProduct/detail/<?= $_SESSION['id'] ?>" class="social-info">
											<span class="lnr lnr-move"></span>
											<p class="hover-text">view more</p>
										</a>
									</div>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</section>
			<!-- End Best Seller -->
			<!-- Start Filter Bar -->
			<!-- <div class="filter-bar d-flex flex-wrap align-items-center">
					<div class="sorting mr-auto">
						<select>
							<option value="1">Show 12</option>
							<option value="1">Show 12</option>
							<option value="1">Show 12</option>
						</select>
					</div>
					<div class="pagination">
						<a href="#" class="prev-arrow"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
						<a href="#" class="active">1</a>
						<a href="#">2</a>
						<a href="#">3</a>
						<a href="#" class="dot-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
						<a href="#">6</a>
						<a href="#" class="next-arrow"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
					</div>
				</div> -->
			<!-- End Filter Bar -->
		</div>
	</div>
</div>