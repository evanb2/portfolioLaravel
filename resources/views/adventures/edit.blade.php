@extends('master')

@section('content')

    <h2>Edit: {!! $adventure->trail_name !!}</h2>

    {!! Form::model($adventure, ['method' => 'PATCH', 'action' => ['AdventuresController@update', $adventure->id]]) !!}
        <div class="form-group">
            {!! Form::label('trail_name', 'Trail Name: ') !!}
            {!! Form::text('trail_name', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('rating', 'Rating: ') !!}
            {!! Form::input('number', 'rating', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('difficulty', 'Difficulty: ') !!}
            {!! Form::input('number', 'difficulty', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('directions', 'Directions: ') !!}
            {!! Form::textarea('directions', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('description', 'Description: ') !!}
            {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('length', 'Length (mi): ') !!}
            {!! Form::input('number', 'length', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('is_loop', 'Loop: ') !!}
            {!! Form::input('number', 'is_loop', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('hiked_on', 'Date Hiked: ') !!}
            {!! Form::input('date', 'hiked_on', date('Y-m-d'), ['class' => 'form-control']) !!}
        </div>

        <!-- Add Adventure Form Input -->
        <div class="form-group">
            {!! Form::submit('Update Adventure', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    {!! Form::close() !!}

    @include('errors.list')

@stop
