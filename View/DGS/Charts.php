<?php
session_start();
/**
 * Created by PhpStorm.
 * User: CharlieBarber
 * Date: 3/14/16
 * Time: 7:07 PM
 */
echo "
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

    <title>DGS Charts</title>

    <!-- Bootstrap core CSS -->
    <link href=\"../../css/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- Custom CSS -->
    <link href=\"../../css/stylish-portfolio.css\" rel=\"stylesheet\">

    <link href=\"../../css/bootstrap.css\" rel=\"stylesheet\">
    
    <link href=\"../../font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic\" rel=\"stylesheet\" type=\"text/css\">

    <script type=\"text/javascript\" src=\"../../Highcharts/api/js/jquery-1.11.3.min.js\"></script>
    <script type=\"text/javascript\" src=\"../../Highcharts/js/highcharts.src.js\"></script>
    <script src=\"../../js/Validate.js\" type=\"text/javascript\"></script>

   			<script type=\"text/javascript\"></script>
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
            <a class=\"navbar-brand\" href=\"#\"><img src=\"../../img/logo.gif\" align=\"middle\" width=\"25px\" height=\"25px\"></a>
        </div>
        <div id=\"navbar\" class=\"navbar-collapse collapse\">
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
                                <li style=\"text-align:right\"><a href=\"../../View/Logout.php\" style='color: white'>Logout</a></li>";
}
echo"
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<ol class=\"breadcrumb\">
                <li><a href=\"../../index.php\">Home</a> </li>
                <li><a href=\"../../View/DGS/DGSLogin.php\">DGS Login</a> </li>
                <li class=\'active\'>Advisor Overview</li>
            </ol>


<div class=\"container\">
      <div class=\"jumbotron\">
        <h1 style='text-align: center;'>Student Statistics</h1>

        <button id='gpaButton' class='btn btn-sm btn-primary'>Student Gpa's</button>
        <div id=\"GPA_Chart\" style=\"min-width: 400px; height: 400px; margin: 0 auto\"></div>
</div>


<aside class=\"callout\">
    <div class=\"text-vertical-center\">
        <img id=\"logo\" src=\"../../img/ULogo.jpg\" width=\"100px\" height=\"100px\">
    </div>
</aside>
";

include "../../css/Footer.php";

echo"
</body>
</html>
";
?>