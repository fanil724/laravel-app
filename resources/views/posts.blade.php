@extends('layouts.app')

@section('title', 'Посты')

@section('menu')
@include('menu')
@endsection

@section('content')
<div class="container">
    <div class="page-header">
        <h2>Посты</h2>
    </div>
</div>

<h2 style="color:red;">{{$message}}</h2>
<div class="container">
    <div class="row">
        @forelse ($posts as $post)

        <div class="card" class="col-sm" style="width: 18rem;">
            <img src="https://gendalf.ru/upload/iblock/592/r1j9pyiq9zjh0czjnu14dwoks108vdfu/Razrabotka-sayta-_1_.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $post['title'] }}</h5>
                <p class="card-text">{{$post['text']}}</p>
                <a href="{{ route('post', $post['slug']) }}" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>


        @empty
        p>Нет постов</p>
        @endforelse

    </div>
</div>
@endsection