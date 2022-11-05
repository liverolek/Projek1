@if (session()->has('message'))
    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 2500)" x-show="show"
        class="z-40 fixed top-0 left-1/2 transform -translate-x-1/2 
    bg-laravel text-white rounded px-40 py-3">
        <p>
            {{ session('message') }}
        </p>
    </div>
@endif
