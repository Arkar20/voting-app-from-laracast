<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laracasts Voting</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans bg-gray-background text-gray-900 text-sm">
        <header class="flex flex-col md:flex-row items-center justify-between px-8 py-4">
            <a href="#" class="uppercase text-2xl text-gray-400">Arkar 
                <span class="text-green-600 font-bold ">Voting</span>
                App</a>
            <div class="flex items-center mt-2 md:mt-0">
                @if (Route::has('login'))
                    <div class="px-6 py-4">
                        @auth
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log out') }}
                                </a>
                            </form>
                        @else
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
                <a href="#">
                    <img src="https://www.gravatar.com/avatar/00000000000000000000000000000000?d=mp" alt="avatar" class="w-10 h-10 rounded-full">
                </a>
            </div>
        </header>

        <main class="container mx-auto max-w-custom flex flex-col md:flex-row">
            <div class="w-70 mx-auto md:mx-0 md:mr-5 bg-white shadow-sm border-green-300">
            <div class="vote-form  shadow-lg px-4 border-1 ">
                <div class="vote-title py-4 space-y-2">
                    <h1 class="text-center text-xl ">Add and idea</h1>
                    <h1 class="text-center text-xs w-full ">Let Us know what you would like and we will take over</h1>
                </div>
                <form class="flex-col space-y-2">
                    <div>
                        <input type="text" 
                            class="w-full border-1 focus:border-green-400 rounded-3xl  border-gray-200 bg-gray-100 text-gray-100"
                            placeholder="Enter your Ideas"
                            />
                    </div>
                    <div>
                        <select 
                            class="w-full border-1 rounded-3xl focus:border-green-400   border-gray-200 bg-gray-100 text-gray-100"
                            placeholder="Enter your Ideas"
                            >
                           
                            <option>Categroy</option>
                        </select>
                    </div>
                    <div>
                        <textarea  
                            class="w-full border-1 rounded-3xl  focus:border-green-400  border-gray-200 bg-gray-100 text-gray-100"
                            rows="6"
                            placeholder="Describe YOurself"
                            >
                        </textarea>
                    </div>
                    <div class="flex">
                        <button class="w-20 px-4 py-4 bg-gray-200 shadow-lg rounded-md">
                                Attach
                        </button>
                    </div>



                </form>
            </div>
            </div>
            <div class="w-full px-2 md:px-0 md:w-175">
                <nav class="hidden md:flex items-center justify-between text-xs">
                    <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
                        <li><a href="#" class="border-b-4 pb-3 border-blue">All Ideas (87)</a></li>
                        <li><a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">Considering (6)</a></li>
                        <li><a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">In Progress (1)</a></li>
                    </ul>

                    <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
                        <li><a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">Implemented (10)</a></li>
                        <li><a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">Closed (55)</a></li>
                    </ul>
                </nav>

                <div class="mt-8">
                    {{ $slot }}
                </div>
            </div>
        </main>
    </body>
</html>
