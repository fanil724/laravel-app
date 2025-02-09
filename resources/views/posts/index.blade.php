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
                @if($post->image)
                    <img src="{{asset('storage/' . $post->image)}}" class="card-img-top w-60 me-2 float-start" alt="...">
                @else
                    <img src="https://серебро.рф/img/placeholder.png" class="card-img-top w-60 me-2 h-50 float-start" alt="...">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>

                    <a href="{{ route('post', $post) }}" class="btn btn-primary">Показать : {{ $post->likes }}</a>
                </div>
            </div>


        @empty
            <p>Нет постов</p>
        @endforelse
        {{ $posts->links() }}
    </div>
</div>
@endsection