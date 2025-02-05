@extends('layouts.app')

@section('title', 'Категории')

@section('menu')
@include('menu')
@endsection

@section('content')



<div class="container ">
    <div class="row justify-content-center">
        @include('admin.parts.message')
        @isset($category)
            <h2>Наименование категории {{ $category->name }}</h2>
        @endisset

    </div>
</div>
@endsection