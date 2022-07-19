<?php
abstract class People
{
        private $name;
        private $age;
        private $gender;

        public final function birthday() // Using FINAL here means the method cannot be overrided.
        {
                $this->age++;
        }

        public function getName()
        {
                return $this->name;
        }
        public function setName($na)
        {
                $this->name = $na;
        }
        public function getAge()
        {
                return $this->age;
        }
        public function setAge($ag)
        {
                $this->age = $ag;
        }
        public function getGender()
        {
                return $this->gender;
        }
        public function setGender($ge)
        {
                $this->gender = $ge;
        }
}
