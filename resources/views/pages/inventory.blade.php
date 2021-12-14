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
                    <a href="{{ route('patients.create') }}" class="btn btn-primary btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-plus"></i>
                        </span>
                        <span class="text">Make an Inventory</span>
                    </a>
                </div>
            </div>
        </div>
        
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Item Name</th>
                          
                            <th>Quantity</th>
                           
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Item Name</th>
                           
                            <th>Quantity</th>

                            <th>Description</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>System Architect</td>
                           
                            <td>61</td>
                            <td>2011/04/25</td>
                        
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Accountant</td>
                         
                            <td>63</td>
                            <td>2011/07/25</td>
                 
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Junior Technical Author</td>
                         
                            <td>66</td>
                            <td>2009/01/12</td>
                            
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Senior Javascript Developer</td>
                      
                            <td>22</td>
                            <td>2012/03/29</td>
                       
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Accountant</td>
                        
                            <td>33</td>
                            <td>2008/11/28</td>
                           
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Integration Specialist</td>
                          
                            <td>61</td>
                            <td>2012/12/02</td>
                         
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Sales Assistant</td>
                        
                            <td>59</td>
                            <td>2012/08/06</td>
                        
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Integration Specialist</td>
                         
                            <td>55</td>
                            <td>2010/10/14</td>
                           
                        </tr>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

@endsection