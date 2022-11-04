<x-layout>

    <x-card class="p-10 rounded max-w-lg mx-auto mt-24">
    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">
            Edit process
        </h2>
        <p class="mb-4">Update process description</p>
    </header>
    
    <form method="POST" action="/process/{{$process->id}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-6">
            <label
                for="title"
                class="inline-block text-lg mb-2"
                >Title</label
            >
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="title" value="{{$process->title}}"
            />
            @error('title')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        
    
        <div class="mb-6">
            <label for="start_date" class="inline-block text-lg mb-2"
                >The beginning of the process</label
            >
            <input
                type="date"
                class="border border-gray-200 rounded p-2 w-full"
                name="start_date" value="{{$process->start_date}}"
                
            />
            @error('start_date')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="end_date" class="inline-block text-lg mb-2"
                >The end of the process</label
            >
            <input
                type="date"
                class="border border-gray-200 rounded p-2 w-full"
                name="end_date" value="{{$process->end_date}}"
                
            />
            @error('end_date')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label
                for="type_id"
                class="inline-block text-lg mb-2"
                >Type</label
            >
            <input list="types" 
            class="border border-gray-200 rounded p-2 w-full" 
            name="type_id" value="{{$process->type_id}}"">
            <datalist id="types">
                @foreach ($types as $type => $value)
 
                <option value="{{$type}}">{{$value}}</option>
               @endforeach
             </datalist>

            @error('type_id')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>
    
        <div class="mb-6">
            <label
                for="description"
                class="inline-block text-lg mb-2"
                >Description</label
            >
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="description" value="{{$process->description}}"
                placeholder="Short text displayed on timeline"
            />
            @error('description')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>   
    
        <div class="mb-6">
            <label for="logo" class="inline-block text-lg mb-2">
                Photo
            </label>
            <input
                type="file"
                class="border border-gray-200 rounded p-2 w-full"
                name="logo"
            />
            <img
            class="w-48 mr-6 mb-6"
            src="{{$process->logo ? asset ('storage/' . $process->logo) : asset('/images/no-image.png')}}"
            alt=""
        />

            @error('logo')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>
    
        <div class="mb-6">
            <label
                for="long_description"
                class="inline-block text-lg mb-2"
            >
                Detailed description
            </label>
            <textarea
                class="border border-gray-200 rounded p-2 w-full"
                name="long_description" 
                rows="10"
                >{{$process->long_description}}
            </textarea>
            @error('long_description')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>
    
        <div class="mb-6">
            <button
                class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
            >
                Update
            </button>
    
            <a href="/" class="text-black ml-4"> Back </a>
        </div>
    </form>
    </x-card>
    </x-layout>