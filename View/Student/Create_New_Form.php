<?php
session_start();

$role = $_SESSION["role"];

echo"

<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.1//EN\" \"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd\">
<> lang=\"en\">
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


    <!-- Custom Fonts -->
    <link href=\"../../font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic\" rel=\"stylesheet\" type=\"text/css\">

    <!--Scripts-->
    <script src='../../js/Form.js' type='text/javascript'></script>

</head>

<body>

<nav class=\"navbar navbar-default navbar-fixed-top\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                <span class=\"sr-only\" > Toggle navigation </span >
                <span class=\"icon-ba\" ></span >
                <span class=\"icon-bar\" ></span >
                <span class=\"icon-bar\" ></span >
            </button >
            <a class=\"navbar-brand\" href = \"#\"><img src = \"../../img/logo.gif\" align = \"middle\" width = \"25px\" height = \"25px\"></a >
        </div >
        <div id =\"navbar\" class=\"navbar-collapse collapse\" >
        <ul class=\"nav navbar-nav\" >
                <li class=\"active\"><a href = \"../../index.php\"> Home</a ></li >
                <li ><a href = \"../../View/Student/index.php\" style =\"color: white;\" > Student</a ></li >
                <li ><a href = \"../../View/Advisor/index.php\" style = \"color: white;\" > Advisor</a ></li >
                <li ><a href = \"../../View/DGS/DGSLogin.php\" style = \"color: white;\" > DGS</a ></li >";
if(isset($_SESSION["firstName"]) && isset($_SESSION["lastName"]) && isset($_SESSION["role"]))
{
    $firstName = $_SESSION["firstName"];
    $lastName = $_SESSION["lastName"];

    echo"
                                <li style=\"margin-top: 15px; color: white\">$firstName, you are logged in</li>
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
                <li><a href='../../View/DGS/Overview.php/'>Advisor List</a> </li>
                <li><a href='../../View/Student/Student_List.php/'>Advisor Student List</a> </li>
                <li><a href='../../View/Student/Student_Forms_View.php/'>Advisor Student List</a> </li>
                <li class='active'>Student Form</li>
            </ol>

<div class='container'>
<h2 style='text-align: center'>Due Progress Advisory Document</h2>
<h3 class=\"error\" style='margin-top: 10px; text-align: center'>**Please type information before printing**</h3>
</div>

<div class='container'>
    <form>
Date:<input name=\"date\" readonly style='background-color: #EDEDED; margin-left: 10px'><br><br>

<!--!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
I CHANGED THE name=\"firstName\" to name=\"name\" I DON'T THINK THIS WILL CAUSE PROBLEMS BUT IT IS POSSIBLE.   JUST KEEP THIS IN MIND IF THERE IS AN ERROR WHEN YOU RUN THE WEBPAGE\
!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->

Student Name:<br> <input name=\"name\"><br><br>
Degree:</br>
            <select name=\"degreeSelect\">
                <option value=\"\">Degree</option>
                <option value=\"Computer Science\">Computer Science</option>
                <option value=\"AP Computer Science\">AP Computer Science</option>
                <option value=\"Computer Engineering\">Computer Engineering</option>
                <option value=\"AP Computer Engineering\">AP Computer Engineering</option>
                <option value=\"Electrical & Computer Engineering\">Electrical And computer Engineering</option>
                <option value=\"AP Electrical & Computer Engineering\">AP Electrical And computer Engineering</option>
            </select><br><br>
Semester Admitted: <br>
            <select name=\"semesterSelect\">
                <option value=\"\">Semester</option>
                <option value=\"Spring\">Spring</option>
                <option value=\"Summer\">Summer</option>
                <option value=\"Fall\">Fall</option>
            </select><br><br>
Year Admitted:<br>
            <select name=\"yearSelect\">
                <option value=\"\">Year</option>
                <option value=\"2015\">2015</option>
                <option value=\"2016\">2016</option>
                <option value=\"2017\">2017</option>
                <option value=\"2018\">2018</option>
                <option value=\"2019\">2019</option>
                <option value=\"2020\">2020</option>
            </select><br>
            </form>

</div>

<div class='container'>
    <form>
            <table class=\"table table-striped\" style=\"width: 1000px\">
                <tr>
                    <th>Activity</th><th>Good Progress</th><th>Acceptable Progress</th><th>Number Of Semesters Completed In</th><th>Semester Completed</th>
                </tr>
                <tr>
                    <td>Identify Advisor</td><td>1 semester</td><td>2 semesters</td><td><select name=\"numSemester1\"><option value=\"0\">Not Completed</option><option value=\"1\">1 semesters</option>
                            <option value=\"2\">2 semesters</option><option value=\"3\">3 semesters</option><option value=\"4\">4 semesters</option><td>
                        <select name=\"semesterCompleted1\"><option value=\"0\">Not Completed</option><option value=\"Spring\">Spring</option>
                            <option value=\"Summer\">Summer</option><option value=\"Fall\">Fall</option></select>
                </tr>
                <tr>
                    <td>Program of study approved by advisor and initial commitee</td><td>4 semesters</td><td>5 semesters</td><td><select name=\"numSemester2\"><option value=\"0\">Not Completed</option><option value=\"4\">4 semesters</option>
                        <option value=\"5\">5 semesters</option><option value=\"6\">6 semesters</option><option value=\"7\">7 semesters</option><td>
                        <select name=\"semesterCompleted2\"><option value=\"0\">Not Completed</option><option value=\"Spring\">Spring</option>
                            <option value=\"Summer\">Summer</option><option value=\"Fall\">Fall</option></select>
                    </td>
                </tr>
                <tr>
                    <td>Complete teaching mentorship</td><td>4 semesters</td><td>6 semesters</td><td><select name=\"numSemester3\"><option value=\"0\">Not Completed</option><option value=\"4\">4 semesters</option>
                            <option value=\"5\">5 semesters</option><option value=\"6\">6 semesters</option><option value=\"7\">7 semesters</option><td>
                        <select name=\"semesterCompleted3\"><option value=\"0\">Not Completed</option><option value=\"Spring\">Spring</option>
                            <option value=\"Summer\">Summer</option><option value=\"Fall\">Fall</option></select>
                </tr>
                <tr>
                    <td>Full committee formed</td><td>6 semesters</td><td>7 semesters</td><td><select name=\"numSemester4\"><option value=\"0\">Not Completed</option><option value=\"6\">6 semesters</option>
                            <option value=\"7\">7 semesters</option><option value=\"8\">8 semesters</option><option value=\"9\">9 semesters</option><td>
                        <select name=\"semesterCompleted4\"><option value=\"0\">Not Completed</option><option value=\"Spring\">Spring</option>
                            <option value=\"Summer\">Summer</option><option value=\"Fall\">Fall</option></select>
                </tr>
                <tr>
                    <td>Program of study approved by commitee</td><td>6 semesters</td><td>7 semesters</td><td><select name=\"numSemester5\"><option value=\"0\">Not Completed</option><option value=\"6\">6 semesters</option>
                            <option value=\"7\">7 semesters</option><option value=\"8\">8 semesters</option><option value=\"9\">9 semesters</option><td>
                        <select name=\"semesterCompleted5\"><option value=\"0\">Not Completed</option><option value=\"Spring\">Spring</option>
                            <option value=\"Summer\">Summer</option><option value=\"Fall\">Fall</option></select>
                </tr>
                <tr>
                    <td>Written qualifier</td><td>5 semesters</td><td>6 semesters</td><td><select name=\"numSemester6\"><option value=\"0\">Not Completed</option><option value=\"5\">5 semesters</option>
                            <option value=\"6\">6 semesters</option><option value=\"7\">7 semesters</option><option value=\"8\">8 semesters</option><td>
                        <select name=\"semesterCompleted6\"><option value=\"0\">Not Completed</option><option value=\"Spring\">Spring</option>
                            <option value=\"Summer\">Summer</option><option value=\"Fall\">Fall</option></select>
                </tr>
                <tr>
                    <td>Oral qualifier/proposal</td><td>7 semesters</td><td>8 semesters</td><td><select name=\"numSemester7\"><option value=\"0\">Not Completed</option><option value=\"7\">7 semesters</option>
                            <option value=\"8\">8 semesters</option><option value=\"9\">9 semesters</option><option value=\"10\">10 semesters</option><td>
                        <select name=\"semesterCompleted7\"><option value=\"0\">Not Completed</option><option value=\"Spring\">Spring</option>
                            <option value=\"Summer\">Summer</option><option value=\"Fall\">Fall</option></select>
                </tr>
                <tr>
                    <td>Dissertation defense</td><td>10 semesters</td><td>12 semesters</td><td><select name=\"numSemester8\"><option value=\"0\">Not Completed</option><option value=\"10\">10 semesters</option>
                            <option value=\"11\">11 semesters</option><option value=\"12\">12 semesters</option><option value=\"13\">13 semesters</option><td>
                        <select name=\"semesterCompleted8\"><option value=\"0\">Not Completed</option><option value=\"Spring\">Spring</option>
                            <option value=\"Summer\">Summer</option><option value=\"Fall\">Fall</option></select>
                </tr>
                <tr>
                    <td>Final document</td><td>48 semesters</td><td>53 semesters</td>
                            <td><input type='text' readonly style='background-color: #EDEDED'></td>
                            <td><input type='text' readonly style='background-color: #EDEDED'></td>
                </tr>
            </table>

             <div class='container' style='text-align: center; margin-top: 100px'>
                         <button class='btn btn-sm btn-primary' type=\"submit\" formaction='../../Controller/Student/New_Form_Controller' formmethod='post' onclick='return createForm()' style='font-size: large; margin-right: 25px'>Submit</button>
             </div>
    </form>
</div>";

        if($role == "Advisor") {
            echo "
                <div class='container' style='text-align: center'>
                    <button class='btn btn-primary btn-lg' style='margin-top: 25px' onclick=''>Sign-Off Student Form</button>
                </div>";
        }
        else if($role == "Student")
        {
            echo"
                <!--Add a function to see if checked off by advisor
                this method would be in just viewing the form. Not when creating it.
                <div class='container' style='text-align: center'>
                    Signed Off
                    <input type=\"checkbox\" onkeydown=\"return false\" onclick=\"return false\">
                </div>-->
                <div class='container' style='text-align: center'>
                     <button class='btn btn-sm btn-primary' style='font-size: large'>Submit</button>
                </div>
                ";
        }


echo"
<aside class=\"callout\">
    <div class=\"text-vertical-center\">
        <img id=\"logo\" src='../../img/ULogo.jpg' width=\"100px\" height=\"100px\">
    </div>
</aside>
";
include '../../css/Footer.php';

echo"
</body>
</html>";

?>