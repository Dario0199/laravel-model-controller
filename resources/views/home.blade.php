@extends('layout.main')

@section('main-content')
    <ul>
        @foreach ($movies as movie)
            <li></li>            
        @endforeach
    </ul>
@endsection