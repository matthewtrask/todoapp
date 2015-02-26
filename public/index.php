<!doctype html5>
<html>
<head>
	<title>AppRed | A new todo app</title>
    <meta author="Matt Trask">
    <meta robots="">
	<!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.3.0/fullcalendar.min.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- Script load in -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.3.0/fullcalendar.min.js"></script>

</head>

<body>

    <nav>
        <div class="nav-wrapper">
            <a href="#">AppRed</a>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col s12">
                <h1>AppRed</h1>
                <h3>A todo app that will revolutionize the todo app market</h3>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s6">
                        <input id="first_name" type="text" class="validate">
                        <label for="first_name">First Name</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="last_name" type="text" class="validate">
                        <label for="last_name">Last Name</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="email_address" type="text" class="validate">
                        <label for="email_address">Email Address</label>
                    </div>
                </div>
            </form>
        </div>
	</div>


    <footer class="page-footer">
        <div class="container">
            <div class="row">
                <div class="col 16 col s12">
                    <h5 class="white-text">Footer</h5>
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                        <li>Links</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                © 2014 Copyright Text
                <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
        </div>
    </footer>


	<!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>


</html>