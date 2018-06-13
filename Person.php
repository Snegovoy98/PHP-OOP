<?php
    class Person
    {
        private $firstName ='unnamed';
        private $lastName;

        public function getFirstName()
        {
            return $this->firstName;
        }

        public function getLastname()
        {
            return $this->lastName;
        }

        public function setFirstName($firstName)
        {
            $this->firstName = $firstName;
        }


        public function setLastName($lastName)
        {
            $this->lastName = $lastName;
        }

    }
    $person = new Person();
    $person->setFirstName('Vasya');
    $person->setLastName('Petrov');
?>