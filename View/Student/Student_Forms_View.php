<?php
session_start();

$role = $_SESSION["role"];
echo"

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

</head>
<body>
<nav class=\"navbar navbar-default navbar-fixed-top\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
    <span class=\"sr-only\" > Toggle navigation </span >
                <span class=\"icon-bar\"></span >
                <span class=\"icon-bar\"></span >
                <span class=\"icon-bar\"></span >
            </button >
            <a class=\"navbar-brand\" href = \"#\" ><img src = \"../../img/logo.gif\" align = \"middle\" width = \"25px\" height = \"25px\"></a >
        </div >
        <div id = \"navbar\" class=\"navbar-collapse collapse\" >
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
                <li class='active'>Student Form</li>
            </ol>

<div class='container'>
<h2 style='text-align: center'>Due Progress Advisory Document for Ph.D. Degree</div>
<h3 class=\"error\" style='margin-top: 100px; text-align: center'>**Please type information before printing**</h3>
<div id='' style=\"text-align: center\">
    <a href=\"../../View/Student/Edit_Student_Forms_View.php\" id=\"editButton\"><button>Edit Form</button></a>

    <form>
            Date:<input name=\"date\" value='2/10/2015' readonly><br><br>
            Student Name:<br> <input name=\"firstName\" value=\"$studentController->firstName $studentController->lastName\" readonly><br><br>
            Degree:</br>
          <input name=\"degreeSelect\" value=\"$studentController->department\" readonly><br><br>

            Semester Admitted: <br>
           <input name=\"semesterSelect\" value=\"$studentController->semester\" readonly><br><br>

                Year Admitted:<br>
           <input name=\"yearSelect\" value=\"$studentController->year\" readonly><br><br>
    </form>
    </div>

</div>

<div class='container'>
    <table class='table table-striped' style='width: 1000px'>
        <tr>
            <th>Activity</th><th>Good Progress</th><th>Acceptable Progress</th><th>Number Of Semesters Completed In</th><th>Semester Completed</th>
        </tr>
        <tr>
            <td>Identify Advisor</td><td>1 semester</td><td>2 semesters</td><td><input name=\"semesterCompleted\" value=2 readonly></td><td><input name=\"semesterCompleted\" value='Fall' readonly></td>
        </tr>
        <tr>
            <td>Program of study approved by advisor and initial commitee</td><td>4 semesters</td><td>5 semesters</td><td><input name=\"semesterCompleted\" value=5 readonly></td><td><input name=\"semesterCompleted\" value='Summer' readonly></td>
            </td>
        </tr>
        <tr>
            <td>Complete teaching mentorship</td><td>4 semesters</td><td>6 semesters</td><td><input name=\"semesterCompleted\" value=6 readonly></td><td><input name=\"semesterCompleted\" value='Fall' readonly></td>
        </tr>
        <tr>
            <td>Full committee formed</td><td>6 semesters</td><td>7 semesters</td><td><input name=\"semesterCompleted\" value=6 readonly></td><td><input name=\"semesterCompleted\" value='Spring' readonly></td>
        </tr>
        <tr>
            <td>Program of study approved by commitee</td><td>6 semesters</td><td>7 semesters</td><td><input name=\"semesterCompleted\" value=6 readonly></td><td><input name=\"semesterCompleted\" value='Fall' readonly></td>
        </tr>
        <tr>
            <td>Written qualifier</td><td>5 semesters</td><td>6 semesters</td><td><input name=\"semesterCompleted\" value=6 readonly></td><td><input name=\"semesterCompleted\" value='Fall' readonly></td>
        </tr>
        <tr>
            <td>Oral qualifier/proposal</td><td>7 semesters</td><td>8 semesters</td><td><input name=\"semesterCompleted\" value=8 readonly></td><td><input name=\"semesterCompleted\" value='Spring' readonly></td>
        </tr>
        <tr>
            <td>Dissertation defense</td><td>10 semesters</td><td>12 semesters</td><td><input name=\"semesterCompleted\" value=10 readonly></td><td><input name=\"semesterCompleted\" value='Fall' readonly></td>
        </tr>
        <tr>
            <td>Final document</td><td>48 semesters</td><td>53 semesters</td><td><input name=\"semesterCompleted\" value=48 readonly></td><td><input name=\"semesterCompleted\" value='Fall' readonly></td>
        </tr>
    </table>
</div>

<div class='container' style='text-align: center'>
<input name=\"signature\">
<div id=\"studentSignature\">Student Signature</div>

<input name=\"signatureDate\">
<div id=\"signedDate\">Date</div>

<input name=\"signature\">
<div id=\"studentSignature\">Advisor Signature</div>

<input name=\"signatureDate\">
<div id=\"signedDate\">Date</div>
</div>

<aside class=\"callout\">
    <div class=\"text-vertical-center\">
        <img id=\"logo\" src='../../img/ULogo.jpg' width=\"100px\" height=\"100px\">
    </div>
</aside>

</body>


";

include '../../css/Footer.php';

echo"
</body>
</html>";

?>