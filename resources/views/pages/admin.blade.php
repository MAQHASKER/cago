@extends('app')

@section('content')
<section class="position-relative py-4 py-xl-5" style="min-height: 100vh;">
    <div class="container">
        <div class="row d-flex justify-content-center flex-md-column flex-xxl-row">
            <div class="col-md-12 col-xl-12 col-xxl-3">
                <div class="offcanvas-body d-flex flex-column justify-content-between pt-0">
                    <div>
                        <ul class="nav nav-pills flex-column mb-auto">
                            <li class="nav-item"><a class="nav-link active link-light" href="#" aria-current="page"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"
                                        fill="none" class="me-2">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7ZM14 7C14 8.10457 13.1046 9 12 9C10.8954 9 10 8.10457 10 7C10 5.89543 10.8954 5 12 5C13.1046 5 14 5.89543 14 7Z"
                                            fill="currentColor"></path>
                                        <path
                                            d="M16 15C16 14.4477 15.5523 14 15 14H9C8.44772 14 8 14.4477 8 15V21H6V15C6 13.3431 7.34315 12 9 12H15C16.6569 12 18 13.3431 18 15V21H16V15Z"
                                            fill="currentColor"></path>
                                    </svg>&nbsp;Все пользователи</a></li>
                            <li class="nav-item"><a class="nav-link link-body-emphasis" href="#"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"
                                        fill="none" class="me-2">
                                        <path d="M11 11V8H13V11H16V13H13V16H11V13H8V11H11Z" fill="currentColor"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M3 12C3 16.9706 7.02944 21 12 21H18C19.6569 21 21 19.6569 21 18V12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12ZM12 5C15.866 5 19 8.13401 19 12C19 15.866 15.866 19 12 19C8.13401 19 5 15.866 5 12C5 8.13401 8.13401 5 12 5Z"
                                            fill="currentColor"></path>
                                    </svg>&nbsp;Редактирование номенклатуры</a></li>
                            <li class="nav-item"><a class="nav-link link-body-emphasis" href="#"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"
                                        fill="none" class="me-2">
                                        <path
                                            d="M7 14C8.10457 14 9 13.1046 9 12C9 10.8954 8.10457 10 7 10C5.89543 10 5 10.8954 5 12C5 13.1046 5.89543 14 7 14Z"
                                            fill="currentColor"></path>
                                        <path
                                            d="M14 12C14 13.1046 13.1046 14 12 14C10.8954 14 10 13.1046 10 12C10 10.8954 10.8954 10 12 10C13.1046 10 14 10.8954 14 12Z"
                                            fill="currentColor"></path>
                                        <path
                                            d="M17 14C18.1046 14 19 13.1046 19 12C19 10.8954 18.1046 10 17 10C15.8954 10 15 10.8954 15 12C15 13.1046 15.8954 14 17 14Z"
                                            fill="currentColor"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M24 12C24 18.6274 18.6274 24 12 24C5.37258 24 0 18.6274 0 12C0 5.37258 5.37258 0 12 0C18.6274 0 24 5.37258 24 12ZM22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z"
                                            fill="currentColor"></path>
                                    </svg>&nbsp;Просмотр заявок</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-xl-12 col-xxl-9">
                <section class="py-4 py-xl-5 py-xxl-0">
                    <div class="input-group mb-3"><span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg"
                                width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-search">
                                <path
                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0">
                                </path>
                            </svg></span><input class="form-control" type="text"><button class="btn btn-primary"
                            type="button">Поиск по логину</button></div>
                    <div class="accordion mt-xxl-3 mb-xxl-3" role="tablist" id="accordion-1">
                        <div class="accordion-item">
                            <h2 class="accordion-header" role="tab"><button class="accordion-button" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#accordion-1 .item-1" aria-expanded="true"
                                    aria-controls="accordion-1 .item-1">nugols</button></h2>
                            <div class="accordion-collapse collapse show item-1" role="tabpanel"
                                data-bs-parent="#accordion-1">
                                <div class="accordion-body">
                                    <ul class="list-group">
                                        <li class="list-group-item"><span>Я хз что тут писать?</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" role="tab"><button class="accordion-button collapsed"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#accordion-1 .item-2"
                                    aria-expanded="false" aria-controls="accordion-1 .item-2">nugols</button></h2>
                            <div class="accordion-collapse collapse item-2" role="tabpanel"
                                data-bs-parent="#accordion-1">
                                <div class="accordion-body">
                                    <ul class="list-group">
                                        <li class="list-group-item"><span>Я хз что тут писать?</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" role="tab"><button class="accordion-button collapsed"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#accordion-1 .item-3"
                                    aria-expanded="false" aria-controls="accordion-1 .item-3">nugols</button></h2>
                            <div class="accordion-collapse collapse item-3" role="tabpanel"
                                data-bs-parent="#accordion-1">
                                <div class="accordion-body">
                                    <ul class="list-group">
                                        <li class="list-group-item"><span>Я хз что тут писать?</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="py-4 py-xl-5 py-xxl-0">
                    <div class="container py-xxl-3 px-xxl-0 pt-xxl-0 pb-xxl-0 mb-xxl-3">
                        <div class="bg-dark border rounded border-0 border-dark overflow-hidden">
                            <div class="row g-0">
                                <div class="col-md-6">
                                    <div class="text-white p-4 p-md-5">
                                        <h2 class="fw-bold text-white mb-3">Название гитары</h2>
                                        <ul class="list-unstyled">
                                            <li class="d-flex mb-2"><span
                                                    class="bs-icon-xs bs-icon-rounded bs-icon-primary bs-icon me-2 xs"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                                        fill="currentColor" viewBox="0 0 16 16"
                                                        class="bi bi-music-note-beamed">
                                                        <path
                                                            d="M6 13c0 1.105-1.12 2-2.5 2S1 14.105 1 13c0-1.104 1.12-2 2.5-2s2.5.896 2.5 2m9-2c0 1.105-1.12 2-2.5 2s-2.5-.895-2.5-2 1.12-2 2.5-2 2.5.895 2.5 2">
                                                        </path>
                                                        <path fill-rule="evenodd" d="M14 11V2h1v9zM6 3v10H5V3z"></path>
                                                        <path
                                                            d="M5 2.905a1 1 0 0 1 .9-.995l8-.8a1 1 0 0 1 1.1.995V3L5 4z">
                                                        </path>
                                                    </svg></span><span>Полное название гитары</span></li>
                                            <li class="d-flex mb-2"><span
                                                    class="bs-icon-xs bs-icon-rounded bs-icon-primary bs-icon me-2 xs"><i
                                                        class="fa fa-sliders"></i></span><span>Тип гитары</span></li>
                                            <li class="d-flex mb-2"><span
                                                    class="bs-icon-xs bs-icon-rounded bs-icon-primary bs-icon me-2 xs"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                                        fill="currentColor" viewBox="0 0 16 16" class="bi bi-scooter">
                                                        <path fill-rule="evenodd"
                                                            d="M9 2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-.39l1.4 7a2.5 2.5 0 1 1-.98.195l-.189-.938-2.43 3.527A.5.5 0 0 1 9.5 13H4.95a2.5 2.5 0 1 1 0-1h4.287l2.831-4.11L11.09 3H9.5a.5.5 0 0 1-.5-.5M3.915 12a1.5 1.5 0 1 0 0 1H2.5a.5.5 0 0 1 0-1zm8.817-.789A1.499 1.499 0 0 0 13.5 14a1.5 1.5 0 0 0 .213-2.985l.277 1.387a.5.5 0 0 1-.98.196l-.278-1.387Z">
                                                        </path>
                                                    </svg></span><span>Доставка?</span></li>
                                            <li class="d-flex mb-2"><span
                                                    class="bs-icon-xs bs-icon-rounded bs-icon-primary bs-icon me-2 xs"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                                        fill="currentColor" viewBox="0 0 16 16"
                                                        class="bi bi-plus-slash-minus">
                                                        <path
                                                            d="m1.854 14.854 13-13a.5.5 0 0 0-.708-.708l-13 13a.5.5 0 0 0 .708.708ZM4 1a.5.5 0 0 1 .5.5v2h2a.5.5 0 0 1 0 1h-2v2a.5.5 0 0 1-1 0v-2h-2a.5.5 0 0 1 0-1h2v-2A.5.5 0 0 1 4 1m5 11a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5A.5.5 0 0 1 9 12">
                                                        </path>
                                                    </svg></span><span>Стоимость<i class="fa fa-rub ms-2"
                                                        style="font-size: 12px;"></i></span></li>
                                            <li class="d-flex mb-2"><span
                                                    class="bs-icon-xs bs-icon-rounded bs-icon-primary bs-icon me-2 xs"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                                        fill="currentColor" viewBox="0 0 16 16" class="bi bi-tools">
                                                        <path
                                                            d="M1 0 0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.27 3.27a.997.997 0 0 0 1.414 0l1.586-1.586a.997.997 0 0 0 0-1.414l-3.27-3.27a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814zm9.646 10.646a.5.5 0 0 1 .708 0l2.914 2.915a.5.5 0 0 1-.707.707l-2.915-2.914a.5.5 0 0 1 0-.708M3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026z">
                                                        </path>
                                                    </svg></span><span>Дополнительные атрибуты</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 order-first order-md-last" style="min-height: 250px;"><button
                                        class="btn btn-dark d-xxl-flex align-items-xxl-center my-1 mx-2" type="button"
                                        style="position: absolute;">Создать&nbsp;<i class="icon ion-android-done"
                                            style="font-size: 22px;color: var(--bs-success);"></i></button><button
                                        class="btn btn-dark d-xxl-flex align-items-xxl-center my-1 mx-2" type="button"
                                        style="position: absolute;transform: translateX(0px) translateY(51px);">Добавить
                                        фото&nbsp;<i class="icon ion-android-download"
                                            style="font-size: 22px;color: var(--bs-primary);"></i></button><img
                                        class="img-fluid w-100 h-100 fit-cover"
                                        src="assets/img/esli-prisnilsya-kotenok30-03-2024-17-19.jpg?h=24ed5b653615a3b9ecdcb41c1abf815b">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>
@endsection
