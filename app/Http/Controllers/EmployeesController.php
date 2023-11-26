<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\EmployeesExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\EmployeesByAgeExport;

class EmployeesController extends Controller
{
    public function index(){
        return view('index');
     }

     // CSV Export
     public function exportCSV()
     {
        $file_name = 'employees_'.date('Y_m_d_H_i_s').'.csv';
        return Excel::download(new EmployeesExport, $file_name);
     }

     // Excel Export
     public function exportExcel()
     {
        $file_name = 'employees_'.date('Y_m_d_H_i_s').'.xlsx';
        return Excel::download(new EmployeesExport, $file_name);
     }

     // Conditional Export (csv)
     public function exportByAgeCSV(Request $request)
     {
        $age = $request->age;
        $file_name = 'employees_'.date('Y_m_d_H_i_s').'.csv';
        return Excel::download(new EmployeesByAgeExport($age), $file_name);
     }
}
