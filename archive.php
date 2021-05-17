<!DOCTYPE html>
<html lang="ja">
<head>
    <?php get_header();?>
</head>

<body>
    <?php get_template_part('includes/header-menu');?>
    <section class="news">
        <div class="news__inner inner wow fadeIn" data-wow-duration="4s">
            <div class="SPACER--60"></div><!-- /.SPACER--60 -->
            <h1 class="news__head">News</h1><!-- /.news__head -->
            <div class="SPACER--60"></div><!-- /.SPACER--60 -->
            <div class="news__items">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <a href="<?php the_permalink();?>" class="news__item-link">
                            <div class="news__item">
                                <div class="news__img"><img src="/img/news1.png" alt=""></div><!-- /.news__img -->
                                <h2 class="news__title"><?php the_title(); ?></h2><!-- /.news__title -->
                                <p class="news__text">
                                    <?php the_excerpt(); ?>
                                </p><!-- /.news__text -->
                            </div><!-- /.news__item -->
                        </a><!-- /.news__item-link -->
                    <?php endwhile; ?>
                <?php else : ?>
                    <p>記事が見つかりませんでした</p>
                <?php endif; ?>
                <div class="SPACER--80"></div><!-- /.SPACER--80 -->
                <!-- pagenation -->
                <div class="pagenation">
                    <span class="page-numbers current">1</span>
                    <a class="page-numbers" href="#">2</a>
                    <a class="page-numbers" href="#">3</a>
                    <a class="page-numbers" href="#">3</a>
                    <a class="page-numbers" href="#">3</a>
                    <a class="page-numbers" href="#">3</a>
                    <a class="page-numbers" href="#">3</a>
                    <a class="page-numbers" href="#">3</a>
                    <a class="next page-numbers" href="#"><i class="fas fa-angle-right"></i></a>
                </div><!-- /pagenation -->
            </div><!-- /.news__items -->
            <div class="SPACER--200"></div><!-- /.SPACER--100 -->
        </div><!-- /.news__inner inner -->
    </section><!-- /.news -->
    <?php get_footer();?>
</body>

</html>