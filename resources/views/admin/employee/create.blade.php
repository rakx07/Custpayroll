@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Create Employee</h1>

    <!-- Show success message if employee is created -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Employee creation form -->
    <form action="{{ route('employee.store') }}" method="POST">
        @csrf

        <div class="row">
            <div class="col-md-6">
                <div class="form-group mb-2">
                    <label for="last_name">Last Name</label>
                    <input type="text" class="form-control" id="last_name" name="last_name" value="{{ old('last_name') }}" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group mb-2">
                    <label for="first_name">First Name</label>
                    <input type="text" class="form-control" id="first_name" name="first_name" value="{{ old('first_name') }}" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group mb-2">
                    <label for="middle_name">Middle Name</label>
                    <input type="text" class="form-control" id="middle_name" name="middle_name" value="{{ old('middle_name') }}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group mb-2">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group mb-2">
                    <label for="work_position">Work Position</label>
                    <input type="text" class="form-control" id="work_position" name="work_position" value="{{ old('work_position') }}" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group mb-2">
                    <label for="location_code">Location Code</label>
                    <input type="text" class="form-control" id="location_code" name="location_code" value="{{ old('location_code') }}" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group mb-2">
                    <label for="dept_code">Department Code</label>
                    <input type="text" class="form-control" id="dept_code" name="dept_code" value="{{ old('dept_code') }}" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group mb-2">
                    <label for="phone_no">Phone No</label>
                    <input type="text" class="form-control" id="phone_no" name="phone_no" value="{{ old('phone_no') }}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group mb-2">
                    <label for="birthday">Birthday</label>
                    <input type="date" class="form-control" id="birthday" name="birthday" value="{{ old('birthday') }}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group mb-2">
                    <label for="sex">Sex</label>
                    <select class="form-control" id="sex" name="sex">
                        <option value="Male" {{ old('sex') == 'Male' ? 'selected' : '' }}>Male</option>
                        <option value="Female" {{ old('sex') == 'Female' ? 'selected' : '' }}>Female</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group mb-2">
                    <label for="civil_status">Civil Status</label>
                    <select class="form-control" id="civil_status" name="civil_status">
                        <option value="Single" {{ old('civil_status') == 'Single' ? 'selected' : '' }}>Single</option>
                        <option value="Married" {{ old('civil_status') == 'Married' ? 'selected' : '' }}>Married</option>
                        <option value="Divorced" {{ old('civil_status') == 'Divorced' ? 'selected' : '' }}>Divorced</option>
                        <option value="Widowed" {{ old('civil_status') == 'Widowed' ? 'selected' : '' }}>Widowed</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group mb-2">
                    <label for="employee_type">Employee Type</label>
                    <select class="form-control" id="employee_type" name="employee_type">
                        <option value="Regular" {{ old('employee_type') == 'Regular' ? 'selected' : '' }}>Regular</option>
                        <option value="Contractual" {{ old('employee_type') == 'Contractual' ? 'selected' : '' }}>Contractual</option>
                        <option value="Part-Time" {{ old('employee_type') == 'Part-Time' ? 'selected' : '' }}>Part-Time</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="text-center mt-3">
            <button type="submit" class="btn btn-primary">Create Employee</button>
        </div>
    </form>
</div>
@endsection
