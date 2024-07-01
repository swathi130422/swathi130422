function toggleMenu() {
    const navLinks = document.querySelector('.nav-links');
    navLinks.classList.toggle('active');
}

document.querySelectorAll('.faq li span').forEach(item => {
    item.addEventListener('click', event => {
        const parent = event.target.parentElement;
        parent.classList.toggle('active');
    });
});
document.addEventListener('DOMContentLoaded', function () {
    var faqItems = document.querySelectorAll('.faq li');

    faqItems.forEach(function (item) {
        item.addEventListener('click', function () {
            var answer = this.querySelector('.answer');
            if (answer.style.display === 'none' || answer.style.display === '') {
                answer.style.display = 'block';
            } else {
                answer.style.display = 'none';
            }
        });
    });
});