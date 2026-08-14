// 色の種類
const colors = ['blue', 'red', 'yellow', 'gray'];
let currentIndex = 0;
// ボタンとフッターの要素を取得
const btn = document.querySelector('#footer-bg-btn');
const footer = document.querySelector('footer');
// ボタンをクリックした時にフッターの背景色を変える
btn.addEventListener('click', () => {
    footer.style.backgroundColor = colors[currentIndex]; // フッターの背景色を変える
    currentIndex = (currentIndex + 1) % colors.length; // インデックスを更新する
});

// フォームの要素を取得（※フォームに id="contactForm" などを付与している前提です）
const form = document.querySelector('form');

if (form) {
    form.addEventListener('submit', function(event) {
        // 各入力値を取得
        const name = document.getElementById('name').value;
        const companyName = document.getElementById('companyName').value;
        const email = document.getElementById('email').value;
        const age = document.getElementById('age').value;
        const message = document.getElementById('message').value;

        // 未入力チェック（いずれかが空文字の場合）
        if (name === "" || companyName === "" || email === "" || age === "" || message === "") {
            // エラーメッセージを表示
            alert("必須項目が未入力です。入力内容をご確認ください。");
            // 送信を中止
            event.preventDefault();
            return;
        }

        // すべて入力されている場合の確認ダイアログ
        const confirmMessage = "下記の内容を本当に送信しますか？\n\n" +
            "お名前: " + name + "\n" +
            "会社名: " + companyName + "\n" +
            "メールアドレス: " + email + "\n" +
            "年齢: " + age + "\n" +
            "お問い合わせ内容: " + message;

        // confirmで「キャンセル」が押された場合は送信を中止
        if (!confirm(confirmMessage)) {
            event.preventDefault();
        }
    });
}