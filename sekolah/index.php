<?php
get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="main site-main">
        <?php
        get_header();
        get_search_form();
        if (have_posts()) :
            while (have_posts()) :
                the_post();
                get_template_part('template-parts/post/content',get_post_format() );
            endwhile;

            echo paginate_links( [
                'prev_text' => esc_html__ ('Prev','sekolah'),
                'next_text' => esc_html__ ('Next','sekolah'),
            ] );
        else:
                get_template_part( 'template-parts/page/content', 'none' );
        endif;
        
        ?>
    </main>
    <?php
    get_sidebar( );
    
    ?>


</div>

<?php
get_footer( );
?>