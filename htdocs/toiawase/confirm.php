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


$title = "お問い合わせ";
include './cmm/head.php';
?>


<!-- コンテンツ -->
<div id="contact" class="container">
  <div class="row">
    <div class="col-xs-12 center-block">
      <div class="header text-center">
        <h1><?php echo $title; ?></h1>
        <p class="text-muted">内容送信前に、ご入力内容をご確認ください</p>
      </div>
    </div>
    <div class="col-xs-12 center-block">
      <form action="send.php" method="post" id="contract-form">
        <input type="hidden" name="company" value="<?php echo $company?>">
        <input type="hidden" name="name" value="<?php echo $name?>">
        <input type="hidden" name="tel" value="<?php echo $tel?>">
        <input type="hidden" name="mail" value="<?php echo $mail?>">
        <input type="hidden" name="kind" value="<?php echo $kind?>">
        <input type="hidden" name="content" value="<?php echo $content?>">
        <input type="hidden" name="persons" value="<?php echo $persons?>">
        <input type="hidden" name="period" value="<?php echo $period?>">

        <table class="table table-responsive contact-table">
          <tr>
            <th class="col-xs-3">貴社名</th>
            <td class="col-xs-9"><?php echo $company; ?></td>
          </tr>
          <tr>
            <th>名前</th>
            <td><?php echo $name; ?></td>
          </tr>
          <tr>
            <th>電話番号</th>
            <td><?php echo $tel; ?></td>
          </tr>
          <tr>
            <th>メールアドレス</th>
            <td><?php echo $mail; ?></td>
          </tr>
          <tr>
            <th>お問い合わせ種別</th>
            <td>
              <?php echo $kind; ?>
          </td>
          </tr>
          <tr>
            <th>お問い合わせ内容</th>
            <td><?php echo $content; ?></td>
          </tr>
          <tr>
            <th>想定ご利用人数</th>
            <td><?php echo $persons; ?></td>
          </tr>
          <tr>
            <th>導入検討時期</th>
            <td><?php echo $period; ?></td>
          </tr>
        </table>
        <div class="center-block text-center">
          <input type="submit" class="btn btn-success confirm-btn" value="送信する">
          <input type="button" class="btn btn-default back-btn" value="内容を編集する" onclick="history.back()">
        </div>
      </form>
    </div>
  </div>
</div>

<!-- フッター -->

<?php include './cmm/footer.php';?>
