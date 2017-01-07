<?php

/**
 * Created by PhpStorm.
 * User: CharlieBarber
 * Date: 1/25/16
 * Time: 3:31 PM
 */
class Student_Database_Connector
{
    private $database;
    private $query;
    public $date;
    public $firstName;
    public $lastName;
    public $userId;
    public $studentId;
    public $semester;
    public $year;
    public $degree;
    public $facultyId;
    public $comm1;
    public $comm2;
    public $comm3;
    public $comm4;
    public $comm5;
    public $roleId;
    private $server_name  = 'localhost';
    private $db_user_name = 'root';
    private $db_password  = '';
    private $db_name      = 'Grad_Prog_V3';

    public function __construct()
    {
        try
        {
            $this->database = new PDO("mysql:host=$this->server_name; dbname=; dbname=$this->db_name; charset=utf8", $this->db_user_name, $this->db_password);
            $this->database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->database->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

        }
        catch (PDOException $e)
        {
            echo 'Connection failed: ' . $e->getMessage();
        }
    }

    public function populateInfoForTable($fName)
    {
        $this->query = $this->database->query("select User.Id as id, User.FirstName, User.LastName, Types_Semester.Name as Semester, Student.Year,
                                                Types_Degree.Name as Department from User
                                                inner join Student on Student.UserId = User.Id
                                                inner join Types_Semester on Types_Semester.Id = Student.SemesterId
                                                inner join Types_Degree on Types_Degree.Id = Student.DegreeId where User.FirstName=\"$fName\"");
        $object = $this->query->fetch(PDO::FETCH_OBJ);
        $this->userId = $object->id;
        $this->firstName = $object->FirstName;
        $this->lastName = $object->LastName;
        $this->semester = $object->Semester;
        $this->year = $object->Year;
        $this->department = $object->Department;
    }

    public function createNewUser($firstName, $lastName, $password, $degree, $semester, $year)
    {

        $this->query = $this->database->query("insert into User(Id, FirstName, LastName) Values(\"\", \"$firstName\", \"$lastName\")");

        $this->getUserId($firstName, $lastName);

        $this->createRole();

        $hash = password_hash($password, PASSWORD_DEFAULT);

        $this->database->query("insert into Password(Id, UserId, RoleId, HashWord) VALUES(\"\", \"$this->userId\", \"$this->roleId\", \"$hash\")");

        $this->getDegreeId($degree);

        $this->getSemesterId($semester);

        //Insert all the data into the student table.
        $this->query = $this->database->query("insert into Student(Id, UserId, DegreeId, Year, SemesterId) Value(\"\",\"$this->userId\",\"$this->degree\", \"$year\", \"$this->semester\")");
    }

    public function createRole()
    {
        $this->query = $this->database->query("insert into Role(Id, UserId, Role) VALUES(\"\", \"$this->userId\", \"Student\")");

        $this->query = $this->database->query("select Id from Role where UserId=\"$this->userId\"");
        $object = $this->query->fetch(PDO::FETCH_OBJ);
        $this->roleId = $object->Id;
    }

    public function getUserId($firstName, $lastName)
    {
        $this->query = $this->database->query("select Id from User where FirstName=\"$firstName\" and LastName=\"$lastName\"");
        $object = $this->query->fetch(PDO::FETCH_OBJ);
        $this->userId = $object->Id;
    }

    public function getDegreeId($degree)
    {
        $this->query = $this->database->query("select Id from Types_Degree where Name=\"$degree\"");
        $object = $this->query->fetch(PDO::FETCH_OBJ);
        $this->degree = $object->Id;
    }

    public function getSemesterId($semester)
    {
        $this->query = $this->database->query("select Id from Types_Semester where Name=\"$semester\"");
        $object = $this->query->fetch(PDO::FETCH_OBJ);
        $this->semester = $object->Id;
    }

    public function updateAdvisorInfo($firstName, $lastName, $studentFirstName, $studentLastName)
    {
        $this->getFacultyId($firstName, $lastName);
        $this->getStudentId($studentFirstName, $studentLastName);
        $this->query = $this->database->query("insert into Advisor(Id, StudentId, FacultyId) VALUES(\"\", \"$this->studentId\", \"$this->facultyId\")");

    }

    public function getFacultyId($firstName, $lastName)
    {
        $this->query = $this->database->query("select Faculty.Id as Id from Faculty
inner join User where User.Id = Faculty.UserId and User.FirstName=\"$firstName\" and User.LastName=\"$lastName\"");
        $object = $this->query->fetch(PDO::FETCH_OBJ);
        $this->facultyId = $object->Id;
    }

    public function getStudentId($studentFirstName, $studentLastName)
    {
        $this->query = $this->database->query("select Student.Id as Id from Student inner join User
where User.Id = Student.UserId and User.FirstName=\"$studentFirstName\" and User.LastName=\"$studentLastName\"");
        $object = $this->query->fetch(PDO::FETCH_OBJ);
        $this->studentId = $object->Id;
    }

    public function getRole($firstName, $lastName)
    {
        $this->getUserId($firstName, $lastName);

        $this->query = $this->database->query("select Role from Role where UserId=\"$this->userId\"");
        $object = $this->query->fetch(PDO::FETCH_OBJ);
        $role = $object->Role;

        return $role;
    }

    public function verifyPassword($firstName, $lastName, $passwordToTest)
    {
        $this->getUserId($firstName, $lastName);

        $this->query = $this->database->query("select HashWord from Password where UserId=\"$this->userId\"");
        $object = $this->query->fetch(PDO::FETCH_OBJ);
        $password = $object->HashWord;

        $passwordMatched = password_verify($passwordToTest, $password);

        return $passwordMatched;
    }

    public function createForm()
    {

    }

    public function getStudentForms()
    {

    }
}
?>