<?php 
// template buat nampilin halaman nencari sesuatu

get_header();
?>

<div id="primary" class="search-content-area">
    <main id="main" class="site-main">
        <?php if (have_posts()) : ?>
            
            <?php 
                // looping post untuk tiap kategori?
                while(have_posts(  )):
                    the_post(  );
                    get_template_part( 'template-parts/page/content', 'search' );
                endwhile;
                // untuk navigasi ke post selanjutnya yg ada di archive, sekolah apa?
                echo paginate_links( [
                    'prev_text' => esc_html__ ('Prev','sekolah'),
                    'next_text' => esc_html__ ('Next','sekolah'),
                ] );
            ?>

        <!-- kalo di kategorinya gaada postingan -->
        <?php else: 
            get_template_part( 'template-parts/page/content', 'none');
            
        ?>    
        <?php endif; ?>
    </main>
</div>
<?php
get_footer();

?>
