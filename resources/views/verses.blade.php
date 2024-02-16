@extends('layouts.base')
@section('content')
    <div class="container my-6 border rounded-lg border-zinc-900 p-4">
        @foreach($verses as $verse)
            <p>
                @foreach($verse['items'] as $item)
                    @isset($item['attrs']['sid'])
                        <span class="font-extrabold">
                            {{ $item['attrs']['sid'] }}
                        </span>
                    @endisset
                    @isset($item['text'])
                        <span class="font-light">
                            {{ $item['text'] }}
                        </span>
                    @endisset
                @endforeach
            </p>
            <br>
        @endforeach
    </div>
@endsection