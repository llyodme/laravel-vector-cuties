@extends('layouts.master')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Add Record</h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank"
            href="https://datatables.net">official DataTables documentation</a>.</p>

    <form>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label>First Name</label>
                    <input type="text" class="form-control" placeholder="First Name">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Middle Name</label>
                    <input type="text" class="form-control" placeholder="Middle Name">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" class="form-control"  placeholder="Last Name">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Gender</label>
                    <select class="form-control form-control-m">
                        <option>Male</option>
                        <option>Female</option>
                    </select>
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
                    <label>Birthdate</label>
                    <input type="date" class="form-control">
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <label for="exampleFormControlTextarea1">Description of Patient</label>
                <textarea class="form-control" rows="3"></textarea>
            </div>
        </div>
            
        <button type="submit" class="btn btn-primary">Save</button>   
    </form>
    
  
</div>
<!-- /.container-fluid -->

@endsection