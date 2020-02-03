<?php
/*
    class Animal
    {
        private $eyes;
        private $name;

       public function setEye($eyes)
       {
           $this->eyes = $eyes;
       }

       public function setName($name)
       {
           $this->name = $name;
       }

       public function getEye()
       {
           return $this->eyes;
       }

       public function getName()
       {
           return $this->name;
       }

    }

    $cat = new Animal();
    $cat->setEye('2');
    $cat->setName('dog');
    echo $cat->getEye();
    echo $cat->getName();
*/

   /* class Bird 
    {
        public function fly()
        {
            return "Fly";
        }
    }
    class EagleBird extends Bird
    {
        public function fly()
        {
            return "Eagle Fly";
        }
    }
    class SparrowBird extends Bird
    {
        public function fly()
        {
            return "Sparrow Fly";
        }
    }
    // class PenguinBird extends Bird
    // {
    //     public function fly()
    //     {
    //         throw new NoFlyException();
    //     }
    // }

    $birds = [new Bird(), new EagleBird(), new SparrowBird()];
    foreach ($birds as $bird) {
        echo $bird->fly();
    }
    */
//     $someJSON = '[{"name":"Jonathan Suh","gender":"male"},{"name":"William Philbin","gender":"male"},{"name":"Allison McKinnery","gender":"female"}]';

//   // Convert JSON string to Array
//   $someArray = json_decode($someJSON, true);
//   echo "<pre>";
//   print_r($someArray);
//   echo "</pre>";
//   echo "<br/>";        // Dump all data of the Array
//   echo $someArray[0]["name"]. "<br/>"; // Access Array data

//   // Convert JSON string to Object
//   $someObject = json_decode($someJSON);
//   echo "<pre>";
//   print_r($someObject);   
//   echo "</pre>";   // Dump all data of the Object
//   echo $someObject[0]->name; // Access Object data
// $pattern = '/^[0-9]+$/';
// $subject = '0979306603';
// if (preg_match($pattern, $subject, $matches)){
//     //echo 'Đây là một dãy số';
//     print_r($matches);
// }

$output = shell_exec('ls'); 
  
// Display the list of all file 
// and directory 
echo "<pre>$output</pre>"; 
?> 