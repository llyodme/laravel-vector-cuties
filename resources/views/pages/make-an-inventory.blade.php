@extends('layouts.master')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Make an Inventory</h1>
   

    <form>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label>Item Name</label>
                    <input type="text" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Date</label>
                    <input type="date" class="form-control">
                </div>
            </div>
           
            <div class="col-md-4">
                <div class="form-group">
                    <label>Quantity #</label>
                    <input type="text" class="form-control" placeholder="#">
                </div>
            </div>
            
        </div>
            
        <button type="submit" class="btn btn-primary">Save</button>   
    </form>
    
  
</div>
<!-- /.container-fluid -->

@endsection