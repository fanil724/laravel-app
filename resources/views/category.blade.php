@extends('layouts.app')

@section('title', 'Категории')

@section('menu')
@include('menu')
@endsection

@section('content')


<h2 style="color:red;">{{$message}}</h2>
<div class="container">
    <div class="row">
        @isset($category)
        <div class="card" class="col-sm" style="width: 18rem;">
            <img src="https://gendalf.ru/upload/iblock/592/r1j9pyiq9zjh0czjnu14dwoks108vdfu/Razrabotka-sayta-_1_.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $category['title'] }}</h5>
            </div>
        </div>
        @endisset

    </div>
</div>
@endsection