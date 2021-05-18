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
});