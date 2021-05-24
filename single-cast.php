<!DOCTYPE html>
<html lang="ja">

<head>
    <?php get_header(); ?>
</head>

<body>
    <?php get_template_part('includes/header-menu'); ?>
    <section class="cast-single">
        <div class="cast-single__inner inner wow fadeIn" data-wow-duration="4s">
            <div class="cast">
                <div class="SPACER--60"></div><!-- /.SPACER--60 -->
                <h1 class="cast__head"><?php the_title(); ?></h1><!-- /.cast__head -->
                <div class="SPACER--60"></div><!-- /.SPACER--60 -->
                <div class="cast__img">
                    <?php if (has_post_thumbnail()) :
                        $id = get_post_thumbnail_id();
                        $img = wp_get_attachment_image_src($id, 'large');
                    else :
                        $img = array(get_template_directory_uri() . '/img/noimg.png');
                    endif;
                    ?>
                    <?php echo '<img src="' . esc_url($img[0]) . '">';?>
                </div><!-- /.cast__img -->
                <div class="SPACER--60"></div><!-- /.SPACER--60 -->
                <div class="cast__table">
                    <table class="cell">
                        <?php if (get_field('name')) : ?>
                            <?php $field = get_field_object('name'); ?>
                            <tr>
                                <th><?php echo $field['label']; ?></th>
                            </tr>
                            <tr>
                                <td><?php the_field('name'); ?></td>
                            </tr>
                        <?php endif; ?>
                    </table><!-- /.cell -->
                    <table class="cell">
                        <?php if (get_field('older')) : ?>
                            <?php $field = get_field_object('older'); ?>
                            <tr>
                                <th><?php echo $field['label']; ?></th>
                            </tr>
                            <tr>
                                <td><?php the_field('older'); ?></td>
                            </tr>
                        <?php endif; ?>
                    </table><!-- /.cell -->
                    <table class="cell">
                        <?php if (get_field('kind')) : ?>
                            <?php $field = get_field_object('kind'); ?>
                            <tr>
                                <th><?php echo $field['label']; ?></th>
                            </tr>
                            <tr>
                                <td><?php the_field('kind'); ?></td>
                            </tr>
                        <?php endif; ?>
                    </table><!-- /.cell -->
                    <table class="cell">
                        <?php if (get_field('place')) : ?>
                            <?php $field = get_field_object('place'); ?>
                            <tr>
                                <th><?php echo $field['label']; ?></th>
                            </tr>
                            <tr>
                                <td><?php the_field('place'); ?></td>
                            </tr>
                        <?php endif; ?>
                    </table><!-- /.cell -->
                    <table class="cell">
                        <?php if (get_field('message')) : ?>
                            <?php $field = get_field_object('message'); ?>
                            <tr>
                                <th><?php echo $field['label']; ?></th>
                            </tr>
                            <tr>
                                <td><?php the_field('message'); ?></td>
                            </tr>
                        <?php endif; ?>
                    </table><!-- /.cell -->
                </div><!-- /.cast__table -->
                <div class="SPACER--100 SP--NONE"></div><!-- /.SPACER--200 -->
                <div class="cast__button btn-large"><a href="<?php echo esc_url(home_url('/contact')); ?>">オンラインガールズバーの予約へ</a></div><!-- /.cast__button btn-large -->
                <div class="SPACER--200"></div><!-- /.SPACER-200 -->
            </div><!-- /.cast -->
        </div><!-- /.cast-single__inner -->
    </section><!-- /.cast-single -->
    <?php get_footer(); ?>
</body>

</html>