@extends('layouts.app')

@section('title', "Editar o Usuário {$user->name}")

@section('content')
<h1 class="text-2xl font-semibold leading-tigh py-2 text-decoration: underline" >Editar o Usuário {{ $user->name }}</h1>
<a href="{{ route('users.index', $user->id) }}" class="bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white px-8 py-1 text-sm">inicio</a><br>

@include('includes.validation-form')

<form action="{{ route('users.update', $user->id) }}" method="post" enctype="multipart/form-data">
    <input type="hidden" name="_method" value="PUT">
    @include('users._partials.form')


</form>

@endsection
