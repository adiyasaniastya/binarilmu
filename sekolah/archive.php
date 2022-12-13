<?php
// template buat nampilin halaman yg diarsipkan

get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php if (have_posts()) : ?>
            <header class="archive-page-header">
                <?php
                the_archive_title('<h1 class="archive-title"></h1>', '</h1>');
                the_archive_description('<div class="archive-description">', '</div>');
                ?>
            </header>


            <?php
            // looping post untuk tiap kategori?
            while (have_posts()) :
                the_post();
                get_template_part('template-parts/post/content');
            endwhile;
            // untuk navigasi ke post selanjutnya yg ada di archive
            echo paginate_links([
                'prev_text' => esc_html__('Prev', 'sekolah'),
                'next_text' => esc_html__('Next', 'sekolah'),
            ]);
            ?>

            <!-- kalo di kategorinya gaada postingan -->
        <?php else :
            get_template_part('template-parts/page/content', 'none');

        ?>
        <?php endif; ?>
        <?php
        get_sidebar();

        ?>
    </main>
</div>
<?php
get_footer();

?>