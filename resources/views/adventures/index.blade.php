@extends('master')

@section('content')

<div class="row">
    <div class="col-md-6 col-md-offset-3" id="adventures-content">
        <h2>Adventures</h2>

        <hr>

        @foreach ($adventures as $adventure)
                <ol>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#{{ $adventure->id }}">
                        {{ $adventure->trail_name }}
                    </button>
                </ol>

        @endforeach

        @include('adventures.show')
    </div>
</div>

@stop
