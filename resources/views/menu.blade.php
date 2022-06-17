@extends('layout.layout')

@section('title','メニュー')

@section('body')
        
        <menu-component :menus="{{ json_encode($menus) }}"></menu-component>
@endsection