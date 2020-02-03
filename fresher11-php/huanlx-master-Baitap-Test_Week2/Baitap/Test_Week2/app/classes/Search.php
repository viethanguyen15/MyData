<?php

namespace App\Classes;

class Search
{
    public function searchByName(string $name, array $data)
    {

            try {
                $arrayResult=[];
                foreach($data as $values){

                        if ($values['name'] == $name) {
                            $arrayResult[] = $values;
                        }
                    }
                return $arrayResult;           
            } catch (Exception $e) {
                echo $e->getMessage();
            }
    }
}