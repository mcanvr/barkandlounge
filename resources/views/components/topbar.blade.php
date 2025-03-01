<div class="bg-pet-900 md:block hidden">
    <div class="container h-10 mx-auto flex flex-row items-center">
        <div class="flex-1 h-full flex flex-row items-center gap-3">
            <div class="text-sm text-neutral-100 font-serif">
                <span class="text-white font-medium">{{ __('app.phone') }}:</span> {{ $phone }}
            </div>
            <div class="text-sm text-neutral-100 font-serif">
                <span class="text-white font-medium">{{ __('app.address') }}:</span> {{ $address }}
            </div>
            <div class="text-sm text-neutral-100 font-serif">
                <i class="far fa-clock text-neutral-100"></i>
                <span class="text-neutral-100 font-serif">
                    {{ __('app.openingHours') }}: 10:00 - 19:00
                </span>
            </div>
        </div>
    </div>
</div>
