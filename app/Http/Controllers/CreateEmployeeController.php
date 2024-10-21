<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employees;

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
        $validated = $request->validate([
            'employee_id' => 'required|unique:employees,EmployeeID|max:10',
            'last_name' => 'required|string|max:255',
            'first_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'is_active' => 'nullable|boolean',
            'work_position' => 'required|string|max:255',
            'location_code' => 'required|string|max:50',
            'dept_code' => 'required|string|max:50',
            'address' => 'required|string|max:255',
            'address2' => 'nullable|string|max:255',
            'phone_no' => 'nullable|string|max:50',
            'email' => 'nullable|email|max:255|unique:employees,Email',
            'contact_person' => 'nullable|string|max:255',
            'contact_address' => 'nullable|string|max:255',
            'contact_no' => 'nullable|string|max:50',
            'sex' => 'required|string|max:1',
            'birthday' => 'required|date',
            'civil_status' => 'required|string|max:50',
            'blood_type' => 'nullable|string|max:5',
            'date_of_hire' => 'required|date',
            'employee_type' => 'required|string|max:50',
            'rate' => 'required|numeric',
            'rate_unit' => 'required|string|max:50',
            'pay_type' => 'required|string|max:50',
            'no_of_days_in_a_month' => 'required|integer',
            'no_of_days_in_a_week' => 'required|integer',
            'no_of_work_hours_in_a_day' => 'required|integer',
            'no_of_work_days' => 'required|integer',
        ]);

        // Create a new employee record
        Employees::create([
            'EmployeeID' => $request->employee_id,
            'LastName' => $request->last_name,
            'FirstName' => $request->first_name,
            'MiddleName' => $request->middle_name,
            'IsActive' => $request->is_active ?? 1, // Default to active if not provided
            'WorkPosition' => $request->work_position,
            'LocationCode' => $request->location_code,
            'DeptCode' => $request->dept_code,
            'Address' => $request->address,
            'Address2' => $request->address2,
            'PhoneNo' => $request->phone_no,
            'Email' => $request->email,
            'ContactPerson' => $request->contact_person,
            'ContactAddress' => $request->contact_address,
            'ContactNo' => $request->contact_no,
            'Sex' => $request->sex,
            'Birthday' => $request->birthday,
            'CivilStatus' => $request->civil_status,
            'BloodType' => $request->blood_type,
            'DateOfHire' => $request->date_of_hire,
            'EmployeeType' => $request->employee_type,
            'Rate' => $request->rate,
            'RateUnit' => $request->rate_unit,
            'PayType' => $request->pay_type,
            'NoOfDaysInAMonth' => $request->no_of_days_in_a_month,
            'NoOfDaysInAWeek' => $request->no_of_days_in_a_week,
            'NoOfWorkHoursInADay' => $request->no_of_work_hours_in_a_day,
            'NoOfWorkDays' => $request->no_of_work_days,
        ]);

        // Redirect with success message
        return redirect()->route('employee.create')->with('success', 'Employee created successfully.');
    }
}
