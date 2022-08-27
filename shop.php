<?php include 'header.php';
include 'dbcon.php'; ?>
<!--================End Main Header Area =================-->
<section class="banner_area">
	<div class="container">
		<div class="banner_text">
			<h3>Shop</h3>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="shop.php">Shop</a></li>
			</ul>
		</div>
	</div>
</section>
<!--================End Main Header Area =================-->

<!--================Product Area =================-->
<section class="product_area p_100">
		<div class="container">
		<div class="main_title">
			<h2>Our All Producats</h2>
		</div>
		<div class="row product_inner_row">
			<div class="col-lg-9">
				<div class="row similar_product_inner">
					<?php
					if (isset($_GET['action']) && $_GET['action'] == "serach") {
						$id = $_GET['catid'];
						$sql = "select * from producattype where c_id = $id and p_isactive = 1";
						$serach = $conn->query($sql);
						while ($row = $serach->fetch_assoc()) {
					?>
							<div class="col-lg-4 col-md-4 col-10">
						<div class="cake_feature_item">
							<div class="course_img">
								<div class="image_cover" style=" background:url(<?= str_replace('..', '.', $row['p_img']); ?>) no-repeat">
								</div>
							</div>
							<div class="cake_text">
								<h4>₹<?= $row['p_orignal_price'];?></h4>
								<h3><?= ucwords($row['p_name'])?></h3>
								<p><?= substr(ucwords($row['p_long_desc']),0,30).'...'?></p>
								<a class="pest_btn" href="product_details.php?id=<?= $row['id'];?>&action=serach">View Details</a>
							</div>
						</div>
					</div>
						<?php
						}
					} else {
						$sql = "SELECT P.id, P.p_name, P.p_long_desc ,P.p_img ,P.p_orignal_price, P.p_price, P.p_variety, P.p_createdate, P.p_updatedate,P.offer,C.categoryname,C.id as catid FROM producattype AS P INNER JOIN productcategory AS C ON P.c_id=C.id WHERE C.isactive=1 and P.p_isactive = 1 ";
						$serach = $conn->query($sql);
						while ($row = $serach->fetch_assoc()) {
						    $len = strlen($row['p_name']);
						?>
							<div class="col-lg-4 col-md-4 col-10">
						<div class="cake_feature_item">
							<div class="course_img">
								<div class="image_cover" style=" background:url(<?= str_replace('..', '.', $row['p_img']); ?>) no-repeat">
								</div>
							</div>
							<div class="cake_text">
								<h4>₹<?= $row['p_orignal_price']; ?></h4>
								<h3><?php 
								    if($len > 25){
								      echo substr(ucwords($row['p_name']),0,25).'...';
								    }else{
								     echo ucwords($row['p_name']);
								    }
								?></h3>
								<p><?= substr(ucwords($row['p_long_desc']),0,30).'...'?></p>
								<a class="pest_btn" href="product_details.php?id=<?= $row['id'];?>&action=serach">View Details</a>
							</div>
						</div>
					</div>
					<?php
						}
					}
					?>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="product_left_sidebar">	
					<aside class="left_sidebar p_catgories_widget">
						<div class="p_w_title">
							<h3>Product Categories</h3>
						</div>
						<ul class="list_style overfllow">
							<li><a href="shop.php" class="text-capitalize">All<span>(<?php
										$sqlall = "SELECT count(P.id) FROM producattype AS P INNER JOIN productcategory AS C ON P.c_id=C.id WHERE C.isactive=1 and P.p_isactive = 1";
										$resultall = $conn->query($sqlall);
										$resultall = $resultall->fetch_row();
										print_r($resultall[0]);
										?>)</span></a></li>
							<?php
							$sql = "select * from productcategory where isactive = 1";
							$result = $conn->query($sql);
							while ($row = $result->fetch_assoc()) {
							?>
								<li>
									<a href="shop.php?catid=<?= $row['id']; ?>&action=serach" class="text-capitalize"><?= ucwords($row['categoryname'])?> 
									<span>(<?php
											$cid = $row['id'];
											$sqlcount = "SELECT count(c_id) from producattype WHERE c_id=$cid and p_isactive = 1";
											$resultcount = $conn->query($sqlcount);
											while ($rowcount = $resultcount->fetch_assoc()) {
												print_r($rowcount['count(c_id)']);
											}
											?>)
									</span></a>
								</li>

							<?php }
							?>
						</ul>
					</aside>
					<aside class="left_sidebar p_sale_widget">
						<div class="p_w_title">
							<h3>Our Latest  Producat</h3>
						</div>
						<div class="media">
								<div class="media-body">
						<?php
						$sql = "SELECT * FROM producattype AS P INNER JOIN productcategory AS C ON P.c_id=C.id WHERE C.isactive=1 and P.p_isactive = 1 ORDER BY P.id DESC LIMIT 3";
						$result = $conn->query($sql);
						while ($row = $result->fetch_assoc()) {
						?>
							
									<ul class="list_style d-flex justify-content-between">
										<li><a href="product_details.php?id=<?= $row['id'];?>&action=serach"><h4 class="text-capitalize"><?= ucwords($row['p_name'])?></h4></a></li><li><span class="text-dark ">₹<?= $row['p_orignal_price'];?></span></li>
									</ul>
									<ul class="list_style text_left">
										<li><i class="fa fa-star text-warning"></i></li>
										<li><i class="fa fa-star text-warning"></i></li>
										<li><i class="fa fa-star text-warning"></i></li>
										<li><i class="fa fa-star-o"></i></li>
										<li><i class="fa fa-star-o"></i></li>
									</ul>
									
						

						<?php }
						?>
		                        </div>
						</div>
					</aside>
				</div>
			</div>
		</div>
	</div>
</section>
<!--================End Product Area =================-->

<?php include 'footer.php'; ?>