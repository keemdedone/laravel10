@extends('homepage')
@section('route-auth')
    <div class="flex min-h-screen items-center justify-center px-4 py-12 sm:px-6 lg:px-8">
        <div class="w-full max-w-md space-y-8">
            <div>
                <img alt="Laravel" class="mx-auto h-12 w-auto" src="https://laravel.com/img/logomark.min.svg">
                <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-100">Sign in to your account</h2>
            </div>
            <form action={{ route('user.login') }} class="mt-8 space-y-6" enctype="multipart/form-data" method="POST">
                @csrf
                <input name="remember" type="hidden" value="true">
                <div class="-space-y-px rounded-md shadow-sm">
                    <div>
                        <label class="sr-only" for="email">Email</label>
                        <input autocomplete="off"
                            class="relative block w-full rounded-t-md border-0 py-1.5 pl-2 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset"
                            id="email" name="email" placeholder="Email" type="text">
                    </div>
                    <div>
                        <label class="sr-only" for="password">Password</label>
                        <input autocomplete="off"
                            class="relative block w-full rounded-b-md border-0 py-1.5 pl-2 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset"
                            id="password" name="password" placeholder="Password" type="password">
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input class="h-4 w-4 rounded border-gray-300" id="remember-me" name="remember" type="checkbox">
                        <label class="ml-2 block text-sm text-gray-100" for="remember-me">Remember me</label>
                    </div>

                    <div class="text-sm">
                        <a class="laravel-color font-medium" href={{ route('register') }}>
                            I have no account ?
                        </a>
                    </div>
                </div>

                <div>
                    <button
                        class="laravel-bg group relative flex w-full justify-center rounded-md px-3 py-2 text-sm font-semibold text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2"
                        type="submit">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                            <svg aria-hidden="true" class="h-5 w-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path clip-rule="evenodd"
                                    d="M10 1a4.5 4.5 0 00-4.5 4.5V9H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-.5V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z"
                                    fill-rule="evenodd" />
                            </svg>
                        </span>
                        Sign in
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
