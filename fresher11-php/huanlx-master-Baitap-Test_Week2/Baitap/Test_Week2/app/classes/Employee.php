<?php

namespace App\Classes;

class Employee
{

    public function addEmployee(array $data) : array
    {
        $newImfomationEmployee = [
           "id" => $data['id'],
            "name" => $data['name'],
            "birth" => $data['birth'],
            "adress" => $data['adress'],
            "salary" => $data['salary'],
        ];

        return $newImfomationEmployee;
    }

    public function sortBySalary(array $data) :array
    {
        try {
            foreach($data as $key => $value)
            {
                $arraySalary[] = $value['salary'];
                $arrayFullName[] = $value['name'];
            }

            array_multisort($arraySalary, $arrayFullName, SORT_ASC, $data);
            
            return $data;
        } catch (Exception $e) {
            echo "Chưa có nhân viên nào";
        }
    }

}