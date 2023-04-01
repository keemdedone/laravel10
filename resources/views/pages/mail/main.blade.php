@extends('homepage')

@section('route-content')
    <div class="flex items-center justify-center px-2 py-6 sm:px-3 lg:px-4">
        <div class="py-10 px-6 sm:py-14 lg:px-8">
            <div class="mx-auto max-w-2xl text-center">
                <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Send email system</h2>
                <p class="mt-2 text-lg leading-8 text-gray-600">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, exercitationem.
                </p>
            </div>
            <form action={{ route('mail.send') }} class="mx-auto mt-8 max-w-xl sm:mt-10" enctype="multipart/form-data"
                method="POST">
                @csrf
                <div class="grid grid-cols-1 gap-y-6 gap-x-8 sm:grid-cols-2">
                    <div class="sm:col-span-2">
                        <label class="block text-sm font-semibold leading-6 text-white" for="sender-name">
                            Sender email address
                        </label>
                        <div class="mt-2.5">
                            <input autocomplete="off"
                                class="block w-full rounded-md border-0 py-2 px-3.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                id="sender-name" name="sender-name" type="email">
                            @error('sender-name')
                                <p class="mt-1 text-red-500">required</p>
                            @enderror
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label class="block text-sm font-semibold leading-6 text-white" for="receive-name">
                            Receive email address
                        </label>
                        <div class="mt-2.5">
                            <input autocomplete="off"
                                class="block w-full rounded-md border-0 py-2 px-3.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                id="receive-name" name="receive-name" type="email">
                            @error('receive-name')
                                <p class="mt-1 text-red-500">required</p>
                            @enderror
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label class="block text-sm font-semibold leading-6 text-white" for="massage">
                            Massage
                        </label>
                        <div class="mt-2.5">
                            <textarea
                                class="block w-full rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:py-1.5 sm:text-sm sm:leading-6"
                                id="massage" name="massage" rows="5"></textarea>
                            @error('massage')
                                <p class="mt-1 text-red-500">required</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="mt-12">
                    <button
                        class="laravel-bg mx-auto flex w-full items-center justify-center gap-2 rounded-md px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2"
                        type="submit">
                        <span class="text-lg">Send Email</span>
                        <svg class="h-6 w-6" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
            </form>
        </div>
    </div>
@stop
