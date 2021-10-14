@extends('pages.home')

@section('title', 'List')
@section('cont')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('/css/list.css') }}" rel="stylesheet">
</head>
<body>
    <div class="center">
        <table class = "table" border = "0">
            <tr class = "tr">
                <th class = "th">
                    Item
                </th>
                <th class = "th">
                    Amount
                </th>
                <th class = "th">
                    Stocks
                </th>
                <th class = "th">
                    Date
                </th>
            </tr>
            @foreach ($prods as $product)
            <tr class = "tr2">
                <td class = "td">
                    <a href="/product/{{ $product->id }}">{{ $product->item }}</a>
                </td>
                <td class = "td">
                    &#8369; {{ $product->amount }}
                </td>
                <td class = "td">
                    {{ $product->stocks }}
                </td>
                <td class = "td">
                    {{ $product->created_at }}
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>
@endsection