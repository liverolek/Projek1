<x-layout>
    
  
  <h2 class="flex text-2xl justify-center font-bold uppercase mb-1 my-10">
    Memories
</h2>
<p class="flex justify-center my-5">
    Welcome,
    here you find some memories from our community life
</p>
  
    <div class="lg:grid lg:grid-cols-1 gap-4 space-y-4 md:space-y-0 mx-4">
  
      @unless(count($events) == 0)
  
      @foreach($events as $event)
      
      <x-event-card :event="$event" />
    
      @endforeach
  
      @else
      <p>No listings found</p>
      @endunless

      @unless(count($processes) == 0)
  
      @foreach($processes as $process)
      <x-process-card :process="$process" />
      @endforeach
  
      @else
      <p>No listings found</p>
      @endunless
  
    </div>


  

  

  
    
  </x-layout>