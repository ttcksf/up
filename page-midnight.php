<!DOCTYPE html>
<html lang="ja">
<head>
    <?php get_header();?>
</head>
<body>
    <?php get_template_part('includes/header-menu');?>
    <section class="404__inner inner">
        <div class="entry-404">
            <h1 class="entry-404-head">購入ページ</h1><!-- /entry-404-head -->
            <div class="entry-404-lead">こちらのボタンより決済画面に移動お願い致します。</div><!-- /entry-404-head -->
            <p class="entry-404-content">お支払いはクレジットカードのみになります。</p><!-- /entry-404-content -->
            <div class="entry-404-btn"><?php echo do_shortcode('[gssc code=2]');?></div><!-- /entry-404-btn -->
        </div><!-- /entry-404 -->
    </section><!-- /.404__inner inner -->
    <?php get_footer();?>
</body>
</html>    