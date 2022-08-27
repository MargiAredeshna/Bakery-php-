<?php
include 'dbcon.php';
include "header.php";
?>
<!--================End Main Header Area =================-->
<section class="banner_area">
	<div class="container">
		<div class="banner_text">
			<h3>Our Cakes</h3>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="cake.php">Our Cake</a></li>
			</ul>
		</div>
	</div>
</section>
<!--================End Main Header Area =================-->

<!--================Blog Main Area =================-->
<section class="our_cakes_area p_100">
	<div class="container">
		<div class="main_title">
			<h2>Our All Category</h2>
		</div>
		<div class="cake_feature_row row">
			<?php
			$sql = "select * from productcategory where isactive = 1";
			$result = $conn->query($sql);
			while ($row = $result->fetch_assoc()) {
			?>
				<div class="col-lg-3 col-md-4 col-6">
					<div class="cake_feature_item">
						<div class="course_img">
							<div class="image_cover" style="background:url(<?= str_replace('..', '.', $row['img']); ?>) no-repeat">
							</div>
						</div>
						<div class="cake_text">
							<h3><?= ucwords($row['categoryname']) ?></h3>
							<a class="pest_btn" href="shop.php?catid=<?= $row['id']; ?>&action=serach">View Category</a>
						</div>
					</div>
				</div>

			<?php }

			?>
		</div>
	</div>
</section>
<!--================End Blog Main Area =================-->



<!--================Special Recipe Area =================-->
<section class="special_recipe_area">
	<div class="container">
		<div class="special_recipe_slider owl-carousel">
			<?php
			$sql = "select * from productcategory where isactive = 1 ORDER BY id DESC LIMIT 3";
			$result = $conn->query($sql);
			while ($row = $result->fetch_assoc()) {
			?>
				<div class="item">
					<div class="media">
						<div class="d-flex">
							<img src="<?= str_replace('..', '.', $row['img']); ?>" alt="logo for" class="sraimg">
						</div>
						<div class="media-body">
							<h4><?=$row['categoryname'];?></h4>
							<a class="w_view_btn" href="shop.php?catid=<?= $row['id']; ?>&action=serach">View Category</a>

						</div>
					</div>
				</div>

			<?php }

			?>

		</div>
	</div>
</section>
<!--================End Special Recipe Area =================-->


<!--================End Client Says Area =================-->
<section class="our_chef_area p_100">
	<div class="container">
		<div class="row our_chef_inner">
			<div class="col-lg-3 col-6">
				<div class="chef_text_item">
					<div class="main_title">
						<h2>Our Chefs</h2>
						<p>Our chiefs are our chefs, but can the comprehend how to make a good recipe of policies that makes the world a better place of greater wellness for all?</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-6">
				<div class="chef_item">
					<div class="chef_img">
						<img class="img-fluid" src="assest/img/chef-2.jpg" alt="chefone">
						<ul class="list_style">
							<h4>Harmit Davra</h4>						
							<h5>Expert in Cake Making</h5>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-6">
				<div class="chef_item">
					<div class="chef_img">
						<img class="img-fluid" src="assest/img/chef-1.jpg" alt="cheftwo">
						<ul class="list_style">
							<h4>Margi Ardeshna</h4>						
							<h5>Expert in Photo Cake Making</h5>
						</ul>
					</div>
				</div>
			</div>			
			<div class="col-lg-3 col-6">
				<div class="chef_item">
					<div class="chef_img">
						<img class="img-fluid" src="assest/img/chef-3.jpg" alt="chefthree">
						<ul class="list_style">
							<h4>Dipesh Vekriya</h4>						
							<h5>Expert in Wedding Cake Making</h5>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--================End Client Says Area =================-->
<?php include "footer.php"; ?>