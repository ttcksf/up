<!DOCTYPE html>
<html lang="ja">
<head>
    <?php get_header();?>
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
                        <li class="drawer__item"><a href="/" class="drawer__item-inner">トップページ</a><!-- /.drawer__item-inner --></li><!-- /.drawer__item -->
                        <li class="drawer__item"><a href="/" class="drawer__item-inner">お知らせ</a><!-- /.drawer__item-inner --></li><!-- /.drawer__item -->
                        <li class="drawer__item"><a href="/" class="drawer__item-inner">キャスト一覧</a><!-- /.drawer__item-inner --></li><!-- /.drawer__item -->
                        <li class="drawer__item"><a href="/" class="drawer__item-inner">店内写真</a><!-- /.drawer__item-inner --></li><!-- /.drawer__item -->
                        <li class="drawer__item"><a href="/" class="drawer__item-inner">オンラインガールズバー</a><!-- /.drawer__item-inner --></li><!-- /.drawer__item -->
                        <li class="drawer__item"><a href="/" class="drawer__item-inner">ログイン</a><!-- /.drawer__item-inner --></li><!-- /.drawer__item -->
                    </ul>
                </nav><!-- /.drawer__menu -->
            </div><!-- /.drawer -->
        </div>   
    </header><!-- /.header -->
    <section class="news__single">
        <div class="news__single__inner inner wow fadeIn" data-wow-duration="4s">
            <div class="single">
                <div class="SPACER--60"></div><!-- /.SPACER--60 -->
                <h1 class="single__head">オンラインガールズバーが開始</h1><!-- /.single__head -->
                <div class="SPACER--60"></div><!-- /.SPACER--60 -->
                <div class="single__img">
                    <img src="/img/news2.png" alt="">
                </div><!-- /.single__img -->
                <div class="SPACER--60"></div><!-- /.SPACER--60 -->
                <div class="single__text">
                    Girls Bar Andyにて新サービスのオンラインガールズバーを開始しました。<br>

                    オンラインガールズバーとは、お客様とキャストがビデオ通話にて食事や会話を楽しんでいただくサービスです。<br>

                    ビデオ通話のため、基本的には同じキャストとずっと会話することができ、途中でヘルプが来たり指名が被ることがありません。<br>

                    サービスの流れは以下の形です。<br>

                    ①本サイトのメニューから「オンラインガールズバー」のページに遷移してください。<br>

                    ②「オンラインガールズバー」のページ内で、ご希望の日程やお客様情報を入力して送信ください。<br>

                    ③Eメールにてクレカによる事前決済を行います。<br>

                    ④決済が完了しましたら、ZoomのURLをご連絡しますので予約時間になりましたら入室ください。<br>  
                    
                    ※当店ではZoomを使用しており、Zoomのインストールはあらかじめお客様のほうでお済ませください。<br>
                </div><!-- /.single__text -->
                <div class="SPACER--100 SP--NONE"></div><!-- /.SPACER--200 -->
                <div class="single__button btn"><a href="/archive.html">一覧へ</a></div><!-- /.card__button btn -->
                <div class="SPACER--200"></div><!-- /.SPACER--200 -->    
            </div><!-- /.single -->    
            </div><!-- /.news__single__inner -->
    </section><!-- /.news__single -->


    <?php get_footer();?>
</body>
</html>