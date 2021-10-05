<div class="pro-pro" style="text-align:center;"><h3>Product</h3></div>
<br>
<hr>
<br>
<div class="container_pr">
	<div class="row_pr" style="
    flex-wrap: wrap;
    display: flex;">
		<?php foreach ($data as $key => $value) {
			# code...
			?>
			<div class="pr_content">
				<div class="item__product">
					<div class="product__img">
						<a href="?view=product&p=<?php echo $value['id'] ?>">
							<img src="<?php echo url_style ?>img/<?php echo $value['img'] ?>" alt="">
						</a>
					</div>
					<div class="product__detail text-center">
						<div class="product__name">
							<a href="?view=product&p=<?php echo $value['id'] ?>"><?php echo $value['name']; ?></a>
						</div>
                        <div class="shop__view">
							<div class="add__cart">
								<a href=""><i class="bi bi-cart-plus"></i></a>
							</div>
							<div class="show__product__dilog">
								<a href=""><i class="bi bi-eye-fill"></i>
								</a>
							</div>
						</div>
						<div class="product__price">
								<p class="pro__price"><?php echo number_format($value['price'], 0, ',', '.')  ?>VND</p>
						</div>
					</div>
					<div class="add_to_card" style="font-size: 17px;"><h5><a href="# ">ADD TO CARD</a></h5></div>
				</div>
			</div>
		<?php } ?>
	</div>
</div>