<?php
// 直接アクセス（GETアクセス等）された場合は contact.php へリダイレクト
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: contact.php');
    exit;
}

// POSTデータの受け取り
$name = $_POST['name'] ?? '';
$companyName = $_POST['companyName'] ?? '';
$email = $_POST['email'] ?? '';
$age = $_POST['age'] ?? '';
$message = $_POST['message'] ?? '';

$to = 'info@example.com';
$subject = 'お問い合わせが届きました';
$body = "
名前: $name
会社名: $companyName
メールアドレス: $email
年齢: $age
お問い合わせ内容: $message
";

// メール送信判定
// mailResultはメール送信が成功したかどうかを判定する変数
$mailResult = mail($to, $subject, $body);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>お問い合わせフォーム-送信完了画面</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>お問い合わせフォーム-送信完了画面</h1>

    <div class="message-area">
        <?php
        if ($mailResult) {
            echo "<p>お問い合わせが送信されました。ありがとうございます！</p>";
        } else {
            echo "<p style='color:red;'>メールの送信に失敗しました。時間をおいて再度お試しください。</p>";
        }
        ?>
    </div>

    <p><a href="contact.php">お問い合わせフォームに戻る</a></p>
</body>
</html>