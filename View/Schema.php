<?php
echo"
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"../../favicon.ico\">

    <title>Static Top Navbar Example for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href=\"../css/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- Custom CSS -->
    <link href=\"../css/stylish-portfolio.css\" rel=\"stylesheet\">

    <link href=\"../css/bootstrap.css\" rel=\"stylesheet\">

</head>

<body>
";

include '../css/Navbar.php';

echo"
            <ol class='breadcrumb'>
                <li><a href='../index.php'>Home</a> </li>
                <li class='active'>Schema</li>
            </ol>
<div class=\"container\">

    <!-- Main component for a primary marketing message or call to action -->
    <div class=\"jumbotron\">
        <h1>Database Schema</h1>
        <img src=\"../img/schema.jpg\" width='100%'>

    </div>

</div> <!-- /container -->

<aside class=\"callout\">
    <div class=\"text-vertical-center\">
        <img id=\"logo\" src='../img/ULogo.jpg' width=\"100px\" height=\"100px\">
    </div>
</aside>";

include '../css/Footer.php';

    echo"
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
<script>window.jQuery || document.write('<script src=\"../../assets/js/vendor/jquery.min.js\"><\/script>')</script>
<script src=\"../../dist/js/bootstrap.min.js\"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src=\"../../assets/js/ie10-viewport-bug-workaround.js\"></script>
</body>
</html>";
?>