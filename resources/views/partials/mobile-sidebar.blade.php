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
<div id="mobile-sidebar-overlay"
    class="md:hidden hidden transition-all duration-300 fixed top-0 left-0 right-0 h-full bg-[#00000080] z-40 w-full">
</div>
<div id="mobile-sidebar"
    class="md:hidden transition-all duration-300 fixed top-0 left-0 right-0 h-full bg-white z-50 w-2/3 font-serif -translate-x-full flex flex-col">
    <div class="flex-1">
        @foreach ($menuItems as $item)
            <a href="{{ $item['url'] }}"
                class="flex flex-row items-center border-b border-b-neutral-200 p-4 mobile-sidebar-item">
                <span>{{ $item['title'] }}</span>
            </a>
        @endforeach
    </div>
    <div class="flex flex-row items-center justify-center h-12">
        <a href="https://wa.me/905462469237?text=Merhaba, hizmet almak istiyorum." target="_blank"
            rel="noopener noreferrer" title="WhatsApp ile iletişime geçin"
            class="h-12 flex-1 bg-[#25D366] text-white flex items-center justify-center text-xl hover:opacity-80 transition-all duration-300">
            <i class="fab fa-whatsapp"></i>
        </a>
        <a href="https://www.instagram.com/barkloungetr/" target="_blank" rel="noopener noreferrer"
            title="Instagram sayfamızı ziyaret edin"
            class="h-12 flex-1 bg-gradient-to-r from-[#833ab4] via-[#fd1d1d] to-[#fcb045] text-white flex items-center justify-center text-xl hover:opacity-80 transition-all duration-300">
            <i class="fab fa-instagram"></i>
        </a>
        <a href="https://www.tiktok.com/@barklounge" target="_blank" rel="noopener noreferrer"
            title="TikTok sayfamızı ziyaret edin"
            class="h-12 flex-1 bg-[#000] text-white flex items-center justify-center text-xl hover:opacity-80 transition-all duration-300">
            <i class="fab fa-tiktok"></i>
        </a>
    </div>
</div>
