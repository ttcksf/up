<!DOCTYPE html>
<html lang="ja">
<head>
    <?php get_header();?>
</head>
<body>
    <?php get_template_part('includes/header-menu');?>
    <section class="booking">
        <div class="booking__inner inner wow fadeIn" data-wow-duration="4s">
            <div class="SPACER--60"></div><!-- /.SPACER--60 -->
            <h1 class="booking__head">Booking</h1><!-- /.booking__head -->
            <div class="SPACER--60"></div><!-- /.SPACER--60 -->
            <div class="booking__form">
                <form action="" class="booking__form-wrapper">
                    <div class="booking__form-title">オンラインガールズバーご予約フォーム</div><!-- /.booking__form-title -->
                    <div class="booking__form-description">
                        こちらのフォームに必要事項を入力をお願いします。<br>
                        日程、キャストについては当日のスケジュール次第で変更になることもありますのでご了承ください。
                    </div><!-- /.booking__form-description -->
                    <dl class="booking__form-dl">
                        <div class="booking__form-row">
                            <div class="booking__form-select"><input id="your-date" type="date" placeholder="日程"></div><!-- /.booking__form-select -->
                        </div><!-- /.booking__form-row -->
                        <div class="booking__form-row">
                            <div class="booking__form-select">
                                <select id="your-time" name="">
                                    <option value="">時間</option>
                                    <option value="">18:00</option>
                                    <option value="">18:30</option>
                                    <option value="">19:00</option>
                                    <option value="">19:30</option>
                                    <option value="">20:00</option>
                                    <option value="">20:30</option>
                                    <option value="">21:00</option>
                                    <option value="">21:30</option>
                                    <option value="">22:00</option>
                                    <option value="">22:30</option>
                                    <option value="">23:00</option>
                                </select>
                            </div><!-- /.booking__form-select -->
                        </div><!-- /.booking__form-row -->
                        <div class="booking__form-row">
                            <div class="booking__form-select-cast">
                                <select id="your-kind" name="">
                                    <option value="">キャスト</option>
                                    <option value="">りあ</option>
                                    <option value="">あや</option>
                                    <option value="">るい</option>
                                    <option value="">まや</option>
                                    <option value="">なる</option>
                                    <option value="">ありす</option>
                                    <option value="">ひな</option>
                                    <option value="">あやね</option>
                                    <option value="">みほ</option>
                                    <option value="">あんな</option>
                                    <option value="">ちあき</option>
                                </select>
                            </div><!-- /.booking__form-select-cast -->
                        </div><!-- /.booking__form-row -->
                        <div class="booking__form-row">
                            <dt class="booking__form-label"><label for="your-name">お名前</label></dt><!-- /.booking__form-label -->
                            <dd class="booking__form-input"><input id="your-name" type="text" placeholder="山田太郎"></dd><!-- /.booking__form-input -->
                        </div><!-- /.booking__form-row -->
                        <div class="booking__form-row">
                            <dt class="booking__form-label"><label for="your-tel">電話番号</label></dt><!-- /.booking__form-label -->
                            <dd class="booking__form-input"><input id="your-tel" type="text" placeholder="08011112222"></dd><!-- /.booking__form-input -->
                        </div><!-- /.booking__form-row -->
                        <div class="booking__form-row">
                            <dt class="booking__form-label"><label for="your-email">メールアドレス</label></dt><!-- /.booking__form-label -->
                            <dd class="booking__form-input"><input id="your-email" type="email" placeholder="example@gmail.com"></dd><!-- /.booking__form-input -->
                        </div><!-- /.booking__form-row -->
                    </dl><!-- /.booking__form-dl -->
                    <div class="booking__form-check">
                        <label for="your-check">
                            <input id="your-check" type="checkbox"><span><a href="/page-privacy.html">プライバシーポリシー</a>に同意する</span>
                        </label>
                    </div><!-- /.booking__form-check -->
                    <div class="booking__form-button">
                        <input type="submit" value="予約する">
                    </div><!-- /.booking__form-button -->
                </form><!-- /.booking__form-wrapper -->
            </div><!-- /.booking__form -->
            <div class="SPACER--100"></div><!-- /.SPACER--100 -->
        </div><!-- /.booking__inner inner -->
    </section><!-- /.booking -->
    <?php get_footer();?>
</body>
</html>