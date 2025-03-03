@php
    $menuItems = [
        ['title' => __('app.home'), 'url' => route('home')],
        ['title' => __('app.aboutUs'), 'url' => '#about-us'],
        ['title' => __('app.services'), 'url' => '#services'],
        ['title' => 'Yorumlar', 'url' => '#reviews'],
        ['title' => 'Blog', 'url' => '#blog'],
        ['title' => __('app.contact'), 'url' => '#contact'],
    ];
@endphp
<header class="bg-white w-full border-b border-b-neutral-200 z-30 fixed md:relative md:top-0 md:left-0 md:right-0">
    <div class="container mx-auto h-24 flex flex-row items-center w-full">
        <a href="#" id="mobile-sidebar-toggle"
            class="md:hidden h-10 w-10 flex items-center hover:cursor-pointer hover:text-pet-700 transition-colors">
            <i class="fa-solid fa-bars text-black text-2xl"></i>
        </a>
        <a href="{{ route('home') }}" class="md:ml-0 ml-4">
            <img alt="Bark & Lounge - Pet Kuaför, Kreş ve Otel" title="Bark & Lounge - Pet Kuaför, Kreş ve Otel"
                src="{{ asset('logo.png') }}" class="md:h-[90px] md:w-[90px] h-[60px] w-[60px] object-contain" />
        </a>
        <div class="flex-1 h-full flex-row items-center justify-center gap-8 md:flex hidden">
            @foreach ($menuItems as $item)
                <a class="text-black font-medium hover:text-pet-700 transition-colors font-serif text-lg h-full flex items-center gap-2 menu-item"
                    href="{{ $item['url'] }}" title="{{ $item['title'] }}">
                    <i class="fa-solid fa-paw-simple rotate-45 text-pet-700"></i>
                    {{ $item['title'] }}
                </a>
            @endforeach
        </div>
        <div class="h-full md:flex-none flex-1 flex flex-row items-center justify-end">
            <a class="font-medium hover:text-pet-700 transition-colors font-serif text-lg h-full flex items-center"
                href="https://wa.me/905462469237?text=Merhaba, hizmet almak istiyorum." target="_blank"
                rel="noopener noreferrer" title="WhatsApp ile hızlı randevu alın">
                {{ __('app.appointment') }}
            </a>
        </div>
    </div>
</header>
