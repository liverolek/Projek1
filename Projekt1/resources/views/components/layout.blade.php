<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.3/css/bootstrap-colorpicker.min.css"
        rel="stylesheet">
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/icon.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ asset('bladewind/css/animate.min.css') }}" rel="stylesheet" />

    <link href="{{ asset('bladewind/css/bladewind-ui.min.css') }}" rel="stylesheet" />

    <script src="{{ asset('bladewind/js/helpers.js') }}"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        laravel: "#ef3b2d",
                    },
                },
            },
        };
    </script>
    <title>Memories</title>
</head>

<body class="mb-48">
    {{-- <nav class=" justify-between items-center mb-4"> --}}
    <nav
        class="z-20 top-0 left-0 w-full fixed flex items-center justify-start font-bold bg-laravel text-white h-24 mt-0 opacity-90">
        <ul class="fixed flex space-x-6 ml-4 mt-2 text-lg">
            <li>
                <a href="/" class="flex mt-1 hover:text-black"><i class="fa-solid fa-camera-retro fa-2x"></i></a>

            </li>
            @auth
                <li>
                    <a href="/event/create" class="flex bg-black rounded text-white py-2 px-5 hover:text-laravel">Post
                        Event</a>

                </li>
                <li>
                    <a href="/process/create" class="flex bg-black rounded text-white py-2 px-5 hover:text-laravel">Post
                        Process</a>

                </li>
                <li>
                    <a href="/types" class="flex bg-laravel rounded text-white py-2 px-2 hover:text-black">Manage Types</a>
                </li>
            @endauth

        </ul>

        <ul class="fixed flex space-x-6 mr-6  mt-2 right-10 text-lg">
            @auth
                <li>
                    <span class="font-bold">
                        Welcome {{ auth()->user()->name }}!
                    </span>
                </li>

                <li>
                    <a href="/change-password" class="inline hover:text-black"><i class="fa-solid fa-unlock-keyhole"></i>
                        Change password</a>
                </li>



                <li>
                    <form class="inline hover:text-black" method="POST" action="/logout">
                        @csrf
                        <button type="submit">
                            <i class="fa-solid fa-door-closed"></i> Logout
                        </button>
                    </form>
                </li>
            @else
                <li>
                    <a href="/register" class="hover:text-black"><i class="fa-solid fa-user-plus"></i> Register</a>
                </li>
                <li>
                    <a href="/login" class="hover:text-black"><i class="fa-solid fa-arrow-right-to-bracket"></i>
                        Login</a>
                </li>
            @endauth
        </ul>
    </nav>
    {{-- VIEW OUTPUT --}}
    <main class="top-40 mt-40">

        {{ $slot }}
    </main>
    {{-- <footer
        class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-laravel text-white h-24 mt-24 opacity-90 md:justify-center"
    >
        <p class="ml-2">Zaawansowane Aplikacje Internetowe 2022, Autor: Aleksander Kotecki</p>
    </footer> --}}
    <x-flash-message />

    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    @yield('javascript')

</body>

</html>
