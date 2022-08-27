<?php include 'header.php'; include 'dbcon.php'; ?>
<style>
	.main_header_area{
		z-index: 402;
	}
</style>
<!--================End Main Header Area =================-->
        <section class="banner_area" >
        	<div class="container">
        		<div class="banner_text">
        			<h3>Contact Us</h3>
        			<ul>
        				<li><a href="index.php">Home</a></li>
        				<li><a href="contact.php">Contact Us</a></li>
        			</ul>
        		</div>
        	</div>
        </section>
        <!--================End Main Header Area =================-->
        
        <!--================Contact Form Area =================-->
        <section class="contact_form_area p_100">
        	<div class="container">
        		<div class="main_title">
					<h2>Get In Touch</h2>
					<h5>Do you have anything in your mind to let us know?  Kindly don't delay to connect to us by means of our contact form.</h5>
				</div>
       			<div class="row">
       				<div class="col-lg-7">
       					<form class="row contact_us_form" action="query.php" method="post" id="contactForm">
							<div class="form-group col-md-6">
								<input type="text" class="form-control" id="name" name="name" placeholder="Your name" required>
							</div>
							<div class="form-group col-md-6">
								<input type="email" class="form-control" id="email" name="email" placeholder="Email address" required>
							</div>
							<div class="form-group col-md-12">
								<input type="number" class="form-control" id="phone" name="phone" placeholder="phone" required>
							</div>
							<div class="form-group col-md-12">
								<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
							</div>
							<div class="form-group col-md-12">
								<textarea class="form-control" name="message" id="message" rows="1" placeholder="Wrtie message" required></textarea>
							</div>
							<div class="form-group col-md-12">
								<input type="submit" name="contact" class="submit_pink" value="Submit Now">
							</div>
						</form>
       				</div>
					   <?php
		$sql = "select facebook,address,Phone,instagram,email  from admin";
		$result = $conn->query($sql);
		while ($row = $result->fetch_assoc()) {
		?>
       				<div class="col-lg-4 offset-md-1">
       					<div class="contact_details">
       						<div class="contact_d_item">
       							<h3>Address :</h3>
       							<p><?= ucfirst($row['address']) ?></p>
       						</div>
       						<div class="contact_d_item">
       							<h5>Phone : <a href="tel:+91<?= $row['Phone']; ?>">+91<?= $row['Phone']; ?></a></h5>
       							<h5>Email : <a href="mailto:<?= ucfirst($row['email']) ?>"><?= ucfirst($row['email']) ?></a></h5>
       						</div>
       						<div class="contact_d_item">
       							<h3>Opening Hours :</h3>
       							<p>8:00 AM - 10:00 PM</p>
       							<p>Monday - Sunday</p>
       						</div>
       					</div>
       				</div>
					<?php } ?>
       			</div>
        	</div>
        </section>
        <!--================End Contact Form Area =================-->
        
        <!--================End Banner Area =================-->
        <section class="map_area">
		<div id='map'  style="width: 100%; height: 400px;"></div>
        </section>
        <!--================End Banner Area =================-->
<?php include 'footer.php'; ?>