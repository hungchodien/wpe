</div><!-- .site-content -->


<div class="footer_content content_body w100p  overHiddeni" style="padding-top: 45px; margin-top: -45px;">
    <div class="bg222" >
        <div class=" w100p">
            <div class="text-center center-block" style="background-color: #999999">
                <div class="share-icon">
                    <a href="https://www.facebook.com/bootsnipp">
                        <i class="fa fa-facebook-square fa-1x social"><span style="padding: 10px">Facebook </span></i>

                    </a>
                    <a href="https://twitter.com/bootsnipp">
                        <i class="fa fa-twitter-square fa-1x social"><span style="padding: 10px">Twitter </span></i>

                    </a>
                    <a href="https://plus.google.com/+Bootsnipp-page">
                        <i  class="fa fa-google-plus-square fa-1x social"><span style="padding: 10px">Instagram </span></i>

                    </a>
                    <a href="mailto:bootsnipp@gmail.com">
                        <i class="fa fa-envelope-square fa-1x social"><span style="padding: 10px">Youtube </span></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="w80p mgLautoi mgRautoi bg222">
            <div class="clear">
                <div class="fl w20pPC w30pLTL w40pSTL w100pLMB w100pSMB pdT20 pdB20">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/img/logo.png"/>
                </div>
                <div class="fr w80p w70pLTL w60pSTL w100pLMB w100pSMB  fniSMB fniLMB fniSTL fniLTL">
                    <div class="clear">
                        <div class="displayNoneSMB displayNoneLMB displayNoneSTL displayNoneLTL">
                            <ul class="menu-top-footer" >
                                <li><a>home</a></li>
                                <li><a>concept</a></li>
                                <li><a>interio</a></li>
                                <li><a>style</a></li>
                                <li><a>staff</a></li>
                                <li><a>access</a></li>
                                <li><a>voice</a></li>
                                <li><a>recruit</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="clear">
                        <div class="fl displayNoneSMB displayNoneLMB displayNoneSTL displayNoneLTL">
                            <ul  class="menu-top-footer non-pd-a">
                                <li><a >母のは、感謝の |</a></li>
                                <li><a >ちを野ス |</a></li>
                                <li><a>野くださ</a></li>
                            </ul>
                        </div>
                        <div class="fr fniSMB fniLMB fniSTL fniLTL">
                            <section>
                                <ul  class="menu-top-footer non-pd-a pdLi10">
                                    <li class=" fniSMB fniLMB fniSTL fniLTL blockiSMB blockiLMB blockiSTL blockiLTL"><a class="taliLMB taliSMB">のは、感謝、感謝</a></li>
                                    <li  class=" fniSMB fniLMB fniSTL fniLTL blockiLMB blockiSTL blockiLTL"><a class="taliLMB taliSMB">は 感 謝 野くだ</a></li>
                                    <li  class=" fniSMB fniLMB fniSTL fniLTL blockiLMB blockiSTL blockiLTL"><a class="taliLMB taliSMB">の 感 謝 のは、感謝</a></li>
                                </ul>
                            </section>
                            <section class=" fs10 " style="padding-bottom: 40px;">
                                <div class="copyright">
                                    <div id="copyrecht" class="copyright blue_bg content_body">
                                        <p class="copy_r content_body cwhite">Copyright &copy; <?php echo(date('Y')); ?> . All Rights Reserved.
                                            <span class="webdesign pdB20 cwhite">web design by. <a class="cwhite" href="http://tokyodesignroom.com/" target="_blank">tokyodesignroom</a></span></p>
                                    </div><!--copyright-->
                                </div>
                            </section>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div><!--footer_content-->

</footer><!-- .site-footer -->
<p id="back-top" class="backtop stuck"><a href="#"><span class="glyphicon glyphicon-chevron-up"></span></a></p>
</div><!-- .site -->
<?php wp_footer(); ?>
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $("img.lazy-load").lazyload({
            effect : "fadeIn"
        });

        var options = {
            type: "delay",
            time: 1000,
            scripts: [
                "https://connect.facebook.net/en_EN/all.js#xfbml=1",
                "https://apis.google.com/js/plusone.js",
                "https://platform.twitter.com/widgets.js",
                "https://static.mixi.jp/js/share.js",
                "https://b.st-hatena.com/js/bookmark_button.js"
            ],
            success: function () {
                FB.init({ appId: '899176063532614', status: true, cookie: true, xfbml: true });
            }
        };
        $.lazyscript(options);

    });

    /***** custom toggle ****************/
    jQuery(document).ready(function($) {
        $('#slide-submenu').on('click',function() {
            $(this).closest('.list-group').fadeOut('slide',function(){
                $('.mini-submenu').fadeIn();
            });

        });

        $('.mini-submenu').on('click',function(){
            $(this).next('.list-group').toggle('slide');
            $('.mini-submenu').hide();
        });

    });
    /*************************************/
</script>
<script>

    jQuery(document).ready(function($){

    });
</script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/page/staff.js"></script>
</body>
</html>

