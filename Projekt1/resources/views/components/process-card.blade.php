@props(['process'])

<x-card>
    <div class="flex">
        <img class="hidden w-48 mr-6 md:block"
            src="{{ $process->logo ? asset('storage/' . $process->logo) : asset('/images/no-image.png') }}"
            alt="" />
        <div>
            <h3 class="text-2xl">
                <a href="/process/{{ $process->id }}">{{ $process->title }}</a>
            </h3>

            <div class="text-l font-bold mb-6">
                <li>Start: {{ $process->start_date }}</li>
                <li>End: {{ $process->end_date }}</li>
            </div>
            {{-- <div class="text-xl font-bold mb-4">{{$process->type_id}}</div> --}}
            <div class="text-lg mt-4">

                {{ $process->description }}
            </div>
        </div>
    </div>
</x-card>
