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
                        <input autocomplete="off"
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
                        <input autocomplete="off"
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
                        <input autocomplete="off"
                            class="block w-full rounded-md border-0 py-2 px-3.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            id="company" name="language" type="text">
                        @error('language')
                            <p class="mt-1 text-red-500">required</p>
                        @enderror
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label class="block text-sm font-medium leading-6 text-white" for="cover-photo">Cover photo</label>
                    <div class="mt-2 flex justify-center rounded-lg border border-dashed border-white/25 px-6 py-10">
                        <div class="text-center">

                            <svg aria-hidden="true" class="mx-auto h-12 w-12 text-gray-300" fill="currentColor"
                                id="defaultSVG" viewBox="0 0 24 24">
                                <path clip-rule="evenodd"
                                    d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z"
                                    fill-rule="evenodd" />
                            </svg>

                            <img alt="Image preview" class="rounded-md object-cover" height="350px" id="previewIMG"
                                src="#" style="display:none;" width="300px">

                            <div class="mt-4 flex justify-center text-sm leading-6 text-gray-600">
                                <label
                                    class="relative cursor-pointer rounded-md font-semibold text-white hover:text-orange-600"
                                    for="file">
                                    <span>Upload a file</span>
                                    <input class="sr-only" id="file" name="file" onchange="previewImage()"
                                        type="file">
                                </label>
                                <p class="pl-1">or drag and drop</p>
                            </div>
                            <p class="text-xs leading-5 text-gray-600">PNG, JPG, GIF up to 10MB</p>
                        </div>
                    </div>
                    @error('file')
                        <p class="mt-1 text-red-500">required</p>
                    @enderror
                </div>
            </div>
            <div class="mt-12">
                <button
                    class="laravel-bg mx-auto flex items-center justify-center gap-1 rounded-md px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2"
                    type="submit">
                    <svg class="h-6 w-6" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12 16.5V9.75m0 0l3 3m-3-3l-3 3M6.75 19.5a4.5 4.5 0 01-1.41-8.775 5.25 5.25 0 0110.233-2.33 3 3 0 013.758 3.848A3.752 3.752 0 0118 19.5H6.75z"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    Create
                </button>
            </div>
        </form>
    </div>
@endsection

<script>
    function previewImage() {
        let preview = document.querySelector('#previewIMG');
        let nonPreview = document.querySelector('#defaultSVG');
        let file = document.querySelector('#file').files[0];
        let reader = new FileReader();

        reader.onloadend = function() {
            preview.src = reader.result;
            preview.style.display = "block";
            nonPreview.style.display = "none";
        }

        if (file) {
            reader.readAsDataURL(file);
        } else {
            preview.src = "";
            preview.style.display = "none";
        }
    }
</script>
