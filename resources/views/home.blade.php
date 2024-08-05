
@extends('layouts.app')

@section('title', 'laravel')

@push('css')
    <style>
        body {
            background-color: #f1f1f1;
        }
    </style>
@endpush

@push('css')
    <style>
        body {
            color: #ff0000;
        }
    </style>
@endpush

@section('content')
<div class="max-w-4xl mx-auto px-4">
    {{--<h1>Welcome to the homepage</h1>--}} 
 
     <x-alert2 type="info" class="mb-4">
        <x-slot name="title">
             Este es el titulo de la alerta
         </x-slot>
 
         contenido de la alerta 
     </x-alert2>
 
     <p>Hola mundo</p>
 
@endsection


   