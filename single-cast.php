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
                    <?php if (has_post_thumbnail()) : ?>
                        <?php $id = get_post_thumbnail_id();?>
                        <?php $img = wp_get_attachment_image_src($id, 'large');?>
                        <?php echo '<img src="' . esc_url($img[0]) . '">'; ?>
                    <?php else : ?>
                       <?php $img = array(get_template_directory_uri() . '/img/noimg.png');?>
                       <?php echo '<img src="' . esc_url($img[0]) . '">'; ?>
                    <?php endif;?>    
                </div><!-- /.cast__img -->
                <div class="SPACER--60"></div><!-- /.SPACER--60 -->
                <div class="cast__table">
                <?php $value = get_post_meta($post->ID, 'name', true);?>
                <?php if(empty($value)):?>
                <?php else:?>
                    <table class="cell">
                            <tr>
                                <th>名前</th>
                            </tr>
                            <tr>
                                <td><?php the_field('name'); ?></td>
                            </tr>
                    </table><!-- /.cell -->
                <?php endif;?>

                <?php $value = get_post_meta($post->ID, 'older', true);?>
                <?php if(empty($value)):?>
                <?php else:?>
                    <table class="cell">
                            <tr>
                                <th>年齢</th>
                            </tr>
                            <tr>
                                <td><?php the_field('older'); ?>才</td>
                            </tr>
                    </table><!-- /.cell -->
                <?php endif;?>
                
                <?php $value = get_post_meta($post->ID, 'kind', true);?>
                <?php if(empty($value)):?>
                <?php else:?>
                    <table class="cell">
                            <tr>
                                <th>趣味</th>
                            </tr>
                            <tr>
                                <td><?php the_field('kind'); ?></td>
                            </tr>
                    </table><!-- /.cell -->
                <?php endif;?>

                <?php $value = get_post_meta($post->ID, 'place', true);?>
                <?php if(empty($value)):?>
                <?php else:?>
                    <table class="cell">
                            <tr>
                                <th>デートしたい場所</th>
                            </tr>
                            <tr>
                                <td><?php the_field('place'); ?></td>
                            </tr>
                    </table><!-- /.cell -->
                <?php endif;?>
                
                <?php $value = get_post_meta($post->ID, 'style', true);?>
                <?php if(empty($value)):?>
                <?php else:?>
                    <table class="cell">
                            <tr>
                                <th>スタイル</th>
                            </tr>
                            <tr>
                                <td><?php the_field('style'); ?></td>
                            </tr>
                    </table><!-- /.cell -->
                <?php endif;?>

                <?php $value = get_post_meta($post->ID, 'blood', true);?>
                <?php if(empty($value)):?>
                <?php else:?>
                    <table class="cell">
                            <tr>
                                <th>血液型</th>
                            </tr>
                            <tr>
                                <td><?php the_field('blood'); ?></td>
                            </tr>
                    </table><!-- /.cell -->
                <?php endif;?>

                <?php $value = get_post_meta($post->ID, 'from', true);?>
                <?php if(empty($value)):?>
                <?php else:?>
                    <table class="cell">
                            <tr>
                                <th>出身地</th>
                            </tr>
                            <tr>
                                <td><?php the_field('from'); ?></td>
                            </tr>
                    </table><!-- /.cell -->
                <?php endif;?>

                <?php $value = get_post_meta($post->ID, 'food', true);?>
                <?php if(empty($value)):?>
                <?php else:?>
                    <table class="cell">
                            <tr>
                                <th>好きな食べ物</th>
                            </tr>
                            <tr>
                                <td><?php the_field('food'); ?></td>
                            </tr>
                    </table><!-- /.cell -->
                <?php endif;?>

                <?php $value = get_post_meta($post->ID, 'mens', true);?>
                <?php if(empty($value)):?>
                <?php else:?>
                    <table class="cell">
                            <tr>
                                <th>男性のここがフェチ！</th>
                            </tr>
                            <tr>
                                <td><?php the_field('mens'); ?></td>
                            </tr>
                    </table><!-- /.cell -->
                <?php endif;?>

                <?php $value = get_post_meta($post->ID, 'sports', true);?>
                <?php if(empty($value)):?>
                <?php else:?>
                    <table class="cell">
                            <tr>
                                <th>好きなスポーツ</th>
                            </tr>
                            <tr>
                                <td><?php the_field('sports'); ?></td>
                            </tr>
                    </table><!-- /.cell -->
                <?php endif;?>

                <?php $value = get_post_meta($post->ID, 'movie', true);?>
                <?php if(empty($value)):?>
                <?php else:?>
                    <table class="cell">
                            <tr>
                                <th>好きな映画</th>
                            </tr>
                            <tr>
                                <td><?php the_field('movie'); ?></td>
                            </tr>
                    </table><!-- /.cell -->
                <?php endif;?>

                <?php $value = get_post_meta($post->ID, 'birthday', true);?>
                <?php if(empty($value)):?>
                <?php else:?>
                    <table class="cell">
                            <tr>
                                <th>誕生日</th>
                            </tr>
                            <tr>
                                <td><?php the_field('birthday'); ?></td>
                            </tr>
                    </table><!-- /.cell -->
                <?php endif;?>

                <?php $value = get_post_meta($post->ID, 'point', true);?>
                <?php if(empty($value)):?>
                <?php else:?>
                    <table class="cell">
                            <tr>
                                <th>チャームポイント</th>
                            </tr>
                            <tr>
                                <td><?php the_field('point'); ?></td>
                            </tr>
                    </table><!-- /.cell -->
                <?php endif;?>

                <?php $value = get_post_meta($post->ID, 'caractor', true);?>
                <?php if(empty($value)):?>
                <?php else:?>
                    <table class="cell">
                            <tr>
                                <th>好きなキャラクター</th>
                            </tr>
                            <tr>
                                <td><?php the_field('caractor'); ?></td>
                            </tr>
                    </table><!-- /.cell -->
                <?php endif;?>

                <?php $value = get_post_meta($post->ID, 'color', true);?>
                <?php if(empty($value)):?>
                <?php else:?>
                    <table class="cell">
                            <tr>
                                <th>好きな色</th>
                            </tr>
                            <tr>
                                <td><?php the_field('color'); ?></td>
                            </tr>
                    </table><!-- /.cell -->
                <?php endif;?>

                <?php $value = get_post_meta($post->ID, 'trip', true);?>
                <?php if(empty($value)):?>
                <?php else:?>
                    <table class="cell">
                            <tr>
                                <th>旅行に行ってみたい場所</th>
                            </tr>
                            <tr>
                                <td><?php the_field('trip'); ?></td>
                            </tr>
                    </table><!-- /.cell -->
                <?php endif;?>

                <?php $value = get_post_meta($post->ID, 'book', true);?>
                <?php if(empty($value)):?>
                <?php else:?>
                    <table class="cell">
                            <tr>
                                <th>好きな漫画や本</th>
                            </tr>
                            <tr>
                                <td><?php the_field('book'); ?></td>
                            </tr>
                    </table><!-- /.cell -->
                <?php endif;?>

                <?php $value = get_post_meta($post->ID, 'type', true);?>
                <?php if(empty($value)):?>
                <?php else:?>
                    <table class="cell">
                            <tr>
                                <th>好きなタイプ</th>
                            </tr>
                            <tr>
                                <td><?php the_field('type'); ?></td>
                            </tr>
                    </table><!-- /.cell -->
                <?php endif;?>

                <?php $value = get_post_meta($post->ID, 'message', true);?>
                <?php if(empty($value)):?>
                <?php else:?>
                    <table class="cell">
                            <tr>
                                <th>メッセージ</th>
                            </tr>
                            <tr>
                                <td><?php the_field('message'); ?></td>
                            </tr>
                    </table><!-- /.cell -->
                <?php endif;?>
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