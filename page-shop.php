<!DOCTYPE html>
<html lang="ja">
<head>
    <?php get_header();?>
</head>
<body>
    <?php get_template_part('includes/header-menu');?>
    <section class="shop-page">
        <div class="shop-page__inner inner wow fadeIn" data-wow-duration="4s">
            <div class="SPACER--60"></div><!-- /.SPACER--60 -->
            <div class="shop-page__head">Shop</div><!-- /.shop-page__head -->
            <div class="SPACER--60"></div><!-- /.SPACER--60 -->
            <div class="shop__photos">
                <div class="shop-photo wow fadeInUpBig" data-wow-duration="1.5s">
                    <img src="<?php echo get_template_directory_uri();?>/img/shop-photo1.png" alt="">
                </div><!-- /.shop-photo -->
                <div class="shop-photo wow fadeInUpBig" data-wow-duration="1.5s">
                    <img src="<?php echo get_template_directory_uri();?>/img/shop-photo2.png" alt="">
                </div><!-- /.shop-photo -->
                <div class="shop-photo wow fadeInUpBig" data-wow-duration="1.5s">
                    <img src="<?php echo get_template_directory_uri();?>/img/shop-photo3.png" alt="">
                </div><!-- /.shop-photo -->
                <div class="shop-photo wow fadeInUpBig" data-wow-duration="1.5s">
                    <img src="<?php echo get_template_directory_uri();?>/img/shop-photo4.png" alt="">
                </div><!-- /.shop-photo -->
                <div class="shop-photo wow fadeInUpBig" data-wow-duration="1.5s">
                    <img src="<?php echo get_template_directory_uri();?>/img/shop-photo5.png" alt="">
                </div><!-- /.shop-photo -->
                <div class="shop-photo wow fadeInUpBig" data-wow-duration="1.5s">
                    <img src="<?php echo get_template_directory_uri();?>/img/shop-photo6.png" alt="">
                </div><!-- /.shop-photo -->
                <div class="shop-photo wow fadeInUpBig" data-wow-duration="1.5s">
                    <img src="<?php echo get_template_directory_uri();?>/img/shop-photo7.png" alt="">
                </div><!-- /.shop-photo -->
                <div class="shop-photo wow fadeInUpBig" data-wow-duration="1.5s">
                    <img src="<?php echo get_template_directory_uri();?>/img/shop-photo8.png" alt="">
                </div><!-- /.shop-photo -->
            </div><!-- /.shop__photos -->
            <div class="SPACER--200"></div><!-- /.SAPCER--200 -->
        </div><!-- /.shop-page__inner inner -->
    </section><!-- /.shop-page -->
    <?php get_footer();?>
</body>
</html>