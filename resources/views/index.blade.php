@extends('layouts.app')

@section('title', 'Главная')

@section('menu')
@include('menu')
@endsection
@section('content')
<div class="container">
    @include('admin.parts.message')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Блог</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h2>Добро пожаловать в наш блог!</h2>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection