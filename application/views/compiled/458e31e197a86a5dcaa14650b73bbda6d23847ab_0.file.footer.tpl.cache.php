<?php /* Smarty version 3.1.27, created on 2016-02-14 10:47:05
         compiled from "C:\xampp\htdocs\rekryte\RekryteInfotechFinal\application\views\templates\footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2417156c04d19a677e3_62180940%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '458e31e197a86a5dcaa14650b73bbda6d23847ab' => 
    array (
      0 => 'C:\\xampp\\htdocs\\rekryte\\RekryteInfotechFinal\\application\\views\\templates\\footer.tpl',
      1 => 1455442742,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2417156c04d19a677e3_62180940',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56c04d19a898e1_01333080',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56c04d19a898e1_01333080')) {
function content_56c04d19a898e1_01333080 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2417156c04d19a677e3_62180940';
?>
            <footer id="footer">
                <div class="container">
                    <div class="row">
                        <div class="footer-ribbon">
                            <span>Get in Touch</span>
                        </div>
                        <div class="col-md-3">
                            <div class="newsletter">
                                <h4>Newsletter</h4>
                                <p>Keep up on our always evolving product features and technology. Enter your e-mail and subscribe to our newsletter.</p>
            
                                <div class="alert alert-success hidden" id="newsletterSuccess">
                                    <strong>Success!</strong> You've been added to our email list.
                                </div>
            
                                <div class="alert alert-danger hidden" id="newsletterError"></div>
            
                                <form id="newsletterForm" action="php/newsletter-subscribe.php" method="POST">
                                    <div class="input-group">
                                        <input class="form-control" placeholder="Email Address" name="newsletterEmail" id="newsletterEmail" type="text">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default" id="submit-btn-custom" type="submit">Go!</button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-3">
<!--                             <h4>Latest Tweets</h4>
                            
                            <div id="tweet" class="twitter" data-plugin-tweets data-plugin-options='{"username": "oklerthemes", "count": 2}'>
                            
                                <p>Please wait...</p>
                            </div> -->
                        </div>
                        <div class="col-md-4">
                            <div class="contact-details">
                                <h4>Contact Us</h4>
                                <ul class="contact">
                                    <li><p><i class="fa fa-map-marker"></i> <strong>Address:</strong> 1234 Street Name, City Name, United States</p></li>
                                    <li><p><i class="fa fa-phone"></i> <strong>Phone:</strong> (123) 456-789</p></li>
                                    <li><p><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:mail@example.com">mail@example.com</a></p></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <h4>Follow Us</h4>
                            <ul class="social-icons">
                                <li class="social-icons-facebook"><a href="../../../www.facebook.com/index.htm" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                <li class="social-icons-twitter"><a href="../../../www.twitter.com/index.htm" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                <li class="social-icons-linkedin"><a href="../../../www.linkedin.com/index.htm" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer-copyright">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-1">
                                <a href="index.html" class="logo">
                                    <img alt="Porto Website Template" class="img-responsive" src="img/logo-footer.png">
                                </a>
                            </div>
                            <div class="col-md-7">
                                <p>© Copyright 2015. All Rights Reserved.</p>
                            </div>
                            <div class="col-md-4">
                                <nav id="sub-menu">
                                    <ul>
                                        <li><a href="page-faq.html">FAQ's</a></li>
                                        <li><a href="sitemap.html">Sitemap</a></li>
                                        <li><a href="contact-us.html">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

        <!-- plugins -->
        <?php echo '<script'; ?>
 src="plugins/jquery/jquery.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="plugins/jquery.appear/jquery.appear.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="plugins/jquery.easing/jquery.easing.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="plugins/jquery-cookie/jquery-cookie.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="plugins/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="plugins/common/common.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="plugins/jquery.validation/jquery.validation.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="plugins/jquery.stellar/jquery.stellar.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="plugins/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="plugins/jquery.gmap/jquery.gmap.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="plugins/jquery.lazyload/jquery.lazyload.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="plugins/isotope/jquery.isotope.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="plugins/owl.carousel/owl.carousel.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="plugins/magnific-popup/jquery.magnific-popup.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="plugins/vide/vide.min.js"><?php echo '</script'; ?>
>
        
        <!-- Theme Base, Components and Settings -->
        <?php echo '<script'; ?>
 src="js/theme.js"><?php echo '</script'; ?>
>
        
        <!-- Current Page plugins and Views -->
        <?php echo '<script'; ?>
 src="plugins/rs-plugin/js/jquery.themepunch.tools.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="plugins/circle-flip-slideshow/js/jquery.flipshow.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="js/views/view.home.js"><?php echo '</script'; ?>
>
        
        <!-- Theme Custom -->
        <?php echo '<script'; ?>
 src="js/custom.js"><?php echo '</script'; ?>
>
        
        <!-- Theme Initialization Files -->
        <?php echo '<script'; ?>
 src="js/theme.init.js"><?php echo '</script'; ?>
>

        <?php echo '<script'; ?>
>
            
                (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
            
                ga('create', 'UA-42715764-5', 'auto');
                ga('send', 'pageview');
             
        <?php echo '</script'; ?>
>

    </body>
</html><?php }
}
?>