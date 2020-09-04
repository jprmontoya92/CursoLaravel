@extends('layout')

@section('title','Home')

@section('content')
    <h1>@lang('Home')</h1>
    {{-- nos devuelve el obejeto usuario  el uth solo se ejecutara si el usuario esta auntenticado--}}
    @auth
    {{auth()->user()->name}}
    @endauth
    
@endsection
