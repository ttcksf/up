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

add_filter( 'wpcf7_support_html5_fallback', '__return_true' );