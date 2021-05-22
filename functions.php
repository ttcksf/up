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