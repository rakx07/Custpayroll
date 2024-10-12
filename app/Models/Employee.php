<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    // Specify the table name if it's not the plural of the model name
    protected $table = 'Employee';  // Assuming the table name is 'Employee'
    
    // Set the primary key if it's not 'id'
    protected $primaryKey = 'EmployeeID';

    // Allow mass assignment on these fields
    protected $fillable = [
        'LastName',
        'FirstName',
        'MiddleName',
        'IsActive',
        'WorkPosition',
        'LocationCode',
        'DeptCode',
        'Address',
        'PhoneNo',
        'Email',
        'Birthday',
        'Sex',
        'CivilStatus',
        'EmployeeType',
    ];

    // Disable timestamps if they are not used in your table
    public $timestamps = false;
}
