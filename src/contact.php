<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>お問い合わせフォーム</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h2>お問い合わせフォーム</h2>
  </header>

  <main>
    <aside class="sidebar">
      <ul>
        <li><a href="#">トップページ</a></li>
        <li><a href="#">人気投稿</a></li>
        <li><a href="#">エンジニアおすすめ商品</a></li>
        <li><a href="#">エンジニアおすすめ記事</a></li>
        <li><a href="#">投稿ページ</a></li>
      </ul>
    </aside>

    <form action="confirm.php" method="POST">
      <table class="table">
        <tr>
          <th>お名前</th>
          <td>
            <input type="text" name="name" size="40">
          </td>
        </tr>
        <tr>
          <th>会社名</th>
          <td>
            <input type="text" name="companyName" size="40">
          </td>
        </tr>
        <tr>
          <th>メールアドレス</th>
          <td>
            <input type="email" name="email" size="40">
          </td>
        </tr>
        <tr>
          <th>年齢</th>
          <td>
            <input type="text" name="age" size="40">
          </td>
        </tr>
        <tr>
          <th>お問い合わせ内容</th>
          <td>
            <textarea name="message" placeholder="お問い合わせ内容"></textarea>
          </td>
        </tr>
      </table>

      <br>
      <input type="submit" value="送信">
    </form>
  </main>

  <footer>
    <p>横のボタンを押すとfooterの背景色が変わります。</p>
    <button type="button" id="footer-bg-btn">押してみてね！</button>
  </footer>

  <script src="style.js?v=2"></script>
</body>
</html>