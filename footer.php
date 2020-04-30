<!-- Footer Section Begin -->
<footer class="footer-section">
        <div class="container">
            <div class="sponsor-logo owl-carousel">
                <?php 
                    for($num = 1; $num<=43; $num++)
                    echo "<a href='#' class='pl-table'>
                        <div class='pl-tablecell'>
                            <img src='img/sponsors/sponsor_$num.png' alt=''>
                        </div>
                    </a>";
                ?>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-text">
                        <div class="ft-logo">
                            <a href="#" class="footer-logo"><img src="img/footer-logo.png" alt=""></a>
                        </div>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Challenges</a></li>
                            <li><a href="#">Sponsors</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                        <div class="copyright-text"><p>
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
                        <div class="ft-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->