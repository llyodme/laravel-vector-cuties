@extends('layouts.master')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank"
            href="https://datatables.net">official DataTables documentation</a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Age</th>
                            <th>Birth Date</th>
                            <th>Gender</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Age</th>
                            <th>Birth Date</th>
                            <th>Gender</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                         
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>1989/04/25</td>
                           <td>Male</td>
                        </tr>
                        <tr>
                            <td>Garrett Winters</td>
        
                            <td>Tokyo</td>
                            <td>63</td>
                            <td>1989/07/25</td>
                            <td>Female</td>
                        </tr>
                        <tr>
                            <td>Ashton Cox</td>
                       
                            <td>San Francisco</td>
                            <td>66</td>
                            <td>1989/01/12</td>
                            <td>Female</td>
                        </tr>
                        <tr>
                            <td>Cedric Kelly</td>
                            <td>Edinburgh</td>
                            <td>22</td>
                            <td>1989/03/29</td>
                            <td>Male</td>
                        </tr>
                        <tr>
                            <td>Airi Satou</td>

                            <td>Tokyo</td>
                            <td>33</td>
                            <td>1989/11/28</td>
                            <td>Female</td>
                        </tr>
                        <tr>
                            <td>Brielle Williamson</td>
  
                            <td>New York</td>
                            <td>61</td>
                            <td>1989/12/02</td>
                            <td>Male</td>
                        </tr>
                        <tr>
                            <td>Herrod Chandler</td>

                            <td>San Francisco</td>
                            <td>59</td>
                            <td>1989/08/06</td>
                            <td>Male</td>
                        </tr>
                        <tr>
                            <td>Rhona Davidson</td>
                
                            <td>Tokyo</td>
                            <td>55</td>
                            <td>1989/10/14</td>
                            <td>Female</td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

@endsection