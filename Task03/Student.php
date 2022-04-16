<?php


class Student {
    public $ID;
    private static $Id = 1;
    private $FirstName;
    private $LastName;
    private $Faculty;
    private $Course;
    private $Group;

    function __construct($FirstName = '', $LastName = '', $Faculty = '', $Course = '', $Group = '')
    {
        $this->ID = self::$Id++;
        $this->setName($FirstName)->setLastName($LastName)->setFaculty($Faculty)->setCourse($Course)->setGroup($Group);
    }

    public function setId($Id)
    {
        self::$Id = $Id;
        return $this;
    }
    
    public function getId()
    {
        return self::$Id;
    }

    public function setName($FirstName)
    {
        $this->FirstName = $FirstName;
        return $this;
    }

    public function getName()
    {
        return $this->FirstName;
    }

    public function setLastName($LastName)
    {
        $this->LastName = $LastName;
        return $this;
    }

    public function getLastName()
    {
        return $this->LastName;
    }

    public function setFaculty($Faculty)
    {
        $this->Faculty = $Faculty;
        return $this;
    }

    public function getFaculty()
    {
        return $this->Faculty;
    }

    public function setCourse($Course)
    {
        $this->Course = $Course;
        return $this;
    }
    
    public function getCourse()
    {
        return $this->Course;
    }

    public function setGroup($Group)
    {
        $this->Group = $Group;
        return $this;
    }

    public function getGroup()
    {
        return $this->Group;
    }

    public function __toString()
    {
        return 'Id: ' . $this->ID . PHP_EOL . 'Фамилия: ' . $this->getLastName() . PHP_EOL . 'Имя: ' . $this->getName() . PHP_EOL . 'Факультет: ' . $this->getFaculty() . PHP_EOL . 'Группа: ' . $this->getCourse() . '0' . $this->getGroup() . PHP_EOL;
    }
}