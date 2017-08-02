<!DOCTYPE html>
<!--[if IE 8]> <html <?php language_attributes(); ?> class="ie8"> <![endif]-->
<!--[if !IE]> <html <?php language_attributes(); ?>> <![endif]-->

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <link rel="profile" href="http://gmgp.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> > <!--Thêm class tượng trưng cho mỗi trang lên <body> để tùy biến-->
<div id="container">
    <div class="logo">
        <?php thanhhung_header_logo(); ?>
        <?php thanhhung_wp_nav_menu('primary-menu') ?>
    </div>
    <style>
        .primary-menu ul {
            text-align: left;
            margin: 0;
            padding: 15px 4px 17px 0;
            list-style-type: none;

        }
        .primary-menu ul li {
            font: bold 12px/18px sans-serif;
            display: inline-block;
            margin-right: -4px;
            position: relative;
            padding: 15px 20px;
            margin-left: 3%;
            background-color: bisque;
            cursor: pointer;
            -webkit-transition: all 0.2s;
            -moz-transition: all 0.2s;
            -ms-transition: all 0.2s;
            -o-transition: all 0.2s;
            transition: all 0.2s;
        }
        .primary-menu ul li:hover {
            background: rgb(240, 250 , 250);
            color: #fff;
        }
        .primary-menu ul li ul {
            padding: 0;
            position: absolute;
            top: 48px;
            left: 0;
            width: 150px;
            -webkit-box-shadow: none;
            -moz-box-shadow: none;
            box-shadow: none;
            display: none;
            opacity: 0;
            visibility: hidden;
            -webkit-transiton: opacity 0.2s;
            -moz-transition: opacity 0.2s;
            -ms-transition: opacity 0.2s;
            -o-transition: opacity 0.2s;
            -transition: opacity 0.2s;
        }
        .primary-menu ul li ul li {
            background-color: rgb(240, 250 , 250);
            display: block;
            color: #fff;
            text-shadow: 0 -1px 0 #000;
        }
        .primary-menu ul li ul li:hover { background-color: aqua}
        .primary-menu ul li:hover ul {
            display: block;
            opacity: 1;
            visibility: visible;
        }
        .primary-menu a{
            text-decoration: none;
        }
    </style>