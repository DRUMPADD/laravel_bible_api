@extends('layouts.base')
@section('content')
    <div class="container">
        @foreach($verses as $verse)
            <p>
                @foreach($verse['items'] as $item)
                    @isset($item['attrs']['sid'])
                        <span class="font-bold">
                            {{ $item['attrs']['sid'] }}
                        </span>
                    @endisset
                    @isset($item['text'])
                        <span class="font-semibold">
                            {{ $item['text'] }}
                        </span>
                    @endisset
                @endforeach
            </p>
            <br>
        @endforeach
    </div>
@endsection