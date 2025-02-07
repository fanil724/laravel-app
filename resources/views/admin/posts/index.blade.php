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
    <a href="{{ route('admin.posts.create') }}" class="btn btn-success mb-5">Создать пост</a>
</div>


<div class="container">
    @include('admin.parts.message')
    <div class="row">
        @forelse ($posts as $post)
            <div class="card" class="col-sm" style="width: 25rem;">
                @if($post->image)
                    <img src="{{asset('storage/' . $post->image)}}" class="card-img-top w-60 me-2 float-start" alt="...">
                @else
                    <img src="https://серебро.рф/img/placeholder.png" class="card-img-top w-60 me-2 h-50 float-start" alt="...">
                @endif
                <div class="card-body ">
                    <h5 class=" card-title">{{ $post->title}}</h5>
                    <a href="{{ route('admin.posts.show', $post) }}" class="btn btn-primary">Посмотреть</a>
                    <a href="{{ route('admin.posts.edit', $post) }}" class="btn btn-success">Изменить</a>

                    <form action="{{ route('admin.posts.destroy', $post) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger w-25 mt-2">Удалить</button>
                    </form>
                </div>
            </div>

        @empty
            <p>Нет постов</p>
        @endforelse
        {{$posts->links() }}
    </div>
</div>

@endsection