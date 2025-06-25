import './bootstrap';
import AOS from 'aos';
import 'aos/dist/aos.css';

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







// В вашем основном JS файле
function initAOS() {
    AOS.init({
        duration: 400,
        easing: 'ease-out',
        once: true,
        initClassName: 'aos-init',
        animatedClassName: 'aos-animate',
    });
}

// Инициализация при загрузке
document.addEventListener('DOMContentLoaded', initAOS);

// Для Livewire
document.addEventListener('livewire:init', () => {
    Livewire.on('pageChanged', () => {
        AOS.refreshHard(); // Принудительный перезапуск
    });

    Livewire.on('navigated', () => {
        setTimeout(() => {
            AOS.refresh();
        }, 300);
    });
});





  document.addEventListener('livewire:init', () => {
        // Инициализация карты при первой загрузке
        initYandexMap();

        // Переинициализация при навигации
        Livewire.on('navigated', () => {
            setTimeout(initYandexMap, 300);
        });
    });

    function initYandexMap() {
        if (typeof ymaps !== 'undefined' && document.getElementById('map')) {
            ymaps.ready(function() {
                const map = new ymaps.Map('map', {
                    center: [48.708, 44.513], // Координаты Волгограда
                    zoom: 13
                });

                // Добавляем метку
                const placemark = new ymaps.Placemark([48.708, 44.513], {
                    hintContent: 'Flora - цветочный магазин',
                    balloonContent: 'ул. Пушкина, 15'
                }, {
                    iconLayout: 'default#image',
                    iconImageHref: '{{ asset("images/map-marker.png") }}',
                    iconImageSize: [40, 40],
                    iconImageOffset: [-20, -40]
                });

                map.geoObjects.add(placemark);
            });
        }
    }















    function formatPhone(input) {
    let value = input.value.replace(/\D/g, "");
    let formattedValue = "";

    if (value.startsWith("7")) {
        value = value.substring(1);
    }

    if (value.length > 0) {
        formattedValue = "+7 ";
        if (value.length > 0) formattedValue += `(${value.substring(0, 3)}`;
        if (value.length > 3) formattedValue += `) ${value.substring(3, 6)}`;
        if (value.length > 6) formattedValue += `-${value.substring(6, 8)}`;
        if (value.length > 8) formattedValue += `-${value.substring(8, 10)}`;
    }

    input.value = formattedValue;
}

// Инициализация для обычной загрузки
document.addEventListener("DOMContentLoaded", initPhoneInput);
// Инициализация для Livewire навигации
document.addEventListener("livewire:navigated", initPhoneInput);
document.addEventListener("livewire:load", initPhoneInput);

function initPhoneInput() {
    const phoneInput = document.getElementById("phone");

    if (!phoneInput) return;

    // Обработчик ввода
    phoneInput.addEventListener("input", (e) => {
        formatPhone(e.target);
        // Синхронизация с Livewire (если используется wire:model)
        if (e.target.hasAttribute("wire:model")) {
            const model = e.target.getAttribute("wire:model");
            Livewire.find(
                e.target.closest("[wire\\:id]").getAttribute("wire:id")
            ).set(model, e.target.value.replace(/\D/g, "").replace(/^7/, ""));
        }
    });

    // Обработчик Backspace
    phoneInput.addEventListener("keydown", (e) => {
        if (e.key === "Backspace") {
            setTimeout(() => formatPhone(e.target), 0);
        }
    });

    // Инициализация начального значения
    formatPhone(phoneInput);
}







// Инициализация карты
function initMap() {
  const mapElement = document.getElementById('map');
  if (!mapElement) return;

  // Удаляем старую карту если есть
  if (mapElement._leaflet_map) {
    mapElement._leaflet_map.remove();
    delete mapElement._leaflet_map;
  }

  const center = [48.706758, 44.513427];
  const map = L.map(mapElement, {
    attributionControl: false,
    preferCanvas: true
  }).setView(center, 16);

  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    detectRetina: true
  }).addTo(map);

  L.marker(center)
    .addTo(map)
    .bindPopup("ул. Пушкина, 15, Волгоград")
    .openPopup();

  setTimeout(() => map.invalidateSize(), 100);
  mapElement._leaflet_map = map;
}

// Первая загрузка
document.addEventListener('DOMContentLoaded', initMap);

// Обновление при навигации
document.addEventListener("livewire:navigated", initMap);



document.addEventListener('livewire:initialized', () => {
    Livewire.on('notify', (data) => {
        const iconColors = {
            success: '#4ade80',
            error: '#f87171',
            info: '#60a5fa',
            warning: '#fbbf24'
        };

        Swal.fire({
            toast: true,
            position: 'top-end',
            icon: data.type || 'success',
            title: data.message,
            showConfirmButton: false,
            timer: 3500,
            timerProgressBar: true,
            background: 'white',
            color: '#1f2937',
            padding: '1rem',
            width: '400px',
            customClass: {
                popup: 'border border-gray-200',
                icon: '!border-none',
                title: 'text-lg font-semibold'
            },
            iconColor: iconColors[data.type] || iconColors.success,
            showClass: {
                popup: 'animate__animated animate__fadeInRight animate__faster'
            },
            hideClass: {
                popup: 'animate__animated animate__fadeOutRight animate__faster'
            }
        });
    });
});

