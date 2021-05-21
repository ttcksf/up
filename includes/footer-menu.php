<?php
    $menu_name = 'footer_nav';
    $locations = get_nav_menu_locations();
    $menu = wp_get_nav_menu_object($locations[$menu_name]);
    $menu_items = wp_get_nav_menu_items($menu->term_id);
?>
<div class="footer__menu">
    <ul class="footer__nav">
        <?php foreach($menu_items as $item):?>
            <li><a href="<?php echo esc_attr($item->url);?>"><?php echo esc_html($item->title);?></a></li>
        <?php endforeach;?>
    </ul><!-- /.footer__nav -->
</div><!-- /.footer__menu -->