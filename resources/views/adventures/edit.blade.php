@extends('master')

@section('content')

    <h2>Edit: {!! $adventure->trail_name !!}</h2>

    {!! Form::model($adventure, ['method' => 'PATCH', 'action' => ['AdventuresController@update', $adventure->id]]) !!}
        @include('adventures._form', ['submitBtnText' => 'Update Adventure'])
    {!! Form::close() !!}

    @include('errors.list')

@stop
