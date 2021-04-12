<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Exports\EmployeeExport;
use Excel;

class EmployeeController extends Controller
{
    public function AddEmployee()
    {
        $emp = [
            ["name"=> "Alya", "email" => "alya@gmail.com", "phone" => "0987654", "salary" => "10000", "dept" => "Accouting"],
            ["name"=> "Jen", "email" => "jen@gmail.com", "phone" => "0987654", "salary" => "40000", "dept" => "Marketing"],
            ["name"=> "Jeff", "email" => "jeff@gmail.com", "phone" => "0987654", "salary" => "20000", "dept" => "Accouting"],
            ["name"=> "Raha", "email" => "raha@gmail.com", "phone" => "0987654", "salary" => "15000", "dept" => "Marketing"],
            ["name"=> "Mira", "email" => "mira@gmail.com", "phone" => "0987654", "salary" => "30000", "dept" => "Accouting"]
        ];
        Employee::insert($emp);
        return "Records are inserted!";
    }

    public function exportIntoExcel()
    {
        return Excel::download(new EmployeeExport, 'employeelist.xlsx');

    }

    public function exportIntoCSV()
    {
        return Excel::download(new EmployeeExport, 'employeelist.csv');
    }
}
