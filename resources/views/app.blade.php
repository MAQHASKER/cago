<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    @include('components.head')
</head>

<body style="font-family: 'Roboto Flex', sans-serif;">
    @include('components.particals.nav')
    @yield('content')
    <footer class="text-white bg-dark">
        @include('components.footer')
    </footer>
    @include('components.particals.scripts')
    @stack('scripts')
</body>

</html>
