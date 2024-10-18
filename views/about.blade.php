@extends('layout')

@section('title', $title)

@section('content')
    <h2>{{ $welcomeMessage }}</h2>
    <p>Bu sayfa BladeOne ile oluşturulmuştur.</p>

    <h3>Örnek Liste:</h3>
    <ul>
        @if(!empty($team)) 
            @foreach ($team as $item)
                <li>{{ $item }}</li>
            @endforeach
        @else
            <p>Liste boş.</p>
        @endif

@endsection
