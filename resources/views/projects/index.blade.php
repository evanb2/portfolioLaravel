@extends('master')

@section('content')

    <div class="row">
        <div class="col-md-6 col-md-offset-3" id="projects-index-content">
            <div class="row project-links">
                <div class="col-sm-4 projects">
                    <a href="https://epifoodus.herokuapp.com">Epifoodus</a>
                </div>
                <div class="col-sm-4 projects">
                    <a href="http://titlecase.site44.com">MakeTitle</a>
                </div>
                <div class="col-sm-4 projects">
                    <a href="http://dev-adopt-an-epicoder.pantheon.io">Adopt-a-Coder</a>
                </div>
            </div>
        </div>
    </div>

    @yield('project')

@stop
