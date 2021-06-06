<!DOCTYPE html>
<html lang="ja">
<head>
    <?php get_header();?>
</head>
<body>
    <?php get_template_part('includes/header-menu');?>
    <section class="404__inner inner">
        <div class="entry-404">
            <h1 class="entry-404-head">ご予約はまだ完了しておりません。</h1><!-- /entry-404-head -->
            <div class="entry-404-lead">お申込みの送信が正常に完了しました。</div><!-- /entry-404-head -->
            <p class="entry-404-content">お申込み時に入力頂いたメールアドレスへ決済メールをお送りしますので、決済処理の対応を持って予約確定となります。</p><!-- /entry-404-content -->
            <div class="entry-404-btn"><a class="btn" href="<?php echo esc_url(home_url('/')); ?>">トップページに戻る</a></div><!-- /entry-404-btn -->
        </div><!-- /entry-404 -->
    </section><!-- /.404__inner inner -->
    <?php get_footer();?>
</body>
</html>    