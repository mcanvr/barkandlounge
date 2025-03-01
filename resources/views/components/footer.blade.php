@php
    $description =
        'Bark Lounge ailesi olarak, evcil dostlarınızın konfor ve mutluluğunu ön planda tutuyoruz. Modern, hijyenik ortamımızda, pet kuaför, günlük bakım ve konaklama hizmetleriyle onların güvende ve neşeli olmalarını sağlıyoruz.';
    $phone = '+90 546 246 9237';
    $address = 'Bahçelievler Mahallesi Ali Rıza Kuzucan Sk. No:50/B 34180 İstanbul';
    $email = 'barkloungetr@gmail.com';
    $instagram = 'https://www.instagram.com/barkloungetr/';
    $tiktok = 'https://www.tiktok.com/@barklounge';
    $privacyPolicy = '#';
    $cookiePolicy = '#';
    $termsOfService = '#';
    $home = route('home');
    $aboutUs = url('/') . '#about-us';
    $services = url('/') . '#services';
    $contact = url('/') . '#contact';
@endphp

<footer class="border-t border-t-neutral-200">
    <div class="bg-white">
        <div class="container mx-auto py-6 grid md:grid-cols-4 grid-cols-1 gap-6">
            <div class="flex flex-col gap-3">
                <img alt="Logo" src="{{ asset('logo.png') }}" class="h-[90px] w-[90px] object-contain" />
                <p class="text-neutral-700 pr-8 font-serif">
                    {{ $description }}
                </p>
            </div>
            <div class="flex flex-col gap-5">
                <h3 class="text-pet-800 font-serif font-medium text-2xl">
                    {{ __('app.contactUs') }}
                </h3>
                <ul class="flex flex-col gap-4 font-serif">
                    <li class="flex flex-row items-center gap-3">
                        <i class="far fa-phone"></i>
                        <a href="tel:{{ $phone }}" class="text-neutral-800">
                            {{ $phone }}
                        </a>
                    </li>
                    <li class="flex flex-row items-center gap-3">
                        <i class="far fa-envelope"></i>
                        <a href="mailto:{{ $email }}" class="text-neutral-800">
                            {{ $email }}
                        </a>
                    </li>
                    <li class="flex flex-row items-center gap-3">
                        <i class="far fa-location-dot"></i>
                        <a target="_blank" href="https://maps.app.goo.gl/uV7itRCwrihEc1HbA" class="text-neutral-800">
                            {{ $address }}
                        </a>
                    </li>
                </ul>
            </div>
            <div class="flex flex-col gap-5">
                <h3 class="text-pet-800 font-serif font-medium text-2xl">
                    {{ __('app.quickLinks') }}
                </h3>
                <ul class="flex flex-col gap-2 font-serif">
                    <li class="hover:pl-2 transition-all duration-300">
                        <a href="{{ $home }}" class="text-neutral-800">
                            {{ __('app.home') }}
                        </a>
                    </li>
                    <li class="hover:pl-2 transition-all duration-300">
                        <a href="{{ $aboutUs }}" class="text-neutral-800">
                            {{ __('app.aboutUs') }}
                        </a>
                    </li>
                    <li class="hover:pl-2 transition-all duration-300">
                        <a href="{{ $services }}" class="text-neutral-800">
                            {{ __('app.services') }}
                        </a>
                    </li>
                    <li class="hover:pl-2 transition-all duration-300">
                        <a href="{{ $contact }}" class="text-neutral-800">
                            {{ __('app.contact') }}
                        </a>
                    </li>
                </ul>
            </div>
            <div class="flex flex-col gap-5">
                <h3 class="text-pet-800 font-serif font-medium text-2xl">
                    {{ __('app.socialMedia') }}
                </h3>
                <ul class="flex flex-col gap-2 font-serif">
                    <li class="flex flex-row items-center">
                        <a target="_blank" href="{{ $instagram }}"
                            class="flex flex-row items-center gap-2 text-[#E1306C]">
                            <i class="fa-brands fa-instagram"></i>
                            Instagram
                        </a>
                    </li>
                    <li class="flex flex-row items-center">
                        <a target="_blank" href="{{ $tiktok }}"
                            class="flex flex-row items-center gap-2 text-[#000]">
                            <i class="fa-brands fa-tiktok"></i>
                            TikTok
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="bg-pet-900">
        <div
            class="container mx-auto py-4 flex md:flex-row flex-col md:items-center items-start gap-2 text-neutral-100 font-medium text-sm">
            <div class="flex-1">
                <span class="text-white font-bold">Bark & Lounge</span>© {{ __('app.allRightsReserved') }}
                {{ date('Y') }}
            </div>
            {{--             <div class="flex flex-row items-center gap-5">
                <a href="{{ $privacyPolicy }}" class="text-white">
                    {{ __('app.privacyPolicy') }}
                </a>
                <a href="{{ $termsOfService }}" class="text-white">
                    {{ __('app.termsOfService') }}
                </a>
            </div> --}}
        </div>
    </div>
</footer>
