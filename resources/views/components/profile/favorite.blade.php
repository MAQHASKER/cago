<div id="favorites" class="section-content" style="display: none;">
    <section class="py-4 py-xl-5 py-xxl-0">
        <div class="container py-xxl-3 px-xxl-0 pt-xxl-0 pb-xxl-0 mb-xxl-3 mb-3">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="bg-dark border rounded border-0 border-dark overflow-hidden">
                <div class="row g-0">
                    <div class="col-md-6">
                        <div class="text-white p-4 p-md-5">
                            <h2 class="fw-bold text-white mb-3">Гитара 1&nbsp;</h2>
                            <ul class="list-unstyled">
                                <li class="d-flex mb-2"><span
                                        class="bs-icon-xs bs-icon-rounded bs-icon-primary bs-icon me-2 xs"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                            fill="currentColor" viewBox="0 0 16 16" class="bi bi-music-note-beamed">
                                            <path
                                                d="M6 13c0 1.105-1.12 2-2.5 2S1 14.105 1 13c0-1.104 1.12-2 2.5-2s2.5.896 2.5 2m9-2c0 1.105-1.12 2-2.5 2s-2.5-.895-2.5-2 1.12-2 2.5-2 2.5.895 2.5 2">
                                            </path>
                                            <path fill-rule="evenodd" d="M14 11V2h1v9zM6 3v10H5V3z"></path>
                                            <path d="M5 2.905a1 1 0 0 1 .9-.995l8-.8a1 1 0 0 1 1.1.995V3L5 4z">
                                            </path>
                                        </svg></span><span>Гитара 1 - Полное название</span></li>
                                <li class="d-flex mb-2"><span
                                        class="bs-icon-xs bs-icon-rounded bs-icon-primary bs-icon me-2 xs"><i
                                            class="fa fa-sliders"></i></span><span>Акустика</span></li>
                                <li class="d-flex mb-2"><span
                                        class="bs-icon-xs bs-icon-rounded bs-icon-primary bs-icon me-2 xs"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                            fill="currentColor" viewBox="0 0 16 16" class="bi bi-scooter">
                                            <path fill-rule="evenodd"
                                                d="M9 2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-.39l1.4 7a2.5 2.5 0 1 1-.98.195l-.189-.938-2.43 3.527A.5.5 0 0 1 9.5 13H4.95a2.5 2.5 0 1 1 0-1h4.287l2.831-4.11L11.09 3H9.5a.5.5 0 0 1-.5-.5M3.915 12a1.5 1.5 0 1 0 0 1H2.5a.5.5 0 0 1 0-1zm8.817-.789A1.499 1.499 0 0 0 13.5 14a1.5 1.5 0 0 0 .213-2.985l.277 1.387a.5.5 0 0 1-.98.196l-.278-1.387Z">
                                            </path>
                                        </svg></span><span>Самовывоз</span></li>
                                <li class="d-flex mb-2"><span
                                        class="bs-icon-xs bs-icon-rounded bs-icon-primary bs-icon me-2 xs"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                            fill="currentColor" viewBox="0 0 16 16" class="bi bi-plus-slash-minus">
                                            <path
                                                d="m1.854 14.854 13-13a.5.5 0 0 0-.708-.708l-13 13a.5.5 0 0 0 .708.708ZM4 1a.5.5 0 0 1 .5.5v2h2a.5.5 0 0 1 0 1h-2v2a.5.5 0 0 1-1 0v-2h-2a.5.5 0 0 1 0-1h2v-2A.5.5 0 0 1 4 1m5 11a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5A.5.5 0 0 1 9 12">
                                            </path>
                                        </svg></span><span>15.500<i class="fa fa-rub ms-2"
                                            style="font-size: 12px;"></i></span></li>
                                <li class="d-flex mb-2"><span
                                        class="bs-icon-xs bs-icon-rounded bs-icon-primary bs-icon me-2 xs"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                            fill="currentColor" viewBox="0 0 16 16" class="bi bi-tools">
                                            <path
                                                d="M1 0 0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.27 3.27a.997.997 0 0 0 1.414 0l1.586-1.586a.997.997 0 0 0 0-1.414l-3.27-3.27a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814zm9.646 10.646a.5.5 0 0 1 .708 0l2.914 2.915a.5.5 0 0 1-.707.707l-2.915-2.914a.5.5 0 0 1 0-.708M3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026z">
                                            </path>
                                        </svg></span><span>Бесплатная настройка</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 order-first order-md-last" style="min-height: 250px;"><button
                            class="btn btn-dark d-xxl-flex align-items-xxl-center my-1 mx-2" type="button"
                            style="position: absolute;">Удалить&nbsp;&nbsp;<i class="icon ion-android-delete"
                                style="font-size: 22px;color: var(--bs-danger);"></i></button><img
                            class="img-fluid w-100 h-100 fit-cover"
                            src="assets/img/esli-prisnilsya-kotenok30-03-2024-17-19.jpg?h=24ed5b653615a3b9ecdcb41c1abf815b">
                    </div>
                </div>
            </div>
        </div>
        <div class="container py-xxl-3 px-xxl-0 pt-xxl-0 pb-xxl-0 mb-xxl-3 mb-3">
            <div class="bg-dark border rounded border-0 border-dark overflow-hidden">
                <div class="row g-0">
                    <div class="col-md-6">
                        <div class="text-white p-4 p-md-5">
                            <h2 class="fw-bold text-white mb-3">Гитара 1&nbsp;</h2>
                            <ul class="list-unstyled">
                                <li class="d-flex mb-2"><span
                                        class="bs-icon-xs bs-icon-rounded bs-icon-primary bs-icon me-2 xs"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                            fill="currentColor" viewBox="0 0 16 16" class="bi bi-music-note-beamed">
                                            <path
                                                d="M6 13c0 1.105-1.12 2-2.5 2S1 14.105 1 13c0-1.104 1.12-2 2.5-2s2.5.896 2.5 2m9-2c0 1.105-1.12 2-2.5 2s-2.5-.895-2.5-2 1.12-2 2.5-2 2.5.895 2.5 2">
                                            </path>
                                            <path fill-rule="evenodd" d="M14 11V2h1v9zM6 3v10H5V3z"></path>
                                            <path d="M5 2.905a1 1 0 0 1 .9-.995l8-.8a1 1 0 0 1 1.1.995V3L5 4z">
                                            </path>
                                        </svg></span><span>Гитара 1 - Полное название</span></li>
                                <li class="d-flex mb-2"><span
                                        class="bs-icon-xs bs-icon-rounded bs-icon-primary bs-icon me-2 xs"><i
                                            class="fa fa-sliders"></i></span><span>Акустика</span></li>
                                <li class="d-flex mb-2"><span
                                        class="bs-icon-xs bs-icon-rounded bs-icon-primary bs-icon me-2 xs"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                            fill="currentColor" viewBox="0 0 16 16" class="bi bi-scooter">
                                            <path fill-rule="evenodd"
                                                d="M9 2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-.39l1.4 7a2.5 2.5 0 1 1-.98.195l-.189-.938-2.43 3.527A.5.5 0 0 1 9.5 13H4.95a2.5 2.5 0 1 1 0-1h4.287l2.831-4.11L11.09 3H9.5a.5.5 0 0 1-.5-.5M3.915 12a1.5 1.5 0 1 0 0 1H2.5a.5.5 0 0 1 0-1zm8.817-.789A1.499 1.499 0 0 0 13.5 14a1.5 1.5 0 0 0 .213-2.985l.277 1.387a.5.5 0 0 1-.98.196l-.278-1.387Z">
                                            </path>
                                        </svg></span><span>Самовывоз</span></li>
                                <li class="d-flex mb-2"><span
                                        class="bs-icon-xs bs-icon-rounded bs-icon-primary bs-icon me-2 xs"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                            fill="currentColor" viewBox="0 0 16 16" class="bi bi-plus-slash-minus">
                                            <path
                                                d="m1.854 14.854 13-13a.5.5 0 0 0-.708-.708l-13 13a.5.5 0 0 0 .708.708ZM4 1a.5.5 0 0 1 .5.5v2h2a.5.5 0 0 1 0 1h-2v2a.5.5 0 0 1-1 0v-2h-2a.5.5 0 0 1 0-1h2v-2A.5.5 0 0 1 4 1m5 11a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5A.5.5 0 0 1 9 12">
                                            </path>
                                        </svg></span><span>15.500<i class="fa fa-rub ms-2"
                                            style="font-size: 12px;"></i></span></li>
                                <li class="d-flex mb-2"><span
                                        class="bs-icon-xs bs-icon-rounded bs-icon-primary bs-icon me-2 xs"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                            fill="currentColor" viewBox="0 0 16 16" class="bi bi-tools">
                                            <path
                                                d="M1 0 0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.27 3.27a.997.997 0 0 0 1.414 0l1.586-1.586a.997.997 0 0 0 0-1.414l-3.27-3.27a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814zm9.646 10.646a.5.5 0 0 1 .708 0l2.914 2.915a.5.5 0 0 1-.707.707l-2.915-2.914a.5.5 0 0 1 0-.708M3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026z">
                                            </path>
                                        </svg></span><span>Бесплатная настройка</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 order-first order-md-last" style="min-height: 250px;"><button
                            class="btn btn-dark d-xxl-flex align-items-xxl-center my-1 mx-2" type="button"
                            style="position: absolute;">Удалить&nbsp;&nbsp;<i class="icon ion-android-delete"
                                style="font-size: 22px;color: var(--bs-danger);"></i></button><img
                            class="img-fluid w-100 h-100 fit-cover"
                            src="assets/img/esli-prisnilsya-kotenok30-03-2024-17-19.jpg?h=24ed5b653615a3b9ecdcb41c1abf815b">
                    </div>
                </div>
            </div>
        </div>
        <div class="container py-xxl-3 px-xxl-0 pt-xxl-0 pb-xxl-0 mb-xxl-3 mb-3">
            <div class="bg-dark border rounded border-0 border-dark overflow-hidden">
                <div class="row g-0">
                    <div class="col-md-6">
                        <div class="text-white p-4 p-md-5">
                            <h2 class="fw-bold text-white mb-3">Гитара 1&nbsp;</h2>
                            <ul class="list-unstyled">
                                <li class="d-flex mb-2"><span
                                        class="bs-icon-xs bs-icon-rounded bs-icon-primary bs-icon me-2 xs"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                            fill="currentColor" viewBox="0 0 16 16" class="bi bi-music-note-beamed">
                                            <path
                                                d="M6 13c0 1.105-1.12 2-2.5 2S1 14.105 1 13c0-1.104 1.12-2 2.5-2s2.5.896 2.5 2m9-2c0 1.105-1.12 2-2.5 2s-2.5-.895-2.5-2 1.12-2 2.5-2 2.5.895 2.5 2">
                                            </path>
                                            <path fill-rule="evenodd" d="M14 11V2h1v9zM6 3v10H5V3z"></path>
                                            <path d="M5 2.905a1 1 0 0 1 .9-.995l8-.8a1 1 0 0 1 1.1.995V3L5 4z">
                                            </path>
                                        </svg></span><span>Гитара 1 - Полное название</span></li>
                                <li class="d-flex mb-2"><span
                                        class="bs-icon-xs bs-icon-rounded bs-icon-primary bs-icon me-2 xs"><i
                                            class="fa fa-sliders"></i></span><span>Акустика</span></li>
                                <li class="d-flex mb-2"><span
                                        class="bs-icon-xs bs-icon-rounded bs-icon-primary bs-icon me-2 xs"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                            fill="currentColor" viewBox="0 0 16 16" class="bi bi-scooter">
                                            <path fill-rule="evenodd"
                                                d="M9 2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-.39l1.4 7a2.5 2.5 0 1 1-.98.195l-.189-.938-2.43 3.527A.5.5 0 0 1 9.5 13H4.95a2.5 2.5 0 1 1 0-1h4.287l2.831-4.11L11.09 3H9.5a.5.5 0 0 1-.5-.5M3.915 12a1.5 1.5 0 1 0 0 1H2.5a.5.5 0 0 1 0-1zm8.817-.789A1.499 1.499 0 0 0 13.5 14a1.5 1.5 0 0 0 .213-2.985l.277 1.387a.5.5 0 0 1-.98.196l-.278-1.387Z">
                                            </path>
                                        </svg></span><span>Самовывоз</span></li>
                                <li class="d-flex mb-2"><span
                                        class="bs-icon-xs bs-icon-rounded bs-icon-primary bs-icon me-2 xs"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                            fill="currentColor" viewBox="0 0 16 16" class="bi bi-plus-slash-minus">
                                            <path
                                                d="m1.854 14.854 13-13a.5.5 0 0 0-.708-.708l-13 13a.5.5 0 0 0 .708.708ZM4 1a.5.5 0 0 1 .5.5v2h2a.5.5 0 0 1 0 1h-2v2a.5.5 0 0 1-1 0v-2h-2a.5.5 0 0 1 0-1h2v-2A.5.5 0 0 1 4 1m5 11a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5A.5.5 0 0 1 9 12">
                                            </path>
                                        </svg></span><span>15.500<i class="fa fa-rub ms-2"
                                            style="font-size: 12px;"></i></span></li>
                                <li class="d-flex mb-2"><span
                                        class="bs-icon-xs bs-icon-rounded bs-icon-primary bs-icon me-2 xs"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                            fill="currentColor" viewBox="0 0 16 16" class="bi bi-tools">
                                            <path
                                                d="M1 0 0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.27 3.27a.997.997 0 0 0 1.414 0l1.586-1.586a.997.997 0 0 0 0-1.414l-3.27-3.27a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814zm9.646 10.646a.5.5 0 0 1 .708 0l2.914 2.915a.5.5 0 0 1-.707.707l-2.915-2.914a.5.5 0 0 1 0-.708M3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026z">
                                            </path>
                                        </svg></span><span>Бесплатная настройка</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 order-first order-md-last" style="min-height: 250px;"><button
                            class="btn btn-dark d-xxl-flex align-items-xxl-center my-1 mx-2" type="button"
                            style="position: absolute;">Удалить&nbsp;&nbsp;<i class="icon ion-android-delete"
                                style="font-size: 22px;color: var(--bs-danger);"></i></button><img
                            class="img-fluid w-100 h-100 fit-cover"
                            src="assets/img/esli-prisnilsya-kotenok30-03-2024-17-19.jpg?h=24ed5b653615a3b9ecdcb41c1abf815b">
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>