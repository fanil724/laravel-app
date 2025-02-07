@extends('layouts.admin')

@section('title', 'Админ | Создать пост')

@section('menu')
@include('menu')
@endsection

@section('content')
<div class="container">
    @include('admin.parts.message')
    <form method="POST" action="{{ route('admin.categories.update', $category) }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Наименование категории</label>
            <input type="text" class="form-control @error('name')  is-invalid @enderror" id="exampleFormControlInput1"
                name="name" value="{{old('name') ?? $category->name}}">
            @error('name')
                <span class=" invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Изменить категорию</button>
    </form>
</div>
@endsection