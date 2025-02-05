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


<div class="container ">
    <div class="row justify-content-center">
        @forelse ($posts as $post)

            <div class="card" class="col-sm" style="width: 18rem;">
                <img src="https://gendalf.ru/upload/iblock/592/r1j9pyiq9zjh0czjnu14dwoks108vdfu/Razrabotka-sayta-_1_.jpg"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>

                    <a href="{{ route('post', $post) }}" class="btn btn-primary">Показать</a>
                </div>
            </div>


        @empty
            <p>Нет постов</p>
        @endforelse
        {{ $posts->links() }}
    </div>
</div>
@endsection