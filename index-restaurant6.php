<!DOCTYPE html>
<html class="no-js"  lang="pt">
<head>
    
    <?php  include('seo.php');?>

    
    <!-- FONTS -->
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Poppins:100,300,400,400italic,500,600,700,700italic,800'>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Cormorant+Garamond:100,300,400,400italic,500,600,700,700italic,800'>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Montserrat:400,400italic,500,700,700italic,900'>

    <!-- CSS -->
    <link rel='stylesheet' href='/template/Nosnegocio/css/global.css'>
    <link rel='stylesheet' href='/template/Nosnegocio/content/restaurant6/css/structure.css'>
    <link rel='stylesheet' href='/template/Nosnegocio/content/restaurant6/css/restaurant6.css'>
    <link rel='stylesheet' href='/template/Nosnegocio/content/restaurant6/css/custom.css'>

    <!-- Revolution Slider -->
    <link rel="stylesheet" href="/template/Nosnegocio/plugins/rs-plugin-6.custom/css/rs6.css">


</head>
<body class="home page template-slider style-simple button-flat layout-full-width one-page if-zoom if-border-hide no-content-padding header-split minimalist-header-no sticky-header sticky-tb-color ab-hide subheader-both-center menu-line-below-80-1 menuo-no-borders footer-copy-center mobile-tb-center mobile-mini-mr-lc tablet-sticky mobile-header-mini mobile-sticky tr-header tr-menu">
    <div id="Wrapper">
        <div id="Header_wrapper">
            <header id="Header">

                <div id="Top_bar">
                    <div class="container">
                        <div class="column one">
                            <div class="top_bar_left clearfix">
                                <div class="logo">
                                    <a id="logo" href="#Header_wrapper" title="BeRestaurant6 - Betheme" data-height="60" data-padding="30">
                                              <img src="<?php if (($company_row['company_header_photo'] == NULL) || empty($company_row['company_header_photo']))
                                                { echo $slash; ?>/images/home/<?php echo $footer_row['header_logo']; }
                                                else{ echo $slash; ?>/images/user/<?php echo $company_row['company_header_photo'];
                                                } ?>" alt="">
                                        </a>
                                </div>
                                <div class="menu_wrapper">
                                    <nav id="menu">
                                        <ul id="menu-menu" class="menu menu-main menu_left">
                                            <li>
                                                <a href="#Header_wrapper"><span>HOME</span></a>
                                            </li>
                                            <li>
                                                <a href="#aboutus"><span>SOBRE NÔS</span></a>
                                            </li>
                                            <li>
                                                <a href="#ourmenu"><span>MENU</span></a>
                                            </li>
                                        </ul>
                                        <ul id="menu-menu-right" class="menu menu-main menu_right">
                                            <li>
                                                <a href="#story"><span>HISTÓRIA</span></a>
                                            </li>
                                            <li>
                                                <a href="#contactus"><span>CONTACTO</span></a>
                                            </li>
                                            <li>
                                                <a target="_blank" href="https://nosnegocio.com/"><span>Nôs Negócio</span></a>
                                            </li>
                                        </ul>
                                    </nav><a class="responsive-menu-toggle" href="#"><i class="icon-menu-fine"></i></a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="mfn-main-slider mfn-rev-slider">
                    <p class="rs-p-wp-fix"></p>
                    <rs-module-wrap id="rev_slider_1_1_wrapper" data-source="gallery" style="background:#252422;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
                        <rs-module id="rev_slider_1_1" style="display:none;" data-version="6.2.2">
                            <rs-slides>
                                <rs-slide data-key="rs-1" data-title="Slide" data-anim="ei:d;eo:d;s:1000;r:0;t:fade;sl:0;">
                                    <img src="/template/Nosnegocio/content/restaurant6/images/rest6-slider-slide111.jpg" data-parallax="5" data-panzoom="d:10000;ss:100;se:120%;" class="rev-slidebg">
                                    <rs-layer id="slider-1-slide-1-layer-3" class="rs-pxl-4" data-type="text" data-color="#ffffff" data-rsp_ch="on" data-xy="x:c;y:c;" data-text="w:normal;s:180;l:180;ls:100px;" data-dim="w:931px;" data-frame_1="sp:430;" data-frame_999="o:0;st:w;sR:8570;"
                                        style="z-index:5;font-family:Cormorant Garamond;">
                                        PASTA
                                    </rs-layer>
                                    <rs-layer id="slider-1-slide-1-layer-8" data-type="image" data-rsp_ch="on" data-xy="x:c;y:b;" data-text="w:normal;" data-dim="w:441px;h:736px;" data-frame_1="st:360;sp:530;sR:360;" data-frame_999="o:0;st:w;sR:8110;" style="z-index:5;"><img src="/template/Nosnegocio/content/restaurant6/images/rest6-forkk.png" width="560" height="934">
                                    </rs-layer>
                                </rs-slide>
                                <rs-slide data-key="rs-2" data-title="Slide" data-anim="ei:d;eo:d;s:1000;r:0;t:fade;sl:0;">
                                    <img src="/template/Nosnegocio/content/restaurant6/images/rest6-slider-slide22.jpg" data-parallax="5" data-panzoom="d:10000;ss:100;se:120%;" class="rev-slidebg">
                                    <rs-layer id="slider-1-slide-2-layer-4" data-type="text" data-color="#ffffff" data-rsp_ch="on" data-xy="x:c;y:c;" data-text="w:normal;s:80;l:100;ls:50px;a:center;" data-dim="w:672px;" data-frame_999="o:0;st:w;" style="z-index:5;font-family:Cormorant Garamond;">
                                        FROM
                                        <br> TUSCANY
                                    </rs-layer>
                                </rs-slide>
                                <rs-slide data-key="rs-3" data-title="Slide" data-anim="ei:d;eo:d;s:1000;r:0;t:fade;sl:0;">
                                    <img src="/template/Nosnegocio/content/restaurant6/images/rest6-slider-slide32.jpg" data-parallax="5" data-panzoom="d:10000;ss:100;se:120%;" class="rev-slidebg">
                                    <rs-layer id="slider-1-slide-3-layer-5" data-type="text" data-color="#ffffff" data-rsp_ch="on" data-xy="x:c;y:c;" data-text="w:normal;s:80;l:96;ls:50px;a:center;" data-dim="w:739px;" data-frame_999="o:0;st:w;" style="z-index:5;font-family:Cormorant Garamond;">
                                        ORIGINAL
                                        <br> ITALIAN
                                        <br> TASTE
                                    </rs-layer>
                                </rs-slide>
                            </rs-slides>
                            <rs-static-layers>
                                <rs-layer id="slider-1-slide-1-layer-0" class="rs-layer-static" data-type="image" data-rsp_ch="on" data-xy="x:30px;y:c;" data-text="w:normal;" data-dim="w:66px;h:66px;" data-actions="o:click;a:jumptoslide;slide:previous;d:200ms;" data-basealign="slide"
                                    data-onslides="s:1;" data-frame_999="o:0;st:w;" style="z-index:9;cursor:pointer;"><img src="/template/Nosnegocio/content/restaurant6/images/rest6-arrow-left.png" width="66" height="66">
                                </rs-layer>
                                <rs-layer id="slider-1-slide-1-layer-1" class="rs-layer-static" data-type="image" data-rsp_ch="on" data-xy="x:r;xo:30px;y:c;" data-text="w:normal;" data-dim="w:66px;h:66px;" data-actions="o:click;a:jumptoslide;slide:next;d:200ms;" data-basealign="slide"
                                    data-onslides="s:1;" data-frame_999="o:0;st:w;" style="z-index:8;cursor:pointer;"><img src="/template/Nosnegocio/content/restaurant6/images/rest6-arrow-right.png" width="66" height="66">
                                </rs-layer>
                            </rs-static-layers>
                            <rs-progress class="rs-bottom" style="visibility: hidden !important;"></rs-progress>
                        </rs-module>

                    </rs-module-wrap>
                </div>
            </header>
        </div>
        <div id="Content">
            <div class="content_wrapper clearfix">
                <div class="sections_group">
                    <div class="entry-content">
                        <div class="section mcb-section no-margin-h no-margin-v dark equal-height-wrap full-width">
                            <div class="section_wrapper mcb-section-inner">
                                <div class="wrap mcb-wrap one-second valign-middle bg-cover move-up clearfix" style="padding:120px 10%;background-color:#252422;margin-top:-60px;background-image:url(/template/Nosnegocio/content/restaurant6/images/rest6-gradient.png);background-repeat:no-repeat;background-position:right top"
                                    data-mobile="no-up">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column five-sixth column_column">
                                            <div class="column_attr clearfix">
                                                <h2> <?php echo $section_home['title'];    ?></h2>
                                                <hr class="no_line" style="margin:0 auto 20px">
                                                <p>
                                                  <?php echo $section_home['text1'];    ?>
                                                </p>
                                                <hr class="no_line" style="margin:0 auto 25px">
                                            </div>
                                        </div>
                                        <div class="column mcb-column one column_image">
                                            <div class="image_frame image_item no_link scale-with-grid no_border">
                                                <div class="image_wrapper"><img class="scale-with-grid" src="/template/Nosnegocio/content/restaurant6/images/rest6-flowers.png">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap mcb-wrap one-second valign-middle bg-cover clearfix" style="padding:120px 0;background-color:#252422;background-image:url(/template/Nosnegocio/content/restaurant6/images/restaurant6-image.jpg);background-repeat:no-repeat;background-position:center">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_image">
                                            <div class="image_frame image_item scale-with-grid aligncenter no_border">
                                                <div class="image_wrapper">
                                                    <a href="https://vimeo.com/27762879" rel="prettyphoto">
                                                        <div class="mask"></div><img class="scale-with-grid" src="/template/Nosnegocio/content/restaurant6/images/rest6-play2.png"></a>
                                                    <div class="image_links">
                                                        <a href="https://vimeo.com/27762879" class="zoom" rel="prettyphoto"><i class="icon-search"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section mcb-section" id="aboutus" style="padding-top:120px">
                            <div class="section_wrapper mcb-section-inner">
                                <div class="wrap mcb-wrap one valign-top clearfix" style="padding:0 1%">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column two-third column_column">
                                            <div class="column_attr clearfix">
                                                <h2>  <?php echo $section_aboutUs['title'];    ?>
                                                 </h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap mcb-wrap one-third valign-top clearfix" style="padding:0 1%">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_flat_box">
                                            <div class="flat_box">
                                                <div class="photo_wrapper">
                                                    <div class="icon themebg" style="background-color:#8b6f5c"><img class="scale-with-grid" src="/template/Nosnegocio/content/restaurant6/images/rest6-icon1.png">
                                                    </div><img class="photo scale-with-grid" src="/template/Nosnegocio/content/restaurant6/images/rest6-home-box1.jpg">
                                                </div>
                                                <div class="desc_wrapper">
                                                    <h4>20 years of
                                                        <br> experience
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap mcb-wrap one-third valign-top clearfix" style="padding:0 1%">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_flat_box">
                                            <div class="flat_box">
                                                <div class="photo_wrapper">
                                                    <div class="icon themebg" style="background-color:#8b6f5c"><img class="scale-with-grid" src="/template/Nosnegocio/content/restaurant6/images/rest6-icon2.png">
                                                    </div><img class="photo scale-with-grid" src="/template/Nosnegocio/content/restaurant6/images/rest6-home-box2.jpg">
                                                </div>
                                                <div class="desc_wrapper">
                                                    <h4>Only fresh Italian
                                                        <br> ingredients
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap mcb-wrap one-third valign-top clearfix" style="padding:0 1%">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_flat_box">
                                            <div class="flat_box">
                                                <div class="photo_wrapper">
                                                    <div class="icon themebg" style="background-color:#8b6f5c"><img class="scale-with-grid" src="/template/Nosnegocio/content/restaurant6/images/rest6-icon-3.png">
                                                    </div><img class="photo scale-with-grid" src="/template/Nosnegocio/content/restaurant6/images/rest6-home-box3.jpg">
                                                </div>
                                                <div class="desc_wrapper">
                                                    <h4>Traditional recipes</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section mcb-section no-margin-h equal-height-wrap full-width" style="padding-top:120px;padding-bottom:80px">
                            <div class="section_wrapper mcb-section-inner">
                                <div class="wrap mcb-wrap one-second valign-middle clearfix">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one-fourth column_placeholder">
                                            <div class="placeholder">
                                                &nbsp;
                                            </div>
                                        </div>
                                        <div class="column mcb-column two-third column_column">
                                            <div class="column_attr clearfix" style="padding:0 8%;">
                                                <h2>We have been
                                                    <br> serving our dishes
                                                    <br> since 1910</h2>
                                                <hr class="no_line" style="margin:0 auto 20px">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore e t enim ad minim veniam, quis nostrud exercitation ullamco quantum presto. Lorem ipsum dolot sit omnia des.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap mcb-wrap one-second valign-middle clearfix" style="padding:50px 0 0 5%">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_image">
                                            <div class="image_frame image_item no_link scale-with-grid alignright no_border">
                                                <div class="image_wrapper"><img class="scale-with-grid" src="/template/Nosnegocio/content/restaurant6/images/rest6-home-forkk.png">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section mcb-section" id="ourmenu" style="padding-top:60px">
                            <div class="section_wrapper mcb-section-inner">
                                <div class="wrap mcb-wrap one valign-top clearfix">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_column">
                                            <div class="column_attr clearfix align_center">
                                                <h1>
                                                    
                                                    <?php echo $section_menu['title'];    ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section mcb-section no-margin-h full-width" style="padding-top:50px">
                            <div class="section_wrapper mcb-section-inner">
                                <div class="wrap mcb-wrap one-fourth valign-top clearfix">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_image">
                                            <div class="image_frame image_item no_link scale-with-grid no_border">
                                                <div class="image_wrapper"><img class="scale-with-grid" src="/template/Nosnegocio/content/restaurant6/images/rest6-pizza.jpg">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap mcb-wrap one-second column-margin-10px valign-top clearfix" style="padding:50px 7% 0">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_image">
                                            <div class="image_frame image_item no_link scale-with-grid aligncenter no_border" style="margin-bottom:20px;">
                                                <div class="image_wrapper"><img class="scale-with-grid" src="/template/Nosnegocio/content/restaurant6/images/rest6-bread-icon.png">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="column mcb-column one column_column column-margin-50px">
                                            <div class="column_attr clearfix align_center">
                                              <h5>STARTERS</h5> 
                                            </div>
                                        </div>
                                        <div class="column mcb-column one column_divider">
                                            <hr style="margin:0 auto 20px;">
                                        </div>
                                        <div class="column mcb-column three-fourth column_column">
                                            <div class="column_attr clearfix mobile_align_center">
                                                <h4>Proin gravida gravida</h4>
                                                <p>
                                                    Lorem ipsum dolor sit amet purus vitae libero lacinia accumsan vitae, dapibus et, tincidunt at, vulputate at sit amet purus vitae.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="column mcb-column one-fourth column_column">
                                            <div class="column_attr clearfix align_right mobile_align_center">
                                                <h3>$23</h3>
                                            </div>
                                        </div>
                                        <div class="column mcb-column one column_divider">
                                            <hr style="margin:0 auto 20px;">
                                        </div>
                                        <div class="column mcb-column three-fourth column_column">
                                            <div class="column_attr clearfix mobile_align_center">
                                                <h4>Mauris pellentesque</h4>
                                                <p>
                                                    Lorem ipsum dolor sit amet purus vitae libero lacinia accumsan vitae, dapibus et, tincidunt at, vulputate at sit amet purus vitae.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="column mcb-column one-fourth column_column">
                                            <div class="column_attr clearfix align_right mobile_align_center">
                                                <h3>$12</h3>
                                            </div>
                                        </div>
                                        <div class="column mcb-column one column_divider">
                                            <hr style="margin:0 auto 20px;">
                                        </div>
                                        <div class="column mcb-column three-fourth column_column">
                                            <div class="column_attr clearfix mobile_align_center">
                                                <h4>Libero lacinia</h4>
                                                <p>
                                                    Lorem ipsum dolor sit amet purus vitae libero lacinia accumsan vitae, dapibus et, tincidunt at, vulputate at sit amet purus vitae.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="column mcb-column one-fourth column_column">
                                            <div class="column_attr clearfix align_right mobile_align_center">
                                                <h3>$16</h3>
                                            </div>
                                        </div>
                                        <div class="column mcb-column one column_divider">
                                            <hr style="margin:0 auto 20px;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section mcb-section no-margin-h full-width" style="padding-top:50px">
                            <div class="section_wrapper mcb-section-inner">
                                <div class="wrap mcb-wrap one-fourth valign-top clearfix">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_placeholder">
                                            <div class="placeholder">
                                                &nbsp;
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap mcb-wrap one-second column-margin-10px valign-top clearfix" style="padding:0 7%">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_image">
                                            <div class="image_frame image_item no_link scale-with-grid aligncenter no_border" style="margin-top:100px;margin-bottom:20px;">
                                                <div class="image_wrapper"><img class="scale-with-grid" src="/template/Nosnegocio/content/restaurant6/images/rest6-pasta-icon.png">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="column mcb-column one column_column column-margin-50px">
                                            <div class="column_attr clearfix align_center">
                                                <h5>PASTA</h5>
                                            </div>
                                        </div>
                                        <div class="column mcb-column one column_divider">
                                            <hr style="margin:0 auto 20px;">
                                        </div>
                                        <div class="column mcb-column three-fourth column_column">
                                            <div class="column_attr clearfix mobile_align_center">
                                                <h4>Proin gravida gravida</h4>
                                                <p>
                                                    Lorem ipsum dolor sit amet purus vitae libero lacinia accumsan vitae, dapibus et, tincidunt at, vulputate at sit amet purus vitae.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="column mcb-column one-fourth column_column">
                                            <div class="column_attr clearfix align_right mobile_align_center">
                                                <h3>$23</h3>
                                            </div>
                                        </div>
                                        <div class="column mcb-column one column_divider">
                                            <hr style="margin:0 auto 20px;">
                                        </div>
                                        <div class="column mcb-column three-fourth column_column">
                                            <div class="column_attr clearfix mobile_align_center">
                                                <h4>Mauris pellentesque</h4>
                                                <p>
                                                    Lorem ipsum dolor sit amet purus vitae libero lacinia accumsan vitae, dapibus et, tincidunt at, vulputate at sit amet purus vitae.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="column mcb-column one-fourth column_column">
                                            <div class="column_attr clearfix align_right mobile_align_center">
                                                <h3>$12</h3>
                                            </div>
                                        </div>
                                        <div class="column mcb-column one column_divider">
                                            <hr style="margin:0 auto 20px;">
                                        </div>
                                        <div class="column mcb-column three-fourth column_column">
                                            <div class="column_attr clearfix mobile_align_center">
                                                <h4>Libero lacinia</h4>
                                                <p>
                                                    Lorem ipsum dolor sit amet purus vitae libero lacinia accumsan vitae, dapibus et, tincidunt at, vulputate at sit amet purus vitae.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="column mcb-column one-fourth column_column">
                                            <div class="column_attr clearfix align_right mobile_align_center">
                                                <h3>$16</h3>
                                            </div>
                                        </div>
                                        <div class="column mcb-column one column_divider">
                                            <hr style="margin:0 auto 20px;">
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap mcb-wrap one-fourth valign-top clearfix">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_image">
                                            <div class="image_frame image_item no_link scale-with-grid no_border">
                                                <div class="image_wrapper"><img class="scale-with-grid" src="/template/Nosnegocio/content/restaurant6/images/rest6-pasta.jpg">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section mcb-section no-margin-h full-width" style="padding-top:50px;padding-bottom:120px">
                            <div class="section_wrapper mcb-section-inner">
                                <div class="wrap mcb-wrap one-fourth valign-top clearfix">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_placeholder">
                                            <div class="placeholder">
                                                &nbsp;
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap mcb-wrap one-second column-margin-10px valign-top clearfix" style="padding:0 7%">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_image">
                                            <div class="image_frame image_item no_link scale-with-grid aligncenter no_border" style="margin-top:100px;margin-bottom:20px;">
                                                <div class="image_wrapper"><img class="scale-with-grid" src="/template/Nosnegocio/content/restaurant6/images/rest6-pizza-icon.png">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="column mcb-column one column_column column-margin-50px">
                                            <div class="column_attr clearfix align_center">
                                                <h5>PIZZA</h5>
                                            </div>
                                        </div>
                                        <div class="column mcb-column one column_divider">
                                            <hr style="margin:0 auto 20px;">
                                        </div>
                                        <div class="column mcb-column three-fourth column_column">
                                            <div class="column_attr clearfix mobile_align_center">
                                                <h4>Proin gravida gravida</h4>
                                                <p>
                                                    Lorem ipsum dolor sit amet purus vitae libero lacinia accumsan vitae, dapibus et, tincidunt at, vulputate at sit amet purus vitae.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="column mcb-column one-fourth column_column">
                                            <div class="column_attr clearfix align_right mobile_align_center">
                                                <h3>$23</h3>
                                            </div>
                                        </div>
                                        <div class="column mcb-column one column_divider">
                                            <hr style="margin:0 auto 20px;">
                                        </div>
                                        <div class="column mcb-column three-fourth column_column">
                                            <div class="column_attr clearfix mobile_align_center">
                                                <h4>Mauris pellentesque</h4>
                                                <p>
                                                    Lorem ipsum dolor sit amet purus vitae libero lacinia accumsan vitae, dapibus et, tincidunt at, vulputate at sit amet purus vitae.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="column mcb-column one-fourth column_column">
                                            <div class="column_attr clearfix align_right mobile_align_center">
                                                <h3>$12</h3>
                                            </div>
                                        </div>
                                        <div class="column mcb-column one column_divider">
                                            <hr style="margin:0 auto 20px;">
                                        </div>
                                        <div class="column mcb-column three-fourth column_column">
                                            <div class="column_attr clearfix mobile_align_center">
                                                <h4>Libero lacinia</h4>
                                                <p>
                                                    Lorem ipsum dolor sit amet purus vitae libero lacinia accumsan vitae, dapibus et, tincidunt at, vulputate at sit amet purus vitae.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="column mcb-column one-fourth column_column">
                                            <div class="column_attr clearfix align_right mobile_align_center">
                                                <h3>$16</h3>
                                            </div>
                                        </div>
                                        <div class="column mcb-column one column_divider">
                                            <hr style="margin:0 auto 75px;">
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap mcb-wrap one valign-top clearfix" style="padding:0 5%">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column two-fifth column_placeholder">
                                            <div class="placeholder">
                                                &nbsp;
                                            </div>
                                        </div>
                                        <div class="column mcb-column one-fifth column_button">
                                            <div class="button_align align_center">
                                                <a class="button scroll button_full_width button_size_2 button_js" href="#contactus" style="background-color:#8b6f5c!important;color:#fff;"><span class="button_label">BOOK A TABLE</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section mcb-section dark full-screen bg-cover" id="story" style="padding-top:200px;padding-bottom:170px;background-color:#2d2b2a;background-image:url(/template/Nosnegocio/content/restaurant6/images/rest6-toscania.jpg);background-repeat:no-repeat;background-position:center;background-attachment:fixed;background-size:cover">
                            <div class="section_wrapper mcb-section-inner">
                                <div class="wrap mcb-wrap one valign-top clearfix">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_column">
                                            <div class="column_attr clearfix align_center">
                                                <h1>Our every meal has
                                                    <br> its own unique story we want
                                                    <br> to share with you</h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section mcb-section no-margin-h full-width">
                            <div class="section_wrapper mcb-section-inner">
                                <div class="wrap mcb-wrap one-fifth valign-top move-up clearfix" style="margin-top:-100px" data-mobile="no-up">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_image">
                                            <div class="image_frame image_item no_link scale-with-grid no_border">
                                                <div class="image_wrapper"><img class="scale-with-grid" src="/template/Nosnegocio/content/restaurant6/images/rest6-spices.jpg">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap mcb-wrap  two-fifth valign-top clearfix" style="padding:100px 2% 0 7%">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_column">
                                            <div class="column_attr clearfix">
                                                <h2>Tuscany's tradition
                                                    <br> on your plate</h2>
                                                <hr class="no_line" style="margin:0 auto 30px">
                                                <p>
                                                    <strong>Praesent nec magna ac pede. Mauris suscipit mauris.</strong> Nam dolore erat id tortor. Phasellus at nibh nulla nulla, egestas quam eutore. Lorem ipsum dolor sit amet, consectetur adipisicing
                                                    elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                                    in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                                </p>
                                                <hr class="no_line" style="margin:0 auto 10px">
                                                <p>
                                                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem<strong> accusantium doloremque</strong>                                                    laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut
                                                    fugit, sed <u>quia consequuntur magni dolores</u> eos qui ratione voluptatem sequi nesciunt. <strong>Neque porro quisquam</strong> est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,
                                                    sedrat voluptatem.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap mcb-wrap  two-fifth valign-top clearfix" style="padding:100px 0 0 7%">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_image">
                                            <div class="image_frame image_item no_link scale-with-grid no_border">
                                                <div class="image_wrapper"><img class="scale-with-grid" src="/template/Nosnegocio/content/restaurant6/images/rest6-mozarella.jpg">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section mcb-section" style="padding-top:120px;padding-bottom:100px">
                            <div class="section_wrapper mcb-section-inner">
                                <div class="wrap mcb-wrap one valign-top clearfix">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_column">
                                            <div class="column_attr clearfix align_center">
                                                <h2>Tradition passed thru generations</h2>
                                            </div>
                                        </div>
                                        <div class="column mcb-column one column_divider">
                                            <hr class="no_line" style="margin:0 auto 30px">
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap mcb-wrap one-second valign-top clearfix" style="padding:0 3%">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_column">
                                            <div class="column_attr clearfix">
                                                <p>
                                                    Vivamus in diam turpis. In condimentum maximus tristique. Maecenas non laoreet odio. Fusce lobortis porttitor purus, vel vestibulum libero pharetra vel. Pellentesque lorem augue, fermentum nec nibh et, fringilla sollicitudin orci. Integer pharetra magna
                                                    non ante blandit lobortis. Sed mollis consequat eleifend. Aliquam consectetur orci eget dictum tristique. Aenean et sodales est, ut vestibulum lorem. Curabitur sed iaculis dolor, non congue ligula.
                                                </p>
                                                <hr class="no_line" style="margin:0 auto 10px">
                                                <p>
                                                    <strong>Nam lacinia suscipit accumsan</strong>. Donec sodales, neque vitae rutrum convallis, nulla tortor pharetra odio, in varius ante ante sed nisi. Orci varius natoque penatibus et magnis dis parturient
                                                    montes, nascetur ridiculus mus.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap mcb-wrap one-second valign-top clearfix" style="padding:0 3%">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_column">
                                            <div class="column_attr clearfix">
                                                <p>
                                                    Aliquam consectetur <u>orci eget dictum tristique</u>. Aenean et sodales est, ut vestibulum lorem. Curabitur sed iaculis dolor, non congue ligula.
                                                </p>
                                                <hr class="no_line" style="margin:0 auto 10px">
                                                <p>
                                                    Nam lacinia suscipit accumsan. <strong>Donec sodales, neque vitae rutrum convallis</strong>, nulla tortor pharetra odio, in varius ante ante sed nisi. Orci varius natoque penatibus et magnis dis parturient
                                                    montes, nascetur ridiculus mus. Vivamus in diam turpis. In condimentum maximus tristique. Maecenas non laoreet odio. Fusce lobortis porttitor purus, vel vestibulum libero pharetra vel. Pellentesque lorem
                                                    augue, fermentum nec nibh et, fringilla sollicitudin orci. Integer pharetra magna non ante blandit lobortis. Sed mollis consequat eleifend.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section mcb-section dark bg-cover" id="contactus" style="padding-top:120px;padding-bottom:75px;background-color:#2d2b2a;background-image:url(/template/Nosnegocio/content/restaurant6/images/rest6-bottom-sec-gra.jpg);background-repeat:no-repeat;background-position:center top">
                            <div class="section_wrapper mcb-section-inner">
                                <div class="wrap mcb-wrap one valign-top clearfix">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_column">
                                            <div class="column_attr clearfix align_center">
                                                <h1
                                                  <?php echo $section_contactUs['title']  ?> 
                                
                                                </h1>
                                                <hr class="no_line" style="margin:0 auto 50px">
                                                <a href="<?php echo $company_row['company_facebook']; ?>" class="icon_bar icon_bar_facebook icon_bar_small">
                                                    <span class="t"> <i class="icon-facebook"> </i></span><span class="b"><i class="icon-facebook"></i></span>
                                                </a>
                                                <a href="<?php echo $company_row['company_instagram']; ?>" class="icon_bar icon_bar_instagram icon_bar_small">
                                                    <span class="t"><i class="icon-instagram"></i></span><span class="b"><i class="icon-instagram"></i></span>
                                                </a>
                                                <a href="#" class="icon_bar icon_bar_twitter icon_bar_small">
                                                    <span class="t"><i class="icon-twitter"></i></span><span class="b"><i class="icon-twitter"></i></span>
                                                </a>
                                                <a href="<?php echo $company_row['company_youtube']; ?>" class="icon_bar icon_bar_vimeo icon_bar_small">
                                                    <span class="t"><i class="icon-vimeo"></i></span><span class="b"><i class="icon-vimeo"></i></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="column mcb-column one column_divider">
                                            <hr class="no_line" style="margin:0 auto 60px">
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap mcb-wrap one-third valign-top clearfix">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column five-sixth column_column">
                                            <div class="column_attr clearfix">
                                                <h6><strong>Opening hours</strong></h6>
                                                <hr class="no_line" style="margin:0 auto 20px">
                                                <p>
                                                    Mauris neque. Pellentesque dolor. Mauris in est. Vivamus lacus sed
                                                </p>
                                                <hr class="no_line" style="margin:0 auto 20px">
                                                <div class="opening_hours">
                                                    <div class="opening_hours_wrapper">
                                                        <ul style="margin-left:0;">
                                                            <li>
                                                                <label>Monday - Friday</label><span>8<sup>00</sup> - 16<sup>00</sup></span>
                                                            </li>
                                                            <li>
                                                                <label>Saturday</label><span>8<sup>00</sup> - 15<sup>00</sup></span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap mcb-wrap  two-third valign-top clearfix">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_column">
                                            <div class="column_attr clearfix">
                                                <div id="contactWrapper">
                                                   <!-- <form id="contactform" > -->
                                                    <form name="home_enquiry_form" id="home_enquiry_form" method="post"  enctype="multipart/form-data">
                                                        <input type="hidden" class="form-control" name="listing_id" value="0"  placeholder="" required>
                                                        <input type="hidden" class="form-control" name="listing_user_id" value="0" placeholder="" required>
                                                        <input type="hidden" class="form-control" name="enquiry_sender_id" value="" placeholder="" required>
                                                        <input type="hidden" class="form-control" name="enquiry_source"
                                                               value="<?php if (isset($_GET["src"])) {  echo $_GET["src"]; } else { echo "Website"; }; ?>" placeholder="" required>
                                                            
                                                        <!-- One Second (1/2) Column -->
                                                        <div class="column one-second">
                                                            <input placeholder="<?php echo $BIZBOOK['LEAD-NAME-PLACEHOLDER']; ?>"type="text" name="enquiry_name" id="ic-user" size="40" aria-required="true" aria-invalid="false" value="" />
                                                        </div>
                                                        <!-- One Second (1/2) Column -->
                                                        <div class="column one-second">
                                                            <input placeholder="Your e-mail" type="email" name="email" id="email" size="40" aria-required="true" aria-invalid="false" />
                                                        </div>
                                                        <div class="column one">
                                                            <input placeholder="Subject" type="text" name="subject" id="subject" size="40" aria-invalid="false" />
                                                        </div>
                                                        <div class="column one">
                                                            <textarea placeholder="Message" name="body" id="body" style="width:100%;" rows="10" aria-invalid="false"></textarea>
                                                        </div>
                                                        <div class="column one">
                                                            <input type="button" value="Send A Message" id="submit" onClick="return check_values();">
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section mcb-section dark full-screen bg-cover" style="padding-top:200px;padding-bottom:170px;background-color:#2d2b2a;background-image:url(/template/Nosnegocio/content/restaurant6/images/rest6-bottom-restaurant.jpg);background-repeat:no-repeat;background-position:center;background-attachment:fixed;background-size:cover">
                            <div class="section_wrapper mcb-section-inner">
                                <div class="wrap mcb-wrap one valign-top clearfix">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_column">
                                            <div class="column_attr clearfix align_center">
                                                <h1>Call us
                                                    <br> and book your table for tonight
                                                    <br> +34 594 399 222</h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <footer id="Footer" class="clearfix">
            <div class="widgets_wrapper">
                <div class="container">
                    <div class="column one">
                        <aside class="widget_text widget widget_custom_html">
                            <div class="textwidget custom-html-widget">
                                <div style="text-align:center; padding:0 10%">
                                    <div class="image_frame image_item no_link scale-with-grid alignnone no_border">
                                        <div class="image_wrapper"><img class="scale-with-grid" src="/template/Nosnegocio/content/restaurant6/images/restaurant6_logo_2x.png">
                                        </div>
                                    </div>
                                    <hr class="no_line" style="margin:0 auto 90px">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                        in reprehenderit
                                    </p>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
            <div class="footer_copy">
                <div class="container">
                    <div class="column one">
                        <a id="back_to_top" class="button button_js" href><i class="icon-up-open-big"></i></a>
                        <div class="copyright">
                            &copy; 2022 NôsRestaurant6 -Nôs Negócio. Desenvolvido por <a target="_blank" rel="nofollow" href="https://nosnegocio.com/">Nôs Negócio</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script src="/template/Nosnegocio/js/jquery-3.6.0.min.js"></script>
	<script src="/template/Nosnegocio/js/jquery-migrate-3.3.2.js"></script>
 
   <!-- <script src="/template/Nosnegocio/js/mfn.menu.js"></script> -->
    <script src="/template/Nosnegocio/js/jquery.plugins.js"></script>
    <script src="/template/Nosnegocio/js/jquery.jplayer.min.js"></script>
    <script src="/template/Nosnegocio/js/animations/animations.js"></script>
    <script src="/template/Nosnegocio/js/translate3d.js"></script>
    <script src="/template/Nosnegocio/js/scripts.js"></script>
    <script src="/template/Nosnegocio/js/email.js"></script>

    <script src="/template/Nosnegocio/plugins/rs-plugin-6.custom/js/revolution.tools.min.js"></script>
    <script src="/template/Nosnegocio/plugins/rs-plugin-6.custom/js/rs6.min.js"></script>
    
    <script>
	var revapi1, tpj;
		jQuery(function() {
			tpj = jQuery;
			if (tpj("#rev_slider_1_1").revolution == undefined) {
				revslider_showDoubleJqueryError("#rev_slider_1_1");
			} else {
				revapi1 = tpj("#rev_slider_1_1").show().revolution({
					sliderLayout :"fullwidth",
					duration :"4000ms",
					visibilityLevels :"1240,1024,778,480",
					gridwidth : 1240,
					gridheight : 900,
					spinner :"spinner9",
					editorheight :"900,768,960,720",
					responsiveLevels :"1240,1024,778,480",
					disableProgressBar :"on",
					navigation : {
						onHoverStop : false
					},
					parallax : {
						levels : [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 51, 30],
						type :"scroll",
						origo :"slidercenter",
						speed : 0
					},
					fallbacks : {
						allowHTML5AutoPlayOnAndroid : true
					},
				});
			}
		});
    </script>
    
  </body>

</html>