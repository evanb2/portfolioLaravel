@extends('master')

@section('content')

    <h2>Create a New Adventure</h2>

    <hr>

    {!! Form::open(['url' => 'adventures']) !!}
        @include('adventures._form', ['submitBtnText' => 'Add Adventure', 'imagePath' => '/img/adventure/'])
    {!! Form::close() !!}

    @include('errors.list')

@stop
