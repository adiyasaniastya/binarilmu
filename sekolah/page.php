<!-- individual page -->

<?php
    get_header();
?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <?php 
                while (have_posts()):
                    the_post();
                    get_template_part('template-parts/page/content','page'); //content-page.php
                endwhile;
                // kalo ada comment, ntar bisa diliatin template comment nya
                if (comments_open(  ) || get_comments_number(  )):
                    comments_template();
                endif;   
            ?>
        </main>
        <?php get_sidebar(); ?>
    </div>
<?php 
    get_footer();
?>