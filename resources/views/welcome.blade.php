@extends('master')

@section('content')

    <div class="jumbotron col-lg-8 col-lg-offset-2">
        <h1 id="name">evan butler</h1>
        <h4>Junior Developer</h4>
        <img id="prof-pic" src="/img/prof_pic.jpeg" alt="Evan Butler drinking a beer at the hot springs" width="300px"/>
    </div>

    <div class="row">
        <div class="col-md-6 col-md-offset-3" id="contact-content">
            <div class="row social">
                <div class="col-sm-4">
                    <a href="https://facebook.com/evan.butler.31">
                        <img src="/img/contact/facebook.jpeg" alt="Facebook" width="100px"/>
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="https://github.com/evanb2">
                        <img src="/img/github.jpeg" alt="GitHub" width="100px"/>
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="https://instagram.com/manintheglass">
                        <img src="/img/contact/instagram.jpeg" alt="Instagram" width="90px"/>
                    </a>
                </div>
            </div>
        </div>
    </div>
@stop
