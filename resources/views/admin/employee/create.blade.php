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
            <!-- Employee ID -->
            <div class="col-md-6">
                <div class="form-group mb-2">
                    <label for="employee_id">Employee ID</label>
                    <input type="text" class="form-control" id="employee_id" name="employee_id" value="{{ old('employee_id') }}" required>
                    @error('employee_id')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Last Name -->
            <div class="col-md-6">
                <div class="form-group mb-2">
                    <label for="last_name">Last Name</label>
                    <input type="text" class="form-control" id="last_name" name="last_name" value="{{ old('last_name') }}" required>
                    @error('last_name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- First Name -->
            <div class="col-md-6">
                <div class="form-group mb-2">
                    <label for="first_name">First Name</label>
                    <input type="text" class="form-control" id="first_name" name="first_name" value="{{ old('first_name') }}" required>
                    @error('first_name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Middle Name -->
            <div class="col-md-6">
                <div class="form-group mb-2">
                    <label for="middle_name">Middle Name</label>
                    <input type="text" class="form-control" id="middle_name" name="middle_name" value="{{ old('middle_name') }}">
                    @error('middle_name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Is Active -->
            <div class="col-md-6">
                <div class="form-group mb-2">
                    <label for="is_active">Is Active</label>
                    <select class="form-control" id="is_active" name="is_active">
                        <option value="1" {{ old('is_active') == '1' ? 'selected' : '' }}>Yes</option>
                        <option value="0" {{ old('is_active') == '0' ? 'selected' : '' }}>No</option>
                    </select>
                    @error('is_active')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Work Position -->
            <div class="col-md-6">
                <div class="form-group mb-2">
                    <label for="work_position">Work Position</label>
                    <input type="text" class="form-control" id="work_position" name="work_position" value="{{ old('work_position') }}" required>
                    @error('work_position')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Location Code -->
            <div class="col-md-6">
                <div class="form-group mb-2">
                    <label for="location_code">Location Code</label>
                    <input type="text" class="form-control" id="location_code" name="location_code" value="{{ old('location_code') }}" required>
                    @error('location_code')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Department Code -->
            <div class="col-md-6">
                <div class="form-group mb-2">
                    <label for="dept_code">Department Code</label>
                    <input type="text" class="form-control" id="dept_code" name="dept_code" value="{{ old('dept_code') }}" required>
                    @error('dept_code')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Address -->
            <div class="col-md-6">
                <div class="form-group mb-2">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" name="address" value="{{ old('address') }}" required>
                    @error('address')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Address 2 -->
            <div class="col-md-6">
                <div class="form-group mb-2">
                    <label for="address2">Address 2</label>
                    <input type="text" class="form-control" id="address2" name="address2" value="{{ old('address2') }}">
                    @error('address2')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Phone No -->
            <div class="col-md-6">
                <div class="form-group mb-2">
                    <label for="phone_no">Phone No</label>
                    <input type="text" class="form-control" id="phone_no" name="phone_no" value="{{ old('phone_no') }}">
                    @error('phone_no')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Email -->
            <div class="col-md-6">
                <div class="form-group mb-2">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Contact Person -->
            <div class="col-md-6">
                <div class="form-group mb-2">
                    <label for="contact_person">Contact Person</label>
                    <input type="text" class="form-control" id="contact_person" name="contact_person" value="{{ old('contact_person') }}">
                    @error('contact_person')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Contact Address -->
            <div class="col-md-6">
                <div class="form-group mb-2">
                    <label for="contact_address">Contact Address</label>
                    <input type="text" class="form-control" id="contact_address" name="contact_address" value="{{ old('contact_address') }}">
                    @error('contact_address')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Contact No -->
            <div class="col-md-6">
                <div class="form-group mb-2">
                    <label for="contact_no">Contact No</label>
                    <input type="text" class="form-control" id="contact_no" name="contact_no" value="{{ old('contact_no') }}">
                    @error('contact_no')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Sex -->
            <div class="col-md-6">
                <div class="form-group mb-2">
                    <label for="sex">Sex</label>
                    <select class="form-control" id="sex" name="sex" required>
                        <option value="M" {{ old('sex') == 'M' ? 'selected' : '' }}>Male</option>
                        <option value="F" {{ old('sex') == 'F' ? 'selected' : '' }}>Female</option>
                    </select>
                    @error('sex')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Birthday -->
            <div class="col-md-6">
                <div class="form-group mb-2">
                    <label for="birthday">Birthday</label>
                    <input type="date" class="form-control" id="birthday" name="birthday" value="{{ old('birthday') }}" required>
                    @error('birthday')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Civil Status -->
            <div class="col-md-6">
                <div class="form-group mb-2">
                    <label for="civil_status">Civil Status</label>
                    <input type="text" class="form-control" id="civil_status" name="civil_status" value="{{ old('civil_status') }}" required>
                    @error('civil_status')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Blood Type -->
            <div class="col-md-6">
                <div class="form-group mb-2">
                    <label for="blood_type">Blood Type</label>
                    <input type="text" class="form-control" id="blood_type" name="blood_type" value="{{ old('blood_type') }}">
                    @error('blood_type')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Date of Hire -->
            <div class="col-md-6">
                <div class="form-group mb-2">
                    <label for="date_of_hire">Date of Hire</label>
                    <input type="date" class="form-control" id="date_of_hire" name="date_of_hire" value="{{ old('date_of_hire') }}" required>
                    @error('date_of_hire')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Employee Type -->
            <div class="col-md-6">
                <div class="form-group mb-2">
                    <label for="employee_type">Employee Type</label>
                    <input type="text" class="form-control" id="employee_type" name="employee_type" value="{{ old('employee_type') }}" required>
                    @error('employee_type')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Rate -->
            <div class="col-md-6">
                <div class="form-group mb-2">
                    <label for="rate">Rate</label>
                    <input type="number" step="0.01" class="form-control" id="rate" name="rate" value="{{ old('rate') }}" required>
                    @error('rate')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Rate Unit -->
            <div class="col-md-6">
                <div class="form-group mb-2">
                    <label for="rate_unit">Rate Unit</label>
                    <input type="text" class="form-control" id="rate_unit" name="rate_unit" value="{{ old('rate_unit') }}" required>
                    @error('rate_unit')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Pay Type -->
            <div class="col-md-6">
                <div class="form-group mb-2">
                    <label for="pay_type">Pay Type</label>
                    <input type="text" class="form-control" id="pay_type" name="pay_type" value="{{ old('pay_type') }}" required>
                    @error('pay_type')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- No. of Days in a Month -->
            <div class="col-md-6">
                <div class="form-group mb-2">
                    <label for="no_of_days_in_a_month">No. of Days in a Month</label>
                    <input type="number" class="form-control" id="no_of_days_in_a_month" name="no_of_days_in_a_month" value="{{ old('no_of_days_in_a_month') }}" required>
                    @error('no_of_days_in_a_month')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- No. of Days in a Week -->
            <div class="col-md-6">
                <div class="form-group mb-2">
                    <label for="no_of_days_in_a_week">No. of Days in a Week</label>
                    <input type="number" class="form-control" id="no_of_days_in_a_week" name="no_of_days_in_a_week" value="{{ old('no_of_days_in_a_week') }}" required>
                    @error('no_of_days_in_a_week')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- No. of Work Hours in a Day -->
            <div class="col-md-6">
                <div class="form-group mb-2">
                    <label for="no_of_work_hours_in_a_day">No. of Work Hours in a Day</label>
                    <input type="number" class="form-control" id="no_of_work_hours_in_a_day" name="no_of_work_hours_in_a_day" value="{{ old('no_of_work_hours_in_a_day') }}" required>
                    @error('no_of_work_hours_in_a_day')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- No. of Work Days -->
            <div class="col-md-6">
                <div class="form-group mb-2">
                    <label for="no_of_work_days">No. of Work Days</label>
                    <input type="number" class="form-control" id="no_of_work_days" name="no_of_work_days" value="{{ old('no_of_work_days') }}" required>
                    @error('no_of_work_days')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Submit Button -->
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Create Employee</button>
            </div>
        </div>
    </form>
</div>
@endsection
