@extends('layouts.master')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Appointments</h6>
            <div class="row">
                <div class="col-md-6 mt-2">
                    <a href="{{ route('appointments.create') }}" class="btn btn-primary btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-plus"></i>
                        </span>
                        <span class="text">Make an Appointment</span>
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
                            <th>No #</th>
                            <th>Name</th>
                            <th>Appointment Date</th>
                            <th>Address</th>
                            <th>Contact #</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Services</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No #</th>
                            <th>Name</th>
                            <th>Appointment Date</th>
                            <th>Address</th>
                            <th>Contact #</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Services</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($app as $apps)
                        <tr>
                            <td>{{$apps->app_id}}</td>
                            <td>{{$apps->app_name}}</td>
                            <td>{{$apps->app_date}}</td>
                            <td>{{$apps->app_address}}</td>
                            <td>{{$apps->app_contact}}</td>
                            <td>{{$apps->app_email}}</td>
                            <td>{{$apps->app_status}}</td>
                            <td>{{$apps->app_services}}</td>
                            <td class="text-center">
                                <a href="{{ route('appointments.edit', $apps->app_id)}}" class="btn btn-success btn-sm">Edit</a>
                                <form action="{{ route('appointments.destroy', $apps->app_id)}}" method="post" style="display: inline-block">
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