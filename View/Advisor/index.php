<?php
session_start();
/**
 * Created by PhpStorm.
 * User: CharlieBarber
 * Date: 3/14/16
 * Time: 7:07 PM
 */
$role = $_SESSION["role"];

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

    <title>Advisor</title>

    <!-- Bootstrap core CSS -->
    <link href=\"../../css/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- Custom CSS -->
    <link href=\"../../css/stylish-portfolio.css\" rel=\"stylesheet\">

    <link href=\"../../css/bootstrap.css\" rel=\"stylesheet\">

    <script src=\"../../js/Validate.js\" type='text/javascript'></script>
</head>
<body>
<!-- Fixed navbar -->
<nav class=\"navbar navbar-default navbar-fixed-top\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                <span class=\"sr-only\" > Toggle navigation </span >
                <span class=\"icon-bar\" ></span >
                <span class=\"icon-bar\" ></span >
                <span class=\"icon-bar\" ></span >
            </button >
            <a class=\"navbar-brand\" href = \"#\"><img src = '../../img/logo.gif' align = \"middle\" width = \"25px\" height = \"25px\" ></a >
        </div >
        <ul class=\"nav navbar-nav\" >
                <li class=\"active\" ><a href =\"../../index.php\"> Home</a></li >
                <li ><a href = \"../../View/Student/index.php\" style = \"color: white;\"> Student</a ></li >
                <li ><a href = \"../../View/Advisor/index.php\" style = \"color: white;\"> Advisor</a ></li >
                <li ><a href = \"../../View/DGS/DGSLogin.php\" style = \"color: white;\" > DGS</a ></li > ";
                if(isset($_SESSION["firstName"]) && isset($_SESSION["lastName"]) && isset($_SESSION["role"]))
                {
                    $name = $_SESSION["firstName"];
                    echo"
                                <li style=\"margin-top: 15px; color: white\">$name, you are logged in</li>
                                <li style=\"text-align:right\"><a href=\"../Logout.php\" style='color: white'>Logout</a></li>
                                ";
                }
        echo"

            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

            <ol class='breadcrumb'>
                <li><a href='../../index.php'>Home</a> </li>
                <li class='active'>Advisor Login/Registration</li>
            </ol>

<div class=\"container\">
  <div class=\"jumbotron\">
    <h1>Advisor Login/Registration</h1>";

        if(isset($_SESSION['role']))
            echo"
                <a href='Advisor_Login.php' onclick=\"return validateAdvisorEntry('$role')\"><button class='btn btn-lg btn-default btn-block' style='font-size: x-large; height: 100px; text-align: center; text-decoration: none'>Login/Student Form List</button></a>";
        else
            echo"
                   <a href='Advisor_Login.php'><button class='btn btn-lg btn-default btn-block' style='font-size: x-large; height: 100px; text-align: center; text-decoration: none'>Login/Student Form List</button></a>";

            echo"
          </div>


<aside class=\"callout\">
    <div class=\"text-vertical-center\">
        <img id=\"logo\" src='../../img/ULogo.jpg' width=\"100px\" height=\"100px\">
    </div>
</aside>";

include '../../css/Footer.php';
echo"
</body>
</html>";
?>