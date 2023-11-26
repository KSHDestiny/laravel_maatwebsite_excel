<?php

namespace App\Exports;

use App\Employee;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class EmployeesExport implements FromCollection, WithHeadings
{

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        ## 1. Export all data
        // return Employees::all();

        ## 2. Export specific columns
        return Employee::select('id','username','name')->get();

    }

    public function headings(): array
    {
        return [
          '#',
          'Username',
          'Name'
        ];
    }
}
