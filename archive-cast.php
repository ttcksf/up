<!DOCTYPE html>
<html lang="ja">

<head>
    <?php get_header(); ?>
</head>

<body>
    <?php get_template_part('includes/header-menu'); ?>
    <section class="casts-page">
        <div class="casts-page__inner inner wow fadeIn" data-wow-duration="4s">
            <div class="SPACER--60"></div><!-- /.SPACER--60 -->
            <div class="casts__head">Casts</div><!-- /.casts__head -->
            <div class="SPACER--60"></div><!-- /.SPACER--60 -->
            <div class="casts__photos">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <a href="<?php the_permalink(); ?>" class="casts__photo-link  wow fadeInUpBig" data-wow-duration="1.5s">
                            <div class="casts__photo">
                                <?php if (has_post_thumbnail()) :
                                    $id = get_post_thumbnail_id();
                                    $img = wp_get_attachment_image_src($id, 'large');
                                else :
                                    $img = array(get_template_directory_uri() . '/img/noimg.png');
                                endif;
                                ?>
                                <?php echo '<img src="' . esc_url($img[0]) . '">'; ?>
                            </div><!-- /.casts__photo -->
                        </a><!-- /.casts__photo-link -->
                    <?php endwhile; ?>
                <?php else : ?>
                    <p>キャストが登録されていません</p>
                <?php endif; ?>
            </div><!-- /.casts__photos -->
            <div class="SPACER--80"></div><!-- /.SPACER--80 -->
            <!-- pagenation -->
            <div class="pagenation-wrapper">
                <?php if (paginate_links()) : ?>
                    <div class="pagenation">
                        <?php
                        echo paginate_links(array(
                            'end_size' => 1,
                            'mid_size' => 1,
                            'prev_next' => true,
                            'prev_text' => '<i class="fas fa-angle-left"></i>',
                            'next_text' => '<i class="fas fa-angle-right"></i>',
                        ));
                        ?>
                    </div><!-- /pagenation -->
                <?php endif; ?>
            </div><!-- /.pagenation-wrapper -->
            <div class="SPACER--100"></div><!-- /.SPACER--100 -->
            <div class="casts-page__button btn-large"><a href="<?php echo esc_url(home_url('/contact')); ?>">オンラインガールズバーの予約へ</a></div><!-- /.card__button btn -->
            <div class="SPACER--200"></div><!-- /.SPACER--200 -->
        </div><!-- /.casts-page__inner inner -->
    </section><!-- /.casts-page -->

    <?php get_footer(); ?>
</body>

</html>