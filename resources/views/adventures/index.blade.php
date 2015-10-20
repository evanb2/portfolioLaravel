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


                <!-- Modal -->
                <div class="modal fade" id="{{ $adventure->id }}" tabindex="-1" role="dialog" aria-labelledby="{{ $adventure->trail_name }}">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="{{ $adventure->trail_name }}">{{ $adventure->trail_name }}</h4>
                            </div>
                            <div class="modal-body">
                                <p>
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
                                </p>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
        @endforeach
    </div>
</div>

@stop
