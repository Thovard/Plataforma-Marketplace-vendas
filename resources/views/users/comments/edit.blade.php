@extends('layouts.app')

@section('title', "Editar o comentario do Usuario {$user->name}")

@section('content')
<h1 class="text-2xl font-semibold leading-tigh py-2 text-decoration: underline" >Editar o comentario</h1>
<a href="{{ route('comments.index', $user->id) }}" class="bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white px-8 py-1 text-sm">voltar</a><br>

@include('includes.validation-form')

<form action="{{ route('comments.update', $comment->id) }}" method="post" enctype="multipart/form-data">
    <input type="hidden" name="_method" value="PUT">
    @include('users.comments._partials.form')


</form>

@endsection
