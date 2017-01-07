<?php
session_start();

$role = $_SESSION["role"];
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

    <title>Student List</title>

    <!-- Bootstrap core CSS -->
    <link href=\"../../css/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- Custom CSS -->
    <link href=\"../../css/stylish-portfolio.css\" rel=\"stylesheet\">

    <link href=\"../../css/bootstrap.css\" rel=\"stylesheet\">

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

            <ol class='breadcrumb'>
                <li><a href='../../index.php'>Home</a> </li>
                <li><a href='../../View/DGS/DGSLogin.php'>DGS Login</a> </li>
                <li><a href='../../Controller/DGS/DGS_Login_Controller.php/'>Advisor List</a> </li>

                <li class='active'>Student List</li>
            </ol>

<div class=\"container\">
      <div class=\"jumbotron\">
        <h1 style='text-align: center;'>Advisor's Students</h1>
      </div>
<div class=\"container\">

        <table class=\"table table-hover table-striped\">
            <thead>
              <tr>
                <th style='text-align: center'>Student</th><th style='text-align: center'>Status</th><th style='text-align: center'>Compliance</th><th style='text-align: center'>Form Completed</th><th style='text-align: center'>Advisor Signiture</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><a href='../../Controller/Student/Student_Forms.php?name={$dgs->student1->FirstName}'>{$dgs->student1->FirstName} {$dgs->student1->LastName}</a></td><td>Completed</td><td>Good</td><td>Completed</td><td>Completed</td>
              </tr>
              <tr>
                <td><a href='../../Controller/Student/Student_Forms.php?name={$dgs->student2->FirstName}'>{$dgs->student2->FirstName} {$dgs->student2->LastName}</a></td><td>Completed</td><td>Good</td><td>Completed</td><td>Completed</td>
              </tr>
              <tr>
                <td><a href='../../Controller/Student/Student_Forms.php?name={$dgs->student3->FirstName}'>{$dgs->student3->FirstName} {$dgs->student3->LastName}</a></td><td>Completed</td><td>Good</td><td>In-Progress</td><td>Completed</td>
              </tr>
              <tr>
                <td><a href='../../Controller/Student/Student_Forms.php?name={$dgs->student4->FirstName}'>{$dgs->student4->FirstName} {$dgs->student4->LastName}</a></td><td>Completed</td><td>Good</td><td>In-Progress</td><td>Completed</td>
              </tr>
              <tr>
                <td><a href='../../Controller/Student/Student_Forms.php?name={$dgs->student5->FirstName}'>{$dgs->student5->FirstName} {$dgs->student5->LastName}</a></td><td>Completed</td><td>Good</td><td>In-Progress</td><td>Completed</td>
              </tr>
            </tbody>
          </table>
</div>

<aside class=\"callout\">
    <div class=\"text-vertical-center\">
        <img id=\"logo\" src=\"../../img/ULogo.jpg\" width=\"100px\" height=\"100px\">
    </div>
</aside>";

include '../../css/Footer.php';

echo"
</body>
</html>
";
?>