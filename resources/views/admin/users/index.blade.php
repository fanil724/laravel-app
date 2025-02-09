@extends('layouts.admin')

@section('title', 'Пользователи')

@section('menu')
@include('layouts.admin')
@endsection

@section('content')

<div class="container">
    <div class="page-header">
        <h2>Пользователи</h2>
        <a href="{{ route('admin.users.create') }}" class="btn btn-success mb-4">Создать пользователя</a>
    </div>
</div>

<div class="container">
    <div class="row">
        @include('admin.parts.message')
        @forelse ($users as $user)
            <div class="card" class="col-sm" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $user->name }}</h5>
                    <div class="form-check">
                        <input data-id="{{ $user->id }}" class="form-check-input checkAdmin" type="checkbox"
                            id="flexCheckDefault" name="is_admin" @checked(old('is_admin', $user->is_admin))>
                        <label class="form-check-label" for="flexCheckDefault">
                            Админ
                        </label>
                    </div>
                    <a href="{{ route('admin.users.edit', $user) }}" class="btn btn-success">Изменить</a>
                    <form action="{{ route('admin.users.destroy', $user) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger  mt-2">Удалить</button>
                    </form>
                </div>
            </div>
        @empty
            <p>Нет пользователей</p>
        @endforelse
        {{$users->links() }}
    </div>
</div>
@endsection