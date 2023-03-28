@extends('homepage')

@section('route-content')
    <p>Framework page work!</p>
    @foreach ($data as $framework)
        <div class="text-white">
            <p>Name: {{ $framework['name'] }}</p>
            <p>Owner: {{ $framework['owner'] }}</p>
            <p>Language: {{ $framework['language'] }}</p>
        </div>
    @endforeach
@stop
