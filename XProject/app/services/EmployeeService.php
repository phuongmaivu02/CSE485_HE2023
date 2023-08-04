<?php
require_once APP_ROOT.'/app/models/Employee.php';
class EmployeeService{
    public function getAllEmployees(){
        // b1:ket noi db
        try{
            $conn = new PDO('mysql:host=localhost; dbname=XProject', 'root','');

            //b2: truy van du lieu
            $sql = "SELECT *FROM employees ORDER BY id DESC";
            $stmt = $conn->query($sql);

            //b3:xu ly ket qua tra ve

            $employees =[];
            while($row = $stmt->fetch()){
                $employee = new Employee($row['id'], $row['fullname'], $row['address'], $row['salary']);
                $employees[] = $employee;
            }
            return $employees;

        }
        catch(PDOException $e){
         
            return $employees = [];
        }
    }
}