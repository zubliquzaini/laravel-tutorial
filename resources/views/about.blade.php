@extends('app')

@section('title', 'Hello World')

@section('content')

    <h1>It's working!</h1>

    <ul>
        @forelse ($services as $service)
            <li>{{ $service->name }}</li>
        @empty
            <p>Nothing to show right here :(</p>
        @endforelse
    </ul>
@endsection
