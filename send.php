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

// メール送信処理（例として標準のmail関数を使用）
$to = "admin@example.com"; // 送信先アドレス
$subject = "お問い合わせがありました";
$body = "名前: {$name}\n会社名: {$companyName}\nメール: {$email}\n年齢: {$age}\n内容:\n{$message}";
$headers = "From: {$email}";

// メール送信判定
$isSuccess = mail($to, $subject, $body, $headers);
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
        if ($isSuccess) {
            echo "<p>お問い合わせが送信されました。ありがとうございます！</p>";
        } else {
            echo "<p style='color:red;'>メールの送信に失敗しました。時間をおいて再度お試しください。</p>";
        }
        ?>
    </div>

    <p><a href="contact.php">お問い合わせフォームに戻る</a></p>
</body>
</html>