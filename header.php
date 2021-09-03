<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!--  <title>Title</title>     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">-->
<!--    <title>Title</title>-->
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <?php wp_head(); ?>

<!--    --><?php //the_content(); ?>
</head>
<body>
<!--<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Toggle right offcanvas</button>-->

<div aria-labelledby="offcanvasRightLabel" class="offcanvas offcanvas-end d-sm-block d-md-none d-lg-none"
     id="offcanvasRight"
     tabindex="-1">
    <div class="offcanvas-header">
        <h5 id="offcanvasRightLabel">Main Menu</h5>
        <button aria-label="Close" class="btn-close text-reset closebtn" data-bs-dismiss="offcanvas" type="button">
        </button>
    </div>
    <div class="offcanvas-body">
        Menu to be discussed after meeting. :)
    </div>
</div>
<nav class="navbar fixed-top navbar-light bg-light menushadow d-none d-sm-none d-md-none d-lg-block">
<!--    --><?php
//    if(function_exists('the_custom_logo')){
//        $custom_logo_id = get_theme_mod('custom_logo');
//        $logo = wp_get_attachment_image_src($custom_logo_id);
//    }
//    ?>
<!--    <a class="navbar-brand" href="#">-->
<!--        <img alt="" src="--><?php //echo $logo[0]; ?><!--">-->
<!--    </a>-->

    <a class="navbar-brand" href="#">
        <img alt="" src="<?php echo get_template_directory_uri(); ?>/img/Excelsia%20Logo%20S%20Colour.png">
    </a>
    <div class="transparent-headerbar hide-on-small-and-down">
        <!--        <div class="footertrianglefive"></div>-->

<!--        <ul class="topheadermenu hide-on-med-and-down">-->
<!--            <li><span class="stripe"></span></li>-->
<!--            <li style="padding-left: 80px;"><a>Current Student</a></li>-->
<!--            <li><a>Alumni</a></li>-->
<!--            <li><a>Staff</a></li>-->

<!--        </ul>-->
        <?php
        wp_nav_menu(
            array(
                "menu"=>"topprimary",
                'container'=>'',
                'theme_location'=>'topprimary',
                'items_wrap'=>'<ul id="" class="topheadermenu hide-on-med-and-down">
<li><span class="stripe"></span></li><li><a style="padding-left: 60px;"></a>
</li>%3$s<li><a class="enquirybtn"><span>Enquiry</span></a></li><li class="homebutton"><a><i class="material-icons">home</i></a></li></ul>'
            )
        );
        ?>


        <?php
            wp_nav_menu(
                array(
                    "menu"=>"primary",
                    'container'=>'',
                    'theme_location'=>'primary',
                    'main_class' =>'navigation-main',
                    'items_wrap'=>'<ul id="" class="bottomheadermenu">%3$s<li style="padding:0;margin-right:10px;"><a class="searchbox" href="#"></a></li></ul>'
                )
            );
        ?>


<!--        <ul class="bottomheadermenu">-->
<!--            <li><a class="dropmetriger">Study</a></li>-->
<!--            <li><a class="dropmetriger">Research</a></li>-->
<!--            <li><a class="dropmetriger">Partner & Community</a></li>-->
<!--            <li><a class="dropmetriger" style="border:none !important;">About</a></li>-->
<!--        </ul>-->

    </div>

    <div class="container hide dropme">
        <div class="row">
            <div class="col s12 l2">
                <ul class="softmenu">
                    <li><a href="sass.html">Find a course</a></li>
                    <li><a href="badges.html">Why study at Excelsia</a></li>
                    <li><a href="collapsible.html">Career Advice</a></li>
                    <li><a href="collapsible.html">Work Internship</a></li>
                    <li><a href="collapsible.html">Brochures</a></li>
                    <li><a href="collapsible.html">Work and study</a></li>
                </ul>
            </div>
            <div class="col s12 l2">
                <ul class="softmenu">
                    <li><a href="sass.html">Enquiry</a></li>
                    <li><a href="badges.html">Campus Tour</a></li>
                    <li><a href="collapsible.html">Facilities</a></li>
                    <li><a href="collapsible.html">Scholarships</a></li>
                    <li><a href="collapsible.html">Fees</a></li>
                    <li><a href="collapsible.html">Credit Accreditation</a></li>
                </ul>
            </div>
            <div class="col s12 l2">
                <ul class="softmenu">
                    <li><a href="sass.html">How to apply</a></li>
                    <li><a href="badges.html">Application Forms</a></li>
                    <li><a href="collapsible.html">FAQs</a></li>
                    <li><a href="collapsible.html">Key Dates</a></li>
                    <li><a href="collapsible.html">International Students</a></li>
                </ul>
            </div>
            <div class="col s12 l2">
                <ul class="softmenu">
                    <li><a href="sass.html">Early Offer</a></li>
                    <li><a href="badges.html">OZ to LA program</a></li>
                    <li><a href="collapsible.html">Global Audition</a></li>
                    <li><a href="collapsible.html">HSC Master Class</a></li>
                    <li><a href="collapsible.html">Open Day</a></li>
                </ul>
            </div>
            <div class="col s12 l4">
                <div class="softsoial center">

                    <img height="40" src="img/ins.png" width="40"/>
                    <img height="40" src="img/linkedin.png" width="40"/>
                    <img height="40" src="img/utube.png" width="40"/>
                </div>

            </div>
        </div>
    </div>
</nav>

<nav class="navbar navbar-light bg-light d-lg-none d-sm-block d-md-block mobilenav">
    <a class="navbar-brand" href="#">
        <img alt="" src="img/Logo-Horz.png">
    </a>

    <ul class="topmobileheadermenu">
        <li><a><img src="img/Search%20Icon%20Round.png"> </a></li>
        <li><a class="enquirybtn"><span>Enquiry</span></a></li>
        <li><a><img src="img/Home%20copy.png"></a></li>
    </ul>

    <a aria-controls="offcanvasRight" class="menuicon" data-bs-target="#offcanvasRight" data-bs-toggle="offcanvas">

    </a>


    <div class="d-sm-none d-md-none d-lg-none card-in-nav">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <hr>
                    <?php
                    if(is_active_sidebar('aboutintro')){
                        dynamic_sidebar('aboutintro');
                    }
                    ?>
                </div>
            </div>

        </div>
    </div>
    <div class="d-none d-sm-block card-in-nav tab-section">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <hr>
                    <?php
                    if(is_active_sidebar('aboutintro')){
                        dynamic_sidebar('aboutintro');
                    }
                    ?>
                </div>
            </div>

        </div>
    </div>
</nav>
