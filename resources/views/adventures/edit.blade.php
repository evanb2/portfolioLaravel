@extends('master')

@section('content')

    <h2>Edit: {!! $adventure->trail_name !!}</h2>

    {!! Form::model($adventure, ['method' => 'PATCH', 'action' => ['AdventuresController@update', $adventure->id], 'class' => 'form-horizontal']) !!}
        @include('adventures._form', ['submitBtnText' => 'Update Adventure', 'imagePath' => $adventure->img])
    {!! Form::close() !!}

    @include('errors.list')

@stop
