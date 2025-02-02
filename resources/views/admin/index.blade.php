@extends('admin.menu')
@section('menu')
@include('admin.menu')
@endsection
@section('content')
<div class="container">
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

                    <h2>Админка</h2>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection