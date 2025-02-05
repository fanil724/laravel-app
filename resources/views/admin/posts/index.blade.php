@extends('layouts.admin')

@section('title', 'Посты')

@section('menu')
@include('layouts.admin')
@endsection

@section('content')

<div class="container">
    <div class="page-header">
        <h2>Посты</h2>
    </div>
    <a href="{{ route('admin.posts.create') }}" class="btn btn-success">Создать пост</a>
</div>


<div class="container">
    <div class="row">
        @forelse ($posts as $post)
            <div class="card" class="col-sm" style="width: 25rem;">
                <img src="https://gendalf.ru/upload/iblock/592/r1j9pyiq9zjh0czjnu14dwoks108vdfu/Razrabotka-sayta-_1_.jpg"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class=" card-title">{{ $post->title}}</h5>
                    <a href="{{ route('admin.posts.show', $post) }}" class="btn btn-primary">Посмотреть</a>
                    <a href="{{ route('admin.posts.edit', $post) }}" class="btn btn-success">Изменить</a>
                    <a href="{{ route('admin.posts.destroy', $post) }}" class="btn btn-danger">Удалить</a>
                </div>
            </div>

        @empty
            <p>Нет постов</p>
        @endforelse
        {{$posts->links() }}
    </div>
</div>

@endsection