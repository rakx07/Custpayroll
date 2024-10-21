<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    use HasFactory;

    // Specify the table name if it's not the plural of the model name
    protected $table = 'Employees';  // Assuming the table name is 'Employee'
    
    // Set the primary key if it's not 'id'
    protected $primaryKey = 'EmployeeID';

    // Allow mass assignment on these fields
    protected $fillable = [
        'EmployeeID',
        'LastName',
        'FirstName',
        'MiddleName',
        'IsActive',
        'WorkPosition',
        'LocationCode',
        'DeptCode',
        'Address',
        'Address2',
        'PhoneNo',
        'Email',
        'ContactPerson',
        'ContactAddress',
        'ContactAddress2',
        'ContactNo',
        'Sex',
        'Birthday',
        'CivilStatus',
        'BloodType',
        'DateOfHire',
        'EmployeeType',
        'TimingFlag',
        'Rate',
        'RateUnit',
        'BankAccntNo',
        'Bank',
        'BankTransmittal',
        'Picture',
        'EmployeeCategory',
        'EnableITW',
        'TINAccntNo',
        'ExemptionCode',
        'NoOfDependents',
        'EnableSSS',
        'SSSAccntNo',
        'EnablePhilHealth',
        'PhilHealthAccntNo',
        'EnableHDMF',
        'HMDFAccntNo',
        'PayType',
        'NoOfDaysInAMonth',
        'NoOfDaysInAWeek',
        'NoOfWorkHoursInADay',
        'NoOfWorkDays'
    ];
    

    // Disable timestamps if they are not used in your table
    public $timestamps = false;
}
