@extends('layouts.app')

@section('title', 'Категории')

@section('menu')
@include('menu')
@endsection

@section('content')



<div class="container ">
    <div class="row justify-content-center">
        <h2>Посты категории: {{ $category->name }}</h2>
        @forelse ($category->posts as $post)
            <div class="card h-50 " class="col-sm" style="width: 18rem;">
                <img src="https://gendalf.ru/upload/iblock/592/r1j9pyiq9zjh0czjnu14dwoks108vdfu/Razrabotka-sayta-_1_.jpg"
                    class="card-img-top" alt="...">
                <div class="card-body ">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{{$post->text}}</p>
                </div>
            </div>
        @empty
            <p>Нет постов</p>
        @endforelse

    </div>
</div>
@endsection