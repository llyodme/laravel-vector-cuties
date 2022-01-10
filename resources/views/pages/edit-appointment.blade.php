@extends('layouts.master')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Edit Appointment</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

    <form method="post" action="{{ route('appointments.update', $app->app_id) }}">
        @csrf
        @method('PATCH')
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label>Patient Name</label>
                    <input name="app_name" value="{{ $app->app_name }}" type="text" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Appointment Date</label>
                    <input value="{{$app->app_date}}" name="app_date" type="datetime-local" class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Address</label>
                    <input name="app_address" value="{{ $app->app_address }}" type="text" class="form-control" placeholder="Address">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Contact #</label>
                    <input name="app_contact" value="{{ $app->app_contact}}" type="text" class="form-control" placeholder="Contact Number">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Email </label>
                    <label class="sr-only" for="inlineFormInputGroup">Username</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                        <div class="input-group-text">Email</div>
                        </div>
                        <input name="app_email" value="{{ $app->app_email }}" type="text" class="form-control" id="inlineFormInputGroup">
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Status</label>
                    <select name="app_status" class="form-control form-control-m">
                        <option>value="{{ $app->app_status }}" </option>
                        <option>Approved</option>
                        <option>Cancelled</option>
                        <option>Rejected</option>
                    </select>
                </div>
            </div>
            
            <div class="col-md-6 mb-3">
                <label for="exampleFormControlTextarea1">Services</label>
                <textarea name="app_services" class="form-control" rows="3">{{ $app->app_services }}</textarea>
            </div>
        </div>
            
        <button type="submit" class="btn btn-primary">Save</button>   
    </form>
    
  
</div>
<!-- /.container-fluid -->

@endsection