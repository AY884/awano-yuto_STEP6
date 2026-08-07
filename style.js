document.addEventListener('DOMContentLoaded', () => {
    const colorBtn = document.getElementById('color-btn');
    const footer = document.querySelector('footer');

    if (colorBtn && footer) {
        colorBtn.addEventListener('click', () => {
            // footerの背景色をランダムに変更、または指定の色に変更
            footer.style.backgroundColor = footer.style.backgroundColor === 'rgb(173, 216, 230)' ? '#eee' : '#add8e6';
        });
    }
});