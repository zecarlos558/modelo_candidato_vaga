@extends('layouts.layout')

@section('content')
    <div {{ $attributes->merge(['class' => '']) }} id="{{ @$id ? $id : 'tech-container' }}">
        <x-erros-request></x-erros-request>
        <x-confirm-request></x-confirm-request>
        {{ $slot }}
    </div>
@endsection
