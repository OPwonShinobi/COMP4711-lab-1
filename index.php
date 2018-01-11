<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include("./Student.php");
        
        //create empty array of students
        $students = array();
        
        //create the first Student, John Doe, and add him to array
        $first = new Student();
        $first->surname = "Doe";
        $first->first_name = "John";
        $first->add_email('home','john@doe.com');
        $first->add_email('work','jdoe@mcdonalds.com');
        $first->add_grade(65);
        $first->add_grade(75);
        $first->add_grade(55);
        $students['j123'] = $first;
        
        //create a second Student, Albert Einstein, and add him to array
        $second = new Student();
        $second->surname = "Einstein";
        $second->first_name = "Albert";
        $second->add_email('home','albert@braniacs.com');
        $second->add_email('work1','a_einstein@bcit.ca');
        $second->add_email('work2','albert@physics.mit.edu');
        $second->add_grade(95);
        $second->add_grade(80);
        $second->add_grade(50);
        $students['a456'] = $second;
        
        //create the third student, me, and add me to array
        $third = new Student();
        $third->surname = "Xia";
        $third->first_name = "Alex";
        $third->add_email('home','jxia11@bcit.ca');
        $third->add_grade(100);
        $students['a789'] = $third;
        
        //sort the students by name by alphabetical order
        ksort($students);
        
        //print out the records of each student
        foreach($students as $student) {
            echo $student->to_string();
        }
        ?>
    </body>
</html>
