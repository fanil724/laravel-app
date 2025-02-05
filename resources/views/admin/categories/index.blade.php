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
                <img src="https://gendalf.ru/upload/iblock/592/r1j9pyiq9zjh0czjnu14dwoks108vdfu/Razrabotka-sayta-_1_.jpg"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $category->name }}</h5>
                </div>
            </div>
        @empty
            <p>Нет категории</p>
        @endforelse

    </div>
</div>
@endsection