<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css"> -->
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/app.css">
        <title>Evan Butler</title>
    </head>
    <body>

        <!-- NAVBAR -->
        <div class="navbar navbar-default navbar-fixed-top" role="navigation" >
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h3 class="navbar-brand"><a href="/">to being well versed, in all things.</a></h3>
                </div>
                <div class="navbar-collapse collapse" id="navbar" aria-expanded="false">
                    <ul class="nav navbar-nav" id="nav-links">
                        <li><a href="/about" id="about">About</a></li>
                        <li><a href="/contact" id="contact">Contact</a></li>
                        <li><a href="#" id="projects">Projects</a></li>
                        <!-- <li><a href="#" id="reading">Reading</a></li> -->
                    </ul>
                    <!-- <ul class="nav navbar-nav navbar-right"></ul> -->
                </div>
            </div>
        </div>

        <div class="container" id="content">

            @yield('content')

        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="../../dist/js/bootstrap.min.js"></script>
    </body>
</html>
