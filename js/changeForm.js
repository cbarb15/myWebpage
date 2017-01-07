/**
 * Created by CharlieBarber on 3/19/16.
 */
function changeForm(form)
{
    if(form == "Student")
    {
      document.getElementById("form").innerHTML = "<h2 class=\"form-signin-heading\">Create New Student</h2>" +
                                                  "<form name=\"newStudentRegistrationForm\" action=\"../Controller/Student/RegisterStudentController.php\" onsubmit=\"return validateStudentRegister()\" method=\"post\">" +
                                                  "<input name=\"firstName\" placeholder=\"First name\"><div class=\"error\" id=\"firstNameError\" style=\"display: inline-block\"></div><br><br>" +
                                                  "<input name=\"lastName\" placeholder=\"Last name\"><div class=\"error\" id=\"lastNameError\" style=\"display: inline-block\"></div><br><br>" +
                                                  "<input name=\"password\" placeholder=\"New Password\" type=\"password\"><div id=\"passwordError\" class=\"error\" style=\"display: inline-block\"></div></br></br>" +
                                                  "Degree</br>" +
                                                  "<select name=\"degreeSelect\">" +
                                                  "     <option value=\"\">Degree</option>" +
                                                  "     <option value=\"Computer Science\">Computer Science</option>" +
                                                  "     <option value=\"AP Computer Science\">AP Computer Science</option>" +
                                                  "     <option value=\"Computer Engineering\">Computer Engineering</option>" +
                                                  "     <option value=\"AP Computer Engineering\">AP Computer Engineering</option>" +
                                                  "     <option value=\"Electrical & Computer Engineering\">Electrical And computer Engineering</option>" +
                                                  "     <option value=\"AP Electrical & Computer Engineering\">AP Electrical And computer Engineering</option>" +
                                                  "</select><div class=\"error\" id =\"degreeError\" style=\"display: inline-block\"></div><br><br>" +
                                                  "Semester Admitted: <br><br>" +
                                                  "<select name=\"semesterSelect\">" +
                                                  "     <option value=\"\">Semester</option>" +
                                                  "     <option value=\"Spring\">Spring</option>" +
                                                  "     <option value=\"Summer\">Summer</option>" +
                                                  "     <option value=\"Fall\">Fall</option>" +
                                                  "</select><div class=\"error\" id =\"semesterError\" style=\"display: inline-block\"></div><br><br>" +
                                                  "Year Admitted:<br>" +
                                                  "<select name=\"yearSelect\">" +
                                                  "     <option value=\"\">Year</option>" +
                                                  "     <option value=\"2015\">2015</option>" +
                                                  "     <option value=\"2016\">2016</option>" +
                                                  "     <option value=\"2017\">2017</option>" +
                                                  "     <option value=\"2018\">2018</option>" +
                                                  "     <option value=\"2019\">2019</option>" +
                                                  "     <option value=\"2020\">2020</option>" +
                                                  "</select><div class=\"error\" id=\"yearError\" style=\"display: inline-block\"></div><br><br>" +
                                                  "<button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Register</button>" +
                                                  "</form>";
    }
    else
    {
        document.getElementById("form").innerHTML = "<h2 class=\"form-signin-heading\">Create New Advisor</h2>" +
                                                    "<form name=\"newAdvisorRegistrationForm\" action=\"../Controller/Advisor/NewAdvisorRegistrationController.php\" onsubmit=\"return validateAdvisorRegistration()\" method=\"post\">" +
                                                    "<input name=\"firstName\" placeholder=\"First name\"><div class=\"error\" id=\"firstNameError\" style=\"display: inline-block\"></div><br><br>" +
                                                    "<input name=\"lastName\" placeholder=\"Last name\"><div class=\"error\" id=\"lastNameError\" style=\"display: inline-block\"></div><br><br>" +
                                                    "<input name=\"password\" placeholder=\"New Password\" type=\"password\"><div id=\"passwordError\" class=\"error\" style=\"display: inline-block\"></div></br></br>" +
                                                    "Department</br>" +
                                                    "<select name=\"departmentSelect\">" +
                                                    "   <option value=\"\">Department</option>" +
                                                    "   <option value=\"Computer Science\">Computer Science</option>" +
                                                    "   <option value=\"Computer Engineering\">Computer Engineering</option>" +
                                                    "   <option value=\"Electrical & Computer Engineering\">Electrical And Computer Engineering</option>" +
                                                    "</select><div class=\"error\" id=\"departmentSelectError\" style=\"display: inline-block\"></div><br><br>" +
                                                    "<button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Register</button>" +
                                                    "</form>";
    }
}