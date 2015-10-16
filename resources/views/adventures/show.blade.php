@extends('master')

@section('content')

<hr>

<div class="row">
    <div class="col-md-6 col-md-offset-3">

        <ul>
            <li>Trail Name: {{ $adventure->trail_name }}</li>
            <li>Difficulty: {{ $adventure->difficulty }}</li>
            <li>Rating: {{ $adventure->rating }}</li>
            <li>Description: {{ $adventure->description }}</li>
        </ul>

    </div>
</div>

@stop
