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