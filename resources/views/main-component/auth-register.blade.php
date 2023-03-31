@extends('homepage')
@section('route-auth')
    <div class="max-w-fit p-5">
        <a class="mx-auto flex items-center justify-center gap-1 rounded-md bg-slate-700 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2"
            href={{ route('login') }}>
            Login
        </a>
    </div>
    <div class="flex min-h-screen items-center justify-center px-4 py-12 sm:px-6 lg:px-8">
        <div class="py-10 px-6 sm:py-14 lg:px-8">
            <div class="mx-auto max-w-2xl text-center">
                <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Create new account</h2>
                <p class="mt-2 text-lg leading-8 text-gray-600">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, exercitationem.
                </p>
            </div>
            <form action={{ route('user.store') }} class="mx-auto mt-8 max-w-xl sm:mt-10" enctype="multipart/form-data"
                method="POST">
                @csrf
                <div class="grid grid-cols-1 gap-y-6 gap-x-8 sm:grid-cols-2">
                    <div class="sm:col-span-2">
                        <label class="block text-sm font-semibold leading-6 text-white" for="name">
                            Name
                        </label>
                        <div class="mt-2.5">
                            <input autocomplete="off"
                                class="block w-full rounded-md border-0 py-2 px-3.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                id="name" name="name" type="text">
                            @error('name')
                                <p class="mt-1 text-red-500">required</p>
                            @enderror
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label class="block text-sm font-semibold leading-6 text-white" for="email">
                            Email
                        </label>
                        <div class="mt-2.5">
                            <input autocomplete="off"
                                class="block w-full rounded-md border-0 py-2 px-3.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                id="email" name="email" type="text">
                            @error('email')
                                <p class="mt-1 text-red-500">required</p>
                            @enderror
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label class="block text-sm font-semibold leading-6 text-white" for="password">
                            Password
                        </label>
                        <div class="mt-2.5">
                            <input autocomplete="off"
                                class="block w-full rounded-md border-0 py-2 px-3.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                id="password" name="password" type="password">
                            @error('password')
                                <p class="mt-1 text-red-500">required</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="mt-12">
                    <button
                        class="laravel-bg mx-auto flex w-full justify-center gap-2 rounded-md px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2"
                        type="submit">
                        Create
                        <svg class="h-5 w-5" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 4.5v15m7.5-7.5h-15" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
