<?php
get_header();
?>
<main class="paddingclass">
    <section>
        <div class="container-fluid">
            <?php
            if(have_posts()){
                while(have_posts()){
                    the_post();
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