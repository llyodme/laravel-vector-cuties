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
        
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No #</th>
                            <th>Patient Name</th>
                            <th>Appointment Date</th>
                            <th>Patient Email</th>
                            <th>Services</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No #</th>
                            <th>Patient Name</th>
                            <th>Appointment Date</th>
                            <th>Patient Email</th>
                            <th>Services</th>
                            <th>Status</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>41</td>
                            <td>Tiger Nixon</td>
                            <td>2011/04/25</td>
                            <td>Edinburgh@gmail.com</td>
                            <td>Tooth Extraction</td>
                            <td>Pending</td>
                        </tr>
                        <tr>
                            <td>63</td>
                            <td>Garrett Winters</td>
                            <td>2011/07/25</td>
                            <td>Tokyo@gmail.com</td>
                            <td>Meeting</td>
                            <td>Pending</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

@endsection