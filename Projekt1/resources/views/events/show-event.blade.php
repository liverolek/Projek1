<x-layout>


    <a href="/" class="inline-block text-black ml-4 mb-4"><i class="fa-solid fa-arrow-left"></i> Back
    </a>
    <div class="mx-4">
        <x-card class="p-10">
            <div class="flex flex-col items-center justify-center text-center">
                <img class="w-48 mr-6 mb-6"
                    src="{{ $event->logo ? asset('storage/' . $event->logo) : asset('/images/no-image.png') }}"
                    alt="" />

                <h3 class="text-2xl mb-6">{{ $event->title }}</h3>
                <div class="text-xl font-bold mb-6">
                    {{ $event->date }}</div>
                <div class="text-l font-bold mb-4">
                    <h4>Type: </h4>{{ $event->type_id }}
                </div>
                <div class="border border-gray-200 w-full mb-6"></div>
                <div>
                    <h3 class="text-xl font-bold mb-4">
                        Abstract
                    </h3>
                    <div class="text-lg space-y-6 mb-4">
                        {{ $event->description }}
                    </div>
                </div>
                <div class="border border-gray-200 w-full mb-6"></div>
                <div>
                    <h3 class="text-xl font-bold mb-4">
                        Detailed description
                    </h3>
                    <div class="text-lg space-y-6">

                        {{ $event->long_description }}

                    </div>
                </div>
            </div>

        </x-card>

        @auth
            <x-card class="mt-4 p-2 flex space-x-6">
                <a href="/event/{{ $event->id }}/edit">
                    <i class="fa-solid fa-pencil"></i> Edit
                </a>
                <form method="POST" action="{{ $event->id }}">
                    @csrf
                    @method('DELETE')
                    <button class="text-red-500"><i class="fa-solid fa-trash"> </i> Delete

                    </button>

                </form>
            </x-card>
        @endauth
    </div>

</x-layout>
