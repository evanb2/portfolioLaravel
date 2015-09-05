@extends('master')

@section('content')

    <div class="row">
        <div class="jumbotron col-lg-8 col-lg-offset-2">
            <h1 id="name">evan butler</h1>
            <h4>Junior Developer</h4>
            <img id="prof-pic" src="/img/prof_pic2.jpeg" alt="Evan Butler drinking a beer at the hot springs" width="300px"/>
        </div>
    </div>

    <div class="row" id="contact-content">
        <!-- <div class="col-sm-4 social"> -->
            <a href="https://facebook.com/evan.butler.31">
                <img src="/img/contact/facebook.jpeg" alt="Facebook" width="50%" class="img-responsive contact-imgs"/>
            </a>
        <!-- </div> -->
        <!-- <div class="col-sm-4 social"> -->
            <a href="https://github.com/evanb2">
                <img src="/img/github.jpeg" alt="GitHub" width="50%" class="img-responsive contact-imgs"/>
            </a>
        <!-- </div> -->
        <!-- <div class="col-sm-4 social"> -->
            <a href="https://instagram.com/manintheglass">
                <img src="/img/contact/instagram.jpeg" alt="Instagram" width="50%" class="img-responsive contact-imgs"/>
            </a>
        <!-- </div> -->
    </div>

@stop
