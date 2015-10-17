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
            <li>Directions: {{ $adventure->directions }}</li>
            <li>Length: {{ $adventure->length }}</li>
            <li>Loop: {{ $adventure->is_loop }}</li>
            <li>Date Hiked: {{ $adventure->hiked_on->diffForHumans() }}</li>
        </ul>

    </div>
</div>

@stop
