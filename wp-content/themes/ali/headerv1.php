<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" class="ie" dir="ltr" lang="en-US">
<![endif]-->
<!--[if IE 7]>
<html id="ie7" class="ie" dir="ltr" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html id="ie8" class="ie" dir="ltr" lang="en-US">
<![endif]-->
<!--[if IE 9]>
<html class="ie" dir="ltr" lang="en-US">
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html  <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/selectivizr.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/css3-mediaqueries.js" type="text/javascript"></script>
    <![endif]-->
    <!--[if lt IE 10]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/matchMedia.js" type="text/javascript"></script>
    <![endif]-->
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/customslider.js"></script>

    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jssorSlider.js"></script>
    <link rel="stylesheet" href = "<?php echo get_template_directory_uri(); ?>/css/customstyle.css">
    <link rel="stylesheet" href = "<?php echo get_template_directory_uri(); ?>/css/page/staff.css">
    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>





<div id="page" class="hfeed site">
    <header id="masthead" class="site-header top_head" role="banner">

        <div class="header_top grau_bg">

            <div class="content_body head_content">
                <div class="container clear w1180iPC w100p pdLR0iPC pdTB20iPC pdLR0iLTL pdTB10iLTL ">

                    <div class="fl w40piSMB">
                        <a href="<?php echo get_option('home'); ?>/" class="">
                            <img class="img_logo w76piSMB " src="<?php echo get_bloginfo('template_directory'); ?>/img/logo.png" alt="<?php bloginfo( 'name' ); ?>" title="" />
                        </a>
                    </div>

                    <div class="fr w60piSMB">

                        <div class="clear  fr">

                            <div class="header-logo-left"   >
                                <p class="blocki displayNoneLTL displayNoneSTL displayNoneLMB displayNoneSMB">に感謝致しまして、夏の感謝祭を実施 PC に感謝致しまして、</p>
                                <img class="blocki displayNoneLTL displayNoneSTL displayNoneSMB displayNoneLMB" src="<?php echo get_bloginfo('template_directory'); ?>/img/head-tel-pc.png" alt="<?php bloginfo( 'name' ); ?>" title="" />
                                <img class="blocki displayNonePC " src="<?php echo get_bloginfo('template_directory'); ?>/img/head-tel-mobile.png" alt="<?php bloginfo( 'name' ); ?>" title="" />
                                <a class="blocki btn overHiddeni pd0i" href="https://cs.appnt.me/facebook/page_tab/855?stand_alone=1">
                                    <img class=" h30iPC mgT-30iPC h30iLTL mgT-30iLTL  w100p hAutoi displayNoneLTL displayNoneSTL displayNoneSMB displayNoneLMB" src="<?php echo get_bloginfo('template_directory'); ?>/img/head-button-reservation-pc.png" alt="<?php bloginfo( 'name' ); ?>" title="" />
                                    <img class="displayNonePC" src="<?php echo get_bloginfo('template_directory'); ?>/img/button-reservation-mobile.png" alt="<?php bloginfo( 'name' ); ?>" title="" />
                                </a>
                            </div>
                        </div>

                        <div class="mobile R-menu-custom logo-menu-top">

                            <a href="<?php echo get_option('home'); ?>/">
                                <img class="img_contact" src="<?php echo get_bloginfo('template_directory'); ?>/img/head-tel-mobile.png" alt="<?php bloginfo( 'name' ); ?>" title="" />
                                <a class="logo-right-menu">
                                    <img class="img_contact  btn-menu" src="<?php echo get_bloginfo('template_directory'); ?>/img/button-reservation-mobile.png" alt="<?php bloginfo( 'name' ); ?>" title="" />
                                </a>

                            </a>

                        </div>

                    </div><!--nav_header_r-->

                </div>
            </div>
        </div>



        <div class="menu-toggle" >
            <div class="">
                <div class="">
                    <nav style="background-color: rgb(250, 255, 255)!important;border-radius: 0px" class="navbar navbar-default-custom mg0 overHiddeni" role="navigation">
                        <div style="margin-left: auto; margin-right: auto" class="w1180iPC w100p pd0i overHiddeni">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header text-center">
                                <button type="button" class="navbar-toggle fni " data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="glyphicon glyphicon-align-justify"></span>
                                    <span class="navmenu">Menu</span>
                                </button>
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse pd0i overHiddeni" id="bs-example-navbar-collapse-1">

                                <?php
                                wp_nav_menu(array(
                                    'theme_location' => 'Top-menus-Toggle',
                                    'menu_class' => 'nav navbar-nav menu_custom_top',
                                    'menu_id' => 'main-nav ',
                                    'container'       => 'li',
                                    'link_before' => '',
                                    'link_after' => '',
                                    'walker' => new CSS_Menu_Maker_Walker()
                                ));
                                ?>

                            </div><!-- /.navbar-collapse -->
                        </div><!-- /.container-fluid -->
                    </nav>
                </div>
            </div>
        </div>

    </header><!-- .site-header -->

    <div id="content_main" class="site-public">

        <?php if(is_home() ):?>

        <?php else: ?>
            <div class="breadcrumbs grau_bg content_body">
                <div class="container clear">
                    <?php if(function_exists('bcn_display'))
                    {
                        bcn_display();
                    }?>
                </div>
            </div>

        <?php endif; ?>
