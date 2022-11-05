@props([
    'status' => 'pending',
    'stacked' => 'false',
    'logo' => '',
'title' => '',
'id' => '',
'type_id' => '',
'description' => '',
'date' => '',
'type' => '',
'process' => '',

    'last' => 'false',
    'color' => 'cyan',
    'coloring' => [
        'bg' => [
            'red' => 'bg-red-500',
            'yellow' => 'bg-yellow-500',
            'green' => 'bg-emerald-500',
            'blue' => 'bg-blue-500',
            'orange' => 'bg-orange-500',
            'purple' => 'bg-purple-500',
            'cyan' => 'bg-cyan-500',
            'pink' => 'bg-pink-500',
            'black' => 'bg-black',
        ],
        'border' => [
            'red' => 'border-red-500',
            'yellow' => 'border-yellow-500',
            'green' => 'border-emerald-500',
            'blue' => 'border-blue-500',
            'orange' => 'border-orange-500',
            'purple' => 'border-purple-500',
            'cyan' => 'border-cyan-500',
            'pink' => 'border-pink-500',
            'black' => 'border-black',
        ],
        'text' => [
            'red' => 'text-red-500',
            'yellow' => 'text-yellow-500',
            'green' => 'text-emerald-500',
            'blue' => 'text-blue-500',
            'orange' => 'text-orange-500',
            'purple' => 'text-purple-500',
            'cyan' => 'text-cyan-500',
            'pink' => 'text-pink-500',
            'black' => 'text-black',
        ],
    ],
])


            
            

<div class="flex text-slate-600 justify-left ml-10">
    @if($stacked !== 'true')
    <div class="pr-5 pt-1 w-[63px]  font-semibold whitespace-nowrap {{ $coloring['text'][$color] }}">{!!$date!!}</div>
    
    @endif
    <div class="z-20 ml-10">
        <div class="h-8 w-8 @if($process=='true_start') bg-white border-4 {{ $coloring['border'][$color] }}  @else {{$coloring['bg'][$color]}} @endif rounded-full"></div>
    </div>
    <div class="@if($last!='true') border-l-4 {{ $coloring['border'][$color] }}@endif pl-8 pb-14 z-10 text-lg" style="margin-left: -18px">
        @if($stacked == 'true') <div class="font-semibold {{ $coloring['text'][$color] }}">{!!$date!!}</div> @endif
        
        
        
       
        <div>
            <h3 class="text-xl">

                @if($process == "false")

                <a href="/event/{{$id}}">{{$title}}</a>
                @else
                <a href="/process/{{$id}}">{{$title}}</a>

                @endif
                
            </h3>

            @if($process == "true_start")
            <div class="text-xs text-bold mt-4">
                Started
            </div>
            @elseif($process == "true_end")
            <div class="text-xs mt-4">
                Ended
            </div>
            @endif
            
            <div class="text-lg mt-4 {{ $coloring['text'][$color] }}">
                {{$type}}
            </div>
          
            <div class="text-lg mt-4">
              
                {{$description}}
            </div>
        </div>
        
    </div>
    <div>
        <img
        class="hidden w-40 ml-10 mr-6 md:block"
        
        src="{{$logo ? asset ('storage/' . $logo) : asset('/images/no-image.png')}}"
        alt=""
    />
    </div>
</div>


