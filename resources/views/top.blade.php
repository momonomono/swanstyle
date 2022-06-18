@extends('layout.layout')

@section('title','トップページ')

@section('body')
    
    <top-component 
        myid = "{{ env('INSTAGRAM_ID') }}"
        details = "{{ $details }}" 
        pictures = "{{ json_encode($data) }}"
    ></top-component>
    
    <div style="text-align:center;padding:30px 0;">
        <a href="{{ $test }}">ACCESS</a>
    </div>
@endsection