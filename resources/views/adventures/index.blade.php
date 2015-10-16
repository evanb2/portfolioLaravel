@extends('master')

@section('content')

<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <h2>Adventures</h2>

        @foreach ($adventures as $adventure)
            <article>
                <h3>
                    <a href="adventures/{{ $adventure->id }}">{{ $adventure->trail_name }}</a>
                </h3>

                <div class="body">{{ $adventure->description }}</div>
            </article>
        @endforeach
    </div>
</div>

@stop
