@php
    $description = __('app.description');
    $phone = '+90 533 888 88 88';
    $address = 'İstanbul, Türkiye';
    $email = 'info@barkandlounge.com';
    $instagram = 'https://www.instagram.com/barkandlounge/';
    $facebook = 'https://www.facebook.com/barkandlounge/';
    $twitter = 'https://twitter.com/barkandlounge/';
    $youtube = 'https://www.youtube.com/channel/UC_9-kyTW8ZkZNDHQJ6FgpwQ';
    $linkedin = 'https://www.linkedin.com/company/barkandlounge/';
    $privacyPolicy = 'https://www.barkandlounge.com/privacy-policy';
    $cookiePolicy = 'https://www.barkandlounge.com/cookie-policy';
    $termsOfService = 'https://www.barkandlounge.com/terms-of-service';
    $home = route('home');
    $aboutUs = '#about-us';
    $services = '#services';
    $contact = '#contact';
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
                        <a href="https://goo.gl/maps/1234567890" class="text-neutral-800">
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
                        <a href="{{ $instagram }}" class="flex flex-row items-center gap-2 text-[#E1306C]">
                            <i class="fa-brands fa-instagram"></i>
                            Instagram
                        </a>
                    </li>
                    <li class="flex flex-row items-center">
                        <a href="{{ $facebook }}" class="flex flex-row items-center gap-2 text-[#1877F2]">
                            <i class="fa-brands fa-facebook"></i>
                            Facebook
                        </a>
                    </li>
                    <li class="flex flex-row items-center">
                        <a href="{{ $twitter }}" class="flex flex-row items-center gap-2 text-neutral-800">
                            <i class="fa-brands fa-x"></i>
                            Twitter
                        </a>
                    </li>
                    <li class="flex flex-row items-center">
                        <a href="{{ $youtube }}" class="flex flex-row items-center gap-2 text-[#FF0000]">
                            <i class="fa-brands fa-youtube"></i>
                            Youtube
                        </a>
                    </li>
                    <li class="flex flex-row items-center">
                        <a href="{{ $linkedin }}" class="flex flex-row items-center gap-3 text-[#0077B5]">
                            <i class="fa-brands fa-linkedin"></i>
                            LinkedIn
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
            <div class="flex flex-row items-center gap-5">
                <a href="{{ $privacyPolicy }}" class="text-white">
                    {{ __('app.privacyPolicy') }}
                </a>
                <a href="{{ $cookiePolicy }}" class="text-white">
                    {{ __('app.cookiePolicy') }}
                </a>
                <a href="{{ $termsOfService }}" class="text-white">
                    {{ __('app.termsOfService') }}
                </a>
            </div>
        </div>
    </div>
</footer>
