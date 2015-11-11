@extends('master')

@section('content')

<div class="row">
    <div class="col-md-4" id="adventures-content">
        <h2>Adventures</h2>
        <h2>(under construction)</h2>

        <hr>

        @foreach ($adventures as $adventure)
            <!-- Button trigger modal -->
            <ol>
                <button type="button" class="btn btn-primary btn-lg modal-buttons" data-toggle="modal" data-target="#{{ $adventure->id }}">
                    {{ $adventure->trail_name }}
                </button>
            </ol>
        @endforeach

        <hr>
        <button type="button" class="btn btn-secondary btn-sm"><a href="/adventures/create">Add Adventure</a></button>

    </div>

    @include('adventures.show')
</div>

@stop
