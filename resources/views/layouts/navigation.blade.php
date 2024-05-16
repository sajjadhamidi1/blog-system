<nav class="bg-gray-800 ">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="relative flex h-16 items-center justify-between">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <!-- Mobile menu button-->
                <button type="button" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="absolute -inset-0.5"></span>
                    <span class="sr-only">Open main menu</span>
                    <!--
                      Icon when menu is closed.

                      Menu open: "hidden", Menu closed: "block"
                    -->
                    <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <!--
                      Icon when menu is open.

                      Menu open: "block", Menu closed: "hidden"
                    -->
                    <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                <div class="flex flex-shrink-0 items-center">
                    <img class="h-10 border-1 border-orange-500 w-auto bg-white rounded" src="/img/studio-ghibli-logo.svg" alt="Your Company">
                </div>
                <div class="hidden sm:ml-6 sm:block">
                    <div class="flex space-x-4">
                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                        <a href="{{route('home')}}" class=" text-white {{(Route::is('home')) ? 'bg-gray-900':'' }} rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Home</a>
                        <a href="{{route('about')}}" class="text-gray-300 {{(Route::is('about')) ? 'bg-gray-900':'' }} hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">about</a>
                        <a href="{{route('contact')}}" class="text-gray-300 {{(Route::is('contact')) ? 'bg-gray-900':'' }} hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">contact</a>
                    </div>
                </div>
            </div>
            <div class="absolute inset-y-0  right-0 gap-3 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                <form action="{{ route('search') }}" method="get">
                    <div class="flex justify-center align-middle mt-3.5">
                        <input type="search" name="search">
                        <button class="btn bg-gray-800 bg-orange-500 p-3"><i class="text-white fa fa-search"></i></button>
                    </div>
                </form>



                <!-- Profile dropdown -->
                @auth()
                    <a href="{{route('adminarticles')}} " class="btn bg-orange-500 text-white px-3 py-2">dashboard</a>

                @endauth
                @guest()
                    <a class="btn bg-orange-500 text-white px-3 py-2" href="{{route('login')}}">Login</a>
                @endguest
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="sm:hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pb-3 pt-2">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="#" class="bg-gray-900 text-white block rounded-md px-3 py-2 text-base font-medium" aria-current="page">Dashboard</a>
            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Team</a>
            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Projects</a>
            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Calendar</a>
        </div>
    </div>
</nav>


