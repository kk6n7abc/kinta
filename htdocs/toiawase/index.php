<?php
include './cmm/head.php';
?>
<div id="contact" class="container">
  <div class="row">
    <div class="col-xs-12 center-block">
      <div class="header text-center">
        <h1>お問い合わせ</h1>
        <p class="text-muted xs-small-font xs-text-left">
          ちゃっかり勤太くんに関する各種お問い合わせを受け付けています。<br>
          機能・料金・導入に関するご質問やご相談など、お気軽にご連絡下さい！
        </p>
        <div id="validate_errors"></div>
      </div>
    </div>
    <div class="col-xs-12 center-block xs-no-pd">
      <form action="confirm.php" method="post" id="contract-form">
        <table class="table table-responsive contact-table">
          <tr>
            <th>貴社名<span class="badge red">必須</span></th>
            <td><input size="20" type="text" name="company" id="company" class="required control" /></td>
          </tr>
          <tr>
            <th>名前<span class="badge red">必須</span></th>
            <td><input size="20" type="text" name="name" id="name" class="required control" /></td>
          </tr>
          <tr>
            <th>電話番号<span class="badge red">必須</span></th>
            <td><input size="20" type="text" name="tel" id="tel" class="required control" /></td>
          </tr>
          <tr>
            <th>メールアドレス<span class="badge red">必須</span></th>
            <td><input size="20" type="text" name="mail" id="mail" class="required control" /></td>
          </tr>
          <tr>
            <th>お問い合わせ種別<span class="badge gray">任意</span></th>
            <td>
              <ul>
                <li>
                  <input type="radio" name="kind" value="機能・料金・導入に関するご相談" id="kind_1" class="" />
                  <label for="kind_1">機能・料金・導入に関するご相談</label>
                </li>
                <li>
                  <input type="radio" name="kind" value="無料デモご相談" id="kind_2" class="" />
                  <label for="kind_2">無料デモご相談</label>
                </li>
                <li>
                  <input type="radio" name="kind" value="資料請求" id="kind_3" class="" />
                  <label for="kind_3">資料請求</label>
                </li>
                <li>
                  <input type="radio" name="kind" value="その他、勤太くんへのご質問など" id="kind_4" class="" />
                  <label for="kind_4">その他、勤太くんへのご質問など</label>
                </li>
              </ul>
            </td>
          </tr>
          <tr>
            <th>お問い合わせ内容<span class="badge gray">任意</span></th>
            <td>
              <textarea name="content" cols="50" rows="5" maxlength="200" id="f_content" class=" control"></textarea>
              <p class="text-right small">最大200文字</p>
            </td>
          </tr>
          <tr>
            <th>想定ご利用人数<span class="badge gray">任意</span></th>
            <td>
              <ul>
                <li>
                  <input type="radio" name="persons" value="〜50名" id="persons_1" class="" />
                  <label for="persons_1">〜50名</label>
                </li>
                <li>
                  <input type="radio" name="persons" value="50〜250名" id="persons_2" class="" />
                  <label for="persons_2">50〜250名</label>
                </li>
                <li>
                  <input type="radio" name="persons" value="250〜1000名" id="persons_3" class="" />
                  <label for="persons_3">250〜1000名</label>
                </li>
                <li>
                  <input type="radio" name="persons" value="1000名〜" id="persons_4" class="" />
                  <label for="persons_4">1000名〜</label>
                </li>
              </ul>
            </td>
          </tr>
          <tr>
            <th>導入検討時期<span class="badge gray">任意</span></th>
            <td>
              <ul>
                <li>
                  <input type="radio" name="period" value="早々に" id="period_1" class="" />
                  <label for="period_1">早々に</label>
                </li>
                <li>
                  <input type="radio" name="period" value="3ヶ月以内" id="period_2" class="" />
                  <label for="period_2">3ヶ月以内</label>
                </li>
                <li>
                  <input type="radio" name="period" value="１年以内" id="period_3" class="" />
                  <label for="period_3">１年以内</label>
                </li>
                <li>
                  <input type="radio" name="period" value="未定" id="period_4" class="" />
                  <label for="period_4">未定</label>
                </li>
              </ul>
            </td>
          </tr>
        </table>
        <div class="col-xs-12">
          <p class="text-center xs-small-font">
            サイトの<a href="">個人情報の取り扱い</a>について同意の上、<br>
            「送信内容を確認」ボタンをクリックして問い合わせください。
          </p>
        </div>
        <div class="center-block text-center">
          <input type="submit" class="btn btn-success submit-btn" value="同意して送信内容を確認">
        </div>
      </form>
    </div>
  </div>
</div>
<?
include './cmm/footer.php';