@extends('layouts.admin')

@section('title', 'Посты')

@section('menu')
@include('layouts.admin')
@endsection

@section('content')
<div class="container-fluid">
    @include('admin.parts.message')
    <div class="card" style="width: 56rem;">
        @if($post->image)
            <img src="{{asset('storage/' . $post->image)}}" class="card-img-top w-50 me-2 float-start" alt="...">
        @endif
        <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
            <p class="card-text">{{$post->text}}</p>
        </div>
    </div>
</div>
@endsection