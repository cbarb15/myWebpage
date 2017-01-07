<?php
/**
 * Created by PhpStorm.
 * User: CharlieBarber
 * Date: 3/15/16
 * Time: 3:07 AM
 */
session_start();

$role = $_SESSION["role"];
echo "
            <!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.1//EN\" \"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd\">

            <html lang=\"en\">

           <head>

                <!-- Last Updated Spring 2016 -->
                <!-- Charlie Barber -->
                <!-- University of Utah -->


                <title> Grad Form </title>

                <!-- Meta Information about Page -->
                <meta charset=\"utf-8\"/>
                <meta name=\"AUTHOR\"      content=\"Charlie Barber\"/>
                <meta name=\"keywords\"    content=\"HTML, Template\"/>
                <meta name=\"description\" content=\"This is a form for a grad students progress in his/her program\"/>

                <!-- ALL CSS FILES -->
                    <!-- Bootstrap Core CSS -->
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
                            <span class=\"sr-only\"> Toggle navigation </span >
                            <span class=\"icon-bar\"></span >
                            <span class=\"icon-bar\" ></span >
                            <span class=\"icon-bar\"></span >
                        </button >
                        <a class=\"navbar-brand\" href = \"#\"><img src = '../../img/logo.gif' align = \"middle\" width = \"25px\" height = \"25px\" ></a >
                    </div >
                    <ul class=\"nav navbar-nav\" >
                            <li class=\"active\"><a href = \"../../index.php\"> Home</a ></li >
                            <li ><a href = \"../../View/Student/index.php\" style = \"color: white;\" > Student</a ></li >
                            <li ><a href = \"../../View/Advisor/index.php\" style = \"color: white;\" > Advisor</a ></li >
                            <li ><a href = \"../../View/DGS/DGSLogin.php\" style = \"color: white;\" > DGS</a ></li >";
                            if(isset($_SESSION["firstName"]) && isset($_SESSION["lastName"]) && isset($_SESSION["role"]))
                            {
                                $name = $_SESSION["firstName"];
                                echo"
                                            <li style=\"margin-top: 15px; color: white\">$name, you are logged in</li>
                                            <li style=\"text align:right\"><a href=\"../Logout.php\" style='color: white'>Logout</a></li>
                                            ";
                            }
                    echo"
                        </ul>
                    </div>
                </div>
            </nav>

            <ol class='breadcrumb'>
                <li><a href='../../index.php'>Home</a> </li>
                <li><a href='../../View/Student/index.php'>Student Login/Registration</a> </li>
                <li><a href='../../View/Student/Student_Login.php'>Student Login</a> </li>
                <li class='active'>Student Forms List</li>
            </ol>

            <div class='container'>

                <div class='jumbotron'>
                <h2 style='text-align: center'>Student Forms</h2>
                <a href=\"Create_New_Form.php\"><button class='btn btn-sm btn-primary center-block'>New Form</button></a>
                </div>

                <table class=\"table table-hover table-striped\">
                    <thead>
                      <tr>
                        <th style='text-align: center'>Student Forms</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                         <td style=\"text-align:center\"><a href=\"../../Controller/Student/Student_Forms.php?name=$connection->firstName\" style=\"text-decoration: none\">$connection->firstName's forms</a></td>
                      </tr>
                    </tbody>
              </table>


            <aside class=\"callout\">
                <div class=\"text-vertical-center\">
                    <img id=\"logo\" src=\"../../img/ULogo.jpg\" width=\"100px\" height=\"100px\">
                </div>
            </aside>
            </div>";

include '../../css/Footer.php';

echo "
        </body>
        </html>";
?>