<?php
add_action('init',function(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    //menu
    register_nav_menus([
        'header_nav' => 'ヘッダーメニュー',
        'drawer_nav' => 'ドロワーメニュー',
        'footer_nav' => 'フッターメニュー',
    ]);
    //custom
    register_post_type('cast',[
        'label' => 'キャスト',
        'public' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-buddicons-buddypress-logo',
        'supports' => ['thumbnail','title','editor','custom-fields'],
        'has_archive' => true,
        'show_in_rest' => true,
    ]);
});
add_action('pre_get_posts', function($query){
    if (is_admin() || ! $query->is_main_query())
        return;
    if($query->is_archive('cast')){
        $query->set('posts_per_page', '12');
    }
});

function my_password_form()
{
    return
        '<form class="post_password" action="' . home_url() . '/wp-login.php?action=postpass" method="post">
            <div class="sale__form-row">
                <dt class="sale__form-label"><label for="sale-name">パスワード</label></dt>
                <dd class="sale__form-input"><input id="sale-name" type="password" name="post_password"></dd>
            </div>
            <div class="sale__form-button">
                <input type="submit" name="Submit" value="' . esc_attr__("パスワード認証") . '" />
            </div>
        </form>';
}
add_filter('the_password_form', 'my_password_form');

function custom_postpass_time()
{
    require_once ABSPATH . 'wp-includes/class-phpass.php';
    $hasher = new PasswordHash(8, true);
    setcookie('wp-postpass_' . COOKIEHASH, $hasher->HashPassword(wp_unslash($_POST['post_password'])), time() + MINUTE_IN_SECONDS, COOKIEPATH);
    wp_safe_redirect(wp_get_referer());
    exit();
}
add_action('login_form_postpass', 'custom_postpass_time');

add_filter( 'wpcf7_support_html5_fallback', '__return_true' );