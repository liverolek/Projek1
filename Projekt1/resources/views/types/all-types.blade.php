<x-layout>
    
  
    
  
    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
  
      @unless(count($types) == 0)
  
      @foreach($types as $type)
      <x-type-card :type="$type" />
      @endforeach
  
      @else
      <p>No listings found</p>
      @endunless
  
    </div>

   
        <div class="flex mt-10 justify-center">
            <a
            href="/type/create"
            
                class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
            >
                New type
        </a>
    
            <a href="/" class="text-black py-2 px-4 ml-4"> Back </a>
        </div>
  

  </x-layout>