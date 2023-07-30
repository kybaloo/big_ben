@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-5 rounded">
        @auth
            <h1>Page admin</h1>
        @endauth

        @guest
            <h1>Page public</h1>
        @endguest
    </div>
@endsection
