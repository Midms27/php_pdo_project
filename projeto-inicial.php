<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$student = new Student(
    null,
    'Miguel Donizete',
    new \DateTimeImmutable('27-01-2003');
);

echo $student->age();
