
	<!-- Start related-product Area -->
	<section class="related-product-area section_gap">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6 text-center">
					<div class="section-title">
						<h1>Deals of the Week</h1>
						<p>The Product That has a high Rate</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-9">
					<div class="row">
					<?php foreach( $data['product'] as $product ) : ?>
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
								<a href="#"><img src="<?= BASEURL; ?>/img/product/<?= $product['ProductImg'] ?>" alt="" width="70" height="70"></a>
								<div class="desc">
									<a href="<?= BASEURL; ?>/singleProduct/detail/<?= $product['ProductID'] ?>" class="title"><?= $product['ProductName'] ?></a>
									<div class="price">
										<h6>Rp. <?= $product['ProductPrice'] ?></h6>
									</div>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End related-product Area -->
