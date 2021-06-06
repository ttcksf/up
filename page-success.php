<!DOCTYPE html>
<html lang="ja">
<head>
    <?php get_header();?>
</head>
<body>
    <?php get_template_part('includes/header-menu');?>
    <section class="404__inner inner">
        <div class="entry-404">
            <h1 class="entry-404-head">購入がありがとうございます。</h1><!-- /entry-404-head -->
            <div class="entry-404-lead">購入が完了しました。</div><!-- /entry-404-head -->
            <p class="entry-404-content">引き続きよろしくお願いします。<br>入力されたURLが正しいかご確認ください。</p><!-- /entry-404-content -->
            <div class="entry-404-btn"><a class="btn" href="<?php echo esc_url(home_url('/')); ?>">トップページに戻る</a></div><!-- /entry-404-btn -->
        </div><!-- /entry-404 -->
    </section><!-- /.404__inner inner -->
    <?php get_footer();?>
</body>
</html>    