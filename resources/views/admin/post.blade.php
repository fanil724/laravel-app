@extends('admin.menu')

@section('title', 'Посты')

@section('menu')
@include('admin.menu')
@endsection

@section('content')
<div class="container-fluid">
    <div class="card" style="width: 18rem;">
        <img src="https://gendalf.ru/upload/iblock/592/r1j9pyiq9zjh0czjnu14dwoks108vdfu/Razrabotka-sayta-_1_.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $post['title'] }}</h5>
            <p class="card-text">{{$post['text']}}</p>
            <p class="card-text">Slug: {{$post['slug']}}</p>
        </div>
    </div>
</div>
@endsection