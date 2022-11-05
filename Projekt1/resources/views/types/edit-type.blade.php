<x-layout>

    <x-card class="p-10 rounded max-w-lg mx-auto mt-24">
    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">
            Edit type
        </h2>
        <p class="mb-4">Update type name and color</p>
    </header>
    
    <form method="POST" action="/type/{{$type->id}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-6">
            <label
                for="name"
                class="inline-block text-lg mb-2"
                >Name</label
            >
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="name" value="{{$type->name}}"
            />
            @error('name')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label
                for="color"
                class="inline-block text-lg mb-2"
                >Color</label
            >
            {{-- <input
                type="text"
            
                class="form-control colorpicker border-gray-200 rounded p-2 w-full" 
                name="color" value="{{$type->color}}"
            /> --}}
            
            <input list="types"
                
                {{-- class="border border-gray-200 rounded p-6 w-full" --}}
                class="form-control border-gray-200 rounded p-2 w-full" 
                name="color" value="{{$type->color}}"
            />

            <datalist id="types">
                
 
                <option value="blue"></option>
                <option value="yellow"></option>
                <option value="red"></option>
                <option value="green"></option>
                <option value="orange"></option>
                <option value="purple"></option>
                <option value="cyan"></option>
                <option value="pink"></option>
                <option value="black"></option>
               
             </datalist>



            @error('color')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>
    
         <div class="mb-6">
            <button
                class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
            >
                Update type
            </button>
    
            <a href="/types" class="text-black ml-4"> Back </a>
        </div>


        @section('javascript')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.3/js/bootstrap-colorpicker.min.js"></script>
        <script>
            $('.colorpicker').colorpicker({format: 'hex'});
        </script>
    @stop
    </form>
    </x-card>
    </x-layout>