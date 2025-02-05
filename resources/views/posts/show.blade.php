@extends('layouts.app')

@section('title', 'Посты')

@section('menu')
@include('menu')
@endsection

@section('content')
<div class="container-fluid row justify-content-center">
    <div class="card " style="width: 56rem;">
        <img src="https://gendalf.ru/upload/iblock/592/r1j9pyiq9zjh0czjnu14dwoks108vdfu/Razrabotka-sayta-_1_.jpg"
            class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
            <p class="card-text">{{$post->text}}</p>

        </div>
    </div>
</div>
@endsection