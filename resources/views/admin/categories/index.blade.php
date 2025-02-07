@extends('layouts.admin')

@section('title', 'Категории')

@section('menu')
@include('layouts.admin')
@endsection

@section('content')

<div class="container">
    <div class="page-header">
        <h2>Категории</h2>
    </div>
    <a href="{{ route('admin.categories.create') }}" class="btn btn-success">Создать категорию</a>
</div>

<div class="container">
    <div class="row">
        @forelse ($categories as $category)
            <div class="card" class="col-sm" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $category->name }}</h5>
                    <a href="{{ route('admin.categories.edit', $category) }}" class="btn btn-success">Изменить</a>
                    <form action="{{ route('admin.categories.destroy', $category) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger  mt-2">Удалить</button>
                    </form>
                </div>
            </div>
        @empty
            <p>Нет категории</p>
        @endforelse

    </div>
</div>
@endsection