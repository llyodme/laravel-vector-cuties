@extends('layouts.master')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Add Appointment</h1>
   

    <form>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label>Patient Name</label>
                    <input type="text" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Appointment Date</label>
                    <input type="date" class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control" placeholder="Address">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Contact #</label>
                    <input type="text" class="form-control" placeholder="Contact Number">
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
                        <input type="text" class="form-control" id="inlineFormInputGroup">
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Status</label>
                    <select class="form-control form-control-m">
                        <option>Pending</option>
                        <option>Approved</option>
                        <option>Cancelled</option>
                        <option>Rejected</option>
                    </select>
                </div>
            </div>
            
            <div class="col-md-6 mb-3">
                <label for="exampleFormControlTextarea1">Services</label>
                <textarea class="form-control" rows="3"></textarea>
            </div>
        </div>
            
        <button type="submit" class="btn btn-primary">Save</button>   
    </form>
    
  
</div>
<!-- /.container-fluid -->

@endsection