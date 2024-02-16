<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exodo 1</title>
</head>
<body>
    @foreach($verses as $verse)
        @foreach($verse->items as $item)
            <p>
                @isset($item->attrs->sid)
                    <span class="font-bold">
                        {{ $item->attrs->sid }}
                    </span>
                @endisset
                @isset($item->text)
                    <span class="font-semibold">
                        {{ $item->text }}
                    </span>
                @endisset
            </p>
        @endforeach
        <br>
    @endforeach
</body>
</html>