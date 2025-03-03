@php
    $services = [
        [
            'icon' => 'shaving-machine.png',
            'title' => 'Makina Traşı',
            'description' => 'Evcil dostlarınızın sağlığı için tercihe bağlı olarak makine tıraşı sunuyoruz.',
        ],
        [
            'icon' => 'scissors.png',
            'title' => 'Makas Tıraşı',
            'description' =>
                'Minik dostlarımızı daha mutlu ve estetik bir hale getirmek için sizin özel istekleriniz doğrultusunda ırklara özel makas tıraşı hizmeti sunuyoruz.',
        ],
        [
            'icon' => 'magic-wand.png',
            'title' => 'Hijyen Traşı',
            'description' =>
                'Göz önü, pati altları, genital ve popo bölgesinin temizliğini yaparak dostlarımızın daha sağlıklı ve konforlu yaşamasını sağlıyoruz.',
        ],
        [
            'icon' => 'bath.png',
            'title' => 'Banyo ve tırnak kesimi',
            'description' =>
                'Özellikle evde yaşayan dostlarımıza, ayda 1 kez tüy yapısına uygun özel şampuanla yıkama işlemi öneriyoruz. Tüyleri kirden arındırıyor ve cildin nefes almasını sağlıyoruz. Minik dostunuzun genetik yapısına tırnak şekline ve anatomik özelliğine göre tırnak kesimi hizmeti sunuyoruz.',
        ],
        [
            'icon' => 'pets.png',
            'title' => 'Pet Kafe',
            'description' =>
                'Evcil dostlarımızın güvenle tanışıp sosyalleşebileceği bir ortamda sizlerde ikramlarımızla birlikte kafemizde bulunup keyifli vakit geçirebilirsiniz ',
        ],
        [
            'icon' => 'animal-shelter.png',
            'title' => 'Pet otel ve kreş',
            'description' =>
                'Tamamen evcil dostlarımızın konforuna ve keyfine uygun tasarlanmış odalarımızda kafes sistemi kullanmıyoruz ve onların sizlerden uzaktayken strese girmelerine izin vermiyoruz.',
        ],
    ];
@endphp

<section id="services" class="bg-neutral-100">
    <div class="container mx-auto md:py-20 py-10 flex flex-col items-center justify-center md:gap-16 gap-8">
        <div class="flex flex-col gap-2 items-center justify-center">
            <h2 class="text-pet-700 font-bold uppercase text-center">
                Dostlarımızın mutlu olması için
            </h2>
            <p class="text-black md:text-5xl text-3xl font-bold text-center">
                Hizmetlerimiz
            </p>
        </div>
        <div class="grid md:grid-cols-3 grid-cols-1 md:gap-10 gap-4 md:w-auto w-full">
            @foreach ($services as $service)
                <div
                    class="bg-white p-10 rounded-xl text-center font-serif items-center justify-center transition-all duration-300 w-full">
                    <div class="flex flex-col items-center justify-center h-32">
                        <img src="{{ asset($service['icon']) }}" alt="{{ $service['title'] }}"
                            title="{{ $service['title'] }} - Bark & Lounge" class="w-20 h-20">
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
