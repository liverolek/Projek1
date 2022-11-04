@props(['type'])

<x-card>
    <div class="flex">
        
        <div>
            <h3 class="text-2xl">
               <a href="/type/{{$type->id}}">{{$type->name}}</a>
            </h3>
            <div class="text-500 font-bold mb-4">HEX Color: {{$type->color}}</div>
            <div><i class="fa-sharp fa-2x fa-solid fa-tag" style="color:{{$type->color}};"></i></div>
            
        </div>
    </div>
</x-card>

