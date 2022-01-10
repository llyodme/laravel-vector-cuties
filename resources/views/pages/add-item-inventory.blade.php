@extends('layouts.master')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Add Item</h1>
   
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form method="post" action="{{ route('inventory.store') }}">
        @csrf
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label>Item Name</label>
                    <input type="text" name="inv_itemname" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Date</label>
                    <input name="inv_date" type="date" class="form-control">
                </div>
            </div>
           
            <div class="col-md-4">
                <div class="form-group">
                    <label>Quantity #</label>
                    <input type="text" name="inv_quantity" class="form-control" placeholder="#">
                </div>
            </div>
            <div class="col-md">
                <div class="form-group">
                    <label>Expiration Date Item</label>
                    <input name="inv_exp_date" type="date" class="form-control">
                </div>
            </div>
            
            <div class="col-md-6 mb-3">
                <label for="exampleFormControlTextarea1">Description</label>
                <textarea name="inv_description" class="form-control" rows="3"></textarea>
            </div>
        </div>
            
        <button type="submit" class="btn btn-primary">Save</button>   
    </form>
    
  
</div>
<!-- /.container-fluid -->

@endsection