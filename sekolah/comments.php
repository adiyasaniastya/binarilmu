<?php
// template untuk menampilkan komentar

if (post_password_required(  )){
    return;
}
?>

<div id="comments" class="comments-area">
    <?php if (have_comments(  )): ?>
        <h2 class="comments-title">
            <?php 
                $comment_count= get_comments_number(  );
                if ('1'=== $comment_count){
                    printf(
                        esc_html__('Comments (1)','sekolah')

                    );
                } else{
                    printf(
                        esc_html__('Comments (%1$s)','sekolah'),
                        intval($comment_count)
                    );
                }
            ?>
        </h2>
        <?php the_comments_navigation();?>
        <ol class="comment-list">
            <?php 
                wp_list_comments([
                    'style' => 'ol',
                    'short_ping' =>true
                ] );
            ?>
        </ol>
        <?php 
            the_comments_navigation(  );
            // jika kolom komen ditutup, pesan ini akan muncul
            if (! comments_open() ){
                printf(
                    '<p class="no-comments">%1$s</p>',
                    esc_html__('Komentar ditutup', 'sekolah')
                );
            }
        ?>
    
    <?php 
    endif; 
    // Melihatkan form kommentar
    comment_form( );
    ?>    
</div>