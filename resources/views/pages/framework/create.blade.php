@extends('homepage')
@section('route-content')
    <div class="py-24 px-6 sm:py-32 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Create new framework</h2>
            <p class="mt-2 text-lg leading-8 text-gray-600">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, exercitationem.
            </p>
        </div>
        <form action={{ route('framework.store') }} class="mx-auto mt-8 max-w-xl sm:mt-10" enctype="multipart/form-data"
            method="POST">
            @csrf
            <div class="grid grid-cols-1 gap-y-6 gap-x-8 sm:grid-cols-2">
                <div class="sm:col-span-2">
                    <label class="block text-sm font-semibold leading-6 text-white" for="first-name">Framework name</label>
                    <div class="mt-2.5">
                        <input autocomplete="given-name"
                            class="block w-full rounded-md border-0 py-2 px-3.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            id="first-name" name="name" type="text">
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
                        <input autocomplete="family-name"
                            class="block w-full rounded-md border-0 py-2 px-3.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            id="last-name" name="owner" type="text">
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
                        <input autocomplete="organization"
                            class="block w-full rounded-md border-0 py-2 px-3.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            id="company" name="language" type="text">
                        @error('language')
                            <p class="mt-1 text-red-500">required</p>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="mt-12">
                <button
                    class="laravel-bg block w-full rounded-md px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2"
                    type="submit">
                    Create
                </button>
            </div>
        </form>
    </div>
@endsection
