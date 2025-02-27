@php
    $reviews = [
        [
            'name' => 'Mehmet Can Vardar',
            'date' => '20.02.2025',
            'comment' =>
                'Asena Hanım mükemmel bir insan ve çok ama çok güzel. Onu çok seviyorum çünkü çok tatlı çok sempatik bir kadın. Onu tanıdığım için çok mutluyum. Asena iyi ki var.',
        ],
        [
            'name' => 'Ayşe Yılmaz',
            'date' => '20.02.2025',
            'comment' =>
                'Kedimizin uzun tüylerini tıraş ettirmek için sürekli anestezi verme derdimiz son buldu. Sorunsuz bir şekilde kısa sürede kedimizin tüyleri tıraş edildi. Kadın işçinin iyi bir işçi olduğunu düşünüyorum. Kedimizin mutlu olduğunu görüyoruz. Teşşekkürler.',
        ],
        [
            'name' => 'Ali Vardar',
            'date' => '20.02.2025',
            'comment' =>
                'Kedimizin tüyleri çok uzun ve kötü görünüyordu. Kadın işçinin iyi bir işçi olduğunu düşünüyorum. Kedimizin mutlu olduğunu görüyoruz. Teşşekkürler.',
        ],
        [
            'name' => 'Ayşe Yılmaz',
            'date' => '20.02.2025',
            'comment' =>
                'Kedimizin tüyleri çok uzun ve kötü görünüyordu. Kadın işçinin iyi bir işçi olduğunu düşünüyorum. Kedimizin mutlu olduğunu görüyoruz. Teşşekkürler.',
        ],
        [
            'name' => 'Mehmet Can Vardar',
            'date' => '20.02.2025',
            'comment' =>
                'Kedimizin uzun tüylerini tıraş ettirmek için sürekli anestezi verme derdimiz son buldu. Sorunsuz bir şekilde kısa sürede kedimizin tüyleri tıraş edildi. Kadın işçinin iyi bir işçi olduğunu düşünüyorum. Kedimizin mutlu olduğunu görüyoruz. Teşşekkürler.',
        ],
        [
            'name' => 'Ayşe Yılmaz',
            'date' => '20.02.2025',
            'comment' =>
                'Kedimizin uzun tüylerini tıraş ettirmek için sürekli anestezi verme derdimiz son buldu. Sorunsuz bir şekilde kısa sürede kedimizin tüyleri tıraş edildi. Kadın işçinin iyi bir işçi olduğunu düşünüyorum. Kedimizin mutlu olduğunu görüyoruz. Teşşekkürler.',
        ],
        [
            'name' => 'Ali Vardar',
            'date' => '20.02.2025',
            'comment' =>
                'Kedimizin tüyleri çok uzun ve kötü görünüyordu. Kadın işçinin iyi bir işçi olduğunu düşünüyorum. Kedimizin mutlu olduğunu görüyoruz. Teşşekkürler.',
        ],
        [
            'name' => 'Ayşe Yılmaz',
            'date' => '20.02.2025',
            'comment' =>
                'Kedimizin tüyleri çok uzun ve kötü görünüyordu. Kadın işçinin iyi bir işçi olduğunu düşünüyorum. Kedimizin mutlu olduğunu görüyoruz. Teşşekkürler.',
        ],
    ];
@endphp

<section id="reviews" class="bg-white">
    <div class="container mx-auto md:py-20 py-10 flex flex-col items-center justify-center md:gap-16 gap-8">
        <div class="flex flex-col gap-2">
            <h2 class="text-pet-700 font-bold text-center uppercase">
                Yorumlar
            </h2>
            <p class="text-black md:text-5xl text-3xl font-bold">
                Değerli Müşterilerimizden
            </p>
        </div>
        <div class="grid md:grid-cols-4 grid-cols-1 md:gap-10 gap-4 md:w-auto w-full">
            @foreach ($reviews as $review)
                <div
                    class="bg-white p-6 rounded-xl transition-all duration-300 border border-gray-200 font-serif w-full">
                    <div class="flex flex-row gap-3">
                        <div class="w-10 h-10 rounded-full bg-pet-700 flex items-center justify-center">
                            <span class="text-white font-bold text-xl">
                                {{ $review['name'][0] }}
                            </span>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-pet-700 font-bold text-lg leading-tight">
                                {{ $review['name'] }}
                            </span>
                            <span class="text-gray-500 text-sm">
                                {{ $review['date'] }}
                            </span>
                        </div>
                    </div>
                    <div class="flex flex-row items-center gap-0.5 mt-2">
                        @for ($i = 0; $i < 5; $i++)
                            <i class="fa-solid fa-star text-yellow-500"></i>
                        @endfor
                    </div>
                    <p class="text-gray-500 text-sm mt-2">
                        {{ $review['comment'] }}
                    </p>
                </div>
            @endforeach
        </div>

    </div>
</section>
