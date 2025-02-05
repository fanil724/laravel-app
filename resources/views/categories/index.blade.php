@extends('layouts.app')

@section('title', 'Категории')

@section('menu')
@include('menu')
@endsection

@section('content')


<div class="container ">
    <div class="row">
        @forelse ($categories as $category)
            <div class="card" class="col-sm" style="width: 18rem;">
                <img src="https://gendalf.ru/upload/iblock/592/r1j9pyiq9zjh0czjnu14dwoks108vdfu/Razrabotka-sayta-_1_.jpg"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $category->name}}</h5>
                    <a href="{{ route('category', $category) }}" class="btn btn-primary">Посмотреть</a>
                </div>
            </div>
        @empty
            <p>Нет категории</p>
        @endforelse
        {{ $categories->links() }}
    </div>
</div>
@endsection