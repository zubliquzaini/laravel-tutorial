@extends('app')

@section('title', 'Hello World')

@section('content')

    <h1>It's working!</h1>

    <form action="/service" method="post">
        <input type="text" name="name" autocomplete="off">
        @csrf
        <button>Add Service</button>
    </form>
    @error('name') {{ $message }} @enderror
    <ul>
        @forelse ($services as $service)
            <li>{{ $service->name }}</li>
        @empty
            <p>Nothing to show right here :(</p>
        @endforelse
    </ul>
@endsection
