<?php
session_start();


//If the variables are set then there is the option that the role doesn't match or everything matches
if(isset($_SESSION["firstName"]) && isset($_SESSION["lastName"]) && isset($_SESSION["role"]))
{
    if (isset($_SESSION["firstName"]) && isset($_SESSION["lastName"]) && $_SESSION["role"] == "Advisor")
    {
        require '../../Controller/Advisor/Advisor_Login_Controller.php';
    }
}
//Else show them the log in page.
else {
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
                    <ul class=\"nav navbar-nav\">
                            <li class=\"active\" ><a href = \"../../index.php\"> Home</a></li >
                            <li><a href = \"../../View/Student/index.php\" style = \"color: white;\" > Student</a ></li >
                            <li><a href = \"../../View/Advisor/index.php\" style = \"color: white;\" > Advisor</a ></li >
                            <li ><a href = \"../../View/DGS/DGSLogin.php\" style = \"color: white;\"> DGS</a ></li >";
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

                <div class='container'>
                <div class=\"jumbotron\" style='text-align: center'>
                    <h2>Advisor Login</h2>
                </div>


                <form name=\"studentLoginForm\" action=\" ../../Controller/Advisor/Advisor_Login_Controller.php\" onsubmit=\"return validateStudentLogin()\" method=\"post\">
                    First Name:<input name=\"firstName\" type=\"text\"><div class=\"error\" id=\"firstNameError\" style=\"display: inline-block\"></div></br></br>
                    Last Name:<input name=\"lastName\" type=\"text\"><div class=\"error\" id=\"lastNameError\" style=\"display: inline-block\"></div></br></br>
                    Password:<input name=\"password\" type=\"password\"><div class=\"error\" id=\"passwordError\" style=\"display: inline-block\"></div>
                    <div id=\"invalidPassword\" class=\"error\">$invalidPasswordOrRole</div>
                    <input type=\"submit\" value=\"Submit\">
                </form>
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
}
?>