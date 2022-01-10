@extends('layouts.master')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Inventory Tables</h6>
            <div class="row">
                <div class="col-md-6 mt-2">
                    <a href="{{ route('inventory.create') }}" class="btn btn-primary btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-plus"></i>
                        </span>
                        <span class="text">Add Item Inventory</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="card-header py-3">
           
            <div class="row">
                <div class="col-md-6 mt-2">
                    <a href="{{ route('inventory.create') }}" class="btn btn-primary btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-plus"></i>
                        </span>
                        <span class="text">Make Inventory</span>
                    </a>
                </div>
            </div>
        </div>
        @if(session()->get('success'))
        <div class="alert alert-success">
          {{ session()->get('success') }}  
        </div>
        @endif
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Item Name</th>
                            <th>Quantity</th>
                            <th>Expiration of Item</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Item Name</th>
                            <th>Quantity</th>
                            <th>Expiration of Item</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($inventory as $inventorys)
                        <tr>
                            <td>{{$inventorys->inv_id}}</td>
                            <td>{{$inventorys->inv_itemname}}</td>
                            <td>{{$inventorys->inv_quantity}}</td>
                            <td>{{$inventorys->inv_exp_date}}</td>
                            <td>{{$inventorys->inv_description}}</td>
                            <td class="text-center">
                                <a href="{{ route('inventory.edit', $inventorys->inv_id)}}" class="btn btn-success btn-sm">Edit</a>
                                <form action="{{ route('inventory.destroy', $inventorys->inv_id)}}" method="post" style="display: inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

@endsection