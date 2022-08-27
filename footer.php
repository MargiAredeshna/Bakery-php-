<?php
$sql = "select facebook,address,Phone,instagram,email  from admin";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {
?>
    <footer class="footer_area">
        <div class="footer_widgets">
            <div class="container">
                <div class="row footer_wd_inner">
                    <div class="col-lg-3 col-6">
                        <aside class="f_widget f_about_widget">
                            <img src="assest/img/footer-logo.png" alt="">
                            <p>Wow every customer every time, through premium products, services, value-for-money driven by innovation, technology & people-first approach.</p>
                            <ul class="nav">

                                <li><a href="<?= $row['facebook']; ?>"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="<?= $row['instagram']; ?>"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="http://localhost/projectsem5/Bakery/"><i class="fa fa-globe"></i></a></li>

                            </ul>
                        </aside>
                    </div>
                    <div class="col-lg-3 col-6">
                        <aside class="f_widget f_link_widget">
                            <div class="f_title">
                                <h3>Quick links</h3>
                            </div>
                            <ul class="list_style">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="cake.php">Our Cakes</a></li>
                                <li><a href="shop.php">Shop</a></li>
                                <li><a href="about_us.php">About Us</a></li>
                                <li><a href="contact.php">Contact Us</a></li>
                            </ul>
                        </aside>
                    </div>
                    <div class="col-lg-3 col-6">
                        <aside class="f_widget f_link_widget">
                            <div class="f_title">
                                <h3>Work Times</h3>
                            </div>
                            <ul class="list_style">
                                <li>8:00 AM - 10:00 PM</li>
                                <li>Monday - Sunday</li>
                                <li>Sun : Closed</li>
                            </ul>
                        </aside>
                    </div>
                    <div class="col-lg-3 col-6">
                        <aside class="f_widget f_contact_widget">
                            <div class="f_title">
                                <h3>Contect Info</h3>
                            </div>
                            <h4><a href="tel:+91<?= $row['Phone']; ?>" style="color:#a8a8a8"><i class="fa fa-phone-square"> </i> +91<?= $row['Phone']; ?></a></h4>
                            <p><i class="fa fa-address-card"> </i> <?= ucfirst($row['address']) ?></p>
                            <h5><a href="mailto:<?= ucfirst($row['email']) ?>" style="color:#a8a8a8"><i class="fa fa-envelope"> </i> <?= ucfirst($row['email']) ?></a></h5>
                        </aside>
                    </div>
                </div>
            </div>
             <div class="container text-center pt-5">
                <P>Copyright ©  Developed by <b>2022-23</b></P>
            </div>
        </div>
    </footer>
<?php } ?>




<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="assest/user/js/jquery-3.2.1.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<!-- <script src="assest/user/js/popper.min.js"></script> -->
<script src="assest/user/js/bootstrap.min.js"></script>
<!-- Rev slider js -->
<script src="assest/user/vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="assest/user/vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="assest/user/vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="assest/user/vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="assest/user/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="assest/user/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="assest/user/vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>

<!-- Extra plugin js -->
<script src="assest/user/vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="assest/user/vendors/magnifc-popup/jquery.magnific-popup.min.js"></script>
<script src="assest/user/vendors/nice-select/js/jquery.nice-select.min.js"></script>
<script src="assest/user/vendors/jquery-ui/jquery-ui.min.js"></script>
<script src="assest/user/vendors/lightbox/simpleLightbox.min.js"></script>


<script src="assest/user/js/theme.js"></script>

<script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js" integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew==" crossorigin=""></script>
<script>
    show_map();

    function show_map() {
        var map = L.map('map').setView([21.1702, 72.8311], 14);
        var tiles = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}', {
            maxZoom: 20,
            subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
        }).addTo(map);
        var schoole = L.icon({
            // iconUrl: 'assest/img/fav-icon.png',
            iconSize: [50, 50],
            iconAnchor: [50, 50],
            popupAnchor: [-3, -76]
        });
        var marker1 = L.marker([21.169056595304397, 72.81734423721879]).addTo(map);
        marker1.bindPopup("Hear Bakery");
        // marker2.bindPopup("Success School 2");
    }
</script>
</body>

</html>