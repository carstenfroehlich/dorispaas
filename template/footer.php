        <footer class="footerunhider hidden">
                <img src="<?php echo IMG_PATH; ?>arrow_up.png" />
        </footer>
        <footer class="page-footer doris-paas lighten-1">    
            <div class="container" style="width: 98%;">      
                <div class="row">        
                    <div class="col l7 s12 footer-menu-elements">
                        <div class="row">
                            <div class="col l2 s12">
                                <a class="white-text" href="<?php echo URL_ROOT; ?>sitemap-html">Sitemap</a>
                            </div>
                            <div class="col l4 s12">
                                <a class="white-text" href="<?php echo URL_ROOT; ?>impressum">Impressum/Datenschutz</a>
                            </div>
                            <div class="col l6 s12">
                                 <!-- Cookie Consent by PrivacyPolicies.com https://www.PrivacyPolicies.com -->
                                 <script type="text/javascript" src="//www.privacypolicies.com/public/cookie-consent/4.1.0/cookie-consent.js" charset="UTF-8"></script>
                                 <script type="text/javascript" charset="UTF-8">
                                     document.addEventListener('DOMContentLoaded', function () {
                                         cookieconsent.run({"notice_banner_type":"interstitial","consent_type":"express","palette":"light","language":"de","page_load_consent_levels":["strictly-necessary"],"notice_banner_reject_button_hide":false,"preferences_center_close_button_hide":false,"page_refresh_confirmation_buttons":false,"website_privacy_policy_url":"https://dorispaas.de/datenschutz"});
                                     });
                                 </script>

                                 <noscript>Cookie Consent by <a href="https://www.privacypolicies.com/">Privacy Policies website</a></noscript>
                                 <!-- End Cookie Consent by PrivacyPolicies.com https://www.PrivacyPolicies.com -->
                                 <!-- Below is the link that users can use to open Preferences Center to change their preferences. Do not modify the ID parameter. Place it where appropriate, style it as needed. -->
                                 <a class="white-text" href="#" id="open_preferences_center">Cookie Einstellungen ändern</a>
                            </div>
                    </div>  
                    <div class="col l8 s12">      
                    </div>           
                </div>
                <div class="col l2 s7" style="text-align: right;">
                     <div class="footerhider" style="width: 25px; height: 16px;">
                          <img src="<?php echo IMG_PATH; ?>arrow_down.png" />
                     </div>
                </div>    
            </div>  
        </footer>  
        <!--  Scripts-->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo JS_PATH; ?>bootstrap.min.js?fingerprint=20170806154500"></script>  
        <script src="<?php echo JS_PATH; ?>materialize.js?fingerprint=20170806154500"></script>
        <?php if($ACTION[0] == 'lebensmittel-datenbank') { ?>  
            <script src="<?php echo JS_PATH; ?>browser.js?fingerprint=201708133800"></script>
            <script src="<?php echo JS_PATH; ?>common.js?fingerprint=201708133800"></script>
        <?php } ?>
        <script src="<?php echo JS_PATH; ?>init.js?fingerprint=201708133800"></script>
        <script src="<?php echo JS_PATH; ?>functions.js?fingerprint=20240107164600"></script>
        <script src="<?php echo JS_PATH; ?>jquery.fancybox.min.js"></script>
        <?php if($ACTION[0] == 'lebensmittel-datenbank') { ?>  
            <script type="text/javascript">
                $(document).ready(function() {
         			onLmdbBodyScroll();
                    onLmdbWidthChange();
                });
                (function($) {
                	$(document).ready(function() {
                		$(window).bind('scroll', function() {
                			onLmdbBodyScroll();
                		});
                        $(window).bind('resize', function() {
                			onLmdbWidthChange();
                		});
                    });
                })(jQuery);
            </script>
        <?php } ?>
        <?php if($ACTION[0] == 'subscribe_newsletter') { ?>
            <script type="text/javascript">
                var first = Math.floor(Math.random() * 21);
                var second = Math.floor(Math.random() * 21);
                $(document).ready(function() {
                    $('#first').text(first);
                    $('#second').text(second);
                });
                function newsletter_subscribe() {
                    if($('#secretresult').val() == first + second) {
                        $('form').attr('action', '<?php echo URL_ROOT; ?>subscribe_newsletter/subscribe');
                        $('form').submit();
                    } else {
                        alert('Falsche Eingabe!');
                        window.location.reload(true);
                    }
                }
            </script>
        <?php } ?>
    </body>
</html>

