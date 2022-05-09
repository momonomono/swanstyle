@extends('layout.layout')

@section('title','トップページ')

@section('body')
    
    <top-component myid="{{ env('INSTAGRAM_ID') }}"></top-component>
@endsection