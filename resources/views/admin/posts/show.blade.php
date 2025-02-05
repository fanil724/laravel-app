@extends('layouts.admin')

@section('title', 'Посты')

@section('menu')
@include('layouts.admin')
@endsection

@section('content')
<div class="container-fluid">
    @include('admin.parts.message')
    <div class="card" style="width: 18rem;">
        <img src="https://gendalf.ru/upload/iblock/592/r1j9pyiq9zjh0czjnu14dwoks108vdfu/Razrabotka-sayta-_1_.jpg"
            class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
            <p class="card-text">{{$post->text}}</p>
        </div>
    </div>
</div>
@endsection