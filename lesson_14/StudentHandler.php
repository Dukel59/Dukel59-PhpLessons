<?php

namespace lesson_14;

use PDO;

class StudentHandler
{
    private PDO $connection;

    public function __construct()
    {
        $this->connection = new PDO("mysql:host=localhost;dbname=schoolDB", "root", "");
    }

    public function getStudent(int $id): Student
    {
        $query = $this->connection->prepare("SELECT * FROM students WHERE id = :id");
        $query->execute([
            ":id" => $id
        ]);
        $result = $query->fetch();
        return new Student($result["surname"], $result["name"], $result["email"], $result["phone"], $result["country"]);
    }
     public function addStudent(string $surname, string $name, string $email, string $phone, string $country){
        $query = "INSERT INTO `students`(`surname`, `name`, `email`, `phone`, `country`) VALUES (:surname, :name, :email, :phone, :country)";
        $statement = $this->connection->prepare($query);
        $statement->execute([
           ":surname" => $surname,
           ":name" => $name,
           ":email" => $email,
           ":phone" => $phone,
            ":country" => $country
        ]);
        return new Student($surname, $name, $email, $phone, $country);
     }
     public function updateStudent(int $id, string $surname = null, string $name = null, string $email = null, string $phone = null, string $country = null){
        $student = $this->getStudent($id);
        $query = "UPDATE students SET surname = :surname, name = :name, email = :email, phone = :phone, country = :country WHERE id = :id";
        $statement = $this->connection->prepare($query);
        $statement->execute([
         ":surname" => $surname ?: $student->getSurname(),
            ":name" => $name ?: $student->getName(),
            ":email" => $email ?: $student->getEmail(),
            ":phone" => $phone ?: $student->getPhone(),
            ":country" => $country ?: $student->getCountry(),
            ":id" => $id
        ]);
        return $this->getStudent($id);
     }
     public function deleteStudent(int $id){
        $query = "DELETE FROM students WHERE id = :id";
        $statement = $this->connection->prepare($query);
        $statement->execute([
            ":id" => $id
        ]);
     }
     public function getAllStudents(){
        $students = [];
        $query = "SELECT * FROM students";
        $statement = $this->connection->query($query)->fetchAll();
        foreach ($statement as $student){
            $students[] = new Student($student['surname'], $student['name'], $student['email'], $student['phone'], $student['country']);
        }
        return $students;
     }
}