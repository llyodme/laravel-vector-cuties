@extends('layouts.master')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Patients DataTables</h6>
            <div class="row">
                <div class="col-md-6 mt-2">
                    <a href="{{ route('patients.create') }}" class="btn btn-primary btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-plus"></i>
                        </span>
                        <span class="text">Add New Patient Record</span>
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
                            <th>Patient ID</th>
                            <th>First name</th>
                            <th>Middle name</th>
                            <th>Last name</th>
                            <th>Address</th>
                            <th>Birth Date</th>
                            <th>Gender</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Patient ID</th>
                            <th>First name</th>
                            <th>Middle name</th>
                            <th>Last name</th>
                            <th>Address</th>
                            <th>Birth Date</th>
                            <th>Gender</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($patient as $patients)
                        <tr>
                            <td>{{$patients->pat_id}}</td>
                            <td>{{$patients->pat_fname}}</td>
                            <td>{{$patients->pat_mname}}</td>
                            <td>{{$patients->pat_lname}}</td>
                            <td>{{$patients->pat_address}}</td>
                            <td>{{$patients->pat_birth}}</td>
                            <td>{{$patients->pat_gender}}</td>
                            <td class="text-center">
                                <a href="{{ route('patients.edit', $patients->pat_id)}}" class="btn btn-success btn-sm">Edit</a>
                                <form action="{{ route('patients.destroy', $patients->pat_id)}}" method="post" style="display: inline-block">
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