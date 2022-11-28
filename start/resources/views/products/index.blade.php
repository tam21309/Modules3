@extends('layout.master')
@section('content')

<h1>{{$title}}</h1>
<h1>{{$username}}</h1>
<h1>{{$hovaten}}</h1>
<table class="table table-light" border="1">
    <thead>
        <tr>
            <th>name</th>
            <th>price</th>
        </tr>
    </thead>
    @if( count($products) > 0)
    @foreach($products as $product )
    <tr>
            <th>{{ $product['name']}}</th>
            <th>{{ $product['price']}}</th>
        </tr>
    @endforeach
    @else
    <h3>khong co san pham</h3>
    @endif
</table>

@endsection