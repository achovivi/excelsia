<div class="footers">
    <div class="d-none d-lg-block page-footer">

        <div class="footerTtriangleone"></div>
        <div class="footerTtriangletwo"></div>

        <div class="row bottommenut">
            <div class="col-sm-12 col-lg-2 center-on-small-only">
                <a class="" href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/image001.png"/>
                </a>
            </div>
            <div class="col-sm-12 col-lg-2">

                <?php
                wp_nav_menu(
                    array(
                        "menu"=>"footerCol1",
                        'container'=>'',
                        'theme_location'=>'footerCol1',
                        'items_wrap'=>'<ul id=""class="">%3$s</ul>'
                    )
                );
                ?>




<!--                <ul>-->
<!--                    <li>Study</li>-->
<!--                    <li>Courses</li>-->
<!--                    <li>Enquiries</li>-->
<!--                    <li>How to Apply</li>-->
<!--                    <li>Fees & Scholarships</li>-->
<!--                    <li>Career Advice</li>-->
<!--                    <li>Credit Accreditation</li>-->
<!--                    <li>Campus Tour</li>-->
<!--                    <li>Student Support</li>-->
<!--                    <li>Facilities</li>-->
<!--                </ul>-->
            </div>
            <div class="col-sm-12 col-lg-2">
                <?php
                wp_nav_menu(
                    array(
                        "menu"=>"footerCol2",
                        'container'=>'',
                        'theme_location'=>'footerCol2',
                        'items_wrap'=>'<ul id=""class="">%3$s</ul>'
                    )
                );
                ?>

<!--                <ul>-->
<!--                    <li>Current Students</li>-->
<!--                    <li>Library</li>-->
<!--                    <li>Excelsia Online Portal</li>-->
<!--                    <li>Student Admin Forms</li>-->
<!--                    <li>Timetable</li>-->
<!--                    <li>Orientation</li>-->
<!--                    <li>Graduation</li>-->
<!--                    <li>Internship Support</li>-->
<!--                    <li>Student Feedback</li>-->
<!--                    <li>Student Handbooks</li>-->
<!--                </ul>-->
            </div>
            <div class="col-sm-12 col-lg-2">

                <?php
                wp_nav_menu(
                    array(
                        "menu"=>"footerCol3",
                        'container'=>'',
                        'theme_location'=>'footerCol3',
                        'items_wrap'=>'<ul id=""class="">%3$s</ul>'
                    )
                );
                ?>

<!--                <ul>-->
<!--                    <li>Our Mission</li>-->
<!--                    <li>Meet Our Board</li>-->
<!--                    <li>Acknowledge of Country</li>-->
<!--                    <li>Accreditation</li>-->
<!--                    <li>Donations</li>-->
<!--                    <li>Partnerships</li>-->
<!--                    <li>Academic Staff</li>-->
<!--                    <li>Staff Resources</li>-->
<!--                </ul>-->
            </div>

            <div class="col-sm-12 col-lg-2">

                <?php
                wp_nav_menu(
                    array(
                        "menu"=>"footerCol4",
                        'container'=>'',
                        'theme_location'=>'footerCol4',
                        'items_wrap'=>'<ul id=""class="">%3$s</ul>'
                    )
                );
                ?>
            </div>
            <div class="col-sm-12 col-lg-2">
                <?php
                wp_nav_menu(
                    array(
                        "menu"=>"footerCol5",
                        'container'=>'',
                        'theme_location'=>'footerCol5',
                        'items_wrap'=>'<ul id=""class="">%3$s</ul>'
                    )
                );
                ?>
            </div>
            <div class="socialicons largedevice">

                <?php
                wp_nav_menu(
                    array(
                        "menu"=>"socialmenue",
                        'container'=>'',
                        'theme_location'=>'socialmenue',
                        'items_wrap'=>'<ul id=""class="socialicon">%3$s</ul>'
                    )
                );
                ?>

<!--                <ul>-->
<!--                    <li>-->
<!--                        <img src="--><?php //echo get_template_directory_uri(); ?><!--/img/FB%20icon.png">-->
<!--                        <i class="fa fa-facebook-square" aria-hidden="true"></i>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <img src="img/Ins%20icon.png">-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <img src="img/Linkedin%20Icon.png">-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <img src="img/Youtube%20icon.png">-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <img src="img/Linkedin%20Icon.png">-->
<!--                    </li>-->
<!--                </ul>-->
            </div>
            <hr class="col-sm-12">
            <div class="col-sm-12 text-center bottomtext">
                <p>
                    <?php
                    if(is_active_sidebar('sitefootertext')){
                        dynamic_sidebar('sitefootertext');
                    }
                    ?>
                </p>
            </div>
        </div>
    </div>

    <div class="d-lg-none mobilefooter page-footer">

        <div class="row bottommenut">
            <div class="col-sm-12 col-lg-2 center-on-small-only">
                <a class="brand-pic" href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/image001.png"/>
                </a>
            </div>
            <div class="dividing-logo"></div>
            <div class="col-4">
                <?php
                wp_nav_menu(
                    array(
                        "menu"=>"mobilefooterCol1",
                        'container'=>'',
                        'theme_location'=>'mobilefooterCol1',
                        'items_wrap'=>'<ul id=""class="">%3$s</ul>'
                    )
                );
                ?>
            </div>
            <div class="col-4">
                <?php
                wp_nav_menu(
                    array(
                        "menu"=>"mobilefooterCol2",
                        'container'=>'',
                        'theme_location'=>'mobilefooterCol2',
                        'items_wrap'=>'<ul id=""class="">%3$s</ul>'
                    )
                );
                ?>
            </div>
            <div class="col-4">
                <?php
                wp_nav_menu(
                    array(
                        "menu"=>"mobilefooterCol3",
                        'container'=>'',
                        'theme_location'=>'mobilefooterCol3',
                        'items_wrap'=>'<ul id=""class="">%3$s</ul>'
                    )
                );
                ?>
            </div>

            <!--            <div class="col-4">-->
            <!--                <ul>-->
            <!--                    <li>Alumni</li>-->
            <!--                    <li>Staff</li>-->
            <!--                    <li>Research</li>-->
            <!--                    <li>Resources</li>-->
            <!--                    <li>Policy & Procedures</li>-->
            <!--                    <li>WHS</li>-->
            <!--                    <li>Wellbeing and Safety</li>-->
            <!--                </ul>-->
            <!--            </div>-->
            <!--            <div class="col-4">-->
            <!--                <ul>-->
            <!--                    <li>News</li>-->
            <!--                    <li>Media Enquiries</li>-->
            <!--                    <li>Events</li>-->
            <!--                    <li>Careers in Excelsia</li>-->
            <!--                    <li>Contact</li>-->
            <!--                    <li>Emergency</li>-->
            <!--                </ul>-->
            <!--            </div>-->


            <div class="d-sm-none socialicons">

                <?php
                wp_nav_menu(
                    array(
                        "menu"=>"socialmenue",
                        'container'=>'',
                        'theme_location'=>'socialmenue',
                        'items_wrap'=>'<ul id=""class="socialiconmobile">%3$s</ul>'
                    )
                );
                ?>

            </div>
            <div class="d-none d-sm-block tab-socials socialicons">

                <?php
                wp_nav_menu(
                    array(
                        "menu"=>"socialmenue",
                        'container'=>'',
                        'theme_location'=>'socialmenue',
                        'items_wrap'=>'<ul id=""class="socialicon">%3$s</ul>'
                    )
                );
                ?>

            </div>
            <hr class="col-sm-12">
            <div class="col-sm-12 text-center bottomtext">
                <p>
                    <?php
                    if(is_active_sidebar('sitefootertext')){
                        dynamic_sidebar('sitefootertext');
                    }
                    ?>
                </p>
            </div>
        </div>
    </div>
</div>



<img class="livechatbtn d-none d-lg-block" src="img/LiveChat.png"/>

<?php wp_footer(); ?>

</body>
</html>
