<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="/img/prof_pic3.jpg" type="image/png">
        <link href="//fonts.googleapis.com/css?family=Lato:300" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/app.css">
        <title>Evan Butler</title>
    </head>
    <body>

        <!-- NAVBAR -->
        <div class="navbar navbar-default navbar-fixed-top" role="navigation" >
            <div class="container">
                <div class="navbar-header">
                    <button id="navbar-button" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h3 class="navbar-brand"><a href="/">to being well versed, in all things.</a></h3>
                </div>
                <div class="navbar-collapse collapse" id="navbar" aria-expanded="false">
                    <ul class="nav navbar-nav" id="nav-links">
                        <li><a href="/about" class="menu-links" id="about">About</a></li>
                        <li><a href="/resume" class="menu-links" id="contact">CV</a></li>
                        {{--<li><a href="/projects" class="menu-links" id="projects">Projects</a></li>--}}
                        <li><a href="/adventures" class="menu-links" id="adventures">Adventures</a></li>
                    </ul>
                    <!-- <ul class="nav navbar-nav navbar-right"></ul> -->
                </div>
            </div>
        </div>

        <div class="container" id="content">

            @yield('content')

        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </body>
</html>
