<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Inheritage Family Tree</title>
</head>
<pre>
<body>
    <?php
    require_once 'Visitor_Subclass_Implementation.php';
    require_once 'Student_Subclass_Difference_Implemantation.php';
    require_once 'Scholarship_Subclass_Extended_from_Student.php';
    //$v1 = new Visitor();
    //$v1->setName("Andre");
    //print_r($v1);
    $s1 = new Student();
    $s1->setName("Andre");
    $s1->setJoin("1212");
    $s1->setAge(36);
    $s1->setGender("M");
    $s1->setCourse("OOP PHP");
    $s1->montlyPay();
    print_r($s1);

    $sc = new ScholarshipStudent();
    $sc->setName("Lucas");
    $sc->setJoin(1515);
    $sc->setScholarship(12.5);
    $sc->setCourse("OOP PHP");
    $sc->setAge(9);
    $sc->montlyPay();
    print_r($sc);
    ?>
</body>
</pre>

</html>