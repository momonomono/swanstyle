@extends('layout.layout')

@section('title','トップページ')

@section('body')
    
    <top-component 
        myid = "{{ env('INSTAGRAM_ID') }}"
        details = "{{ $details }}" 
        pictures = "{{ json_encode($data) }}"
    ></top-component>

@endsection