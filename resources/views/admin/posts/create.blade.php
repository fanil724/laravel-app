@extends('layouts.admin')

@section('title', 'Админ | Создать пост')

@section('menu')
@include('menu')
@endsection

@section('content')
<div class="container">
    @include('admin.parts.message')
    <form action="{{ route('admin.posts.store') }}" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="row mb-3">
            <label for="name" class="col-md-4 col-form-label text-md-end">Категория</label>

            <div class="col-md-6">

                <select class="form-select" name="category_id" id="category_id">
                    @foreach ($categories as $category)
                        <option @if ($category->id == old('category_id')) selected @endif value="{{ $category->id }}" >
                            {{ $category->name }}</option>
                    @endforeach
                </select>

                @error('category')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Наименование поста</label>
            <input type="text" class="form-control @error('title')  is-invalid @enderror" id="exampleFormControlInput1"
                name="title" value="{{old('title')}}">
            @error('title')
                <span class=" invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>

                </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Текст поста</label>
            <textarea class="form-control @error('text') is-invalid @enderror" id="exampleFormControlTextarea1" rows="3"
                name="text">{{ old('text') }}</textarea>
            @error('text')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div>
            <input type="file" class="form-control" name="image" id="image">
            @error('image')
            <span class=" invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>

            </span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Добавить пост</button>
    </form>
</div>
@endsection