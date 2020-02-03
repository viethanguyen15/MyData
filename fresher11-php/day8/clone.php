<?php
    namespace change;
    class ChangeName
    {
        private $name;

        public function setName($name)
        {
            $this->name = $name;

        }

        public function getName()
        {
            return $this->name;
        }
    }

    $firstNameObj = new ChangeName();
    $firstNameObj->setName("nguyễn việt hà");
    echo $firstNameObj->getName();
    echo "<br/>";
    $secondNameObj = clone $firstNameObj;
    //echo $secondNameObj->getName();
    $secondNameObj->setName("nguyễn văn A");
    echo $secondNameObj->getName();
    echo "<br/>";
    echo $firstNameObj->getName(); 