@extends('layouts.base')
@section('content')
    <h1 class="title">{{ $chapters[0]['reference'] }}</h1>
    <div class="chapters">
        @foreach($chapters as $chapter)
            @if ($chapter["number"] != "intro")
            <p class="chapter">
                <a href="/chapter/{{ $chapter["id"] }}" class="chapter-link">
                    {{ $chapter['reference'] }}
                </a>
            </p>
            @endif
        @endforeach
    </div>
@endsection