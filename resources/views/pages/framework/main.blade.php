@extends('homepage')
@section('route-content')
    <h1 class="my-5 text-center text-[36px] text-white">
        Web-application framework
    </h1>
    <table class="mx-auto border-collapse select-none border border-slate-500 text-white">
        <thead>
            <tr>
                <th class="border border-slate-600 px-5 py-2">Name</th>
                <th class="border border-slate-600 px-5 py-2">Owner</th>
                <th class="border border-slate-600 px-5 py-2">Language</th>
                <th class="border border-slate-600 px-5 py-2">
                    <div class="flex items-center justify-center gap-4">
                        Action
                        <a class="flex gap-1 rounded bg-green-500 px-3 py-1 text-white transition duration-150 ease-in-out hover:bg-green-400 hover:shadow-lg focus:bg-green-500 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-800 active:shadow-lg"
                            href={{ route('framework.create') }} type="button">
                            <svg class="h-6 w-6" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                            <span>Add</span>
                        </a>
                    </div>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $framework)
                <tr>
                    <td class="border border-slate-700 px-5 py-2">
                        {{ $framework['name'] }}
                    </td>
                    <td class="border border-slate-700 px-5 py-2">
                        {{ $framework['owner'] }}
                    </td>
                    <td class="border border-slate-700 px-5 py-2">
                        {{ $framework['language'] }}
                    </td>
                    <td class="border border-slate-700 px-5 py-2">
                        <div class="flex gap-4">
                            <a class="flex gap-1 rounded bg-sky-500 px-4 py-1 text-white transition duration-150 ease-in-out hover:bg-sky-400 hover:shadow-lg focus:bg-sky-500 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-sky-800 active:shadow-lg"
                                href={{ route('framework.edit', $framework['id']) }} type="button">
                                <svg class="h-6 w-6" fill="none" stroke-width="1.5" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <span>Edit</span>
                            </a>
                            <form action={{ route('framework.destroy', $framework['id']) }} enctype="multipart/form-data"
                                method="POST">
                                @csrf
                                @method('DELETE')
                                <button
                                    class="flex gap-1 rounded bg-red-500 px-4 py-1 text-white transition duration-150 ease-in-out hover:bg-red-400 hover:shadow-lg focus:bg-red-500 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg"
                                    type="submit">
                                    <svg class="h-6 w-6" fill="none" stroke-width="1.5" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <span>Remove</span>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
