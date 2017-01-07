<?php
/**
 * Created by PhpStorm.
 * User: CharlieBarber
 * Date: 3/14/16
 * Time: 7:07 PM
 */
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


    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src=\"../../assets/js/ie8-responsive-file-warning.js\"></script><![endif]-->
    <script src=\"../js/changeForm.js\"></script>
    <script src=\"../js/Validate.js\"></script>

</head>";

include '../css/Navbar.php';

echo"
<body>



<ol class='breadcrumb'>
                <li><a href='../index.php'>Home</a> </li>
                <li class='active'>Register</li>
            </ol>

<div class=\"container\">

    <div class='jumbotron'>
    <h2>Register New User</h2>
    </div>
        <input type=\"radio\" name=\"form\" value=\"Student\" onclick=\"changeForm(this.value)\">  Student
        <input type=\"radio\" name=\"form\" value=\"Advisor\" onclick=\"changeForm(this.value)\">  Advisor
        <div id=\"form\"></div>

</div> <!-- /container -->



<aside class=\"callout\">
    <div class=\"text-vertical-center\">
        <img id=\"logo\" src='../img/ULogo.jpg' width=\"100px\" height=\"100px\">
    </div>
</aside>
</body>";

?>