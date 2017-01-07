<?php

/**
 * Created by PhpStorm.
 * User: CharlieBarber
 * Date: 2/7/16
 * Time: 10:01 PM
 */
class DatabaseConnector
{
    private $database;
    private $query;
    public $student1;
    public $student2;
    public $student3;
    public $student4;
    public $student5;
    public $student6;
    public $student7;
    public $student8;
    public $student9;
    public $student10;
    public $student11;
    public $student12;
    public $student13;
    public $student14;
    public $student15;
    public $department;
    public $firstName;
    public $lastName;
    public $userId;
    public $facultyId;
    public $roleId;
    public $departmentId;
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

    public function getAdvisorStudents($advisor)
    {

        $arrayOfStudents = array();
        $this->query = $this->database->query('select User.FirstName, User.LastName from User inner join Advisor on User.Id=Advisor.StudenId and Advisor.FacultyId =' . $advisor);
        while($object = $this->query->fetch(PDO::FETCH_OBJ))
        {
            array_push($arrayOfStudents, $object);
        }
        return $arrayOfStudents;
    }

    public function getAllStudents()
    {
        $arrayOfStudents = array();
        $this->query = $this->database->query('select User.FirstName, User.LastName from User inner join Student on User.Id = Student.UserId');
        while($object = $this->query->fetch(PDO::FETCH_OBJ))
        {
            array_push($arrayOfStudents, $object);
        }
        return $arrayOfStudents;
    }

    public function createNewUser($firstName, $lastName, $password, $department)
    {

        $this->query = $this->database->query("insert into User(Id, FirstName, LastName) Values(\"\", \"$firstName\", \"$lastName\")");

        $this->getUserId($firstName, $lastName);

        $this->createRole();

        $hash = password_hash($password, PASSWORD_DEFAULT);

        $this->database->query("insert into Password(Id, UserId, RoleId, HashWord) VALUES(\"\", \"$this->userId\", \"$this->roleId\", \"$hash\")");

        $this->getDepartmentId($department);

        //Insert all the data into the Faculty table.
        $this->query = $this->database->query("insert into Faculty(Id, UserId, DepartmentId) Value(\"\",\"$this->userId\",\"$this->departmentId\")");
    }

    public function getFacultyId($firstName, $lastName)
    {
        $this->query = $this->database->query("select Faculty.Id as Id from Faculty
inner join User where User.Id = Faculty.UserId and User.FirstName=\"$firstName\" and User.LastName=\"$lastName\"");
        $object = $this->query->fetch(PDO::FETCH_OBJ);
        $this->facultyId = $object->Id;
    }
    public function getUserId($firstName, $lastName)
    {
        $this->query = $this->database->query("select Id from User where FirstName=\"$firstName\" and LastName=\"$lastName\"");
        $object = $this->query->fetch(PDO::FETCH_OBJ);
        $this->userId = $object->Id;
    }

    public function getDepartmentId($department)
    {
        $this->query = $this->database->query("select Department.Id as Id from Department where Name=\"$department\"");
        $object = $this->query->fetch(PDO::FETCH_OBJ);
        $this->departmentId = $object->Id;
    }

    public function createRole()
    {
        $this->query = $this->database->query("insert into Role(Id, UserId, Role) VALUES(\"\", \"$this->userId\", \"Advisor\")");

        $this->query = $this->database->query("select Id from Role where UserId=\"$this->userId\"");
        $object = $this->query->fetch(PDO::FETCH_OBJ);
        $this->roleId = $object->Id;
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
}
