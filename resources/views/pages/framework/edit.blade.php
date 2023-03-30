@extends('homepage')
@section('route-content')
    <div class="w-20">
        <a class="laravel-bg flex gap-1 rounded px-3 py-1 text-white transition duration-150 ease-in-out hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg"
            href={{ route('framework.index') }} type="button">
            <svg class="h-6 w-6" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <span>Back</span>
        </a>
    </div>
    <div class="py-10 px-6 sm:py-14 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Edit {{ $framework->name }}</h2>
            <p class="mt-2 text-lg leading-8 text-gray-600">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, exercitationem.
            </p>
        </div>
        <form action={{ route('framework.update', $framework->id) }} class="mx-auto mt-8 max-w-xl sm:mt-10"
            enctype="multipart/form-data" method="POST">
            @csrf
            @method('PUT')
            <div class="grid grid-cols-1 gap-y-6 gap-x-8 sm:grid-cols-2">
                <div class="sm:col-span-2">
                    <label class="block text-sm font-semibold leading-6 text-white" for="first-name">Framework name</label>
                    <div class="mt-2.5">
                        <input autocomplete="off"
                            class="block w-full rounded-md border-0 py-2 px-3.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            id="first-name" name="name" type="text" value={{ $framework->name }}>
                        @error('name')
                            <p class="mt-1 text-red-500">required</p>
                        @enderror
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label class="block text-sm font-semibold leading-6 text-white" for="last-name">
                        Owner name
                    </label>
                    <div class="mt-2.5">
                        <input autocomplete="off"
                            class="block w-full rounded-md border-0 py-2 px-3.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            id="last-name" name="owner" type="text" value={{ $framework->owner }}>
                        @error('owner')
                            <p class="mt-1 text-red-500">required</p>
                        @enderror
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label class="block text-sm font-semibold leading-6 text-white" for="company">
                        Language name
                    </label>
                    <div class="mt-2.5">
                        <input autocomplete="off"
                            class="block w-full rounded-md border-0 py-2 px-3.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            id="company" name="language" type="text" value={{ $framework->language }}>
                        @error('language')
                            <p class="mt-1 text-red-500">required</p>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="mt-12">
                <button
                    class="laravel-bg mx-auto flex items-center justify-center gap-1 rounded-md px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2"
                    type="submit">
                    <svg class="h-6 w-6" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.5 12.75l6 6 9-13.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    Update
                </button>
            </div>
        </form>
    </div>
@endsection
