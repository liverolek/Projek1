<x-layout>
   

    <a href="/" class="inline-block text-black ml-4 mb-4"><i class="fa-solid fa-arrow-left"></i> Back
    </a>
    <div class="mx-4">
        <x-card class="p-10">
            <div class="flex flex-col items-center justify-center text-center">
                <h3 class="text-xl mb-6">Type: {{ $type->name }}</h3>
                
                <div class="text-500 font-bold mb-4">HEX Color: {{$type->color}}</div>
            <div><i class="fa-sharp fa-2x fa-solid fa-tag" style="color:{{$type->color}};"></i></div>
            </div>
        </x-card>

        <x-card class="mt-4 p-2 flex space-x-6">
            <a href="/type/{{ $type->id }}/edit">
                <i class="fa-solid fa-pencil"></i> Edit
            </a>

            {{-- Delete method to remove Type  --}}
            {{-- Disable due to events/process use type as a foreign key --}}
            {{-- <form method="POST" action="{{$type->id}}">
            @csrf
            @method('DELETE')
            <button class="text-red-500"><i class="fa-solid fa-trash"> </i> Delete
            </button>
        </form> --}}

        </x-card>
    </div>
</x-layout>
