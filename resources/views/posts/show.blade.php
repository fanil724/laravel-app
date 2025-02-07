@extends('layouts.app')

@section('title', 'Посты')

@section('menu')
@include('menu')
@endsection

@section('content')
<div class="container-fluid row justify-content-center">
    @include('admin.parts.message')
    <div class="card " style="width: 56rem;">
        @if ($post->image)
            <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="...">
        @endif
        <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
            <p class="card-text">{{$post->text}}</p>
            <button data-id="{{ $post->id }}" class="btn btn-primary w-25 likeButton ms-3 mb-2">
                Likes: <span id="likeCount">{{ $post->likes }}</span>
            </button>

        </div>
    </div>
</div>
@endsection