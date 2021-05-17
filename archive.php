<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Girls Bar Andy</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="shortcut icon" href="/img/favicon.ico">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="/js/wow.min.js"></script>
    <link rel="stylesheet" href="/css/animate.css">
    <link rel="stylesheet" href="/css/style.css">
    <script src="/js/script.js"></script>
</head>

<body>
    <header class="header">
        <div class="header__inner inner">
            <h1 class="header__logo"><a href="/">Girls Bar Andy</a></h1>
            <!-- <ul class="header__nav">
                <li><a href="" class="is-active">トップページ</a></li>
                <li><a href="">お知らせ</a></li>
                <li><a href="">キャスト一覧</a></li>
                <li><a href="">店内写真</a></li>
                <li><a href="">オンラインガールズバー</a></li>
                <li><a href="">ログイン</a></li>
            </ul> -->
            <div class="drawer">
                <input type="checkbox" class="drawer__checkbox" id="drawerCheckbox">
                <label for="drawerCheckbox" class="drawer__icon">
                    <span class="drawer__icon-parts"></span><!-- /.drawer__icon-parts -->
                </label><!-- /.drawer__icon -->
                <label for="drawerChechbox" class="drawer__overlay"></label><!-- /.drawer__overlay -->
                <nav class="drawer__menu">
                    <ul>
                        <li class="drawer__item"><a href="/" class="drawer__item-inner">トップページ</a><!-- /.drawer__item-inner -->
                        </li><!-- /.drawer__item -->
                        <li class="drawer__item"><a href="/" class="drawer__item-inner">お知らせ</a><!-- /.drawer__item-inner -->
                        </li><!-- /.drawer__item -->
                        <li class="drawer__item"><a href="/" class="drawer__item-inner">キャスト一覧</a><!-- /.drawer__item-inner -->
                        </li><!-- /.drawer__item -->
                        <li class="drawer__item"><a href="/" class="drawer__item-inner">店内写真</a><!-- /.drawer__item-inner -->
                        </li><!-- /.drawer__item -->
                        <li class="drawer__item"><a href="/" class="drawer__item-inner">オンラインガールズバー</a><!-- /.drawer__item-inner -->
                        </li><!-- /.drawer__item -->
                        <li class="drawer__item"><a href="/" class="drawer__item-inner">ログイン</a><!-- /.drawer__item-inner -->
                        </li><!-- /.drawer__item -->
                    </ul>
                </nav><!-- /.drawer__menu -->
            </div><!-- /.drawer -->
        </div>
    </header><!-- /.header -->

    <section class="news">
        <div class="news__inner inner wow fadeIn" data-wow-duration="4s">
            <div class="SPACER--60"></div><!-- /.SPACER--60 -->
            <h1 class="news__head">News</h1><!-- /.news__head -->
            <div class="SPACER--60"></div><!-- /.SPACER--60 -->
            <div class="news__items">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <a href="/single.html" class="news__item-link">
                            <div class="news__item">
                                <div class="news__img"><img src="/img/news1.png" alt=""></div><!-- /.news__img -->
                                <h2 class="news__title"><?php the_title(); ?></h2><!-- /.news__title -->
                                <p class="news__text">
                                    <?php the_excerpt(); ?>
                                </p><!-- /.news__text -->
                            </div><!-- /.news__item -->
                        </a><!-- /.news__item-link -->
                    <?php endwhile; ?>
                <?php else : ?>
                    <p>記事が見つかりませんでした</p>
                <?php endif; ?>
                <div class="SPACER--80"></div><!-- /.SPACER--80 -->
                <!-- pagenation -->
                <div class="pagenation">
                    <span class="page-numbers current">1</span>
                    <a class="page-numbers" href="#">2</a>
                    <a class="page-numbers" href="#">3</a>
                    <a class="page-numbers" href="#">3</a>
                    <a class="page-numbers" href="#">3</a>
                    <a class="page-numbers" href="#">3</a>
                    <a class="page-numbers" href="#">3</a>
                    <a class="page-numbers" href="#">3</a>
                    <a class="next page-numbers" href="#"><i class="fas fa-angle-right"></i></a>
                </div><!-- /pagenation -->
            </div><!-- /.news__items -->
            <div class="SPACER--200"></div><!-- /.SPACER--100 -->
        </div><!-- /.news__inner inner -->
    </section><!-- /.news -->
    <section class="access">
        <div class="access__inner inner">
            <div class="SPACER--60"></div><!-- /.SPACER--60 -->
            <h1 class="access__head">Access</h1><!-- /.access__head -->
            <div class="SPACER--60"></div><!-- /.SPACER--60 -->
            <div class="access__info">
                <div class="access__map">
                    <div class="iframe-wrap">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3261.4328517281906!2d136.90313111559888!3d35.17076266540431!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x600370d455ea0345%3A0x931fd4737c94da9a!2z44CSNDYwLTAwMDMg5oSb55-l55yM5ZCN5Y-k5bGL5biC5Lit5Yy66Yym77yT5LiB55uu77yR77yT4oiS77yR77yZIOOCouODreODs-mMpu-8og!5e0!3m2!1sja!2sjp!4v1620820328713!5m2!1sja!2sjp" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div><!-- /.iframe-wrap -->
                </div><!-- /.access__map -->
                <div class="access__address">
                    <p>Girls bar Andy</p>
                    <p>〒460-0003 愛知県名古屋市中区錦3丁目13-19 アロン錦Ｂ ビル4F 東側</p>
                    <p><a href="tel:0522658850" class="tel">TEL：0522658850</a></p>
                    <p>営業時間：13：00～1：00</p>
                </div><!-- /.access__address -->
            </div><!-- /.access__info -->
            <div class="SPACER--100"></div><!-- /.SPACER--100 -->
        </div><!-- /.access__inner inner -->
    </section><!-- /.access -->
    <footer class="footer">
        <div class="footer__inner inner">
            <div class="SPACER--60"></div><!-- /.SPACER--60 -->
            <div class="footer__menu">
                <ul class="footer__nav">
                    <li><a href="">トップページ</a></li>
                    <li><a href="">お知らせ</a></li>
                    <li><a href="">キャスト一覧</a></li>
                    <li><a href="">店内写真</a></li>
                    <li><a href="">オンラインガールズバー</a></li>
                    <li><a href="">ログイン</a></li>
                </ul><!-- /.footer__nav -->
            </div><!-- /.footer__menu -->
            <p class="copyright">
                Copyright &copy; 株式会社UP All Right Reserved
            </p><!-- /.copyright -->
            <div class="SPACER--60"></div><!-- /.SPACER--60 -->
        </div><!-- /.footer__inner inner -->
    </footer><!-- /.footer -->
</body>

</html>