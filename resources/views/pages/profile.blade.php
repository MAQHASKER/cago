@extends('app')

@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<section class="position-relative py-4 py-xl-5" style="min-height: 100vh;">
    <div class="container">
        <div class="row d-flex flex-md-column flex-xl-row">
            <!-- Навигация в профиле -->
            @include('components.profile.nav')

            <!-- Блок профиля -->
            <div class="col-md-12 col-xl-10 col-xxl-9">
                <!-- Настройки профиля -->
                @include('components.profile.settings')

                <!-- Избранные товары -->
                @include('components.profile.favorite')
            </div>
        </div>
    </div>
</section>

@include('components.profile.scripts')
@endsection
