<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>お問い合わせフォーム</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <!-- 仕様b: headerタグ -->
  <header>
    <!-- 仕様a: h2タグで「お問い合わせフォーム」 -->
    <h2>お問い合わせフォーム</h2>
  </header>

  <main>
    <!-- 仕様j, k: sidebar（サイドバーのリンク） -->
    <aside class="sidebar">
      <ul>
        <li><a href="#">トップページ</a></li>
        <li><a href="#">人気投稿</a></li>
        <li><a href="#">エンジニアおすすめ商品</a></li>
        <li><a href="#">エンジニアおすすめ記事</a></li>
        <li><a href="#">投稿ページ</a></li>
      </ul>
    </aside>

    <!-- POSTメソッドで confirm.php へ送信 -->
    <form action="confirm.php" method="POST">
      <!-- 仕様c: テーブルの枠線太さは3px (border="3") -->
      <table border="3">
        <tr>
          <th>お名前</th>
          <td>
            <!-- 事前情報: name="name" / 仕様d: size="40" (半角40文字分) -->
            <input type="text" name="name" size="40">
          </td>
        </tr>
        <tr>
          <th>会社名</th>
          <td>
            <!-- 事前情報: name="companyName" / 仕様d: size="40" -->
            <input type="text" name="companyName" size="40">
          </td>
        </tr>
        <tr>
          <th>メールアドレス</th>
          <td>
            <!-- 事前情報: name="email" / 仕様d: size="40" -->
            <input type="email" name="email" size="40">
          </td>
        </tr>
        <tr>
          <th>年齢</th>
          <td>
            <!-- 事前情報: name="age" / 仕様d: size="40" -->
            <input type="text" name="age" size="40">
          </td>
        </tr>
        <tr>
          <th>お問い合わせ内容</th>
          <td>
            <!-- 事前情報: name="message" / 仕様e: テキストエリア -->
            <textarea name="message" placeholder="お問い合わせ内容"></textarea>
          </td>
        </tr>
      </table>

      <!-- 仕様f, h, i: inputタグで送信ボタン、値は「送信」 -->
      <br>
      <input type="submit" value="送信">
    </form>
  </main>

  <!-- 仕様l: footer内にボタン作成 -->
  <footer>
    <p>横のボタンを押すとfooterの背景色が変わります。</p>
    <!-- 仕様m: ボタンは「押してみてね！」 -->
    <button id="footer-bg-btn">押してみてね！</button>
  </footer>

  <script src="style.js"></script>
</body>
</html>