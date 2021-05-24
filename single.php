<!DOCTYPE html>
<html lang="ja">

<head>
    <?php get_header(); ?>
</head>

<body>
    <?php get_template_part('includes/header-menu'); ?>
    <section class="news__single">
        <div class="news__single__inner inner wow fadeIn" data-wow-duration="4s">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div class="single">
                        <div class="SPACER--60"></div><!-- /.SPACER--60 -->
                        <h1 class="single__head"><?php the_title(); ?></h1><!-- /.single__head -->
                        <div class="SPACER--60"></div><!-- /.SPACER--60 -->

                        <?php if (has_post_thumbnail()) {
                            $id = get_post_thumbnail_id();
                            $img = wp_get_attachment_image_src($id);
                            echo  '<div class="single__img"><img src="' . esc_url($img[0]) . '"></div>';
                        }?>

                        <div class="SPACER--60"></div><!-- /.SPACER--60 -->
                        <div class="single__text">
                            <?php the_content(); ?>
                        </div><!-- /.single__text -->
                        <div class="SPACER--100 SP--NONE"></div><!-- /.SPACER--200 -->
                        <div class="single__button btn"><a href="<?php echo esc_url(home_url('/news')); ?>">一覧へ</a></div><!-- /.card__button btn -->
                        <div class="SPACER--200"></div><!-- /.SPACER--200 -->
                    </div><!-- /.single -->
                <?php endwhile; ?>
            <?php endif; ?>
        </div><!-- /.news__single__inner -->
    </section><!-- /.news__single -->


    <?php get_footer(); ?>
</body>

</html>