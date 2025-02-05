@extends('layouts.admin')

@section('title', 'Админ | Создать пост')

@section('menu')
@include('menu')
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @include('admin.parts.message')
            <div class="card">
                <div class="card-header">Изменить пост</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.posts.update', $post) }}">
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Категория</label>

                            <div class="col-md-6">

                                <select class="form-select" name="category_id" id="category_id">
                                    @foreach ($categories as $category)
                                        <option {{ old('category_id', $post->category_id) == $category->id ? 'selected' : '' }} value="{{ $category->id }}">
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>

                                @error('category')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Заголовок поста</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror"
                                    name="title" autofocus value="{{ old('title') ?? $post->title }}">
                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Текст поста</label>

                            <div class="col-md-6">
                                <textarea class="form-control @error('text') is-invalid @enderror"
                                    name="text">{{ old('text') ?? $post->text }}</textarea>
                                @error('text')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Изменить
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection