<?php

class StudentsList
{
    private $students = array();
    private static $studentsCount = 0;

    public function add(Student $student)
    {
        $this->students[self::$studentsCount++] = clone $student;
    }

    public function count(): int
    {
        return self::$studentsCount;
    }

    public function get($n): Student
    {
        return (($n >= 0 and $n < self::$studentsCount) ? $this->students[$n] : $this->students[self::$studentsCount - 1] );
    }

    public function store(string $fileName)
    {
        $Fout = fopen($fileName, 'a');
        foreach ($this->students as $Student)
            fwrite($Fout, $Student->ID . ' ' . $Student->getName() . ' ' . $Student->getLastName() . ' ' . $Student->getFaculty() . ' ' . $Student->getCourse() . ' ' . $Student->getGroup() . "\r\n");
        fclose($Fout);
    }

    public function load(string $fileName)
    {
        if (!file_exists($fileName))
        {
            return "Файл " . $fileName . " не существует!";
        }

        $this->students = unserialize(file_get_contents($fileName));
    }
}
