<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeTable extends Migration
{
    public function up()
    {
        Schema::create('employee', function (Blueprint $table) {
            $table->string('EmployeeID', 50)->primary();
            $table->string('LastName');
            $table->string('FirstName');
            $table->string('MiddleName');
            $table->boolean('IsActive');
            $table->string('WorkPosition');
            $table->string('LocationCode', 50);
            $table->string('DeptCode', 50);
            $table->string('Address');
            $table->string('Address2')->nullable();
            $table->string('PhoneNo', 50);
            $table->string('Email')->nullable();
            $table->string('ContactPerson')->nullable();
            $table->string('ContactAddress')->nullable();
            $table->string('ContactAddress2')->nullable();
            $table->string('ContactNo', 50)->nullable();
            $table->char('Sex', 1);
            $table->date('Birthday');
            $table->string('CivilStatus', 50);
            $table->string('BloodType', 5);
            $table->date('DateOfHire');
            $table->string('EmployeeType', 50);
            $table->boolean('TimingFlag');
            $table->decimal('Rate', 10, 2);
            $table->string('RateUnit', 50);
            $table->string('BankAccntNo', 50)->nullable();
            $table->string('Bank', 50)->nullable();
            $table->string('BankTransmittal', 50)->nullable();
            $table->binary('Picture')->nullable();
            $table->string('EmployeeCategory', 50);
            $table->boolean('EnableITW');
            $table->string('TINAccntNo', 50);
            $table->string('ExemptionCode', 50);
            $table->integer('NoOfDependents');
            $table->boolean('EnableSSS');
            $table->string('SSSAccntNo', 50)->nullable();
            $table->boolean('EnablePhilHealth');
            $table->string('PhilHealthAccntNo', 50)->nullable();
            $table->boolean('EnableHDMF');
            $table->string('HMDFAccntNo', 50)->nullable();
            $table->string('PayType', 50);
            $table->integer('NoOfDaysInAMonth');
            $table->integer('NoOfDaysInAWeek');
            $table->integer('NoOfWorkHoursInADay');
            $table->integer('NoOfWorkDays');
        });
    }

    public function down()
    {
        Schema::dropIfExists('employee');
    }
}
