@extends('layout.layout')

@section('title','Contact')

@section('body')
        
       <contact-component 
              :csrf="{{ json_encode( csrf_token() ) }}"
              :errors="{{ $errors }}"
       ></contact-component> 
@endsection