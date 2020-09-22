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
        include('Student.php');
        $students = array();  
        
        $first = new Student();
        $first->surname = "Doe";
        $first->first_name = "John"; $first->add_email('home','john@doe.com'); 
        $first->add_email('work','jdoe@mcdonalds.com'); 
        $first->add_grade(65);
        $first->add_grade(75);
        $first->add_grade(55);
        $students['j123'] = $first;
        
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
        
        $third = new Student();
        $third->surname = "Xueting";
        $third->first_name = "Jiang"; 
        $third->add_email('home','75384448@qq.com'); 
        $third->add_email('work1','Xueting Jiang@mcdonalds.com'); 
        $third->add_grade(80);
        $third->add_grade(70);
        $third->add_grade(60);
        $students['A01159912'] = $third;
        
        $fourth = new Student();
        $fourth->surname = "huashi";
        $fourth->first_name = "ling"; 
        $fourth->add_email('home','12456767@qq.com'); 
        $fourth->add_email('work1','huashiling@mcdonalds.com'); 
        $fourth->add_grade(70);
        $fourth->add_grade(80);
        $fourth->add_grade(50);
        $students['a6782'] = $fourth;
        
        ksort($students);
        foreach($students as $student)
        echo $student->toString();
        ?>

        </table>
    </body>
</html>
