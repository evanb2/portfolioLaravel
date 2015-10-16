@extends('master')

@section('content')

    <h2>Create a New Adventure</h2>

    <hr>

    {!! Form::open(['url' => 'adventures']) !!}
        <div class="form-group">
            {!! Form::label('trail_name', 'Trail Name: ') !!}
            {!! Form::text('trail_name', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('rating', 'Rating: ') !!}
            {!! Form::text('rating', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('difficulty', 'Difficulty: ') !!}
            {!! Form::text('difficulty', null, ['class' => 'form-control']) !!}
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
            {!! Form::text('length', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('is_lopp', 'Loop: ') !!}
            {!! Form::text('is_lopp', null, ['class' => 'form-control']) !!}
        </div>

        <!-- <div class="form-group">
            {!! Form::label('hiked_on', 'Date Hiked: ') !!}
            {!! Form::text('hiked_on', null, ['class' => 'form-control']) !!}
        </div> -->

        <!-- Add Adventure Form Input -->
        <div class="form-group">
            {!! Form::submit('Add Adventure', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    {!! Form::close() !!}

@stop
