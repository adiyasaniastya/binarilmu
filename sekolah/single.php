<!-- for individual posts -->

<?php
    get_header();
    // nampilin formatnya gamau
    
?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <?php
            while(have_posts()) :
                the_post();
                // <h2>the_title();</h2>
                // the_content();
                get_template_part('template-parts/post/content',get_post_format());
            endwhile;

            // kalo ada comment, ntar bisa diliatin template comment nya
            if (comments_open(  ) || get_comments_number(  )):
                comments_template();
            endif;
            ?>
        </main>
        <?php 
            get_sidebar();
        ?>
    </div>
<?php
    get_footer();
?>