@extends('layouts.sidebar')

@section('content')
    @if (session('status'))
        <div>{{ session('status') }}</div>
    @endif

   

@endsection
