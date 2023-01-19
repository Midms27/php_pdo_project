<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$pdo = \Alura\Pdo\Infrastructure\Persistence\ConnectionCreator::createConnection();

$student = new Student(null, 'Miguel Donizete', new DateTimeImmutable('2003-01-27'));
$sqlInsert = "INSERT INTO students (name, birth_date) VALUES (?,?);";
$statement = $pdo->prepare($sqlInsert);
$statement ->bindValue('ss', $student->name(), $student->birthDate()->format('Y-m-d'));
var_dump($statement->execute());
