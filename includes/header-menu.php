<header class="header">
    <div class="header__inner inner">
        <h1 class="header__logo"><a href="<?php echo esc_url(home_url('/'));?>">Girls Bar Andy</a></h1>
        <!-- <ul class="header__nav">
                <li><a href="" class="is-active">トップページ</a></li>
                <li><a href="">お知らせ</a></li>
                <li><a href="">キャスト一覧</a></li>
                <li><a href="">店内写真</a></li>
                <li><a href="">オンラインガールズバー</a></li>
                <li><a href="">ログイン</a></li>
            </ul> -->
        <?php
            $menu_name = 'drawer_nav';
            $locations = get_nav_menu_locations();
            $menu = wp_get_nav_menu_object($locations[$menu_name]);
            $menu_items = wp_get_nav_menu_items($menu -> term_id);
        ?>
        <div class="drawer">
            <input type="checkbox" class="drawer__checkbox" id="drawerCheckbox">
            <label for="drawerCheckbox" class="drawer__icon">
                <span class="drawer__icon-parts"></span><!-- /.drawer__icon-parts -->
            </label><!-- /.drawer__icon -->
            <label for="drawerChechbox" class="drawer__overlay"></label><!-- /.drawer__overlay -->
            <label for="drawerCheckbox" class="drawer__close"></label>
            <nav class="drawer__menu">
                <ul>
                    <?php foreach($menu_items as $item):?>
                    <li class="drawer__item">
                        <a href="<?php echo esc_attr($item->url);?>" class="drawer__item-inner">
                            <?php echo esc_html($item->title);?>
                        </a><!-- /.drawer__item-inner -->
                    </li><!-- /.drawer__item -->
                    <?php endforeach;?>
                </ul>
            </nav><!-- /.drawer__menu -->
        </div><!-- /.drawer -->
    </div>
</header><!-- /.header -->