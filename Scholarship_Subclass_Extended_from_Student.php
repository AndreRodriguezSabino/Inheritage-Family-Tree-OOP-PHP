<?php
require_once 'Student_Subclass_Difference_Implemantation.php';
class ScholarshipStudent extends Student
{
    private $scholarship;

    public function montlyPay()
    {
        echo "<p>" . $this->getName() . " is a scholarship student! Then this student pay it with discount!</p>";
    }
    public function renewScholarship()
    {
        echo "<p>Scholarship scheme renewed.</p>";
    }
    public function getScholarship()
    {
        return $this->scholarship;
    }
    public function setScholarship($scholarship)
    {
        $this->scholarship = $scholarship;
    }
}
