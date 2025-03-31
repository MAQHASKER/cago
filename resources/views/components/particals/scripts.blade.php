{{-- Bootstrap JavaScript --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>

{{-- Подключение JavaScript файлов --}}
<script src="{{ asset('assets/js/Simple-Slider-swiper-bundle.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/Simple-Slider.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/Lightbox-Gallery-baguetteBox.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/Lightbox-Gallery.js') }}" type="text/javascript"></script>

{{-- Source maps для отладки --}}
<script>
    // Отключаем предупреждения о source maps
    window.addEventListener('error', function(e) {
        if (e.filename && e.filename.includes('.map')) {
            e.preventDefault();
        }
    }, true);
</script>
