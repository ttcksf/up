<!DOCTYPE html>
<html lang="ja">

<head>
    <?php get_header(); ?>
</head>

<body>
    <?php get_template_part('includes/header-menu'); ?>
    <section class="404__inner inner">
        <div class="entry-404">
            <h1 class="entry-404-head">購入ページ</h1><!-- /entry-404-head -->
            <div class="entry-404-lead">こちらのボタンより決済画面に移動お願い致します。</div><!-- /entry-404-head -->
            <p class="entry-404-content">お支払いはクレジットカードのみになります。</p><!-- /entry-404-content -->
            <div class="entry-404-btn">
                <form action="<?php echo esc_url(get_template_directory_uri() . '/checkout-midnight.php'); ?>" method="POST">
                    <script src="https://checkout.stripe.com/checkout.js" class="stripe-button" data-key="pk_test_51HrNG6HVf78AUFmE7ZJ1thRXiELr8RpKrAhQ1rSFVNT4MtsxqB4J6tdCtJt1H0WINZEDg0K9qJ4Fkeizr8QKtA0I00WkJf9V9E" data-amount="5000" data-name="Girls Bar Andy" data-description="深夜1セット" data-image="https://stripe.com/img/documentation/checkout/marketplace.png" data-locale="auto" data-currency="jpy" data-zip-code="false" data-allow-remember-me="false" data-label="購入"></script>
                </form>
            </div><!-- /entry-404-btn -->
        </div><!-- /entry-404 -->
    </section><!-- /.404__inner inner -->
    <?php get_footer(); ?>
</body>

</html>