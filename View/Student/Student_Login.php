<?php
session_start();

$role = $_SESSION["role"];
/**
 * Created by PhpStorm.
 * User: CharlieBarber
 * Date: 3/14/16
 * Time: 7:07 PM
 */

//If the variables are set then there is the option that the role doesn't match or everything matches
if(isset($_SESSION["firstName"]) && isset($_SESSION["lastName"]) && isset($_SESSION["role"]))
{
       if (isset($_SESSION["firstName"]) && isset($_SESSION["lastName"]) && $_SESSION["role"] == "Student")
    {
        require '../../Controller/Student/Student_Login_Controller.php';
    }
}
//Else show them the log in page.
else {
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
                            <span class=\"sr-only\" > Toggle navigation </span >
                            <span class=\"icon-bar\" ></span >
                            <span class=\"icon-bar\" ></span >
                            <span class=\"icon-bar\" ></span >
                        </button >
                        <a class=\"navbar-brand\" href = \"#\" ><img src = '../../img/logo.gif' align = \"middle\" width = \"25px\" height = \"25px\"></a >
                    </div >
                    <ul class=\"nav navbar-nav\" >
                            <li class=\"active\" ><a href = \"../../index.php\" > Home</a ></li >
                            <li ><a href = \"../../View/Student/index.php\" style = \"color: white;\" > Student</a ></li >
                            <li ><a href = \"../../View/Advisor/index.php\" style = \"color: white;\" > Advisor</a ></li >
                            <li ><a href = \"../../View/DGS/DGSLogin.php\" style = \"color: white;\" > DGS</a ></li >";
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
                </div>";

            if(isset($_SESSION["firstName"]) && isset($_SESSION["lastName"]) && isset($_SESSION["role"]))
            {
                $name = $_SESSION["firstName"];
                $role = $_SESSION["role"];
                echo "
            <div style=\"text-align: right\" class=\"loggedIn\">$name, you are logged in</div><div style=\"text-align:right\"class=\"logout\"><a href=\"../Logout.php\">Logout</a></div>
            ";
            }
            echo"
            </nav>

            <ol class='breadcrumb'>
                <li><a href='../../index.php'>Home</a> </li>
                <li><a href='index.php'>Student Login/Registration</a> </li>
                <li class='active'>Student Login</li>
            </ol>

            <div class='container'>

                <h2>Student Login</h2>
                <form name=\"studentLoginForm\" action=\"../../Controller/Student/Student_Login_Controller.php\" onsubmit=\"return validateStudentLogin()\" method=\"post\">

                    <input name=\"firstName\" type=\"text\" placeholder='First Name'><div class=\"error\" id=\"firstNameError\" style=\"display: inline-block\"></div></br></br>
                    <input name=\"lastName\" type=\"text\" placeholder='Last Name'><div class=\"error\" id=\"lastNameError\" style=\"display: inline-block\"></div></br></br>
                    <input name=\"password\" type=\"password\" placeholder='password'><div class=\"error\" id=\"passwordError\" style=\"display: inline-block\"></div>
                    <div id=\"invalidPassword\" class=\"error\">$invalidPasswordOrRole</div>
                    <input type=\"submit\" value=\"Submit\"<button class='btn btn-group-sm btn-primary' style='margin-top: 10px'></button>
                </form>


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
}
?>