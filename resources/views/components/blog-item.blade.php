<div class="bg-white p-4 rounded-xl transition-all duration-300 border border-gray-200 font-serif w-full">
    <div class="relative h-48 w-full">
        <div class="bg-pet-50 rounded-xl py-1 px-3 text-pet-700 font-bold text-sm w-fit absolute top-3 right-3">
            {{ $category }}
        </div>
        <img class="w-full h-48 object-cover rounded-xl mb-4" src="{{ $image }}" alt="{{ $title }}"
            title="{{ $title }} - Bark & Lounge" />
    </div>
    <a href="{{ route('blogDetail', ['slug' => $slug]) }}" title="{{ $title }} - Bark & Lounge"
        class="text-black font-bold text-xl leading-tight mt-4 w-full block">
        {{ $title }}
    </a>
    <p class="text-gray-400 text-sm mt-2">
        {{ $description }}
    </p>
    <div class="flex flex-row items-center gap-2 mt-6 w-full">
        <div class="h-10 w-10 rounded-full bg-pet-100 flex items-center justify-center">
            <span class="text-pet-700 font-bold text-lg">
                {{ $author[0] }}
            </span>
        </div>
        <div class="flex flex-col">
            <span class="text-pet-700 font-bold text-lg leading-tight">
                {{ $author }}
            </span>
            <span class="text-gray-400 text-sm">
                {{ $date }}
            </span>
        </div>
    </div>
</div>
