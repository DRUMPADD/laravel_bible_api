@extends('layouts.base')

@section('content')
    <div class="flex justify-center flex-col align-middle">
        <h1 class="title border text-center">Santa Bíblia</h1>
        <div class="books container border p-2">
            @foreach($books as $book)
            <p class="book">
                <a href="/book/{{ $book['id'] }}" class="book-link relative">
                    {{ $book['name'] }}
                </a>
            </p>
            @endforeach
        </div>
    </div>
@endsection