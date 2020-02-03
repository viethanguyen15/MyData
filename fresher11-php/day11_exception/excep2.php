<?php
    class CustomException extends Exception {
        public function errorMessage() {
          //error message
          $errorMsg = 'Error on line '.$this->getLine().' in '.$this->getFile()
              .': <b>'.$this->getMessage().'</b> is not a valid E-Mail address';
          return $errorMsg;
        }
      }
       
      $email = "someone@example...com";
       
      try {
        //check email hợp lệ
        if(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) {
          //throw exception nếu email không hợp lệ
          throw new customException($email);
        }
      }
       
      catch (customException $e) {
        //hiển thị message
        echo $e->errorMessage();
      }