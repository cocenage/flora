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



window.initRecaptcha = function() {
        window.recaptchaWidget = grecaptcha.render('g-recaptcha', {
            sitekey: '{{ config("services.recaptcha.site") }}',
            callback: function(token) {
                Livewire.dispatch('recaptcha-verified', { token: token });
            },
            'expired-callback': function() {
                Livewire.dispatch('recaptcha-expired');
            },
            'error-callback': function() {
                Livewire.dispatch('recaptcha-error');
            }
        });
    };

    // Загрузка reCAPTCHA API с явным указанием callback
    (function() {
        var script = document.createElement('script');
        script.src = 'https://www.google.com/recaptcha/api.js?onload=initRecaptcha&render=explicit';
        script.async = true;
        script.defer = true;
        document.head.appendChild(script);
    })();

    // Сброс reCAPTCHA по запросу от Livewire
    document.addEventListener('livewire:init', function() {
        Livewire.on('reset-recaptcha', function() {
            if (window.recaptchaWidget) {
                grecaptcha.reset(window.recaptchaWidget);
            }
        });
    });


    document.addEventListener('alpine:init', () => {
    Alpine.data('phoneMask', () => ({
        formatPhone() {
            // Удаляем все нецифровые символы
            let numbers = this.phone.replace(/\D/g, '');

            // Форматируем номер по маске
            let formatted = '+7';
            if (numbers.length > 1) {
                formatted += ' (' + numbers.substring(1, 4);
            }
            if (numbers.length > 4) {
                formatted += ') ' + numbers.substring(4, 7);
            }
            if (numbers.length > 7) {
                formatted += '-' + numbers.substring(7, 9);
            }
            if (numbers.length > 9) {
                formatted += '-' + numbers.substring(9, 11);
            }

            // Обновляем значение
            this.phone = formatted;
        }
    }));
});



import AOS from 'aos';
import 'aos/dist/aos.css';

AOS.init({
    duration: 400,
    easing: 'ease-out',
    once: true,
});
