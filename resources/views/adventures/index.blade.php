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

    <div class="col-md-8">
        @foreach ($adventures as $adventure)
            <!-- Modal -->
            <div class="modal fade" id="{{ $adventure->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">{{ $adventure->trail_name }}</h4>
                        </div>
                        <div class="modal-body">
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
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <a href="/adventures/{{ $adventure->id }}/edit"><button type="button" class="btn btn-primary">Edit</button></a>
                        </div>
                    </div>
                </div>
            </div> <!-- /.modal -->
        @endforeach
    </div>
</div>

@stop
