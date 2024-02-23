@extends('dashboard')
@section('title', 'Dashboard')
@section('title-desc', 'Welcome Page')
@section('content')
    <h1>Selamat Datang {{\Illuminate\Support\Facades\Auth::user()->name}}</h1>
@endsection
