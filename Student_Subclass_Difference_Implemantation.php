<?php
require_once 'People_Abstract_Class.php';
class Student extends People // If FINAL is included here the class cannot be heritage to anther class.
{
    private $join;
    private $course;

    public function montlyPay()
    {
        echo "<p>The monthly payment to " . $this->getName() . " is paid!</p>";
    }
    public function getJoin()
    {
        return $this->join;
    }
    public function setJoin($jo)
    {
        $this->join = $jo;
    }
    public function getCourse()
    {
        return $this->course;
    }
    public function setCourse($cou)
    {
        $this->course = $cou;
    }
}
