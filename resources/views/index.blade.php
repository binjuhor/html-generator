@extends('layouts.app')
@section('content')
    <h1>Hello World</h1>
    @php
        $list = ['one', 'two', 'three'];
    @endphp
    <ul>
        @for($i=0; $i<=10; $i++)
            <li>Hello World {{ $i }}</li>
        @endfor
    </ul>

    <ul>
        @foreach($list as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>
    @include('partials.alert', [
	    'type' => 'error',
	    'message' => 'This is an error message'
    ])
@endsection