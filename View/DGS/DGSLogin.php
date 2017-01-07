<?php
session_start();
/**
 * Created by PhpStorm.
 * User: CharlieBarber
 * Date: 3/14/16
 * Time: 7:07 PM
 */
echo"
<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.1//EN\" \"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd\">
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"../../favicon.ico\">

    <title>Advisor Register</title>

    <!-- Bootstrap core CSS -->
    <link href=\"../../css/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- Custom CSS -->
    <link href=\"../../css/stylish-portfolio.css\" rel=\"stylesheet\">

    <link href=\"../../css/bootstrap.css\" rel=\"stylesheet\">

    <script src=\"../../js/Validate.js\" type=\"text/javascript\"></script>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>
<body>
<!-- Fixed navbar -->
<nav class=\"navbar navbar-default navbar-fixed-top\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"#\"><img src='../../img/logo.gif' align=\"middle\" width=\"25px\" height=\"25px\"></a>
        </div>
        <ul class=\"nav navbar-nav\">
                <li class=\"active\"><a href=\"../../index.php\">Home</a></li>
                <li><a href=\"../../View/Student/index.php\" style=\"color: white;\">Student</a></li>
                <li><a href=\"../../View/Advisor/index.php\" style=\"color: white;\">Advisor</a></li>
                <li><a href=\"../../View/DGS/DGSLogin.php\" style=\"color: white;\">DGS</a></li>";
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
                <li class='active'>DGS Login</li>
            </ol>

<div class=\"container\">

        <h2 class=\"form-signin-heading\">DGS Login</h2>
   <form name=\"studentLoginForm\" action=\" ../../Controller/DGS/DGS_Login_Controller.php\" onsubmit=\"return validateStudentLogin()\" method=\"post\">
                <input name=\"firstName\" placeholder=\"First Name\" type=\"text\"><div class=\"error\" id=\"firstNameError\" style=\"display: inline - block\"></div></br></br>
                <input name=\"lastName\" placeholder=\"Last Name\" type=\"text\"><div class=\"error\" id=\"lastNameError\" style=\"display: inline - block\"></div></br></br>
                <input name=\"password\" placeholder=\"Password\" type=\"password\"><div class=\"error\" id=\"passwordError\" style=\"display: inline - block\"></div>
                <div id=\"invalidPassword\" class=\"error\">$invalidPasswordOrRole</div>
                <input type=\"submit\" value=\"Submit\">
            </form>
    </div> <!-- /container -->



<aside class=\"callout\">
    <div class=\"text-vertical-center\">
        <img id=\"logo\" src='../../img/ULogo.jpg' width=\"100px\" height=\"100px\">
    </div>
</aside>
";

include "../../css/Footer.php";

echo "
</body>
</html>
";
?>