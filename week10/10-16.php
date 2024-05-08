<?php
    class People {
        var $name;
        var $age;

        function __construct($pName, $pAge) {
            $this->name = $pName;
            $this->age = $pAge;
        } 

        function printPeople() {
            print "Name: " . $this->name . "<br />";
            print "Age: " . $this->age . "<br />";
        }
    }

    class Professor extends People {
        var $office_no;

        function __construct($name, $age, $office_no) {
            parent::__construct($name, $age);
            $this->office_no = $office_no;
        }

        function printProfessor() {
            $this->printPeople();
            print "office_no: " . $this->office_no . "<br />";
        }
    }

    $aprof = new Professor("Ball", 20, 401);
    $aprof->printProfessor();
?>