<?php

require_once( dirname(__FILE__).'/lib/stripe-php-7.79.0/init.php');

// Set your secret key: remember to change this to your live secret key in production
// See your keys here: https://dashboard.stripe.com/account/apikeys
\Stripe\Stripe::setApiKey("sk_test_51HrNG6HVf78AUFmE1XAW7We7Uv2EvSJQ2Aoclk1OCEC5G3EhXO8WNC8vUa3JqNS5AeyvJ9PDTDxUPwl6h6mtMAMW00HALbqLmu");

// Token is created using Stripe.js or Checkout!
// Get the payment token submitted by the form:
$token = $_POST['stripeToken'];
$email = $_POST['stripeEmail'];

// フォームから情報を取得:
try {
  $charge = \Stripe\Charge::create(array(
    "amount" => 4000,
    "currency" => "jpy",
    "source" => $token,
    "description" => "通常１セット",
    "receipt_email" => $email,
  ));
}catch (\Stripe\Error\Card $e) {
  // 決済できなかったときの処理
  die('決済が完了しませんでした');
}



// 自動返信メール
mb_language("Japanese");
mb_internal_encoding("UTF-8");
$title = "【ご予約が確定しました】オンラインガールズバーの入室案内";
$content = "この度はオンラインガールズバーのご予約ありがとうございました。\nお支払いが正常に処理されましたので、お時間になりましたら以下の入室ページより入室お願い致します。\n\n■オンラインガールズバー入室はこちら\n\nhttps://docs.google.com/document/d/1DwycMJmxB96KT5tbw2k9hGaAM9Ijrt-FEeh5F-TZHLA/edit?usp=sharing\n\nまた本サービスはビデオ通話アプリ「Zoom」を使用しております。\n\nお使いのパソコンにてZoomを事前にインストールおよび準備をお願い致します。\n\n■Zoomインストールはこちら\n\nhttps://zoom.us/jp-jp/meetings.html\n\n※こちらは自動送信メールのため、返信頂くことができません。ご不明点は当店まで直接お問い合わせください。\n\n■店舗情報\nGirls Bar Andy\n\n〒460-0003\n愛知県名古屋市中区錦3丁目13-19\nアロン錦Ｂ ビル4F 東側\n\nTEL：0522658850";

$from_name = "Girls Bar Andy";
$from_addr = "lorem.co.ltd@gmail.com";
$from_name_enc = mb_encode_mimeheader($from_name, "ISO-2022-JP");
$from = $from_name_enc . "<" . $from_addr . ">";
$header  = "From: " . $from . "\n";
$header = $header . "Reply-To: " . $from;

//to user send mail
    
if(mb_send_mail($email,$title, $content, $header, "-f" .$from_addr)){
  echo "メールを送信しました";
} else {
  echo "メールの送信に失敗しました";
};



// 管理者宛メール
$title_me = "【決済完了通知】ご予約内容の決済が完了しました";
$from_me = "lorem.co.ltd@gmail.com";
$content_me = "ご担当者様\nご予約内容の決済が完了しました。\n詳細についてはStripeの管理画面にてご確認お願い致します。\n■Stripe管理画面\nhttps://dashboard.stripe.com/test/payments\n※こちらは自動送信メールのため、返信頂くことができません。";
if(mb_send_mail($from_me,$title_me, $content_me, $header, "-f" .$from_addr)){
  echo "メールを送信しました";
} else {
  echo "メールの送信に失敗しました";
};

// サンキューページへリダイレクト
header('Location: https://docs.google.com/document/d/1DwycMJmxB96KT5tbw2k9hGaAM9Ijrt-FEeh5F-TZHLA/edit?usp=sharing');
exit;

?>