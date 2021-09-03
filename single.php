<?php
get_header();
?>
    <main class="post-holder">
        <div class="mobile-top-holders d-lg-none">

        </div>
        <section>
            <div class="container-fluid">
                <?php
                if(have_posts()){
                    while(have_posts()){
                        the_post();

                        the_post_thumbnail();

                        the_title();

                        the_content();
                    }
                }
                ?>
            </div>
        </section>
    </main>
<?php
get_footer();
?>