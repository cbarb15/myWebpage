<?php

echo"
<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>University of Utah</title>

    <!-- Bootstrap Core CSS -->
    <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- Custom CSS -->
    <link href=\"css/stylish-portfolio.css\" rel=\"stylesheet\">

    <link href=\"css/bootstrap.css\" rel=\"stylesheet\">


    <!-- Custom Fonts -->
    <link href=\"font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic\" rel=\"stylesheet\" type=\"text/css\">

</head>

<body>

<!-- Navigation -->
<a id=\"menu-toggle\" href=\"#\" class=\"btn btn-dark btn-lg toggle\"><i class=\"fa fa-bars\"></i></a>
<nav id=\"sidebar-wrapper\">
    <ul class=\"sidebar-nav\">
        <a id=\"menu-close\" href=\"#\" class=\"btn btn-light btn-lg pull-right toggle\"><i class=\"fa fa-times\"></i></a>
        <li class=\"sidebar-brand\">
            <a href=\"#top\"  onclick = $(\"#menu-close\").click(); >University of Utah</a>
        </li>
        <li>
            <a href=\"View/Register.php\" onclick = $(\"#menu-close\").click(); >Register</a>
        </li>
        <li>
            <a href=\"#about\" onclick = $(\"#menu-close\").click(); >Directory</a>
        </li>
        <li>
            <a href=\"View/Student/index.php\" onclick = $(\"#menu-close\").click(); >Student</a>
        </li>
        <li>
            <a href=\"View/Advisor/index.php\" onclick = $(\"#menu-close\").click(); >Advisor</a>
        </li>
        <li>
            <a href=\"View/DGS/DGSLogin.php\" onclick = $(\"#menu-close\").click(); >DGS</a>
        </li>
    </ul>
</nav>

<!-- Header -->
<header id=\"top\" class=\"header\">
    <div class=\"text-vertical-center\">
        <div class=\"text text-center\">University of Utah</div><br>
        <div class=\"text text-center\">Grad Student Tracker</div>
        <img src='img/logo.gif' align=\"middle\" width=\"100px\" height=\"100px\">
        <br>
        <a href=\"#about\" class=\"btn btn-dark btn-lg\">Get Started</a>
    </div>
</header>

<!-- About -->
<section id=\"about\" class=\"about\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 text-center\">
                <h2>ReadMe about this site <a href=\"ReadMe.php\">here</a></h2>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>

<!-- Services -->
<!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
<div class=\"directory\">
    <div class=\"container\">
        <div class=\"row text-center\">
            <div class=\"col-lg-10 col-lg-offset-1\">
                <div class=\"directoryText\">
                    <strong>Directory</strong>
                </div>
                <hr class=\"small\">
                <div class=\"row\">
                    <div class=\"col-md-3 col-sm-6\">
                        <div class=\"service-item\">
                                <span class=\"fa-stack fa-4x\">
                                <i class=\"fa fa-circle fa-stack-2x\"></i>
                                <i class=\"fa fa-angle-double-up fa-stack-1x text-primary\"></i>
                            </span>
                            <div class=\"directoryText\">
                                <strong>Register</strong>
                            </div>
                            <a href=\"View/Register.php\" class=\"btn btn-light\">Register</a>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6\">
                        <div class=\"service-item\">
                                <span class=\"fa-stack fa-4x\">
                                <i class=\"fa fa-circle fa-stack-2x\"></i>
                                <i class=\"fa fa-graduation-cap fa-stack-1x text-primary\"></i>
                            </span>
                            <div class=\"directoryText\">
                                <strong>Student</strong>
                            </div>
                            <a href=\"View/Student/index.php\" class=\"btn btn-light\">Enter</a>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6\">
                        <div class=\"service-item\">
                                <span class=\"fa-stack fa-4x\">
                                <i class=\"fa fa-circle fa-stack-2x\"></i>
                                <i class=\"fa fa-pencil fa-stack-1x text-primary\"></i>
                            </span>
                            <div class=\"directoryText\">
                                <strong>Advisor</strong>
                            </div>
                            <a href=\"View/Advisor/index.php\" class=\"btn btn-light\">Enter</a>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6\">
                        <div class=\"service-item\">
                                <span class=\"fa-stack fa-4x\">
                                <i class=\"fa fa-circle fa-stack-2x\"></i>
                                <i class=\"fa fa-male fa-stack-1x text-primary\"></i>
                            </span>
                            <div class=\"directoryText\">
                                <strong>DGS</strong>
                            </div>
                            <a href=\"View/DGS/DGSLogin.php\" class=\"btn btn-light\">Enter</a>
                        </div>
                    </div>
                </div>
                <!-- /.row (nested) -->
            </div>
            <!-- /.col-lg-10 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</div>

<aside class=\"callout\">
    <div class=\"text-vertical-center\">
        <img id=\"logo\" src='img/ULogo.jpg' width=\"100px\" height=\"100px\">
    </div>
</aside>


<!-- Call to Action -->
<aside class=\"call-to-action bg-primary\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 text-center\">
                <a href=\"https://www.learning2.eng.utah.edu/course/view.php?id=92\" class=\"btn btn-lg btn-dark\">Class Home Page</a>
                <a href=\"http://uofu-cs4540-0.westus.cloudapp.azure.com/Class_Examples/\" class=\"btn btn-lg btn-dark\">Class Examples</a>
                <a href=\"http://uofu-cs4540-0.westus.cloudapp.azure.com/tutorials/\" class=\"btn btn-lg btn-dark\">Azure Tutorial</a>
                <a href=\"View/Schema.php\" class=\"btn btn-lg btn-dark\">Database Schema</a>
                <a href=\"https://github.com/uofu-cs4540/980833\" class=\"btn btn-lg btn-dark\"><img src='img/Octocat.png' width=\"25\" height=\"25\"></a>
            </div>
        </div>
    </div>
</aside>
";

include "css/Footer.php";

echo"
<!-- jQuery -->
<script src=\"js/jquery.js\"></script>

<!-- Bootstrap Core JavaScript -->
<script src=\"js/bootstrap.min.js\"></script>

<!-- Custom Theme JavaScript -->
<script>
    // Closes the sidebar menu
    $(\"#menu-close\").click(function(e) {
        e.preventDefault();
        $(\"#sidebar-wrapper\").toggleClass(\"active\");
    });

    // Opens the sidebar menu
    $(\"#menu-toggle\").click(function(e) {
        e.preventDefault();
        $(\"#sidebar-wrapper\").toggleClass(\"active\");
    });

    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
</script>

</body>

</html>";
?>