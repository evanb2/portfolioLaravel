@extends('master')

@section('content')

<div class="row">
    <div class="col-md-6 col-md-offset-3" id="about-content">

        <div class="row" id="tech-skills-row">
            <h2>Technical Skills</h2>
            <div class="row logos">
                <div class="col-sm-4">
                    <img src="/img/php.jpeg" alt="PHP Elephant" width="100%" class="img-responsive" id="php-img"/>
                </div>
                <div class="col-sm-4">
                    <img src="/img/javascript.jpeg" alt="Javascript" width="100%" class="img-responsive"/>
                </div>
                <div class="col-sm-4">
                    <img src="/img/mysql.jpeg" alt="MySQL" width="100%" class="img-responsive"/>
                </div>
            </div>
            <div class="row logos">
                <div class="col-sm-4">
                    <img src="/img/jquery.jpeg" alt="jQuery" width="100%" class="img-responsive"/>
                </div>
                <div class="col-sm-4">
                    <img src="/img/ajax.jpeg" alt="Ajax" width="100%" class="img-responsive" id="ajax-img"/>
                </div>
                <div class="col-sm-4">
                    <img src="/img/css.jpeg" alt="CSS" width="100%" class="img-responsive"/>
                </div>
            </div>
            <div class="row logos">
                <div class="col-sm-4">
                    <img src="/img/laravel.jpeg" alt="Laravel 5" width="100%" class="img-responsive" id="laravel-img"/>
                </div>
                <div class="col-sm-4">
                    <img src="/img/symfony.jpeg" alt="Symfony" width="100%" class="img-responsive"/>
                </div>
                <div class="col-sm-4">
                    <img src="/img/github.jpeg" alt="GitHub" width="100%" class="img-responsive"/>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <p>
                    After graduating from the University of Denver with a B.S.
                    in Psychology I served two years in the Israeli Defense Forces,
                    stationed in the West Bank. Having grown up in Chicago, studied
                    in Denver and Budapest, and served in Israel I'm now living in
                    Portland, Oregon. I attended Epicodus for Web Development and
                    found a true passion. I love that I get to do something that
                    combines problem solving, logic, creativity, and design.
                </p>
            </div>
        </div>

        {{--<div class="row resume-link">--}}
            {{--<div class="col-sm-4 col-sm-offset-4">--}}
                {{--<a href="/resume">Resume</a>--}}
            {{--</div>--}}
        {{--</div>--}}
    </div>
</div>

@stop
