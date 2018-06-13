<?php
    class Person
    {
        public static $counter=0;
        private $firstName ='unnamed';
        private $lastName;
        public function __construct($firstName,$lastName)
        {
            $this->firstName = $firstName;
            $this->lastName = $lastName;
            self::$counter++;
        }

        public function getFirstName()
        {
            return $this->firstName;
        }

        public function getLastName()
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


        public static function getData()
        {

        }

        public function __destruct()
        {
            echo 'Person objects was created '.self::$counter.PHP_EOL;
        }

    }
    $person = new Person('Vasya','Petrov');
    $person->setFirstName('Vasya');
    $person->setLastName('Petrov');
    $person2 = new Person('Nastya','Rezova');
?>