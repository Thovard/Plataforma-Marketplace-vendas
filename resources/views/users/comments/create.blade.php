
@extends('layouts.app')

@section('title', "Novo Comentaio para o usuaio {$user->name}")

@section('content')
<h1 class="text-2xl font-semibold leading-tigh py-2">Novo Comentaio para o usuaio {{$user->name}}</h1>
<input type="button" class="w-80x shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" value="Voltar" onClick="history.go(-1) ">

@include('includes.validation-form')

<form action="{{ route('comments.store', $user->id) }}" method="post" enctype="multipart/form-data">
    @include('users.comments._partials.form')
</form>

@endsection
