@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Информация об авторизованном пользователе</h1>

    <p><strong>ID:</strong> {{ $user->id }}</p>
    <p><strong>Имя:</strong> {{ $user->name }}</p>
    <p><strong>Email:</strong> {{ $user->email }}</p>
</div>
@endsection