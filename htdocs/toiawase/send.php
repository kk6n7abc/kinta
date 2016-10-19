<?php

$company = "";
$name    = "";
$tel     = "";
$mail    = "";
$kind    = "";
$content = "";
$persons = "";
$period  = "";

if(isset($_POST["company"])){
  $company = $_POST["company"];
}
if(isset($_POST["name"])){
  $name = $_POST["name"];
}
if(isset($_POST["tel"])){
  $tel = $_POST["tel"];
}
if(isset($_POST["mail"])){
  $mail = $_POST["mail"];
}
if(isset($_POST["kind"])){
  $kind = $_POST["kind"];
}
if(isset($_POST["content"])){
  $content = $_POST["content"];
}
if(isset($_POST["persons"])){
  $persons = $_POST["persons"];
}
if(isset($_POST["period"])){
  $period = $_POST["period"];
}

$seted_body_flg = true;

if ($company === "" && $name === "" && $tel === "" && $mail === "") {
  $seted_body_flg = false;
}

include './cmm/mailset.php';

//言語設定、内部エンコーディングを指定する
mb_language("japanese");
mb_internal_encoding($enCode);

//日本語メール送信
$to = $toAddress;
$from = $fromAddress;

$subject = "お問い合わせがありました：ちゃっかり勤太くん";

$body = "";
$body = $body."新着のお問い合わせが１件あります。"."\r\n\r\n";
$body = $body."貴社名：".$company."\r\n\r\n";
$body = $body."名前：".$name."\r\n\r\n";
$body = $body."電話番号 ：".$tel."\r\n\r\n";
$body = $body."メールアドレス：".$mail."\r\n\r\n";
$body = $body."お問い合わせ種別：".$kind."\r\n\r\n";
$body = $body."内容：\r\n".$content."\r\n\r\n";
$body = $body."想定ご利用人数：".$persons."\r\n\r\n";
$body = $body."導入検討時期：".$period."\r\n";

//ちゃんと日本語メールが送信できます
if($seted_body_flg && mb_send_mail($to,$subject,$body,"From:".$from)){
  // echo "YES";
}else{
  // echo "NO";
}

$title = "送信完了しました";
include './cmm/head.php';
?>

<!-- コンテンツ -->
<div id="contact" class="container">
  <div class="row">
    <div class="col-xs-12 center-block">
      <div id="main" class="text-center">
        <h1><?php echo $title; ?></h1>
        <div class="text-muted text-center xs-send-text" style="margin-top: 40px;">
          この度はお問い合わせメールをお送りいただきありがとうございます。<br>
          後ほど、担当者よりご連絡をさせていただきます。<br>
          今しばらくお待ちくださいますよう、よろしくお願い申し上げます。<br>
          なお、しばらくたっても返信、返答がない場合は、<br>
          お客様によりご入力いただいたメールアドレスに誤りがある場合がございます。<br>
          その際は、お手数ですが再度送信いただくか、<br>
          お電話( 03-5833-8808 )にてご連絡いただけますと幸いです。<br>
        </div>
        <a href="/" class="btn send-btn">サイトTOPに戻る</a>
      </div>
    </div>
  </div>
</div>
<?php include './cmm/footer.php';?>