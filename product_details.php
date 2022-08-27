<?php include 'header.php';
include 'dbcon.php'; ?>
<!--================End Main Header Area =================-->
<section class="banner_area">
	<div class="container">
		<div class="banner_text">
			<h3>Product Details</h3>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="product_details.php">Product Details</a></li>
			</ul>
		</div>
	</div>
</section>
<!--================End Main Header Area =================-->

<!--================Product Details Area =================-->
<?php
if (isset($_GET['action']) && $_GET['action'] = "serach") {
	$id = $_GET['id'];
	$sql = "select * from producattype where id = $id";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
?>
	<section class="product_details_area similar_product_area py-5">
		<div class="container">
			<div class="main_title">
				<h2>Producat Details</h2>
			</div>

			<div class="row product_d_price">
				<div class="col-lg-6">
					<div class="product_img"><img class="img-fluid" style="width:100%;" src="<?= str_replace('..', '.', $row['p_img']); ?>" alt="<?= $row['p_name']; ?>"></div>
				</div>
				<div class="col-lg-6">
					<div class="product_details_text">
						<h2 class="pro_head"><?= ucfirst($row['p_name']) ?></h2>
						<p><?= ucfirst($row['p_long_desc']) ?></p>
						<p><span class="text_blue">Verayti : </span> <?= ucfirst($row['p_variety']) ?></p>
						<h5><span class="text_blue">Today Price : </span><span> ₹<?= $row['p_price']; ?></span> <span class="pl-1 fs-5 text-danger text-decoration">₹<?= $row['p_orignal_price']; ?></span></h5>
						<!-- <a class="pink_more" href="cart.php?id=<?= $row['id']; ?>&action=cart">Add to Cart</a> -->
						<a class="pink_more" href="commingsoon.php?action=prod">Add to Cart</a>
					</div>
				</div>
			</div>

		</div>
	</section>
<?php
}
?>
<section class="similar_product_area pb-5 similar">
	<div class="container">
		<div class="main_title">
			<h2>Similar Products</h2>
		</div>
		<div class="row similar_product_inner">
			<?php
			if (isset($_GET['action']) && $_GET['action'] = "serach") {
				$id = $_GET['id'];
				$sql = "select c_id from producattype where id = $id";
				$result = $conn->query($sql);
				$row = $result->fetch_assoc();
				$c_id = $row['c_id'];
				$sqlall = "select * from producattype where c_id = $c_id and  id <> $id";
				$result = $conn->query($sqlall);
				if ($result->num_rows == 0) {
			?><style>
						.similar {
							display: none;
						}
					</style><?php
						}
						while ($rowall = $result->fetch_assoc()) {
                                   
							?>
					<div class="col-lg-3 col-md-4 col-10">
						<div class="cake_feature_item">
							<div class="course_img">
								<div class="image_cover" style=" background:url(<?= str_replace('..', '.', $rowall['p_img']); ?>) no-repeat">
								</div>
							</div>
							<div class="cake_text">
								<h4>₹<?= $rowall['p_orignal_price']; ?></h4>
								<h3><?= ucfirst($rowall['p_name']) ?></h3>
								<p><?= substr(ucfirst($rowall['p_long_desc']), 0, 25) . '...' ?></p>
								<a class="pest_btn" href="product_details.php?id=<?= $rowall['id']; ?>&action=serach">View Details</a>

							</div>
						</div>
					</div>
			<?php
						}
					}
			?>
		</div>
	</div>
</section>
<section class="testimonials_item_area similar_product_area pb-5">
	<div class="container pb-5">
		<div class="main_title">
			<h2>Customer Feedback</h2>
		</div>
		<div class="testi_item_inner">
			<?php
			$p_id = $_GET['id'];
			$sql = "Select * from feedback where p_id = $p_id and feed_isactive = 1 ORDER BY id DESC LIMIT 3";
			$result = $conn->query($sql);
			if ($result->num_rows == 0) {
			?><style>
					.testimonials_item_area {
						display: none;
					}
				</style><?php
					}
						?>

			<?php
			while ($row = $result->fetch_assoc()) {
				$uid = $row['user_id'];
				$sqluser = "Select * from user where id = $uid ";
				$rowuser = $conn->query($sqluser);
				$rowuser = $rowuser->fetch_assoc();
			?>
				<div class="media">
					<div class="media-body pl-3">
						<p class="fs_p">- <?= ucfirst($rowuser['name'])  ?>, <span><?= ucfirst($rowuser['email'])  ?></span></p>
						<p><?= ucfirst($row['feedback'])  ?></p>
						<span class="fs_span">Posted By : <?= ucfirst($row['createdate'])  ?></span>
					</div>
				</div>
			<?php
			}
			?>
		</div>
	</div>
</section>
<!--================End Product Details Area =================-->
<section class="similar_product_area py-5 feedbackfrom">
	<div class="container">
		<div class="main_title">
			<h2>Producat Feedback</h2>
		</div>
		<div class="row">
			<div class="col-lg-8">
				<?php
				if (isset($_SESSION['userlogin'])) {
					$id = $_GET['id'];
					$email = $_SESSION['userdata'];
					$sql = "SELECT * FROM user WHERE email='$email'";
					$result = $conn->query($sql);
					$rowuser = $result->fetch_assoc();
				?>
					<form class="row contact_us_form" action="query.php" method="post" id="contactForm">
						<input type="hidden" value="<?php echo $id; ?>" name="producatid">
						<input type="hidden" value="<?= $rowuser['id']; ?>" name="userid">
						<input type="hidden" value="<?= $rowuser['email']; ?>" name="useremail">
						<div class="form-group col-md-12">
							<textarea class="form-control" name="message" id="message" rows="1" placeholder="Wrtie Feedback"></textarea>
						</div>
						<div class="form-group col-md-12">
							<input type="submit" name="feedback" class="submit_pink" value="Send Feedback">
						</div>
					</form>
				<?php
				} else {
				?>
					<style>
						.feedbackfrom {
							display: none;
						}
					</style>
				<?php
				}
				?>
			</div>
		</div>
	</div>
</section>
<!--================Similar Product Area =================-->

<!--================End Similar Product Area =================-->


<?php include 'footer.php'; ?>