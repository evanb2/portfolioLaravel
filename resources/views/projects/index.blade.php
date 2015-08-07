@extends('master')

@section('content')

    <div class="row">
        <div class="col-md-6 col-md-offset-3" id="projects-index-content">
            <div class="row project-links">
                <div class="col-sm-4">
                    <a href="#">Epifoodus</a>
                </div>
                <div class="col-sm-4">
                    <a href="#">MakeTitle</a>
                </div>
                <div class="col-sm-4">
                    <a href="#">Adopt-a-Coder</a>
                </div>
            </div>
        </div>
    </div>

    @yield('projects')

@stop
