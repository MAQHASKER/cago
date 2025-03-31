@extends('app')

@section('content')
<div class="simple-slider">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide"
                style="background: url(&quot;assets/img/i.webp?h=fc70361c0ce56f95c245f36afee4722f&quot;) center center / cover no-repeat;">
            </div>
            <div class="swiper-slide"
                style="background: url(&quot;assets/img/80c1e352cf033fbc258efcc88949c45e.jpg?h=b832f05a4b5f728ed7d37b671098963a&quot;) center center / cover no-repeat;">
            </div>
            <div class="swiper-slide"
                style="background: url(&quot;assets/img/esli-prisnilsya-kotenok30-03-2024-17-19.jpg?h=24ed5b653615a3b9ecdcb41c1abf815b&quot;) center center / cover no-repeat;">
            </div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
</div>
<div class="container py-4 py-xl-5">
    <div class="row mb-5">
        <div class="col-md-8 col-xl-6 text-center mx-auto">
            <h2>Последние НОВИНКИ!!!</h2>
            <p class="w-lg-50">Не пропустите самые свежие и горячие новинки этого сезона! Мы собрали для вас лучшие
                тренды, эксклюзивные коллекции и долгожданные релизы, которые точно вас удивят. Будь то мода,
                технологии, красота или развлечения — здесь только самое актуальное и интересное. Оставайтесь в тренде и
                будьте первыми, кто попробует новое! Следите за обновлениями — скучно не будет! 🚀🔥</p>
        </div>
    </div>
    <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
        <div class="col">
            <div class="card"><img class="img-fluid card-img-top w-100 d-block fit-cover"
                    style="height: 200px;background: url(&quot;assets/img/80c1e352cf033fbc258efcc88949c45e.jpg?h=b832f05a4b5f728ed7d37b671098963a&quot;);"
                    src="assets/img/80c1e352cf033fbc258efcc88949c45e.jpg?h=b832f05a4b5f728ed7d37b671098963a">
                <div class="card-body p-4">
                    <div>
                        <h6 class="text-uppercase text-muted">Название</h6>
                        <h4 class="display-6 fw-bold d-xxl-flex align-items-xxl-center">15.500<i class="fa fa-rub"
                                style="font-size: 30px;"></i></h4>
                        <hr>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur. (69 слов МАКС)</p>
                    </div><a class="btn btn-primary d-block w-100" role="button" href="#">Купить</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card"><img class="img-fluid card-img-top w-100 d-block fit-cover"
                    style="height: 200px;background: url(&quot;assets/img/80c1e352cf033fbc258efcc88949c45e.jpg?h=b832f05a4b5f728ed7d37b671098963a&quot;);"
                    src="assets/img/esli-prisnilsya-kotenok30-03-2024-17-19.jpg?h=24ed5b653615a3b9ecdcb41c1abf815b">
                <div class="card-body p-4">
                    <div>
                        <h6 class="text-uppercase text-muted">Название</h6>
                        <h4 class="display-6 fw-bold d-xxl-flex align-items-xxl-center">15.500<i class="fa fa-rub"
                                style="font-size: 30px;"></i></h4>
                        <hr>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur. (69 слов МАКС)</p>
                    </div><a class="btn btn-primary d-block w-100" role="button" href="#">Купить</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card"><img class="img-fluid card-img-top w-100 d-block fit-cover"
                    style="height: 200px;background: url(&quot;assets/img/80c1e352cf033fbc258efcc88949c45e.jpg?h=b832f05a4b5f728ed7d37b671098963a&quot;);"
                    src="assets/img/i.webp?h=fc70361c0ce56f95c245f36afee4722f">
                <div class="card-body p-4">
                    <div>
                        <h6 class="text-uppercase text-muted">Название</h6>
                        <h4 class="display-6 fw-bold d-xxl-flex align-items-xxl-center">15.500<i class="fa fa-rub"
                                style="font-size: 30px;"></i></h4>
                        <hr>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur. (69 слов МАКС)</p>
                    </div><a class="btn btn-primary d-block w-100" role="button" href="#">Купить</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
