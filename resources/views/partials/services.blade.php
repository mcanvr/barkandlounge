@php
    $services = [
        [
            'icon' => 'shaving-machine.png',
            'title' => 'Makina Traşı',
            'description' =>
                'Birlikte yaşadığınız evcil hayvanlarınıza sıcaklık ve dökülmelere bağlı olarak tercihe göre 2cm\'e kadar makina tıraşı işlemi sunuyoruz.',
        ],
        [
            'icon' => 'scissors.png',
            'title' => 'Makas Tıraşı',
            'description' =>
                'Minik dostlarınızı daha mutlu ve estetik bir hale çevirmek için sizin isteğiniz doğrultusunda makas tıraşı hizmeti sunuyoruz.',
        ],
        [
            'icon' => 'bath.png',
            'title' => 'Banyo',
            'description' =>
                'Özellikle evde yaşayan dostlarınızın ve evinizin sterilliği için ayda 1 kez tüy yapısına uygun özel şampuanla yıkama işlemi öneriyoruz.',
        ],
        [
            'icon' => 'paw.png',
            'title' => 'Tırnak kesimi',
            'description' =>
                'Küçük dostunuzun genetik yapısına tırnak şekline ve anatomik özelliğine göre tırnak kesimi hizmeti sunmaktayız.',
        ],
        [
            'icon' => 'magic-wand.png',
            'title' => 'Rötuş',
            'description' =>
                'Göz, kulak, pati altları, popo ve genital bölge temizlenmesini sağlayarak evcil dostunuzun bakımını en iyi şekilde yapmaktayız.',
        ],
        [
            'icon' => 'brush.png',
            'title' => 'Tarama',
            'description' =>
                'Minik dostlarınızın tüylerinin bakımlı ve güzel görünmesi için belirli periyotlarla tarama işlemi yaparak ilk günkü gibi temiz olmasını sağlıyoruz.',
        ],
    ];
@endphp

<section id="services" class="bg-neutral-100">
    <div class="container mx-auto md:py-20 py-10 flex flex-col items-center justify-center md:gap-16 gap-8">
        <div class="flex flex-col gap-2 items-center justify-center">
            <h2 class="text-pet-700 font-bold uppercase">
                Dostlarımızın mutlu olması için
            </h2>
            <p class="text-black md:text-5xl text-3xl font-bold">
                Hizmetlerimiz
            </p>
        </div>
        <div class="grid md:grid-cols-3 grid-cols-1 md:gap-10 gap-4 md:w-auto w-full">
            @foreach ($services as $service)
                <div
                    class="bg-white p-10 rounded-xl text-center font-serif items-center justify-center hover:shadow-lg hover:scale-105 hover:rotate-2 transition-all duration-300 w-full">
                    <div class="flex flex-col items-center justify-center h-32">
                        <img src="{{ asset('icons/' . $service['icon']) }}" alt="{{ $service['title'] }}"
                            class="w-20 h-20">
                        <h3 class="text-pet-700 font-bold text-xl uppercase mt-4 mb-4">
                            {{ $service['title'] }}
                        </h3>
                    </div>
                    <p class="text-neutral-700 font-light">
                        {{ $service['description'] }}
                    </p>
                </div>
            @endforeach
        </div>
    </div>
</section>
