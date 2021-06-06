<!DOCTYPE html>
<html lang="ja">
<head>
    <?php get_header();?>
</head>
<body>
    <?php get_template_part('includes/header-menu');?>
    <section class="404__inner inner">
        <div class="entry-404">
            <h1 class="entry-404-head">購入が出来ませんでした</h1><!-- /entry-404-head -->
            <div class="entry-404-lead">購入処理が正常に行われませんでした</div><!-- /entry-404-head -->
            <p class="entry-404-content">申し訳ありませんが、購入情報に誤りがあるかサーバー環境が混雑している可能性があります。<br>購入店舗に直接お問い合わせください。</p><!-- /entry-404-content -->
            <div class="entry-404-btn"><a class="btn" href="<?php echo esc_url(home_url('/')); ?>">トップページに戻る</a></div><!-- /entry-404-btn -->
        </div><!-- /entry-404 -->
    </section><!-- /.404__inner inner -->
    <?php get_footer();?>
</body>
</html>    