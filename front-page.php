<?php
get_header();
?>
    <main class="paddingclass d-none d-lg-block d-md-block">
        <div class="mobile-top-holders d-lg-none">

        </div>
        <section class="firstsectionholder d-none d-sm-none d-md-none d-lg-block">
            <section class="firstsection">
                <div class="container-fluid">


                    <div class="row">
                        <div class="col-xs-12 col-md-4 col col1">
                            <hr>
                            <?php
                            if (is_active_sidebar('aboutintro')) {
                                dynamic_sidebar('aboutintro');
                            }
                            ?>
                        </div>
                        <div class="col-xs-12 col-md-8 studybanner col">
                            <?php
                            if (is_active_sidebar('aboutintroimagesection')) {
                                $sd = dynamic_sidebar('aboutintroimagesection');
                            }
                            ?>
                            <img alt="" class="img-fluid" src="img/About%20Banner.png">
                        </div>
                    </div>


                </div>
            </section>
            <div class="triangleside">

            </div>
        </section>

        <section class="breadcrome">
            <div class="container-fluid">
                <div class="row">
                    <p class="col-12 col-sm-12 col-md-12 col-lg-12">
                      <span style="color:#555;text-decoration: underline">
                            Excelsia College > Study
                        </span>
                    </p>
                </div>
            </div>
        </section>


        <section>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <ul class="tablemenu">

                            <?php

                            $arg = array(
                                'category_name' => 'abouttop'
                            );
                            $query = new WP_Query($arg);

                            if ($query->have_posts()):
                                while ($query->have_posts()):
                                    $query->the_post();
//                        print_r($query);
                                    ?>
                                    <li class="listimage">
                                        <img src="<?php the_post_thumbnail_url(); ?>">
                                    </li>
                                    <li class="listcontent">
                            <span class="">
                                     <span class="listmenuheader">
                               <?php the_title(); ?>
                           </span>
                                <span class="listcontentholder">
                               <span class="listmenucontent">
                               <?php the_content(); ?>
                           </span>
                               <a href="<?php the_permalink(); ?>" class="learnmoretext">
                               Learn More
                           </a>
                           </span>
                            </span>
                                    </li>
                                    <li class="seperator"></li>
                                <?php
                                endwhile;
                            else:
                                echo "<li>Please add a post with a category / slug of abouttop</li>";
                            endif;
                            ?>


                            <!--                        <li class="listimage">-->
                            <!--                            <img src="img/About-icon%20board.png">-->
                            <!--                        </li>-->
                            <!--                        <li class="listcontent">-->
                            <!--                            <span class="">-->
                            <!--                                     <span class="listmenuheader">-->
                            <!--                                Meet our Board-->
                            <!--                           </span>-->
                            <!--                                <span class="listcontentholder">-->
                            <!--                               <span class="listmenucontent">-->
                            <!--                               Meet our academic board and board of Directors. Excelsia College (ACN 110 639 435) is a registered public company limited by guarantee in the State of New South Wales, Australia, under the Corporations Act 2001.-->
                            <!---->
                            <!--                           </span>-->
                            <!--                               <span class="learnmoretext">-->
                            <!--                               Learn More-->
                            <!--                           </span>-->
                            <!--                           </span>-->
                            <!--                            </span>-->
                            <!--                        </li>-->
                            <!--                        <li class="seperator"></li>-->
                            <!---->
                            <!---->
                            <!--                        <li class="listimage">-->
                            <!--                            <img src="img/About-icon%20Ack.png">-->
                            <!--                        </li>-->
                            <!--                        <li class="listcontent">-->
                            <!--                            <span class="">-->
                            <!--                                     <span class="listmenuheader">-->
                            <!--                               Acknowledgement of Country-->
                            <!--                           </span>-->
                            <!--                                <span class="listcontentholder">-->
                            <!--                               <span class="listmenucontent">-->
                            <!--                             Excelsia College would like to acknowledge the Traditional Owners of country, the Wallumattagal (or Wallumedegal) people of the Eora Nation, on which our campus is situated.-->
                            <!--                           </span>-->
                            <!--                               <span class="learnmoretext">-->
                            <!--                               Learn More-->
                            <!--                           </span>-->
                            <!--                           </span>-->
                            <!--                            </span>-->
                            <!--                        </li>-->
                            <!--                        <li class="seperator"></li>-->
                            <!---->
                            <!---->
                            <!--                        <li class="listimage">-->
                            <!--                            <img src="img/About-icon%20Staff.png">-->
                            <!--                        </li>-->
                            <!--                        <li class="listcontent">-->
                            <!--                            <span class="">-->
                            <!--                                     <span class="listmenuheader">-->
                            <!--                               Academic Staff-->
                            <!--                           </span>-->
                            <!--                                <span class="listcontentholder">-->
                            <!--                               <span class="listmenucontent">-->
                            <!--                               Find out more about our academic staff.-->
                            <!--                           </span>-->
                            <!--                               <span class="learnmoretext">-->
                            <!--                               Learn More-->
                            <!--                           </span>-->
                            <!--                           </span>-->
                            <!--                            </span>-->
                            <!--                        </li>-->
                            <!--                        <li class="seperator"></li>-->

                        </ul>


                        <div class="list-spacing">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                                    <div class="center-holder redholder">

                                        <?php
                                        if (is_active_sidebar('boxbeforeimagethirdrow')) {
                                            dynamic_sidebar('boxbeforeimagethirdrow');
                                        }
                                        ?>

                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-3 pix-holder">
                                    <?php
                                    if (is_active_sidebar('imageafterboxbeforeimagethirdrow')) {
                                        dynamic_sidebar('imageafterboxbeforeimagethirdrow');
                                    }
                                    ?>

                                    <!--                                <img alt="..." class="img-fluid rounded-start" src="img/Sharethe%20light%20BW.jpg">-->
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                    <div class="card mb-3 body-holder" style="">
                                        <div class="row g-0">
                                            <div class="col-md-12">
                                                <div class="card-body">

                                                    <?php

                                                    $arg = array(
                                                        'category_name' => 'aboutcardsection'
                                                    );
                                                    $query = new WP_Query($arg);


                                                    if ($query->have_posts()):
                                                        while ($query->have_posts()):
                                                            $query->the_post();

                                                            ?>

                                                            <img src="<?php the_post_thumbnail_url(); ?>">
                                                            <h5 class="card-title main-headingqueen"><?php the_title(); ?></h5>

                                                            <p class="card-text"><?php the_content(); ?></p>
                                                        <?php
                                                        endwhile;
                                                    else:
                                                        echo "<p class='card-text'>Please add a post with a category / slug of aboutcardsectionf</p>";
                                                    endif;
                                                    ?>
                                                    <p class="card-text">
                                                <span class="learnmoretext">
                                                   Learn More
                                                </span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!--                        <div class="col-12 col-sm-12 col-md-6 col-lg-3">-->

                                <!--                            <img src="img/Sharethe%20light%20BW.jpg">-->
                                <!--                        </div>-->

                                <!--                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 shadow-lg">-->

                                <!--                            <h2>Hailey McQueen</h2>-->
                                <!--                            <h4>School of Creative & Performing Art</h4>-->

                                <!--                            Meet Hailey McQueen, the winner of 2nd quarter 2021…-->

                                <!--                            <p>-->
                                <!--                                <span class="learnmoretext">-->
                                <!--                                    Learn More-->
                                <!--                                </span>-->
                                <!--                            </p>-->
                                <!--                        </div>-->

                            </div>
                        </div>

                        <ul class="tablemenu">

                            <?php

                            $arg = array(
                                'category_name' => 'aboutbottom'
                            );
                            $query = new WP_Query($arg);


                            if ($query->have_posts()):
                                while ($query->have_posts()):
                                    $query->the_post();
//                        print_r($query);
                                    ?>
                                    <li class="listimage">
                                        <img src="<?php the_post_thumbnail_url(); ?>">
                                    </li>
                                    <li class="listcontent">
                            <span class="">
                                     <span class="listmenuheader">
                               <?php the_title(); ?>
                           </span>
                                <span class="listcontentholder">
                               <span class="listmenucontent">
                               <?php the_content(); ?>
                           </span>
                                 <a href="<?php the_permalink(); ?>" class="learnmoretext">
                               Learn More
                           </a>
                           </span>
                            </span>
                                    </li>
                                    <li class="seperator"></li>
                                <?php
                                endwhile;
                            else:
                                echo "<li>Please add a post with a category / slug of abouttop</li>";
                            endif;
                            ?>

                            <!--                        <li class="listimage">-->
                            <!--                            <img src="img/About-icon%20curriculum.png">-->
                            <!--                        </li>-->
                            <!--                        <li class="listcontent">-->
                            <!--                            <span class="">-->
                            <!--                                     <span class="listmenuheader">-->
                            <!--                                Core Curriculum-->
                            <!--                           </span>-->
                            <!--                                <span class="listcontentholder">-->
                            <!--                               <span class="listmenucontent">-->
                            <!--                               Excelsia College aims to provide excellence in higher education within a distinctive Christian framework. Every university and college works out-->
                            <!--                                   of a particular worldview which integrates knowledge with action, and information with personal formation.-->
                            <!--                           </span>-->
                            <!--                               <span class="learnmoretext">-->
                            <!--                               Learn More-->
                            <!--                           </span>-->
                            <!--                           </span>-->
                            <!--                            </span>-->
                            <!--                        </li>-->
                            <!--                        <li class="seperator"></li>-->
                            <!---->
                            <!---->
                            <!--                        <li class="listimage">-->
                            <!--                            <img src="img/About-icon%20career.png">-->
                            <!--                        </li>-->
                            <!--                        <li class="listcontent">-->
                            <!--                            <span class="">-->
                            <!--                                     <span class="listmenuheader">-->
                            <!--                                Careers-->
                            <!--                           </span>-->
                            <!--                                <span class="listcontentholder">-->
                            <!--                               <span class="listmenucontent">-->
                            <!--                               Excelsia College is committed to recruiting and selecting staff with the capabilities, experience and potential required to achieve the College’s-->
                            <!--                                   strategic goals, find out the career opportunities we have for you…-->
                            <!--                           </span>-->
                            <!--                               <span class="learnmoretext">-->
                            <!--                               Learn More-->
                            <!--                           </span>-->
                            <!--                           </span>-->
                            <!--                            </span>-->
                            <!--                        </li>-->
                            <!--                        <li class="seperator"></li>-->
                            <!---->
                            <!---->
                            <!--                        <li class="listimage">-->
                            <!--                            <img src="img/About-icon%20donation.png">-->
                            <!--                        </li>-->
                            <!--                        <li class="listcontent">-->
                            <!--                            <span class="">-->
                            <!--                                     <span class="listmenuheader">-->
                            <!--                               Acknowledgement of Country-->
                            <!--                           </span>-->
                            <!--                                <span class="listcontentholder">-->
                            <!--                               <span class="listmenucontent">-->
                            <!--                                   Education is an important mission field for Christians today. We recognise that we have a distinct opportunity to make a significant impact on the-->
                            <!--                                   next generation and we invite you to partner with us in God’s work.-->
                            <!---->
                            <!--                               </span>-->
                            <!--                               <span class="learnmoretext">-->
                            <!--                               Learn More-->
                            <!--                           </span>-->
                            <!--                           </span>-->
                            <!--                            </span>-->
                            <!--                        </li>-->
                            <!--                        <li class="seperator"></li>-->
                            <!---->
                            <!---->
                            <!--                        <li class="listimage">-->
                            <!--                            <img src="img/About-icon%20resources.png">-->
                            <!--                        </li>-->
                            <!--                        <li class="listcontent">-->
                            <!--                            <span class="">-->
                            <!--                                     <span class="listmenuheader">-->
                            <!--                               Resources-->
                            <!--                           </span>-->
                            <!--                                <span class="listcontentholder">-->
                            <!--                               <span class="listmenucontent">-->
                            <!--                               Please find the resources of Excelsia College…-->
                            <!--                           </span>-->
                            <!--                               <span class="learnmoretext">-->
                            <!--                               Learn More-->
                            <!--                           </span>-->
                            <!--                           </span>-->
                            <!--                            </span>-->
                            <!--                        </li>-->
                            <!--                        <li class="seperator"></li>-->
                            <!---->
                            <!---->
                            <!--                        <li class="listimage">-->
                            <!--                            <img src="img/About-icon%20Finance.png">-->
                            <!--                        </li>-->
                            <!--                        <li class="listcontent">-->
                            <!--                            <span class="">-->
                            <!--                                     <span class="listmenuheader">-->
                            <!--                               Financial Statement-->
                            <!--                           </span>-->
                            <!--                                <span class="listcontentholder">-->
                            <!--                               <span class="listmenucontent">-->
                            <!--                              Please find the Financial Statement of Excelsia College…-->
                            <!--                           </span>-->
                            <!--                               <span class="learnmoretext">-->
                            <!--                               Learn More-->
                            <!--                           </span>-->
                            <!--                           </span>-->
                            <!--                            </span>-->
                            <!--                        </li>-->
                            <!--                        <li class="seperator"></li>-->
                            <!---->
                            <!--                        <li class="listimage">-->
                            <!--                            <img src="img/About-icon%20accreditation.png">-->
                            <!--                        </li>-->
                            <!--                        <li class="listcontent">-->
                            <!--                            <span class="">-->
                            <!--                                     <span class="listmenuheader">-->
                            <!--                              Accreditation-->
                            <!--                           </span>-->
                            <!--                                <span class="listcontentholder">-->
                            <!--                               <span class="listmenucontent">-->
                            <!--                              Excelsia College is a Higher Education Provider registered with the Tertiary Education Quality and Standards Agency, approved to offer FEE-HELP,-->
                            <!--                                   Youth Allowance, Austudy and Abstudy, and registered to offer courses to international students (CRICOS Provider Code 02664K).-->
                            <!--                           </span>-->
                            <!--                               <span class="learnmoretext">-->
                            <!--                               Learn More-->
                            <!--                           </span>-->
                            <!--                           </span>-->
                            <!--                            </span>-->
                            <!--                        </li>-->
                            <!--                        <li class="seperator"></li>-->
                        </ul>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <main class="d-lg-none d-md-none">
        <div class="mobile-top-holders d-lg-none">

        </div>
        <section class="firstsectionholder d-none d-sm-none d-md-none d-lg-block">
            <section class="firstsection">
                <div class="container-fluid">


                    <div class="row">
                        <div class="col-xs-12 col-md-4 col col1">
                            <hr>
                            <?php
                            if (is_active_sidebar('aboutintro')) {
                                dynamic_sidebar('aboutintro');
                            }
                            ?>
                        </div>
                        <div class="col-xs-12 col-md-8 studybanner col">
                            <img alt="" class="img-fluid" src="img/About%20Banner.png">
                        </div>
                    </div>

                </div>
            </section>
            <div class="triangleside">

            </div>
        </section>

        <section class="breadcrome">
            <div class="container-fluid">
                <div class="row">
                    <p class="col-12 col-sm-12 col-md-12 col-lg-12">
                      <span style="color:#555;text-decoration: underline">
                            Excelsia College > Study
                        </span>
                    </p>
                </div>
            </div>
        </section>

        <section>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <ul class="tablemenu">
                            <?php

                            $arg = array(
                                'category_name' => 'abouttop'
                            );
                            $query = new WP_Query($arg);


                            if ($query->have_posts()):
                                while ($query->have_posts()):
                                    $query->the_post();
//                        print_r($query);
                                    ?>
                                    <li class="listimage">
                                        <img src="<?php the_post_thumbnail_url(); ?>">
                                    </li>
                                    <li class="listcontent">
                            <span class="">
                                     <span class="listmenuheader">
                               <?php the_title(); ?>
                           </span>
                                <span class="listcontentholder">
                               <span class="listmenucontent">
                               <?php the_content(); ?>
                           </span>
                               <span class="learnmoretext">
                               Learn More
                           </span>
                           </span>
                            </span>
                                    </li>
                                    <li class="seperator"></li>
                                <?php
                                endwhile;
                            else:
                                echo "<li>Please add a post with a category / slug of abouttop</li>";
                            endif;
                            ?>


                            <!--                        <li class="listimage">-->
                            <!--                            <img src="img/About-icon%20board.png">-->
                            <!--                        </li>-->
                            <!--                        <li class="listcontent">-->
                            <!--                            <span class="">-->
                            <!--                                     <span class="listmenuheader">-->
                            <!--                                Meet our Board-->
                            <!--                           </span>-->
                            <!--                                <span class="listcontentholder">-->
                            <!--                               <span class="listmenucontent">-->
                            <!--                               Meet our academic board and board of Directors. Excelsia College (ACN 110 639 435) is a registered public company limited by guarantee in the State of New South Wales, Australia, under the Corporations Act 2001.-->
                            <!---->
                            <!--                           </span>-->
                            <!--                               <span class="learnmoretext">-->
                            <!--                               Learn More-->
                            <!--                           </span>-->
                            <!--                           </span>-->
                            <!--                            </span>-->
                            <!--                        </li>-->
                            <!--                        <li class="seperator"></li>-->
                            <!---->
                            <!---->
                            <!--                        <li class="listimage">-->
                            <!--                            <img src="img/About-icon%20Ack.png">-->
                            <!--                        </li>-->
                            <!--                        <li class="listcontent">-->
                            <!--                            <span class="">-->
                            <!--                                     <span class="listmenuheader">-->
                            <!--                               Acknowledgement of Country-->
                            <!--                           </span>-->
                            <!--                                <span class="listcontentholder">-->
                            <!--                               <span class="listmenucontent">-->
                            <!--                             Excelsia College would like to acknowledge the Traditional Owners of country, the Wallumattagal (or Wallumedegal) people of the Eora Nation, on which our campus is situated.-->
                            <!--                           </span>-->
                            <!--                               <span class="learnmoretext">-->
                            <!--                               Learn More-->
                            <!--                           </span>-->
                            <!--                           </span>-->
                            <!--                            </span>-->
                            <!--                        </li>-->
                            <!--                        <li class="seperator"></li>-->
                            <!---->
                            <!---->
                            <!--                        <li class="listimage">-->
                            <!--                            <img src="img/About-icon%20Staff.png">-->
                            <!--                        </li>-->
                            <!--                        <li class="listcontent">-->
                            <!--                            <span class="">-->
                            <!--                                     <span class="listmenuheader">-->
                            <!--                               Academic Staff-->
                            <!--                           </span>-->
                            <!--                                <span class="listcontentholder">-->
                            <!--                               <span class="listmenucontent">-->
                            <!--                               Find out more about our academic staff.-->
                            <!--                           </span>-->
                            <!--                               <span class="learnmoretext">-->
                            <!--                               Learn More-->
                            <!--                           </span>-->
                            <!--                           </span>-->
                            <!--                            </span>-->
                            <!--                        </li>-->
                            <!--                        <li class="seperator"></li>-->

                        </ul>


                        <div class="list-spacing">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                                    <div class="center-holder redholder">
                                        <h6>Excelsia</h6>
                                        <h4>Excellence in</h4>
                                        <h2 class="middleheading">TEACHING</h2>
                                        <h2>AWARDS</h2>
                                        <h6>Quarter 2 2021</h6>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-3 pix-holder">
                                    <img alt="..." class="img-fluid rounded-start" src="img/Sharethe%20light%20BW.jpg">
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                    <div class="card mb-3 body-holder" style="">
                                        <div class="row g-0">
                                            <div class="col-md-12">
                                                <div class="card-body">
                                                    <h5 class="card-title main-headingqueen">Hailey McQueen</h5>
                                                    <h5 class="card-title main-subheadingqueen">School of Creative &
                                                        Performing Art</h5>
                                                    <p class="card-text">Meet Hailey McQueen, the winner of 2nd quarter
                                                        2021…</p>
                                                    <p class="card-text">
                                                <span class="learnmoretext">
                                                   Learn More
                                                </span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!--                        <div class="col-12 col-sm-12 col-md-6 col-lg-3">-->

                                <!--                            <img src="img/Sharethe%20light%20BW.jpg">-->
                                <!--                        </div>-->

                                <!--                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 shadow-lg">-->

                                <!--                            <h2>Hailey McQueen</h2>-->
                                <!--                            <h4>School of Creative & Performing Art</h4>-->

                                <!--                            Meet Hailey McQueen, the winner of 2nd quarter 2021…-->

                                <!--                            <p>-->
                                <!--                                <span class="learnmoretext">-->
                                <!--                                    Learn More-->
                                <!--                                </span>-->
                                <!--                            </p>-->
                                <!--                        </div>-->

                            </div>
                        </div>

                        <ul class="tablemenu">

                            <?php

                            $arg = array(
                                'category_name' => 'aboutbottom'
                            );
                            $query = new WP_Query($arg);


                            if ($query->have_posts()):
                                while ($query->have_posts()):
                                    $query->the_post();
//                        print_r($query);
                                    ?>
                                    <li class="listimage">
                                        <img src="<?php the_post_thumbnail_url(); ?>">
                                    </li>
                                    <li class="listcontent">
                            <span class="">
                                     <span class="listmenuheader">
                               <?php the_title(); ?>
                           </span>
                                <span class="listcontentholder">
                               <span class="listmenucontent">
                               <?php the_content(); ?>
                           </span>
                               <span class="learnmoretext">
                               Learn More
                           </span>
                           </span>
                            </span>
                                    </li>
                                    <li class="seperator"></li>
                                <?php
                                endwhile;
                            else:
                                echo "<li>Please add a post with a category / slug of aboutbottom</li>";
                            endif;
                            ?>

                            <!--                        <li class="listimage">-->
                            <!--                            <img src="img/About-icon%20curriculum.png">-->
                            <!--                        </li>-->
                            <!--                        <li class="listcontent">-->
                            <!--                            <span class="">-->
                            <!--                                     <span class="listmenuheader">-->
                            <!--                                Core Curriculum-->
                            <!--                           </span>-->
                            <!--                                <span class="listcontentholder">-->
                            <!--                               <span class="listmenucontent">-->
                            <!--                               Excelsia College aims to provide excellence in higher education within a distinctive Christian framework. Every university and college works out-->
                            <!--                                   of a particular worldview which integrates knowledge with action, and information with personal formation.-->
                            <!--                           </span>-->
                            <!--                               <span class="learnmoretext">-->
                            <!--                               Learn More-->
                            <!--                           </span>-->
                            <!--                           </span>-->
                            <!--                            </span>-->
                            <!--                        </li>-->
                            <!--                        <li class="seperator"></li>-->
                            <!---->
                            <!---->
                            <!--                        <li class="listimage">-->
                            <!--                            <img src="img/About-icon%20career.png">-->
                            <!--                        </li>-->
                            <!--                        <li class="listcontent">-->
                            <!--                            <span class="">-->
                            <!--                                     <span class="listmenuheader">-->
                            <!--                                Careers-->
                            <!--                           </span>-->
                            <!--                                <span class="listcontentholder">-->
                            <!--                               <span class="listmenucontent">-->
                            <!--                               Excelsia College is committed to recruiting and selecting staff with the capabilities, experience and potential required to achieve the College’s-->
                            <!--                                   strategic goals, find out the career opportunities we have for you…-->
                            <!--                           </span>-->
                            <!--                               <span class="learnmoretext">-->
                            <!--                               Learn More-->
                            <!--                           </span>-->
                            <!--                           </span>-->
                            <!--                            </span>-->
                            <!--                        </li>-->
                            <!--                        <li class="seperator"></li>-->
                            <!---->
                            <!---->
                            <!--                        <li class="listimage">-->
                            <!--                            <img src="img/About-icon%20donation.png">-->
                            <!--                        </li>-->
                            <!--                        <li class="listcontent">-->
                            <!--                            <span class="">-->
                            <!--                                     <span class="listmenuheader">-->
                            <!--                               Acknowledgement of Country-->
                            <!--                           </span>-->
                            <!--                                <span class="listcontentholder">-->
                            <!--                               <span class="listmenucontent">-->
                            <!--                                   Education is an important mission field for Christians today. We recognise that we have a distinct opportunity to make a significant impact on the-->
                            <!--                                   next generation and we invite you to partner with us in God’s work.-->
                            <!---->
                            <!--                               </span>-->
                            <!--                               <span class="learnmoretext">-->
                            <!--                               Learn More-->
                            <!--                           </span>-->
                            <!--                           </span>-->
                            <!--                            </span>-->
                            <!--                        </li>-->
                            <!--                        <li class="seperator"></li>-->
                            <!---->
                            <!---->
                            <!--                        <li class="listimage">-->
                            <!--                            <img src="img/About-icon%20resources.png">-->
                            <!--                        </li>-->
                            <!--                        <li class="listcontent">-->
                            <!--                            <span class="">-->
                            <!--                                     <span class="listmenuheader">-->
                            <!--                               Resources-->
                            <!--                           </span>-->
                            <!--                                <span class="listcontentholder">-->
                            <!--                               <span class="listmenucontent">-->
                            <!--                               Please find the resources of Excelsia College…-->
                            <!--                           </span>-->
                            <!--                               <span class="learnmoretext">-->
                            <!--                               Learn More-->
                            <!--                           </span>-->
                            <!--                           </span>-->
                            <!--                            </span>-->
                            <!--                        </li>-->
                            <!--                        <li class="seperator"></li>-->
                            <!---->
                            <!---->
                            <!--                        <li class="listimage">-->
                            <!--                            <img src="img/About-icon%20Finance.png">-->
                            <!--                        </li>-->
                            <!--                        <li class="listcontent">-->
                            <!--                            <span class="">-->
                            <!--                                     <span class="listmenuheader">-->
                            <!--                               Financial Statement-->
                            <!--                           </span>-->
                            <!--                                <span class="listcontentholder">-->
                            <!--                               <span class="listmenucontent">-->
                            <!--                              Please find the Financial Statement of Excelsia College…-->
                            <!--                           </span>-->
                            <!--                               <span class="learnmoretext">-->
                            <!--                               Learn More-->
                            <!--                           </span>-->
                            <!--                           </span>-->
                            <!--                            </span>-->
                            <!--                        </li>-->
                            <!--                        <li class="seperator"></li>-->
                            <!---->
                            <!--                        <li class="listimage">-->
                            <!--                            <img src="img/About-icon%20accreditation.png">-->
                            <!--                        </li>-->
                            <!--                        <li class="listcontent">-->
                            <!--                            <span class="">-->
                            <!--                                     <span class="listmenuheader">-->
                            <!--                              Accreditation-->
                            <!--                           </span>-->
                            <!--                                <span class="listcontentholder">-->
                            <!--                               <span class="listmenucontent">-->
                            <!--                              Excelsia College is a Higher Education Provider registered with the Tertiary Education Quality and Standards Agency, approved to offer FEE-HELP,-->
                            <!--                                   Youth Allowance, Austudy and Abstudy, and registered to offer courses to international students (CRICOS Provider Code 02664K).-->
                            <!--                           </span>-->
                            <!--                               <span class="learnmoretext">-->
                            <!--                               Learn More-->
                            <!--                           </span>-->
                            <!--                           </span>-->
                            <!--                            </span>-->
                            <!--                        </li>-->
                            <!--                        <li class="seperator"></li>-->
                        </ul>
                    </div>
                </div>
            </div>
        </section>

    </main>

<?php
get_footer();

?>