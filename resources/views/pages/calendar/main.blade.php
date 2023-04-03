@extends('homepage')

@section('route-content')
    <div class="mx-auto table max-w-4xl select-none text-white">
        <div class="thead grid grid-cols-7">
            @foreach ($daysName as $day)
                <div class="day w-28 border border-red-50 py-4 text-center">{{ $day }}</div>
            @endforeach
        </div>
        <div class="tbody grid grid-cols-7">
            @foreach ($days as $key => $day)
                <div class="day w-28 border border-red-50 py-8 text-center">{{ $key + 1 }}</div>
            @endforeach
        </div>
    </div>
    @push('content-script')
        <script src={{ asset('js/calendar.js') }}></script>
    @endpush
@stop
