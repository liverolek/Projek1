<x-layout>

    <x-card class="p-10 rounded max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Edit event
            </h2>
            <p class="mb-4">Update event description</p>
        </header>

        <form method="POST" action="/event/{{ $event->id }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-6">
                <label for="title" class="inline-block text-lg mb-2">Title</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title"
                    value="{{ $event->title }}" />
                @error('title')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="date" class="inline-block text-lg mb-2">Date of the event</label>
                <input type="date" class="border border-gray-200 rounded p-2 w-full" name="date"
                    value="{{ $event->date }}" />
                @error('date')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="type_id" class="inline-block text-lg mb-2">Type</label>
                <input list="types" class="border border-gray-200 rounded p-2 w-full" name="type_id"
                    value="{{ $event->type_id }}"">
                <datalist id="types">
                    @foreach ($types as $type => $value)
                        <option value="{{ $type }}">{{ $value }}</option>
                    @endforeach
                </datalist>

                @error('type_id')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="description" class="inline-block text-lg mb-2">Description</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="description"
                    value="{{ $event->description }}" placeholder="Short text displayed on timeline" />
                @error('description')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="logo" class="inline-block text-lg mb-2">
                    Photo
                </label>
                <input type="file" class="border border-gray-200 rounded p-2 w-full" name="logo" />
                <img class="w-48 mr-6 mb-6"
                    src="{{ $event->logo ? asset('storage/' . $event->logo) : asset('/images/no-image.png') }}"
                    alt="" />

                @error('logo')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="long_description" class="inline-block text-lg mb-2">
                    Detailed description
                </label>
                <textarea class="border border-gray-200 rounded p-2 w-full" name="long_description" rows="10">{{ $event->long_description }}
            </textarea>
                @error('long_description')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                    Update
                </button>

                <a href="/" class="text-black ml-4"> Back </a>
            </div>
        </form>
    </x-card>
</x-layout>
