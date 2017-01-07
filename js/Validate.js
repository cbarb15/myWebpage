/**
 * Created by CharlieBarber on 3/14/16.
 */
/**
 * Created by CharlieBarber on 2/27/16.
 */

var firstName, lastName, degree, semester, year, password, department, studentId;
var expressionTest = /^[a-zA-Z]*$/;
var numbersOnlyTest = /^[0-9]*$/;
var submit;

function validateStudentRegister()
{
    firstName = document.forms["newStudentRegistrationForm"]["firstName"].value;
    lastName = document.forms["newStudentRegistrationForm"]["lastName"].value;
    degree = document.forms["newStudentRegistrationForm"]["degreeSelect"].value;
    semester = document.forms["newStudentRegistrationForm"]["semesterSelect"].value;
    year = document.forms["newStudentRegistrationForm"]["yearSelect"].value;
    password = document.forms["newStudentRegistrationForm"]["password"].value;

    submit = true;

    //Check first name is not empty
    if(firstName == null || firstName == "")
    {
        document.getElementById("firstNameError").innerHTML = "*First name can not be empty";
        submit = false;
    }
    //Check first name is only letters
    if(!(firstName == null || firstName == "") && expressionTest.test(firstName) == false)
    {
        document.getElementById("firstNameError").innerHTML = "*First name can only be letters";
        submit = false;
    }
    //Name is correct remove submit if there is one.
    if(!(firstName == null || firstName == "") && expressionTest.test(firstName) == true)
    {
        document.getElementById("firstNameError").innerHTML = "";
    }
    //Check last name is not empty
    if(lastName == null || lastName == "")
    {
        document.getElementById("lastNameError").innerHTML = "*Last name can not be empty";
        submit = false;
    }
    //Check last name is only letters
    if(!(lastName == null || lastName == "") && expressionTest.test(lastName) == false)
    {
        document.getElementById("lastNameError").innerHTML = "*Last name can only be letters";
        submit = false;
    }
    //Name is correct remove submit if there is one.
    if(!(lastName == null || lastName == "") && expressionTest.test(lastName) == true)
    {
        document.getElementById("lastNameError").innerHTML = "";
    }
    //Check to see if a degree was selected
    if(degree == null || degree == "")
    {
        document.getElementById("degreeError").innerHTML = "*Must select a degree";
        submit = false;
    }
    if(!(degree == null || degree == ""))
    {
        document.getElementById("degreeError").innerHTML = "";
    }
    //Check to see if a semester is selected
    if(semester == null || semester == "")
    {
        document.getElementById("semesterError").innerHTML = "*Must select semester admitted";
        submit = false;
    }
    if(!(semester == null || semester == ""))
    {
        document.getElementById("semesterError").innerHTML = "";
    }
    if(year == null || year == "")
    {
        document.getElementById("yearError").innerHTML = "*Must select a year";
        submit = false;
    }
    if(!(year == null || year == ""))
    {
        document.getElementById("yearError").innerHTML = "";
    }
    if (password == null || password == "")
    {
        document.getElementById("passwordError").innerHTML = "*Password can not be empty";
        submit = false;
    }
    if (!(password == null || password == ""))
    {
        document.getElementById("passwordError").innerHTML = "";
    }
    return submit;
}
function validateStudentLogin()
{
    firstName = document.forms["studentLoginForm"]["firstName"].value;
    lastName = document.forms["studentLoginForm"]["lastName"].value;
    password = document.forms["studentLoginForm"]["password"].value;

    submit = true;


    //Check first name is not empty
    if (firstName == null || firstName == "")
    {
        document.getElementById("firstNameError").innerHTML = "*First name can not be empty";
        submit = false;
    }
    //Check first name is only letters
    if (!(firstName == null || firstName == "") && expressionTest.test(firstName) == false)
    {
        document.getElementById("firstNameError").innerHTML = "*First name can only be letters";
        submit = false;
    }
    //Name is correct remove submit if there is one.
    if (!(firstName == null || firstName == "") && expressionTest.test(firstName) == true)
    {
        document.getElementById("firstNameError").innerHTML = "";
    }
    //Check last name is not empty
    if (lastName == null || lastName == "")
    {
        document.getElementById("lastNameError").innerHTML = "*Last name can not be empty";
        submit = false;
    }
    //Check last name is only letters
    if (!(lastName == null || lastName == "") && expressionTest.test(lastName) == false)
    {
        document.getElementById("lastNameError").innerHTML = "*Last name can only be letters";
        submit = false;
    }
    //Name is correct remove submit if there is one.
    if (!(lastName == null || lastName == "") && expressionTest.test(lastName) == true)
    {
        document.getElementById("lastNameError").innerHTML = "";
    }
    if (password == null || password == "")
    {
        document.getElementById("passwordError").innerHTML = "*Password can not be empty";
        submit = false;
    }
    if (!(password == null || password == ""))
    {
        document.getElementById("passwordError").innerHTML = "";
    }
    return submit;
}

function validateAdvisorRegistration()
{
    firstName = document.forms["newAdvisorRegistrationForm"]["firstName"].value;
    lastName = document.forms["newAdvisorRegistrationForm"]["lastName"].value;
    password = document.forms["newAdvisorRegistrationForm"]["password"].value;
    department = document.forms["newAdvisorRegistrationForm"]["departmentSelect"].value;

    submit = true;

    //Check first name is not empty
    if(firstName == null || firstName == "")
    {
        document.getElementById("firstNameError").innerHTML = "*First name can not be empty";
        submit = false;
    }
    //Check first name is only letters
    if(!(firstName == null || firstName == "") && expressionTest.test(firstName) == false)
    {
        document.getElementById("firstNameError").innerHTML = "*First name can only be letters";
        submit = false;
    }
    //Name is correct remove submit if there is one.
    if(!(firstName == null || firstName == "") && expressionTest.test(firstName) == true)
    {
        document.getElementById("firstNameError").innerHTML = "";
    }
    //Check last name is not empty
    if(lastName == null || lastName == "")
    {
        document.getElementById("lastNameError").innerHTML = "*Last name can not be empty";
        submit = false;
    }
    //Check last name is only letters
    if(!(lastName == null || lastName == "") && expressionTest.test(lastName) == false)
    {
        document.getElementById("lastNameError").innerHTML = "*Last name can only be letters";
        submit = false;
    }
    //Name is correct remove submit if there is one.
    if(!(lastName == null || lastName == "") && expressionTest.test(lastName) == true)
    {
        document.getElementById("lastNameError").innerHTML = "";
    }
    //Check to see if a degree was selected
    if(department == null || department == "")
    {
        document.getElementById("departmentSelectError").innerHTML = "*Must select a department";
        submit = false;
    }
    if(!(department == null || department == ""))
    {
        document.getElementById("departmentSelectError").innerHTML = "";
    }
    if (password == null || password == "")
    {
        document.getElementById("passwordError").innerHTML = "*Password can not be empty";
        submit = false;
    }
    if (!(password == null || password == ""))
    {
        document.getElementById("passwordError").innerHTML = "";
    }
    return submit;
}

function validateAdvisorEntry(isAdvisor)
{
    if(isAdvisor != "Advisor")
    {
        alert("You do not have permission to access this page.");
        return false;
    }
}

function validateStudentEntry(isStudent)
{
    if(isStudent != "Student")
    {
        alert("You do not have permission to access this page.");
        return false;
    }
}

function validateDGSEntry(isDGS)
{
    if(isDGS != "DGS")
    {
        alert("You do not have permission to access this page.");
        return false;
    }
}