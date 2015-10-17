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
            {!! Form::label('is_lopp', 'Loop: ') !!}
            {!! Form::text('is_lopp', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('hiked_on', 'Date Hiked: ') !!}
            {!! Form::input('date', 'hiked_on', date('Y-m-d'), ['class' => 'form-control']) !!}
        </div>

        <!-- Add Adventure Form Input -->
        <div class="form-group">
            {!! Form::submit('Add Adventure', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@stop
