<section id="blog" class="bg-neutral-100">
    <div class="container mx-auto md:py-20 py-10 flex flex-col items-center justify-center md:gap-16 gap-8">
        <div class="flex flex-col gap-2">
            <h2 class="text-pet-700 font-bold text-center uppercase">
                Bark & Lounge
            </h2>
            <p class="text-black md:text-5xl text-3xl font-bold">
                Son Blog Yazılarımız
            </p>
        </div>
        <div class="grid md:grid-cols-3 grid-cols-1 md:gap-10 gap-4 md:w-auto w-full">
            @foreach ($blogs as $blog)
                @include('components.blog-item', [
                    'image' => $blog['image'],
                    'title' => $blog['title'],
                    'description' => $blog['description'],
                    'author' => $blog['author'],
                    'date' => $blog['date'],
                    'category' => $blog['category'],
                    'slug' => $blog['slug'],
                ])
            @endforeach
        </div>
    </div>
</section>
