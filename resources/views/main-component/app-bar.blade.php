<nav style="background-color: #171923">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="relative flex h-16 items-center justify-between">

            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <!-- Mobile menu button-->
                <button aria-controls="mobile-menu" aria-expanded="false"
                    class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                    id="moblie-menu-btn" type="button">

                    <span class="sr-only">Open main menu</span>

                    <svg aria-hidden="true" class="block h-6 w-6" fill="none" stroke-width="1.5"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>

                    <svg aria-hidden="true" class="hidden h-6 w-6" fill="none" stroke-width="1.5"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path d="M6 18L18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            </div>

            <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                <div class="flex flex-shrink-0 items-center">
                    <a href={{ route('homepage') }}>
                        <img alt="Laravel" class="h-8 w-8 shrink-0 transition-all duration-300" height="42"
                            src="https://laravel.com/img/logomark.min.svg" width="40">
                    </a>
                </div>
            </div>

            <div
                class="absolute inset-y-0 right-0 flex items-center gap-3 pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                <button
                    class="rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                    type="button">
                    <span class="sr-only">View notifications</span>
                    <svg aria-hidden="true" class="h-6 w-6" fill="none" stroke-width="1.5" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path
                            d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
                <form action={{ route('user.logout') }} class="m-0" method="post">
                    @csrf
                    <button
                        class="rounded bg-gray-800 px-2 py-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                        type="submit">
                        Logout
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="h-0 overflow-hidden sm:hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pt-2 pb-3">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white"
                href={{ route('homepage') }}>Homepage</a>
            <a class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white"
                href={{ route('framework.index') }}>Framework</a>
            <a class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white"
                href="#">Calendar</a>
            <a class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white"
                href={{ route('mail.index') }}>Mail</a>
        </div>
    </div>
</nav>
