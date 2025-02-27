<!DOCTYPE html>
<html lang="tr" class="h-dvh scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- SEO Optimizasyonları -->
    <title>@yield('title', 'Bark & Lounge')</title>
    <meta name="description" content="@yield('meta_description', __('app.description'))">
    <meta name="keywords" content="@yield('meta_keywords', 'Bark & Lounge, kuaför, köpek, köpek kuaförü, köpek kuaförü hizmeti, köpek kuaförü hizmeti Türkiye, pet kuaför, pet kuaförü, pet kuaförü hizmeti')">
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="Bark & Lounge">
    <meta property="og:description" content="{{ __('app.description') }}">
    <meta property="og:image" content="{{ asset('logo.png') }}">
    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}" />
    <!-- Robots -->
    <meta name="robots" content="index, follow">
    <link rel="stylesheet" href="https://atugatran.github.io/FontAwesome6Pro/css/all.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" href="{{ asset('logo.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('logo.png') }}">
    <link
        href="https://fonts.googleapis.com/css2?family=Pacifico&family=Playwrite+IT+Moderna:wght@100..400&family=STIX+Two+Text:ital,wght@0,400..700;1,400..700&family=Sour+Gummy:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css"
        integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css"
        integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="h-dvh flex flex-col bg-white overflow-x-hidden">
    @include('components.topbar', [
        'phone' => '+90 555 444 33 22',
        'address' => 'İstanbul, Türkiye',
        'socials' => [
            'instagram' => 'https://instagram.com/ornekhesap',
            'whatsapp' => 'https://wa.me/1234567890',
            'twitter' => 'https://twitter.com/ornekhesap',
        ],
    ])
    @include('components.header')
    @include('partials.mobile-sidebar')
    <main class="flex-1 bg-white pt-24 md:pt-0">
        @yield('content')
    </main>
    @include('components.footer')
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"
        integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        const mobileSidebar = document.getElementById('mobile-sidebar');
        const mobileSidebarToggle = document.getElementById('mobile-sidebar-toggle');
        const mobileSidebarOverlay = document.getElementById('mobile-sidebar-overlay');
        const mobileSidebarItems = document.querySelectorAll('.mobile-sidebar-item');
        const menuItems = document.querySelectorAll('.menu-item');

        const scrollToElement = (href, isMobile = false) => {
            if (!document.querySelector(href)) {
                window.location.href = "{{ url('/') }}" + href;
                return;
            }
            const element = document.querySelector(href);
            const headerHeight = document.querySelector('header').offsetHeight;
            window.scrollTo({
                top: isMobile ? element.offsetTop - headerHeight : element.offsetTop,
                behavior: 'smooth'
            });
        }

        mobileSidebarItems.forEach(item => {
            item.addEventListener('click', (event) => {
                event.preventDefault();
                scrollToElement(item.getAttribute('href'), true);
                hideMobileSidebar();
                event.stopPropagation();
            });
        });

        menuItems.forEach(item => {
            item.addEventListener('click', (event) => {
                event.preventDefault();
                scrollToElement(item.getAttribute('href'), false);
                hideMobileSidebar();
                event.stopPropagation();
            });
        });

        const hideMobileSidebar = () => {
            mobileSidebar.classList.remove('translate-x-0');
            mobileSidebar.classList.add('-translate-x-full');
            mobileSidebarOverlay.classList.add('hidden');
            document.body.classList.remove('overflow-hidden');
        }

        const showMobileSidebar = () => {
            mobileSidebar.classList.remove('-translate-x-full');
            mobileSidebar.classList.add('translate-x-0');
            mobileSidebarOverlay.classList.remove('hidden');
            document.body.classList.add('overflow-hidden');
        }

        mobileSidebarOverlay.addEventListener('click', () => {
            hideMobileSidebar();
        });

        mobileSidebarToggle.addEventListener('click', (event) => {
            event.preventDefault();
            showMobileSidebar();
        });

        window.addEventListener('resize', () => {
            if (window.innerWidth > 768) {
                hideMobileSidebar();
            }
        });

        $('.hero-slick').slick({
            autoplay: true,
            autoplaySpeed: 5000,
            arrows: true,
            dots: true,
        });
    </script>
    @yield('scripts')
</body>

</html>
