<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class CreateEmployeeController extends Controller
{
    /**
     * Show the form to create a new employee.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        // Return the view to create an employee
        return view('admin.employee.create');
    }

    /**
     * Store a newly created employee in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'last_name' => 'required|string|max:255',
            'first_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'email' => 'required|email|unique:employees,Email',
            'work_position' => 'required|string|max:255',
            'location_code' => 'required|string|max:50',
            'dept_code' => 'required|string|max:50',
            'phone_no' => 'nullable|string|max:50',
            'birthday' => 'nullable|date',
            'sex' => 'required|string|max:6',
            'civil_status' => 'nullable|string|max:50',
            'employee_type' => 'nullable|string|max:50',
        ]);

        // Create a new employee
        Employee::create([
            'LastName' => $request->last_name,
            'FirstName' => $request->first_name,
            'MiddleName' => $request->middle_name,
            'IsActive' => $request->is_active ?? 1, // Default to active if not provided
            'WorkPosition' => $request->work_position,
            'LocationCode' => $request->location_code,
            'DeptCode' => $request->dept_code,
            'Address' => $request->address,
            'PhoneNo' => $request->phone_no,
            'Email' => $request->email,
            'Birthday' => $request->birthday,
            'Sex' => $request->sex,
            'CivilStatus' => $request->civil_status,
            'EmployeeType' => $request->employee_type,
        ]);

        // Redirect with success message
        return redirect()->route('employee.create')->with('success', 'Employee created successfully.');
    }
}
