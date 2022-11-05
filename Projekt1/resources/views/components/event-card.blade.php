@props(['event'])

<x-card>
    <div class="flex">
        <img class="hidden w-48 mr-6 md:block"
            src="{{ $event->logo ? asset('storage/' . $event->logo) : asset('/images/no-image.png') }}" alt="" />
        <div>
            <h3 class="text-xl">
                <a href="/event/{{ $event->id }}">{{ $event->title }}</a>
            </h3>
            <div class="text-l font-bold mb-4">
                <li>Date: {{ $event->date }}</li>
            </div>

            <div class="text-lg mt-4">

                {{ $event->description }}
            </div>
        </div>
    </div>
</x-card>
