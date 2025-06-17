import './bootstrap';
document.querySelectorAll('.animated-link').forEach(link => {
    const underline = link.querySelector('.underline');

    // При наведении — линия появляется слева направо
    link.addEventListener('mouseenter', () => {
        underline.classList.remove('origin-right');
        underline.classList.add('origin-left', 'scale-x-100');
    });

    // При уходе курсора или клике — линия уходит справа налево
    const animateOut = () => {
        underline.classList.remove('origin-left', 'scale-x-100');
        underline.classList.add('origin-right', 'scale-x-0');
    };

    link.addEventListener('mouseleave', animateOut);
    link.addEventListener('click', animateOut);
});

