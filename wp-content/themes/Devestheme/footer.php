<!--
    s-footer
    ================================================== -->
    <footer class="s-footer">

        <div class="s-footer__main">
            <div class="row">
                
                <div class="col-two md-four mob-full s-footer__sitelinks">
                        
                    <h4>لینک سریع</h4>

                    <ul class="s-footer__linklist">
                        <li><a href="#0">خانه</a></li>
                        <li><a href="#0">وبلاگ</a></li>
                        <li><a href="#0">استایل</a></li>
                        <li><a href="#0">درباره</a></li>
                        <li><a href="#0">ارتباط با من</a></li>
                        <li><a href="#0">قوانین</a></li>
                    </ul>

                </div> <!-- end s-footer__sitelinks -->

                <div class="col-two md-four mob-full s-footer__archives">
                        
                    <h4>ارشیو</h4>

                    <ul class="s-footer__linklist">
                    <?php wp_nav_menu( array( 'theme_location' => 'footer-menu')); ?>
                    </ul>

                </div> <!-- end s-footer__archives -->

                <div class="col-two md-four mob-full s-footer__social">
                        
                    <h4>شبکه اجتماعی</h4>

                    <ul class="s-footer__linklist">
                        <li><a href="#0">Facebook</a></li>
                        <li><a href="https://instagram.com/iam_deves">Instagram</a></li>
                        <li><a href="#0">Twitter</a></li>
                        <li><a href="#0">Pinterest</a></li>
                        <li><a href="#0">Google+</a></li>
                        <li><a href="https://www.linkedin.com/in/deves-53743b148">LinkedIn</a></li>
                    </ul>

                </div> <!-- end s-footer__social -->

                <div class="col-five md-full end s-footer__subscribe">
                        
                    <h4>دیگر چیز ها</h4>

                    <p>
برای اخبار جدید  ایمیلتان را وارد کنید                    </p>

                    <div class="subscribe-form">
                        <form id="mc-form" class="group" novalidate="true">

                            <input type="email" value="" name="EMAIL" class="email" id="mc-email" placeholder="ادرس ایمیل" required="">
                
                            <input type="submit" name="subscribe" value="ارسال">
                
                            <label for="mc-email" class="subscribe-message"></label>
                
                        </form>
                    </div>

                </div> <!-- end s-footer__subscribe -->

            </div>
        </div> 

    </footer> <!-- end s-footer -->

    <!-- Java Script
    ================================================== -->



<?php wp_footer(); ?>
</body>

</html>